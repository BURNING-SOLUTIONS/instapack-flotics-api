<?php


namespace App\Utils;


use App\Utils\IFileManager;
use App\Utils\AzureFileManager;

//use IP\RestBundle\Helper\LocalFileManager;

class StorageFileManager

{

    private $fileManagerClass; #$fileManagerClass is the actual file manager name of the class object that should be created.
    private $connectionString;

    public function __construct(string $fileManagerClass, string $connectionString = "")
    {
        $this->fileManagerClass = $fileManagerClass;
        $this->connectionString = $connectionString;
    }

    # Dynamic Initialization of necessary Media File Manager , this class is passes by $fileManagerClass attr.
    public function getCurrentFileManager(): IFileManager
    {
        $class = $this->fileManagerClass;
        return (new $class($this->connectionString));
    }


}