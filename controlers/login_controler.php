<?php
    include_once('../modules/DB_Client.php');
    include_once('../modules/User.php');
	
    $dbClient = DB_Client::getDBClient();
    $dbClient->connect();
    $function = $_POST["function"];
    $result = false;
    $status = "FAILURE";

    switch (strtolower($function)) {
        case 'signin':
            $new_user = new User();
            if (isset($_POST['email']) && isset($_POST['password'])) {
                $new_user->setEmail($_POST['email']);
                $new_user->setPassword($_POST['password']);

                $result = $new_user->checkLogin($dbClient);
            }
            if ($result) {
                $status = "SUCCESS";
            }
            break;
			
		case 'signup':
			$new_user = new User();
            if (isset($_POST['username']) && isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email'])  && isset($_POST['password']) ) {
                $new_user->setUsername($_POST['username']);
                $new_user->setFirstName($_POST['firstname']);
                $new_user->setLastName($_POST['lastname']);
                $new_user->setEmail($_POST['email']);
                $new_user->setPassword($_POST['password']);
               

                if(!$new_user->isAvailable($dbClient, "username", $_POST['username'])){
                    $status = "Username Already Exists!";
                    $result = false;
                }else{
                    if(!$new_user->isAvailable($dbClient, "email", $_POST['email'])){
                        $status = "Email Already Exists!";
                        $result = false;
                    }else{
                        $result = $new_user->signup($dbClient, $new_user);
                    }
                }
            }
            if ($result) {
                $status = "SUCCESS";
            }
			break;
			
        default:
            break;
    }
    
    echo json_encode(array("result"=>$result, "status"=>$status));
?>