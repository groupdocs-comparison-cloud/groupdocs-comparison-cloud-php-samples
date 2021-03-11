<?php
// Required dependencies and include autoload.php
require_once(__DIR__ . '\vendor\autoload.php');

include(__DIR__ . '\Utils.php');
include(__DIR__ . '\BasicUsage\GetSupportedFormats.php');
include(__DIR__ . '\BasicUsage\GetDocumentInformation.php');
include(__DIR__ . '\BasicUsage\CompareDocuments.php');
include(__DIR__ . '\BasicUsage\CompareDifferentFormats\ComparePdfDocuments.php');
include(__DIR__ . '\AdvancedUsage\CompareMultipleDocuments\CompareMultipleDocumentsOptions.php');
include(__DIR__ . '\AdvancedUsage\CompareMultipleDocuments\CompareMultipleProtectedDocuments.php');
include(__DIR__ . '\AdvancedUsage\SaveOptions\SetMetadata.php');
include(__DIR__ . '\AdvancedUsage\SaveOptions\SetPassword.php');
include(__DIR__ . '\AdvancedUsage\AcceptOrRejectChanges.php');
include(__DIR__ . '\AdvancedUsage\CompareProtectedDocuments.php');
include(__DIR__ . '\AdvancedUsage\CompareSensitivity.php');
include(__DIR__ . '\AdvancedUsage\CustomizeChangesStyles.php');
include(__DIR__ . '\AdvancedUsage\GetChangesCoordinates.php');
include(__DIR__ . '\AdvancedUsage\GetListOfChanges.php');
include(__DIR__ . '\AdvancedUsage\Revisions\GetListOfRevisions.php');
include(__DIR__ . '\AdvancedUsage\Revisions\ApplyRevisions.php');
include(__DIR__ . '\AdvancedUsage\Revisions\AcceptAllRevisions.php');
include(__DIR__ . '\AdvancedUsage\Revisions\RejectAllRevisions.php');

// Uploading sample files into storage
Utils::UploadResources();

// Basic usage Examples
GetSupportedFormats::Run();
GetDocumentInformation::Run();
CompareDocuments::Run();
ComparePdfDocuments::Run();

// Advanced usage Examples
CompareMultipleDocumentsOptions::Run();
CompareMultipleProtectedDocuments::Run();
SetMetadata::Run();
SetPassword::Run();
AcceptOrRejectChanges::Run();
CompareProtectedDocuments::Run();
CompareSensitivity::Run();
CustomizeChangesStyles::Run();
GetChangesCoordinates::Run();
GetListOfChanges::Run();
GetListOfRevisions::Run();
ApplyRevisions::Run();
AcceptAllRevisions::Run();
RejectAllRevisions::Run();

