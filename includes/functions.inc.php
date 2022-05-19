<?php 

	function uidIsInvalid($conn, $username){

		$sql1="select username from account where username='".$username."';";
		$sql2="select username from admin where username='".$username."';";

		$result1=mysqli_query($conn,$sql1);
		$result2=mysqli_query($conn,$sql2);

		// $usernamelist1 = mysqli_fetch_all($result1, MYSQLI_ASSOC);
		// $usernamelist2 = mysqli_fetch_all($result2, MYSQLI_ASSOC);

		if(mysqli_num_rows($result1)==0 && mysqli_num_rows($result2)==0){
			return false;
		}else{
			return true;
		}

	}

	function accidIsInvalid($conn, $userid){
		$sql1="select * from users where user_id=".$userid.";";
		$result1=mysqli_query($conn, $sql1);

		if(mysqli_num_rows($result1) != 0){
			return false;
		}else{
			return true;
		}

	}