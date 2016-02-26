<?php
	class rex_analytics {
		public static function getCode() {
			return rex_addon::get('rex_analytics')->getConfig('code');
		}
		
		public static function output($tags = true) {
			$code = '';
			if ($tags) {
				$code .= "<script>".PHP_EOL;
			}
			$code .= "(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){".PHP_EOL;
			$code .= "(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),".PHP_EOL;
			$code .= " m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)".PHP_EOL;
			$code .= "})(window,document,'script','//www.google-analytics.com/analytics.js','ga');".PHP_EOL;
			$code .= "".PHP_EOL;
			$code .= "ga('create', '".self::getCode()."', 'auto');".PHP_EOL;
			$code .= "ga('send', 'pageview');".PHP_EOL;
			
			if ($tags) {
				$code .= "</script>".PHP_EOL;
			}
			
			return $code;
		}
	}
?>