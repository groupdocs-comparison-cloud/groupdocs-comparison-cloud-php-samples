<?php

// Utility class to hold the constants and static functions
class Utils {

    // TODO: Get your ClientId and ClientSecret at https://dashboard.groupdocs.cloud (free registration is required)
    static $ClientId = 'XXXX-XXXX-XXXX-XXXX';
    static $ClientSecret = 'XXXXXXXXXXXXXXXX';

    static $ApiBaseUrl = 'https://api.groupdocs.cloud';
	static $MyStorage = 'First Storage';

    // Getting the Compare API Instance
    public static function GetCompareApiInstance() {
        // intializing the configuration
        $configuration = new GroupDocs\Comparison\Configuration();

        // Seting the configurations
        $configuration->setAppSid(Utils::$ClientId);
        $configuration->setAppKey(Utils::$ClientSecret);
        $configuration->setApiBaseUrl(Utils::$ApiBaseUrl);

        // Retrun the new ComparisonAPI instance
        return new GroupDocs\Comparison\CompareApi($configuration);
    }

    // Getting the Info API Instance
    public static function GetInfoApiInstance() {
        // intializing the configuration
        $configuration = new GroupDocs\Comparison\Configuration();

        // Seting the configurations
        $configuration->setAppSid(Utils::$ClientId);
        $configuration->setAppKey(Utils::$ClientSecret);
        $configuration->setApiBaseUrl(Utils::$ApiBaseUrl);

        // Retrun the new Info instance
        return new GroupDocs\Comparison\InfoApi($configuration);
    }

    // Getting the Review API Instance
    public static function GetReviewApiInstance() {
        // intializing the configuration
        $configuration = new GroupDocs\Comparison\Configuration();

        // Seting the configurations
        $configuration->setAppSid(Utils::$ClientId);
        $configuration->setAppKey(Utils::$ClientSecret);
        $configuration->setApiBaseUrl(Utils::$ApiBaseUrl);

        // Retrun the new API instance
        return new GroupDocs\Comparison\ReviewApi($configuration);
    }    

	// Getting the Comparison StorageAPI API Instance
    public static function GetStorageApiInstance() {
        // intializing the configuration
        $configuration = new GroupDocs\Comparison\Configuration();

        // Seting the configurations
        $configuration->setAppSid(Utils::$ClientId);
        $configuration->setAppKey(Utils::$ClientSecret);
        $configuration->setApiBaseUrl(Utils::$ApiBaseUrl);

        // Retrun the new StorageApi instance
        return new GroupDocs\Comparison\StorageApi($configuration);
    }

     // Getting the Comparison FolderAPI API Instance
    public static function GetFolderApiInstance() {
        // intializing the configuration
        $configuration = new GroupDocs\Comparison\Configuration();

        // Seting the configurations
        $configuration->setAppSid(Utils::$ClientId);
        $configuration->setAppKey(Utils::$ClientSecret);
        $configuration->setApiBaseUrl(Utils::$ApiBaseUrl);

        // Retrun the new FolderApi instance
        return new GroupDocs\Comparison\FolderApi($configuration);
    }

	// Getting the Comparison FileAPI API Instance
    public static function GetFileApiInstance() {
        // intializing the configuration
        $configuration = new GroupDocs\Comparison\Configuration();

        // Seting the configurations
        $configuration->setAppSid(Utils::$ClientId);
        $configuration->setAppKey(Utils::$ClientSecret);
        $configuration->setApiBaseUrl(Utils::$ApiBaseUrl);

        // Retrun the new FileApi instance
        return new GroupDocs\Comparison\FileApi($configuration);
    }

    // Uploading sample files into storage
    public static function UploadResources() {
        $storageApi = self::GetStorageApiInstance();
        $fileApi = self::GetFileApiInstance();
        $folder = realpath(__DIR__ . '\Resources');
        $filePathInStorage = "";
        $dir_iterator = new \RecursiveDirectoryIterator($folder);
        $iterator = new \RecursiveIteratorIterator($dir_iterator, \RecursiveIteratorIterator::SELF_FIRST);
        echo 'Uploading file process executing...';
        echo "\n";
        foreach ($iterator as $file) {
            if (!$file->isDir()) {
                $filePath = $file->getPathName();
                $filePathInStorage = str_replace($folder . '\\', "", $filePath);
                echo $filePathInStorage;
                echo "\n";
                $isExistRequest = new \GroupDocs\Comparison\Model\Requests\objectExistsRequest($filePathInStorage);
                $isExistResponse = $storageApi->objectExists($isExistRequest);
                if (!$isExistResponse->getExists()) {
                    $putCreateRequest = new \GroupDocs\Comparison\Model\Requests\uploadFileRequest($filePathInStorage, $filePath);
                    $putCreateResponse = $fileApi->uploadFile($putCreateRequest);
                }
            }
        }        
    }
}
