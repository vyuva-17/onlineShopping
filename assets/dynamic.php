<?php
 $id = $_GET['id'];
$host = 'localhost:3306';  
$user = '';  
$pass = ''; 
$db='test' ;
$conn= mysqli_connect($host, $user, $pass,$db);  
if(! $conn )  
{  
  die('Could not connect: ' . mysqli_error());  
}  
$sqll = 'SELECT * FROM sheet1 '; 
$retval=mysqli_query($conn, $sqll); 

  if(mysqli_num_rows($retval) > 0){  
 while($row = mysqli_fetch_assoc($retval)){  
    if($id==$row['pid']){
      for($f=0;$f<9;$f++){
        switch($f){
          case 0:

    if( 1==$row['id']){
   $p1=$row['path'];
   $n1=$row['name'];
   $r1=$row['rupees'];
   $pn1=$row['pname'];
 }
break;
case 1:
   
    if(2==$row['id']){
   $p2=$row['path'];
    $n2=$row['name'];
    $r2=$row['rupees'];
    $pn1=$row['pname'];
  }
   break;
   case 2:
   
    if(3==$row['id']){
   $p3=$row['path'];
    $n3=$row['name'];
    $r3=$row['rupees'];
    $pn1=$row['pname'];
  }
   break;
   
   case 3:
   
    if(4==$row['id']){
   $p4=$row['path'];
    $n4=$row['name'];
    $r4=$row['rupees'];
    $pn1=$row['pname'];
  }
   break;
   case 4:
   
    if(5==$row['id']){
   $p5=$row['path'];
    $n5=$row['name'];
    $r5=$row['rupees'];
    $pn1=$row['pname'];
  }
   break;
   case 5:
   
    if(6==$row['id']){
   $p6=$row['path'];
    $n6=$row['name'];
    $r6=$row['rupees'];
    $pn1=$row['pname'];
  }
   break;
   case 6:
   
    if(7==$row['id']){
   $p7=$row['path'];
    $n7=$row['name'];
    $r7=$row['rupees'];
    $pn1=$row['pname'];
  }
   break;
   case 7:
   
    if(8==$row['id']){
   $p8=$row['path'];
    $n8=$row['name'];
    $r8=$row['rupees'];
    $pn1=$row['pname'];
  }
   break;
   case 8:
   
    if(9==$row['id']){
   $p9=$row['path'];
    $n9=$row['name'];
    $r9=$row['rupees'];
    $pn1=$row['pname'];
  }
   break;

    }}}}}
 mysqli_close($conn); 
?>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
      <link rel="stylesheet"  type="text/css" href=".\css\bootstrap.min.css">
      <link rel="stylesheet"  type="text/css" href=".\css\w3.css">
      <link rel="stylesheet"   href="assets/css/font-awesome.main.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href=".\css\material.css" rel="stylesheet">
      <script src=".\js\jquery.min.js"></script>
      <script src=".\js\bootstrap.min.js"></script>
      <script src=".\js\goto.js"></script>
      <script src=".\js\w3.js"></script>
      <link rel="stylesheet"  type="text/css" href=".\css\external.css">
   </head>
   <body>
      <div w3-include-html="header.html"></div>
      <script >
         w3.includeHTML();
      </script>
       <?php 

   
