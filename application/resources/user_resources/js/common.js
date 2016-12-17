$(document).ready(function(){
	$('.mouse-icon').click(function(){
		$('html,body').animate({
			scrollTop: $('#our-products').offset().top
		},'slow');
	})

	$('.bxslider').bxSlider({
		pager: false,
		adaptiveHeight: true,
		touchEnabled: false
	});

	links = $('.items a');
	var linksArray = [];
	for(i = 0; i<links.length; i++){
		linksArray.push(links[i]);
		var cloneLink = links[i].cloneNode(true);
		toWrap(links[i], cloneLink);
	}
	var border, borderTop, borderRight, borderBottom, borderLeft, borderWrapper, linksParent;
	function toWrap(a, cloneLink) {
		borderWrapper = document.createElement('div');
		borderWrapper.className = 'border-wrapper';
		linksParent = a.parentNode;
		linksParent.appendChild(borderWrapper);
		linksParent.removeChild(a);
		borderWrapper.appendChild(cloneLink);

		borderTop = document.createElement('div');
		borderRight = document.createElement('div');
		borderBottom = document.createElement('div');
		borderLeft = document.createElement('div');
		borderTop.className = ('border-top border');
		borderRight.className = ('border-right border');
		borderBottom.className = ('border-bottom border');
		borderLeft.className = ('border-left border');

		borderWrapper.appendChild(borderTop);
		borderWrapper.appendChild(borderRight);
		borderWrapper.appendChild(borderBottom);
		borderWrapper.appendChild(borderLeft);
	}

	$('.small-menu').click(function(){
		$('aside').toggleClass('active-menu');
		$(this).toggleClass('bars-transform');
		$('.small-sidebar-extra').delay(100).fadeToggle();
	});


	$('.nav>li').hover(function(){
		$('.nav>li').removeClass('active');
		$(this).addClass('active');
	}, function(){
		$(this).removeClass('active');
	})

	$('#documents-items li a').magnificPopup({type:'image'});

	function createTemplate(){
		var progressBorder = document.createElement('div');
		var progressTop = document.createElement('div');
		var progressBottom = document.createElement('div');
		var progressCircle = document.createElement('div');
		var circleBorder = document.createElement('div');
		var circleTop = document.createElement('div');
		var circleRight = document.createElement('div');
		var circleBottom = document.createElement('div');
		var circleLeft = document.createElement('div');
		var circleDot = document.createElement('div');
		var flagEnd = document.createElement('div');
		var angleTop = document.createElement('div');
		var angleBottom = document.createElement('div');
		progressBorder.className = 'progress-border';
		progressTop.className = 'progress-top';
		progressBottom.className = 'progress-bottom';
		progressCircle.className = 'progress-circle';
		circleBorder.className = 'circle-border';
		circleTop.className = 'circle-top';
		circleRight.className = 'circle-right';
		circleBottom.className = 'circle-bottom';
		circleLeft.className = 'circle-left';
		circleDot.className = 'circle-dot';
		flagEnd.className = 'flag-end';
		angleTop.className = 'angle-top';
		angleBottom.className = 'angle-bottom';

		var li = $('#history-steps li');
		$(circleBorder).append(circleTop, circleRight, circleBottom, circleLeft, circleDot);
		$(progressCircle).append(circleBorder);
		$(flagEnd).append(angleTop, angleBottom);
		$(progressBorder).append(progressTop, progressBottom, progressCircle);
		$(li).append(progressBorder);
		$(li[0]).find('.progress-border').addClass('progress-red');
		$(li[1]).find('.progress-top').addClass('progress-red');
		$(li[1]).find('.circle-border').addClass('progress-red');
		$(li).last().find(progressBorder).append(flagEnd);
	}


	$('#history-steps li').waypoint(function(element){
		$(this.element).find('.history-step-content').addClass('history-in-view');
		$(this.element).find('.progress-top').addClass('progress-red')
		$(this.element).prev().find('.progress-bottom').addClass('progress-red')
		$(this.element).find('.circle-border').addClass('progress-red')
		$(this.element).find('.flag-end').addClass('progress-red')
	},{
		offset: '80%'
	});

	createTemplate();

	$(".colors label").click(function(){
		$(".colors label").removeClass("active");
		$(this).addClass("active");
	});

	//INPUTS
	//INPUTS INIT
	$(".range li:first-child label").addClass("active");
	$(".radio p:last-child").addClass("active");
	$(".density-range-block-1cat input").first().val("D400");
	$(".width-range-block-1cat input").first().val("200");
	$(".block-1cat-height-radio input").val("250");
	$(".block-1cat-length-radio input").val("625");
	//END of INPUTS INIT

	$(".range label").click(function(){
		$(this).closest(".range").find("label").removeClass("active");
		$(this).addClass("active");
	});

	var rangeLineWidth = $('.range .range-line').width();

	function range(rangeWrap){
		$(rangeWrap).find("input").change(function(){
			var densityValues = [];
			$(this).closest(".range").find("input").val("")
			label = $(rangeWrap).find("label");
			for(i = 0; i < $(label).length; i++){
				var a = $($(label)[i]).text();
				densityValues.push(a);
			}
			switch($(this).attr("id")){
				case "block-1cat-density-range-d400":
					$(this).val("D400");
					$(this).closest(".range").find(".range-circle").css({
						transform: "translateX(0)",
						marginLeft: "0px"
					});
					break
				case "block-1cat-density-range-d500":
					$(this).val("D500");
					$(this).closest(".range").find(".range-circle").css({
						transform: "translateX("+rangeLineWidth.toFixed(1)/2+"px)",
						marginLeft: "-16px"
					});
					break
				case "block-1cat-density-range-d600":
					$(this).val("D600");
					$(this).closest(".range").find(".range-circle").css({
						transform: "translateX("+rangeLineWidth.toFixed(1)+"px)",
						marginLeft: "-30px"
					});
					break
				case "block-1cat-width-range-200":
					$(this).val("200");
					$(this).closest(".range").find(".range-circle").css({
						transform: "translateX(0)"
					});
					break
				case "block-1cat-width-range-250":
					$(this).val("250");
					$(this).closest(".range").find(".range-circle").css({
						transform: "translateX("+$(thisLabel).position().left.toFixed(1)+"px)",
						marginLeft: "-6px"
					});
					break
				case "block-1cat-width-range-300":
					$(this).val("300");
					$(this).closest(".range").find(".range-circle").css({
						transform: "translateX("+$(thisLabel).position().left.toFixed(1)+"px)",
						marginLeft: "-6px"
					});
					break
				case "block-1cat-width-range-350":
					$(this).val("350");
					$(this).closest(".range").find(".range-circle").css({
						transform: "translateX("+$(thisLabel).position().left.toFixed(1)+"px)",
						marginLeft: "-6px"
					});
					break
				case "block-1cat-width-range-375":
					$(this).val("375");
					$(this).closest(".range").find(".range-circle").css({
						transform: "translateX("+$(thisLabel).position().left.toFixed(1)+"px)",
						marginLeft: "-6px"
					});
					break
				case "block-1cat-width-range-400":
					$(this).val("400");
					$(this).closest(".range").find(".range-circle").css({
						transform: "translateX("+$(thisLabel).position().left.toFixed(1)+"px)",
						marginLeft: "-6px"
					});
					break
				case "block-1cat-width-range-500":
					$(this).val("500");
					$(this).closest(".range").find(".range-circle").css({
						transform: "translateX("+$(thisLabel).position().left.toFixed(1)+"px)",
						marginLeft: "-6px"
					});
					break
			}
		});
	}
	range(".density-range-block-1cat");
	$(".width-range-block-1cat label").click(function(){
		thisLabel = $(this);
		range(".width-range-block-1cat");
	});

	function radio(radioWrap) {
		var heightValues = [];
		label = $(radioWrap).find(".caption~p");

		for(i = 0; i < $(label).length; i++){
			var a = $($(label)[i]).text();
			heightValues.push(a);
		}

		labelLeft = $(radioWrap).find("label").prev();
		labelRight = $(radioWrap).find("label").next();

		if($(thisRadio).hasClass("active") == true){
			$(label).removeClass("active");
			$(thisRadio).closest(".radio").find("label").addClass("active");
			$(thisRadio).val(heightValues[0]);
			$(labelLeft).addClass("active");
		}else{
			$(label).removeClass("active");
			$(thisRadio).closest(".radio").find("label").removeClass("active");
			$(thisRadio).val(heightValues[1]);
			$(labelRight).addClass("active");
		}
	}

	$(".block-1cat-height-radio input").change(function(){
		thisRadio = $(this);
		$(this).toggleClass("active");
		radio(".block-1cat-height-radio");
	});
	$(".block-1cat-length-radio input").change(function(){
		thisRadio = $(this);
		$(this).toggleClass("active");
		radio(".block-1cat-length-radio");
	});


	//END of INPUTs

	var select = $('.select select').mousedown(function(){
		$('.select-arrow').css({
			transform: 'translateY(2px)'
		});
	}).mouseup(function(){
		$('.select-arrow').css({
			transform: 'translateY(0)'
		});
	})


	if($(window).width() < 1200){
		$('.nav>li').hover(function(){
			$(this).find('.second-lvl-menu').slideDown();
		}, function(){
			$(this).find('.second-lvl-menu').slideUp();
		})
	}
	if($(window).width() > 1200){
		$('.nav>li').hover(function(){
			$('.nav>li').removeClass('active');
			$(this).addClass('active');
		}, function(){
			$(this).removeClass('active');
		})
	}

	function tabNavPosition(){
		if($(".tabs-nav").length != 0){
			$(".tabs-nav").css({
				marginLeft: $(".peregorod-1cat .product-info").position().left+70
			})
			$(".tabs-nav li").animate({
				opacity: "1"
			},800);
		}
	}
	tabNavPosition();
	$(window).resize(function(){
		tabNavPosition();
	});

	$('.nav>li').hover(function(){
		$('.nav>li').removeClass('active');
		$(this).addClass('active');
	}, function(){
		$(this).removeClass('active');
	})

	var rtime;
	var timeout = false;
	var delta = 200;
	$(window).resize(function() {
		rtime = new Date();
		if (timeout === false) {
			timeout = true;
			setTimeout(resizeend, delta);
		}
	});

	function resizeend() {
		if (new Date() - rtime < delta) {
			setTimeout(resizeend, delta);
		} else {
			timeout = false;
			if($(window).width() < 1200){
				$('.nav>li').hover(function(){
					$(this).find('.second-lvl-menu').slideDown();
				}, function(){
					$(this).find('.second-lvl-menu').slideUp();
				})
			}
			if($(window).width() > 1200){
				$('.nav>li').hover(function(){
					$('.nav>li').removeClass('active');
					$(this).addClass('active');
				}, function(){
					$(this).removeClass('active');
				})
			}
		}
	}

	$(".tabs").lightTabs();

	$(".nb-slides li .caption").click(function(){
		$(this).toggleClass('active').closest("li").find(".nb-text").slideToggle().toggleClass('active');
	})

	function closePopUp(e){
		if($(".popup.active").length == 1){
			$(e.target).closest("#pop-up-wrapper").fadeOut();
			$(".popup.active").removeClass("active").fadeOut();
		}else{
			$(e.target).closest(".popup").removeClass("active").fadeOut();

		}
	}

	function centerPopUp(elem){
		var popupHeight = $(elem).outerHeight();
		marginTopPopup = -popupHeight/2;
		$(elem).css({
			top: "50%",
			marginTop: marginTopPopup
		}).addClass("active").fadeIn();
	}

	$(".popup-bg-color").click(closePopUp);
	$(".popup-close").click(closePopUp);


	$(".open-contacts").click(function(e){
		e.preventDefault();
		$("#pop-up-wrapper").fadeIn();
		centerPopUp("#pop-up-contacts");
	});

	$(".open-city").click(function(e){
		e.preventDefault();
		$("#pop-up-wrapper").fadeIn();
		centerPopUp("#pop-up-city");

	});

	$(".open-basket").click(function(e){
		e.preventDefault();
		$("#pop-up-wrapper").fadeIn();
		centerPopUp("#pop-up-basket");
	});

	$(".leave-app-link").click(function(e){
		e.preventDefault();
		$("#pop-up-contacts").addClass("disabled");
		$("#pop-up-wrapper").fadeIn();
		centerPopUp("#pop-up-leave-app");
	});
	$("#pop-up-leave-app .popup-close").click(function(){
		$("#pop-up-contacts").removeClass("disabled");
	})

	//TABLE SHADOW
	var markRightBorder = "";
	var markLeftBorder = "";
	var rightBorder = "";
	var leftBorder = "";
	function createShadowPeregorod2Table(elem){
		rightBorder = document.createElement('div');
		leftBorder = document.createElement('div');
		markRightBorder = document.createElement('div');
		markLeftBorder = document.getElementById('mark-table2-left');
		markRightBorder.className = 'mark-table2-right';
		rightBorder.className = 'table2-right-border';
		leftBorder.className = 'table2-left-border';
		$(elem).find('td:last-child').append(markRightBorder);
		$(elem).append(rightBorder);
		$(elem).append(leftBorder);

		$(elem).find('.shadow-wrapper').scroll(function(){
			var s = $(elem).scrollLeft();

			if(markRightBorder.getBoundingClientRect().left <= rightBorder.getBoundingClientRect().left){
				$(rightBorder).fadeOut();
			}else{
				$(rightBorder).fadeIn();
			}

			if(markLeftBorder.getBoundingClientRect().left >= leftBorder.getBoundingClientRect().left){
				$(leftBorder).fadeOut();
			}else{
				$(leftBorder).fadeIn();
			}
		});
	}
	function createShadowTable(elem){
		rightBorder = document.createElement('div');
		leftBorder = document.createElement('div');
		markRightBorder = document.createElement('div');
		markLeftBorder = document.getElementById('mark-table-left');
		markRightBorder.className = 'mark-table-right';
		rightBorder.className = 'table-right-border';
		leftBorder.className = 'table-left-border';
		$(elem).find('td:last-child').append(markRightBorder);
		$(elem).append(rightBorder);
		$(elem).append(leftBorder);

		$(elem).find('.shadow-wrapper').scroll(function(){
			var s = $(elem).scrollLeft();

			if(markRightBorder.getBoundingClientRect().left <= rightBorder.getBoundingClientRect().left){
				$(rightBorder).fadeOut();
			}else{
				$(rightBorder).fadeIn();
			}

			if(markLeftBorder.getBoundingClientRect().left >= leftBorder.getBoundingClientRect().left){
				$(leftBorder).fadeOut();
				console.log(leftBorder);
			}else{
				$(leftBorder).fadeIn();
			}
			console.log(markLeftBorder.getBoundingClientRect().left);
			console.log(leftBorder.getBoundingClientRect().left);
		});
	}
	//END of TABLE SHADOW


	createShadowTable('#system-paz-table');
	createShadowTable('#peremichka-table');
	createShadowTable('#brick-table');
	createShadowTable('.block-3-table');
	createShadowTable('.block-1-table');
});

$(function(){
	$('a.city_choise').click(function(e){
		e.preventDefault();
		var a = $(this).text();

		$.ajax({
			type: 'POST',
			url: '/user/set_city',
			data: ({city: a}),
			success: function(data){
				$('a.user-city').text(a);
				if($(".popup.active").length == 1){
					$(e.target).closest("#pop-up-wrapper").fadeOut();
					$(".popup.active").removeClass("active").fadeOut();
				}else{
					$(e.target).closest(".popup").removeClass("active").fadeOut();

				}
				swal({
					title: "Выбран город " + a,
					type: "success",
					timer: 2000,
					showConfirmButton: false
				});
			},
			error: function(){
				swal({
					title: "Что-то пошло не так!",
					type: "error",
					timer: 2000,
					showConfirmButton: false
				});
			}
		});
	});
});

$(function(){
	$('form a').click(function (e) {
		e.preventDefault();
		$(this).parent().submit();
	})
})