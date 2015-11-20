function Scroll(){
		/* ---- Selector ---- */
		var header = document.querySelector(".nav");
		var img = document.querySelector("img");
		var h1 = document.querySelector("h1");
		var right_nav = document.querySelector(".right-nav");
		var button = document.querySelector("button#login");
		var button1 = document.querySelector("button#register");

		var ypos = window.pageYOffset; //value of Y position
		if(ypos > 40){ //reduce the height of navigation when scrolled
			header.style.height = "40px";
			img.style.width = "40px";
			h1.style.fontSize = "20px";
			h1.style.verticalAlign = "8px";
			right_nav.style.padding = "10px";
			button.style.padding = "5px 18px";
			button1.style.padding = "5px 18px";
			button.style.fontSize = "12px";
			button1.style.fontSize = "12px";
			button.style.transitionDelay = "0s";
			button1.style.transitionDelay = "0s";
			header.style.position = "fixed";
		}
		else{  //go back to normal height of navigation
			header.style.height = "80px";
			img.style.width = "80px";
			h1.style.fontSize = "32px";
			h1.style.verticalAlign = "25px";
			right_nav.style.padding = "23px 10px";
			button.style.padding = "8px 30px";
			button1.style.padding = "8px 30px";
			button.style.fontSize = "16px";
			button1.style.fontSize = "16px";
			button.style.transitionDelay = "0.15s";
			button1.style.transitionDelay = "0.15s";
			header.style.position = "relative";
		}
	}
window.addEventListener("scroll", Scroll);