?>
      <div class="w3-content  w3-center" style="padding-top:5%;color:teal; ">
         <h1> <?php echo $pn1;?> </h1>
      </div>
      <div class="w3-row-padding w3-theme">
         <div class="w3-third w3-section">
            <div class="w3-card-4 w3-center">
            <img src="<?php echo $p1;?>" style="width:65%; height:30%;"onclick="document.getElementById('modal01').style.display='block'">
               <div class="w3-container w3-teal">
                  <h4><?php echo $n1;?></h4>
                  <h4><?php echo $r1;?></h4>
               </div>
            </div>
         </div>
         <div class="w3-third w3-section">
            <div class="w3-card-4 w3-center">
               <img src="<?php echo $p2;?>" style="width:65%; height:30%;"onclick="document.getElementById('modal02').style.display='block'">
               <div class="w3-container w3-teal">
                  <h4><?php echo $n2;?></h4>
                  <h4><?php echo $r2;?></h4>
               </div>
            </div>
         </div>
         <div class="w3-third w3-section">
            <div class="w3-card-4 w3-center">
               <img src="<?php echo $p3;?>" style="width:65%; height:30%;"onclick="document.getElementById('modal03').style.display='block'">
               </a>
               <div class="w3-container w3-teal">
                  <h4><?php echo $n3;?></h4>
                  <h4><?php echo $r3;?></h4>
               </div>
            </div>
            <br><br><br>
         </div>
      </div>
      <div class="w3-row-padding w3-theme">
         <div class="w3-third w3-section">
            <div class="w3-card-4 w3-center">
               <img src="<?php echo $p4;?>" style="width:65%; height:30%;"onclick="document.getElementById('modal04').style.display='block'">
               <div class="w3-container w3-teal">
                 <h4><?php echo $n4;?></h4>
                  <h4><?php echo $r4;?></h4>
               </div>
            </div>
         </div>
         <div class="w3-third w3-section">
            <div class="w3-card-4 w3-center">
              
               <img src="<?php echo $p5;?>" style="width:65%; height:30%;"onclick="document.getElementById('modal05').style.display='block'">
              
               <div class="w3-container w3-teal">
                  <h4><?php echo $n5;?></h4>
                  <h4><?php echo $r5;?></h4>
               </div>
            </div>
         </div>
         <div class="w3-third w3-section">
            <div class="w3-card-4 w3-center">
              
               <img src="<?php echo $p6;?>" style="width:65%; height:30%;"onclick="document.getElementById('modal06').style.display='block'">
              
               <div class="w3-container w3-teal">
                 <h4><?php echo $n6;?></h4>
                  <h4><?php echo $r6;?></h4>
               </div>
            </div>
            <br><br><br>
         </div>
      </div>
      <div class="w3-row-padding w3-theme">
         <div class="w3-third w3-section">
            <div class="w3-card-4 w3-center">
               
               <img src="<?php echo $p7;?>" style="width:65%; height:30%;"onclick="document.getElementById('modal07').style.display='block'">
               <div class="w3-container w3-teal">
                 <h4><?php echo $n7;?></h4>
                  <h4><?php echo $r7;?></h4>
               </div>
            </div>
         </div>
         <div class="w3-third w3-section">
            <div class="w3-card-4 w3-center">
             
               <img src="<?php echo $p8;?>" style="width:65%; height:30%;"onclick="document.getElementById('modal08').style.display='block'">
              
               <div class="w3-container w3-teal">
                 <h4><?php echo $n8;?></h4>
                  <h4><?php echo $r8;?></h4>
               </div>
            </div>
         </div>
         <div class="w3-third w3-section">
            <div class="w3-card-4 w3-center">
             
               <img src="<?php echo $p9;?>" style="width:65%; height:30%;"onclick="document.getElementById('modal09').style.display='block'">
             
               <div class="w3-container w3-teal">
                  <h4><?php echo $n9;?></h4>
                  <h4><?php echo $r9;?></h4>
               </div>
            </div>
            <br><br><br>
         </div>
      </div>
      <div id="modal01" class="w3-modal" onclick="this.style.display='none'">
    
    <div class="w3-modal-content w3-animate-zoom">

       <div class="w3-card-4 w3-center">
        <span class="w3-button w3-hover-grey w3-teal w3-xlarge w3-display-topright">&times;</span>

               <img src="<?php echo $p1;?>" class="resposive"onclick="document.getElementById('modal01').style.display='block'">
               <div class="w3-container w3-teal">
                  <h4><?php echo $n1;?></h4>
                  <h4><?php echo $r1;?></h4>
               </div>
            </div>
            <div class="w3-row-padding">
<div class="w3-half">
<form method="post" action="cart.php">
<button class="w3-button w3-block w3-container w3-section w3-teal w3-ripple w3-padding" style="width:70%; padding-left:30%; margin-left:10%;">Add to cart >> </button>
</form></div>
<div class="w3-half">
<form method="get" action="payment.php">
<button class="w3-button w3-block w3-container w3-section w3-teal w3-ripple w3-padding" style="width:70%; padding-left:30%; float:right; padding-bottom:340%;  margin-left:290%; ">Buy Now >> </button>
</form></div></div>
  </div>
</div>
  
  <div id="modal02" class="w3-modal" onclick="this.style.display='none'">
    
    <div class="w3-modal-content w3-animate-zoom">
       <div class="w3-card-4 w3-center">
         <span class="w3-button w3-hover-grey w3-teal w3-xlarge w3-display-topright">&times;</span>
               <img src="<?php echo $p2;?>" class="resposive"onclick="document.getElementById('modal02').style.display='block'">
               <div class="w3-container w3-teal">
                  <h4><?php echo $n2;?></h4>
                  <h4><?php echo $r2;?></h4>
               </div>
            </div>
            <div class="w3-row-padding">
