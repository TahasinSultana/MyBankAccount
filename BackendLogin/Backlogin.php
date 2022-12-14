<?php
include_once $_SERVER['DOCUMENT_ROOT'].'\BankProject/Connection/conn.php';

if (isset($_POST['sub'])) {
	
	$username = trim(mysqli_real_escape_string($conn,$_POST['username']));

	$password = trim(mysqli_real_escape_string($conn,$_POST['password']));

    if(empty($username)||empty($password)){
		header('Location:\BankProject/Login_signup/LogIn.php? please fill the space ');
		exit();
	}
    elseif (preg_match('/[0-9]/',$username)) {
		header('Location:\BankProject/Login_signup/SignUp.php? username must be words');
		exit();
	}
    else{
		$statement = mysqli_stmt_init($conn);
		$check_databse = "SELECT * FROM banksystem WHERE username = ? OR email = ? ";

        if(!mysqli_stmt_prepare($statement, $check_databse)){
			header('Location:\BankProject/Login_signup/LogIn.php?ERROR WITH THE DATABASE ');
			exit();
		}
        else{
			mysqli_stmt_bind_param($statement,'ss',$username,$username);
			mysqli_stmt_execute($statement);

			$check_data = mysqli_stmt_get_result($statement);
			if($row_data = mysqli_fetch_assoc($check_data)){
				$password_verify = password_verify($password,$row_data['passwords']);
				if($password_verify == false){
					echo "<h1> PASSWORD IS NOT CORRECT </h1>";
				}
				// checking if password is correct 
				elseif($password_verify == true){
                    session_start();

					$_SESSION['userbank_id'] = $row_data['userbank_id'];
					$_SESSION['username'] = $row_data['username'];
					$_SESSION['totalamount'] = $row_data['totalamount'];
					$_SESSION['airtime'] = $row_data['airtime'];
					$_SESSION['accountnumber'] = $row_data['accountnumber'];
					$_SESSION['birthdate'] = $row_data['birthdate'];
					$_SESSION['debitcard'] = $row_data['debitcard'];
					$_SESSION['phonenumber'] = $row_data['phonenumber'];
					$_SESSION['bvn'] = $row_data['bvn'];
					$_SESSION['location'] = $row_data['location'];
					$_SESSION['pin'] = $row_data['pin_number'];

					header('Location:\BankProject/Dashboard/userpanel.php?');
					exit();
                }

			}else{
				echo "<h1> THIS USER DOES NOT EXIST </h1>";
			}
    }}

}

?>