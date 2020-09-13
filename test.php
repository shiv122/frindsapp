<?php
include 'dbcon.php';
?>


<!DOCTYPE html>
<html>
<head>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<div style="bottom: 1px;" class="card-footer bg-light sticky ">
                            <!-- Chat button -->
                            <?php 
                            $sqll="SELECT * FROM all_user where id='".$_SESSION['log_user']."' ";
                                   $resultt = mysqli_query($conn ,$sqll);
                                   $roww = mysqli_fetch_assoc($resultt);
                                   ?>
                                <div class="input-group">
                                    
                                    <button class="btn btn-outline-secondary b-0 mr-2"><i class="icon-smiling-face"></i></button>

                                    <input name="msg" onfocus="this.value=''"  id="msg" class="form-control"  placeholder="Type your message..." type="text">

           &nbsp;&nbsp;
           
                                 
                                        <button id="butsave" name="butsave" id="butsave" class="btn btn-primary">Send</button>

                                        <input type="text"  value=" <?php echo $_SESSION['log_user'] ; ?>" class="form-control" id="name" hidden placeholder="Name" name="name">
                                        <input type="email" value="<?php echo $roww['send_to'];  ?>" class="form-control" hidden id="email" placeholder="Email" name="email">
                                 
                                
                          
                        </div>
                    </div>
                </div>
			
			
		</div>
	
		
		
	</form>
</div>

<script>
$(document).ready(function() {
	$('#butsave').on('click', function() {
		
		var name = $('#name').val();
		var email = $('#email').val();
		var phone = $('#msg').val();
		
		if(name!="" && email!="" && phone!="" ){
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
						

					}
					else if(dataResult.statusCode==201){
					   alert("Error occured !");
					}
					
				}
			});
		}
		else{
			alert('Please fill all the field !');
		}
	});
});
</script>
</body>
</html>