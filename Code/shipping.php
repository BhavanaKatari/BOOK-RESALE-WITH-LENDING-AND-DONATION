<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['login'])==0)
    {   
header('location:index.php');
}
else{ 


?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Online Library Management System | Shipping</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
      <!------MENU SECTION START-->
<?php include('includes/header.php');?>
<!-- MENU SECTION END-->
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Shipping</h4>
                
                            </div>

</div>
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<div class="panel panel-info">
<div class="panel-heading">
Shipping Info
</div>
<div class="panel-body">
<form role="form" method="post" enctype="multipart/form-data">

<div class="col-md-6">   
<div class="form-group">
<label>Full Name<span style="color:red;">*</span></label>
<input class="form-control" type="text" name="fullname" autocomplete="off"  required />
</div>
</div>

<div class="col-md-6">   
<div class="form-group">
<label>Mobile Number<span style="color:red;">*</span></label>
<input class="form-control" type="text" name="mobilenumber" autocomplete="off"  required />
</div>
</div>

<div class="col-md-6">   
<div class="form-group">
<label>Pincode<span style="color:red;">*</span></label>
<input class="form-control" type="text" name="pincode" autocomplete="off"  required />
</div>
</div>

<div class="col-md-6">   
<div class="form-group">
<label>Address <span style="color:red;">*</span></label>
<input class="form-control" type="text" name="Address" autocomplete="off"  required />
</div>
</div>



<div class="col-md-6">  
 <div class="form-group">
 <label>Expected Delivery<span style="color:red;">*</span></label>
 <input class="form-control" type="text" name="expecteddelivery" autocomplete="off"   required="required" />
 </div>
</div>

<div class="col-md-6">  
 <div class="form-group">
 <label>Order Details<span style="color:red;">*</span></label>
 <input class="form-control" type="text" name="orderDetails" autocomplete="off"   required="required" />
 </div>
</div>
<input type="radio" name="add" id="add" class="btn btn-info">Direct bank transfer :</input><br>

Specify your order number when you make the bank transfer. Your order will be shippied after the amount is credited to us.<br>
<button type="submit"  class="btn btn-info">Payment </button>

 </div>

</div>
 
                            </div>

        </div>
   
    </div>
    </div>
     <!-- CONTENT-WRAPPER SECTION END-->
  <?php include('includes/footer.php');?>
      <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
</body>
</html>
<?php } ?>
