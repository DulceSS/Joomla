<?php
/*---------------------------------------------------------------
# Package - Joomla Template based on Sboost Framework   
# ---------------------------------------------------------------
# Author - olwebdesign http://www.olwebdesign.com
# Copyright (C) 2008 - 2017 olwebdesign.com. All Rights Reserved.
# Websites: http://www.olwebdesign.com
-----------------------------------------------------------------*/
//no direct accees
defined ('_JEXEC') or die ('resticted aceess');
require_once(dirname(__FILE__).'/lib/sboost.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language;?>" >
<head>
<?php
$sboost->loadHead();
$sboost->addCSS('template.css,joomla.css,menu.css,override.css,modules.css,ama.css');
if ($sboost->isRTL()) $sboost->addCSS('template_rtl.css');
?>
<?php if($this->params->get('float')=='1') : ?>
<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/css/slide.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/js/slide.js"></script> 
<?php endif; ?>
<?php if($this->params->get('social_api_type', '1') == '1') : ?>
<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/css/social.css" rel="stylesheet" type="text/css" />
<?php endif; ?>
<?php if($this->params->get('show_awesome')=='1') : ?>
<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/css/font-awesome.css" rel="stylesheet" type="text/css" />
<?php endif; ?>
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/js/custom.js"></script>
</head>
<?php $sboost->addFeatures('ie6warn'); ?>
<body class="bg <?php echo $sboost->direction ?> clearfix">
<div id="tbd" class="mx-base">
<div id="menuHeader">
<div class="mx-base">	
<?php 
$sboost->addModules('top-menu'); // module top-menu
?>
<?php 
$sboost->addModules('search'); // search
$sboost->addModules('login'); // login
?>
<?php $sboost->addFeatures('social'); //social ?>
<div class="clearfix"></div>
</div>
</div>
<div id="mx-header" class="mx-header">
<div class="mx-base clearfix">
<?php 
$sboost->addFeatures('logo');//Logo
?>
<div class="main_menu">
<?php 
$sboost->addModules("mainmenu"); //position mainmenu
?>
</div>
</div>
</div>
<div id="wrapper">
<?php if ($sboost->showSlideItem()): ?>
<?php include 'slider/slider.php'; ?> 
<?php endif; ?>
<?php
$sboost->addModules("header"); //position header
?>

<div id="tophead">
<div class="mx-base clearfix">
<?php
$sboost->addModules('top1, top2, top3, top4, top5, top6', 'mx_block', 'mx-userpos'); //positions top1-top6 
?>
</div>
</div>
<div id="mx-basebody">	
<div class="mx-base main-bg clearfix">
<?php 
$sboost->addModules('top', 'mx_xhtml'); //top 
?>
<?php 
$sboost->addModules("breadcrumbs"); //breadcrumbs
?>
<div class="clearfix">
<?php $sboost->loadLayout(); //mainbody ?>
</div>
<?php $sboost->addModules('map', 'mx_xhtml'); //map  ?>
</div>
</div>
<?php $sboost->addModules('bottom', 'mx_xhtml'); //bottom  ?>
<div id="bottsite" class="clearfix">
<?php
$sboost->addModules('bottom1, bottom2, bottom3, bottom4, bottom5, bottom6', 'mx_block', 'mx-bottom', '', false, true); //positions bottom1-bottom6 
?>
</div>
</div>
<div id="bottomspot">
<!--Start Footer-->
<div id="mx-footer" class="mx-base">
<div id="mx-bft" class="clearfix">
<div class="cp">
<?php $sboost->addFeatures('copyright')  ?>					
</div>
<?php 		
$sboost->addModules("footer-nav"); 
?>
</div>
</div>
<!--End Footer-->
</div>
</div>


<?php 
$sboost->addFeatures('analytics,jquery,ieonly'); /*--- analytics, jquery features ---*/
?>
<jdoc:include type="modules" name="debug" />

</body>
</html>