<?php
session_start();
include "includes/header.php";
include "includes/head.php";
include "includes/navbar.php";
?>


    <!-- ****************** our contact us *************** -->
    <div class="top_banner">
           
           <div class="col-sm-6 top_banner_left">
               <h2>Contact Us</h2>
               <p>Currently you have applied to this jobs . and they are still on pending.</p>
               <p>They are neither approved nor unapproved</p>
           </div>
           <div class="col-sm-6"></div>
           
           
       </div>
    <section id="contact_us">
        <div class="container">
            <div class="heading">
                
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown </p>
            </div>
            <div class="adress">
                <div class="row">
                    <div class="col-sm-4 adress1"> <i class="fa fa-mobile" aria-hidden="true"></i>
                        <div class="adress1_text"> <span><span>+ 8801521434247</span>
                            <br><span>+8801620980710, </span></span>
                        </div>
                    </div>
                    <div class="col-sm-4 adress1"> <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <div class="adress1_text"> <span><span>Suite 02, Level 12, Sahera Tropical Center 218 </span>
                            <br><span>New Elephant Road, Dhaka - 1205 </span></span>
                        </div>
                    </div>
                    <div class="col-sm-4 adress1"> <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <div class="adress1_text"> <span><span>asieb.hasan145@gmail.com</span>
                            <br><span>Info@gmail.com </span></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="adress2">
               <div class="row">
                <div class="col-sm-6">
                   <form method="POST" action="sendEmail.php">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control required" placeholder="Your Name *">
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" class="form-control required" placeholder="Your Email *">
                        </div>
                        <div class="form-group">
                            <textarea name="body" id="" class="form-control" rows="6" placeholder="Your Message *"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit"  name="submit" class="form-control">
                        </div>
                    </form>
                </div>
                <div class="col-sm-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14606.344743300535!2d90.4240397303657!3d23.762131753335787!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b80a03c8e22f%3A0xd52685f4a2fe003c!2sBanasree%2C+Dhaka%2C+Bangladesh!5e0!3m2!1sen!2s!4v1484271141831" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                </div>
            </div>
        </div>
    </section>



<?php include "includes/last.php" ?>
<?php include "includes/footer.php" ?>