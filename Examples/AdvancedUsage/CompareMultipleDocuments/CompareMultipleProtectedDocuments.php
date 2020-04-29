<?php

use GroupDocs\Comparison\Model;
use GroupDocs\Comparison\Model\Requests;

// This example demonstrates how to compare multiple password-protected documents
class CompareMultipleProtectedDocuments {
    public static function Run() {
        $apiInstance = Utils::GetCompareApiInstance();

		$sourceFile = new Model\FileInfo();
		$sourceFile->setFilePath("source_files/word/source.docx");
		$sourceFile->setPassword("1231");
		$targetFile = new Model\FileInfo();
		$targetFile->setFilePath("target_files/word/target.docx");
		$targetFile->setPassword("5784");
		$targetFile1 = new Model\FileInfo();
		$targetFile1->setFilePath("target_files/word/target_1.docx");
		$targetFile1->setPassword("5784");
		$targetFile2 = new Model\FileInfo();
		$targetFile2->setFilePath("target_files/word/target_2.docx");
		$targetFile2->setPassword("5784");
		$options = new Model\ComparisonOptions();
		$options->setSourceFile($sourceFile);
		$options->setTargetFiles([$targetFile, $targetFile1, $targetFile2]);
		$options->setOutputPath("output/result.docx");

		$request = new Requests\ComparisonsRequest($options);
		$response = $apiInstance->comparisons($request);
		
		echo "Output file link: ", $response->getHref();
        echo "\n";                            
    }
}
