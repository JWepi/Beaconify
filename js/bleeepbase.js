
var builders = {
	login: LoginBuilder,
	main: MainAppBuilder,
};

var Bleeep = {
	Loadstamp: 0,
	Lang: LangEN,
	Visual: {
		icons: {
			white_wheel: "img/wheel.png"
		}
	}
};

var InitApp = function()
{
	myconsole.log("init !");
	page.load(builders.main.buildpage(), true);
	
};
