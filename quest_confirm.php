<?php
include("./head.php");
?>

<style>
.sub-nav { padding:12px; background-color:#fff; border-bottom:1px solid #ddd; position:relative; z-index:0; }
.sub-nav h3 { font-size:16px; font-weight:bold; }
.sub-nav .cancel { position:absolute; right:0px; top:0; height:42px; background:none; border:0; padding-left:15px; padding-right:15px; }

.quest-info-box { padding-bottom:47px; height:calc(100% - 95px); padding-top:100px; position:relative; }
.quest-info-box .quest-info { padding:12px 40px; margin:0; position:absolute; top:0; height:100px; border-bottom:1px solid #ddd; background-color:#fff; text-align:center; overflow:hidden; width:100%; }
.quest-info-box .quest-info:before { position:absolute; left:20px; top:5px; font-size:24px; content:'"'; display:block; }
.quest-info-box .quest-info:after { position:absolute; right:20px; top:5px; font-size:24px; content:'"'; display:block; }
.quest-info-box .map { height:100%; }
</style>


<div class="sub-nav">
	<h3>퀘스트 확인</h3>
	<button class="cancel waves-effect waves-light">
		<i class="fas fa-redo-alt "></i>
	</button>
</div>
<div class="quest-info-box">
	<p class="quest-info"></p>
	<div class="map"></div>
</div>


<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=9af8acaaca5009bc448377b7358e154f"></script>
<script>
var container = $(".map")[0];
var map;
var options = {
	center: new kakao.maps.LatLng(33.450701, 126.570667),
	level: 3
};
var quest;
var json;

function change_location(x, y) {
	options.center = new kakao.maps.LatLng(x, y);
	map = new kakao.maps.Map(container, options);
}

function change_quest(quest) {
	quest = quest;
	$(".quest-info").text(quest);
}

$(function() {
	callApi('https://api.seoyeonsi.bu.to/confirm', {}, (result)=>{
		json = result;
	});
	const data = json;
	console.log(data);
		if (! (data.x && data.y && data.location && data.near)) {
			alert('생성된 Quest가 없어 Quest 생성 페이지로 이동합니다.');
			window.location.href = 'https://front.seoyeonsi.bu.to/quest_get.php';
		} else {
			$('.quest-info').text(quest);
		}
	
});


</script>

<?php
include("./tail.php");
?>