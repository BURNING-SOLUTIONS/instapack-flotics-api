<?php


namespace App\Utils;


use App\Traits\Base64Manager;
use App\Interfaces\IFileManager;
use MicrosoftAzure\Storage\Blob\BlobRestProxy;
use MicrosoftAzure\Storage\Common\Exceptions\ServiceException;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class AzureFileManager implements IFileManager
{
    use Base64Manager;

    private $connectionString;

    public function __construct($connectionString)
    {
        $this->connectionString = $connectionString;
    }

    public function uploadBase64File(string $base64, string $azureRoute, string $prefix, string $identificator): string
    {
        $extension = $this->getBase64Extension($base64);
        $fileData = $this->getBase64FileData($base64);
        $tmpBasePath = $prefix . $identificator . '.' . $extension;
        $upload = $this->base64ToFile($fileData, $tmpBasePath);
        $file = new UploadedFile($tmpBasePath, $tmpBasePath, $extension);
        $this->uploadFile($file, $azureRoute, $tmpBasePath);

        return $tmpBasePath;
    }

    public function uploadFile(UploadedFile $file, string $container_name, string $upload_name = "")
    {
        $blobClient = BlobRestProxy::createBlobService($this->connectionString);
        $file_path = $file->getPathName();
        $file_mime_type = $file->getClientOriginalExtension();
        $content = fopen($file_path, "r");
        $file_original_name = $file->getClientOriginalName();
        $file_upload_name = $upload_name ?: $file_original_name;
        try {
            //Upload blob
            $blobClient->createBlockBlob($container_name, $file_upload_name, $content);
        } catch (ServiceException $e) {
            $code = $e->getCode();
            $error_message = $e->getMessage();
        }
    }

    public function getFile($file, $container_name)
    {

    }


}