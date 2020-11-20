<!DOCTYPE html>
<html>

<head>
    <?php
    include_once("include/head.php");
    ?>
    <title>GYM Website | Packages</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900&amp;display=swap" rel="stylesheet">
    <style>
        body {
            font-family: "Lato", Arial;
        }

        .showcase {
            background-image: none;
        }

        .content {
            padding: 0px;
        }

        .content .head {
            background-image: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.8)),
                url(images/package.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            padding: 300px 0px 0px 30px;
            height: 390px;
            margin: 0px;
            margin-top: -100px;
        }

        .content .heading1 {
            font-size: 60px;
            margin: 0px;
            color: rgba(255, 151, 51, 1);
            margin-top: 100px;
            padding-bottom: 0px;
        }

        .content .des {
            font-size: 20px;
            width: 900px;
            letter-spacing: 0.3px;
            word-spacing: 2px;
        }

        .outer {
            background: linear-gradient(to right, #111, #333);
            font-family: 'Roboto', sans-serif;
            margin: 0px;
            padding: 5px;
        }

        .inner {
            color: white;
            height: auto;
            padding: 20px;
        }

        .content .heading2 {
            font-size: 40px;
            margin: 0px;
            padding-left: 40px;
            padding-top: 50px;
            padding-bottom: 0px;
            margin-bottom: 20px;
        }

        .in-sec {
            color: white;
            padding: 10px;
            margin: 10px 10px 10px 50px;
            height: auto;
        }

        .in-sec p {
            margin-left: 20px;
            word-spacing: 5px;
            width: 90%;
        }

        table {
            width: 80%;
            padding: 20px;
            margin-left: 50px;
        }

        thead th {
            margin: 0px;
            padding: 10px;
            background-color: rgba(255, 255, 255, 0.3);
        }

        table tbody {
            text-align: center;
        }

        table tbody tr td {
            padding: 10px;
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
                <li class="serve"><a href="services.php"> Services</a></li>
                <li class="active"><a href="package.php">Packages</a></li>
                <li><a href="calculate.php"> Calculate BMI</a></li>
                <li><a href="contact.php"> Contact</a></li>
                <li><a href="about.php"> About Us</a></li>
                <li><a href="register.php"><button>Register</button></a></li>
            </ul>
        </nav>
    </header>
    <div class="content">
        <div class="head">
            <h1 class="heading1">Fitness-Packages</h1>
            <p class="des"><b>About Fitness</b> is having highly qualified team of trainers, they are widely acknowledged as being among the industry's finest and take enormous pride in assisting members wherever they are needed. All are fully accredited on the Exercise Professionals Register and are, of course, insured to deliver some of the most advanced training. They can focus clearly on your goals and pointedly be on hand to ensure you reach them.</p>
        </div>
        <div class="outer">
            <div class="inner">
                <p class="heading2"><strong>About Fitness - Packages</strong></p>

                <table>
                    <thead>
                        <tr>
                            <th>Duration</th>
                            <th>General</th>
                            <th>Couple</th>
                            <th>Happy Hours</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Monthly</strong></td>
                            <td>1500 </td>
                            <td>2500 </td>
                            <td>1000 </td>
                        </tr>
                        <tr>
                            <td><strong>Quarterly</strong></td>
                            <td>3500</td>
                            <td>6500</td>
                            <td>2500</td>
                        </tr>
                        <tr>
                            <td><strong>Half-Yearly</strong></td>
                            <td>6500</td>
                            <td>11000</td>
                            <td>4500</td>
                        </tr>
                        <tr>
                            <td><strong>Yearly</strong></td>
                            <td>10000</td>
                            <td>18000</td>
                            <td>7500</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <section class="in-sec">
                <h3>Note:</h3>
                <p>» All Rates are in Indian Rs.<br>
                    » General Rates are applicable for Per Person Bases.<br>
                    » Couple Rates are applicable for Husband & Wife only.<br>
                    » Happy hours Rates are applicable between 11:00 am to 5:00 pm only.</p>
            </section>
        </div>
    </div>
    <?php
    include_once("include/footer.php");
    ?>
</body>

</html>
