$(document).ready(function(){
	
	$("button[id=login]").click(function(){
		$(".background-black").css({"width" : "1400px" , "height" : "800px" , "opacity" : "0.8", "z-index" : "1"});
		$(".login-form").css({
			"top" : "10%",
		});
	});

	$("button[id=lr_wrapper]").click(function(e){
		$("button.lr").toggleClass("hideb");
		e.preventDefault();
	});
	$("input[value=Cancel]").click(function(){
		$(".background-black").css({"opacity" : "0", "z-index" : "-1"});
		$(".login-form").css({
			"top" : "-120%",
		});
	});

});