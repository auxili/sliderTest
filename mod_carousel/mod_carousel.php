<?php
defined( '_JEXEC' ) or die( 'Restricted access' );
require_once( dirname(__FILE__).DS.'helper.php' );

$carousel = modCarouselHelper::getCarousel( $params );
require( JModuleHelper::getLayoutPath( 'mod_carousel' ) );
?>