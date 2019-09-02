<?php

include(dirname(__DIR__) . '\CommonUtils.php');

	try {
		$apiInstance = CommonUtils::GetFileApiInstance();

		$request = new GroupDocs\Comparison\Model\Requests\CopyFileRequest("comparisondocs\one-page.docx", "comparisondocs\one-page-copied.docx", CommonUtils::$MyStorage, CommonUtils::$MyStorage);
		$apiInstance->copyFile($request);
		
		echo "Expected response type is Void: 'comparisondocs/one-page.docx' file copied as 'comparisondocs/one-page-copied.docx'.";
	} catch (Exception $e) {
		echo "Something went wrong: ", $e->getMessage(), "\n";
	}
?>