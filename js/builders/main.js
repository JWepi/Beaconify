
var MainAppBuilder = {
	buildpage: function(){
	
		var HTML = "" +
		"<div id='mainDiv'></div>" +
		"	<div id='mainHead'><span class='bigtitletxt'>" + Bleeep.Lang.main.title + "</span></div>" +
		"	<div id='mainMenu'>" +
		"		<table class='whitetxt'><tr>" +
		"			<td id='menuPush'>" + Bleeep.Lang.main.menuPush + "</td>" +
		"			<td id='menuBeacon'>" + Bleeep.Lang.main.menuBeacon + "</td>" +
		"			<td id='menuContent'>" + Bleeep.Lang.main.menuContent + "</td>" +
		"			<td id='menuContext'>" + Bleeep.Lang.main.menuContext + "</td>" +
		"		</tr></table>"+
		"	</div>" +
		"	<div id='mainCore'>" + Bleeep.Lang.main.title + "</div>" +
		"</div>";
		
		return (HTML);
	}
};