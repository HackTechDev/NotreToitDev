<?php
defined('_JEXEC') or die;
/**
 *
 * @package  RealEstateManager
 * @copyright 2012 Andrey Kvasnevskiy-OrdaSoft(akbet@mail.ru); Rob de Cleen(rob@decleen.com)
 * Homepage: http://www.ordasoft.com
 * @version: 3.5 Pro
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * */
/**
 * Legacy function, use <jdoc:include type="module" /> instead
 *
 * @deprecated        As of version 1.5
 */
if (!defined('DS'))
    define('DS', DIRECTORY_SEPARATOR);

if (!function_exists('mosLoadModule')) {

    function mosLoadModule($name, $style = - 1) {
        ?><jdoc:include type="module" name="<?php echo $name ?>" style="<?php echo $style ?>" /><?php
    }

}
if (!isset($GLOBALS['realestatemanager_configuration'])) {
    require_once (JPATH_ROOT . DS . 'administrator' . DS . 'components' . DS
     . 'com_realestatemanager' . DS . 'realestatemanager.class.conf.php' );
    $GLOBALS['realestatemanager_configuration'] = 
      isset($realestatemanager_configuration) ? $realestatemanager_configuration : null;
}
/**
 * Legacy function, using <jdoc:include type="modules" /> instead
 *
 * @deprecated  As of version 1.5
 */
//if (!function_exists('clearDate')) {
//
//    function clearDate($date) {
//        $date = preg_replace('/%/', '', $date);
//        return $date;
//    }
//
//}
if (!function_exists('mosMail')) {

    function mosMail($from, $fromname, $recipient, $subject, $body, $mode = 0, $cc = NULL, 
      $bcc = NULL, $attachment = NULL, $replyto = NULL, $replytoname = NULL) {
        $mail = JMail::getInstance();
        return $mail->sendMail($from, $fromname, $recipient, $subject, $body, 
          $mode, $cc, $bcc, $attachment, $replyto, $replytoname);
    }

}
if (!function_exists('mosLoadAdminModules')) {

    function mosLoadAdminModules($position = 'left', $style = 0) {
        // Select the module chrome function
        if (is_numeric($style)) {
            switch ($style) {
                case 2:
                    $style = 'xhtml';
                    break;
                case 0:
                default:
                    $style = 'raw';
                    break;
            }
        }
        ?><jdoc:include type="modules" name="<?php echo $position ?>" style="<?php echo $style ?>" /><?php
    }

}
/**
 * Legacy function, using <jdoc:include type="module" /> instead
 *
 * @deprecated  As of version 1.5
 */
if (!function_exists('mosLoadAdminModule')) {

    function mosLoadAdminModule($name, $style = 0) {
        ?><jdoc:include type="module" name="<?php echo $name ?>" style="<?php echo $style ?>" /><?php
    }

}
/**
 * Legacy function, always use {@link JRequest::getVar()} instead
 *
 * @deprecated  As of version 1.5
 */
if (!function_exists('mosStripslashes')) {

    function mosStripslashes(&$value) {
        $ret = '';
        if (is_string($value)) {
            $ret = stripslashes($value);
        } else {
            if (is_array($value)) {
                $ret = array();
                foreach ($value as $key => $val)
                    $ret[$key] = mosStripslashes($val);
            } else
                $ret = $value;
        }
        return $ret;
    }

}
if (!function_exists("formatMoney")) {

    function formatMoney($number, $fractional = false, $pattern = ".") {
        if(preg_match("/\d/", $pattern)){

            $msg = "Your separator: $pattern - incorrect, you can not use numbers, to split price" ;
            echo '<script>alert("'.$msg.'");</script>';
            $pattern = ".";      
        }
        if ($fractional) {
            $number = sprintf('%.2f', $number);
        }
        if ($pattern == ".")
            $number = str_replace(".", ",", $number);
        while (true) {
            $replaced = preg_replace('/(-?\d+)(\d\d\d)/', '$1' . $pattern . '$2', $number);
            //echo $replaced."<br>";
            if ($replaced != $number) {
                $number = $replaced;
            } else {
                break;
            }
        }
        // $number = preg_replace('/\^/', $number, $pattern);
        return $number;
    }

}
/**
 * Legacy function, use {@link JFolder::files()} or {@link JFolder::folders()} instead
 *
 * @deprecated  As of version 1.5
 */
if (!function_exists('mosReadDirectory')) {

    function mosReadDirectory($path, $filter = '.', $recurse = false, $fullpath = false) {
        $arr = array(null);
        // Get the files and folders
        jimport('joomla.filesystem.folder');
        $files = JFolder::files($path, $filter, $recurse, $fullpath);
        $folders = JFolder::folders($path, $filter, $recurse, $fullpath);
        // Merge files and folders into one array
        $arr = array();
        if (is_array($files))
            $arr = $files;
        if (is_array($folders))
            $arr = array_merge($arr, $folders);
        // Sort them all
        asort($arr);
        return $arr;
    }

}
/**
 * Legacy function, use {@link JApplication::redirect() JApplication->redirect()} instead
 *
 * @deprecated  As of version 1.5
 */
if (!function_exists('date_to_data_ms')){
    function date_to_data_ms($data_string){             // 2014-01-25 covetr to date in ms
        
        global $database;
        
//        $date = data_transform_rem($data_string);
                
/*        $query = "SELECT UNIX_TIMESTAMP('$data_string')"; 
        $database->setQuery($query);
        $rent_ms = $database->loadResult(); 
        
        return $rent_ms;*/
        if($data_string){
           $rent_mas = explode('-', $data_string);
           $month=$rent_mas[1];
           $day=$rent_mas[2];
           $year=$rent_mas[0];
           $rent_ms = mktime ( 0 ,0, 0, $month , $day , $year);
           return $rent_ms;
       }else{
            exit;
        }
    }
}
if (!function_exists('mosRedirect')) {

    function mosRedirect($url, $msg = '') {
        $mainframe = JFactory::getApplication(); // for J 1.6
        $mainframe->redirect($url, $msg);
    }

}
/**
 * Legacy function, use {@link JArrayHelper::getValue()} instead
 *
 * @deprecated  As of version 1.5
 */
