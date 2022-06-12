<html>
    <head>
    <link rel="stylesheet" href="style.css">
    
    <title>Admin Login</title>
   
    
</head>
<body>
    
    
    <form action="checkLogin.php" method="post">
    
        <div>
            <table class="form">
                <tr>
                    <td>
                       <input type="text" placeholder="Username" name="username">
                    </td>
                </tr>
                <tr>
                        <td>
                           <input type="password" placeholder="Password" name="password">
                        </td>
                </tr>
                <tr>
                    <td>
                        <input name="submit" type="submit" value="Submit" id="submit" onClick="clearform()"> 
                    </td> 
                </tr>

                <br><br>

                <tr>
                    <td>
                       <!-- <p>
                            <a href="register.php">Register Here</a>
                        </p> -->
                    </td>
                </tr>
                </div>


            </table>
        
    
    </form>
    </table>
  




  <?php
  
 //include 'checkLogin.php';
  ?>
   
   
</body>

</html>
