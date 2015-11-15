<?php require_once('Connections/conn.php'); 
//login
if(isset($_POST['btnLogin']))
{
	$sql="select * from tbl_user where username='$_POST[txtUsername]' and password='$_POST[txtPassword]' and isdelete = 1"; 
	$query = mysqli_query($conn,$sql);
	$row = mysqli_fetch_assoc($query);	
	$counter = mysqli_num_rows($query);
	if($counter==1){
		 if($row['levelID'] == 1){
			$_SESSION['levelID'] =$row['levelID'];
			$_SESSION['userID'] =$row['id'];
			$_SESSION['fullname'] =$row['firstname']." ".$row['lastname'];

			$_SESSION['restrictLogin']=1;
			 header("location:main.php");
		}elseif($row['levelID'] == 2){
			$_SESSION['levelID'] =$row['levelID'];
			$_SESSION['userID'] =$row['id'];
			$_SESSION['restrictLogin']=1;
			$_SESSION['fullname'] =$row['firstname']." ".$row['lastname'];

			header("location:main.php"); 
		}elseif($row['levelID'] == 3){
			$_SESSION['levelID'] =$row['levelID'];
			$_SESSION['userID'] =$row['id'];
			$_SESSION['restrictLogin']=1;
			$_SESSION['fullname'] =$row['firstname']." ".$row['lastname'];

			header("location:main.php"); 
		}
	}else{
		header("location:error.php");
	}
	mysqli_close($conn);	
}

//addUser
if(isset($_POST['btnAddUser'])){
	$sql = "insert into tbl_user (`lastname`,`firstname`,`email`,`username`,`password`,`levelID`,`dateadded`) values ('$_POST[txtln]', '$_POST[txtfn]','$_POST[txtemail]', '$_POST[txtun]', '$_POST[txtpw]',2, NOW());";
	mysqli_query($conn,$sql);
	mysqli_close($conn);
	header("location:index.php");
}
