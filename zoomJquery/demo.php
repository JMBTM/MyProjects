<!DOCTYPE html>
<html>
<head>
	<title>Demo</title>
	<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="t/stylesheets/app.css">
	<style>
	#ip-viewfinder{
		border:dotted #ccc 1px;
		background:rgba(255,255,255,0.5);
		clear:both;
	}
	.wrap{
		float:left;
		display:block;
		position:relative;
	}
	.overlay{
		width:100%;
		height: 100%;
		display:block;
		position:absolute;
		z-index:2;
	}
	.overlay:after{
		content:"Hover me!";
		position:absolute;
		left:50%;
		top:50%;
		margin-left:-80px;
		margin-top:-1.5em;
		width:160px;
		height:3em;
		line-height:3em;
		text-align:center;
		background:rgba(255,255,255,0.5);
		font-weight: bold;
	}
	</style>
</head>
<body>
	<div class="container" style="margin-top:150px;">
  <h1>jQuery Image Projection Plugin Demo</h1>
  <div class="wrap">
    <div class="overlay"></div>
  <img src="../img/logo.png" id="sampleimg" data-pimg="../img/logo.png"/>
</div>
</div>
	<script type="text/javascript" src="jquery2.1.1.js"></script>
	<script type="text/javascript" src="t/javascripts/image.projection.js"></script>
	<script type="text/javascript" src="t/javascripts/app.js"></script>
	<script type="text/javascript">
	$(window).load(function(){
		$(".wrap .overlay").imageProjection($("#sampleimg"));
	});
	</script>
</body>
</html>