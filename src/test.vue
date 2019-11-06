<!-- 컴포넌트 구현 부분-->
<!-- 큰 뼈대를 template, script, style 로 구분-->
<template>
    <div>
        <h1>{{test}}</h1>
        <h2>{{test}}</h2>
	<p>webhook2</p>
    </div>
</template>

<script>
    export default {
        data() { // 일반 데이터
            return {
                test: 'Hello World!',
            }
        },
        computed: { // 일반 데이터를 가공하여 사용할 때 : 중요!
            
        },
        methods: {
            
        },
        created(){

        },
        mounted(){

        },
        beforeDestroy(){

        }
    };
</script>


<style scoped> /* scoped : 해당 컴포넌트 안에서만 사용 가능한 css
성능 상 붙이는게 좋다*/
</style>