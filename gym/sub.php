<?php
    echo"outside IF";
  $con = mysqli_connect('localhost','root','','gym');
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    echo"inside IF";
    $email = $_POST['sub-email'];
    if($email != "")
    {
        $sql = "select * from subscribers where email = '$email'";
        $result = mysqli_query($con,$sql);
        if(mysqli_num_rows($result) > 0){
           echo "Existing User!!";
        }
        else{
            $sql = "insert into subscribers values('$email')";
            mysqli_query($con,$sql);
            echo "New User!!";
        }
    }
    else{
        echo "Empty";
    }
}


?>
