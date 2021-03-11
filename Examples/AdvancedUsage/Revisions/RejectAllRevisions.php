<?php

use GroupDocs\Comparison\Model;
use GroupDocs\Comparison\Model\Requests;

// This example demonstrates how to reject all revisions of DOCX document
class RejectAllRevisions {
    public static function Run() {
        $apiInstance = Utils::GetReviewApiInstance();

		$sourceFile = new Model\FileInfo();
		$sourceFile->setFilePath("source_files/word/source_with_revs.docx");
		$options = new Model\ApplyRevisionsOptions();
		$options->setSourceFile($sourceFile);
		$options->setRejectAll(true);
		$options->setOutputPath("output/result.docx");

		$request = new Requests\ApplyRevisionsRequest($options);
		$response = $apiInstance->applyRevisions($request);
		
		echo "Output file link: ", $response->getHref();
        echo "\n";                            
    }
}
