<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "go_maps_ext".
 *
 * Auto generated 27-11-2013 12:36
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Google Maps API Extbase',
	'description' => 'Extbase Version of go_maps_ap. Simply instert a google map Version 3, jQuery, MooTools, Calculate Route, Image for Markers, Style Maps, KML,...',
	'category' => 'plugin',
	'author' => 'Marc Hirdes',
	'author_email' => 'Marc_Hirdes@gmx.de',
	'author_company' => 'clickstorm GmbH',
	'shy' => '',
	'priority' => '',
	'module' => '',
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => 1,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'version' => '1.3.0',
	'constraints' => array(
		'depends' => array(
			'extbase' => '1.3',
			'fluid' => '1.3',
			'typo3' => '4.5.0-6.1.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:45:{s:26:"class.tx_gomapsext_tca.php";s:4:"6096";s:16:"ext_autoload.php";s:4:"cc05";s:21:"ext_conf_template.txt";s:4:"6ef8";s:12:"ext_icon.gif";s:4:"2826";s:12:"ext_icon.png";s:4:"535f";s:17:"ext_localconf.php";s:4:"93a0";s:14:"ext_tables.php";s:4:"7311";s:14:"ext_tables.sql";s:4:"01a0";s:21:"ExtensionBuilder.json";s:4:"4b04";s:7:"LICENSE";s:4:"ec41";s:9:"README.md";s:4:"265d";s:36:"Classes/Controller/MapController.php";s:4:"e08b";s:32:"Classes/Domain/Model/Address.php";s:4:"69be";s:33:"Classes/Domain/Model/Category.php";s:4:"818e";s:28:"Classes/Domain/Model/Map.php";s:4:"7887";s:47:"Classes/Domain/Repository/AddressRepository.php";s:4:"e624";s:43:"Classes/Domain/Repository/MapRepository.php";s:4:"5500";s:47:"Classes/ViewHelpers/Format/EscapeViewHelper.php";s:4:"7377";s:55:"Classes/ViewHelpers/Format/HideInFrontendViewHelper.php";s:4:"3278";s:47:"Classes/ViewHelpers/Format/ScriptViewHelper.php";s:4:"3a8a";s:41:"Configuration/FlexForms/flexform_show.xml";s:4:"4e92";s:29:"Configuration/TCA/Address.php";s:4:"f9a9";s:30:"Configuration/TCA/Category.php";s:4:"5063";s:25:"Configuration/TCA/Map.php";s:4:"28b7";s:38:"Configuration/TypoScript/constants.txt";s:4:"9ef1";s:34:"Configuration/TypoScript/setup.txt";s:4:"3dae";s:40:"Resources/Private/Language/locallang.xml";s:4:"c838";s:78:"Resources/Private/Language/locallang_csh_tx_gomapsext_domain_model_address.xml";s:4:"83cb";s:79:"Resources/Private/Language/locallang_csh_tx_gomapsext_domain_model_category.xml";s:4:"3637";s:74:"Resources/Private/Language/locallang_csh_tx_gomapsext_domain_model_map.xml";s:4:"c33f";s:43:"Resources/Private/Language/locallang_db.xml";s:4:"f93b";s:38:"Resources/Private/Layouts/Default.html";s:4:"6fa8";s:42:"Resources/Private/Partials/Map/Assign.html";s:4:"9985";s:46:"Resources/Private/Partials/Map/Categories.html";s:4:"eba9";s:40:"Resources/Private/Partials/Map/Form.html";s:4:"864b";s:41:"Resources/Private/Templates/Map/Show.html";s:4:"a825";s:35:"Resources/Public/Icons/relation.gif";s:4:"e615";s:60:"Resources/Public/Icons/tx_gomapsext_domain_model_address.png";s:4:"92b0";s:61:"Resources/Public/Icons/tx_gomapsext_domain_model_category.png";s:4:"7b78";s:56:"Resources/Public/Icons/tx_gomapsext_domain_model_map.png";s:4:"eca0";s:51:"Resources/Public/Scripts/jquery-polyline-example.js";s:4:"d2b2";s:44:"Resources/Public/Scripts/jquery.gomapsext.js";s:4:"da23";s:38:"Resources/Public/Scripts/jquery.min.js";s:4:"387d";s:52:"Resources/Public/Scripts/markerclusterer_compiled.js";s:4:"fb8b";s:14:"doc/manual.sxw";s:4:"eafd";}',
);

?>