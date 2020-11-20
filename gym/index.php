<?php 
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <?php include("include/head.php"); ?>
    <title>GYM Website</title>
    <style>
        main {
            font-family: "Roboto", Arial, sans-serif;
        }

        main .showcase {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.8)), url(images/gym-female.jpg);
            height: 1100px;
            background-size: cover;
            background-position: center;
            border: none;
        }

        main .showcase .content button {
            text-align: center;
            margin-top: 5px;
            padding: 10px;
            color: rgba(255, 150, 51, 1);
            background: none;
            border: none;
            overflow: hidden;
            white-space: nowrap;
            font-size: 14px;
            content: "";
            transition: all 0.5s;
            width: auto;
            cursor: pointer;
        }

        main .showcase .content button::after {
            content: " >>";
            width: auto;
            transition: all 0.5s;
            position: relative;
            left: -150px;
        }

        main .showcase .content button:hover::after {
            width: auto;
            left: 0px;
        }

        .newsletter {
            left: 10%;
            margin-top: -21%;
            text-align: center;
            position: absolute;
            width: 1100px;
            background-color: rgba(255, 255, 255, 0.1);
            height: auto;
            box-shadow: 0px 0px 5px 1px rgba(255, 255, 255, 0.5);
        }

        .newsletter h1 {
            color: white;
            font-size: 30px;
            padding: 50px 40px 20px 40px;
            margin: 0px;
        }

        .newsletter form {
            margin: 10px;
        }

        .newsletter form input {
            border: 1px solid black;
            padding: 15px;
            opacity: 0.8;
            color: white;
            width: 90%;
            height: 25px;
            text-align: center;
            font-size: 20px;
            background: linear-gradient(black, black);
        }

        .newsletter form input:focus {
            border-color: none;
        }

        .newsletter form button {
            display: inline-block;
            border-radius: 4px;
            background-color: rgba(0, 160, 90, 1);
            border: none;
            color: #FFFFFF;
            text-align: center;
            font-size: 20px;
            width: 150px;
            padding: 10px;
            transition: all 0.2s;
            cursor: pointer;
            margin: 20px;
        }

        .newsletter form button:hover {
            box-shadow: 0px 0px 5px 1px rgba(0, 225, 90, 1);
            background-color: rgba(0, 225, 90, 1);
            opacity: 1;
            right: 0;
        }

        .msg {
            width: 60%;
            float: left;
            display: inline-block;
            margin-left: 250px;
            border-radius: 5px;
        }

        .message {
            height: 20px;
            padding: 0px 20px;
            font-size: 15px;
            background: none;
        }

        #close {
            float: right;
            margin: 10px 15px;
            font-size: 20px;
            padding: 2px 5px;
            cursor: pointer;
            border: none;
            background: none;
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
                <li class="active"><a href="index.php"> Home</a></li>
                <li class="serve"><a href="services.php"> Services</a></li>
                <li><a href="package.php">Packages</a></li>
                <li><a href="calculate.php"> Calculate BMI</a></li>
                <li><a href="contact.php"> Contact</a></li>
                <li><a href="about.php"> About Us</a></li>
                <li><a href="register.php"><button>Register</button></a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="showcase">
            <div class="content">
                <h1 class="heading"> Official Professional Gym Training Classes</h1>
                <p>Hello my Dear Comerades. GO GYM.</p>
                <button>Read More</button>
            </div>
        </section>

        <div class="newsletter">
            <h1>Subscribe to our news letter</h1>
            <form action="include/register.inc.php" method="post">
                <input type="email" placeholder="Enter email" name="sub-email" required><br>
                <button type="submit" name="index_sub">Subscribe</button>
            </form>

            <?php if(isset($_SESSION['indsub-error'])):
                        if(!empty($_SESSION['indsub-error']))
                        {
                            echo"<div class='msg' id='card' style='border: 1px solid rgba(255, 0, 0, 0.5);'><input type='button' value='x' id='close' style='color: red;'><p class='message' style='color: red;'>Already Subscribed!!</p></div>";
                            unset($_SESSION['indsub-error']);
                            echo"</div>";
                        }
                        endif; 
                 ?>
            <?php if(isset($_SESSION['indsub-success'])):
                        if(!empty($_SESSION['indsub-success']))
                        {
                            echo"<div class='msg' id='card' style='border: 1px solid rgba(0, 255, 0, 0.5);'><input type='button' value='x' id='close' style='color: rgba(0, 255, 0, 0.5);'><p class='message' style='color: rgba(0, 255, 0, 0.5);'>Subscribed Successfully..</p></div>";
                            unset($_SESSION['indsub-success']);
                            echo"</div>";
                        }
                        endif; 
                 ?>
        </div>
    </main>
    <?php
    include_once("include/footer.php");
    ?>

    <script type="text/javascript">
        document.getElementById("close").addEventListener("click", function() {
            document.getElementById("card").remove();
        });

    </script>
</body>

</html>
