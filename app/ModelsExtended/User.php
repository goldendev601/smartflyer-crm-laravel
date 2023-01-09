<?php

namespace App\ModelsExtended;

use App\ModelsExtended\Interfaces\IHasFolderStoragePathModelInterface;
use App\ModelsExtended\Traits\HasImageUrlSavingModelTrait;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\MustVerifyEmail;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Notifications\Notifiable;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Laravel\Sanctum\HasApiTokens;

/**
 * @property string|null $image_url
 */
class User extends \App\Models\User implements
    AuthenticatableContract,
    AuthorizableContract,
    CanResetPasswordContract,
    \Illuminate\Contracts\Auth\MustVerifyEmail,
    IHasFolderStoragePathModelInterface
{
    use HasApiTokens;
    use HasFactory, Notifiable;
    use Authenticatable, Authorizable, CanResetPassword, MustVerifyEmail;
    use HasImageUrlSavingModelTrait;

    protected $appends = [ 'image_url' ];

    const DEFAULT_ADMIN = 1;

    /**
     * @param string $email
     * @return Builder|Model|User
     */
    public static function getByEmail(string $email): Model|Builder|User
    {
        return self::query()->where( "email", $email )->firstOrFail();
    }

    /**
     * @param int $id
     * @return Builder|Model|User|null
     */
    public static function getById(int $id): Model|Builder|User|null
    {
        return self::query()->where( "id", $id )->first();
    }

    public function getFolderStorageRelativePath(): string
    {
        return "users/{$this->id}";
    }

    public static function generateRelativePath(UploadedFile $file, User $user): string
    {
        return self::generateImageRelativePath($file, $user, "documents");
    }
    /**
     * @param UploadedFile $picture
     * @return ClientDocument|Model
     */
    public function storeProfilePicture(UploadedFile $picture): Model|User
    {
        $document_url =  self::generateRelativePath( $picture,  $this);

        Storage::cloud()->put( $document_url, $picture->getContent() );
        $this->image_relative_url = $document_url;
        $this->updateQuietly();
        return $this;
    }

    public function userNotification()
    {
        return $this->hasMany(UserNotification::class);
    }

    public function notification()
    {
        return $this->belongsToMany(\App\Models\Notification::class, 'user_notifications')->withPivot('permission');
    }
}
