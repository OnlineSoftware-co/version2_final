<?php
if (isset($_GET['product']))
    $id = $_GET['product'];
?>
<!DOCTYPE html>
<html lang="en">
<!-- test -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Awesome fonts-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <title>Online Software</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/main.css">
    <link rel="stylesheet" href="../../assets/css/hamburger.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="../../assets/css/enquiry.css">
    <link rel="stylesheet" href="../../assets/css/footer.css">

    <link rel="stylesheet" href="./style.css">

</head>

<body>
    <div id="main" class="prel h100">

        <div id="prompt" class="prompt pfx w100 h100 dsp-none">
            <div class="prompt-container pabs">

                <div class="pabs t0 cancel lhinit cp dsp-none">&#x292B;</div>
                <div id="promptMessage" class="prompt-message text-center p12">

                </div>
            </div>
        </div>
        <!-- Navbar -->
        <nav class="pfx fl">
            <div class="toggle pabs" id="toggle">
                <div class="burger hamburger" id="burger">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </div>
            </div>

            <div class="m-logo lhinit dsp-none">Online Software</div>
            <div class="content prel fl flc flsb h100 w100">
                <div class="logo fl flc"></div>
                <div class="cnt fl flc">
                <a class="navEl fl flc cp" href="../../index.html#home" >
                        Home
                    </a>
                    <a class="navEl fl flc cp about" href="../../pages/about/index.html" >
                        About
                    </a>
                    <a class="navEl fl flc cp " href="../../pages/services/index.html" >
                        Services
                    </a>
                   
                    <a class="navEl fl flc cp projects" href="../products/index.php"  >
                        Products
                    </a>
                    <a class="navEl fl flc cp" href="../../index.html#contact" data-pos="3">
                        Contact Us
                    </a>
                    <a class="navEl fl flc cp contact" id="enquire_btn" href="../../pages/enquiry/index.php"  >
                        Enquiry
                    </a>
                </div>
                <div id="india" class="fl flc cp abc">
                    <img src="../../assets/images/svg/india.svg" alt="ABC Infomedia">
                </div>
            </div>
        </nav>
        <!-- Navbar -->

        <!-- main -->
        <main>
            <section id="enquiry" class="main prel fl flc p12">
                <div class="container fl flc">

                    <div class="fl flc fldcl flsb w100 h100">
                        <div class="title-container fl flc p12 fldcl flas w100 lhinit">
                            <div class="enquiry-title anim-scroll">
                                Lets talk about everything!</div>
                            <div>Hate forms? Send us an <a href="mailto:mdtechs.contact@gmail.com">email</a> instead.
                            </div>
                        </div>
                        <div class="fl flc p12"><img src="../../assets/images/svg/undraw_contact_us.svg" alt="" width="100%"></div>
                    </div>

                    <div class="form-container w100 fl flc">

                        <div class="f-login fl fldcl w100">

                            <?php

                            $str = file_get_contents('../../assets/json/products.json');
                            $json = json_decode($str, true);

                            ?>
                            <h5><?php if (isset($_GET['product'])) echo 'Enquiry For: <b>' . print_r($json[$id]['name'], true) . '</b>'; ?></h5>
                            <label for="email">Name<sup style="color:red">*</sup></label>
                            <input class="inp" type="text" name="name" id="name" placeholder="Enter Your name..." required>

                            <label for="email">Email<sup style="color:red">*</sup></label>
                            <input class="inp" type="text" name="email" id="email" placeholder="Enter Your Email..." required>


                            <label for="Message">Message<sup style="color:red">*</sup></label>
                            <textarea class="inp" name="message" id="message" placeholder="Enter Your Message" required></textarea>


                            <div class="fl w100 p12" style="color:var(--black)"><input disabled class="w100" id="captcha" type="text" />
                            <input type="button" id="btnrefresh" value="Refresh" onclick="DrawCaptcha();" /></div>
                            
                            <p>Enter Recaptcha
                                <input class="w100" type="text" id="captchaInput" />
                            </p>

                            <button type="submit" id="submit">Submit</button>
                        </div>

                    </div>
                </div>
            </section>
        </main>

        <!-- main -->


        <!-- footer -->
        <footer>

            <div class="column ">
                <a class="footer_title ">Online Software</a>
                <a>
                    A one-stop solution for all your information technology needs and now, we are trying to expand
                    ourselves and endeavor our presence felt across the whole world.
                </a>
                <a href="https://www.facebook.com/abcinfomediapvtltd/" class="icon " title="Facebook " class="fl flc "><i class="fab fa-facebook-f "></i></a>
                <a href="https://www.linkedin.com/in/abcinfomedia/" class="icon " title="Instagram " class="fl flc "><i class="fab fa-linkedin"></i></a>
                <a href="https://twitter.com/abc_infomedia" class="icon " title="Twitter " class="fl flc "><i class="fab fa-twitter "></i></a>
                
            </div>
            <div class="column">
                <div class="gap">
                <a class="footer_title ">Other Links</a>
                <!-- <a href="# " onclick="alert( 'Currently unavailable') ">Privacy Policy</a> -->
                <a href="../.././pages/terms/index.html">Terms and Conditions</a>

                <a href="../.././pages/enquiry/index.php">Contact Us</a>
                <a href="../.././pages/developers/developers.html">Developers</a></div>
            </div>
            <div class="column">
                
                <a class="footer_title ">Short Links</a>
                <a href="../.././pages/services/index.html">Our Services</a>
                <a href="../.././pages/products/index.php">Our Products</a>
                <a href="../.././pages/about/index.html">About Us</a> 
            </div>

            <div class="column">
                
                <a class="footer_title ">Latest Products</a>
                <a href="../.././pages/product-preview/Multi-Referral-Management-Software.php " title="Multi Referral Management Software"><img
                        src="../.././assets/images/img/multireferral1.png " width="50px " height="50px "></a>
                <a href="../.././pages/product-preview/Stock-Management-and-Sales-Software-for-Interior-Decorators.php" title="Stock Management software"><img
                        src="../.././assets/images/img/footer2.png " width="50px " height="50px "></a>
                <a href="../.././pages/product-preview/Complete-end-to-end-software-for-Chit-Funds-with-App.php" title="Chit fund software"><img
                        src="../.././assets/images/img/nidhi1.png" width="50px " height="50px "></a>
                <a href="../.././pages/product-preview/Customized-software-for-textile-processing-units-with-App.php" title="Textile Processing software"><img
                        src="../.././assets/images/img/footer4.png" width="50px " height="50px "></a>

            </div>
            <div class="column ">
                <a class="footer_title ">Get In Touch</a>
                <a title="Address "><i class="fas fa-map-marker "></i> No.32, Vinayagar Kovil Street, Karungalpalayam,
                    Erode - 638003, Tamil Nadu, India</a>
                <a href="mailto:support@onlinesoftware.co " title="Email "><i class="fas fa-envelope "></i>
                    support@onlinesoftware.co</a>
                <a href="tel:+919790030919 " title="Contact "><i class="fas fa-phone-alt "></i> +91-97900-30919</a>
            </div>

            <div class="sub-footer w100 text-center ">
                © CopyRights
                <script>
                    document.write(new Date().getFullYear());
                </script> ONLINE SOFTWARE | All rights reserved
            </div>
        </footer>
        <!-- footer -->

    </div>
    <script src="../../index.js"></script>
    <script src="../../anim.js"></script>


    <!-- Bootstrap JS Requirements -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <script>
        var add, a, b;
        DrawCaptcha();
        //Created / Generates the captcha function    
        function DrawCaptcha() {
            a = Math.ceil(Math.random() * 10);
            b = Math.ceil(Math.random() * 10);
            var code = a + '   +   ' + b;
            add = a + b;
            document.getElementById("captcha").value = code
        }
    </script>

    <script src="../../assets/js/jquery.js"></script>
    <script defer="defer" src="./index.js"></script>


</body>

</html>