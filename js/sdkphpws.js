
var sdkforphp = {
	
	executeRequest: function(target, params, CallbackSuccess, CallbackFaillure){
		var request = $.ajax({
			url: "php/webservice/" + target + ".php",
			type: 'POST',
			// TODO TORESET dataType: "json",
			data: params
		});
		
		request.done(function(data){
		
			if (CallbackSuccess){
				CallbackSuccess(data);
			}
			console.log("Ajax request success !");
		});
		
		request.fail(function(xhr, status){
			
			if (CallbackFaillure){
				CallbackFaillure(status, xhr);
			}
			console.log("Ajax request failed: " + status);
		});
	},
	
	addUser: function(mail, login, password)
	{
		var CBSuccess = function(data){
			console.log('Request sent with result: ' + data);
		};
		
		var CBFaillure = function(){
			
		};
		
		var params = {'mail': mail, 'login': login, 'password': password};
		
		sdkforphp.executeRequest("User/Add", params, CBSuccess, CBFaillure);
	},
	
	patchUser: function(mail, login, password, level, news)
	{
		var CBSuccess = function(data){
			console.log('Request sent with result: ' + data);
		};
		
		var CBFaillure = function(){
			
		};
		
		var params = {'login': login};
		
		if (mail)
			params.mail = mail;
		if (password)
			params.password = password;
		if (level)
			params.level = level;
		if (news)
			params.news = news;

		sdkforphp.executeRequest("User/Patch", params, CBSuccess, CBFaillure);
	},
	
	removeUser: function(login)
	{
		var CBSuccess = function(data){
			console.log('Request sent with result: ' + data);
		};
		
		var CBFaillure = function(){
			
		};
		
		var params = {'login': login};
		
		sdkforphp.executeRequest("User/Delete", params, CBSuccess, CBFaillure);
	},
	
	addBeacon: function(id_user, identity, name, sub1, sub2)
	{
		var CBSuccess = function(data){
			console.log('Request sent with result: ' + data);
		};
		
		var CBFaillure = function(){
			
		};
		
		var params = {'id_user': id_user, 'identity': identity,
		'name': name, 'sub1': sub1, 'sub2': sub2};
		
		sdkforphp.executeRequest("Beacon/Add", params, CBSuccess, CBFaillure);
	},
	
	patchBeacon: function(identity, name, sub1, sub2, active)
	{
		var CBSuccess = function(data){
			console.log('Request sent with result: ' + data);
		};
		
		var CBFaillure = function(){
			
		};
		
		var params = {'identity': identity};
	
		if (name)
			params.name = name;
		if (sub1)
			params.sub1 = sub1;
		if (sub2)
			params.sub2 = sub2;
		if (active)
			params.active = active;

		sdkforphp.executeRequest("Beacon/Patch", params, CBSuccess, CBFaillure);
	},
	
	removeBeacon: function(id_beacon)
	{
		var CBSuccess = function(data){
			console.log('Request sent with result: ' + data);
		};
		
		var CBFaillure = function(){
			
		};
		
		var params = {'id_beacon': id_beacon};
		
		sdkforphp.executeRequest("Beacon/Delete", params, CBSuccess, CBFaillure);
	},
	
	addContent: function(id_user, name, type, value)
	{
		var CBSuccess = function(data){
			console.log('Request sent with result: ' + data);
		};
		
		var CBFaillure = function(){
			
		};
		
		var params = {'id_user': id_user, 'name': name, 'type': type,
		'value': value};
		
		sdkforphp.executeRequest("Content/Add", params, CBSuccess, CBFaillure);
	},
	
	patchContent: function(id_user, name, type, value)
	{
		var CBSuccess = function(data){
			console.log('Request sent with result: ' + data);
		};
		
		var CBFaillure = function(){
			
		};
		
		var params = {'id_user': id_user};
		
		if (name)
			params.name = name;
		if (type)
			params.type = type;
		if (value)
			params.value = value;
		
		sdkforphp.executeRequest("Content/Patch", params, CBSuccess, CBFaillure);
	},
	
	removeContent: function(id_content)
	{
		var CBSuccess = function(data){
			console.log('Request sent with result: ' + data);
		};
		
		var CBFaillure = function(){
			
		};
		
		var params = {'id_content': id_content};
		
		sdkforphp.executeRequest("Content/Delete", params, CBSuccess, CBFaillure);
	},
	
	addContext: function(mail, login, password)
	{
		var CBSuccess = function(data){
			console.log('Request sent with result: ' + data);
		};
		
		var CBFaillure = function(){
			
		};
		
		var params = {'mail': mail, 'login': login, 'password': password};
		
		sdkforphp.executeRequest("User/Add", params, CBSuccess, CBFaillure);
	},
	
	patchContext: function(mail, login, password)
	{
		var CBSuccess = function(data){
			console.log('Request sent with result: ' + data);
		};
		
		var CBFaillure = function(){
			
		};
		
		var params = {'mail': mail, 'login': login, 'password': password};
		
		sdkforphp.executeRequest("User/Add", params, CBSuccess, CBFaillure);
	},
	
	removeContext: function(mail, login, password)
	{
		var CBSuccess = function(data){
			console.log('Request sent with result: ' + data);
		};
		
		var CBFaillure = function(){
			
		};
		
		var params = {'mail': mail, 'login': login, 'password': password};
		
		sdkforphp.executeRequest("User/Add", params, CBSuccess, CBFaillure);
	},
	
	addPush: function(mail, login, password)
	{
		var CBSuccess = function(data){
			console.log('Request sent with result: ' + data);
		};
		
		var CBFaillure = function(){
			
		};
		
		var params = {'mail': mail, 'login': login, 'password': password};
		
		sdkforphp.executeRequest("User/Add", params, CBSuccess, CBFaillure);
	},
	
	patchPush: function(mail, login, password)
	{
		var CBSuccess = function(data){
			console.log('Request sent with result: ' + data);
		};
		
		var CBFaillure = function(){
			
		};
		
		var params = {'mail': mail, 'login': login, 'password': password};
		
		sdkforphp.executeRequest("User/Add", params, CBSuccess, CBFaillure);
	},
	
	removePush: function(mail, login, password)
	{
		var CBSuccess = function(data){
			console.log('Request sent with result: ' + data);
		};
		
		var CBFaillure = function(){
			
		};
		
		var params = {'mail': mail, 'login': login, 'password': password};
		
		sdkforphp.executeRequest("User/Add", params, CBSuccess, CBFaillure);
	}
};