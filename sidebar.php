<?php
include 'dbcon.php';
?>

     <div class="col-md-3 d-none d-md-block text-truncate white b-r" >
                   
                    <div class="slimScroll "  data-height="500"  >
                        <ul  >
                            <?php 
                                        $sql="SELECT * FROM all_user where id!='".$_SESSION['log_user']."' ";
                                         $result = mysqli_query($conn ,$sql);
                                         if (mysqli_num_rows($result) > 0)
                                            {
                                                
                                                while ($row = mysqli_fetch_assoc($result)){ 

switch ($row['active_st']) {
                                     case '0':
                                         $a= 'offline';
                                         $c='danger';
                                         break;
                                    case '1':
                                        $a= 'online';
                                         $c='success';
                                         $d='blink';
                                        break;
                                     
                                     default:
                                         # code...
                                         break;
                                 }
                                                    ?>
                            <li style="border-radius: 10px;background-color: #e2f1ff;" ><a class="media p-4 b-b list-group-item-action" href="chat_director.php?id=<?php echo $row["id"]; ?>&name=msg_rep">
                                <div  class="avatar avatar-md mr-3">
                                    <img src="<?php echo $row['image']; ?>" alt="">
                                    <span class="avatar-badge has-indicator <?php echo $a; ?>">
                            <i  class="icon icon-check"></i>
                          </span>
                                </div>
                                <div class="media-body text-truncate">
                                    
                                    <h6><?php echo $row['name']; ?></h6>
                                    <span class="badge badge-success pt-1 pb-1 r-3 float-right">10</span>

                                    <small>last text.</small>
                                </div>
</a>
                            </li>
                            <?php }}?>
                        </ul>
                    </div>
                </div>
