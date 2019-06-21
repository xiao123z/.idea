$(function(){
				$(".menu").click(function(){
					 $("#suoye").show();
					 $("#tianjiaguanli").hide();
					 $("#guanli").hide();
					  $("#glgly").hide();
					
					 $("#tianjia").hide();
					 
				})
				$("li:eq(0)").click(function(){
					$("#tianjia").show();
					$("#tianjiaguanli").hide();
					$("#guanli").hide();
                     $("#glgly").hide();
					$("#suoye").hide();
				})
				$("li:eq(1)").click(function(){
					$("#guanli").show();
					$("#tianjia").hide();
					$("#tianjiaguanli").hide();
					$("#glgly").hide();
						$("#suoye").hide();
				})
				$("li:eq(2)").click(function(){
					$("#tianjiaguanli").show();
					$("#tianjia").hide();
						$("#suoye").hide();
						$("#guanli").hide();
						$("#glgly").hide();
				})
				$("li:eq(3)").click(function(){
					$("#glgly").show();
					$("#tianjia").hide();
						$("#suoye").hide();
						$("#guanli").hide();
						$("#tianjiaguanli").hide();
				});
			});
			$(function(){
			var mySwiper=new Swiper('.swiper-container',{
				pagination:{
					el:'.swiper-pagination',
				},
			loop:true,
			autoplay:true,
			});
		});
		$(function(){
		$("#sel").bind("change",function(){
			var col=$(this).val();
			$(".nav ,body").css("background-color",col)
		})	
		});
			  window.onscroll = function () {
		        var top = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop;
		        var node = document.getElementById('tob');
		        if (top > 5) {//500就是滚动条滚动到的位置，大于500(500指500px)才显示
		            node.style.display = 'block';
		        } else {
		            node.style.display = 'none';
		        }
		    }
		$(function(){
			$(".guanggao,.clock").animate({"bottom":0},2000);
			$(".clock").click(function(){
				$(".guanggao,.clock").animate({"bottom":-400},2000);
			})
		})
		$(function(){
			$(".bj").click(function(){
				
				$(".pf").fadeIn(1000);
			});
		
		})
		$(function(){
			$(".lv").click(function(){
				$(".nav").css("background","green");
				$(".pf").css("border","2px green solid");
				$(".left,.menu,.bottom").css("background","#98FB98");
				$("body").css("background","#00FF7F");
				$(".top,.center").css("background","	#98FB98");
				$(".pf").hide();
				
			});
		$(".hei").click(function(){
			$(".nav").css("background","black");
			$(".pf").css("border","2px 	black solid");
			$(".left,.menu,.bottom").css("background","#808080");
			$("body").css("background","#696969");
			$(".top,.center").css("background","#808080");

			$(".pf").hide();
		});
		$(".fen").click(function(){
			$(".nav").css("background","#F382A0");
			$(".pf").css("border","2px 	#F382A0 solid");
			$(".left,.menu,.bottom").css("background","#F4CBD6");
			 $("body").css("background","#F08080");
			$(".top,.center").css("background","#F4CBD6");
			$(".pf").hide();
		});
		$(".chen").click(function(){
			$(".nav").css("background","#E89237");
			$(".pf").css("border","2px 	#E89237 solid");
			$(".left,.menu,.bottom").css("background","#EFDCC0");
			// $("body").css("background","#696969");
			$(".top,.center,body").css("background","#F4A460");
			$(".top,.center").css("background","#EFDCC0");
			$(".pf").hide();
		});
		})