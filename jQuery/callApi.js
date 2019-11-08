
function callApi(api, json, callback){
    $.ajax({
        type: "POST",
        url: api,
        data: json,
        xhrFields: { withCredentials: true },
        success: function (response) {
            console.log('response' + JSON.stringify(response));
            callback(response);
        },
        error : (err)=>{
            console.log('err' + err);
        },
    });
}

