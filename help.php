<p>Das Addon bindet die Möglichkeit Googleanalytics im Frontend einzubinden und via Backend zu konfigurieren. Das Addon hat den Vorteil, dass evtl. anfallende Codeänderungen seitens Google automatisch geupdatet werden. Im Frontend kann man den Analyticscode wie folgt einbinden:</p>

<p><b>Mit umschliessenden &lt;script&gt;-Tags</b></p>
<?php
	$code = "";
	$code .= "<?php".PHP_EOL;
	$code .= "	echo rex_analytics::output(true);".PHP_EOL;
	$code .= "?>".PHP_EOL;
?>
<pre><?=highlight_string($code,true);?></pre>

<p><b>Ohne umschliessende &lt;script&gt;-Tags</b></p>
<?php
	$code = "";
	$code .= "<?php".PHP_EOL;
	$code .= "	echo rex_analytics::output();".PHP_EOL;
	$code .= "?>".PHP_EOL;
?>
<pre><?=highlight_string($code,true);?></pre>