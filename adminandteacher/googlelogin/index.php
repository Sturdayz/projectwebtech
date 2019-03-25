<?php
//Include GP config file && User class
include_once 'gpConfig.php';
include_once 'User.php';
// include '../Controller/dbConnecter.php';

if(isset($_GET['code'])){
	$gClient->authenticate($_GET['code']);
	$_SESSION['token'] = $gClient->getAccessToken();
	header('Location: ' . filter_var($redirectURL, FILTER_SANITIZE_URL));
}

if (isset($_SESSION['token'])) {
	$gClient->setAccessToken($_SESSION['token']);
}

if ($gClient->getAccessToken()) {
	//Get user profile data from google
	$gpUserProfile = $google_oauthV2->userinfo->get();

	//Initialize User class
	$user = new User();

    $gpUserProfile['email'] = !empty($gpUserProfile['email'])?$gpUserProfile['email']:'';
    $_SESSION['email'] = $gpUserProfile['email'];
    echo $_SESSION['email'];
    require '../dbConnecter/dbConnect.php';
	$sqlt = "SELECT * FROM teacher";
    $sqls = "SELECT * FROM student"; 
    $teacher = mysqli_query($connect,$sqlt);
    $student = mysqli_query($connect,$sqls);
    
        while($record = mysqli_fetch_assoc($teacher)){
            if(($_SESSION['email'] ) == $record["email"]){
                list($name) = explode(" ",$record["name"]);
                $_SESSION['name'] = $name;
                header('Location:../teacher/teacherhome.php');
            }
        }
        while($records = mysqli_fetch_array($student)){
            if(($_SESSION['email'] ) == $records["email"]){
                list($name) = explode(" ",$records["name"]);
                $_SESSION['name'] = $name;
                header('Location:../student/studenthome.php');
                
            }
            
        }

	// foreach (selectUserbyTable('student') as $row){
	//     if ($row->email == $gpUserProfile['email'] && $row->type == '2'){
	//         $_SESSION['type'] = $row->type;
	//         echo "<script>window.location = '../student/studenthome.php'</script>";
    //     }
    // }

    // foreach (selectUserbyTable('teacher') as $row){
    //     if ($row->email == $gpUserProfile['email'] && $row->type == '1'){
    //         echo "<script>window.location = '../teacher/teacherhome.php'</script>";
    //     }
    // }



	//Render facebook profile data
//    if(!empty($userData)){
//        $output = '<h1>Google+ Profile Details </h1>';
//        $output .= '<img src="'.$userData['picture'].'" width="300" height="220">';
//        $output .= '<br/>Google ID : ' . $userData['oauth_uid'];
//        $output .= '<br/>Name : ' . $userData['first_name'].' '.$userData['last_name'];
//        $output .= '<br/>Email : ' . $userData['email'];
//        $output .= '<br/>Gender : ' . $userData['gender'];
//        $output .= '<br/>Locale : ' . $userData['locale'];
//        $output .= '<br/>Logged in with : Google';
//        $output .= '<br/><a href="'.$userData['link'].'" target="_blank">Click to Visit Google+ Page</a>';
//        $output .= '<br/>Logout from <a href="logout.php">Google</a>';
//    }else{
//        $output = '<h3 style="color:red">Some problem occurred, please try again.</h3>';
//    }
} else {
	$authUrl = $gClient->createAuthUrl();
//	$output = '<a href="'.filter_var($authUrl, FILTER_SANITIZE_URL).'"><img src="images/glogin.png" alt=""/></a>';
}
?>
<!--<html>-->
<!--<head>-->
<!--<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />-->
<!--<title>Login with Google using PHP by CodexWorld</title>-->
<!--<style type="text/css">-->
<!--h1{font-family:Arial, Helvetica, sans-serif;color:#999999;}-->
<!--</style>-->
<!--</head>-->
<!--<body>-->
<!--<div>--><?php //echo $output; ?><!--</div>-->
<!--</body>-->
<!--</html>-->