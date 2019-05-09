

var timer = 4000;

var ni = 0;
var max = $('#ci > li').length;
 
	$("#ci > li").eq(ni).addClass('active').css('left','0');
	$("#ci > li").eq(ni + 1).addClass('active').css('left','25%');
	$("#ci > li").eq(ni + 2).addClass('active').css('left','50%');
	$("#ci > li").eq(ni + 3).addClass('active').css('left','75%');
 

	setInterval(function(){ 

		$("#ci > li").removeClass('active');

		$("#ci > li").eq(ni).css('transition-delay','0.25s');
		$("#ci > li").eq(ni + 1).css('transition-delay','0.5s');
		$("#ci > li").eq(ni + 2).css('transition-delay','0.75s');
		$("#ci > li").eq(ni + 3).css('transition-delay','1s');

		if (ni < max-4) {
			ni = ni+4; 
		}

		else { 
			ni = 0; 
		}  

		$("#ci > li").eq(ni).css('left','0').addClass('active').css('transition-delay','1.25s');
		$("#ci > li").eq(ni + 1).css('left','25%').addClass('active').css('transition-delay','1.5s');
		$("#ci > li").eq(ni + 2).css('left','50%').addClass('active').css('transition-delay','1.75s');
		$("#ci > li").eq(ni + 3).css('left','75%').addClass('active').css('transition-delay','2s');
	
	}, timer);
 