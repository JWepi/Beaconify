
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
		var CBSuccess = function(){
			alert('OK');
		};
		
		var CBFaillure = function(){
			alert('PAS OK');
		};
		
		var params = {'mail': mail, 'login': login, 'password': password};
		
		sdkforphp.executeRequest("User/Add", params, CBSuccess, CBFaillure);
	}
};