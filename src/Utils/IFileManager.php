<?php


namespace App\Utils;


use Symfony\Component\HttpFoundation\File\UploadedFile;

interface IFileManager
{


    public function uploadFile(UploadedFile $file, string $pathWay, string $upload_name = "");

    public function getFile($file, $pathWay);


}