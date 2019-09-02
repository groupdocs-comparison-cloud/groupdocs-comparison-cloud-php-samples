<?php

include(dirname(__DIR__) . '\CommonUtils.php');

	try {
		$apiInstance = CommonUtils::GetFolderApiInstance();

		$request = new GroupDocs\Comparison\Model\Requests\CopyFolderRequest("comparisondocs", "comparisondocs1", CommonUtils::$MyStorage, CommonUtils::$MyStorage);
		$apiInstance->copyFolder($request);
		
		echo "Expected response type is Void: 'comparisondocs' folder copied as 'comparisondocs1'.", "<br />";
	} catch (Exception $e) {
		echo "Something went wrong: ", $e->getMessage(), "\n";
	}
?>