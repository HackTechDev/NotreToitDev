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
$mosConfig_absolute_path = $GLOBALS['mosConfig_absolute_path'] = JPATH_SITE;
require_once($mosConfig_absolute_path . "/components/com_realestatemanager/compat.joomla1.5.php");

function RealEstateManagerBuildRoute(&$query) {



//       print_r ("!!!!!!!!start RealEstateManagerBuildRoute     ---- ");
//       print_r($query);

    $segments = array();
    $db = JFactory::getDBO();
    if (isset($query['Itemid']) && $query['Itemid'] !== 0) {
        $menu = @JSite::getMenu();
        if (!isset($query['view']) && !isset($query['task'])) {
            if (version_compare(JVERSION, "1.6.0", "lt")) {
                @$query['view'] = $menu->getItem($query['Itemid'])->query['task'];
            } else if (version_compare(JVERSION, "1.6.0", "ge") && version_compare(JVERSION, "3.5.100", "lt")) {
                @$query['view'] = $menu->getItem($query['Itemid'])->query['view'];
            }
        }
        if (isset($query['view']) && $query['view'] == "alone_category") {
            if (version_compare(JVERSION, '3.0', 'ge')) {
                $menu = new JTableMenu($db);
                $menu->load($query['Itemid']);
                $params = new JRegistry;
                $params->loadString($menu->params);
            } else {
                $menu = new mosMenu($db);
                $menu->load($query['Itemid']);
                $params = new mosParameters($menu->params);
            }
            // $single_category = $params->get('single_category', '');
            // if ($single_category != "")
            //     $query['catid'] = $single_category;
        }
    }

    if (isset($query['option']) && $query['option'] == 'com_realestatemanager') { //check component
       
        // echo "--=>"; print_r($query); echo "<=--";
       if (isset($query['view']) && ($query['view']== 'all_houses' 
        || $query['view'] == 'all_categories' 
        || $query['view'] == 'alone_category'
        || $query['view'] == 'view_house'
        || $query['view'] == 'my_houses'
        || $query['view'] == 'view_user_houses')) {
            //echo "777777777777766666666666666";
            //$segments[0] = (isset($query['Itemid'])) && ($query['Itemid'] != 0) ? $query['Itemid'] : '0';
            //$query['task'] = 'view';
        }else{

        $segments[0] = (isset($query['Itemid'])) && ($query['Itemid'] != 0) ? $query['Itemid'] : '0';
        if ((isset($query['view'])) && (!isset($query['task']))) {
            $query['task'] = $query['view'];
        }}
       //print_r($query['task']);exit;
        if (isset($query['task'])) {
            switch ($query['task']) {
                case 'all_houses':
                    $segments[1] = 'all_houses';
                    break;
                case 'my_houses':
                    $segments[1] = 'my_houses';
                    break;
                case 'new_url':
                    $segments[1] = 'buy_now';
                    break;
                case 'new_url_for_vm':
                    $segments[1] = 'buy_now_for_rem';
                    break;
                    
                 case 'search':
                 case 'search_houses':
                      $segments[1] = 'search';
                     break;
                    
                case 'view_user_houses':
                case 'owner_houses':
                    $segments[1] = $query['task'];
                    if (isset($query['name'])) {
                        //$segments[] = JFilterOutput::stringURLSafe($query['name']);
                        $segments[] = $query['name'];
                        unset($query['name']);
                    }
                    break;
                default:
                    $segments[1] = $query['task'];
                    break;
            }
        }
        unset($query['task']);
        unset($query['view']);

        if (isset($query['catid']) && $segments[1] != "search") {
            if ($query['catid'] > 0) {
                /* $sql_query = "SELECT rmc.id, rmc.name, rc.idcat, rmc.parent_id ".
                  " FROM #__realestatemanager_main_categories AS rmc".
                  " LEFT JOIN #__realestatemanager_categories AS rc ON rc.idcat=rmc.id ".
                  " LEFT JOIN #__realestatemanager_houses AS r ON rc.iditem = r.id ".
                  " WHERE rmc.section = 'com_realestatemanager' AND rmc.id = ".intval($query['catid']); */
                $sql_query = "SELECT rmc.id, rmc.name, rc.idcat, rmc.parent_id " .
                 " FROM #__rem_main_categories AS rmc" .
                 " LEFT JOIN #__rem_categories AS rc ON rc.idcat=rmc.id " .
                 " LEFT JOIN #__rem_houses AS r ON rc.iditem = r.id " .
                 " WHERE rmc.section = 'com_realestatemanager' AND rmc.id = " . intval($query['catid']);
                $db->setQuery($sql_query);
                $row = null;
                $row = $db->loadObject();
                if (isset($row)) {
//                  print_r($db);
//                  print_r(":1111111111111:");
//                  print_r($row);
                    $cattitle = array();
                    $segments[] = $query['catid']."-".$row->name;
                    //$segments[] = $row->name;
                    unset($query['catid']);
                }
            } else {
                $temp = $query['catid']; //is catid set??
                unset($query['catid']);
            }
        }

        if (!empty($query['lang'])) {
            unset($query['lang']);
        }
        // if (isset($query['Itemid'])) {
        //     unset($query['Itemid']);
        // }
        // if (!empty($query['Itemid'])) {
        //     $query['Itemid'] = "";
        //     unset($query['Itemid']);
        // }
        if (isset($query['name'])) {
            $segments[] = JFilterOutput::stringURLSafe($query['name']);
            unset($query['name']);
        }
        if (isset($query['user'])) {
            $segments[] = $query['user'];
            unset($query['user']);
        }
        if (isset($query['id'])) {
            $sql_query = "SELECT rc.idcat AS catid, r.htitle" .
             "\n FROM #__rem_houses AS r" .
             "\n LEFT JOIN #__rem_categories AS rc ON rc.iditem=r.id" .
             "\n LEFT JOIN #__rem_main_categories AS rmc ON rmc.id=rc.idcat" .
             "\n WHERE r.id = " . intval($query['id']);
            $db->setQuery($sql_query);
            $row = null;
            $row = $db->loadObject();
            if (isset($row)) {
                $temp_title = JFilterOutput::stringURLSafe($row->htitle);
                if (isset($temp)) {
                    /* $sql_query = "SELECT name FROM #__realestatemanager_main_categories WHERE id = ".$row->catid; */
                    $sql_query = "SELECT name FROM #__rem_main_categories WHERE id = " . $row->catid;
                    $db->setQuery($sql_query);
                    $row = $db->loadObject();
                    if (isset($row)) {
                        $segments[] = $row->name;
                    }
                }
                $segments[] = $query['id']; //for back up in parseroute
                $segments[] = $temp_title;
                unset($query['id']);
            }
        }


        if (isset($query['start'])) {
            if( count($segments) == 0 ) $segments[] = "page";
            $segments[] = $query['start'];
            if (isset($query['limitstart'])) {
                $segments[] = $query['limitstart'];
                unset($query['limitstart']);
            } else {
                $segments[] = $query['start'];
            }
            unset($query['start']);
        } else if (isset($query['limitstart'])) {
            $segments[] = $query['limitstart'];
            unset($query['limitstart']);
        }
        if (isset($query['searchtext'])) {
            $segments[] = $query['searchtext'];
            unset($query['searchtext']);
        }
        if (isset($query['searchtype'])) {
            $segments[] = $query['searchtype'];
            unset($query['searchtype']);
        }
    }
    //unset($query);
    if (count($segments) == 1) {
        $segments[] = 'all_categories';
    }

    $total = count($segments);

    for ($i = 0; $i < $total; $i++)
    {
      $segments[$i] = str_replace(':', '-', $segments[$i]);
    }

//       print_r ("end RealEstateManagerBuildRoute     ---- ");
//       print_r($segments);

    return $segments;
}

