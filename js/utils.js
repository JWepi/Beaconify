
var citats = {
	ANMVERYFAST: 2000
}

var myconsole = {
	log: function(msg){
		console.log(msg);
	}
};

var page = {
	load: function(content, newpage){
		if (!newcontent)
			newcontent = "";
		if (newpage)
			$.("#CoreApp").fadeOut(citats.ANMVERYFAST);
		$.("#CoreApp").html(newcontent);
		if (newpage)
			$.("#CoreApp").fadeIn(citats.ANMVERYFAST);
			
		Bleeep.Loadstamp = $.now();
	}
};