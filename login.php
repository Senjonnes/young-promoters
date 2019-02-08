<?php

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Young Promoters Nigeria Limited | Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A coorperative group website">
    <meta name="author" content="Odeyemi Oluwaseun">
    <meta name="keywords" content="YPN, coorperative, contribution, loan and payment">
    <link rel="stylesheet" type="text/css" media="screen" href="css/index.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
    <section id="company-logo">
        <div class="row">
            <div class="col-md-4 company-logo">
                <a class="navbar-brand" href="#top"><img src="img/ypl.png"></a>
            </div>
        </div>
    </section>
    <!-- Get in Touch -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Get In Touch</h2>
                    <form class="contact-form">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" placeholder="Phone Number">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email Id">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="4" placeholder="Your Message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" style="border-radius:0!important;">SEND MESSAGE</button>
                    </form>
                </div>
                <div class="col-md-4" id="log-in" style="margin-left:auto; width:100%;">
                    <h2>LOGIN</h2>
                    <form class="form-container">
                        <div class="form-group log-in">
                            <label for="username" class="input-name">Username</label>
                            <input type="text" id="username" class="form-control" style="padding-left: 40px;" placeholder="Username" value="oluwaseun">
                            <i class="fa fa-user fa-fw"></i>
                        </div>
                        <div class="form-group log-in">
                            <label for="password" class="input-name">Password</label>
                            <input type="password" id="password" class="form-control" style="padding-left: 40px;" placeholder="Password" value="oluwaseun">
                            <i class="fa fa-lock fa-fw"></i>
                        </div>
                        <input id="login" type="button" name="submit" class="btn btn-primary btn-block" style="border-radius:0!important;" value="LOGIN &#10144;">
                        <div class="buttomText">
                            <label class="forgotPassword" for="forgotPassword"><a href="change-password.php"> Forgot your password ?</a></label>
                        </div>
                        <div class="row">
                            <div class="col"><hr class="border"></div>
                            <div class="col-auto">OR</div>
                            <div class="col"><hr class="border"></div>
                        </div>
                        <div class="click">
                            <label for="button">Click</label>
                            <a href="create-account.php">here</a>
                            <label for="button">to create an account</label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer id="address">
        <div class="container">
            <div class="row">
                <div class="col-md-4 contact-info text-left" style="padding:10px;">
                    <h6><span>OUR SERVICE</span></h6>
                    <ul class="items">
                        <li><i class="fa fa-check-circle"></i>Own a secured savings account</li>
                        <li><i class="fa fa-check-circle"></i>Get Loan</li>
                        <li><i class="fa fa-check-circle"></i>And many more</li>
                    </ul>
                </div>
                <div class="col-md-4 contact-info text-center" style="padding:10px;">
                    <h6 style="margin:auto; padding-bottom:10px;"><span>GET SOCIAL</span></h6>
                    <p>Follow us on any of our social media to get updates and read many amazing feeds</p>
                    <div class="follow">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                    </div>
                </div>
                <div class="col-md-4 contact-info text-right" style="padding:10px;">
                    <h6 style="margin:auto;"><span>CONTACT US</span></h6>
                    <div class="items">
                        <div class="follow"><b>Address: </b><i class="fa fa-map-marker"></i> XYZ Road,
                        Bangalore, IN</div>
                        <div class="follow"><b>Phone: </b><i class="fa fa-phone"></i> +234 7039347005</div>
                        <div class="follow"><b>Email: </b><i class="fa fa-envelope-o"></i> senjonnes@gmail.com</div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="js/main.js"></script>
    <script>
        $(document).ready(function() {

            var docHeight = $(window).outerHeight();
            var footerHeight = $('#address').height();
            var footerTop = $('#address').position().top + footerHeight;

            if (footerTop < docHeight)
                $('#address').css('margin-top', 10+ (docHeight - footerTop) + 'px');
        });
    </script>
</body>
</html>