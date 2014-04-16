<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Description of Select
 * To provide Select Box, Radio Button
 * @author Ria Hantoro
 * 
 *
 */


class Select {
	
	public function _combo($module='', $value, $valueArray, $options=array(), $styles=array(), $wrapper=null, $caption=null, $createFirstIndex=true)
	{
		//print_r($valueArray[0]);
		$valueArray = self::_reIndexArray($valueArray);
		//print_r($valueArray);
		/** templating */
		$options = self::_parseProperties($options);
		$styles = self::_parseStyle($styles);
	
		/** construct html combo */
		$return = "<select $options style=\"$styles\" class=\"ui-widget-content ui-corner-all\">";
	
		if($createFirstIndex)
		{
			$selected = '';
			if ( ($value===null) || ($value=='')) {
				//echo $value;
				$selected = ' selected ';
			}
			$return .= "<option $selected value=\"\" >&nbsp;&nbsp;$caption&nbsp;&nbsp;</option>";
		}
	
		foreach($valueArray as $key => $val)
		{
			$selected = ($value == $val[0])?  " selected " : "";
	
			$return .= "<option value=\"$val[0]\" $selected >"."&nbsp;&nbsp;";
			$return .= $val[2];
			$return .= '</option>';
			$return .= $wrapper[1];
		}
		$return .= "</select>";
	
		echo $return;
	}

}