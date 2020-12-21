<!DOCTYPE html>
<html>
<head>
<title> Host Cloud </title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   

   <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <script src="jquery-2.1.4.js"></script>
    <link rel="stylesheet" type="text/css" href="styles.css" />


</script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 

<link rel="stylesheet" type="text/css" href="style.css">
<style>
i{
color: #008CBA;
margin-top: 10px;
}
form {
    display: block;

    margin-top: 0em;
}
@media (min-width: 768px)
.col-md-12 {
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%;
}
.form-control {
    display: block;
width: 80%;
margin-left: 40px;
    margin-top: 0em;

    background-color: transparent;

}
input[type=text], select {
  width: 80%;
  padding: 12px 10px;
  margin: px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 5px;
  ;
}

.button {
  background-color: #008CBA;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
   </style>




</head>
<body>


<?php include 'header.php';?>


 <!--- form !-->  

<div class="container">
     <div class="row" style="margin-top: 35px;">
    
	 
 <!--- form !-->   
<div class="col-md-6 col-sm-12 col-xs-12 col-lg-6" style="margin-bottom: 40px; margin-top: 20px;">
    <div class="form" >
	<p style="font-size: 25px;color: #00bcd4"> Fill The Form Here </p>
<fieldset> 
   <input style="margin-bottom: 20px; "height:10vh; font-size:15px" type="text" name="name" placeholder="Your Name" required="" id="uname"> 

</fieldset>
<fieldset>  
    <input style="margin-bottom: 20px; "height:10vh; font-size:15px" type="text" name="email" placeholder="Your Email" required="" id="email">

</fieldset>


    <input type="text" id="message" style="height:10vh; font-size:15px;margin-bottom: 15px;"  placeholder="Drop your message here">  

   
<button title="submit" style="text-align: center; margin-left: 20%;" class="button">

     Submit
</button>
            </div>
            

        </div>
         
<div class="col-md-6 col-sm-12 col-xs-12 col-lg-6" style="margin-bottom: 40px; margin-top: 30px;">
    <div class="form">

<p style="font-size: 25px;color: #00bcd4"> Contact Us </p>
<h1 style="font-size: 17px; margin-top: 20px;">  Let's keep in touch  </h1>
<h2 style="font-size: 17px; margin-top: 20px;">  Quisque sagittis blandit sapien et elementum. Fusce pretium viverra consequat. Aliquam at feugiat mi. Pellentesque hendrerit, felis ac sodales commodo   </h2>
<div class="division">
    
</div>
<div class="container">
    <div class="row" style="padding: 5px; font-size: 15px;">

<div class="col-md-6 col-sm-12">
    <ul style="list-style-type: none; font-size: 18px;" ><li>  <i class="fa fa-phone fa-rotate fa-2x" style="padding: 5px;margin-right: 10px;">   </i>  38444566557856 </li>


<li>  <i  class="fa fa-support fa-spin fa-2x"style="padding: 5px; margin-right: 10px;">   </i>  support@xyz.com</li>

    </ul>
    
</div>

<div class="col-md-6 col-sm-12">
    <ul style="list-style-type: none; font-size: 18px;"><li>  <i class="fa fa-envelope  fa-2x" style="padding: 5px;margin-right: 10px;"></i> contact@xyz.com   </li>


<li>  <i class="fa fa-globe fa-spin fa-2x"style="padding: 5px;margin-right: 10px;">   </i>  www.xyz.com</li>

    </ul>
    
</div>

</div>
</div>


            </div>
</div>
     </div>
     </div>


<?php require 'footer.php';?>

</body>
</html>