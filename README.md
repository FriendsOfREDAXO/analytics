Redaxo 5 Addon - Analyticsverwaltung
====================================

Das Addon bindet die Möglichkeit Googleanalytics im Frontend einzubinden und via Backend zu konfigurieren. Das Addon hat den Vorteil, dass evtl. anfallende Codeänderungen seitens Google automatisch geupdatet werden. Im Frontend kann man den Analyticscode wie folgt einbinden:

###Mit umschliessenden &lt;script&gt;-Tags

```
<?php
	echo rex_analytics::output(true);
?>
```

###Ohne umschliessende &lt;script&gt;-Tags

```
<?php
	echo rex_analytics::output();
?>
```
