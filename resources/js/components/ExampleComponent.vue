<template>
    <div class="wrapper">
        <div class="sample">
            <!--<form  @submit.prevent="send">-->
                <input type="text" class="text" v-model="name">
            <!--</form>-->
            <hr>
            <h2>Hello, {{ name }}</h2>
        </div>
    </div>
</template>

<script>
    export default {
        //el: '.sample',
        data: {
            return {
                name:'',
            }
        },
        methods: {
            send(){
                console.log('yeeeeeee');
            }
        }
    }

</script>
