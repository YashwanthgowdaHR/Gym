<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <?php include_once("include/head.php"); ?>
    <title>GYM Website | Register</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900&amp;display=swap" rel="stylesheet">
    <style>
        nav li {
            padding: 10px 20px;
        }

        header {
            color: black;
        }

        header .highlight {
            color: rgba(255, 151, 51, 1);
        }

        .heading {
            color: rgba(255, 151, 51, 1);
            font-size: 40px;
        }


        nav ul li a {
            color: black;
            text-decoration: none;
            padding: 10px 10px;
            font-family: "Roboto", sans-serif;
            font-size: 15px;
            cursor: pointer;
            border: 1px solid orange;
            transition: all 0.5s;
        }

        nav ul li a:hover {
            color: white;
            background: rgba(255, 151, 51, 1);
        }

        main {
            color: black;
            margin: 20px;
            height: 430px;
        }


        .signup-form {
            width: 380px;
            font-family: "Lato", sans-serif;
            padding: 10px;
            position: absolute;
            top: 10%;
            right: 8%;
            transform: translate(0%, 25%);
        }

        .signup-form .form-group label {
            font-weight: 500;
        }


        .signup-form .form-group {
            padding-bottom: 5px;
        }

        .signup-form input[type='text'],
        input[type='email'],
        input[type='date'] {
            width: 90%;
            height: 30px;
            padding: 5px 20px;
            margin-top: 5px;
            margin-bottom: 10px;
            font-family: arial;
            font-size: 16px;
            color: rgba(0, 0, 0, 0.5);
            border: 1px solid rgba(0, 0, 0, 0.3);
            border-radius: 20px;
            line-height: 40px;
        }

        .form-group input[type='checkbox'] {
            margin: 5px;
            width: 15px;
            height: 15px;
            margin-left: 20px;
        }

        .form-group p {
            margin: 0px;
            font-size: 16px;
            color: orange;
        }

        .signup-form button {
            margin: 10 auto;
            width: 100%;
            height: 40px;
            border-radius: 20px;
            background-color: cadetblue;
            font-family: arial;
            font-size: 16px;
            font-weight: bold;
            color: white;
            border: 1px solid cadetblue;
            cursor: pointer;
        }

        .signup-form button:hover {
            transform-style: preserve-3d 0.5s;
            transition-duration: 0.5s;
            background-color: white;
            color: cadetblue;
        }

        .newsletter {
            color: black;
            font-family: "Lato", sans-serif;
            height: 400px;
            margin-top: 120px;
            margin-left: 20px;
        }

        .newsletter h1 {
            font-size: 30px;
            margin: 10px;
            padding-left: 100px;
        }

        .newsletter form {
            margin: 10px;
        }

        .newsletter form input {
            font-family: "Lato", sans-serif;
            border: 1px solid rgba(0, 0, 0, 0.3);
            padding: 10px;
            opacity: 0.9;
            width: 600px;
            height: 25px;
            border-radius: 20px;
            margin-top: 20px;
            font-size: 20px;
            box-shadow: 0px 0px 5px 1px white;
        }

        .newsletter form button {
            display: inline-block;
            border-radius: 20px;
            background-color: rgba(0, 160, 90, 1);
            border: none;
            color: #FFFFFF;
            font-size: 20px;
            width: 150px;
            padding: 10px;
            transition: all 0.2s;
            cursor: pointer;
            margin-top: 15px;
            margin-left: 200px;
        }

        .newsletter form button:hover {
            box-shadow: 0px 0px 5px 1px rgba(0, 225, 90, 1);
            background-color: rgba(0, 225, 90, 1);
            opacity: 1;
            right: 0;
        }

        .msg {
            width: 30%;
            float: left;
            display: inline-block;
            margin-left: 100px;
            border-radius: 5px;
        }

        .message {
            padding: 0px 20px;
            font-size: 15px;
            font-weight: bold;
            background: none;
        }

        .alert,
        .success {
            margin: 10px;
            height: auto;
            border-radius: 5px;
            font-size: 15px;
            background: none;
        }

        .reg-message {
            font-weight: bold;
            padding: 0px 10px;
        }

        #close {
            float: right;
            width: 50px;
            margin: 0px;
            font-size: 20px;
            padding: 10px;
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
                <li><a href="index.php">Home</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="signup-form" id="signup">
            <form class="modal-content" method="post" action="include/register.inc.php">
                <div class="form-group">
                    <input type="text" class="form-control" name="first" placeholder="First Name" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="last" placeholder="Last Name" required>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Email-address" required>
                </div>
                <div class="form-group">
                    <label for="doj">Date Of Joining:</label>
                    <input type="date" class="form-control" name="doj" min="2019-11-18" required>
                </div>
                <div class="form-group" style="display:inline-flex">
                    <input type="checkbox" class="form-control" name="sub">
                    <p>Subscribe</p>
                </div>
                <?php if(isset($_SESSION['register-error'])):
                        if(!empty($_SESSION['register-error']))
                        {
                            echo"<div class='alert' id='reg_card' style='border: 1px solid rgba(255, 0, 0, 0.5);'><input type='button' value='x' id='close' style='color: rgba(225, 0, 0, 0.8);' onclick='closereg();'>";
                            $errors = $_SESSION['register-error'];
                            foreach($errors as $error ): 
                 ?>
                <p class='reg-message' style='color: red;'><?php echo $error."<br>" ?></p>
                <?php 
                     endforeach;
                            unset($_SESSION['register-error']);
                            echo"</div>";
                        }
                        endif; 
                 ?>
                <?php if(isset($_SESSION['register-success'])):
                        if(!empty($_SESSION['register-success']))
                        {
                            echo"<div class='success' id='reg_card' style='border: 1px solid rgba(0, 180, 0, 0.7);'><input type='button' value='x' id='close' style='color:rgba(0,220,0,0.8);' onclick='closereg();'>";
                            $errors = $_SESSION['register-success'];
                            foreach($errors as $error ): 
                 ?>
                <p class='reg-message' style='color: rgba(0, 220, 0, 0.8);'><?php echo $error."<br>" ?></p>
                <?php 
                     endforeach;
                            unset($_SESSION['register-success']);
                            echo"</div>";
                        }
                        endif; 
                 ?>
                <button type="submit" name="register_btn">Register</button>
            </form>
        </div>
        <section class="newsletter">
            <div class="content" id="content">
                <h1><span class="heading">Subscribe</span> to our news letter</h1>
                <form action="include/register.inc.php" method="post">
                    <input type="email" placeholder="Enter email" name="sub-email" required><br>
                    <button type="submit" name="register_sub">Subscribe</button>
                </form>
                <?php if(isset($_SESSION['sub-error'])):
                        if(!empty($_SESSION['sub-error']))
                        {
                            echo"<div class='msg' id='card' style='border: 1px solid rgba(255, 0, 0, 0.5);'><input type='button' value='x' id='close' style='color: rgba(225, 0, 0, 0.8)'; onclick='closesub();'><p class='message' style='color: red;'>Already Subscribed!!</p></div>";
                            unset($_SESSION['sub-error']);
                            echo"</div>";
                        }
                        endif; 
                 ?>
                <?php if(isset($_SESSION['sub-success'])):
                        if(!empty($_SESSION['sub-success']))
                        {
                            echo"<div class='msg' id='card' style='border: 1px solid rgba(0, 180, 0, 0.7);'><input type='button' value='x' id='close' style='color:rgba(0,220,0,0.8);' onclick='closesub();'><p class='message' style='color: rgba(0, 220, 0, 0.8);'>Subscribed Successfully..</p></div>";
                            unset($_SESSION['sub-success']);
                            echo"</div>";
                        }
                        endif; 
                 ?>
            </div>
        </section>
    </main>
    <?php
     include_once("include/footer.php");
     ?>

    <script type="text/javascript">
        function closesub() {
            document.getElementById('card').remove();
        }

        function closereg() {
            document.getElementById('reg_card').remove();
        }

    </script>
</body>

</html>
