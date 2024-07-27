<?php
session_start();
function CheckAuthentication() {
if (isset($_SESSION['username'])) { return false; } else { return true; }
}
$config['LicenseName'] = '';
$config['LicenseKey'] = '';
$baseUrl = '/clt/uploads/';
$baseDir = resolveUrl($baseUrl);
$config['DefaultResourceTypes'] = 'Images';
$config['UserFilesPath'] = '/clt/uploads/';
$config['Thumbnails'] = Array(
		'url' => $baseUrl,
		'directory' => $baseDir,
		'enabled' => true,
		'directAccess' => false,
		'maxWidth' => 115,
		'maxHeight' => 115,
		'bmpSupported' => false,
		'quality' => 80);
$config['Images'] = Array(
		'maxWidth' => 900,
		'maxHeight' => 900,
		'quality' => 80);
$config['RoleSessionVar'] = 'CKFinder_UserRole';
$config['AccessControl'][] = Array(
		'role' => '*',
		'resourceType' => '*',
		'folder' => '/',
		'folderView' => true,
		'folderCreate' => true,
		'folderRename' => true,
		'folderDelete' => true,
		'fileView' => true,
		'fileUpload' => true,
		'fileRename' => true,
		'fileDelete' => true);
$config['DefaultResourceTypes'] = '';
$config['ResourceType'][] = Array(
		'name' => 'Images',
		'url' => $baseUrl,
		'directory' => $baseDir,
		'maxSize' => "16M",
		'allowedExtensions' => 'bmp,gif,jpeg,jpg,png',
		'deniedExtensions' => '');
$config['CheckDoubleExtension'] = true;
$config['FilesystemEncoding'] = 'UTF-8';
$config['SecureImageUploads'] = true;
$config['CheckSizeAfterScaling'] = true;
$config['HtmlExtensions'] = array('html', 'htm', 'xml', 'js');
$config['HideFolders'] = Array(".svn", "CVS");
$config['HideFiles'] = Array(".*");
$config['ChmodFiles'] = 0777 ;
$config['ChmodFolders'] = 0755 ;
$config['ForceAscii'] = false;
include_once "plugins/imageresize/plugin.php";
include_once "plugins/fileeditor/plugin.php";
$config['plugin_imageresize']['smallThumb'] = '90x90';
$config['plugin_imageresize']['mediumThumb'] = '120x120';
$config['plugin_imageresize']['largeThumb'] = '180x180';