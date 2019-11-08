$('.send-button button').click(()=>{
	// const x = $().val();
	// const y = $().val();
	const location = $('#map-location-name').text();
    const near = $(':input:radio[name=location]:checked').val();
    console.log('location : ' + location);
    console.log('near : ' + near);

	const json = {
		'x': _x,
		'y': _y,
		'location': location,
		'near': near,
	};
	callApi('https://api.seoyeonsi.bu.to/quest/create', json, (data)=>{
		window.location.href = data;
	});
});

