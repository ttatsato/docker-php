<!DOCTYPE html>
<title>APIを指定しないPHPとvue.js</title>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.10/dist/vue.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<section id="app">
    <form method="post">
        <input type="text" v-model="text" name="test">
        <input type="button" @click="submit" value="送信">
    </form>
</section>
<script>
    const app = new Vue({
        el: "#app",
        data: {
            text: '' // 送信する値
        },
        methods: {
            submit () {
                let config = {
                    headers: {
                        'content-type': 'multipart/form-data',
                    },
                };
                let formData = new FormData();
                formData.append('text', this.text);
                axios.post('./upload.php', formData, config).then(response => {
                    console.log('送信したテキスト: ' + response.data.text);
                }).catch(error => {
                    console.log(error);
                });
            }
        }
    });
</script>