/**
 * Parse the segments of a URL.
 *
 */
function RealEstateManagerParseRoute($segments) {


//        ECHO "*****start RealEstateManagerParseRoute****";
//        print_r($segments);
//        ECHO "******************************************";

    $vars = array();


    $total = count($segments);
    $vars = array();

    for ($i = 0; $i < $total; $i++)
    {
      $segments[$i] = preg_replace('/-/', ':', $segments[$i], 1);
    }


    // Get the active menu item.
    $app = new JSite();
    $menu = $app->getMenu() ;
    $item  = $menu->getActive();
    $db = JFactory::getDbo();

    if (!isset($item))
    {
      $vars['option'] = 'com_realestatemanager';
      array_unshift($segments,'0');
//      return $vars;
    }

//     $vars['Itemid'] = $item->id;
//     $vars['task'] = $item->query['view'];
//         print_r($vars);exit;


    if ((@$segments[1] == "alone_category" || @$segments[1] == "showCategory") && isset($segments[2]) ) {
        if (@$vars['task'] == "alone_category") {
            $vars['task'] = "alone_category";
        } else {
            $vars['task'] = "showCategory";
        }

        $query_part = explode(':', $segments[2]);
        $vars['catid'] = (int) $query_part[0];

        if (isset($segments[3])) {
            $vars['start'] = $segments[3];
        } else {
            unset($vars['start']);
        }
        if (isset($segments[4]) ) {
            $vars['limitstart'] = $segments[4];
        } else {
            unset($vars['limistart']);
        }


    } elseif ( (@$segments[1] == "view" || @$segments[1] == "view_house"
          || @$segments[1] == "showCategory") && isset($segments[4])) {
        if (@$segments[1] == "view" || @$segments[1] == "view_house" ) {
            $vars['task'] = $segments[1]; 
            $query_part = explode(':', $segments[2]);
            $vars['catid'] = (int) $query_part[0];
            $vars['id'] = $segments[3];
        } else
            $vars['task'] = "showCategory";

        if (isset($segments[3]) ) {
            $vars['start'] = $segments[3];
        } else {
            unset($vars['start']);
        }
        if (isset($segments[5]) ) {
            $vars['limitstart'] = $segments[5];
        } else {
            unset($vars['limitstart']);
        }
    } elseif (@$segments[1] == "show_add") {
        $vars['task'] = "show_add";
    } elseif (@$segments[1] == "edit_house") {

        $vars['task'] = "edit_house";
        if (isset($segments[2]))
            $vars['id'] = $segments[2];
        $vars['Itemid'] = $segments[0];
    } elseif (@$segments[1] == "owner_houses") {
        $vars['task'] = "owner_houses";
    } elseif (@$segments[1] == "my_houses") {
        $vars['task'] = "my_houses";
        if (isset($segments[2]))
            $vars['limitstart'] = $segments[2];
    } elseif (@$segments[1] == "all_houses") {
        $vars['task'] = @$segments[1];
        if (isset($segments[2]))
            $vars['limitstart'] = $segments[2];
    } elseif (@$segments[1] == "Search") {
        $vars['task'] = "search";
        if (isset($segments[4])) {
            $vars['searchtext'] = $segments[4];
        }
        if (isset($segments[5])) {
            $vars['searchtype'] = $segments[5];
        }
        if (isset($segments[2])) {
            $vars['start'] = $segments[2];
        } else {
            unset($vars['start']);
        }
        if (isset($segments[3])) {
            $vars['limitstart'] = $segments[3];
        } else {
            unset($vars['limistart']);
        }
    } elseif (@$segments[1] == "show_search") { //_realestate
        $vars['task'] = "show_search";
        if (isset($segments[4])) {
            $vars['searchtext'] = $segments[4];
        }
        if (isset($segments[5])) {
            $vars['searchtype'] = $segments[5];
        }
        if (isset($segments[2])) {
            $vars['start'] = $segments[2];
        } else {
            unset($vars['start']);
        }
        if (isset($segments[3])) {
            $vars['limitstart'] = $segments[3];
        } else {
            unset($vars['limistart']);
        }

    } elseif (@$segments[1] == "search" || @$segments[1] == "search_houses") {
        $vars['task'] = "search";
        
        if (isset($segments[2])) {
             $vars['start'] = $segments[2];
         } 
         else {
             unset($vars['start']);
         }
         if (isset($segments[3])) {
             $vars['limitstart'] = $segments[3];
         } 
         else {
             unset($vars['limistart']);
         }
         
         if (isset($segments[4])) {
             $vars['searchtext'] = $segments[4];
         }
         if (isset($segments[5])) {
             $vars['searchtype'] = $segments[5];
         }
        
        
        
    } elseif (@$segments[1] == "show_rss_categories") {
        $vars['task'] = "show_rss_categories";
    } elseif (@$segments[1] == "buy_now") {
        $vars['task'] = "new_url";
        if (isset($segments[2])) {
            $vars['id'] = $segments[2];
        }
    } elseif (@$segments[1] == "buy_now_for_vm") {
        $vars['task'] = "new_url_for_vm";
        if (isset($segments[2])) {
            $vars['id'] = $segments[2];
        }
    } elseif (@$segments[1] == "view_user_houses") {
        $vars['task'] = "view_user_houses";
        if (isset($segments[2])) {
            $vars['name'] = $segments[2];
        }
    } elseif (@$segments[1] == "owner_houses") {
        $vars['task'] = "owner_houses";
        if (isset($segments[2])) {
            $vars['name'] = $segments[2];
        }
    } elseif (@$segments[1] == "lend_history") {
        $vars['task'] = "lend_history";
        $vars['name'] = $segments[2];
        $vars['user'] = $segments[3];
    } elseif (@$segments[1] == "lend_requests") {
        $vars['task'] = "lend_requests";
        if (isset($segments[2])) {
            $vars['start'] = $segments[2];
        } else {
            unset($vars['start']);
        }
        if (isset($segments[3])) {
            $vars['limitstart'] = $segments[3];
        } else {
            unset($vars['limistart']);
        }
    } elseif (@$segments[1] == "mdownload") {
        $vars['task'] = "mdownload";
        if (isset($segments[2])) {
            $vars['id'] = $segments[2];
        }
    } elseif (isset($segments[0]) && $segments[0] == "page" && isset($segments[1]) ) {

      $vars['start'] = $segments[1];
      if (isset($segments[2]))   $vars['limitstart'] = $segments[2];;
    } else {
        $vars['task'] = @$segments[1];
    }

//       ECHO "   ++++end RealEstateManagerParseRoute    ----  ";
//       print_r($vars);

    return $vars;
}

