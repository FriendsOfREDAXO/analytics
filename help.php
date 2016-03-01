<p><?=$this->i18n('help_intro');?></p>

<p><b><?=$this->i18n('help_withtags');?></b></p>
<?php
	$code = "";
	$code .= "<?php".PHP_EOL;
	$code .= "	echo rex_analytics::output(true);".PHP_EOL;
	$code .= "?>".PHP_EOL;
?>
<pre><?=highlight_string($code,true);?></pre>

<p><b><?=$this->i18n('help_withouttags');?></b></p>
<?php
	$code = "";
	$code .= "<?php".PHP_EOL;
	$code .= "	echo rex_analytics::output();".PHP_EOL;
	$code .= "?>".PHP_EOL;
?>
<pre><?=highlight_string($code,true);?></pre>