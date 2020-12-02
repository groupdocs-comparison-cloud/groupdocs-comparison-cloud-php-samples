<?php

use GroupDocs\Comparison\Model;
use GroupDocs\Comparison\Model\Requests;

// This example demonstrates how to accept/reject revisions of DOCX document
class ApplyRevisions {
    public static function Run() {
        $apiInstance = Utils::GetReviewApiInstance();

		$sourceFile = new Model\FileInfo();
		$sourceFile->setFilePath("source_files/word/source_with_revs.docx");
		$options = new Model\ApplyRevisionsOptions();
		$options->setSourceFile($sourceFile);
		$options->setOutputPath("output/result.docx");

		$revisions = $apiInstance->getRevisions(new Requests\GetRevisionsRequest($sourceFile));
		for ($i=0; $i < count($revisions); $i++) { 
			$revisions[$i]->setAction(Model\RevisionInfo::ACTION_ACCEPT);
		}
		$options->setRevisions($revisions);
		$request = new Requests\ApplyRevisionsRequest($options);
		$response = $apiInstance->applyRevisions($request);
		
		echo "Output file link: ", $response->getHref();
        echo "\n";                            
    }
}
