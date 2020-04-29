<?php

use GroupDocs\Comparison\Model;
use GroupDocs\Comparison\Model\Requests;

// This example demonstrates how to get document information
class GetDocumentInformation {
    public static function Run() {
        $apiInstance = Utils::GetInfoApiInstance();

		$fileInfo = new Model\FileInfo();
		$fileInfo->setFilePath("source_files/word/source.docx");				

		$request = new Requests\GetDocumentInfoRequest($fileInfo);
		$response = $apiInstance->getDocumentInfo($request);
		
		echo "InfoResult.PageCount: ", $response->getPageCount();
        echo "\n";                            
    }
}
