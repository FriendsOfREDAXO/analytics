<?php
	class rex_analytics {
		public static function getCode() {
			return rex_addon::get('rex_analytics')->getConfig('code');
		}
		
		public static function getAnonymize() {
			return rex_addon::get('rex_analytics')->getConfig('anonymize');
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
				$code .= $fragment->parse('rex_analytics/embedcode.php');
				
				if ($tags) {
					$code .= "</script>".PHP_EOL;
				}
				
				return $code;
			}
		}
	}
?>