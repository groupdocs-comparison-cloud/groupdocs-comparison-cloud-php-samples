<?php

use GroupDocs\Comparison\Model;
use GroupDocs\Comparison\Model\Requests;

// This example demonstrates how to get list of changes of compared documents
class GetListOfChanges {
    public static function Run() {
        $apiInstance = Utils::GetCompareApiInstance();

		$sourceFile = new Model\FileInfo();
		$sourceFile->setFilePath("source_files/word/source.docx");
		$targetFile = new Model\FileInfo();
		$targetFile->setFilePath("target_files/word/target.docx");
		$options = new Model\UpdatesOptions();
		$options->setSourceFile($sourceFile);
		$options->setTargetFiles([$targetFile]);
		$options->setOutputPath("output/result.docx");	

		$changes = $apiInstance->postChanges(new Requests\PostChangesRequest($options));
		echo "Changes count: ", count($changes);
        echo "\n";                            
    }
}
