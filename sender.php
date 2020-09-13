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
    function a()

 {
    
        alert('clicked');
      
        var name =<?php echo $_SESSION['reciever']; ?>;
        var email = <?php echo $_SESSION['sender']; ?>;
        var phone = $('#msg').val();
        
       
            $.ajax({
                url: "send.php",
                type: "POST",
                data: {
                    name: name,
                    email: email,
                    phone: phone,
                                    
                },
                cache: false,
                success: function(dataResult){
                    var dataResult = JSON.parse(dataResult);
                    if(dataResult.statusCode==200){
                   alert('success');                     
                    }
                    else if(dataResult.statusCode==201){
                       alert("Error occured !");
                    }
                    
                }
            });
        
        else{
            alert('Please fill all the field !');
        }
  
 }
</script>
    <!-- Js -->
    <!--
    --- Head Part - Use Jquery anywhere at page.
    --- http://writing.colin-gourlay.com/safely-using-ready-before-including-jquery/
    -->
    <script>(function(w,d,u){w.readyQ=[];w.bindReadyQ=[];function p(x,y){if(x=="ready"){w.bindReadyQ.push(y);}else{w.readyQ.push(x);}};var a={ready:p,bind:p};w.$=w.jQuery=function(f){if(f===d||f===u){return a}else{p(f)}}})(window,document)</script>
</head>

                         <form id="fupForm" name="form1" method="post" >
                        <div class="card-footer bg-light">
                            <!-- Chat button -->
                           
                                <div class="input-group">
                                    <button class="btn btn-outline-secondary b-0 mr-2"><i class="icon-image"></i></button>
                                    <button class="btn btn-outline-secondary b-0 mr-2"><i class="icon-face-glasses"></i></button>
                                    <input name="msg" id="msg" class="form-control"  placeholder="Type your message..." type="text">
<div class="form-group">
           
           
                                    <span class="input-group-btn ml-2">
                                        <button id="butsave" name="butsave" onclick="a();" class="btn btn-primary">Send</button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>
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
