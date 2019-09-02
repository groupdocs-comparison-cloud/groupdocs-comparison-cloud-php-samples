<?php

include(dirname(__DIR__) . '\CommonUtils.php');

	try {
		$apiInstance = CommonUtils::GetFolderApiInstance();

		$request = new GroupDocs\Comparison\Model\Requests\DeleteFolderRequest("comparisondocs1\\comparisondocs1", CommonUtils::$MyStorage, true);
		$apiInstance->deleteFolder($request);
		
		echo "Expected response type is Void: 'comparisondocs1/comparisondocs1' folder deleted recursively.", "<br />";
	} catch (Exception $e) {
		echo "Something went wrong: ", $e->getMessage(), "\n";
	}
?>