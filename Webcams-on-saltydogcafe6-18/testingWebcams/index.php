<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Salty Dog HD Remote Control Webcam</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="description" content="">
<meta name="keywords" content="">
<meta http-equiv="cleartype" content="on">
<!--<meta id="Viewport" name="viewport" content="initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">-->
<meta name="viewport" content="user-scalable = yes">
<meta http-equiv="X-UA-Compatible" content="IE=9">
<meta http-equiv="imagetoolbar" content="no">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<!--<link rel="stylesheet" href="css/style.css">-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.1/js/foundation.min.js"></script>
<style>
@media (max-width: 600px){
	#header{
		display:none;
	}
	#wrapper{
		margin-top:0 !important;
	}
	
}
	#container{
		width:83%;
		max-width:1120px;
	}
	#container img{
		height:auto;
		margin:0 auto;
	}
	body{
		background:#000;
	}
	
</style>
</head>

<body>
<!--<div id="header" style="width:100%;padding:0px 20px 20px;color:#fff;font-size:24px;">
<div style="float:left;margin-top:0px;" class="title">Salty Dog HD Remote Control Webcam</div>
<div style="clear:both;"></div>
</div>-->
<!--<div id="int" style="float:left;display:inline-block;padding:10px 0 40px 40px;"><div id="instruct"><i class="fa fa-info-circle"></i>To drive the camera click the navigation button located at the bottom right of the viewing panel and Select a preset.<br><i class="fa fa-long-arrow-right" style="position:relative;top:-25px;"></i><img src="img/control.jpg" width="60" height="61" class="control" alt="navigation button" title="Navigation Button"><br><div class="divider"></div><i class="fa fa-info-circle"></i>Only one user may drive the camera at a time (indicated by the countdown timer). Additional users will be added to the queue.<br><i class="fa fa-long-arrow-right" style="position:relative;top:-3px;"></i><img src="img/que.png" width="60" height="18" class="control" alt="navigation button" title="Navigation Button"><br><div class="divider"></div><i class="fa fa-info-circle"></i>For a higher resolution image use the drop down located at the top of the viewer to the right. Set to 640x480<br><img src="img/res.png" width="150" height="32" class="control" alt="navigation button" title="Navigation Button" style="margin-left:0;padding-left:0;"><br></div><div style="position:relative;top:40px;height:20px;"><font face ="verdana" color = "white" size = "2">cam powered by Salty Dog </font></div></div>-->
<div id="container" style="width:100%;text-align:center;">
<script language="javascript">
// WIDTH="'+imgwidth+'" HEIGHT="'+imgheight+'"
var refreshrate=1;             
var image="http://98.101.223.10:8078/-wvhttp-01-/GetOneShot?";     
var imgheight=712;                   
var imgwidth=1267;                
function refresh(){
document.images["pic"].src=image+"?"+new Date();
setTimeout('refresh()', refreshrate*1000);}
document.write('<IMG SRC="'+image+'" ALT="Please Stand By For Webcam Photo Upload" NAME="pic" ID="pic" style="width:100%;">');
if(document.images)window.onload=refresh;
</script>
<!--<iframe style="position:relative;z-index:1;" src="http://98.101.223.10:8078/viewer/live/en/live.html" scrolling="no" frameborder="0" width="300"></iframe>-->
<div class="btMask" style="position:relative;width:92%;margin:0 auto;text-align:center;padding:20px 0;z-index:9999;text-align:center;color:#fff;">South Beach Auto Tour</div>
<!--<div class="sdMask" style="position:absolute;top:50px;height:713px;width:100px;left:1000px;background:#323232;z-index:9999;"></div>-->
<div id="mcontent"></div>
<div style="clear:both;"></div>
</div>
<script>
jQuery(document).ready(function($){
	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
	var stuff = $('#container').html();
	//$('#int').before(stuff);
	//$('#container').hide();
	$('#int').hide();
	$('#wrapper').css('margin-top','0');
	//$('#int').css({
	//	'position':'relative',
	//	'top':'-600px',
	//	'z-index':'999999',
	//})
	};
	var wide = $('#container').width();
	$('#container').css({
		'position':'relative',
		'left':'50%',
		'margin-left':'-' + (wide/2) + 'px',
	});
	$(window).resize(function(){
		var wide = $('#container').width();
	$('#container').css({
		'position':'relative',
		'left':'50%',
		'margin-left':'-' + (wide/2) + 'px',
	});
	});
})
</script>
</body>
</html>
