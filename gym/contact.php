<!DOCTYPE html>
<html>

<head>
    <?php include_once("include/head.php"); ?>
    <title>GYM Website | Contact</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900&amp;display=swap" rel="stylesheet">
    <style>
        main {
            background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.4)), url(images/contact.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            padding: 10px;
            margin-top: -100px;
        }

        main h1 {
            color: rgb(255, 151, 51);
            height: auto;
            text-align: center;
            font-size: 60px;
            margin-top: 100px;
        }

        aside {
            display: inline-block;
            height: 500px;
            box-sizing: border-box;
        }

        .contact-section {
            font-family: "Lato", sans-serif;
            margin-left: 150px;
        }

        .form-section {
            position: absolute;
            right: 20px;
            width: 45%;
        }

        .details {
            padding: 0px;
            margin: 0px;
            color: white;
        }

        .details h2 {
            font-size: 25px;
            margin: 0px 0px 5px 0px;
        }

        .details table {
            font-family: "Lato", Arial, sans-serif;
            color: rgba(0, 0, 0, 0.7);
            font-size: 15px;
        }

        table .fa {
            padding: 10px;
            width: 25px;
            border-radius: 50%;
            font-size: 20px;
            height: 25px;
            text-align: center;
            text-decoration: none;
            color: rgba(255, 151, 51, 1);
        }

        table a {
            font-family: "Lato", Arial, sans-serif;
            text-decoration: none;
        }

        table h3 {
            margin: 0px;
            margin-left: 5px;
            color: white;
        }

        .form-section input[type="text"],
        textarea {
            border: 1px solid rgba(0, 0, 0, 0.2);
            width: 80%;
            padding: 10px;
            margin-bottom: 18px;
            font-size: 18px;
            border-radius: 5px;
            font-family: "Lato", Arial, sans-serif;
        }

        .form-section input[type="submit"] {
            width: 85%;
            padding: 10px;
            font-size: 18px;
            font-weight: bold;
            border-radius: 5px;
            cursor: pointer;
            background-color: rgb(255, 151, 51);
            border: 1px solid rgb(255, 153, 50);
            transition: 0.4s;
            color: white;
        }

        .form-section input[type="submit"]:hover {
            background: none;
            color: rgb(255, 151, 51);
        }

    </style>
</head>

<body>
    <header>
        <div class="branding">
            <h2><span class="highlight">ACME</span> Gym</h2>
        </div>
        <nav>
            <ul>
                <li><a href="index.php"> Home</a></li>
                <li><a href="services.php"> Services</a></li>
                <li><a href="package.php"> Packages</a></li>
                <li><a href="calculate.php"> Calculate BMI</a></li>
                <li class="active"><a href="contact.php"> Contact</a></li>
                <li><a href="about.php"> About Us</a></li>
                <li><a href="register.php"><button>Register</button></a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>Contact</h1>
        <aside class="contact-section">
            <div class="details">
                <h2>Yashwanthgowda H R</h2>
                <table>
                    <tr>
                        <td><i class="fa fa-map-marker"></i></td>
                        <td>
                            <h3>Chamarajpet, Bengaluru</h3>
                        </td>
                    </tr>
                    <tr>
                        <td><i class="fa fa-phone"></i></td>
                        <td>
                            <a href="tel://8310868162">
                                <h3>+91 8310868162</h3>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td><i class="fa fa-envelope"></i></td>
                        <td>
                            <a href="mailto:yashumanasvi@gmail.com">
                                <h3>yashumanasvi@gmail.com</h3>
                            </a>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="details">
                <h2 style="margin-top:30px;">Sanjay T J</h2>
                <table>
                    <tr>
                        <td><i class="fa fa-map-marker"></i></td>
                        <td>
                            <h3>R.R, Bengaluru</h3>
                        </td>
                    </tr>
                    <tr>
                        <td><i class="fa fa-phone"></i></td>
                        <td>
                            <a href="tel://8310868162">
                                <h3>+91 9033633709</h3>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td><i class="fa fa-envelope"></i></td>
                        <td>
                            <a href="mailto:yashumanasvi@gmail.com">
                                <h3>sanjaytj@gmail.com</h3>
                            </a>
                        </td>
                    </tr>
                </table>
            </div>
        </aside>
        <aside class="form-section">
            <div class="contact-form">
                <form action="#">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Send Message">
                    </div>
                </form>
            </div>
        </aside>
    </main>
    <?php
    include_once("include/footer.php");
    ?>
</body>

</html>
