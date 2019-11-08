<template>
    <div>
        <div class="container">
		<div class="logo">
			LOGO
		</div>
		<div class="buttons">
			<button @click="onClickLogin('kakao')" class="z-depth-2 waves-effect waves-light btn-kakao">카카오톡 계정으로 시작하기</button>
			<button @click="onClickLogin('facebook')" class="z-depth-2 waves-effect waves-light btn-facebook">페이스북 계정으로 시작하기</button>
			<button @click="onClickLogin('google')" class="z-depth-2 waves-effect waves-light btn-google">구글 계정으로 시작하기</button>
            {{platform}}
		</div>
	</div>
    </div>
</template>

<script>
import { mapState } from 'vuex';



export default {
    data() {
        return {
            platform: '',
            users: [],
        }
    },
    methods: {
        onClickLogin(platform) {
            if (platform === 'kakao'){
                this.$http.get('https://api.seoyeonsi.bu.to/user/login') // /user/login
                .then((response)=>{
                    this.users = response.data;
                });
                
            } else if (platform === 'facebook') {
                this.platform = platform;
            } else if (platform === 'google') {
                this.platform = platform;
            }
        },
    },
    computed: {
        ...mapState(['logined']),
    },
}
</script>

<style>
    .logo { font-size:40px; text-align:center; margin-top:30%; height:100px; }
    .buttons { width:80%; margin:0 auto; margin-top:30px; }
    .buttons button { width:100%; height:50px; border:0; border-radius:10px; margin-top:10px; }
    .buttons .btn-kakao { background-color:#ffeb00; color:#000; }
    .buttons .btn-facebook { background-color:#3b5999; color:#fff; }
    .buttons .btn-google { background-color:#ea4335; color:#fff; }
</style>