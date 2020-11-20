<!DOCTYPE html>
<html>

<head>
    <?php
    include_once("include/head.php");
    ?>
    <title>GYM Website | About</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900&amp;display=swap" rel="stylesheet">
    <style>
        body {
            box-sizing: border-box;
            font-family: "Lato", Arial;
        }

        .showcase {
            background-image: none;
            margin-top: -100px;
        }

        .content {
            padding: 0px;
        }

        .content div {
            background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.9)), url(images/aboutpage.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            padding: 320px 0px 0px 30px;
            height: 380px;
            margin: 0px;
        }

        .heading {
            font-size: 60px;
            margin: 0px;
            color: rgb(255, 151, 51);
            margin-top: 100px;
            padding-bottom: 0px;
        }

        .content .des {
            font-size: 20px;
            width: 700px;
            letter-spacing: 0.3px;
            word-spacing: 2px;
        }

        aside {
            background-image: linear-gradient(rgba(200, 200, 200, 0.1), rgba(220, 220, 220, 0.8)), url(images/objective.jpg);
            color: black;
            text-shadow: 0px 0px 1px rgba(0, 0, 0, 0.8);
            background-size: cover;
            padding: 50px 0px 0px 100px;
            height: 650px;
            margin: 0px;
        }

        aside p {
            margin-left: 20px;
            word-spacing: 5px;
            font-size: 18px;
            width: 90%;
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
                <li><a href="package.php">Packages</a></li>
                <li><a href="calculate.php"> Calculate BMI</a></li>
                <li><a href="contact.php"> Contact</a></li>
                <li class="active"><a href="about.php"> About Us</a></li>
                <li><a href="register.php"><button>Register</button></a></li>
            </ul>
        </nav>
    </header>
    <section class="showcase">
        <div class="content">
            <div>
                <h1 class="heading"> About us</h1>
                <p class="des">Acme Gym feature progressive programs with world class fitness equipment, trainers and nutrition counselors to help you your fitness further. We have the widest range of group fitness classes such Yoga, Aerobics, Zumba, Les Mills favorites and much more.</p>
            </div>
            <aside>
                <h2>Our Objectives</h2>
                <p>The main objective of ‘About Fitness’ is to create awareness and to Co-ordinate the performance of body, mind and soul in a befitting manner, we are the winner, we don’t do different thing, we do things differently. Our goal is to be sensitive to our members needs and to fulfill fitness requirements. We ensure physical fitness and robust health to customers as we counsel, we assist, we motivate them to lead a joyous and meaningful results are bound to be positive as we put in our 200% to fulfill your needs.</p>
                <h2>Our vision</h2>

                <p>Our vision is to maintain the standers of our fitness centre for our member’s well being, our members will have sound body and it will be maintained well when complimented by a health foods bar to nourish body’s daily fiber vitamin’s requirements.</p>

                <h2 style="margin-top:50px;">Facilities</h2>
                <p> » Cardio Center<br>
                    » Strength Training<br>
                    » Free Weight Area<br>
                    » Aerobics<br>
                    » Customized Schedule Cards<br>
                    » Diet Counseling<br>
                    » Spa (Shower Room)<br>
                    » Locker Room<br>
                    » Health Bar ( Serving Protein Shakes, Fat Burners & other Nutrition )<br>
                </p>
            </aside>
        </div>
    </section>
    <?php
    include_once("include/footer.php");
    ?>
</body>

</html>
