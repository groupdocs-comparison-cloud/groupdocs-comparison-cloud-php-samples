<?php

// Required dependencies and include autoload.php
require_once(__DIR__ . '\vendor\autoload.php');

// Common class to hold the constants and static functions
class CommonUtils {

    // TODO: Get your AppSID and AppKey at https://dashboard.groupdocs.cloud (free registration is required)
    static $AppSid = 'XXXXX-XXXXX-XXXXX-XXXXX-XXXXX';
    static $AppKey = 'XXXXXXXXXXXXXXXXXXXX';
    static $ApiBaseUrl = 'https://api.groupdocs.cloud';
	static $MyStorage = 'XXXXX';

    // Getting the Compare API Instance
    public static function GetCompareApiInstance() {
        // intializing the configuration
        $configuration = new GroupDocs\Comparison\Configuration();

        // Seting the configurations
        $configuration->setAppSid(CommonUtils::$AppSid);
        $configuration->setAppKey(CommonUtils::$AppKey);
        $configuration->setApiBaseUrl(CommonUtils::$ApiBaseUrl);

        // Retrun the new CompareApi instance
        return new GroupDocs\Comparison\CompareApi($configuration);
    }

    // Getting the Info API Instance
    public static function GetInfoApiInstance() {
        // intializing the configuration
        $configuration = new GroupDocs\Comparison\Configuration();

        // Seting the configurations
        $configuration->setAppSid(CommonUtils::$AppSid);
        $configuration->setAppKey(CommonUtils::$AppKey);
        $configuration->setApiBaseUrl(CommonUtils::$ApiBaseUrl);

        // Retrun the new InfoApi instance
        return new GroupDocs\Comparison\InfoApi($configuration);
    }

     // Getting the Comparison StorageAPI API Instance
    public static function GetStorageApiInstance() {
        // intializing the configuration
        $configuration = new GroupDocs\Comparison\Configuration();

        // Seting the configurations
        $configuration->setAppSid(CommonUtils::$AppSid);
        $configuration->setAppKey(CommonUtils::$AppKey);

        // Retrun the new StorageApi instance
        return new GroupDocs\Comparison\StorageApi($configuration);
    }

     // Getting the Comparison FolderAPI API Instance
    public static function GetFolderApiInstance() {
        // intializing the configuration
        $configuration = new GroupDocs\Comparison\Configuration();

        // Seting the configurations
        $configuration->setAppSid(CommonUtils::$AppSid);
        $configuration->setAppKey(CommonUtils::$AppKey);

        // Retrun the new FolderApi instance
        return new GroupDocs\Comparison\FolderApi($configuration);
    }

	// Getting the Comparison FileAPI API Instance
    public static function GetFileApiInstance() {
        // intializing the configuration
        $configuration = new GroupDocs\Comparison\Configuration();

        // Seting the configurations
        $configuration->setAppSid(CommonUtils::$AppSid);
        $configuration->setAppKey(CommonUtils::$AppKey);

        // Retrun the new FileApi instance
        return new GroupDocs\Comparison\FileApi($configuration);
    }
}
