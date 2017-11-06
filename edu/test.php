
<?php

 if(isset($_POST['show']))
    {
      echo $_POST['show'];  
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
  <form action="" method="post">
       <input type="radio" name="gender" value="male">male
       <input type="radio" name="gender" value="female">female
     <input type="submit" id="submit" name="submit" value="submit">
    </form>
 
  
                     
</body>
</html>
  