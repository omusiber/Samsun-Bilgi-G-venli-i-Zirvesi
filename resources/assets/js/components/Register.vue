<template>
    <section id="register">
    <div class="overlay"></div>
		<div class="container">
			<div class="row section-intro with-bottom-sep animate-this">
   		<div class="col-twelve">
   			<h3>Kayıt Ol</h3>

   			<p class="lead">Etkinliğe katılmak ve çekilişlerden faydalanmak için kayıt olmanız gerekmektedir.</p>
   		</div> 
   	</div> <!-- end section-intro -->

   	<div class="row contact-content">
   		<div class="col-seven tab-full animate-this">
            <!-- form -->
               <div class="form-field">
 					<input v-model="name" type="text" id="contactName" placeholder="Ad Soyad" minlength="2" required="">
               </div>
                <div class="form-field">
                    <input v-model="email" type="email" id="contactEmail" placeholder="Email Adresi" required="">
                </div>		           
                <div class="form-field">
                    <input v-model="phone" type="text" id="contactPhone" placeholder="Telefon">
                </div>	                 
               <div class="form-field">
	              	<input type="text" v-model="from" id="contactCorp" placeholder="Kurum / Okul" required=""/>
				</div> 
							

               <div class="form-field">
                  <button class="submitform" @click="send">Katıl</button>

                <div id="submit-loader">
                    <div class="text-loader">Gönderiliyor...</div>                             
                    <div class="s-loader">
                        <div class="bounce1"></div>
                        <div class="bounce2"></div>
                        <div class="bounce3"></div>
                    </div>
                </div>
               </div>

      		<!-- end form -->

            <!-- contact-warning -->
            <div id="message-warning"></div> 
            <div id="message-error"></div> 

            <!-- contact-success -->
      		<div v-if="success" class="message" style="background:green">
               <i class="fa fa-check"></i>İlginiz için teşekkür ederiz!<br>
      		</div>

            <div v-if="error" class="message">
                {{ text }}
            </div>

         </div> <!-- end col-seven --> 

         <div class="col-four tab-full contact-info end animate-this">

         	<h5>Düzenleyen Bilgileri</h5>

         	<div class="cinfo">
	   			<h6>Bize ulaşın</h6>
	   			<p>
	            	Yaşam Merkezi 1. Kat<br>
	            	Kurupelit Kampüsü, OMU<br>
	            	Samsun
	            </p>
	   		</div> <!-- end cinfo -->

	   		<div class="cinfo social">
	   			<h6>Email</h6>
	   			<p>
	   				siber@omu.edu.tr	     
				   </p>
					 <h6>Twitter</h6>
	   			<p>
	   				<a target="_blank" href="https://twitter.com/omusiber">@omusiber</a>	     
				   </p>
					 <h6>Instagram</h6>
	   			<p>
	   				<a target="_blank" href="https://instagram.com/omusiber">omusiber</a>	     
				   </p>
	   		</div> <!-- end cinfo -->

         </div> <!-- end cinfo --> 

   	</div> <!-- end row contact-content -->
		</div>
		
	</section> <!-- end contact -->
</template>

<script>
    export default {
        data(){
            return {
                name: null,
                email: null,
                phone: null,
                from: null,
                success: false,
                error: false,
                text: null,
            }
        },

        methods: {
            send(){
                var self = this;
                axios.post('', {
                    name: self.name,
                    email: self.email,
                    phone: self.phone,
                    from: self.phone
                }).then(response => {
                    if (response.status === 200){
                        self.success = true;
                        self.name = null;
                        self.email = null;
                        self.phone = null;
                        self.from = null;
                        setTimeout(function(){
                            self.success = false;
                        }, 3000);
                    }
                }).catch(e => {
                    self.error = true;
                    self.text = "Hay aksi..";
                    if (e.response.status === 403){
                        self.text = "Sistemde kaydınız bulunmaktadır!"
                    }
                    if (e.response.status === 422){
                        self.text = "Sistemde kaydınız bulunmaktadır!"
                    }
                    setTimeout(function(){
                        self.error = false
                    }, 3000);
                    console.log(e.response)
                })
            }
        }
    }
</script>

<style scoped>
    div.message {
        font-size: 1.5rem;
        display: block;
        letter-spacing: .2rem;
        height: 6rem;
        line-height: 6rem;
        padding: 0 3rem;
        width: 100%;
        background: #bd2525;
        color: #000000;
        margin-top: .6rem;
    }
</style>