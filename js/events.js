var which = location.hash.slice(1);
window.onload = function(){
	$.ajax({
		dataType: "json",
		url: "https://googledrive.com/host/0B7gpUuZnCjpdWGFKOG5VbzExV00/events.json",
		data: {},
		success: function(data){
			events.data=data;
			$("#events").append('\
				<div id="navbar" class="fixwrap">\
					<center>\
						<ul>\
							<a href=\"home.html\"><li>Home</li></a>\
							<a href="about_us.html"><li>About Us</li></a>\
							<a href="events.html#proshows"><li data-name="proshows">Pro-Shows</li></a>\
							<a href="events.html#tech"><li data-name="tech">Tech Theatre</li></a>\
							<a href="events.html#cult"><li data-name="cult">Performing Arts</li></a>\
							<a href="events.html#workshop"><li data-name="workshop">Workshops</li></a>\
							<a href="social.html"><li data-name="social">Social Cause</li></a>\
							<a href="sponsors.html"><li data-name="sponsors">Sponsors</li></a>\
							<a href="home.html"><li data-name="home" class="nav-right"><img height="25" src="img/logo.png"></li></a>\
							<a href="contact_us.html"><li data-name="team" class="nav-right">Contact Us</li></a>\
							<a href="register.html"><li data-name="register" class="nav-right">Register</li></a>\
						</ul>\
					</center>\
				</div>\
				<div id="content">\
					<div class="sidebar"></div>\
					<div class="details">\
						<div class="imgdiv">\
							<img class="img" src="">\
						</div>\
						<div class="title"></div>\
						<div id="abst_hyper" class="abst"></div>\
					</div>\
				</div>');
			openCntPg(which);
		}
	});
	window.onhashchange = function(){
		which = location.hash.slice(1);
		openCntPg(which);
	}
};

var animateOnce = function(a,b,c){
	$(a).addClass('animated '+b).one('animationend webkitAnimationEnd oAnimationEnd', function(){
		$(this).removeClass('animated '+b);
		if(c!=undefined) c();
	});
};

function openCntPg(a){
	if(events.current!=a){
		$("#events .img")[0].src=null;
		$("#events .abst").html('');
		$("#events .title").html('');
		events.open(a);
		for (var i = 0; i < $("#navbar ul a").length; i++) {
			if($("#navbar ul a li")[i].dataset.name==which){
				$($("#navbar ul a")[i]).addClass('active');
			}else{
				$($("#navbar ul a")[i]).removeClass('active');
			}
		};
	}
}

function fillDetails(index){
var w = events.currentJSON[index];
	animateOnce("#events .details",'slideOutUp',function(){
		$("#events .img")[0].src = w.img;
		$("#events .title").html(w.title);
		$("#events .abst").html(w.abstract);
		if(w.rules)
			$("#events .abst").append('<br><br><div style="font: 120% Carnevalee;color:rgb(236,220,136);">RULES</div>'+w.rules);
		$("#events .abst").append(w.etc);
		animateOnce("#events .imgdiv",'slideInLeft');
		animateOnce("#events .abst",'slideInRight');
	});
}
var events = {
	current: '',
	currentJSON: '',
	open: function(a){
		if(events.current){
			if(events.current!=a){
					animateOnce("#events .sidebar",'slideOutLeft',function(){
						events.load(a);
						$("#events .sidebar")[0].style.cssFloat='left';
						$("#events .details")[0].style.cssFloat='right';
						$("#events .sidebar")[0].style.backgroundImage = 'url(img/sidebarbg.png)';
						animateOnce("#events .sidebar",'slideInLeft');
					});
			}
		}else{
			events.current = -1;
			events.load(a);
				$("#events .sidebar")[0].style.cssFloat='left';
				$("#events .details")[0].style.cssFloat='right';
				$("#events .sidebar")[0].style.backgroundImage = 'url(img/sidebarbg.png)';
				animateOnce("#events .sidebar",'slideInLeft');
		}
		events.current=a;
	},
	load: function(a){
		var jsonfile = '';
		switch(a){
			case "proshows":
				$("#events")[0].style.background="rgba(5,10,0,0.85)";
				jsonfile = 'https://googledrive.com/host/0B7gpUuZnCjpdWGFKOG5VbzExV00/proshows.json';
				break;
			case "tech":
				$("#events")[0].style.background="rgba(5,10,10,0.85)";
				jsonfile = 'https://googledrive.com/host/0B7gpUuZnCjpdWGFKOG5VbzExV00/tech.json';
				break;
			case "workshop":
				$("#events")[0].style.background="rgba(5,0,10,0.85)";
				jsonfile = 'https://googledrive.com/host/0B7gpUuZnCjpdWGFKOG5VbzExV00/workshop.json';
				break;
			case "cult":
				$("#events")[0].style.background="rgba(15,0,0,0.85)";
				jsonfile = 'https://googledrive.com/host/0B7gpUuZnCjpdWGFKOG5VbzExV00/cult.json';
				break;
		}
		$("#events .sidebar").html("<ul></ul>");
		$.ajax({
			dataType: "json",
			url: jsonfile,
			data: {},
			success: function(data){
				events.currentJSON=data;
				for(var i=0;i<data.length;i++){
					$("#events .sidebar ul").append('<li data-id="'+i+'">'+data[i].title+'</li>');
				};
				fillDetails(0);
				$($("#events .sidebar ul li")[0]).addClass('evt-sel');
				$("#events .sidebar ul li").click(function(){
					$("#events .sidebar ul li").removeClass('evt-sel');
					var t = $(this);
					fillDetails(t[0].dataset.id);
					t.addClass('evt-sel');
				});
			}
		});
	}
};
