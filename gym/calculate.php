<!DOCTYPE html>
<html>

<head>
    <?php include_once("include/head.php"); ?>
    <title>GYM Website | CalculateBMI</title>
    <style>
        main .showcase {
            background-image: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.01)), url(images/image1.jpeg);
            background-size: cover;
            background-position: center;
            border: none;
            height: 700px;
            margin-top: -100px;
        }

        main .showcase .content {
            margin-left: 20px;
            width: auto;
        }

        main .showcase .content .heading {
            font-size: 70px;
            color: rgb(255, 151, 51);
            padding-top: 200px;
            text-align: center;
            margin: 0px;
        }

        main .showcase .content p {
            font-size: 16px;
            padding-top: 10px;
            text-align: center;
            margin: 0px;
        }

        .box form {
            height: 400px;
            margin-top: 150px;
            margin-left: 30px;
            font-size: 19px;
            padding: 10px;
        }

        .box .bmiform {
            text-align: left;
            position: absolute;
            left: 10px;
        }

        .box .resform {
            text-align: end;
            position: absolute;
            right: 80px;
        }

        .box form input[type='number'] {
            margin: 10px;
            padding: 5px;
            border: none;
            width: 200px;
            background: none;
            border-bottom: 1px solid white;
            color: white;
        }

        .box .resform input[type='text'] {
            margin: 10px;
            padding: 5px;
            font-size: 18px;
            border: none;
            width: 300px;
            color: white;
            background: none;
        }

        .box form input[type="button"],
        .box form input[type="reset"] {
            margin: 10px;
            font-size: 16px;
            padding: 10px;
            color: black;
            font-family: Arial, sans-serif;
            background-color: rgb(255, 153, 51);
            border: 1px solid rgb(255, 151, 51);
            transition: 0.5s;
        }

        .box form input[type="button"]:hover,
        .box form input[type="reset"]:hover {
            background: none;
            cursor: pointer;
            color: orange;
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
                <li class="active"><a href="calculate.php"> Calculate BMI</a></li>
                <li><a href="contact.php"> Contact</a></li>
                <li><a href="about.php"> About Us</a></li>
                <li><a href="register.php"><button>Register</button></a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="showcase">
            <div class="content">
                <h1 class="heading">Calculate BMI</h1>
                <p>Push your fitness further with our mix of facilities and we'll support you with advice on new and better ways to train.</p>
            </div>
            <div class="box">
                <form name="bmiForm" class="bmiform">
                    Your Weight(kg): <input type="number" name="weight"><br />
                    Your Height(cm): <input type="number" name="height"><br />
                    <input type="button" value="Calculate BMI" onClick="calculateBmi()">
                    <input type="reset" value="Reset" id="res" />
                </form>
                <form name="resform" class="resform">
                    Your BMI: <input type="text" name="bmi" disabled><br />
                    This Means: <input type="text" name="meaning" disabled><br />
                </form>
            </div>
        </section>
    </main>
    <script language="JavaScript">
        document.getElementById("res").addEventListener("click", function() {
            document.resform.bmi.value = "";
            document.resform.meaning.value = "";
        });

        function calculateBmi() {
            var weight = document.bmiForm.weight.value;
            var height = document.bmiForm.height.value;
            if (weight > 0 && height > 0) {
                var finalBmi = weight / (height / 100 * height / 100)
                document.resform.bmi.value = finalBmi
                if (finalBmi < 18.5) {
                    document.resform.meaning.value = "That you are too thin.";
                }
                if (finalBmi > 18.5 && finalBmi < 25) {
                    document.resform.meaning.value = "That you are healthy.";
                }
                if (finalBmi > 25) {
                    document.resform.meaning.value = "That you have overweight.";
                }
            } else {
                alert("Please Fill in everything correctly");
            }
        }

    </script>
    <?php 
    include_once("include/footer.php");
    ?>
</body>

</html>