<div class="w3-half">
<form method="post" action="cart.php">
<button class="w3-button w3-block w3-container w3-section w3-teal w3-ripple w3-padding" style="width:70%; padding-left:30%; margin-left:10%;">Add to cart >> </button>
</form></div>
<div class="w3-half">
<form method="get" action="payment.php">
<button class="w3-button w3-block w3-container w3-section w3-teal w3-ripple w3-padding" style="width:70%; padding-left:30%; float:right; padding-bottom:340%;  margin-left:290%; ">Buy Now >> </button>
</form></div></div>
  </div>
</div>
 <div id="modal03" class="w3-modal" onclick="this.style.display='none'">
    
    <div class="w3-modal-content w3-animate-zoom">
       <div class="w3-card-4 w3-center">
         <span class="w3-button w3-hover-grey w3-teal w3-xlarge w3-display-topright">&times;</span>
               <img src="<?php echo $p3;?>" class="resposive"onclick="document.getElementById('modal03').style.display='block'">
               <div class="w3-container w3-teal">
                  <h4><?php echo $n3;?></h4>
                  <h4><?php echo $r3;?></h4>
               </div>
            </div>
            <div class="w3-row-padding">
<div class="w3-half">
<form method="post" action="cart.php">
<button class="w3-button w3-block w3-container w3-section w3-teal w3-ripple w3-padding" style="width:70%; padding-left:30%; margin-left:10%;">Add to cart >> </button>
</form></div>
<div class="w3-half">
<form method="get" action="payment.php">
<button class="w3-button w3-block w3-container w3-section w3-teal w3-ripple w3-padding" style="width:70%; padding-left:30%; float:right; padding-bottom:340%;  margin-left:290%; ">Buy Now >> </button>
</form></div></div>
  </div>
</div>
<div id="modal04" class="w3-modal" onclick="this.style.display='none'">
   
    <div class="w3-modal-content w3-animate-zoom">
       <div class="w3-card-4 w3-center">
         <span class="w3-button w3-hover-grey w3-teal w3-xlarge w3-display-topright">&times;</span>
               <img src="<?php echo $p3;?>" class="resposive"onclick="document.getElementById('modal04').style.display='block'">
               <div class="w3-container w3-teal">
                  <h4><?php echo $n4;?></h4>
                  <h4><?php echo $r4;?></h4>
               </div>
            </div>
            <div class="w3-row-padding">
<div class="w3-half">
<form method="post" action="cart.php">
<button class="w3-button w3-block w3-container w3-section w3-teal w3-ripple w3-padding" style="width:70%; padding-left:30%; margin-left:10%;">Add to cart >> </button>
</form></div>
<div class="w3-half">
<form method="get" action="payment.php">
<button class="w3-button w3-block w3-container w3-section w3-teal w3-ripple w3-padding" style="width:70%; padding-left:30%; float:right; padding-bottom:340%;  margin-left:290%; ">Buy Now >> </button>
</form></div></div>
  </div>
</div><div id="modal05" class="w3-modal" onclick="this.style.display='none'">
  
    <div class="w3-modal-content w3-animate-zoom">
       <div class="w3-card-4 w3-center">
         <span class="w3-button w3-hover-grey w3-teal w3-xlarge w3-display-topright">&times;</span>
               <img src="<?php echo $p5;?>" class="resposive"onclick="document.getElementById('modal05').style.display='block'">
               <div class="w3-container w3-teal">
                  <h4><?php echo $n5;?></h4>
                  <h4><?php echo $r5;?></h4>
               </div>
            </div>
            <div class="w3-row-padding">
<div class="w3-half">
<form method="post" action="cart.php">
<button class="w3-button w3-block w3-container w3-section w3-teal w3-ripple w3-padding" style="width:70%; padding-left:30%; margin-left:10%;">Add to cart >> </button>
</form></div>
<div class="w3-half">
<form method="get" action="payment.php">
<button class="w3-button w3-block w3-container w3-section w3-teal w3-ripple w3-padding" style="width:70%; padding-left:30%; float:right; padding-bottom:340%;  margin-left:290%; ">Buy Now >> </button>
</form></div></div>
  </div>
</div>
<div id="modal06" class="w3-modal" onclick="this.style.display='none'">
    
    <div class="w3-modal-content w3-animate-zoom">
       <div class="w3-card-4 w3-center">
         <span class="w3-button w3-hover-grey w3-teal w3-xlarge w3-display-topright">&times;</span>
               <img src="<?php echo $p6;?>" class="resposive"onclick="document.getElementById('modal06').style.display='block'">
               <div class="w3-container w3-teal">
                  <h4><?php echo $n6;?></h4>
                  <h4><?php echo $r6;?></h4>
               </div>
            </div>
            <div class="w3-row-padding">
