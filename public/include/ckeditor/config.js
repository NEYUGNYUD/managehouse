/*
Copyright (c) 2003-2010, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/

CKEDITOR.editorConfig = function( config )
{
	var urlHome = "<?php echo URL::to('/');?>";
	config.skin="kama";  // có thể đổi thành 1 trong 3 giá trị sau: v2, kama, office2003
	config.enterMode = CKEDITOR.ENTER_BR;
	config.filebrowserBrowseUrl = urlHome+ "/public/include/ckfinder/ckfinder.html";
	config.filebrowserImageBrowseUrl = urlHome+ "/public/include/ckfinder/ckfinder.html?type=Images";
	config.filebrowserFlashBrowseUrl = urlHome+ "/public/include/ckfinder/ckfinder.html?type=Flash";
	config.filebrowserUploadUrl = urlHome+ "/public/include/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files";
	config.filebrowserImageUploadUrl = urlHome+ "/public/include/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images";
	config.filebrowserFlashUploadUrl = urlHome+ "/public/include/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash";
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
};
