<?php

use GroupDocs\Comparison\Model;
use GroupDocs\Comparison\Model\Requests;

// This example demonstrates how to compare  documents with customizing changes styles
class CustomizeChangesStyles {
    public static function Run() {
        $apiInstance = Utils::GetCompareApiInstance();

		$sourceFile = new Model\FileInfo();
		$sourceFile->setFilePath("source_files/word/source.docx");
		$targetFile = new Model\FileInfo();
		$targetFile->setFilePath("target_files/word/target.docx");		
		$options = new Model\ComparisonOptions();
		$options->setSourceFile($sourceFile);
		$options->setTargetFiles([$targetFile]);
		$options->setOutputPath("output/result.docx");

		$insertedItemsStyle = new Model\ItemsStyle();
		$insertedItemsStyle->setHighlightColor("14297642");
		$insertedItemsStyle->setFontColor("16711680");
		$insertedItemsStyle->setUnderline(true);

		$deletedItemsStyle = new Model\ItemsStyle();
		$deletedItemsStyle->setFontColor("14166746");
		$deletedItemsStyle->setBold(true);

		$changedItemsStyle = new Model\ItemsStyle();
		$changedItemsStyle->setFontColor("14320170");
		$changedItemsStyle->setItalic(true);

		$settings = new Model\Settings();
		$settings->setInsertedItemsStyle($insertedItemsStyle);
		$settings->setDeletedItemsStyle($deletedItemsStyle);
		$settings->setChangedItemsStyle($changedItemsStyle);
		$options->setSettings($settings);

		$request = new Requests\ComparisonsRequest($options);
		$response = $apiInstance->comparisons($request);
		
		echo "Output file link: ", $response->getHref();
        echo "\n";                            
    }
}
