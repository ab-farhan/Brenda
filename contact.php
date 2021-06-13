<?php
require_once('functions/function.php');
get_header();
 ?>
    <!--====================  breadcrumb area ====================-->
    <div class="page-breadcrumb bg-img space__bottom--r120" data-bg="assets/img/backgrounds/bc-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-breadcrumb-content text-center">
                        <h1>Contact</h1>
                        <ul class="page-breadcrumb-links">
                            <li><a href="index.php">Home</a></li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of breadcrumb area  ====================-->
    <!--====================  contact area ====================-->
    <div class="conact-section space__bottom--r120">
        <div class="container">
            <div class="row">
                <div class="col space__bottom--40">
                    <div class="contact-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d58448.984527501474!2d90.4414506303543!3d23.70949655988446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3755b708d6ce44fd%3A0xa86ccfc10499dd6e!2zRG9nYWlyIEJhemFyLCDgprjgpr_gprDgpr7gppzgp4HgprAg4KaX4Ka-4Kaw4Kah4KeH4KaoLCDgprbgpr7gprngpr7gpqbgpr7gpqQg4Ka54KeL4Ka44KeH4KaoIOCmsOCngeCmrOCnh-CmsiwgU2hvaGlkIE1pbG9uIFJkLCBEaGFrYSAxMzYy!3m2!1d23.709500499999997!2d90.4764703!5e0!3m2!1sen!2sbd!4v1603379410153!5m2!1sen!2sbd"></iframe>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-12">
                    <div class="contact-information">
                        <h4 class="space__bottom--30">Contact Information</h4>
                        <ul>
                            <li>
                                <span class="icon"><i class="fa fa-map-marker"></i></span>
                                <span class="text"><span>11/64 Dogair Bazar, Demra, Dhaka 1361.</span></span>
                            </li>
                            <li>
                                <span class="icon"><i class="fa fa-phone"></i></span>
                                <span class="text"><a href="#">(+880) 24568 36598</a><a href="#">(+880) 65975 69785</a></span>
                            </li>
                            <li>
                                <span class="icon"><i class="fa fa-envelope-open"></i></span>
                                <span class="text"><a href="#">info@example.com</a><a href="https://abfarhan.com">www.abfarhan.com</a></span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 col-12">
                    <div class="contact-form">
                        <h4 class="space__bottom--30">Leave Your Message</h4>
                        <?php
                          if(!empty($_POST)){

                            $name=validation($_POST['c_name']);
                            $email=validation($_POST['c_email']);
                            $mess=validation($_POST['c_message']);

                            if(!empty($name)){
                             if(!empty($email)){
                              if(!empty($mess)){

                                $insert="INSERT INTO contact_info(con_name,con_email,con_message)
                                VALUES('$name','$email','$mess')";
                                if(mysqli_query($conn,$insert)){
                                  echo "<h5 class='text-center text-success pb-3'> Sucessfully Send Your Message. </h5>";
                                }else {
                                  echo "<h5 class='text-center text-success pb-3'>Opps!! Message Doesn't Send </h5>";
                                }
                              }else {
                                echo "Please write down your message!";
                                }
                            }else {
                            echo "Please enter your email!";
                            }
                          }else {
                            echo "Please enter your name!";
                          }

                          }

                         ?>
                        <form id="con_from" action="" method="post" >
                            <div class="row row-10">
                                <div class="col-md-6 col-12 space__bottom--20">
                                  <input name="c_name" type="text" placeholder="Your Name">
                                </div>
                                <div class="col-md-6 col-12 space__bottom--20">
                                  <input name="c_email" type="email" placeholder="Your Email">
                                </div>
                                <div class="col-12">
                                  <textarea name="c_message" placeholder="Your Message"></textarea>
                              </div>
                                <div class="col-12"><button type="submit">Send Message</button></div>
                            </div>
                        </form>
                        <p class="form-message"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of contact area  ====================-->
<?php
  get_footer();
 ?>
