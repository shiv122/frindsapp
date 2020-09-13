      <?php
include 'dbcon.php';
session_start();
?>



<?php 


                                   $sqll="SELECT * FROM all_user where id='".$_SESSION['log_user']."' ";
                                   $resultt = mysqli_query($conn ,$sqll);
                                   $roww = mysqli_fetch_assoc($resultt);

                                   $sql="SELECT * FROM message ORDER BY id";
                                   $result = mysqli_query($conn ,$sql);
                                         if (mysqli_num_rows($result) > 0)
                                            { ?>
                                                <div  class="card-body  chat-widget p-3 slimScroll" data-height="500" style="padding-top: 5px"> <?php

                                            $a= $_SESSION['log_user'];
$b= $roww['send_to'];
                                          
?>

<?php                                       
                                               
                                                while ($row = mysqli_fetch_assoc($result)){ 


                                                    ?>

                                  
                                    
                                        <!-- Use the class "float-left" in avatar -->
                                     <?php   if($row['from_user']==$b and $row['to_user']==$a)
                                            {
                                              $sql1="SELECT * FROM all_user where id='".$roww['send_to']."' ";
                                                $result1 = mysqli_query($conn ,$sql1);
                                                $row1 = mysqli_fetch_assoc($result1);
                                               
                                              echo " <ul class='list-unstyled'>";
                                              echo " <li class='by-me' >";
                                              echo "<div  class='avatar float-left'>";
                                         
                                        
                                           
                                         
                                          ?><img src='<?php echo $row1['image'] ?>' alt='' class='img-responsive'>"
                                          <?php
                                           
                                           echo "</div>";
            echo "  <div class='chat-content'>";
            echo "<div class='chat-meta'>";
                                   echo "<p style='text-align:left'>";
                                     $_SESSION['sender']=$row1['id'];
                                         echo $row['msg'];
                                         echo "</p>";
                                                echo "</div>";
                                           
                                          



                                             
                                              echo "</div>";
                                              echo "</li>";
                                              echo "</ul>";
                                           
                                       
          } 
                                
                                   
                                          if($row['from_user']==$a and $row['to_user']==$b)
                                            {
                                               $sql11="SELECT * FROM all_user where id='".$row['from_user']."' ";
                                                 $result11 = mysqli_query($conn ,$sql11);
                                                 $row11 = mysqli_fetch_assoc($result11);


                                            echo " <ul class='list-unstyled'>";
                                              echo " <li class='by-other'>";
                                              echo "<div class='avatar float-right'>";
                                              
                                      
                                            
                                         ?><img src='<?php echo $row11['image'] ?>' alt='' class='img-responsive'> &nbsp;"
                                         <?php
                                       echo "</div>";
                                         echo "  <div class='chat-content'style='background-color: #f6ffff'>";
            echo "<div class='chat-meta'> ";

$_SESSION['reciever']=$row11['id'];

                                      echo "<p style='text-align:right'>";
                                              echo $row['msg'];
                                              echo "</p>";

                                            
                                              echo "</div>";
                                              echo "</li>";
                                              echo "</ul>";
            } 
                                   continue; }
                                  } ?></div>
                                   