<!DOCTYPE html>
<html>
<head>
	<title>Demo</title>
	<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="t/stylesheets/app.css">
	<script type="text/javascript" src="jquery2.1.1.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		var container = $('#container');
		var lmargin = container.offset().left;
		var tmargin = container.offset().top;

		/*$('#container').mousemove(function(E){
			var xcenter = E.pageX - lmargin;
			var ycenter = E.pageY - tmargin;

			var l = xcenter - 100;
			var t = ycenter - 100;
			$('#magnifier').css({left: l + 'px', top: t + 'px'});

			var limg = -(xcenter * 1) + 500;
			var timg = -(ycenter * 1) + 500;

			$('#magnifier').css({backgroundPosition: limg+'px ' + timg+'px'});
		})*/
	});

	</script>
	<style>
	#container{
		width:512px;
		height:384px;
		margin:100px auto;
		overflow:hidden;
		position:relative;
		background-color:blue;
		border-radius:5px;
	}
	img.thumbnail{
		width:512px;
		height:384px;display:none;
	}
	img.thumbnail:hover{
		cursor:crosshair;
	}
	#magnifier{
		width:200px;
		height:200px;background-color:blue;
		overflow:hidden;
		background-image:url('../img/logo.png');
		background-repeat:no-repeat;
		background-size:1005px 1005px;
		background-position:-100px 1px;
		position:absolute;
		left:0px;
		cursor:crosshair;
		border:2px solid #fff;
	}
	</style>
</head>
<body>
	<div id="container">
		<img class="thumbnail" src="../img/logo.png"/>
		<div id="magnifier"></div>
	</div>
</body>
</html>