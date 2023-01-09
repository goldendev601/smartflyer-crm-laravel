<?php

namespace App\ModelsExtended;

use App\ModelsExtended\Traits\HasImageUrlSavingModelTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

/**
 * @property string $document_url
 */
class ClientDocument extends \App\Models\ClientDocument
{
    use HasImageUrlSavingModelTrait;

    protected $appends = ['document_url'];



    /**
     * Get traceable file name
     *
     * @param UploadedFile $file
     * @param Client $client
     * @return string
     */
    public static function generateRelativePath(UploadedFile $file, Client $client): string
    {
        return self::generateImageRelativePath($file, $client, "documents");
    }

    /**
     * @return string
     */
    public function getDocumentUrlAttribute(): string
    {
        return Storage::cloud()->url($this->document_relative_url);
    }

    /**
     * @param UploadedFile $document
     * @param Client $baseModel
     * @return ClientDocument|Model
     */
    public static function storeDocument(UploadedFile $document, Client $baseModel): Model|ClientDocument
    {
        $document_url = self::generateRelativePath($document, $baseModel);

        Storage::cloud()->put($document_url, $document->getContent());

        return $baseModel->client_documents()->create(
            [
                'document_name' => $document->getClientOriginalName(),
                'document_relative_url' => $document_url
            ]
        );
    }


    public static function deleted($id)
    {
        return  self::find($id)->delete();
    }
}
