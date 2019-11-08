<!-- 컴포넌트 구현 부분-->
<!-- 큰 뼈대를 template, script, style 로 구분-->
<template>
    <div>
        <loginTable v-if="!logined" />
    </div>
</template>

<script>
import { mapState } from 'vuex';
import store from './store';
import loginTable from './loginTable';

    export default {
        store,
        components: {
            loginTable,
        },
        data() { // 일반 데이터
            return {
            }
        },
        computed: { // 일반 데이터를 가공하여 사용할 때 : 중요!
            ...mapState(['logined']),
        },
        methods: {
            
        },
        created(){

        },
        mounted(){

        },
        beforeDestroy(){

        },
        watch: {

        },
    };
</script>


<style> /* scoped : 해당 컴포넌트 안에서만 사용 가능한 css */

</style>