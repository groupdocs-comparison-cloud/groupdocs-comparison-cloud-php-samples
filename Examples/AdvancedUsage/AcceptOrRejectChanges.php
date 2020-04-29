<?php

use GroupDocs\Comparison\Model;
use GroupDocs\Comparison\Model\Requests;

// This example demonstrates how to accept/reject changes after documents compare
class AcceptOrRejectChanges {
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
		for ($i=0; $i < count($changes); $i++) { 
			$changes[$i]->setComparisonAction(Model\ChangeInfo::COMPARISON_ACTION_REJECT);
		}
		$changes[0]->setComparisonAction(Model\ChangeInfo::COMPARISON_ACTION_ACCEPT);
		$options->setChanges($changes);
		$request = new Requests\PutChangesDocumentRequest($options);
		$response = $apiInstance->putChangesDocument($request);
		
		echo "Output file link: ", $response->getHref();
        echo "\n";                            
    }
}
