<?php

use GroupDocs\Comparison\Model;
use GroupDocs\Comparison\Model\Requests;

// This example demonstrates how to set custom metadata for output document
class SetMetadata {
    public static function Run() {
        $apiInstance = Utils::GetCompareApiInstance();

		$sourceFile = new Model\FileInfo();
		$sourceFile->setFilePath("source_files/word/source.docx");
		$targetFile = new Model\FileInfo();
		$targetFile->setFilePath("target_files/word/target.docx");
		$options = new Model\ComparisonOptions();
		$options->setSourceFile($sourceFile);
		$options->setTargetFiles([$targetFile]);
		$options->setOutputPath("output/result.docx");
		$metadata = new Model\Metadata();
		$metadata->setAuthor("Tom");
		$metadata->setCompany("GroupDocs");
        $metadata->setLastSaveBy("Jack");
		$settings = new Model\Settings();
		$settings->setMetaData($metadata);
		$settings->setCloneMetadata(Model\Settings::CLONE_METADATA_FILE_AUTHOR);
		$options->setSettings($settings);

		$request = new Requests\ComparisonsRequest($options);
		$response = $apiInstance->comparisons($request);
		
		echo "Output file link: ", $response->getHref();
        echo "\n";                            
    }
}
