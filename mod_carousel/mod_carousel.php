<?php

defined('_JEXEC') or die('Restricted access');
require_once( dirname(__FILE__) . DS . 'helper.php' );

$document =& JFactory::getDocument();

$document->addStyleSheet('modules/mod_carousel/assets/css/bootstrap.min.css');
$document->addStyleSheet('modules/mod_carousel/assets/css/mod_carousel.css');
$document->addScript('modules/mod_carousel/assets/js/bootstrap.min.js');

$carousel = modCarouselHelper::getCarousel($params);
require( JModuleHelper::getLayoutPath('mod_carousel') );

?>