<div class="w3-half">
<form method="post" action="cart.php">
<button class="w3-button w3-block w3-container w3-section w3-teal w3-ripple w3-padding" style="width:70%; padding-left:30%; margin-left:10%;">Add to cart >> </button>
</form></div>
<div class="w3-half">
<form method="get" action="payment.php">
<button class="w3-button w3-block w3-container w3-section w3-teal w3-ripple w3-padding" style="width:70%; padding-left:30%; float:right; padding-bottom:340%;  margin-left:290%; ">Buy Now >> </button>
</form></div></div>
  </div>
</div>
<div id="modal07" class="w3-modal" onclick="this.style.display='none'">
    
    <div class="w3-modal-content w3-animate-zoom">
       <div class="w3-card-4 w3-center">
         <span class="w3-button w3-hover-grey w3-teal w3-xlarge w3-display-topright">&times;</span>
               <img src="<?php echo $p7;?>" class="resposive"onclick="document.getElementById('modal07').style.display='block'">
               <div class="w3-container w3-teal">
                  <h4><?php echo $n7;?></h4>
                  <h4><?php echo $r7;?></h4>
               </div>
            </div>
            <div class="w3-row-padding">
<div class="w3-half">
<form method="post" action="cart.php">
<button class="w3-button w3-block w3-container w3-section w3-teal w3-ripple w3-padding" style="width:70%; padding-left:30%; margin-left:10%;">Add to cart >> </button>
</form></div>
<div class="w3-half">
<form method="get" action="payment.php">
<button class="w3-button w3-block w3-container w3-section w3-teal w3-ripple w3-padding" style="width:70%; padding-left:30%; float:right; padding-bottom:340%;  margin-left:290%; ">Buy Now >> </button>
</form></div></div>
  </div>
</div>
<div id="modal08" class="w3-modal" onclick="this.style.display='none'">
   
    <div class="w3-modal-content w3-animate-zoom">
       <div class="w3-card-4 w3-center">
         <span class="w3-button w3-hover-grey w3-teal w3-xlarge w3-display-topright">&times;</span>
               <img src="<?php echo $p8;?>" class="resposive"onclick="document.getElementById('modal08').style.display='block'">
               <div class="w3-container w3-teal">
                  <h4><?php echo $n8;?></h4>
                  <h4><?php echo $r8;?></h4>
               </div>
            </div>
            <div class="w3-row-padding">
<div class="w3-half">
<form method="post" action="cart.php">
<button class="w3-button w3-block w3-container w3-section w3-teal w3-ripple w3-padding" style="width:70%; padding-left:30%; margin-left:10%;">Add to cart >> </button>
</form></div>
<div class="w3-half">
<form method="get" action="payment.php">
<button class="w3-button w3-block w3-container w3-section w3-teal w3-ripple w3-padding" style="width:70%; padding-left:30%; float:right; padding-bottom:340%;  margin-left:290%; ">Buy Now >> </button>
</form></div></div>
  </div>
</div>
<div id="modal09" class="w3-modal" onclick="this.style.display='none'">
    <div class="w3-modal-content w3-animate-zoom">
       <div class="w3-card-4 w3-center">
         <span class="w3-button w3-hover-grey w3-teal w3-xlarge w3-display-topright">&times;</span>
               <img src="<?php echo $p9;?>" class="resposive"onclick="document.getElementById('modal09').style.display='block'">
               <div class="w3-container w3-teal">
                  <h4><?php echo $n9;?></h4>
                  <h4><?php echo $r9;?></h4>
               </div>
            </div>
            <div class="w3-row-padding">
<div class="w3-half">
<form method="post" action="cart.php">
<button class="w3-button w3-block w3-container w3-section w3-teal w3-ripple w3-padding" style="width:70%; padding-left:30%; margin-left:10%;">Add to cart >> </button>
</form></div>
<div class="w3-half">
<form method="get" action="payment.php">
<button class="w3-button w3-block w3-container w3-section w3-teal w3-ripple w3-padding" style="width:70%; padding-left:30%; float:right; padding-bottom:340%;  margin-left:290%; ">Buy Now >> </button>
</form></div></div>
  </div>
</div>
      <div w3-include-html="footer.html"></div>
   </body>
</html>