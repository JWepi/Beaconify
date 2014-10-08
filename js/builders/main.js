
var MainAppBuilder = {

	coreLoader: false,

	buildpage: function(){
	
		if (!MainAppBuilder.coreLoader)
			MainAppBuilder.coreLoader = MainAppBuilder.defaultLoader;
	
		var HTML = "" +
		"<div id='mainDiv'></div>" +
		"	<div id='mainHead'><span class='bigtitletxt'>" + Bleeep.Lang.main.title + "</span>" +
		"	<div id='mainSettings'><img id='wheel' src='"+Bleeep.Visual.icons.white_wheel+"' /></div></div>" +
		"	<div id='mainMenu'>" +
		"		<table class='whitetxt'><tr>" +
		"			<td id='menuPush'>" + Bleeep.Lang.main.menuPush + "</td>" +
		"			<td id='menuBeacon'>" + Bleeep.Lang.main.menuBeacon + "</td>" +
		"			<td id='menuContent'>" + Bleeep.Lang.main.menuContent + "</td>" +
		"			<td id='menuContext'>" + Bleeep.Lang.main.menuContext + "</td>" +
		"		</tr></table>"+
		"	</div>" +
		"	<div id='mainCore'>" + MainAppBuilder.coreLoader() + "</div>" +
		"</div>";
		
		return (HTML);
	},
	
	defaultLoader: function(){
	
		var HTML = "" +
		"<div id='mainDefaultPage'>" +
		"	" +
		" Hey! " +
		"	" +
		"</div>";
		
		return (HTML);
	}
};