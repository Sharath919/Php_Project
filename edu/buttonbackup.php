

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="irstyle.css">
   <style>
    
       
      /* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 15% auto; /* 15% from the top and centered */
    padding: 20px;
    border: 1px solid #888;
    height:70px;
    width: 50%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}    
 
    
    
    
    
    
    </style>



</head>
<body>
    <div id="head">
       Practice Exam 2
    </div> 
    
    <div id="quesName">
        Question name
    </div>
       
    <div id="quesDisplay">
        
    

 <div id="questionBox">
     <p style="margin-top:100px; margin-left:120px;">DOUBLE CLICK NEXT FOR YOUR QUESTIONS</p>
      
    </div>

           
        
      
    </div> 
        <input type ="button" class="impButton" name="help" value="Help ?" style="margin-left:15px" >
        <input type ="button" class="impButton" name="help" value="End Exam" >
        <input type ="button" class="impButton" name="help" value="Pause Exam" >
        <div class="footer"></div>
        <input type ="button" class="impButton" name="help" value="Next ->" id="nextquestionbutton" onclick="nextQuestion()" >                   
                                                        
        
    

 
        <!-- alert box -->
                       
        <!-- Trigger/Open The Modal -->


<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p> Your answer</p>
    <p id="selected_answer"></p>
    <button style="float:right ;margin-right:05px;" id="confirm"> confirm</button>
<button  style="float:right;margin-right:05px;" id="cancel"> cancel </button>
  </div>

</div>               
      
     
    
   
    
    
    
    
    
    <script language="javascript" type="text/javascript">
      var count = 1;  
        
    function nextQuestion()
        {
          
            var button = document.getElementById('nextquestionbutton');
               
               button.onclick = function() {
                
                   if(count==1)
                       {
                           
                         var ajaxRequest  = new XMLHttpRequest();
             ajaxRequest.onreadystatechange = function() {
            if (ajaxRequest.readyState == 4 ) {
                
                var ajaxDisplay= document.getElementById('questionBox');
                ajaxDisplay.innerHTML=ajaxRequest.responseText; 
                
        
            }
        }
     ajaxRequest.open("GET","getnewquestion.php?q="+count,true);
  ajaxRequest.send(); 
                           count += 1;
                           
                       }
                   
                   
                   else
                   {
                 
        // Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("nextquestionbutton");
                       
var confirm = document.getElementById("confirm");                       
var cancel = document.getElementById("cancel");  

confirm.onclick=function()
{
      
  
    var ajaxRequest  = new XMLHttpRequest();
             ajaxRequest.onreadystatechange = function() {
            if (ajaxRequest.readyState == 4 ) {
                
                var ajaxDisplay= document.getElementById('questionBox');
                ajaxDisplay.innerHTML=ajaxRequest.responseText; 
                
        
            }
        }
     ajaxRequest.open("GET","getnewquestion.php?q="+count,true);
  ajaxRequest.send();
    count += 1;
     modal.style.display = "none";
}

cancel.onclick=function()
{
    
     modal.style.display = "none";
}

                       

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}



    
}
                 
                   
  }
        }
        
    
      
        
</script>
    
    
    
    
</body>
</html>