<?php
$connection = mysqli_connect('localhost','root','root','edubase');
if(!$connection)
{
    
    die("connection failed".mysqli_error($connection));
}
?>

<?php
        
            $q = intval($_GET['q']);
  
          
           $query="SELECT * FROM questionbank WHERE question_no= '$q'  ";
           $select_ques = mysqli_query($connection,$query);
      if(!$select_ques)
      {
          
          echo "query failed";
      }

           $selected=mysqli_fetch_assoc($select_ques);
      
                        $ques=$selected['question'];
                        $opt1=$selected['option1'];
                        $opt2=$selected['option2'];
                        $opt3=$selected['option3'];
                        $opt4=$selected['option4'];
                    

$flash.= "<p id='question'> $ques </p>";

  $flash.="<form action='' method='post'>";  

  $flash.="<input type='radio' name='answer' value='opt1'>  $opt1 <br>";
  $flash.="<input type='radio' name='answer' value='opt2'>  $opt2 <br>";
  $flash.="<input type='radio' name='answer' value='opt3'>  $opt3 <br>";
  $flash.="<input type='radio' name='answer' value='opt4'>  $opt4  <br>";
  $flash.="</form>";
echo $flash;

if(isset($_POST['answer']))
{
    echo "hello";
}


?>         

        
        
    