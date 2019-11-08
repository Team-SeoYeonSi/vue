<?php
include("./_head.php");
?>
<style>
.logo { font-size:40px; text-align:center; padding-top:40%; height:auto; }
.buttons { width:80%; margin:0 auto; margin-top:30px; }
.buttons button { width:100%; height:50px; border:0; border-radius:10px; margin-top:50px; }
.buttons .btn-kakao { background-color:#ffde00; color:#000; vertical-align:middle; }
.buttons .btn-kakao img { vertical-align:middle; margin-top:-4px; margin-right:10px; }
</style>
<div class="container">
	<div class="logo">
		<img src="./img/logo.png">
	</div>
	<div class="buttons">
		<a href="<?php echo $API_URL; ?>/member/kakao/login">
			<button class="z-depth-2 waves-effect waves-light btn-kakao">
				<img src="./img/kakao_sm.png">
				카카오계정으로 로그인
			</button>
		</a>
	</div>
</div>
<?php
include("./_tail.php");
?>