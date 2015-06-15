<?php
/**
 * @version		$Id: mod_vt_nivo_slider.php 2011-08-05 vinaora $
 * @package		VINAORA NIVO SLIDER
 * @subpackage	mod_vt_nivo_slider
 * @copyright	Copyright (C) 2011 VINAORA. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 * @website		http://vinaora.com
 * @twitter		http://twitter.com/vinaora
 * @facebook	http://facebook.com/vinaora
 */

// no direct access
defined('_JEXEC') or die;

// Require the base helper class only once
require_once dirname(__FILE__).DS.'helper.php';

JHTML::stylesheet("media/mod_vt_nivo_slider/css/nivo-slider.css");

$layout = ltrim($params->get('layout', 'default'), '_:');
$theme = $params->get('theme', 'default');
modVT_Nivo_SliderHelper::addThemCSS($theme, $layout);

$source = $params->get('jquery_source', 'local');
$version = $params->get('jquery_version', '1.6.2');

modVT_Nivo_SliderHelper::addjQuery($source, $version);

JHTML::script("media/mod_vt_nivo_slider/js/jquery.nivo.slider.min.js");

$effect						= $params->get('effect');
$slices						= $params->get('slices');
$boxCols					= $params->get('boxCols');
$boxRows					= $params->get('boxRows');
$animSpeed					= intval($params->get('animSpeed'));
$pauseTime					= intval($params->get('pauseTime'));
$startSlide					= $params->get('startSlide')-1;
$directionNav				= $params->get('directionNav');
$directionNavHide			= $params->get('directionNavHide');
$controlNav					= $params->get('controlNav');
$controlNavThumbs			= $params->get('controlNavThumbs');
$controlNavThumbsFromRel	= $params->get('controlNavThumbsFromRel');
$controlNavThumbsSearch		= $params->get('controlNavThumbsSearch');
$controlNavThumbsReplace	= $params->get('controlNavThumbsReplace');
$keyboardNav				= $params->get('keyboardNav');
$pauseOnHover				= $params->get('pauseOnHover');
$manualAdvance				= $params->get('manualAdvance');
$captionOpacity				= $params->get('captionOpacity') / 100;
$prevText					= $params->get('prevText');
$nextText					= $params->get('nextText');

$module_id	= $module->id;

// $filter 	= '\.[pP][nN][gG]$|\.[gG][iI][fF]$|\.[jJ][pP][gG]$|\.[bB][mM][pP]$';
$filter		= '([^\s]+(\.(?i)(jpg|png|gif|bmp))$)';
$exclude	= array('.svn', 'CVS', '.DS_Store', '__MACOSX', '.htaccess');
array_push($exclude, $controlNavThumbsReplace);

$item_dir	= $params->get('item_dir');
if ($item_dir != "-1"){
	$items		= JFolder::files(JPATH_ROOT.'/images/stories/'.$item_dir, $filter, false, false, $exclude);
}
$images		= "";

if( !empty($items) && count($items) ){
	foreach($items as $key=>$value){
		$items[$key] = "images/stories/$item_dir/$value";
	}
	
	$titles = $params->get('item_title');
	$links = $params->get('item_url');
	$target = $params->get('item_target');

	$images = modVT_Nivo_SliderHelper::getItems($items, $titles, $links, $target);
}

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

require JModuleHelper::getLayoutPath('mod_vt_nivo_slider', $params->get('layout', 'default'));