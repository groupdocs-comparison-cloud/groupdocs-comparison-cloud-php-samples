<?php

use GroupDocs\Comparison\Model;
use GroupDocs\Comparison\Model\Requests;

// This example demonstrates how to compare multiple documents with options
class CompareMultipleDocumentsOptions {
    public static function Run() {
        $apiInstance = Utils::GetCompareApiInstance();

		$sourceFile = new Model\FileInfo();
		$sourceFile->setFilePath("source_files/word/source.docx");
		$targetFile = new Model\FileInfo();
		$targetFile->setFilePath("target_files/word/target.docx");
		$targetFile1 = new Model\FileInfo();
		$targetFile1->setFilePath("target_files/word/target_1.docx");
		$targetFile2 = new Model\FileInfo();
		$targetFile2->setFilePath("target_files/word/target_2.docx");
		$options = new Model\ComparisonOptions();
		$options->setSourceFile($sourceFile);
		$options->setTargetFiles([$targetFile, $targetFile1, $targetFile2]);
		$options->setOutputPath("output/result.docx");
		$insertedItemsStyle = new Model\ItemsStyle();
		$insertedItemsStyle->setFontColor("16711680");
		$settings = new Model\Settings();
		$settings->setInsertedItemsStyle($insertedItemsStyle);
		$options->setSettings($settings);

		$request = new Requests\ComparisonsRequest($options);
		$response = $apiInstance->comparisons($request);
		
		echo "Output file link: ", $response->getHref();
        echo "\n";                            
    }
}
