<?php
/**
 * @version		$Id: helper.php 2011-07-10 vinaora $
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

class modVT_Nivo_SliderHelper
{
	private function __construct(){}
	
	/*
	 * Add jQuery Library to <head> tag
	 */
	public static function addjQuery($source='local', $version='1.6.2'){
		
		if($source == 'local'){
			JHTML::script("media/mod_vt_nivo_slider/js/jquery/$version/jquery.min.js");
			return true;
		}
		
		if($source == 'google'){
			JHTML::script("https://ajax.googleapis.com/ajax/libs/jquery/$version/jquery.min.js");
			return true;
		}
		
		return false;

	}

	/*
	 * Add file [theme].css to <head> tag
	 */	
	public static function addThemCSS($theme, $layout='default'){
		switch($layout){
			case 'demo-standard':
				$theme = "default";
				break;
			case 'demo-pascal':
				$theme = "pascal";
				break;
			case 'demo-orman':
				$theme = "orman";
				break;
		}
		JHTML::stylesheet("media/mod_vt_nivo_slider/themes/$theme/$theme.css");
		return;
	}
	
	/*
	 * Get a Parameter in a Parameters String which are separated with a specify symbol (default: vertical bar '|').
	 * Example: Parameters = "value1 | value2 | value3". Return "value2" if positon = 2
	 */
	public static function getParam($params, $position=1, $separate='|'){

		$items = explode($separate, $params);

		if ( ($position > count($items)) || ($position<1) ) return NULL;

		return $items[$position-1];
	}
	
	public static function getItems($items, $titles, $links, $target="_self"){
		$separate = "\n";
		$str = "";
		
		if (empty($items) || !count($items)) return $str;
		
		foreach($items as $i=>$value){
			$link	= htmlspecialchars(self::getParam($links, $i+1, $separate));
			$title	= htmlspecialchars(self::getParam($titles, $i+1, $separate));
			
			$str .= "<a href=\"$link\" target=\"$target\" style=\"background: none;\">";
			$str .= "<img src=\"$value\" alt=\"Vinaora Nivo Slider\" title=\"$title\" />";
			$str .= "</a>\n";
		}

		return $str;
	}
}