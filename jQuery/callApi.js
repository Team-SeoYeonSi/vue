
function callApi(api, json, callback, method="POST"){
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
}

