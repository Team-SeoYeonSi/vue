
function callApi(api, json, callback, method="POST"){
	if(method == "POST") {
		$.ajax({
			type: method,
			url: api,
			data: json,
			xhrFields: { withCredentials: true },
			success: function (response) {
				console.log('response' + JSON.stringify(response));
				callback(response);
			},
			error : (err)=>{
				console.log(err);
			},
		});
	} else {
		$.ajax({
			type: method,
			url: api,
			xhrFields: { withCredentials: true },
			success: function (response) {
				console.log('response' + JSON.stringify(response));
				callback(response);
			},
			error : (err)=>{
				console.log(err);
			},
		});
	}
}

