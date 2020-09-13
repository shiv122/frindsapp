<?php
include 'dbcon.php';
session_start();
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
   
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/img/basic/favicon.ico" type="image/x-icon">
    <title>Paper</title>
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/app.css">
    <style>
        .loader {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: #F5F8FA;
            z-index: 9998;
            text-align: center;
        }

        .plane-container {
            position: absolute;
            top: 50%;
            left: 50%;
        }
    </style>
    <script >
		$(document).ready(function(e) {
  debugger;
setInterval(function(){ 
   $.ajax({
            //data :{action: "showroom"},
            url  :"load_comm.php", //php page URL where we post this data to view from database
            type :'POST',
            success: function(data){
                $("#cot").html(data);
            }
        });
}, 1000);
 
 
 
});
</script>

    <!-- Js -->
    <!--
    --- Head Part - Use Jquery anywhere at page.
    --- http://writing.colin-gourlay.com/safely-using-ready-before-including-jquery/
    -->
    <script>(function(w,d,u){w.readyQ=[];w.bindReadyQ=[];function p(x,y){if(x=="ready"){w.bindReadyQ.push(y);}else{w.readyQ.push(x);}};var a={ready:p,bind:p};w.$=w.jQuery=function(f){if(f===d||f===u){return a}else{p(f)}}})(window,document)</script>
</head>
<body>
<!-- Pre loader -->
<div id="loader" class="loader">

</div>

   
</div>

 
    <div class="container-fluid" >

        <div class="card my-3 shadow b-0" >

            <div class="row no-gutters" >
                 <?php include 'sidebar.php'; ?>

                <div  class="col-md-9 col-sm-12 white">
                   
                   <?php include 'm/assets/topbar.php'; ?>
                   

                        

                            

<div id="cot" >
	
	


</div>





                           
                           
                        <?php include 'test.php'; ?>
                        
            </div>
        </div></div></div>
        </div>

    </div>
</div>
<!-- Right Sidebar -->

<!-- /.right-sidebar -->
<!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
<div class="control-sidebar-bg shadow white fixed"></div>
</div>
<!--/#app -->
<script src="assets/js/app.js"></script>



<!--
--- Footer Part - Use Jquery anywhere at page.
--- http://writing.colin-gourlay.com/safely-using-ready-before-including-jquery/
-->
<script>(function($,d){$.each(readyQ,function(i,f){$(f)});$.each(bindReadyQ,function(i,f){$(d).bind("ready",f)})})(jQuery,document)</script>
</body>
</html>