<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Bank</title>
    <link rel="stylesheet" href="bloodsample.css">
</head>
<body>
    <div class="index_container">

        <div class="navbar">
            <ul class="navbar-list">
            <li><i id="navbar-logo"><img src="./image/blood-test.png" alt=""></i></li>
            <li><a href="login.php" id="login-btn">Log In</a><img src="./image/enter.png" alt="" id="login-icon"></li>
            </ul>
        </div>
        <div class="main-body">

            <div class="left-container">

                <div class="left-container-options" id="left-container-option-first">

                    <a href="login.php">Blood Sample</a>
                </div>
                
               
            </div>

            <div class="right-container">

                <div class="blood-group-box" id="blood-group-A-positive">
                    <div class="blood-details">
                        <img src="./image/blood.png" alt="" id="blood-image">
                        <p>Blood Group : A Positive</p>
                        <p2 id="available-units">Total Units Available: 20</p2>
                    </div>
                    <div class="request-btn">
                        <button id="button1">Request 1unit</button>
                    </div>
                </div>
                <div class="blood-group-box" id="blood-group-A-negative">
                    <div class="blood-details">
                        <img src="./image/blood.png" alt="" id="blood-image">
                        <p>Blood Group : A Negative</p>
                        <p2 id="available-units">Total Units Available: 4</p2>
                    </div>
                    <div class="request-btn">
                        <button id="button2">Request 1unit</button>
                    </div>
                </div>
                <div class="blood-group-box" id="blood-group-B-positive">
                    <div class="blood-details">
                        <img src="./image/blood.png" alt="" id="blood-image">
                        <p>Blood Group : B Positive</p>
                        <p2 id="available-units">Total Units Available: 27</p2>
                    </div>
                    <div class="request-btn">
                        <button id="button3">Request 1unit</button>
                    </div>
                </div>
                <div class="blood-group-box" id="blood-group-B-negative">
                    <div class="blood-details">
                        <img src="./image/blood.png" alt="" id="blood-image">
                        <p>Blood Group : B Negative</p>
                        <p2 id="available-units">Total Units Available: 6</p2>
                    </div>
                    <div class="request-btn">
                        <button id="button4">Request 1unit</button>
                    </div>
                </div>
                <div class="blood-group-box" id="blood-group-AB-positive">
                    <div class="blood-details">
                        <img src="./image/blood.png" alt="" id="blood-image">
                        <p>Blood Group : AB Positive</p>
                        <p2 id="available-units">Total Units Available: 10</p2>
                    </div>
                    <div class="request-btn">
                        <button id="button5">Request 1unit</button>
                    </div>
                </div>
                <div class="blood-group-box" id="blood-group-AB-negative">
                    <div class="blood-details">
                        <img src="./image/blood.png" alt="" id="blood-image">
                        <p>Blood Group : AB Negative</p>
                        <p2 id="available-units">Total Units Available: 2</p2>
                    </div>
                    <div class="request-btn">
                        <button id="button6">Request 1unit</button>
                    </div>
                </div>
                <div class="blood-group-box" id="blood-group-O-positive">
                    <div class="blood-details">
                        <img src="./image/blood.png" alt="" id="blood-image">
                        <p>Blood Group : O Positive</p>
                        <p2 id="available-units">Total Units Available: 13</p2>
                    </div>
                    <div class="request-btn">
                        <button id="button7">Request 1unit</button>
                    </div>
                </div>
                <div class="blood-group-box" id="blood-group-O-negative">
                    <div class="blood-details">
                        <img src="./image/blood.png" alt="" id="blood-image">
                        <p>Blood Group : O Negative</p>
                        <p2 id="available-units">Total Units Available: 1</p2>
                    </div>
                    <div class="request-btn">
                        <button id="button8">Request 1unit</button>
                    </div>
                </div>




            </div>



        </div>


    </div>

    <script>
    let buttons = document.querySelectorAll("button");

    for (let i = 0; i < buttons.length; i++) {
      buttons[i].onclick = function() {
        console.log("Button " + (i+1) + " was clicked.");
        window.location.href = "./login.php"
      };
    }
  </script>
</body>
</html>