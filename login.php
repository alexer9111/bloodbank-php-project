<?php

if(isset($_POST['email'])){

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "staff";

$con = mysqli_connect($servername, $username, $password, $dbname);

if(!$con){
    die("connect to this databasse failed due to" . mysqli_connect_error());
}


$email = $_POST['email'];
$password = $_POST['password'];


$value = $_POST['receiverStaff'];

if ($value == "yes"){
    
    $select = "SELECT * FROM `recieverr` WHERE email = '$email' && pass = '$password' ";
    
    $result = mysqli_query($con, $select);
    
    if(mysqli_num_rows($result) > 0){
        header('location:receiver.php');
    } else {
        echo "Invalid Email or Password";
    }

} else{
    
    $select = "SELECT * FROM `stafff` WHERE email = '$email' && pass = '$password' ";
    
    $result = mysqli_query($con, $select);
    
    if(mysqli_num_rows($result) > 0){
        header('location:staff.php');
    } else{
        echo "Ivalid Email or Password";
    }

}


$con->close();

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Bank</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="log-in-container">
                <form action="" name="myForm" method='post'>
                    <h1>Log In</h1>
                    <div class="email">
                        <input type="email" name="email" placeholder="Enter Your Email Here" id="email">
                    </div>
                    <div class="password">
                        <input type="password" placeholder="Enter Password Here" name="password" id="password" >
                    </div>
                    <div class="receiver-staff">
                        <input type="radio" name="receiverStaff" id="reciever" value="yes" checked>
                        <label for="reciever" name="reciever" >Blood Reciever</label>
                        <input type="radio" name="receiverStaff" id="staff" value="no">
                        <label for="staff" name="staff">Hospital Staff</label>
                    </div>
                    <div id="log-in-button">
                        <button type="button" id="send">Log In</button>
                    </div>
                </form>
                <div class="create_link">
                    <span>Create a account for</span> <a href="receiver_register.php">Reciever</a><br>
                    <span>Create a account for</span> <a href="staff_register.php">Staff</a>
                </div>
        </div>
    </div>
    
    <script>
        

        const btn = document.getElementById("send");

        btn.addEventListener('click',Cheched);

        function Cheched(){

            let Email = document.getElementById("email").value;
            let regx = /^([a-zA-Z0-9\._]+)@([a-zA-Z0-9])+\.([a-zA-Z]+)(\.[a-zA-Z]+)?$/

            if(document.myForm.email.value == "") {
                alert("Please Enter Email Address");
                document.myForm.email.focus();
                return false;

            } else if(!regx.test(Email)){
                alert("Please provide Valid Email Address");
                document.myForm.email.focus();
                return false;

            } else if(document.myForm.password.value == "") {
                alert("Please Enter Your Password");
                document.myForm.password.focus();
                return false;
            } else{
                document.myForm.submit();
                return true
            }

            
        }


    </script>
</body>
</html>