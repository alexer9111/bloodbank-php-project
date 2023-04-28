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
$bloodgroup = $_POST['bgroup'];


$select = "SELECT * FROM `recieverr` WHERE email = '$email' && pass = '$password' ";

$result = mysqli_query($con, $select);

if(mysqli_num_rows($result) > 0){
    echo 'user already exist!';
} else{
    $sql = "INSERT INTO `recieverr` (`email`, `pass`, `bloodgroup`) VALUES ('$email', '$password', '$bloodgroup');";

    
    if($con->query($sql) == true){
        echo "You're Successfully Registered as Reciever";
        header('location:login.php');
    }
    else{
        echo "ERROR: $sql <br> $con->error";
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
        <form action="" name="myForm" method='post'>
            <div class="log-in-container">
                <h1>Register</h1>
                <div class="email">
                    <input type="email" name="email" placeholder="Enter Your Email Here" id="email">
                </div>
                <div class="password">
                    <input type="password" placeholder="Enter Password Here" name="password" id="password" >
                </div>
                <div class="password">
                    <input type="password" placeholder="Enter Password Here" name="cpassword" id="cpassword" >
                </div>
                <div class="bloodgroup">
                    <input type="text" placeholder="Enter Your BloodGroup" name="bgroup" id="bgroup" >
                </div>
                <div id="log-in-button">
                    <button type="button" id="send">Register Reciever</button>
                </div>
                <div class="create_link">
                    <span>Already Have an account</span> <a href="login.php">Log In</a><br>
                </div>
            </div>
        </form>
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

            } else if(document.myForm.password.value != document.myForm.cpassword.value){
                alert("Password doesn't match")
                document.myForm.cpassword.focus();
                return false;

            } else{
                document.myForm.submit();
                return true
            }

            
        }


    </script>
</body>
</html>