<?php

include(dirname(__DIR__) . '\CommonUtils.php');

try {
    $apiInstance = CommonUtils::GetCompareApiInstance();

	$sourceFileInfo = new GroupDocs\Comparison\Model\FileInfo();
	$sourceFileInfo->setFilePath("comparisondocs\\source_protected.docx");
	$sourceFileInfo->setPassword("1231");

	// First target document
	$targetFileInfo1 = new GroupDocs\Comparison\Model\FileInfo();
	$targetFileInfo1->setFilePath("comparisondocs\\target_protected.docx");
	$targetFileInfo1->setPassword("5784");	
	
	// Second target document
	$targetFileInfo2 = new GroupDocs\Comparison\Model\FileInfo();
	$targetFileInfo2->setFilePath("comparisondocs\\target_2_protected.docx");
	$targetFileInfo2->setPassword("5784");	

	$options = new GroupDocs\Comparison\Model\Options();  
	$options->setSourceFile($sourceFileInfo);
	$options->setTargetFiles([$targetFileInfo1, $targetFileInfo2]);
	$options->setOutputPath("comparisondocs\\result_multi_protected.docx");

	$settings = new GroupDocs\Comparison\Model\Settings();            
	$settings->setGenerateSummaryPage(true);
	$settings->setShowDeletedContent(true);
	$settings->setStyleChangeDetection(true);
	$settings->setUseFramesForDelInsElements(false);
	$settings->setMetaData(null);
	$settings->setDetailLevel("Low");
	$settings->setDiagramMasterSetting(null);
	$settings->setCalculateComponentCoordinates(false);
	$settings->setCloneMetadata("Default");
	$settings->setMarkDeletedInsertedContentDeep(false);
	$settings->setPassword("1111");
	$settings->setPasswordSaveOption("User");      
	
	$deletedItemsStyle = new GroupDocs\Comparison\Model\ItemsStyle();                
	$deletedItemsStyle->setBeginSeparatorString("");
	$deletedItemsStyle->setEndSeparatorString("");
	$deletedItemsStyle->setFontColor("16711680");
	$deletedItemsStyle->setHighlightColor("16711680");
	$deletedItemsStyle->setBold(false);
	$deletedItemsStyle->setItalic(false);
	$deletedItemsStyle->setStrikeThrough(false);
	$settings->setDeletedItemsStyle($deletedItemsStyle);
	
	$insertedItemsStyle = new GroupDocs\Comparison\Model\ItemsStyle();                
	$insertedItemsStyle->setBeginSeparatorString("");
	$insertedItemsStyle->setEndSeparatorString("");
	$insertedItemsStyle->setFontColor("255");
	$insertedItemsStyle->setHighlightColor("255");
	$insertedItemsStyle->setBold(false);
	$insertedItemsStyle->setItalic(false);
	$insertedItemsStyle->setStrikeThrough(false);
	$settings->setInsertedItemsStyle($insertedItemsStyle);    
    
	$styleChangedItemsStyle = new GroupDocs\Comparison\Model\ItemsStyle();                
	$styleChangedItemsStyle->setBeginSeparatorString("");
	$styleChangedItemsStyle->setEndSeparatorString("");
	$styleChangedItemsStyle->setFontColor("65280");
	$styleChangedItemsStyle->setHighlightColor("65280");
	$styleChangedItemsStyle->setBold(false);
	$styleChangedItemsStyle->setItalic(false);
	$styleChangedItemsStyle->setStrikeThrough(false);
	$settings->setStyleChangedItemsStyle($styleChangedItemsStyle); 
	
	$options->setSettings($settings);

	$request = new GroupDocs\Comparison\Model\Requests\comparisonsRequest($options);
	$response = $apiInstance->comparisons($request);

    echo "Expected response type is Link: ", $response->getHref();
} catch (Exception $e) {
    echo "Something went wrong: ", $e->getMessage(), "\n";
}