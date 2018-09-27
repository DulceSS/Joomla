<?php

defined('_JEXEC') or die;

$caption         = $this->params->get ('caption');
$menu            = $this->params->get ('menu');
$slides          = $this->params->get('slides');
$shadows         = $this->params->get('shadows');
$headHeigh	     = $this->params->get('headHeigh');
$bannerTime	     = $this->params->get('bannerTime');
$slider_items    = $this->params->get('slider_items'); 
$socialCode         = $this->params->get ('socialCode');
$ol_title            = $this->params->get('ol_title');
$ol_image            = $this->params->get('ol_image');
$ol_target_url       = $this->params->get('ol_target_url');
$ol_target           = $this->params->get('ol_target');

?>

<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/slider/css/style.css" type="text/css" />
<style>
.fullwidthbanner-container{
width:100% !important;		
position:relative;
padding:0;
margin: 0px;
max-height:450px !important;
overflow:hidden;
background-repeat: repeat;
background-position:center;
}

</style>
<div id="slideshow" class="slideshow">
<div id='slider_wrapper' class='slider_wrapper fullwidthbanner-container' >
<div id='rev-slider' class='rev_slider fullwidthabanner'>
<ul>
<?php foreach ($slider_items as $item) : ?>
<li data-transition="random-static" data-slotamount="7" data-masterspeed="1000" > <img src="<?php echo $item->ol_image; ?>"  alt="">
</li>
<?php endforeach; ?>
</ul>
</div>
</div>
</div>
<script type = "text/javascript" src = "<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/slider/js/revslider.js"></script>		

<script type="text/javascript">
jQuery(document).ready(function(){
jQuery('#rev-slider').show().revolution({
dottedOverlay: 'none',
delay: 7000,
startwidth: 0,
startheight:350,

hideThumbs: 200,
thumbWidth: 200,
thumbHeight: 50,
thumbAmount: 2,

navigationType: 'none',
navigationArrows: 'verticalcentered',
navigationStyle: 'round',

touchenabled: 'on',
onHoverStop: 'on',

swipe_velocity: 0.7,
swipe_min_touches: 1,
swipe_max_touches: 1,
drag_block_vertical: false,

spinner: 'spinner0',
keyboardNavigation: 'on',

navigationHAlign: 'center',
navigationVAlign: 'bottom',
navigationHOffset: 0,
navigationVOffset: 20,

soloArrowLeftHalign: 'left',
soloArrowLeftValign: 'center',
soloArrowLeftHOffset: 20,
soloArrowLeftVOffset: 0,

soloArrowRightHalign: 'right',
soloArrowRightValign: 'center',
soloArrowRightHOffset: 20,
soloArrowRightVOffset: 0,

shadow:0,	
fullWidth: 'on',
fullScreen: 'on',

stopLoop: 'off',
stopAfterLoops: -1,
stopAtSlide: -1,

shuffle: 'off',

autoHeight: 'on',
forceFullWidth: 'off',
fullScreenAlignForce: 'off',
minFullScreenHeight: 0,
hideNavDelayOnMobile: 1500,

hideThumbsOnMobile: 'off',
hideBulletsOnMobile: 'off',
hideArrowsOnMobile: 'off',
hideThumbsUnderResolution: 0,

hideSliderAtLimit: 0,
hideCaptionAtLimit: 0,
hideAllCaptionAtLilmit: 0,
startWithSlide: 0,
fullScreenOffsetContainer: ''
});
});
</script>

<div class="clear"></div>       

