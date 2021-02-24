<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <!-- Bootstrap CSS -->  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
</head>
<body>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST") { 
    if(!empty($_POST['username']) && !empty($_POST['email'])){
// Include file which makes the 
    // Database Connection. 
    include 'config.php';     
    session_start();
    $username = $_POST["username"];  
    $email = $_POST["email"]; 
    $number = $_POST["phonenumber"];  
    $name = $username;
    $subject = "Welcome to Jobmela";

    // Email Sending

    $headers = array(
        'Authorization: Bearer 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',
        'Content-Type: application/json'
    );
    
    $sql = "Select * from user where Email ='$email'"; 
    $result = mysqli_query($db, $sql); 
    $num = mysqli_num_rows($result); 
    if(isset($_SESSION['count'])){
        $_SESSION['count']++;
        if($_SESSION['count']>5)
           $_SESSION['count']=1;
    }
    else{
        $_SESSION['count']=1;
    }
    // $last_id = mysqli_insert_id($db);
    // This sql query is use to check if 
    // the username is already present  
    // or not in our Database 
    if($num == 0) { 
            if($_SESSION['count']%5==0){
                $time="10:00 AM";
                $sql = "INSERT INTO `user`( `Name`,`Email`,`Timeslot`,`Phone_number`) VALUES ('$username', '$email','$time',$number)";
                $body = "Thank you for the registration. Please visit the venue at"." " .$time;
                $data = array(
                    "personalizations" => array(
                        array(
                            "to" => array(
                                array(
                                    "email" => $email,
                                    "name" => $name
                                )
                            )
                        )
                    ),
                    "from" => array(
                        "email" => "sidharth.paswan@iemlabs.com"
                    ),
                    "subject" => $subject,
                    "content" => array(
                        array(
                            "type" => "text/html",
                            "value" => $body
                        )
                    )
                );
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, "https://api.sendgrid.com/v3/mail/send");
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                $response = curl_exec($ch);
                curl_close($ch);
            
                echo $response;
              
                // $count=$count+1;
            }
            else if($_SESSION['count']%5==1){
                $time="11:00 AM";
                $sql = "INSERT INTO `user`( `Name`,`Email`,`Timeslot`,`Phone_number`) VALUES ('$username', '$email','$time',$number)";
                // $count=$count+1;
                $body = "Thank you for the registration. Please visit the venue at"." " .$time;
                $data = array(
                    "personalizations" => array(
                        array(
                            "to" => array(
                                array(
                                    "email" => $email,
                                    "name" => $name
                                )
                            )
                        )
                    ),
                    "from" => array(
                        "email" => "sidharth.paswan@iemlabs.com"
                    ),
                    "subject" => $subject,
                    "content" => array(
                        array(
                            "type" => "text/html",
                            "value" => $body
                        )
                    )
                );
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, "https://api.sendgrid.com/v3/mail/send");
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                $response = curl_exec($ch);
                curl_close($ch);
            
                echo $response;
               
            }
            else if($_SESSION['count']%5==2){
                $time="12:00 PM";
                $sql = "INSERT INTO `user`( `Name`,`Email`,`Timeslot`,`Phone_number`) VALUES ('$username', '$email','$time',$number)";
                // $count=$count+1;   
                $body = "Thank you for the registration. Please visit the venue at"." " .$time;
                $data = array(
                    "personalizations" => array(
                        array(
                            "to" => array(
                                array(
                                    "email" => $email,
                                    "name" => $name
                                )
                            )
                        )
                    ),
                    "from" => array(
                        "email" => "sidharth.paswan@iemlabs.com"
                    ),
                    "subject" => $subject,
                    "content" => array(
                        array(
                            "type" => "text/html",
                            "value" => $body
                        )
                    )
                );
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, "https://api.sendgrid.com/v3/mail/send");
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                $response = curl_exec($ch);
                curl_close($ch);
            
                echo $response;
            }
            else if($_SESSION['count']%5==3){
                $time="01:00 PM";
                $sql = "INSERT INTO `user`( `Name`,`Email`,`Timeslot`,`Phone_number`) VALUES ('$username', '$email','$time',$number)";
                // $count=$count+1;
                $body = "Thank you for the registration. Please visit the venue at"." " .$time;
                $data = array(
                    "personalizations" => array(
                        array(
                            "to" => array(
                                array(
                                    "email" => $email,
                                    "name" => $name
                                )
                            )
                        )
                    ),
                    "from" => array(
                        "email" => "sidharth.paswan@iemlabs.com"
                    ),
                    "subject" => $subject,
                    "content" => array(
                        array(
                            "type" => "text/html",
                            "value" => $body
                        )
                    )
                );
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, "https://api.sendgrid.com/v3/mail/send");
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                $response = curl_exec($ch);
                curl_close($ch);
            
                echo $response;
                
               
            }
            else if($_SESSION['count']%5==4){
                $time="02:00 PM";
                $sql = "INSERT INTO `user`( `Name`,`Email`,`Timeslot`,`Phone_number`) VALUES ('$username', '$email','$time',$number)";
                // $count=0; 
                $body = "Thank you for the registration. Please visit the venue at"." " .$time;
                $data = array(
                    "personalizations" => array(
                        array(
                            "to" => array(
                                array(
                                    "email" => $email,
                                    "name" => $name
                                )
                            )
                        )
                    ),
                    "from" => array(
                        "email" => "sidharth.paswan@iemlabs.com"
                    ),
                    "subject" => $subject,
                    "content" => array(
                        array(
                            "type" => "text/html",
                            "value" => $body
                        )
                    )
                );
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, "https://api.sendgrid.com/v3/mail/send");
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                $response = curl_exec($ch);
                curl_close($ch);
            
                echo $response;
            }
            $result = mysqli_query($db, $sql);
            echo"Thank you for registration";       
    }
    else{
        echo "You are already registered.";
    }  
}//end if  
else {  
    ?>
    <script> alert("All fields are required!"); </script> 
     <?php
   }   
}      
?>

<div class="registration-form">  
    <!-- <h1 class="text-center">Signup Here</h1>   -->
    <form method="post"> 
        <!-- <div class="form-group">  
            <label for="username">Username</label>  
        <input type="text" class="form-control" id="username"
            name="username" aria-describedby="emailHelp">     
        </div> 
    
        <div class="form-group">  
            <label for="email">EmailID</label>  
            <input type="email" class="form-control"
            id="email" name="email">  
        </div> 
        <button type="submit" class="btn btn-primary"> 
        Register 
        </button>  -->

            <div class="form-group">
                <input type="text" class="form-control item" id="username" name="username" placeholder="Username">
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="email" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="phone-number" name="phonenumber" placeholder="Phone Number">
            </div>
            <div class="form-group">
            <button type="submit" class="btn btn-primary"> 
             Register 
            </button> 
            </div>
        </form>
        <div class="social-media">
            <h5>Visit to Know more.</h5>
            <div class="social-icons">
                <a href="#"><i class="icon-social-facebook" title="Facebook"></i></a>
                <a href="#"><i class="icon-social-google" title="Google"></i></a>
            </div>
        </div>
</div> 
    
<!-- Optional JavaScript -->  
<!-- jQuery first, then Popper.js, then Bootstrap JS --> 
    
<script src=" 
https://code.jquery.com/jquery-3.5.1.slim.min.js" 
    integrity=" 
sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" 
    crossorigin="anonymous"> 
</script> 
    
<script src=" 
https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
    integrity= 
"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" 
    crossorigin="anonymous"> 
</script> 
    
<script src=" 
https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"  
    integrity= 
"sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
    crossorigin="anonymous"> 
</script>  
  
</body>
</html>