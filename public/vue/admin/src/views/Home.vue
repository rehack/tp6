<template>
  <div class="home">
    <img alt="Vue logo" src="../assets/logo.png" />
    <HelloWorld msg="Welcome to Your Vue.js App" />
    <button @click="testApi">按钮</button>
  </div>
</template>

<script>
// @ is an alias to /src
import axios from 'axios'
import HelloWorld from '@/components/HelloWorld.vue'

export default {
    name: 'Home',
    components: {
        HelloWorld
    },

    methods: {
        testApi () {
            axios
                .post('http://tp6.com/api/test', {
                    headers: {
                        Authorization: 'rehack34543ca7ce6357e2422071984d94b962'
                    }
                })
                .then(res => {
                    console.log(res)
                })
        }
    }
}
</script>
