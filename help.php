<?php
	echo rex_view::info($this->i18n('help_intro'));
	
	$code = "";
	$code .= "<?php".PHP_EOL;
	$code .= "	echo analytics::output(true);".PHP_EOL;
	$code .= "?>";
	
	$fragment = new rex_fragment();
	$fragment->setVar('class', 'info', false);
	$fragment->setVar('title', $this->i18n('help_withtags'), false);
	$fragment->setVar('body', rex_string::highlight($code), false);
	echo $fragment->parse('core/page/section.php');
	
	///
	
	$code = "";
	$code .= "<?php".PHP_EOL;
	$code .= "	echo analytics::output();".PHP_EOL;
	$code .= "?>";
	
	$fragment = new rex_fragment();
	$fragment->setVar('class', 'info', false);
	$fragment->setVar('title', $this->i18n('help_withouttags'), false);
	$fragment->setVar('body', rex_string::highlight($code), false);
	echo $fragment->parse('core/page/section.php');
?>