if (!function_exists('mosGetParam')) {

    function mosGetParam(&$arr, $name, $def = null, $mask = 0) {
        // Static input filters for specific settings
        static $noHtmlFilter = null;
        static $safeHtmlFilter = null;
        $var = JArrayHelper::getValue($arr, $name, $def, '');
        // If the no trim flag is not set, trim the variable
        if (!($mask & 1) && is_string($var))
            $var = trim($var);
        // Now we handle input filtering
        if ($mask & 2) {
            // If the allow html flag is set, apply a safe html filter to the variable
            if (is_null($safeHtmlFilter))
                $safeHtmlFilter = JFilterInput::getInstance(null, null, 1, 1);
            $var = $safeHtmlFilter->clean($var, 'none');
        } elseif ($mask & 4) {
            // If the allow raw flag is set, do not modify the variable
            $var = $var;
        } else {
            // Since no allow flags were set, we will apply the most strict filter to the variable
            if (is_null($noHtmlFilter)) {
                $noHtmlFilter = JFilterInput::getInstance(/* $tags, $attr, $tag_method, $attr_method, $xss_auto */
                );
            }
            $var = $noHtmlFilter->clean($var, 'none');
        }
        return $var;
    }

}
/**
 * Legacy function, use {@link JEditor::save()} or {@link JEditor::getContent()} instead
 *
 * @deprecated  As of version 1.5
 */
if (!function_exists('getEditorContents')) {

    function getEditorContents($editorArea, $hiddenField) {
        jimport('joomla.html.editor');
        $editor = JFactory::getEditor();
        echo $editor->save($hiddenField);
    }

}
/**
 * Legacy function, use {@link JFilterOutput::objectHTMLSafe()} instead
 *
 * @deprecated  As of version 1.5
 */
if (!function_exists('mosMakeHtmlSafe')) {

    function mosMakeHtmlSafe(&$mixed, $quote_style = ENT_QUOTES, $exclude_keys = '') {
        JFilterOutput::objectHTMLSafe($mixed, $quote_style, $exclude_keys);
    }

}
/**
 * Legacy utility function to provide ToolTips
 *
 * @deprecated As of version 1.5
 */
if (!function_exists('mosToolTip')) {

    function mosToolTip($tooltip, $title = '', $width = '', $image = 'tooltip.png', $text = '', $href = '', $link = 1) {
        // Initialize the toolips if required
        static $init;
        if (!$init) {
            JHTML::_('behavior.tooltip');
            $init = true;
        }
        return JHTML::_('tooltip', $tooltip, $title, $image, $text, $href, $link);
    }

}
/**
 * Legacy function to replaces &amp; with & for xhtml compliance
 *
 * @deprecated  As of version 1.5
 */
if (!function_exists('mosTreeRecurse')) {

    function mosTreeRecurse($id, $indent, $list, &$children, $maxlevel = 9999, $level = 0, $type = 1) {
        if (@$children[$id] && $level <= $maxlevel) {
            $parent_id = $id;
            foreach ($children[$id] as $v) {
                $id = $v->id;
                if ($type) {
                    $pre = 'L ';
                    $spacer = '.      ';
                } else {
                    $pre = '- ';
                    $spacer = '  ';
                }
                if ($v->parent == 0)
                    $txt = $v->name;
                else
                    $txt = $pre . $v->name;
                $pt = $v->parent;
                $list[$id] = $v;
                $list[$id]->treename = "$indent$txt";
                $list[$id]->children = count(@$children[$id]);
                $list[$id]->all_fields_in_list = count(@$children[$parent_id]);
                $list = mosTreeRecurse($id, $indent . $spacer, $list, $children, $maxlevel, $level + 1, $type);
            }
        }
        return $list;
    }

}
if (!function_exists('getGroupsByUser')) {

    function getGroupsByUser($uid, $recurse) {
        if (version_compare(JVERSION, "1.6.0", "lt")) {
            
        } else if (version_compare(JVERSION, "1.6.0", "ge") && version_compare(JVERSION, "3.5.100", "lt")) {
            $database = JFactory::getDBO();
            // Custom algorythm
            $usergroups = array();
            if ($recurse == 'RECURSE') {
                // [1]: Recurse getting the usergroups
                $id_group = array();
                $q1 = "SELECT group_id FROM `#__user_usergroup_map` WHERE user_id={$uid}";
                $database->setQuery($q1);
                $rows1 = $database->loadObjectList();
                foreach ($rows1 as $v)
                    $id_group[] = $v->group_id;
                for ($k = 0; $k < count($id_group); $k++) {
                    $q = "SELECT g2.id FROM `#__usergroups` g1 "
                     . " LEFT JOIN `#__usergroups` g2 ON g1.lft > g2.lft AND g1.lft < g2.rgt "
                     . " WHERE g1.id={$id_group[$k]} ORDER BY g2.lft";
                    $database->setQuery($q);
                    $rows = $database->loadObjectList();
                    foreach ($rows as $r)
                        $usergroups[] = $r->id;
                }
                $usergroups = array_unique($usergroups);
            }
            // [2]: Non-Recurse getting usergroups
            $q = "SELECT * FROM #__user_usergroup_map WHERE user_id = {$uid}";
            $database->setQuery($q);
            $rows = $database->loadObjectList();
            foreach ($rows as $k => $v)
                $usergroups[] = $rows[$k]->group_id;
            // If user is unregistered, Joomla contains it into standard group (Public by default).
            // So, groupId for anonymous users is 1 (by default).
            // But custom algorythm doesnt do this: if user is not autorised, he will NOT connected to any group.
            // And groupId will be 0.
            if (count($rows) == 0)
                $usergroups[] = - 2;
            return $usergroups;
        } else {
            echo "Sanity test. Error version check!";
            exit;
        }
    }

}

if (!function_exists('getWhereUsergroupsCondition')) {

    function getWhereUsergroupsCondition($table_alias) {
        $my = JFactory::getUser();
        if (isset($my->id) AND $my->id != 0)
            $usergroups_sh = getGroupsByUser($my->id, '');
        else
            $usergroups_sh = array();
        $usergroups_sh[] = - 2;
        $s = '';
        for ($i = 0; $i < count($usergroups_sh); $i++) {
            $g = $usergroups_sh[$i];
            $s.= " $table_alias.params LIKE '%,{$g}' or $table_alias.params = '{$g}' or " . 
              "$table_alias.params LIKE '{$g},%' or $table_alias.params LIKE '%,{$g},%' ";
            if (($i + 1) < count($usergroups_sh))
                $s.= ' or ';
        }
        return $s;
    }

}
if (!function_exists('addSubMenuRealEstate')) {

    function addSubMenuRealEstate($vName) {
      if (!defined('_HEADER_NUMBER')) loadConstRem();
        JSubMenuHelper::addEntry(JText::_(_HEADER_NUMBER),
         'index.php?option=com_realestatemanager', $vName == 'Houses');
        JSubMenuHelper::addEntry(JText::_(_CATEGORIES_NAME),
         'index.php?option=com_realestatemanager&section=categories', $vName == 'Categories');
        JSubMenuHelper::addEntry(JText::_(_REALESTATE_MANAGER_ADMIN_RENT_REQUESTS),
         'index.php?option=com_realestatemanager&task=rent_requests', $vName == 'Rent Requests');
        JSubMenuHelper::addEntry(JText::_(_REALESTATE_MANAGER_ADMIN_SALE_MANAGER_MENU),
         'index.php?option=com_realestatemanager&task=buying_requests', $vName == 'Sale Manager');
        JSubMenuHelper::addEntry(JText::_(_REALESTATE_MANAGER_LABEL_FEATURED_MANAGER_FEATURE_MANAGER),
         'index.php?option=com_realestatemanager&section=featured_manager', $vName == 'Features Manager');
        JSubMenuHelper::addEntry(JText::_(_REALESTATE_MANAGER_LABEL_LANGUAGE_MENU),
         'index.php?option=com_realestatemanager&section=language_manager', $vName == 'Language Manager');
        JSubMenuHelper::addEntry(JText::_(_REALESTATE_MANAGER_ADMIN_LABEL_SETTINGS),
         'index.php?option=com_realestatemanager&task=config', $vName == 'Settings');
        JSubMenuHelper::addEntry(JText::_(_REALESTATE_MANAGER_ADMIN_ABOUT_ABOUT),
         'index.php?option=com_realestatemanager&task=about', $vName == 'About');
      }

}


