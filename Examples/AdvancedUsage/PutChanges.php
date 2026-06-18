<?php

use GroupDocs\Comparison\Model\Requests;

// This example demonstrates how to retrieve list of changes by uploading source and target files directly
class PutChanges {
    public static function Run() {
        $apiInstance = Utils::GetCompareApiInstance();

		$sourcePath = realpath(__DIR__ . '\..\Resources\source_files\word\source.docx');
		$targetPath = realpath(__DIR__ . '\..\Resources\target_files\word\target.docx');

		$request = new Requests\putChangesRequest($sourcePath, [$targetPath]);
		$changes = $apiInstance->putChanges($request);

		echo "Changes count: ", count($changes);
        echo "\n";
    }
}
