
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
				$("#CoreApp").fadeIn(citats.ANMFAST, function(){
					// TODO SOMETHING ?
					if ($("#subscribe").length > 0){
						$("#subscribe").on("click", function(){
							alert("yo");
							sdkforphp.addUser($("#mail").val(),$("#login").val(),$("#pass").val());
						});
					}
					// ???
				});
			});
		}
		else
		{
			$("#CoreApp").append(content);
		}

		Bleeep.Loadstamp = $.now();
	}
};