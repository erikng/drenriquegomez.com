<?php if ((($pag == "config.php") || ($pag == "automotive.php") || ($pag == "general.php") || ($pag == "realestate.php") || ($pag == "profile.php")) ) { ?>

<script type="text/javascript" src="<?php echo $this_site; ?>ckeditor/ckeditor.js"></script>
<script type="text/javascript"> /* <![CDATA[ */ 
CKEDITOR.editorConfig = function( config )
{
config.language = 'en';
config.uiColor = '#aaaaaa';
config.scayt_autoStartup = true;
config.scayt_uiTabs = '0,0,0';
config.scayt_sLang = 'en_US';
};

CKEDITOR.config.toolbar_Full =
[
	['Undo','Redo','RemoveFormat'],
	['Bold','Italic','Underline','Strike','-','Subscript','Superscript'],
    ['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
	['NumberedList','BulletedList'],
    ['Link','Unlink'],
	['TextColor','BGColor'],
	['HorizontalRule','Smiley','SpecialChar'],
    '/',
	['Styles','Format','Font','FontSize'],
	['Scayt','Source','-','Find','Replace','-','SelectAll',],
    ['Image']
];

CKEDITOR.stylesSet.add( 'default',
[
	{ name : 'Blue Title'		, element : 'h3', styles : { 'color' : 'Blue' } },
	{ name : 'Red Title'		, element : 'h3', styles : { 'color' : 'Red' } },
	{ name : 'Yellow Highlighter'	, element : 'span', styles : { 'background-color' : 'Yellow' } },
	{ name : 'Green Highlighter'	, element : 'span', styles : { 'background-color' : 'Lime' } },
	{ name : 'Blue Highlighter'     , element : 'span', styles : { 'background-color' : 'DeepSkyBlue ', 'color' : 'mintcream' } },
	{ name : 'Pink Highlighter'     , element : 'span', styles : { 'background-color' : 'Fuchsia', 'color' : 'mintcream' } },
	{ name : 'Big'				, element : 'big' },
	{ name : 'Small'			, element : 'small' },
	{ name : 'Typewriter'		, element : 'tt' },
	{ name : 'Computer Code'	, element : 'code' },
	{ name : 'Keyboard Phrase'	, element : 'kbd' },
	{ name : 'Sample Text'		, element : 'samp' },
	{ name : 'Variable'			, element : 'var' },
	{ name : 'Deleted Text'		, element : 'del' },
	{ name : 'Inserted Text'	, element : 'ins' },
	{ name : 'Cited Work'		, element : 'cite' },
	{ name : 'Inline Quotation'	, element : 'q' },
]);
/* ]]> */ </script>




<?php if (file_exists($_SERVER{'DOCUMENT_ROOT'}.'/clt/ckfinder/ckfinder.php')) {
$this_sitex = str_replace('/','\/',$this_site);
echo '<script type="text/javascript"> /* <![CDATA[ */ CKEDITOR.replace(\'description\',  { ';
echo '"filebrowserBrowseUrl":      "'.$this_sitex.'ckfinder\/ckfinder.html", ';
echo '"filebrowserImageBrowseUrl": "'.$this_sitex.'ckfinder\/ckfinder.html?type=Images",  ';
echo '"filebrowserImageUploadUrl": "'.$this_sitex.'ckfinder\/core\/connector\/php\/connector.php?command=QuickUpload&type=Images" }); ';
echo '/* ]]> */</script>';
 } else { echo "<!-- ckfinder not installed -->";
echo '<script type="text/javascript"> /* <![CDATA[ */ ';
echo 'CKEDITOR.replace(\'description\'); ';
echo '/* ]]> */</script> ';
 }

if (file_exists($_SERVER{'DOCUMENT_ROOT'}.'/clt/ckfinder/ckfinder.php')) {
$this_sitex = str_replace('/','\/',$this_site);
echo '<script type="text/javascript"> /* <![CDATA[ */ CKEDITOR.replace(\'p_bio\',  { ';
echo '"filebrowserBrowseUrl":      "'.$this_sitex.'ckfinder\/ckfinder.html", ';
echo '"filebrowserImageBrowseUrl": "'.$this_sitex.'ckfinder\/ckfinder.html?type=Images",  ';
echo '"filebrowserImageUploadUrl": "'.$this_sitex.'ckfinder\/core\/connector\/php\/connector.php?command=QuickUpload&type=Images" }); ';
echo '/* ]]> */</script>';
 } else { echo "<!-- ckfinder not installed -->";
echo '<script type="text/javascript"> /* <![CDATA[ */ ';
echo 'CKEDITOR.replace(\'p_bio\'); ';
echo '/* ]]> */</script> ';
 }

 }
?>