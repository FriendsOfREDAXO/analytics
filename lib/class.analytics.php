<?php
	class analytics {
		public static function getCode() {
			return rex_addon::get('analytics')->getConfig('code');
		}
		
		public static function getAnonymize() {
			return rex_addon::get('analytics')->getConfig('anonymize');
		}
		
		public static function getOptOutCookie() {
			return rex_addon::get('analytics')->getConfig('optoutcookie');
 		}
		
		public static function output($tags = true) {
			if (!rex_backend_login::hasSession()) {
				$code = '';
				if ($tags) {
					$code .= "<script>".PHP_EOL;
				}
				
				$fragment = new rex_fragment();
				$fragment->setVar('code', self::getCode(), false);
				$fragment->setVar('anonymize', self::getAnonymize(), false);
				$fragment->setVar('optoutcookie', self::getOptOutCookie(), false);
				$code .= $fragment->parse('analytics/embedcode.php');
				
				if ($tags) {
					$code .= "</script>".PHP_EOL;
				}
				
				if (self::getCode() != '') {
					return $code;
				} else {
					return '';
				}
			}
		}
	}
?>