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
	['Scayt','Source','-','Find','Replace','-','SelectAll',]
];

CKEDITOR.stylesSet.add( 'default',
[
	{ name : 'Blue Title'		, element : 'h3', styles : { 'color' : 'Blue' } },
	{ name : 'Red Title'		, element : 'h3', styles : { 'color' : 'Red' } },
	{ name : 'Yellow Highlighter'	, element : 'span', styles : { 'background-color' : 'Yellow' } },
	{ name : 'Green Highlighter'	, element : 'span', styles : { 'background-color' : 'Lime' } },
	{ name : 'Blue Highlighter'     , element : 'span', styles : { 'background-color' : 'DeepSkyBlue ', 'color' : 'white' } },
	{ name : 'Pink Highlighter'     , element : 'span', styles : { 'background-color' : 'Fuchsia', 'color' : 'white' } },
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