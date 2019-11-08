<?php
include("./head.php");
?>

<style>
.sub-nav { padding:12px; background-color:#fff; border-bottom:1px solid #ddd; }
.sub-nav h3 { font-size:16px; font-weight:bold; }

.quest-form { padding-bottom:60px; }
.quest-form .map { height:150px; }
.quest-form .map-location { padding:12px 20px; position:relative; border-bottom:1px solid #ddd; background-color:#fff; }
.quest-form .map-location strong { font-weight:bold; }
.quest-form .location-select { padding:20px; }
.quest-form .location-select label { margin-right:10px; }
.quest-form .location-select [type="radio"]:not(:checked)+span, [type="radio"]:checked+span { padding-left:25px; }

.send-button { position:absolute; bottom:47px; width:100%; }
.send-button button { width:100%; height:50px; background:none; border:0; border-top:1px solid #ddd; color:#9e9e9e; transition:all .5s; }
.send-button.active button { background-color:#ef5350; color:#fff; }
</style>


<div class="sub-nav">
	<h3>퀘스트 받기</h3>
</div>
<div class="quest-form">
	<div class="map"></div>
	<div class="map-location">
		<strong>현위치:</strong> <span id="map-location-name">(확인중)</span>
	</div>
	<div class="location-select">
		<span style="width:40px; display:inline-block;">거리</span>
		<label>
			<input class="with-gap" name="location" value="0" type="radio" checked />
			<span>1km</span>
		</label>
		<label>
			<input class="with-gap" name="location" value="1" type="radio" />
			<span>10km</span>
		</label>
		<label>
			<input class="with-gap" name="location" value="2" type="radio" />
			<span>무관</span>
		</label>
	</div>
</div>
<div class="send-button">
	<button class="waves-effect waves-light" disabled>퀘스트 받기</button>
</div>


<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=9af8acaaca5009bc448377b7358e154f"></script>
<script>
var _x = '';
var _y = '';

var container = $(".map")[0];
var map;
var options = {
	center: new kakao.maps.LatLng(33.450701, 126.570667),
	level: 3
};

function change_location(x, y, str) {
	options.center = new kakao.maps.LatLng(x, y);
	_x = x;
	_y = y;
	map = new kakao.maps.Map(container, options);
	$("#map-location-name").text(str);
	$(".send-button").addClass("active");
	$(".send-button button").removeAttr("disabled");
}

$(function() {
	if(window.nativeApp != undefined)
		window.nativeApp.onLoad();
});
</script>

<?php
include("./tail.php");
?>