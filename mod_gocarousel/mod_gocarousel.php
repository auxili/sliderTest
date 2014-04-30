<?php

defined('_JEXEC') or die('Restricted access');
require_once( dirname(__FILE__) . DS . 'helper.php' );

jimport('joomla.filesystem.folder');

$document =& JFactory::getDocument();
//fonts
$document->addStyleSheet('http://fonts.googleapis.com/css?family=Roboto');
$document->addStyleSheet('http://fonts.googleapis.com/css?family=Lato');
$document->addStyleSheet('http://fonts.googleapis.com/css?family=PT+Sans+Caption');
$document->addStyleSheet('http://fonts.googleapis.com/css?family=Ubuntu');
$document->addStyleSheet('http://fonts.googleapis.com/css?family=Nobile');
$document->addStyleSheet('http://fonts.googleapis.com/css?family=Exo+2');
//style
$document->addStyleSheet('modules/mod_gocarousel/assets/css/bootstrap.min.css');
$document->addStyleSheet('modules/mod_gocarousel/assets/css/mod_gocarousel.css');

$carousel = modCarouselHelper::getCarousel($params);

//vars
$texttocaption01 = $params->get('texttocaption01','0');
$texttocaption02 = $params->get('texttocaption02','0');
$texttocaption03 = $params->get('texttocaption03','0');
$texttocaption04 = $params->get('texttocaption04','0');
$texttocaption05 = $params->get('texttocaption05','0');
$texttocaption06 = $params->get('texttocaption06','0');

$imagelocation01 = $params->get('imagelocation01','0');
$imagelocation02 = $params->get('imagelocation02','0');
$imagelocation03 = $params->get('imagelocation03','0');
$imagelocation04 = $params->get('imagelocation04','0');
$imagelocation05 = $params->get('imagelocation05','0');
$imagelocation06 = $params->get('imagelocation06','0');

$chooseHeight = $params->get('chooseHeight','');
$chooseWidth = $params->get('chooseWidth','');

$textcolorchooser = $params->get('textcolorchooser','');
$textsize = $params->get('textsize','');
$text_type = $params->get('text_type','');

$data_interval = $params->get('data_interval','');
$enable_jquery = $params->get('enable_jquery','');
$enable_bootstrap = $params->get('enable_bootstrap','');

//javascript chooser
if ($enable_jquery == 0){$document->addScript('modules/mod_gocarousel/assets/js/jquery.min.js');}
if ($enable_bootstrap == 0){$document->addScript('modules/mod_gocarousel/assets/js/bootstrap.min.js');}

require( JModuleHelper::getLayoutPath('mod_carousel') );
?>
