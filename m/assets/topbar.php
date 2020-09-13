<?php

include 'dbcon.php';
?>

<?php
$sqll="SELECT * FROM all_user where id='".$_SESSION['log_user']."' ";
                                   $resultt = mysqli_query($conn ,$sqll);
                                   $roww = mysqli_fetch_assoc($resultt);

                                   $sql="SELECT * FROM all_user where id='".$roww['send_to']."' ";
                                   $result = mysqli_query($conn ,$sql);
                                   $row = mysqli_fetch_assoc($result);

                                 switch ($row['active_st']) {
                                     case '0':
                                         $a= 'Offline';
                                         $c='danger';
                                         break;
                                    case '1':
                                        $a= 'Online';
                                         $c='success';
                                         $d='blink';
                                        break;
                                     
                                     default:
                                         # code...
                                         break;
                                 }

                                   ?>
                    <div class="user-panel p-3 light teal-text mb-2 sticky" style="background-color: #e2f1ff; border-radius: 10px;">
               
                    <div class="float-left image">
                        <img class="user_avatar" src="<?php echo $row['image']; ?>" alt="User Image">&nbsp;&nbsp;&nbsp;&nbsp;
                    </div>
                    <div class="float-left info">
                        <h5 class="font-weight-light mt-2 mb-1"><?php echo $row['name']; ?></h5>
                        <a href="#"><i class="icon-circle text-<?php echo $c; ?> <?php echo $d; ?>"></i> &nbsp;<?php echo $a; ?></a>
                   
                </div>
                <div class="clearfix"></div>
            
            </div>