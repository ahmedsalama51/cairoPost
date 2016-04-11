<?php 
	session_start();
	// var_dump($_POST);
	include '../models/UserModel.php';
	$user= new User ; 
	if (isset($_POST['submit']))
	 {

		if ($_POST['submit']=='Login')
		 {
		 	
			if (!isset($_POST['user_name']) || empty(trim($_POST['user_name']))) 
			{	echo "string";
				$_SESSION['user_name'] = "User Name is required";
				header('location:../login.php'); 

			}
			else
			{

				if (!isset($_POST['password'])||empty(trim($_POST['password']))) 
				{
					$_SESSION['password'] = "Password is required";
					header('location:../login.php'); 
				}
				else
				{
					$user->password= $_POST['password'];	
					$user->user_name = $_POST['user_name'];
					$result = $user->checklogin();
					var_dump($result);
					if($result)
					{
						$user_id=$result[0]["_id"];
						$activ_user_name=$result[0]["user_name"];
						$_SESSION['user_id']=$user_id;
						$_SESSION['user_name']=$activ_user_name;
						header('location:../index.php');
					}
				}
			}
		}
	}

