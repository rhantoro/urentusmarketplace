<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('__'))
{
	function __($text, $args = null){
		if (!$text) {
			return;
		}
		
		if ($args !== null && !is_array($args)) {
			$args = array_slice(func_get_args(), 1);
		}
		
		$result = lang($text);
		if (empty($result)) {
			return vsprintf($text, $args);;
		}
		return vsprintf($result, $args);
	}
}

if ( ! function_exists('asset_url'))
{
	function asset_url($uri = NULL){
		if ($uri === NULL) {
			return base_url('assets/');
		}
		return base_url('assets/') . '/' . ltrim($uri, '/');
	}
}

if ( ! function_exists('generate_menus'))
{
	function generate_menus($haystack){
		$CI =& get_instance();
		
		$methodName = $CI->router->fetch_method();
		$controllerName = $CI->router->fetch_class();
		$link = '/' . $controllerName . '/' . $methodName . '/';
		$resultString = '';
		if (count($haystack) > 1 ) {
		foreach($haystack as $item) {
			if ($item->men_menulink == $link) {
				$resultString .= '<li class="active">';
			} else {
				$resultString .= '<li>';
			}
			
			if (!empty($item->children)) {
				$resultString .= '<a href="' . site_url($item->men_menulink) . '" class="dropdown-toggle" data-toggle="dropdown">';
				
				$resultString .= $item->men_menuname ; 
				$resultString .= '<i class="arrow icon-chevron-down"></i></a>';
				
				$resultStringChild = '<ul class="dropdown-menu">';
				$resultStringChild .= generate_menus($item->children);
				$resultStringChild .= '</ul>';
				$resultString .= $resultStringChild;
			} else {
				$resultString .= '<a href="' . site_url($item->men_menulink) . '">';
				$resultString .= '<i class="' . $item->men_iconname . '"></i>';
				$resultString .= $item->men_menuname . '</a>';
			}
			$resultString .= '</li>';
		} 
		}
		return $resultString;
	}
}