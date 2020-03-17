<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "header.php";?>
</head>

<body>
    <header>
        <!-- Nav -->
        <?php include "navsubpage.php";?>
        <!-- Nav ends -->
    </header>

    <main>
        <!-- contact us section -->

        <section class="contactus">
            <div class="contactus_wrapper">
                <h2 class="wow zoomIn" data-wow-duration="1s" data-wow-delay="0">CONTACT US</h2>
                <p class="wow zoomIn" data-wow-duration="1s" data-wow-delay="0">Have any pricing or order queries? Drop
                    us a message and our sales team will reach out to you soon!</p>
            </div>

            <div class="contact_main">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-1 col-lg-1 col-md-1"></div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                            <div class="left_content wow bounceInLeft" data-wow-duration="1s" data-wow-delay="1.2s">
                                <img class="contact_logo" src="assets/imgs/Logo.png" alt="">
                                <h4>VINUMAC</h4>
                                <h3><span><img class="cont_tell" src="assets/imgs/Phone Icon.png" alt=""> <a
                                            href="tel:91-96-63777190">91-96-63777190</a></span> </h3>
                                <h3><span><img class="cont_mail" src="assets/imgs/E-Mail Icon.png" alt="">
                                        <a href="mailto:admin@vinumac.com">admin@vinumac.com</a></span>

                                </h3>
                                <h3><span><img class="cont_mail" src="assets/imgs/E-Mail Icon.png" alt="">
                                        <a href="mailto:vinumac.v@gmail.com">vinumac.v@gmail.com</a></span>

                                </h3>

                                <h3><span><img class="cont_mail" src="assets/imgs/E-Mail Icon.png" alt="">
                                        <a href="mailto:vinod@vinumac.com">vinod@vinumac.com</a></span>

                                </h3>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                            <div class="right_content  wow bounceInRight" data-wow-duration="1s" data-wow-delay="2s">
                                <form method="post" action="contact-mail.php">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Your Name</label>
                                        <input type="text" name="name" class="form-control"pattern="[a-zA-Z\s]+" title="Name should be only Alphabet"
                                                required id="exampleInputPassword1">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword2">Your E-Mail</label>
                                        <input type="email" name="email" class="form-control" id="exampleInputPassword2"
                                        required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword3">Phone No</label>
                                        <input type="tel" name="number" pattern="[1-9]{1}[0-9]{9}" required
                                            class="form-control" id="exampleInputPassword3" title="Only Numbers" >
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Your Message</label>
                                        <textarea name="message" class="form-control" id="exampleFormControlTextarea1"
                                            rows="3" required></textarea>
                                    </div>
                                    <button name="submit" type="submit" class="btn">submit</button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            </div>
            </div>
            <div class="vinumac_map wow bounceInUp" data-wow-duration="1s" data-wow-delay="0">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.222926461724!2d77.5145476499522!3d13.021471117261244!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae3d1d67c48377%3A0x5d0d2bbd41d37548!2sVinumac!5e0!3m2!1sen!2sin!4v1568629778154!5m2!1sen!2sin"
                    width="100%" height="500vh" frameborder="0" style="border:0;" allowfullscreen="">
                </iframe>
            </div>
        </section>
        <!-- contact us section ends here -->
    </main>

    <!-- Footer -->

    <?php include "footer.php";?>

    <!-- Footer ends -->
</body>

</html>