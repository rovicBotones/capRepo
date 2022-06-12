
<head>
    
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<button onclick="history.back()">Go Back</button>
<?php
include ('settings.php');
$username=$_POST['username'];
$password=$_POST['password'];
$sql=" SELECT * FROM `tbl_monitoringauto` where username='$username' and password='$password'";

$result = mysqli_query($variable,$sql);
$numRows = mysqli_num_rows($result);

if($numRows == 0){ 
    if($username == null && $password == null){
        echo "<script type='text/javascript'>alert('Please Input UserName and Password, Please try again');</script>";
    }else{
        echo "<script type='text/javascript'>alert('Sorry Wrong Username or password, Please Try Again');</script>";
    }
    
   
   
   


}
else {
    
    echo "<script type='text/javascript'>alert('Hello, $username');</script>"; 
   
    header("location: login.php");
    exit;
}



?>

</body>
</html>
