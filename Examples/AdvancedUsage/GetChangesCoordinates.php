<?php

use GroupDocs\Comparison\Model;
use GroupDocs\Comparison\Model\Requests;

// This example demonstrates how to get changes coordinates
class GetChangesCoordinates {
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
		$settings = new Model\Settings();
		$settings->setCalculateComponentCoordinates(true);
		$options->setSettings($settings);		

		$changes = $apiInstance->postChanges(new Requests\PostChangesRequest($options));
		for ($i=0; $i < 2; $i++) { 
			echo "Change Type: ", $changes[$i]->getType(), ", X: ", $changes[$i]->getBox()->getX(), ", Y: ", $changes[$i]->getBox()->getY(), ", Text: ", $changes[$i]->getText(), "\n";
		}
		echo "...";
        echo "\n";                            
    }
}
