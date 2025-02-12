<?php

use GroupDocs\Comparison\Model;
use GroupDocs\Comparison\Model\Requests;

// This example demonstrates how to preview document
class CompareDocuments {
    public static function Run() {
        $apiInstance = Utils::GetPreviewApiInstance();

		$fileInfo = new Model\FileInfo();
		$fileInfo->setFilePath("source_files/word/source.docx");
		$options = new Model\PreviewOptions();
		$options->setFileInfo($fileInfo);
		$options->setFormat(Model\PreviewOptions::FORMAT_PNG);		
		$options->setOutputFolder("output");

		$request = new Requests\PreviewRequest($options);
		$response = $apiInstance->preview($request);
		
		echo "Output file count: ", count($response);
        echo "\n";                            
    }
}
