
<?php
	session_start();
include "views/header.php";
?>
<div class="container">
    <form align="center"role='form' class='form-horizontal col-md-12' action='controllers/user_data_test.php' method='post' enctype="multipart/form-data">
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
                <input placeholder='Create-Password' class='form-control' name='password' type='password' id="password"/>
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
        <div class='form-group ' id="crepass">
            <label class='col-md-2'>Confirm-Password :</label>
            <div class='col-md-4 input-group'>
                <input placeholder='Confirm-Password' class='form-control' name='passconfirm' id="repassword" type='password'  id="repassword"/>
                <span id="repasserr" class=" requierd"><font color="red">*</font></span>
                <span id="repassval" class=" col-md-4 errormassage"><font color="green"></font>

                <?php
	               if (isset($_SESSION['passconfirm'])) 
	               {
	                   echo $_SESSION['passconfirm'];
	                   unset($_SESSION['passconfirm']);
	               }
                ?>
                </span>
            </div>
        </div>
        <div class='form-group has-feedback' id="cfirstname">
            <label class='col-md-2'>First Name : </label>
            <div class='col-md-4 input-group'>
				<input placeholder='First Name' class='col-md-4 form-control' name='first_name' type="text" id="name" aria-describedby="inputSuccess2Status"/>
            </div>
        </div>
        <div class='form-group has-feedback' id="clastname">
            <label class='col-md-2'>Last Name : </label>
            <div class='col-md-4 input-group'>
				<input placeholder='Last Name' class='col-md-4 form-control' name='last_name' type="text"/>
            </div>
        </div>	
        <div class='form-group has-feedback' id="clastname">
            <label class='col-md-2'>Gender : </label>
            <div class='col-md-4 input-group'>
				<input   name='gender' type="radio" value="1" checked="true" /> Male 
				<input  name='gender' type="radio" value="2" /> Female
            </div>
        </div>
        <div class='form-group'>
			<label class='col-md-2'>Birth Date :</label>
			<div class='col-md-4 input-group'>
				<input placeholder='Birthdate' class='form-control' name='birthdate' type='date' />
			</div>
		</div>	

        <span class='col-md-2'></span>
        <input type='submit' class='col-md-1 btn btn-success btn-md' name='submit' value='Register' id="submit"/>
        <span class='col-md-1'></span>
        <input type='reset' class='col-md-1 btn btn-danger btn-md'  value='Reset'/>
    </form>	

    <div class="clearfix"> </div>
</div>
<?php
include "views/footer.php"
?>