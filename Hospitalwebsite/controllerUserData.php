<?php 
session_start();
require "connection.php";
$email = "";
$name = "";
$errors = array();

//if user click signup button
if(isset($_POST['signup'])){
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
    if($password !== $cpassword){
        $errors['password'] = "Confirm password is not match!!!";
    }
    $email_check = "SELECT * FROM usertable WHERE email = '$email'";
    $res = mysqli_query($con, $email_check);
    if(mysqli_num_rows($res) > 0){
        $errors['email'] = "Email which is entered by you already exist!!!";
    }
    if(count($errors) === 0){
        $encpass = password_hash($password, PASSWORD_BCRYPT);
        $code = rand(999999, 111111);
        $status = "notverified";
        $insert_data = "INSERT INTO usertable (name, email, password, code, status)
                        values('$name', '$email', '$encpass', '$code', '$status')";
        $data_check = mysqli_query($con, $insert_data);
        if($data_check){
            $subject = "Email Verification Code";
            $message = "Your verification code is $code";
            
                                    
            


                $info = "We have sent a verification code to your mobile - $mobile";
                $_SESSION['info'] = $info;
                
                
                /*SMS code*/
                
        $user = "94777943607";
        $password = "2503";
        $text = urlencode($message);
        $to = $mobile;

        $baseurl ="http://www.textit.biz/sendmsg";
        $url = "$baseurl/?id=$user&pw=$password&to=$to&text=$text";
        $ret = file($url);

        $res= explode(":",$ret[0]);

        if (trim($res[0])=="OK")
        {
             "Message Sent - ID : ".$res[1];
        }
        else
        {
             "Sent Failed - Error : ".$res[1];
        }
                
                
                /*SMS code end*/
                
                
                header('location: user-otp.php');
                
                
            
        }else{
            $errors['db-error'] = "Failed while inserting data into database!!!";
        }
    }

}
    //if user click verification code submit button
    if(isset($_POST['check'])){
        $_SESSION['info'] = "";
        $otp_code = mysqli_real_escape_string($con, $_POST['otp']);
            $check_code = "SELECT * FROM usertable WHERE code = $otp_code";
            $code_res = mysqli_query($con, $check_code);
            if(mysqli_num_rows($code_res) > 0){
                $fetch_data = mysqli_fetch_assoc($code_res);
                $fetch_code = $fetch_data['code'];
                $email = $fetch_data['email'];
                $code = 0;
                $status = 'verified';
                $update_otp = "UPDATE usertable SET code = $code, status = '$status' WHERE code = $fetch_code";
                $update_res = mysqli_query($con, $update_otp);
                if($update_res){
                    $_SESSION['name'] = $name;
                    $_SESSION['email'] = $email;
                    header('location: home2.php');
                    exit();
                }else{
                    $errors['otp-error'] = "Failed while updating code!!!";
                }
            }else{
                $errors['otp-error'] = "You have entered incorrect code!!!";
            }
    }

    //if user click login button
    if(isset($_POST['login'])){
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $utype = mysqli_real_escape_string($con, $_POST['utype']);




        if ($utype=='user') {
          
        $check_email = "SELECT * FROM usertable WHERE email = '$email'";
        $res = mysqli_query($con, $check_email);
        if(mysqli_num_rows($res) > 0){
            $fetch = mysqli_fetch_assoc($res);
            $fetch_pass = $fetch['password'];
            if(password_verify($password, $fetch_pass)){
                $_SESSION['email'] = $email;
                $status = $fetch['status'];
                if($status == 'verified'){
                  $_SESSION['email'] = $email;
                    header('location: home2.php');
                }else{
                    $info = "It looks like you haven't still verify your email - $email";
                    $_SESSION['info'] = $info;
                    header('location: user-otp.php');
                }
            }else{
                $errors['email'] = "Incorrect email or password!";
            }
        }


        }






        if ($utype == 'admin') {
            $check_email = "SELECT * FROM admin WHERE email = '$email'";
        $res = mysqli_query($con, $check_email);
        if(mysqli_num_rows($res) > 0){
            $fetch = mysqli_fetch_assoc($res);
            $fetch_pass = $fetch['password'];
            if(password_verify($password, $fetch_pass)){
                $_SESSION['email'] = $email;
                $status = $fetch['status'];
                if($status == 'verified'){
                  $_SESSION['email'] = $email;
                    header('location: home.php');
                }else{
                    $info = "It looks like you haven't still verify your email - $email";
                    $_SESSION['info'] = $info;
                    header('location: user-otp.php');
                }
            }else{
                $errors['email'] = "Incorrect email or password!";
            }
        }
        else{
             $errors['email'] = "Incorrect email or password!";
            header('location:admin/index.php');
        }
        }




       /* This is the coding part example*/

        else{
            $errors['email'] = "It looks like you are not a member yet!!! Click on the bottom link to signup...";
        }
        
    }
?>