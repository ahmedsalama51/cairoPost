<?php 
	session_start();
	var_dump($_POST);
	include '../models/UserModel.php';
	$user= new User ; 
	if (isset($_POST['submit']))
	 {

		if ($_POST['submit']=='Register')
		 {
		 	
			if (!isset($_POST['user_name']) || empty(trim($_POST['user_name']))) 
			{	echo "string";
				$_SESSION['user_name'] = "User Name is required";
				header('location:../register.php'); 

			}
			else
			{

				if (!isset($_POST['password'])||empty(trim($_POST['password']))) 
				{
					$_SESSION['password'] = "Password is required";
					header('location:../register.php'); 
				}
				else
				{
					echo $_POST['password'];
					if (!isset($_POST['passconfirm'])||empty(trim($_POST['passconfirm'])))
					{
						$_SESSION['passconfirm'] = "confirm password  is requierd ";
						header('location:../register.php'); 
					}
					else
					{
						if($_POST['passconfirm'] == $_POST['password'])
						{
							$user->password= $_POST['password'];
						}
						else
						{
							$_SESSION['passconfirm'] = "confirm password  must be the same as password ";
							header('location:../register.php');
						}
						$user->user_name = $_POST['user_name'];
						
						if(isset($_POST['first_name']) || !empty(trim($_POST['first_name']))) 
						{
							$user->first_name = $_POST['first_name'];
						}
						else
						{
							$user->first_name = null;
						}
						if(isset($_POST['last_name']) || !empty(trim($_POST['last_name']))) 
						{
							$user->last_name = $_POST['last_name'];
						}
						else
						{
							$user->last_name = null;
						}
						if(isset($_POST['gender']) || !empty(trim($_POST['gender']))) 
						{
							if($_POST['gender'] == '1')
							{
								$user->gender = 'male';
							}
							else
							{
								$user->gender = 'female';
							}
							
						}
						else
						{
							$user->gender = null;
						}

						if(isset($_POST['birthdate']) || !empty(trim($_POST['birthdate']))) 
						{
							$user->birthdate = $_POST['birthdate'];
						}
						else
						{
							$user->birthdate = null;
						}

						$result = $user->insert();
						var_dump($result);
						// if($result)
						// {
						// 	// $_SESSION['user_id']=$user_id;
						// 	echo "Thanks, You r gonna be redirect  within 5 seconds to the loign page, or u can click here <a href='../login.php'>Login</a>";
						// 	echo "<meta http-equiv='Refresh' content='5;url=login.php' />"; 
						// 	// header('location:../index.php');
						// }
					}
				}
			}
		}
	}
