⚠️ Dieses Addon wird nicht mehr gewartet. Wir empfehlen die Integration von Google Analytics über [IWCC](https://github.com/FriendsOfREDAXO/iwcc).

Analyticsverwaltung
===================

Das Addon bietet die Möglichkeit Googleanalytics im Frontend einzubinden und via Backend zu konfigurieren. Das Addon hat den Vorteil, dass evtl. anfallende Codeänderungen seitens Google automatisch geupdatet werden.

![Screenshot](https://raw.githubusercontent.com/FriendsOfREDAXO/analytics/assets/rex_analytics.png)

Im Frontend kann man den Analyticscode wie folgt einbinden:

### Mit umschliessenden &lt;script&gt;-Tags

```php
<?php
echo analytics::output(true);
?>
```

### Ohne umschliessende &lt;script&gt;-Tags

```php
<?php
echo analytics::output();
?>
```
