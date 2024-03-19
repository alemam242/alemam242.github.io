 <!-- CONTACT -->
 <section id="contact" class="full-height px-lg-5">
     <div class="container">

         <div class="row justify-content-center text-center">
             <div class="col-lg-8 pb-4" data-aos="fade-up">
                 <h2 class="text-brand mb-3">CONTACT</h2>
                 <h4>Interested in working together? Let's talk
                 </h4>
             </div>

             <div class="col-lg-8" data-aos="fade-up" data-aos-delay="300">
                 {{-- <form action="#" class="row g-lg-3 gy-3"> --}}
                 <div class="row g-lg-3 gy-3">
                     <div class="form-group col-md-6">
                         <input id="name" type="text" class="form-control" placeholder="Enter your name">
                     </div>
                     <div class="form-group col-md-6">
                         <input id="email" type="email" class="form-control" placeholder="Enter your email">
                     </div>
                     <div class="form-group col-12">
                         <input id="subject" type="text" class="form-control" placeholder="Enter subject">
                     </div>
                     <div class="form-group col-12">
                         <textarea id="message" name="message" rows="4" class="form-control" placeholder="Enter your message"></textarea>
                     </div>
                     <div class="form-group col-12 d-grid">
                         <button onclick="sendMessage()" class="btn btn-brand">Contact me</button>
                     </div>
                 </div>
                 {{-- </form> --}}
             </div>
         </div>


     </div>
 </section>
 <!-- //CONTACT -->

 <script>
     async function sendMessage() {
         let name = document.getElementById('name').value;
         let email = document.getElementById('email').value;
         let subject = document.getElementById('subject').value;
         let message = document.getElementById('message').value;

         if (name.length == 0) {
             errorToast("Name Required.")
         } else if (email.length == 0) {
             errorToast("Email Required.")
         } else if (subject.length == 0) {
             errorToast("Subject Required.")
         } else if (message.length == 0) {
             errorToast("Message Required.")
         } else {
             console.log(name);
             console.log(email);
             console.log(subject);
             console.log(message);

             showLoader();
             try {
                 let res = await axios.post('/sendEmail', {
                     name: name,
                     email: email,
                     subject: subject,
                     body: message
                 });

                 hideLoader();

                 console.log(res);
                 if (res.status == 200 && res.data['message'] === 'Success') {
                     successToast("Email sent successfully.");
                 } else {
                     errorToast("Failed to send email.");
                 }
             } catch (error) {
                 hideLoader();
                 errorToast("An error occurred" + error);
             }


         }


     }
 </script>