if (!function_exists('loadConstRem')) {
    function loadConstRem() {

         global $database, $mosConfig_absolute_path;
         
         $is_exception = false;

         $database->setQuery("SELECT * FROM #__rem_languages");
         $langs = $database->loadObjectList();

         $component_path = JPath::clean($mosConfig_absolute_path . '/components/com_realestatemanager/lang/');
         $component_constans = array();

         if (is_dir($component_path) && ($component_constans =
          JFolder::files($component_path, '^[^_]*\.php$', false, true))) {

            //check and add constants file in DB
            foreach ($component_constans as $i => $file) {
                 $file_name = pathinfo($file);
                 $file_name = $file_name['filename'];

                 if ($file_name === 'constant') {
                       $database->setQuery("SELECT id FROM #__rem_const");
                       $idConst = $database->loadResult();
                       if(empty($idConst)) {
                      require($mosConfig_absolute_path . "/components/com_realestatemanager/lang/$file_name.php");
                          foreach ( $constMas as $mas ) {
                              $database->setQuery("INSERT INTO #__rem_const (const, sys_type) 
                                  VALUES ('".$mas["const"]."','".$mas["value_const"]."')");
                              $database->query();
                          }
                       }
                }
                
                
              }                 
              
              //check and add new text files in DB
              foreach ($component_constans as $i => $file) {
                  $isLang = 0;
                  $file_name = pathinfo($file);
                  $file_name = $file_name['filename'];
                  $LangLocal = '';
                  $isLang = 1;
                  if ($file_name != 'constant') {
                      require($mosConfig_absolute_path . "/components/com_realestatemanager/lang/$file_name.php");
                      foreach ($langs as $lang) {
                      
                          if ($lang->lang_code == $LangLocal['lang_code'] || $lang->title == $LangLocal['title']) {
                              $isLang = 0;
                              break;
                          } else {
                              $isLang = 1;
                          }
                      }
                      try {
                       
                          if ($isLang ===1 ) {
                        
                              $database->setQuery("INSERT INTO #__rem_languages (lang_code,title) VALUES ('"
                               . $LangLocal['lang_code'] . "','" . $LangLocal['title'] . "')");
                              $database->query();
                              $idLang = $database->insertid();
                               
                              foreach ($constLang as $item) { 
                                  //if(!isset($item['value_const'])) var_dump($item);
                                  $database->setQuery("SELECT id FROM #__rem_const WHERE const = '" . $item['const'] . "'");
                                  $idConst = $database->loadResult();
                                  if(!array_key_exists ( 'value_const'  , $item ) ){
                                    echo "<br />:loadConstRem, This value constant ".$item['const']." for this lang file "
                                     . $LangLocal['title']." not exist";
                                  } else {
                                    $database->setQuery(
                                     "INSERT INTO #__rem_const_languages (fk_constid,fk_languagesid,value_const) "
                                     . " VALUES ($idConst, $idLang, " . $database->quote($item['value_const']) . ")");
                                    $database->query();
                                  }
                              }
                          }
                      } catch (Exception $e) {
                          $is_exception = true;
                          echo 'Send exception, please write to admin for language check: ',  $e->getMessage(), "\n";
                      }
                   }
              }
            
              if($is_exception) language_check();
              
              //if text constant missing recover they in DB
              if (!defined('_HEADER_NUMBER')) {
              
                    $query = "SELECT c.const, cl.value_const ";
                    $query .= "FROM #__rem_const_languages as cl ";
                    $query .= "LEFT JOIN #__rem_languages AS l ON cl.fk_languagesid=l.id ";
                    $query .= "LEFT JOIN #__rem_const AS c ON cl.fk_constid=c.id ";
                    $query .= "WHERE l.lang_code = 'en-GB'";
                    $database->setQuery($query);
                    $langConst = $database->loadObjectList();
                    foreach ($langConst as $item) {
                        defined($item->const) or define($item->const, $item->value_const);
                    }
             }
        }
        
        //if some language file missing recover it
        $component_path = JPath::clean($mosConfig_absolute_path . '/components/com_realestatemanager/lang/');
        $component_constans = array();
        if (is_dir($component_path) && ($component_constans = JFolder::files($component_path, '^[^_]*\.php$', false, true))) {
            foreach ($component_constans as $i => $file) {
                $isLang = 0;
                $file_name = pathinfo($file);
                $file_name = $file_name['filename'];
                if ($file_name != 'constant') {
                    require($mosConfig_absolute_path . "/components/com_realestatemanager/lang/$file_name.php");
                    //$fileMas[] = $LangLocal;
                    $fileMas[] = $LangLocal['title'];
                    
                }
            }
        }
        
        $database->setQuery("SELECT title FROM #__rem_languages");
        if (version_compare(JVERSION, '3.0', 'lt')) {
            $langs = $database->loadResultArray();
        } else {
            $langs = $database->loadColumn();
        }
    
        if (count($langs) > count($fileMas)) {
            $results = array_diff($langs, $fileMas);
            foreach ($results as $result) {
                $database->setQuery("SELECT lang_code FROM #__rem_languages WHERE title = '$result'");
                $lang_code = $database->loadResult();
                $langfile = "<?php if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) "
                 . "die( 'Direct Access to '.basename(__FILE__).' is not allowed.' );";
                $langfile .= "\n\n/**\n*\n* @package  RealestateManager\n"
                 . "* @copyright 2012 Andrey Kvasnevskiy-OrdaSoft(akbet@mail.ru); Rob de Cleen(rob@decleen.com);\n"
                 . "* Homepage: http://www.ordasoft.com\n* @version: 3.0 Pro\n*\n* */\n\n";
                $langfile .= "\$LangLocal = array('lang_code'=>'$lang_code', 'title'=>'$result');\n\n";
                $langfile .= "\$constLang = array();\n\n";
    
                $query = "SELECT c.const, cl.value_const ";
                $query .= "FROM #__rem_const_languages as cl ";
                $query .= "LEFT JOIN #__rem_languages AS l ON cl.fk_languagesid=l.id ";
                $query .= "LEFT JOIN #__rem_const AS c ON cl.fk_constid=c.id ";
                $query .= "WHERE l.title = '$result'";
    
                $database->setQuery($query);
                $constlanguages = $database->loadObjectList();
    
                foreach ($constlanguages as $constlanguage) {
                    $langfile .= "\$constLang[] = array('const'=>'" . $constlanguage->const
                     . "', 'value_const'=>'" . $database->quote($constlanguage->value_const) . "');\n";
                }
    
                // Write out new initialization file
                $fd = fopen($mosConfig_absolute_path . "/components/com_realestatemanager/lang/$result.php", "w")
                 or die("Cannot create language file.");
                fwrite($fd, $langfile);
                fclose($fd);
            }
        }

    } 
}

if (!function_exists('language_check')) {
    function language_check($component_db_name = 'rem' ) {
         global $database;

                
         $database->setQuery("SELECT * FROM #__".$component_db_name."_languages");
         $langIds = $database->loadObjectList();
         
         print_r("These constants exit in Languages files but not exist in file constants:<br />");
         foreach ($langIds as $langId){
         print_r("<br />Languages: ".$langId->title."<br />");
                $query = " SELECT  l1.*  FROM    #__".$component_db_name."_const_languages as l1 ";
                $query .= " WHERE   l1.fk_languagesid = ".$langId->id." and NOT EXISTS ";
                $query .= " ( SELECT  lc.*  FROM #__".$component_db_name."_const as lc ";
                $query .= " WHERE   lc.id = l1.`fk_constid` ) ";
                $database->setQuery($query);
                $badLangConsts = $database->loadObjectList();
                print_r($badLangConsts);
         }

         print_r("<br />These constants exit in file constants but not exist in Languages files:<br />");
         foreach ($langIds as $langId){

                print_r("<br />Languages: ".$langId->title."<br />");
                $query = " SELECT  lc.*  FROM    #__".$component_db_name."_const as lc ";
                $query .= " WHERE  NOT EXISTS ";
                $query .= " ( SELECT  l1.*  FROM #__".$component_db_name."_const_languages as l1 ";
                $query .= " WHERE lc.id = l1.`fk_constid` and l1.fk_languagesid = ".$langId->id.") ";
                $database->setQuery($query);
                $badLangConsts = $database->loadObjectList();
                print_r($badLangConsts);
         }
    }
}

if (!function_exists('remove_langs')) {
    function remove_langs($component_db_name = 'rem' ) {
         global $database;

               
        $query = " TRUNCATE TABLE #__".$component_db_name."_languages; ";
        $database->setQuery($query);
        $database->query();
        
        $query = " TRUNCATE TABLE #__".$component_db_name."_const; ";
        $database->setQuery($query);
        $database->query();
        
        $query = " TRUNCATE TABLE #__".$component_db_name."_const_languages ;";
        $database->setQuery($query);
        $database->query();
        
    }
}

// Updated on June 25, 2011
// accessgroupid - array which contains accepted user groups for this item
// usersgroupid - groupId of the user
// For anonymous user Uid = 0 and Gid = 0
if (!function_exists('checkAccess_REM')) {

    function checkAccess_REM($accessgroupid, $recurse, $usersgroupid, $acl) {
        if (!is_array($usersgroupid)) {
            $usersgroupid = explode(',', $usersgroupid);
        }
        //parse usergroups
        $tempArr = array();
        $tempArr = explode(',', $accessgroupid);
        for ($i = 0; $i < count($tempArr); $i++) {
            if (((!is_array($usersgroupid) && $tempArr[$i] == $usersgroupid) OR
                   (is_array($usersgroupid) && in_array($tempArr[$i], $usersgroupid))) || $tempArr[$i] == - 2) {
                //allow access
                return true;
            } else {
                if ($recurse == 'RECURSE') {
                    if (is_array($usersgroupid)) {
                        foreach ($usersgroupid as $j)
                            if (in_array($j, $tempArr))
                                return 1;
                    } else {
                        if (in_array($usersgroupid, $tempArr))
                            return 1;
                    }
                }
            }
        } // end for
        //deny access
        return 0;
    }

}
if (!function_exists('editorArea')) {

    function editorArea($name, $content, $hiddenField, $width, $height, $col, $row, $option = true) {
        jimport('joomla.html.editor');
        $editor = JFactory::getEditor();
        echo $editor->display($hiddenField, $content, $width, $height, $col, $row, $option);
    }

}

if (!class_exists('getLayoutPath')) {

    class getLayoutPath {

        static function getLayoutPathCom($components, $type, $layout = 'default') {
            $template = JFactory::getApplication()->getTemplate();
            $defaultLayout = $layout;

            if (strpos($layout, ':') !== false) {
                // Get the template and file name from the string
                $temp = explode(':', $layout);
                $template = ($temp[0] == '_') ? $template : $temp[0];
                $layout = $temp[1];
                $defaultLayout = ($temp[1]) ? $temp[1] : 'default';
            }

            // Build the template and base path for the layout
            $tPath = JPATH_THEMES . '/' . $template . '/html/' . $components . '/' . $type . '/' . $layout . '.php';
            $cPath = JPATH_BASE . '/components/' . $components . '/views/' . $type . '/tmpl/' . $layout . '.php';
            $dPath = JPATH_BASE . '/components/' . $components . '/views/' . $type . '/tmpl/default.php';
            // If the template has a layout override use it
            if (file_exists($tPath)) {
                return $tPath;
            } else if (file_exists($cPath)) {
                return $cPath;
            } else if (file_exists($dPath)) {
                return $dPath;
            } else {
                echo "Bad layout path, please write to admin";
                exit;
            }
        }

    }

}

if (!function_exists('getLayoutsRem')) {

        function getLayoutsRem($components, $type) {
            global $database;
            $database = JFactory::getDBO();
            // get current template on frontend
            $template = '';
            $query = "SELECT template FROM #__template_styles WHERE client_id=0 AND home=1"; 
            $database->setQuery($query);
            $template = $database->loadResult();

            // Build the template and base path for the layout
            $tPath = JPATH_SITE . '/templates/' . $template . '/html/' . $components . '/' . $type . '/';
            $cPath = JPATH_SITE . '/components/' . $components . '/views/' . $type . '/tmpl/';

            $layouts1 = array();
            $layouts3 = array();
                   
            if (is_dir($tPath) && ($layouts1 = JFolder::files($tPath, '^[^_]*\.php$', false, true))) {
            
                foreach ($layouts1 as $i => $file) {
                    $select_file_name = pathinfo($file);
                    $select_file_name = $select_file_name['filename'];
                    $layouts3[] = $select_file_name;
                }
            } 
            $layouts2 = array();
            $layouts4 = array();
            
            if (is_dir($cPath) && ($layouts2 = JFolder::files($cPath, '^[^_]*\.php$', false, true))) {
            
                foreach ($layouts2 as $i => $file) {
                    $select_file_name = pathinfo($file);
                    $select_file_name = $select_file_name['filename'];
                    $layouts4[] =  $select_file_name;
                }
            } 
            $layouts = array_merge($layouts3,$layouts4);
            $layouts = array_unique($layouts);
            return $layouts;  
        }
}

if(!function_exists('transforDateFromPhpToJquery')){
    function transforDateFromPhpToJquery(){
      global $realestatemanager_configuration;
      $DateToFormat = str_replace("d",'dd',(str_replace("m",'mm',(str_replace("Y",'yy',(
        str_replace('%','',$realestatemanager_configuration['date_format'])))))));
      return $DateToFormat;
    }
}

if (!function_exists('data_transform_rem')) {

    function data_transform_rem($date, $date_format = "from") {
        global $realestatemanager_configuration, $database;     
        
        if (strstr($date, "00:00:00") OR strlen($date) < 11) {
            $format = $realestatemanager_configuration['date_format'];
            $formatForDateFormat = 'Y-m-d';
        } else {
            $format = $realestatemanager_configuration['date_format']. " "
               . $realestatemanager_configuration['datetime_format'];
            $formatForDateFormat = 'Y-m-d H:i:s';
        }
         
        $formatForCreateObjDate = str_replace("%","",$format); 
        
        if(function_exists('date_format')){
          
            $dateObject = date_create_from_format($formatForCreateObjDate, $date);

            if($dateObject){
                $date = date_format($dateObject, $formatForDateFormat);
            }else{
                $dateObject = date_create_from_format($formatForDateFormat, $date);
                if($dateObject){
                    $date = date_format($dateObject, $formatForDateFormat);
                }  
            }  
        }else{
            $query = "SELECT STR_TO_DATE('$date','$format')"; 
            $database->setQuery($query);
            $normaDat = $database->loadResult(); 
        
            if(strlen($normaDat) > 0){
                $date = $normaDat;
            }           
        }
        return $date;
        
    }

} 


if(!function_exists('checkRentDayNightREM')){
    
    
    function checkRentDayNightREM ($from, $until, $rent_from, $rent_until, $realestatemanager_configuration){

        if(isset($realestatemanager_configuration) && $realestatemanager_configuration['special_price']['show']){
            
            if (( $rent_from >= $from &&
                  $rent_from <= $until) || ($rent_from <= $from && 
                  $rent_until >= $until) || ( 
                  $rent_until >= $from && $rent_until <= $until))
                {
                    return 'Sorry, this item not is available from " '. $from .' " until " '. $until . '"';
                }
            }else{
                
                if($rent_from === $rent_until){
                    return 'Sorry, not one night, not selected'; 
                }

                if($rent_from < $until && $rent_until > $from){
                    return 'Sorry, this item not is available from " '. $from .' " until " '. $until . '"';                       
                }                              
            }
    }
}
if(!function_exists('createRentTable')){
        function createRentTable($rentTerm, $massage, $typeMessage){
            global $realestatemanager_configuration;
                      if($typeMessage === 'error'){
                    echo '<div id ="message-here" style ="color: red; font-size: 18px;" >'.$massage.'</div>';
                }else{
                    echo '<div id ="message-here" style ="color: gray; font-size: 18px;" >'.$massage.'</div>';            
                }   
      
            echo '<div id ="SpecialPriseBlock">';
                echo '<table class="adminlist_04" width ="100%" align ="center">';
                    echo '<tr>';
                        echo '<th class="title" align ="center" width ="25%">'.
                          _REALESTATE_MANAGER_RENT_PRICE_PER_DAY.'</th>';
                        echo '<th class="title" align ="center" width ="25%">'.
                          _REALESTATE_MANAGER_FROM.'</th>';
                        echo '<th class="title" align ="center" width ="25%" >'
                          ._REALESTATE_MANAGER_TO.'</th>';
                        echo '<th class="title" >'._REALESTATE_MANAGER_LABEL_REVIEW_COMMENT.'</th>';
                        echo '<th class="title" align ="center" width ="25%">'.
                          _REALESTATE_MANAGER_LABEL_CALENDAR_SELECT_DELETE.'</th>';
                    echo '</tr>';
                
                    for ($i = 0; $i < count($rentTerm); $i++) {  
                        $DateToFormat = str_replace("D",'d',(str_replace("M",'m',(str_replace('%','',
                          $realestatemanager_configuration['date_format'])))));
                        $date_from = new DateTime($rentTerm[$i]->price_from);
                        $date_to = new DateTime($rentTerm[$i]->price_to);
             
                        echo '<tr>';
                            echo '<td align ="center">'.$rentTerm[$i]->special_price.'</td>';
                            echo '<td align ="center">'.date_format($date_from, $DateToFormat).'</td>';
                            echo '<td align ="center">'.date_format($date_to, $DateToFormat).'</td>';
                            echo '<td>'.$rentTerm[$i]->comment_price.'</td>';
                            echo '<td align ="center"><input type="checkbox" name="del_rent_sal[]" value="'
                             .$rentTerm[$i]->id.'"</td>';
                                      
                        echo '</tr>';
                    }   
                echo '</table>';
                echo '<p>';
        
       
                echo '<p>';             
            echo '</div>' ;
             
            exit;
        } 
}


if(!function_exists('rentPriceREM')){
    
    
    function rentPriceREM($bid,$rent_from,$rent_until,$special_price,
      $comment_price,$currency_spacial_price){
    

        global $database, $realestatemanager_configuration;
        $rent_from_transf = data_transform_rem($rent_from);
        $rent_until_transf = data_transform_rem($rent_until);
        
        if($bid==''){
            $rentTerm = array();
            createRentTable($rentTerm, 'Please save or apply this item first','error');
            return;
        }

        $query = "SELECT * FROM #__rem_rent_sal where fk_houseid = " . $bid;
        $database->setQuery($query);
        $rentTerm = $database->loadObjectList();    
 
       
        if($special_price==''){
            createRentTable($rentTerm, 'You need fill Price','error');
        }
        if($rent_from==''){
            createRentTable($rentTerm, 'You need fill Check In','error');
        }
        if($rent_until==''){
            createRentTable($rentTerm, 'You need fill Check Out','error');
        }
        if($rent_from_transf >$rent_until_transf){
            createRentTable($rentTerm, 'Incorrect Check Out','error');
        }
      
        
        foreach ($rentTerm as $oneTerm){
            $returnMessage = checkRentDayNightREM (($oneTerm->price_from),($oneTerm->price_to),
               $rent_from_transf, $rent_until_transf, $realestatemanager_configuration);
                
            if(strlen($returnMessage) > 0){
                createRentTable($rentTerm, $returnMessage, 'error');
            }   
        }                                        
               
        $sql = "INSERT INTO #__rem_rent_sal (fk_houseid, price_from, price_to,
           special_price, priceunit, comment_price) VALUES (" . $bid . ", '" .
            $rent_from_transf . "', '" . $rent_until_transf . "', '" .
             $special_price . "','" . $currency_spacial_price . "','" . 
             $comment_price . "')";             
        $database->setQuery($sql);
        $database->query(); 

        $query = "SELECT * FROM #__rem_rent_sal where fk_houseid = " . $bid;
        $database->setQuery($query);
        $rentTerm = $database->loadObjectList();
        
        createRentTable($rentTerm, 'Add special price on data: from "'.
          $rent_from.'" to "'.$rent_until.'"','');
    }
}


if(!function_exists('calculatePriceREM')){
    function calculatePriceREM ($hid,$rent_from,$rent_until,$realestatemanager_configuration,$database){
        
        
        $rent_from = data_transform_rem($rent_from);
        $rent_until = data_transform_rem($rent_until);
        
        if($rent_from >$rent_until){
            echo '0';exit;
        }
        if($realestatemanager_configuration['special_price']['show']){
            $query = "SELECT * FROM #__rem_rent_sal WHERE fk_houseid = ".$hid .
                " AND (price_from <= ('" .$rent_until. "') AND price_to >= ('" .$rent_from. "'))";   
        }else{
            $query = "SELECT * FROM #__rem_rent_sal WHERE fk_houseid = ".$hid .
                " AND (price_from < ('" .$rent_until. "') AND price_to > ('" .$rent_from. "'))";         
        }
        $database->setQuery($query);
        $data_for_price = $database->loadObjectList(); 
        
        $zapros = "SELECT price, priceunit FROM #__rem_houses WHERE id=" . $hid . ";";
        $database->setQuery($zapros);
        $item_rem = $database->loadObjectList(); 
        
        $rent_from_ms = date_to_data_ms($rent_from); 
        $rent_to_ms = date_to_data_ms($rent_until);
        
        if($realestatemanager_configuration['special_price']['show']){                      
            $rent_to_ms = $rent_to_ms + (60*60*24);           
        }
        
        $count_day = (($rent_to_ms - $rent_from_ms)/60/60/24);
        $count_day = round($count_day);
        $array_day_between_to_from[0]=$rent_from; 

        for($i = 1; $i < $count_day; $i++){
            $array_day_between_to_from[]=date('Y-m-d',$rent_from_ms + (60*60*24)*($i));
        } 

        $count_day_spashal_price = 0;                 
        $comment_rent_price = '';
        $count_spashal_price = 0;
        
        foreach ($data_for_price as $one_period){
            $from = $one_period->price_from;
            $to = $one_period->price_to; 

            for ($day = 0; $day < $count_day; $day++){ 
                $currentday = ($array_day_between_to_from[$day]);
                
                if(isset($realestatemanager_configuration)
                 && $realestatemanager_configuration['special_price']['show']){
                    if (($currentday >= $from) && ($currentday <= $to)){   
                        $count_day_spashal_price++;   
                        $count_spashal_price += $one_period->special_price;
                    }                     
                }else{
                    if (($currentday >= $from) && ($currentday < $to)){   
                        $count_day_spashal_price++;   
                        $count_spashal_price += $one_period->special_price;
                    }                      
                } 
            }        
        }
 
        $count_day_not_sp_price = $count_day - $count_day_spashal_price;
        $sum_price_not_sp_price =  $count_day_not_sp_price * $item_rem[0]->price;
        $sum_price = $sum_price_not_sp_price + $count_spashal_price;
    
        $returnArr[0]=$sum_price; 
        $returnArr[1]=$item_rem[0]->priceunit; 
        $returnArr[2]=$comment_rent_price;
        
        return $returnArr;
    }
}


if(!function_exists('getCountHouseForSingleUserREM')){
    
    
    function getCountHouseForSingleUserREM($my,$database,$realestatemanager_configuration){
        
              
        $user_group = userGID_REM($my->id);         
        $user_group_mas = explode(',', $user_group);
        $max_count_house = 0;
                
        foreach ($user_group_mas as $value) {            
            $count_house_for_single_group =
             $realestatemanager_configuration['user_manager_rem'][$value]['count_homes'];
            
            if($count_house_for_single_group>$max_count_house){
                $max_count_house = $count_house_for_single_group;
            }            
        }
        
        $count_house_for_single_group = $max_count_house;  
        $database->setQuery("SELECT COUNT('houseid') as `count_homes` " .
         "FROM #__rem_houses WHERE owner_id= '" . $my->id. "'AND published='1'" );
        $house_single_user = $database->loadObject();
        $count_house_single_user = $house_single_user->count_homes;
        $returnarray = array();
        $returnarray[0] = $count_house_single_user;
        $returnarray[1] = $count_house_for_single_group;
        return $returnarray;      
    }
}


if(!function_exists('checkOrder')){
    function checkOrder($houseId){
        global $database;
        $sql = "SELECT id FROM #__rem_orders WHERE fk_house_id = '".$houseId."'";
        $database->setQuery($sql);
        $order_id = $database->loadResult();
        if(!$order_id){
            $sql = "INSERT INTO #__rem_orders(fk_house_id)
                                    VALUES ('".$houseId."')";
            $database->setQuery($sql);
            $database->query();
            $order_id = $database->insertid();
        }
        return $order_id;
    }
}

if(!function_exists('getHTMLPayPal')){

  function getHTMLPayPal($vehicle,$plugin_name_select)
  {
    if(!getPublicPlugin()){
        echo _REALESTATE_MANAGER_RENT_INSTALL_PAYPAL;
    }else{
        $dispatcher = JDispatcher::getInstance();
        $plugin = JPluginHelper::importPlugin( 'payment',$plugin_name_select);
        $data = array('vtitle' => $vehicle->htitle, 'price' => $vehicle->price, 'currency_code' => $vehicle->priceunit);
        $html = $dispatcher->trigger('getHTMLPayPal', array($data));
        echo $html[0];
    }
  }
}

if(!function_exists('getPublicPlugin')){
 
    function getPublicPlugin(){
             $db = JFactory::getDBO();
         $condtion = array(0 => '\'payment\'');
         $condtionatype = join(',',$condtion);
             if(JVERSION >= '1.6.0')
             {
                 $query = "SELECT extension_id as id,name,element,enabled as published
                     FROM #__extensions
                     WHERE folder in ($condtionatype) AND enabled=1";
             }
             else
             {
                 $query = "SELECT id,name,element,published
                     FROM #__plugins
                     WHERE folder in ($condtionatype) AND published=1";
             }
         $db->setQuery($query);
         $gatewayplugin = $db->loadobjectList();

         $retr = count($gatewayplugin);
             if($retr>0){
                 $ret_string = "";
                     for($i=0;$i<$retr;$i++){                                           
                             $ret_string .= "<option value='".$gatewayplugin[$i]->name."'>"
                               .$gatewayplugin[$i]->name."</option>";
                     }
             return $ret_string;
             } 
             else{
                 return false;
             }

  }
 
}
if(!function_exists('saveAssociateCayegoriesREM')){

    function saveAssociateCayegoriesREM($post, $database){

        $currentId = $post['id'];
        if($currentId){
            $i = 1;
            $assocArray = array();
            $assocCategoryId = array();

            while(isset($post['associate_category'.$i])){
                $langAssoc = $post['associate_category_lang'.$i];
                $valAssoc = $post['associate_category'.$i];
                $assocArray[$langAssoc] = $valAssoc;
                if($valAssoc){
                    $assocCategoryId[] = $valAssoc;  
                }
            
                $i++;
            }
            $currentId = $post['id'];
            $currentLang = $post['language'];
            $assocArray[$currentLang] = $currentId;
            $assocStr = serialize($assocArray);
 
            $query = "select `associate_category` from #__rem_main_categories where `id` = ".$currentId."";
            $database->setQuery($query);
            $oldAssociate = $database->loadResult(); 
            $oldAssociateArray = unserialize($oldAssociate);
              
            if($oldAssociateArray){
                foreach ($oldAssociateArray as $key => $value) {
                    if($value && !isset($assocCategoryId[$value])){
                        $assocCategoryId[] = $value;                    
                    }
                }    
            }
            
            if(!isset($assocCategoryId[$currentId])){
                $assocCategoryId[] = $currentId;                    
            }
            
            $idToChange = implode(',' , $assocCategoryId);
                
            if(count($idToChange) && !empty($idToChange)){  
                $query = "UPDATE #__rem_main_categories SET `associate_category`='"
                  .$assocStr."' where `id` in (".$idToChange.")";
                $database->setQuery($query);
                $database->query();       
            }       
        }  
    }
}
    
if(!function_exists('getAssociateHousesLang')){
 
    function getAssociateHousesLang($hoseIds){
        
        global $database;   
        $query = "select associate_house from #__rem_houses where id = ".$hoseIds.
          " and associate_house is not null";     
        $database->setQuery($query);
        $houseAssociateHouse = $database->loadResult();             
        if (!empty($houseAssociateHouse)){
            $houseLangIds = unserialize($houseAssociateHouse);
            return $houseLangIds;
        }
    }   
}

if(!function_exists('getAssociateHouses')){
 
    function getAssociateHouses($hoseIds){
    
        global $database;

        $one = array();
        
        $query = "select associate_house from #__rem_houses where id = ".$hoseIds.
          " and associate_house is not null";
     
        $database->setQuery($query);
        $houseAssociateHouse = $database->loadResult(); 
  
        
        if (!empty($houseAssociateHouse)){
            $hoseIds = unserialize($houseAssociateHouse);
  
            foreach($hoseIds as $oneHouse){
              if($oneHouse != 0){
                  $one[] = $oneHouse;         
              }
            } 

        $bids = implode(',', $one);
        return $bids;
        }
    }   
}

if(!function_exists('getAssociateDiff')){
 
    function getAssociateDiff($assocArray1,$assocArray2){
        
       global $database;
       
       $diff_ids = array();
       
        $diff = array_diff($assocArray1,$assocArray2);                  
        foreach($diff as $key => $value){
            if($value != 0){
                    $diff_ids[] = $value;                    
            }
        }               
        
        return $diff_ids ;
    }   
}

if(!function_exists('getAssociateOld')){
 
    function getAssociateOld(){
        
        global $database;
        $id_check = JRequest::getVar('id', "");
       
            $query = "select `associate_house` from #__rem_houses where `id` = ".$id_check."";             
            $database->setQuery($query);
            $oldAssociate = $database->loadResult();           
            $oldAssoc_func = unserialize($oldAssociate);
        
        return $oldAssoc_func;
        
      
    }   
}

if(!function_exists('ClearAssociateDiff')){
 
    function ClearAssociateDiff(){
        
      global $database;
      
      $id_check = JRequest::getVar('id', ""); 
      $language_post = JRequest::getVar('language', "");     
       $oldAssociateArray = getAssociateOld();
       $i = 1;
       $assocArray = array();
       while(count(JRequest::getVar("associate_house".$i))){           
                 $langAssoc = JRequest::getVar("associate_house_lang".$i);                
                 $valAssoc = JRequest::getVar("language_associate_house".$i);              
                 $assocArray[$langAssoc] = $valAssoc;                       
                 $i++;
             }             
       $assocArray[$language_post] = $id_check;
       if(!empty($oldAssociateArray) && !empty($assocArray))
      $old_ids_assoc = getAssociateDiff($oldAssociateArray,$assocArray);
              if(count($old_ids_assoc)>0)
              {   
                  foreach($old_ids_assoc as $key => $value) {             
                    $diff_assoc2 = getAssociateHouses($value);    
                    if(!empty($diff_assoc2)){
                      $ids_assoc_diff2 = explode(',', $diff_assoc2);
                      foreach ($ids_assoc_diff2 as $key2 => $value2){
                        if(!in_array($value2,$old_ids_assoc)){
                          $assoc_lang = getAssociateHousesLang($value);
                          foreach ($assoc_lang as $key3 => $value3){
                            if($value3 == $value2){
                              $assoc_lang[$key3] = 0;                    
                            } 
                          }
                          $houseLangIds = serialize($assoc_lang);
                          $query = "UPDATE #__rem_houses SET `associate_house`='".$houseLangIds.
                            "' where `id` = ".$value."";
                          $database->setQuery($query);
                          $database->query();                        
                        }
                      }
                    }                   
                  }
              }  
        if(!empty($oldAssociateArray) && !empty($assocArray))
        $new_ids_assoc = getAssociateDiff($assocArray,$oldAssociateArray);
        if(count($new_ids_assoc)>0)
        {   
            foreach($new_ids_assoc as $key => $value) {            
              $diff_assoc2 = getAssociateHouses($value);  
              if(!empty($diff_assoc2)){
              $ids_assoc_diff2 = explode(',', $diff_assoc2);
                foreach ($ids_assoc_diff2 as $key2 => $value2){
                  if($value2 == $value || $value2 == 0 ) continue;
                  $assoc_lang = getAssociateHousesLang($value2);
                  foreach ($assoc_lang as $key3 => $value3){
                    if($value3 == $value){
                      $assoc_lang[$key3] = 0;                    
                    }
                  }                       
                  $houseLangIds = serialize($assoc_lang);
                  $query = "UPDATE #__rem_houses SET `associate_house`='".$houseLangIds.
                    "' where `id` = ".$value2."";
                  $database->setQuery($query);
                  $database->query(); 
                }
              }                   
            }
        }  
    }   
}

if(!function_exists('edit_house_associate')){
 
    function edit_house_associate($house){
      global $my, $database;
      
      $associateArray = array();
      $userid = $my->id;
          
      $query = "SELECT lang_code FROM `#__languages` ";
      $database->setQuery($query);
      $allLanguages =  $database->loadColumn(); 
   

      $query = "SELECT id,language,htitle FROM `#__rem_houses` WHERE owner_id = " . $userid . "";
      $database->setQuery($query);
      $allhouse =  $database->loadObjectlist(); 

      $query = "select associate_house from #__rem_houses where id =".$house->id;
      $database->setQuery($query);
      $houseAssociateHouse =  $database->loadResult(); 
  
      if(!empty($houseAssociateHouse)){
          $houseAssociateHouse = unserialize($houseAssociateHouse);
      }else{
          $houseAssociateHouse = array();
      }
    
      $i=0;
      foreach ($allLanguages as $oneLang) {
        $i++;
        $associate_house = array();
        $associate_house[] = mosHtml::makeOption(0, 'select'); 
      
        foreach($allhouse as $oneHouse){
            if($oneLang == $oneHouse->language && $oneHouse->id != $house->id){
                $associate_house[] = mosHtml::makeOption(($oneHouse->id), $oneHouse->htitle);
            } 
        } 

        if($house->language != $oneLang){
     
          if(isset($houseAssociateHouse[$oneLang]) && 
            $houseAssociateHouse[$oneLang] !== $house->id ){
              $associateArray[$oneLang]['assocId'] = $houseAssociateHouse[$oneLang];
          }else{
              $associateArray[$oneLang]['assocId'] = 0;
          }
          
          $associate_house_list = mosHTML :: selectList($associate_house, 
            'language_associate_house'.$i,
            'class="inputbox" size="1"', 'value', 'text', 
            $associateArray[$oneLang]['assocId']); 
            
        }else{
            $associate_house_list = null;
        }
         
        $associateArray[$oneLang]['list'] = $associate_house_list;

        if(isset($houseAssociateHouse[$oneLang]) && 
          $houseAssociateHouse[$oneLang] !== $house->id ){
            $associateArray[$oneLang]['assocId'] = $houseAssociateHouse[$oneLang];
        }else{
            $associateArray[$oneLang]['assocId'] = 0;
        }
      }    
      return $associateArray;
    }    
}
   
   
if(!function_exists('save_house_associate')){
 
    function save_house_associate(){
    global  $database;
    
        $id_check = JRequest::getVar('id', "");
        $id_true = JRequest::getVar('idtrue', "");
        $language_post = JRequest::getVar('language', "");
        
        if($id_check){
           if(empty($id_true)){
       
        //----------get new values (what house we choose for chaque language) --------------------------//
            $i = 1;
            $assocArray = array();
            $assocHouseId = array();

            while(count(JRequest::getVar("associate_house".$i))){           
                $langAssoc = JRequest::getVar("associate_house_lang".$i, '');                
                $valAssoc = JRequest::getVar("language_associate_house".$i,'');
                if($valAssoc == '' ) {
                    $i++;
                    continue;
                }
                $assocArray[$langAssoc] = $valAssoc;              
                if($valAssoc){
                    $assocHouseId[] = $valAssoc;  //----Array of new house_ids                   
                }            
                $i++;
            }
            if(count($assocArray) > 0 ) {
             
            
                $assocArray[$language_post] = $id_check;            
                $assocStr = serialize($assocArray);
                
            //-----------slect associate with old values------------------------------------------//
                $oldAssociateArray = getAssociateOld();
            //----------------------------------------------------------------//
                
                if(!isset($assocHouseId[$id_check])){        
                    $assocHouseId[] = $id_check;                           
                }
             
                if($assocArray !== $oldAssociateArray){   //-----------compare old and new values--
                   
            //---------set null for houses that are not more in associates----------------//
                ClearAssociateDiff();
       
            //---------set new associates for houses that are choosed----------------//
            //--ids of new houses  where we set new values for column associate_house
                  $idToChange = implode(',' , $assocHouseId); 
                  if(count($idToChange) && !empty($idToChange)){  
                      $query = "select * from #__rem_rent where `fk_houseid` in (".$idToChange.
                        ") and `rent_return` is NULL";
                      $database->setQuery($query);
                      $CheckAssociate = $database->loadObjectList(); 
                      if(!empty($CheckAssociate))
                      {
                        echo "<script> alert('"._REALESTATE_MANAGER_MUST_RETURN_HOUSES_FROM_RENT
                          ."'); window.history.go(-1); </script>";
                        exit;
                      }
                      $query = "UPDATE #__rem_houses SET `associate_house`='".$assocStr.
                        "' where `id` in (".$idToChange.")";
                      $database->setQuery($query);
                      $database->query();            
                  }else{
                      $query = "UPDATE #__rem_houses SET `associate_house`= null where `id` = ".$id_check."";
                      $database->setQuery($query);
                      $database->query();     
                  }
                }
            }
          }
        } 
    
    }
}

if(!function_exists('available_dates')){
 
    function available_dates($house_id){
        
       global $database;
        $date_NA='';
        $query = "SELECT rent_from, rent_until FROM #__rem_rent WHERE fk_houseid='".$house_id.
          "' AND rent_return is null";
        $database->setQuery($query);
        $calenDate = $database->loadObjectList();
    // create a massiv of all dates when houses are in rent and then is used for 
    // make dates unavailable in calendar for rent 
         foreach($calenDate as $calenDate){
         
            $not_av_from = $calenDate->rent_from;
            $not_av_until = $calenDate->rent_until;
            $not_av_from_begin = new DateTime( $not_av_from);
            $not_av_until_end = new DateTime( $not_av_until);
            $not_av_until_end = $not_av_until_end->modify( '+1 day' ); 
            $interval = new DateInterval('P1D');
            $daterange = new DatePeriod($not_av_from_begin, $interval, $not_av_until_end);
                foreach($daterange as $datess){
                    $date_NA[] = $datess->format("Y-m-d");
                    $date_NA[] = $datess->format("d-m-Y");
                }
            }               
        
        return $date_NA;
    }   
}