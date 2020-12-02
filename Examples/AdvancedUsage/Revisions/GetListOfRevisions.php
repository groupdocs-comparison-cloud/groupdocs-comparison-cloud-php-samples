<?php

use GroupDocs\Comparison\Model;
use GroupDocs\Comparison\Model\Requests;

// This example demonstrates how to get list of revisions of DOCX document
class GetListOfRevisions {
    public static function Run() {
        $apiInstance = Utils::GetReviewApiInstance();

		$sourceFile = new Model\FileInfo();
		$sourceFile->setFilePath("source_files/word/source_with_revs.docx");

		$revisions = $apiInstance->getRevisions(new Requests\GetRevisionsRequest($sourceFile));
		echo "Revisions count: ", count($revisions);
        echo "\n";                            
    }
}
