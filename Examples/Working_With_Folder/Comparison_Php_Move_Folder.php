<?php

include(dirname(__DIR__) . '\CommonUtils.php');

	try {
		$apiInstance = CommonUtils::GetFolderApiInstance();

		$request = new GroupDocs\Comparison\Model\Requests\MoveFolderRequest("comparisondocs1", "comparisondocs1\\comparisondocs1", CommonUtils::$MyStorage, CommonUtils::$MyStorage, true);
		$apiInstance->moveFolder($request);
		
		echo "Expected response type is Void: 'comparisondocs1' folder moved to 'comparisondocs1/comparisondocs1'.", "<br />";
	} catch (Exception $e) {
		echo "Something went wrong: ", $e->getMessage(), "\n";
	}
?>