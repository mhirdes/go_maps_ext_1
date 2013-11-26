<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'Show',
	array(
		'Map' => 'show',
		
	),
	// non-cacheable actions
	array(
		'Map' => 'show',
		
	)
);

$TYPO3_CONF_VARS['EXTCONF']['cms']['db_layout']['addTables']['tx_gomapsext_domain_model_map'][0] = array(
    'fList' => 'title,default_type',
    'icon' => TRUE
);

$TYPO3_CONF_VARS['EXTCONF']['cms']['db_layout']['addTables']['tx_gomapsext_domain_model_category'][0] = array(
    'fList' => 'name',
    'icon' => TRUE
);


$TYPO3_CONF_VARS['EXTCONF']['cms']['db_layout']['addTables']['tx_gomapsext_domain_model_address'][0] = array(
    'fList' => 'title, info_window_content',
    'icon' => TRUE
);

?>