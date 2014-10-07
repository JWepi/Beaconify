
var builders = {
	login: LoginBuilder,
	main: MainAppBuilder,
};

var Bleeep = {
	Loadstamp: 0

};

var InitApp = function()
{
	myconsole.log("init !");
	page.load(builders.main, true);
};
