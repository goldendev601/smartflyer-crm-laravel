<?php

namespace App\ModelsExtended;

use App\Models\ClientDiet;
use App\ModelsExtended\Interfaces\IHasFolderStoragePathModelInterface;
use App\ModelsExtended\Traits\HasImageUrlSavingModelTrait;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

/**
 * @property string|null $name
 * @property User|null $user
 * @property string|null $profile_picture_url
 * @property Collection|ClientAllergy[] $client_allergies
 * @property Collection|ClientDocument[] $client_documents
 */
class Client extends \App\Models\Client  implements IHasFolderStoragePathModelInterface
{
    use HasImageUrlSavingModelTrait;
    use Notifiable;

    protected $appends = ['profile_picture_url', 'name' ];

    /**
     * @return null|string
     */
    public function getProfilePictureUrlAttribute(): ?string
    {
        return $this->profile_picture_relative_url ? Storage::cloud()->url($this->profile_picture_relative_url) : null;
    }

    /**
     * @return Attribute
     */
    public function name(): Attribute
    {
        return new Attribute(function (){
           $v = Str::of($this->first_name)->trim();
           if( $this->middle_name ) $v->append(" " . $this->middle_name);
           if( $this->last_name ) $v->append(" " . $this->last_name);
           return (string)$v->trim();
        });
    }

    /**
     * Gets client created in less than 1 week
     *
     * @return int
     */
    public static function getNewClientCount()
    {
        return self::query()->whereDate("created_at", '>', now()->addWeeks(-1))->count();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public static function myClients()
    {
        return self::query()
            ->where('created_by_id', auth()->id());
    }

    public static function getClient()
    {
        return self::query();
    }

    /**
     * @param int $id
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Builder[]|Collection|Model|null|Client
     */
    public static function getMyClientById(int $id)
    {
        return self::myClients()->findOrFail($id);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Builder[]|Collection|Client[]
     */
    public static function getTopClients()
    {
        return self::myClients()->inRandomOrder()->limit(6)->get();
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'created_by_id');
    }

    public function client_diets()
    {
        return $this->hasMany(ClientDiet::class);
    }

    public function client_allergies()
    {
        return $this->hasMany(ClientAllergy::class);
    }


    public function client_loyalty_numbers()
	{
		return $this->hasMany(ClientLoyaltyNumber::class);
	}

    /**
     * Get traceable folder path
     */
    public function getFolderStorageRelativePath(): string
    {
        return sprintf(
            "clients/%s",
            $this->id
        );
    }

    public function client_documents()
    {
        return $this->hasMany(ClientDocument::class);
    }


    public static function generateRelativePath(UploadedFile $file, Client $client): string
    {
        return self::generateImageRelativePath($file, $client, "documents");
    }

    /**
     * @param UploadedFile $picture
     * @return ClientDocument|Model
     */
    public function storeProfilePicture(UploadedFile $picture): Model|Client
    {
        $document_url =  self::generateRelativePath( $picture,  $this);
        Storage::cloud()->put( $document_url, $picture->getContent() );
        $this->profile_picture_relative_url = $document_url;
        $this->updateQuietly();
        return $this;
    }
    public function validateUrlAndStorePicture($url): Model|Client
    {

        if(self::validateUrl($url)){
            if (@file_get_contents($url, 'r')) {
                $name = pathinfo($url, PATHINFO_FILENAME);
                $extension = pathinfo($url, PATHINFO_EXTENSION);
                $name = $name.'.'.$extension;
                $relative_url = self::generateRelativePathOfPicture($name, $this);
                Storage::cloud()->put($relative_url, file_get_contents($url));
                $this->profile_picture_relative_url = $relative_url;
                $this->update();
            }
            return $this;
        }


    }

    public function generateRelativePathOfPicture($picture, $client)
    {

       return 'clients/'.$client->id.'/documents/'.$picture;
    }
    public function validateUrl($url)
    {
       return filter_var($url, FILTER_VALIDATE_URL);
    }
}
