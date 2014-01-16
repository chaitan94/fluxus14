window.onload = function(){
	window.onhashchange();
};

window.onhashchange = function(){
	var a = '';
	var b = '';
	var which = location.hash.slice(1).split('/');
	if(which[0]) a = which[0];
	else{
		a = events.data[0].eventid;
		window.open("events.html#"+a,"_self");
		return;
	}
	if(which[1]){
		b = which[1];
		if((!events.current||!events.currentEvent)||(events.current!=a||events.currentEvent!=b)){
			$("#events .img")[0].src=null;
			$("#events .abst").html('');
			$("#events .title").html('');
			console.log(211);
			events.open(a,b);
			for (var i = 0; i < $("#navbar ul a").length; i++) {
				if($("#navbar ul a li")[i].dataset.name==a) {$($("#navbar ul a")[i]).addClass('active'); }
				else {$($("#navbar ul a")[i]).removeClass('active'); }
			};
		}
	}else{
		events.current = a;
		events.loadJSON(function(){
			window.open("events.html#"+events.current+"/"+events.currentJSON[0].eventid,"_self");
		});
	}
}

var animateOnce = function(a,b,c){
	$(a).addClass('animated '+b).one('animationend webkitAnimationEnd oAnimationEnd', function(){
		$(this).removeClass('animated '+b);
		if(c!=undefined) c();
	});
};
var exceptionalevents=["aadc","kreatrix"];
var events = {
	data: [
		{
			"title" : "Performing Arts",
			"eventid" : "cult"
		},
		{
			"title" : "Workshops",
			"eventid" : "workshops"
		},
		{
			"title" : "Tech Theatre",
			"eventid" : "tech"
		},
		{
			"title" : "Pro-Shows",
			"eventid" : "proshows"
		},
		{
			"title" : "Quiz Fest",
			"eventid" : "quiz"
		}
	],
	current: '',
	currentEvent: '',
	currentJSON: '',
	fillDetails: function(){
		var w;
		for (var i = 0; i < events.currentJSON.length; i++) {
			if(events.currentJSON[i].eventid==events.currentEvent){
				w = events.currentJSON[i];
				break;
			}
		}
		var loadingimg = '';
		var nimgload = false;
		var nimg = new Image();
		nimg.src = w.img;
		nimg.onload = function(){
			nimgload = true;
			if(($("#events .img")[0].src == loadingimg)||($("#events .img")[0].src == 'http://fluxus.in/events.html'))
				$("#events .img")[0].src = w.img;
		};
		if(w.img=='') {console.log('sa');nimg.onload();}
		animateOnce("#events .details",'slideOutUp',function(){
			if(nimgload) $("#events .img")[0].src = w.img;
			else $("#events .img")[0].src = loadingimg;
			$("#events .title").html(w.title);
			if(!w.hasOwnProperty('reglink')||(w.hasOwnProperty('reglink')&&!w.reglink)){
				if(events.current=='workshop'||events.currentEvent=='shutterbug'){
					$("#events .abst").html('<form id="evtregform">Fluxus ID: <input type="text" name="fluxusid" style="padding: 5px 15px;font: 100% MouseMemoirs;margin: 0 20px;background: rgba(255,255,255,0.5);border: 0;"><input type="hidden" name="eventid" value="'+w.eventid+'"><input type="submit" value="Participate!" style="padding: 5px 15px;font: 100% Carnevalee;margin: 0 20px;cursor:pointer;"></form><a href="/register.html">Register for Fluxus</a> | <a href="/forgot.html">Forgot Fluxus ID?</a><br><br>'+w.abstract);
				}else $("#events .abst").html(w.abstract);
			}else{
				$("#events .abst").html('<div style=\"color:#cc9900\">Registration Link:</div><a target="_blank" href=\"'+w.reglink+'\">'+w.reglink+'</a><br>'+w.abstract);
			}
			if(w.rules) $("#events .abst").append('<br><br><div style="font: 120% Carnevalee;color:rgb(236,220,136);">RULES</div>'+w.rules);
			$("#events .abst").append(w.etc);
			$("#evtregform").submit(function(){
				$.post('ajax/evtReg.php', $(this).serializeArray(), function(data) {
					alert(data);
				});
				return false;
			});
			animateOnce("#events .imgdiv",'slideInLeft');
			animateOnce("#events .abst",'slideInRight');
		});
	},
	open: function(a,b){
		if(events.current){events.current=events.currentJSON[0].eventid}
		if(events.current!=a){
			events.current=a;
			events.currentEvent=b;
			animateOnce("#events .sidebar",'slideOutLeft',function(){
				events.load(a,b);
				$("#events .sidebar")[0].style.cssFloat='left';
				$("#events .details")[0].style.cssFloat='right';
				$("#events .sidebar")[0].style.backgroundImage = 'url(img/sidebarbg.png)';
				animateOnce("#events .sidebar",'slideInLeft');
			});
		}
		events.current=a;
		events.currentEvent=b;
	},
	loadJSON: function(f){
		var jsonfile = '';
		switch(events.current){
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
			case "quiz":
				$("#events")[0].style.background="rgba(15,15,0,0.85)";
				jsonfile = 'https://googledrive.com/host/0B7gpUuZnCjpdWGFKOG5VbzExV00/quiz.json';
				break;
			case "literary":
				$("#events")[0].style.background="rgba(15,15,0,0.85)";
				jsonfile = 'https://googledrive.com/host/0B7gpUuZnCjpdWGFKOG5VbzExV00/literary.json';
				break;
			case "proshows":
			default:
				events.current = "proshows";
				$("#events")[0].style.background="rgba(5,10,0,0.85)";
				jsonfile = 'https://googledrive.com/host/0B7gpUuZnCjpdWGFKOG5VbzExV00/proshows.json';
				break;
		}
		$.ajax({
			dataType: "json",
			url: jsonfile,
			data: {},
			success: function(data){
				events.currentJSON=data;
				if(f) f();
			}
		});
	},
	load: function(a,b){
		$("#events .sidebar").html("<ul></ul>");
		events.loadJSON(function(){
			for(var i=0;i<events.currentJSON.length;i++){
				$("#events .sidebar ul").append('<li data-eventid="'+events.currentJSON[i].eventid+'">'+events.currentJSON[i].title+'</li>');
			};
			events.currentEvent = b;
			events.fillDetails();
			var t = 0;
			for (var i = 0; i < events.currentJSON.length; i++) {
				if(events.currentJSON[i].eventid==b)
					break;
				t++;
			};
			$($("#events .sidebar ul li")[t]).addClass('evt-sel');
			$("#events .sidebar ul li").click(function(){
				$("#events .sidebar ul li").removeClass('evt-sel');
				var t = $(this);
				t.addClass('evt-sel');
				events.currentEvent = t[0].dataset.eventid;
				events.fillDetails();
				window.open("events.html#"+events.current+"/"+t[0].dataset.eventid,"_self");
				return;
			});
		});
	}
};
