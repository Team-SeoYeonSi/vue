<?php
include("./_head.php");
?>

<style>
.gnb { text-align:center; line-height:4.8; }
.gnb .btn-alarm { position:absolute; right:10px; background:none; line-height:4.2; border:0; width:40px; height:56px; color:#fff; }

.gnb-bottom { position:absolute; bottom:0; height:auto; width:100%; text-align:center; border-top:1px solid #ddd; }
.gnb-bottom ul li { padding:5px !important; color:#9e9e9e; }
.gnb-bottom ul li.active { color:#ef5350; }
.gnb-bottom ul li i { display:block; font-size:18px; }
.gnb-bottom ul li span { display:block; font-size:12px; }
</style>

<nav>
	<div class="nav-wrapper gnb pink accent-1">
		<img src="./img/logo_sm.png">
		<button class="btn-alarm">
			<i class="fas fa-bell"></i>
		</button>
	</div>
</nav>

<div class="gnb-bottom white">
	<ul class="row">
		<li class="col s3 active">
			<i class="fas fa-home"></i>
			<span>퀘스트</span>
		</li>
		<li class="col s3">
			<i class="fas fa-comment-alt"></i>
			<span>인증</span>
		</li>
		<li class="col s3">
			<i class="fas fa-won-sign"></i>
			<span>보상</span>
		</li>
		<li class="col s3">
			<i class="fas fa-cog"></i>
			<span>설정</span>
		</li>
	</ul>
</div>

<?php
include("./_tail.php");
?>