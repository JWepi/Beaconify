
var citats = {
	ANMFAST: 500
}

var myconsole = {
	log: function(msg){
		console.log(msg);
	}
};

var page = {
	load: function(content, newpage){
		if (!content)
			content = "";
			
		if (newpage)
		{
			$("#CoreApp").fadeOut(citats.ANMFAST, function(){
				$("#CoreApp").html(content);
				$("#CoreApp").fadeIn(citats.ANMFAST);
			});
		}
		else
		{
			$("#CoreApp").append(content);
		}

		Bleeep.Loadstamp = $.now();
	}
};