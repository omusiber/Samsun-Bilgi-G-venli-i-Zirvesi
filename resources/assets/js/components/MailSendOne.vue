<template>
    <div>
        <h1>Yalnızca bir kişiye mail gönder</h1>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Mail adresi" v-model="email" @keyup="checkMail">
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control" v-model="name" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Konu" v-model="subject">
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Mail içerik başlığı" v-model="header">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <textarea name="message" id="message" class="form-control" v-model="content"></textarea>
            </div>
        </div>
        <div class="row">
            <button @click="sendMail">Gönder</button>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                email: '',
                name: 'Kayıtlı değil!',
                subject: '',
                header: '',
                content: 'İçerik girin'
            }
        },

        methods: {
            checkMail(){
                axios.post('/admin/mail/check-mail',{
                    email: this.email
                }).then(response => {
                    if(response.data.length){
                        this.name=response.data
                    }
                });
            },
            sendMail(){
                //console.log(this.content);
                axios.post('/admin/mail/send-one',{
                    email: this.email,
                    subject: this.subject,
                    header: this.header,
                    content: this.content,
                    name: this.name
                }).then(response => console.log(response));
            }
        },

    }
</script>

<style scoped>

</style>