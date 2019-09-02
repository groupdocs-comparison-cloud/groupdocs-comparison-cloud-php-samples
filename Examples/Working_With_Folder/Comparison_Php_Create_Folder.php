<?php

include(dirname(__DIR__) . '\CommonUtils.php');

	try {
		$apiInstance = CommonUtils::GetFolderApiInstance();

		$request = new GroupDocs\Comparison\Model\Requests\CreateFolderRequest("comparisondocs", CommonUtils::$MyStorage);
		$apiInstance->createFolder($request);
		
		echo "Expected response type is Void: 'comparisondocs' folder created.", "<br />";
	} catch (Exception $e) {
		echo "Something went wrong: ", $e->getMessage(), "\n";
	}
?>