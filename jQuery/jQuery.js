// createQuest
var json = {};
$('.send-button button').click(()=>{
	// const x = $().val();
	// const y = $().val();
	const location = $('#map-location-name').text();
    const near = $(':input:radio[name=location]:checked').val();
    console.log('location : ' + location);
    console.log('near : ' + near);
    console.log(typeof(near));

	json = {
		'x': _y,
		'y': _x,
		'location': location,
		'near': near,
	};
	callApi('https://api.seoyeonsi.bu.to/quest/create', json, (data)=>{
        data = JSON.parse(data);
        if (data.status === 'success'){
            alert(data.message);
            window.location.href = 'https://front.seoyeonsi.bu.to/quest_confirm.php';
        } else {
            alert('에러 발생, 콘솔창 참고');
            console.log(JSON.stringify(data));
        }
	});
});

