function callApi(api, json, callback){
    $.ajax({
        type: "POST",
        url: api,
        data: json,
        success: function (response) {
            console.log('response' + response);
            callback(response);
        },
        error : (err)=>{
            console.log(JSON.stringify(err));
        },
    });
}