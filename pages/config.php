<?php
	$content = '';
	
	if (rex_post('config-submit', 'boolean')) {
		$this->setConfig(rex_post('config', [
			['code', 'string'],
			['anonymize', 'bool'],
			['optoutcookie', 'bool'],
		]));
		
		$content .= rex_view::info($this->i18n('config_saved'));
	}

	$content .= '<div class="rex-form">';
	$content .= '  <form action="'.rex_url::currentBackendPage().'" method="post">';
	$content .= '    <fieldset>';
	
	$formElements = [];
	
	//Start - code
		$n = [];
		$n['label'] = '<label for="analytics-config-code">'.$this->i18n('config_code').'</label>';
		$n['field'] = '<input type="text" id="analytics-config-code" name="config[code]" value="'.$this->getConfig('code').'">';
		$formElements[] = $n;
	//End - code
	
	//Start - anonymize
		$n = [];
		$n['label'] = '<label for="analytics-config-anonymize">'.rex_i18n::rawMsg('analytics_config_anonymize', false).'</label>';
		$n['field'] = '<input type="checkbox" id="analytics-config-anonymize" name="config[anonymize]" value="1" '.($this->getConfig('anonymize') ? ' checked="checked"' : '').'>';
		$formElements[] = $n;
	//End - anonymize
	
	//Start - optoutcookie
		$n = [];
 		$n['label'] = '<label for="analytics-config-optoutcookie">'.rex_i18n::rawMsg('analytics_config_optoutcookie', false).'</label>';
 		$n['field'] = '<input type="checkbox" id="analytics-config-optoutcookie" name="config[optoutcookie]" value="1" '.($this->getConfig('optoutcookie') ? ' checked="checked"' : '').'>';
		$formElements[] = $n;
 		//End - optoutcookie
	
	$fragment = new rex_fragment();
	$fragment->setVar('elements', $formElements, false);
	$content .= $fragment->parse('core/form/form.php');
	
	$content .= '    </fieldset>';
	
	$content .= '    <fieldset class="rex-form-action">';
	
	$formElements = [];
	
	$n = [];
	$n['field'] = '<input type="submit" name="config-submit" value="'.$this->i18n('config_action_save').'" '.rex::getAccesskey($this->i18n('config_action_save'), 'save').'>';
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