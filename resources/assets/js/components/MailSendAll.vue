<template>
    <div>
        <h1>Herkese mail gönder</h1>
        <hr>
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
    import VueSweetalert2 from 'vue-sweetalert2';
    
    Vue.use(VueSweetalert2);

    export default {
        data(){
            return {
                email: '',
                name: '',
                subject: '',
                header: '',
                content: 'İçerik girin'
            }
        },

        methods: {
            sendMail(){
                const headers = {
                    'Content-Type': 'multipart/form-data'
                };
                var self = this;
                this.$swal({
                    title: 'Emin misin?',
                    text: "Mail gönderilecek!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Evet, gönder!',
                    cancelButtonText: 'Hayır'
                }).then((result) => {
                    if (result.value) {
                        axios.post('',{
                            subject: this.subject,
                            header: this.header,
                            body: this.content,
                        }, headers).then(response => {
                            console.log(response.data)
                            if(response.status === 200){
                                self.$swal(
                                    'Gönderildi!',
                                    'Mail gönderildi.',
                                    'success'
                                );
                            }
                        });

                    }
                });
            }
        },
    }
</script>

<style scoped>

</style>