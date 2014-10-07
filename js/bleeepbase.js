
var builders = {
	login: LoginBuilder,
	main: MainAppBuilder,
};

var Bleeep = {
	Loadstamp: 0,
	Lang: LangEN
};

var InitApp = function()
{
	myconsole.log("init !");
	page.load(builders.main.buildpage(), true);
};
