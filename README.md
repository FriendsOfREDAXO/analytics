⚠️ Achtung, das Addon wird unter der neuen Bezeichnung __`analytics`__ weiter geführt. Bitte installiere einmalig das neue Addon (manuell oder über den Installer), um die aktuelle Version und zukünftige Updates zu erhalten!

Solltest du Funktionen oder Dateien verwenden, die noch die alte Addonbezeichnung beinhalten, müsstest du diese bitte anpassen. Ein typisches Beispiel: `if (rex_addon::get('rex_analytics')->isAvailable()) { … }`.

Danke für deine Mithilfe!

------------------------------------------

REDAXO 5 Addon - Analyticsverwaltung
====================================

Das Addon bietet die Möglichkeit Googleanalytics im Frontend einzubinden und via Backend zu konfigurieren. Das Addon hat den Vorteil, dass evtl. anfallende Codeänderungen seitens Google automatisch geupdatet werden.

![Screenshot](https://raw.githubusercontent.com/FriendsOfREDAXO/rex_analytics/assets/rex_analytics.png)

Im Frontend kann man den Analyticscode wie folgt einbinden:

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
