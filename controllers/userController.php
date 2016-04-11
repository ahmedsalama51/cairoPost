<?php
session_start();
include '../models/UserModel.php';
$user= new User ; 
$action = $_GET['action'];

switch ($action) {
    case 'finduser':
        {
            $id = new MongoId('570b944e1d4f24b68e3c4921');
            $curent_user = $user->getUserById($id);
            var_dump($curent_user);
         }
        break;
    // case 'updatestaus':
    //     {$id=$_GET['id'];
    //             $user->active = $_GET['active'];
    //             $user->updateStatus($id);
    //             echo "user update succsess";
    //             header('location:../controle.php#tabs-1');}

    //     # code...
    //     break;
    // case 'updateadmin':
    //     {$id=$_GET['id'];
    //             $user->admin = $_GET['admin'];
    //             $user->updateAdmin($id);
    //             echo "user update succsess";
    //             header('location:../controle.php#tabs-1');}


    //     # code...
    //     break;
    // case 'editname':
    // {$id = $_SESSION['user_id'];
    //     $name=$_GET['name'];
    //     $user->name = $name;
    //     $user->updateName($id);
    //     echo "user update succsess";}
        
    //     break;
    // case 'editemail':
    // {
    // $id = $_SESSION['user_id'];
    // $email=$_GET['email'];
    // $user->email = $email;
    // $user->updateemail($id) ;
    // echo "user update succsess";}
        
    //     break;
    // case 'editpassword':
    // {
    // $id = $_SESSION['user_id'];
    // $password=$_GET['password'];
    // $user->password = $password;
    // $user->updatepassword($id) ;
    // echo "user update succsess";}
        
    //     break;
    // case 'editc_limit':
    // {
    // $id = $_SESSION['user_id'];
    // $c_limit=$_GET['c_limit'];
    // $user->c_limit = $c_limit;
    // $user->updatec_limit($id) ;
    // echo "user update succsess";}
        
    //     break;
    // case 'getorderdata':
    // {
    //     $id = $_GET['id'];
    //     $data=$user->getUsersOrder($id) ;
    //     echo json_encode($data);
    // }
        
    //     break;
    // default:
    //     # code...
    //     break;
}


?>
