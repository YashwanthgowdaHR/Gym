<?php
 session_start();

if(isset($_POST['register_btn'])){
    register();
}


if(isset($_POST['register_sub'])){
    regsubscribe();
}

if(isset($_POST['index_sub'])){
    indsubscribe();
}


function register()
{
$con = mysqli_connect('localhost','root','','gym');
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
    //for security purpose
     $_SESSION['register-error']='';
    
    //for security purpose
    $first = mysqli_real_escape_string($con, $_POST['first']);
    $last = mysqli_real_escape_string($con, $_POST['last']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $sub = $_POST['sub'];
    $doj = $_POST['doj'];
    
    //Error handlers
    //Check for empty fields
    if(empty($first) || empty($last) || empty($email) || empty($doj)){
        $_SESSION['register-error'] = array('One of the field is empty');
        header("Location: ../register.php?register=empty");
        exit();
    }else{
        //Check if input characters are valid
        if(!(preg_match("/^[a-zA-Z]*$/",$first)) || !(preg_match("/^[a-zA-Z]*$/",$last))){
            $_SESSION['register-error'] = array('Inavlid Name');
            header("Location: ../register.php?register=invalid");
            exit();
        }else{
            //Ckeck if email is valid
            if(!(filter_var($email, FILTER_VALIDATE_EMAIL))){
                $_SESSION['register-error'] = array('Inavlid E-mail');
                header("Location: ../register.php?register=invalidemail");
                exit();
            }else{
                $sql = "select * from users where email='$email'";
                $result = mysqli_query($con,$sql);
                if(mysqli_num_rows($result) > 0){
                    $_SESSION['register-error'] = array('Customer Exists!');
                    header("Location: ../register.php?register=usertaken");
                    exit();
                }else{
                    //Hashing password
                    //Insert the user into the database
                    if(isset($sub)){
                        $sql = "insert into users VALUES ('$first','$last','$email','$doj');";
                        mysqli_query($con,$sql);
                        $sql1 = "insert into subscribers values('$email');";
                        mysqli_query($con,$sql1);
                        $_SESSION['register-success'] = array('Registered and Subscribe Successfully');
                    }else{
                        $sql = "insert into users VALUES ('$first','$last','$email','$doj');";
                        mysqli_query($con,$sql);
                        $_SESSION['register-success'] = array('Registered Successfully');
                    }
                    header("Location: ../register.php?register=success");
                    exit();
                }
            }
        }
    }
}
    
}

function regsubscribe(){
$con = mysqli_connect('localhost','root','','gym');
    
            if ($_SERVER["REQUEST_METHOD"] == "POST")
            {
                
                $_SESSION['sub-error']='';
                $_SESSION['sub-success']='';
                $email = mysqli_real_escape_string($con, $_POST['sub-email']);;
                if(!empty($email))
                {
                    $sql = "select * from subscribers where email = '$email'";
                    $result = mysqli_query($con,$sql);
                    if(mysqli_num_rows($result) > 0){
                        $_SESSION['sub-error'] = "Already Subscribed!!";
                        echo "<div class='msgalert' id='card'><input type='button' value='x' id='close'><p class='messagealert'>Already Subscribed!!</p></div>";
                        header("Location: ../register.php?subscriptionfail");
                            exit();
                    }
                    else
                    {
                        $_SESSION['sub-success'] = "Subscribed Successfully..";
                        $sql = "insert into subscribers values('$email')";
                        mysqli_query($con,$sql);
                        echo "<div class='msgsuccess' id='card'><input type='button' value='x' id='close'><p class='messagesuccess'>Subscribed Successfully..</p></div>";
                        header("Location: ../register.php?subscriptionsuccess");
                            exit();
                    }
                }
            }
            mysqli_close($con);
}


function indsubscribe(){
    
$con = mysqli_connect('localhost','root','','gym');
            if ($_SERVER["REQUEST_METHOD"] == "POST")
            {
                
                $_SESSION['indsub-error']='';
                $_SESSION['indsub-success']='';
                $email = mysqli_real_escape_string($con, $_POST['sub-email']);
                if(!empty($email))
                {
                    $sql = "select * from subscribers where email = '$email'";
                    $result = mysqli_query($con,$sql);
                    if(mysqli_num_rows($result) > 0){
                        $_SESSION['indsub-error'] = "Already Subscribed!!";
                        echo "<div class='msgalert' id='card'><input type='button' value='x' id='close'><p class='messagealert'>Already Subscribed!!</p></div>";
                        header("Location: ../index.php?subscriptionfail");
                            exit();
                    }
                    else
                    {
                        $_SESSION['indsub-success'] = "Subscribed Successfully..";
                        $sql = "insert into subscribers values('$email')";
                        mysqli_query($con,$sql);
                        echo "<div class='msgsuccess' id='card'><input type='button' value='x' id='close'><p class='messagesuccess'>Subscribed Successfully..</p></div>";
                        header("Location: ../index.php?subscriptionsuccess");
                            exit();
                    }
                }
            }
            mysqli_close($con);
}

?>
