<?php

$this->load->view('layout/header');
?>

<section class="sub-bnr" data-stellar-background-ratio="0.5" style="background-position: 0% -51px;">
    <div class="position-center-center">
        <div class="container">
            <h4>contact us</h4>

            <!-- Breadcrumb -->
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">contact us</li>
            </ol>
        </div>
    </div>
</section>
<div id="content"> 
    <!-- Contact Us -->
    <section class="lets-talk pad-t-b-130">
        <div class="container"> 
            <!-- Cantact Us -->
            <div class="row">
                <div class="col-md-6 contact-social"> 

                    <!-- Main Heading -->
                    <div class="heading-block margin-bottom-60">
                        <h3 class="text-transform-none letter-space-0">Our Location</h3>
                    </div>
                    <ul class="studio-loc padding-right-100">
                        <li><i class="flaticon-route"></i>
                         Flat B, 4th Floor, Yen Chun Mansion,<br>
                                            Block 18-26 Portland Street,<br>
                                            Yau Ma Tei,
                                            Kowloon, Hong Kong
                        </li>
<!--                        <li><i class="flaticon-smartphone"></i> <a href="tel:+(852) 6878 4014">+(852) 6878 4014</a> <br>
                            <a href="+(852) 5129 8473">+(852) 5129 8473</a></li>-->
                        
                        
                        <li><i class="flaticon-mail"></i> <a href="mailto:sales@costcointernational.com">sales@costcointernational.com</a> <br>
                            <a href="mailto:info@costcointernational.com">info@costcointernational.com</a></li>
                    </ul>

                    <!-- Main Heading -->
                    <div class="heading-block margin-bottom-40 margin-top-60">
                        <h3 class="text-transform-none letter-space-0">Follow Us</h3>
                    </div>
                    <div class="social-links">
                        <ul>
                            <li><a href="#."><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#."><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#."><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#."><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#."><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-sm-6">
                    <!-- Main Heading -->
                    <div class="heading-block left-align margin-bottom-60">
                        <h3 class="text-transform-none letter-space-0">Conatct Us</h3>
                    </div>

                    <div class="contact">               
                        <!-- Success Msg -->
                        <div id="contact_message" class="success-msg"> <i class="fa fa-paper-plane-o"></i>Thank You. Your Message has been Submitted</div>              
                        <!-- FORM -->
                        <form role="form" id="contact_form" class="contact-form" method="post" onsubmit="return false">
                            <ul class="row nolist-style">
                                <li class="col-sm-12">
                                    <label>
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                                    </label>
                                </li>
                                <li class="col-sm-12">
                                    <label>
                                        <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                                    </label>
                                </li>
                                <li class="col-sm-12">
                                    <label>
                                        <input type="text" class="form-control" name="company" id="company" placeholder="Phone">
                                    </label>
                                </li>
                                <li class="col-sm-12">
                                    <label>
                                        <textarea class="form-control" name="message" id="message" rows="5" placeholder="Message"></textarea>
                                    </label>
                                </li>
                                <li class="col-sm-12 text-left">
                                    <button type="submit" class="btn btn-inverse" value="submit" id="btn_submit" onclick="proceed();">SUBMIT</button>
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

  
</div>
<?php

$this->load->view('layout/footer');
?>