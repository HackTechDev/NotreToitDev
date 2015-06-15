<?php 
/**
 * @version                $Id: index.php 21518 2011-06-10 21:38:12Z chdemko $
 * @package                Joomla.Site
 * @subpackage	
 * @copyright        Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license                GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access.
defined('_JEXEC') or die;
$path = $this->baseurl.'/templates/'.$this->template;
error_reporting( E_ERROR );




JHtml::_('behavior.framework', true);

// get params
$logo               = $this->params->get('logo');
$app                = JFactory::getApplication();
$doc				= JFactory::getDocument();
$templateparams     = $app->getTemplate(true)->params;

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
 <?php
  $itemid = JRequest::getVar('Itemid');
  $menu = &JSite::getMenu();
  $active = $menu->getItem($itemid);
  $params = $menu->getParams( $active->id );
  $pageclass = $params->get( 'pageclass_sfx' );
?><head>
<jdoc:include type="head" />
<link rel="stylesheet" href="<?php echo $path ?>/css/position.css" type="text/css" media="screen,projection" />
<link rel="stylesheet" href="<?php echo $path ?>/css/layout.css" type="text/css" media="screen,projection" />
<link rel="stylesheet" href="<?php echo $path ?>/css/general.css" type="text/css" media="screen,projection" />
<link rel="stylesheet" href="<?php echo $path ?>/css/personal.css" type="text/css" media="screen,projection" />
<link rel="stylesheet" href="<?php echo $path ?>/css/print.css" type="text/css" media="print" />





<?php if (!$this->countModules('slider')): ?>
<script type="text/javascript" src="<?php echo $path ?>/javascript/jquery.js"></script>
<?php endif;?>
<script type='text/javascript' src='<?php echo $path ?>/javascript/cufon-yui.js'></script> 
<script type='text/javascript' src='<?php echo $path ?>/javascript/cufon-replace.js'></script> 
<script type='text/javascript' src='<?php echo $path ?>/javascript/MgOpen_Moderna_400.font.js'></script> 
<script type="text/javascript">
					var $j = jQuery.noConflict();

					$j(document).ready(function(){
						$j('.main_menu ul li').hover(
							function() {
								$j(this).find('> ul').stop(false, true).slideToggle();
								$j(this).addClass('act_button');
								$j(this).find('>ul ul').stop(false, true).fadeOut('fast');
							},
							function() {
								$j(this).find('ul').stop(false, true).slideToggle('fast');
								$j(this).removeClass('act_button');
							}
						);
						function preloadImages(imgs){
						var picArr = [];
						for (i = 0; i<imgs.length; i++){
							picArr[i]= new Image(100,100); 
							picArr[i].src=imgs[i]; 
						}
					}
					//preloadImages([
					//' <?php echo $path ?>/images/ .png']);
					});
					$j(document).ready(function() 
					{ 
						$j('.createdate').each(function() { 
							var h = $j(this).html(); 
							var index = h.indexOf(' '); 
							if(index == -1) { 
								index = h.length; 
							} 
							$j(this).html('<span class="number">' + h.substring(0, index) + '</span>' + h.substring(index, h.length)); 
						}); 
					});
					
	 
</script>




		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">



		<!--[if lt IE 7]>
            <div style=' clear: both; text-align:center; position: relative;'>
                <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" alt="" /></a>

            </div>
       <![endif]-->
        <!--[if lt IE 9]>
        <style type="text/css">
         .readon, #header ul, #header ul a, .act_button, .current, #header ul ul li a,  .icon_block1 a, .icon_block2 a, .icon_block3 a, .project_block,  .readmore, .button, button, .product_block, #carousel li .p3, #map { behavior:url(<?php echo $path ?>/PIE.php); position:relative; zoom:1 }
        </style>
        <![endif]-->
</head>

<body class=" <?php echo $pageclass; ?>">
<div id="all">
 
        
        
        
  <div id="header">
   <div class="head">
		 <?php if ($logo): ?>
         <div class="logo">
                <a href="<?php echo $this->baseurl?>"><img src="<?php echo $this->baseurl ?>/<?php echo htmlspecialchars($logo); ?>"  alt="<?php echo htmlspecialchars($templateparams->get('sitetitle'));?>" /></a>
                </div>
       	 <?php endif;?>
    <jdoc:include type="modules" name="user2" />
<div class="main_menu"><jdoc:include type="modules" name="user1" /></div>   
  </div>
  </div>
   
  
  <div id="content" >
   <jdoc:include type="modules" name="slider" />
    <?php if($this->countModules('top')) : ?>
    <div id="message">
      <jdoc:include type="modules" name="top" style="xhtml" />
    </div>
    <?php endif; ?>
    <div class="padding_content">
        <jdoc:include type="message" />
      <div class="wrapper_overflow">
      <?php if($this->countModules('left')) : ?>
        <div id="sidebar-1" >
          <jdoc:include type="modules" name="left" style="xhtml" />
        </div>
        <?php endif; ?>
        <?php if($this->countModules('right')) : ?>
        <div id="sidebar-2" >
          <jdoc:include type="modules" name="right" style="xhtml" /></div>
        <?php endif; ?>
        <div id="maincolbck">
          <div id="maincolumn" >
            <jdoc:include type="modules" name="breadcrumbs" style="xhtml" />
            <jdoc:include type="component" />
            
          </div>
      </div>
      </div>

    </div>
  </div>
  <?php if($this->countModules('user3')) : ?>
<div class="bottom_row">
<div class="center">
		 <jdoc:include type="modules" name="user3" style="xhtml"  />
</div>
</div>
<?php endif; ?>

<div class="push"></div>
 
 
</div>
<div id="footer-outer">
  <div id="footer-sub">
    <div id="footer">
      </p>
      <jdoc:include type="modules" name="user4" style="xhtml"  />
    </div>
    <!-- end footer --> 
    
  </div>
</div>
<jdoc:include type="modules" name="debug" />
</body>
</html>
