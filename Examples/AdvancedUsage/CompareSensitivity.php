<?php

use GroupDocs\Comparison\Model;
use GroupDocs\Comparison\Model\Requests;

// This example demonstrates how to compare documents with comparison sensitivity option
class CompareSensitivity {
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
		$settings = new Model\Settings();		
		$settings->setSensitivityOfComparison(100);
		$options->setSettings($settings);

		$request = new Requests\ComparisonsRequest($options);
		$response = $apiInstance->comparisons($request);
		
		echo "Output file link: ", $response->getHref();
        echo "\n";                            
    }
}
