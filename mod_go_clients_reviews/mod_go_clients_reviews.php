<?php

defined('_JEXEC') or die('Restricted access');

jimport('joomla.filesystem.folder');

$document =& JFactory::getDocument();

//style
$document->addStyleSheet('modules/mod_go_clients_reviews/assets/css/font-awesome.min.css');
$document->addStyleSheet('modules/mod_go_clients_reviews/assets/css/mod_go_clients_reviews.css');

//vars

$title = $params->get('title','');
$texttocaption00 = $params->get('texttocaption00','');
$texttocaption01 = $params->get('texttocaption01','');
$texttocaption02 = $params->get('texttocaption02','');
$texttocaption03 = $params->get('texttocaption03','');
$texttocaption04 = $params->get('texttocaption04','');
$texttocaption05 = $params->get('texttocaption05','');
$texttocaption06 = $params->get('texttocaption06','');
$texttocaption07 = $params->get('texttocaption07','');
$texttocaption08 = $params->get('texttocaption08','');
$texttocaption09 = $params->get('texttocaption09','');
$cr_fontsize = $params->get('cr_fontsize','');
$cr_titlecolor = $params->get('cr_titlecolor','');
$cr_texttocaption_size = $params->get('cr_texttocaption_size','');
$cr_captioncolor = $params->get('cr_captioncolor','');
$enable_jquery = $params->get('$enable_jquery','');

//javascript chooser
if ($enable_jquery == 0){$document->addScript('modules/mod_go_clients_reviews/assets/js/mod_go_clients_reviews.js');}
//activate javascript
//$document->addScript('modules/mod_go_clients_reviews/assets/js/mod_go_clients_reviews.js');

require( JModuleHelper::getLayoutPath('mod_go_clients_reviews') );
?>
