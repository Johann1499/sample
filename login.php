<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="custom.css">
    <title>Login</title>
</head>




<?php if(isset($_POST['btnLogin'])){
    $user = $_POST['userName'];
    $pass = $_POST['userPassword'];
    $option = $_POST['drpOptions'];

    if($option == "Admin"){
        if(($user == "admin") and ($pass == "pass123")){
            echo '<div class="container">
            <div class="row">
                <div class="col-4 mx-auto">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Wecome to the System: '. $user .'
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>';
        }
        elseif(($user == "johann") and ($pass == "hernandez")){
            echo '<div class="container">
            <div class="row">
                <div class="col-4 mx-auto">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Wecome to the System: '. $user .'
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>';
        }
        else{
            echo '<div class="container">
            <div class="row">
                <div class="col-4 mx-auto">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Invalid Username/Password
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>';
        }

    }
    elseif($option == "Content Manager"){
        if(($user == "barack") and ($pass == "obama")){
            echo '<div class="container">
            <div class="row">
                <div class="col-4 mx-auto">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Wecome to the System: '. $user .'
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>';
        }
        elseif(($user == "vladimir") and ($pass == "putin")){
            echo '<div class="container">
            <div class="row">
                <div class="col-4 mx-auto">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Wecome to the System: '. $user .'
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>';
        }
        else{
            echo '<div class="container">
            <div class="row">
                <div class="col-4 mx-auto">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Invalid Username/Password
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>';
        }
    }
    elseif($option == "System User"){
        if(($user == "pablo") and ($pass == "escobar")){
            echo '<div class="container">
            <div class="row">
                <div class="col-4 mx-auto">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Wecome to the System: '. $user .'
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>';
        }
        else{
            echo '<div class="container">
            <div class="row">
                <div class="col-4 mx-auto">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Invalid Username/Password
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>';
        }
    }
    else{
        echo '<div class="container">
            <div class="row">
                <div class="col-4 mx-auto">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Invalid Username/Password
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>';
    }
    
        
}

?>

<body>
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-4 mx-auto">
            <form class="form-login text-center" method="post">
            <img src="profile.jpg" alt="Profile" class="border border-light rounded-circle w-50 mt-3 mb-3"><br>
                <select name="drpOptions" id="drpOptions" class="form-control input-sm chat-input" placeholder="options">
                    <option value="Admin">Admin</option>
                    <option value="Content Manager">Content Manager</option>
                    <option value="System User">System User</option>
                </select><br>

                <input type="text" name="userName" id="userName" class="form-control input-sm chat-input" placeholder="username" require/>
                </br>
                <input type="password" name="userPassword" id="userPassword" class="form-control input-sm chat-input" placeholder="password" require/>
                </br>
                
                <div class="wrapper">
                    <span class="group-btn">     
                    <input type="submit" name="btnLogin"value="Login" class="btn btn-primary btn-md"><i class="fa fa-sign-in"></i></a>
                    </span>
                </div>
            </form>
        
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>