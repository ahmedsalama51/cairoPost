
<?php
	session_start();
include "views/header.php";
?>
<div class="container">
    <form align="center"role='form' class='form-horizontal col-md-12' action='controllers/user_login_check.php' method='post' enctype="multipart/form-data">
        <div class='form-group has-feedback' id="cname">
            <label class='col-md-2'>User Name : </label>
            <div class='col-md-4 input-group'>
				<input placeholder='Username' class='col-md-4 form-control' name='user_name' type="text" id="user_name"/>
                <span id="repasserr" class=" requierd"><font color="red">*</font></span>
                <span id="repassval" class=" col-md-4 errormassage"><font color="green"></font>
                 <?php
                   if (isset($_SESSION['user_name'])) 
                   {
                       echo $_SESSION['user_name'];
                       unset($_SESSION['user_name']);
                   }                   
                ?>
                </span>

            </div>
        </div>


        <div class='form-group' id="cpass">
            <label class='col-md-2'>Create-Password :</label>
            <div class='col-md-4 input-group'>
                <input placeholder='Password' class='form-control' name='password' type='password' id="password"/>
                <span id="repasserr" class=" requierd"><font color="red">*</font></span>
                <span id="repassval" class=" col-md-4 errormassage"><font color="green"></font>
                <?php
	               if (isset($_SESSION['password']))
	               {
	                   echo $_SESSION['password'];
	                   unset($_SESSION['password']);
	               }
                ?>
                </span>
            </div>
        </div>	
    
        <span class='col-md-2'></span>
        <input type='submit' class='col-md-1 btn btn-success btn-md' name='submit' value='Login' id="submit"/>
       
    </form>	

    <div class="clearfix"> </div>
</div>
<?php
include "views/footer.php"
?>