<?php
	$content = '';
	
	if (rex_post('rex_analytics-config-submit', 'boolean')) {
		$this->setConfig(rex_post('config', [
			['code', 'string'],
		]));
		
		$content .= rex_view::info($this->i18n('config_saved'));
	}

	$content .= '<div class="rex-form">';
	$content .= '  <form action="'.rex_url::currentBackendPage().'" method="post">';
	$content .= '    <fieldset>';
	
	$formElements = [];
	
	//Start - code
		$n = [];
		$n['label'] = '<label for="rex_analytics-config-code">'.$this->i18n('config_code').'</label>';
		$n['field'] = '<input type="text" id="rex_analytics-config-code" name="config[code]" value="'.$this->getConfig('code').'"/>';
		$formElements[] = $n;
	//End - code
	
	$fragment = new rex_fragment();
	$fragment->setVar('elements', $formElements, false);
	$content .= $fragment->parse('core/form/form.php');
	
	$content .= '    </fieldset>';
	
	$content .= '    <fieldset class="rex-form-action">';
	
	$formElements = [];
	
	$n = [];
	$n['field'] = '<input type="submit" name="rex_analytics-config-submit" value="'.$this->i18n('config_action_save').'" '.rex::getAccesskey($this->i18n('config_action_save'), 'save').' />';
	$formElements[] = $n;
	
	$fragment = new rex_fragment();
	$fragment->setVar('elements', $formElements, false);
	$content .= $fragment->parse('core/form/submit.php');
	
	$content .= '    </fieldset>';
	$content .= '  </form>';
	$content .= '</div>';
	
	$fragment = new rex_fragment();
	$fragment->setVar('class', 'edit');
	$fragment->setVar('title', $this->i18n('config'));
	$fragment->setVar('body', $content, false);
	echo $fragment->parse('core/page/section.php');
?>