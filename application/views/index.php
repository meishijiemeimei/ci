<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<script type="text/javascript" src="<?=base_url()?>js/jquery.js"></script>
	<script type="text/javascript" src="<?=base_url()?>js/swfobject.js"></script>
 
	<style type="text/css">
	*{padding:0;margin:0;}
	html,body,#flashcontent{width:100%;height:100%; overflow:auto;}
	</style>
	<script type="text/javascript">
		swfobject.registerObject("myId", "9.0.0", "expressInstall.swf");
	</script>

	<title></title>
</head>
<body>
	<div id="flashcontent">
		
		<object id="myId" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="100%" height="100%">
				<param name="movie" value="<?=base_url()?>flash/index.swf" />
        		<!--[if !IE]>-->
				<object type="application/x-shockwave-flash" data="<?=base_url()?>flash/index.swf" width="100%" height="100%">
				<!--<![endif]-->
				<div>
					<h1>Alternative content</h1>
					<p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></p>
				</div>
				<!--[if !IE]>-->
				</object>
				<!--<![endif]-->
		</object>

	</div>



	<script type="text/javascript">
	//获取浏览器高
	function WinHeight(){
		var wHeight = 0;
		if(window.innerHeight) wHeight = window.innerHeight;
		else if ((document.body) && (document.body.clientHeight)) wHeight = document.body.clientHeight;
		if(document.documentElement && document.documentElement.clientHeight && document.documentElement.clientWidth) wHeight = document.	documentElement.clientHeight;
		return wHeight;
	}
	//判断flash高是否低于浏览器高，并设置DIV高
	function resize(){
		var CliHeight = WinHeight();
		if(CliHeight < 715){
			$("#flashcontent").css("height","715px");
		}else if(CliHeight >= 715){
			$("#flashcontent").css("height","100%");
		}
	}
	//每秒重复判断
	$(document).ready(function(){
		setInterval("resize();", 1000);
	});
	</script>


</body>
</html>