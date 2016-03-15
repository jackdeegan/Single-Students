<?php
	ini_set('display_errors',1);

	//$server= "localhost";
	$server= "193.1.101.7:3307";
	$user="group19";
	$password="cBlAP4s1a";
	$dbname="group19DB";
	

	$db = mysqli_connect($server,$user,$password, $dbname) or die("Unable to connect");
	$sql1= "Select NAME,DOB,SEX,PREFERENCE from REGISTER
	where USERNAME=$username";
	$result= mysqli_query($db, $sql1) or die('Error SQL !<br>'.$sql1.'<br>'.mysqli_connect_error());
    $row = mysqli_fetch_assoc($result);
        $name=$row['USERNAME'];
		$DOB=$row['DOB'];
		$sex=$row['SEX'];
		$preference=$row['PREFERENCE'];
		
	$sql2= "Select COLLEGE from REGISTER
	where USERNAME=$username";
	$result= mysqli_query($db, $sql2) or die('Error SQL !<br>'.$sql2.'<br>'.mysqli_connect_error());
    $row = mysqli_fetch_assoc($result);
        $college=$row['COLLEGE'];
		
	$sql3= "Select HOBBIE from LIKES
	where USERNAME=$username";
	$result= mysqli_query($db, $sql3) or die('Error SQL !<br>'.$sql3.'<br>'.mysqli_connect_error());
    $row = mysqli_fetch_assoc($result);
	$num_rows = mysql_num_rows($result);
	$array=[];
	while($row = mysqli_fetch_assoc($result)) {
		$array[]=$row['HOBBIE'];
	}
	
	$sql4= "Select REGISTER.USERNAME from REGISTER,LIKES,LOCATION
	where REGISTER.USERNAME=LIKES.USERNAME AND REGISTER.USERNAME=LIKES.USERNAME
	AND SEX=$preference AND COLLEGE =$college AND HOBBIE=$array[1]";
	$result= mysqli_query($db, $sql4) or die('Error SQL !<br>'.$sql4.'<br>'.mysqli_connect_error());
	$row2 = mysqli_fetch_assoc($result);
	$num_rows2 = mysql_num_rows($result);
	$array2=[];
	while($row2 = mysqli_fetch_assoc($result)) {
		$array2[]=$row2['USERNAME'];
	}
	$OtherName=[];
	$OtherDOB=[];
	$OtherSex=[];
	$image=[];
	foreach($array2 as $value)
	{
		$sql5= "Select Select NAME,DOB,SEX,IMAGE from REGISTER
		where USERNAME=$value";
		$result= mysqli_query($db, $sql5) or die('Error SQL !<br>'.$sql5.'<br>'.mysqli_connect_error());
		$row3 = mysqli_fetch_assoc($result);
        $OtherName=$row3['NAME'];
        $OtherDOB=$row3['DOB'];
        $OtherSex=$row3['SEX'];
        $image=$row3['IMAGE'];
	}

	
?>