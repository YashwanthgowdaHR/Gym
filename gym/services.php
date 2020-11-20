<!DOCTYPE html>
<html>

<head>
    <?php include_once("include/head.php"); ?>
    <title>GYM Website | Services</title>
    <style>
        .container {
            margin-top: -100px;
            padding: 10px;
            font-family: "Oswald", Arial, sans-serif;
            background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.1)), url(images/services.jpg);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            transition: 0.8s;
        }

        .container div {
            margin: 0px;
            color: white;
            padding-top: 250px;
            height: 450px;
        }

        .container ul {
            list-style: decimal;
            font-size: 20px;
            width: auto;
            text-align: center;
        }

        .container ul li {
            display: inline;
            padding-right: 50px;
        }

        .container ul li a {
            text-decoration: none;
            color: white;
            cursor: pointer;
            opacity: 0.7;
        }

        .container ul li a:hover {
            opacity: 1;
            color: rgb(255, 151, 51);
        }

        .container h1 {
            font-size: 50px;
            text-align: center;
            color: rgb(255, 151, 51);
            margin-bottom: 0px;
        }

        .container table {
            border: none;
            padding: 20px 10px;
            transition: 0.8s;
        }

        .container table tr {
            padding: 10px;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .container table tr td {
            padding: 20px;
        }

        .container table tr h2 {
            text-shadow: 0px 0px 3px rgba(255, 255, 255, 0.3);
        }

        .container table tr td p {
            word-spacing: 2px;
            letter-spacing: 0.5px;
            text-shadow: 0px 0px 3px rgba(255, 255, 255, 0.4);
        }

        .container table img {
            border: 0px 0px 0px 20px solid rgb(255, 255, 255, 0.7);
            padding: 0px;
            margin: 0px;
            border-radius: 10px;
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
                <li class="active"><a href="services.php">Services</a></li>
                <li><a href="package.php">Packages</a></li>
                <li><a href="calculate.php"> Calculate BMI</a></li>
                <li><a href="contact.php"> Contact</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="register.php"><button>Register</button></a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="container">
            <div>
                <h1>Services</h1>
                <ul>
                    <li><a href="#cardio">Cardio Center</a></li>
                    <li><a href="#strength">Strength Training</a></li>
                    <li><a href="#aero">Aerobics</a></li>
                </ul>
            </div>
            <table id="cardio">
                <tr>
                    <td>
                        <h2>Cardio Center</h2>
                        <p>Cardio is short for cardiovascular, which refers to the heart. Cardiovascular exercise is exercise that raises your heart rate and keeps it elevated for a period of time. Another name for it is aerobic exercise. The kinds of exercise that are associated with cardiovascular workouts are things like jogging, fast walking, and swimming where there is no break in the routine. Exercises that emphasize stretch and strength, like Pilates, are generally not considered cardio exercise, though Pilates can be done in a cardio way, and can certainly be combined with cardio workouts to great effect.</p>
                    </td>
                    <td><img src="images/cardio.png"></td>
                </tr>
            </table>
            <table id="strength">
                <tr>
                    <td><img src="images/strength.png"></td>
                    <td>
                        <h2>Strength Training</h2>
                        <p>A method of improving muscular strength by gradually increasing the ability to resist force through the use of free weights, machines, or the person's own body weight. Strength training sessions are designed to impose increasingly greater resistance, which in turn stimulates development of muscle strength to meet the added demand. This section is equipped with the latest machines from Larous, India, which isolate targeted muscles for more specialized training.</p>
                    </td>

                </tr>
            </table>
            <table id="aero">
                <tr>
                    <td>
                        <h2>Aerobics</h2>
                        <p>Aerobics is an effective physical exercise which is often done to music. Apart from staying power, strength, flexibility, coordination, and tact are trained. Aerobics is very popular with women who do it together in a group following an instructor or alone in front of the television. In the 1960s, Dr. Med. Kenneth H. Cooper introduced an exercise training in order to strengthen the heart and the lungs and took the first step of the "aerob" training in the United States. His published book Aerobics finally led to a gymnastic staying power-training, to Aerobics.</p>
                    </td>
                    <td><img src="images/aerobics.png"></td>
                </tr>


            </table>
        </div>
    </main>
    <?php 
        include_once("include/footer.php");
        ?>
</body>

</html>
