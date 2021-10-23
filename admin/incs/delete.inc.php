<?php

    require_once "dbh.inc.php";

    if (isset($_POST['data'])) {
        # code...
        $delpost = $_POST['data'];
        $sql = "SELECT * FROM post WHERE prykey='".$delpost."';";
        $resultfinal = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($resultfinal);

        function deleteImages($img){
            // if (unlink("../../img/".$img)) {
            //     # code...
            //     return false;
            // }
            if ($img !== "") {
                # code...
                if (file_exists("../../img/".$img)) {
                # code...
                // echo "This file $img exist \n";
                // unlink("../../img/".$img);
            }
            else {
                // echo "This file $img  dont exist \n";

                return true;

            }
            }
            
        }

            


                if ($row > 0) {
                    # code...
                    deleteImages($row['Photo1']);
                    deleteImages($row['Photo2']);
                    deleteImages($row['Photo3']);
                    deleteImages($row['Photo4']);
                    deleteImages($row['Photo5']);
                    
                    
                    
                    
                    $sql = "DELETE FROM post WHERE prykey='".$delpost."';";
                    $resultfinal = mysqli_query($conn, $sql);

                     $sql = "SELECT * FROM post;";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                    # code...
                    echo ' <summary style="text-align:left; left:0;margin-bottom:10px;padding:5px 10px; width:100%;background:linear-gradient(rgba(83, 5, 184, 0.89), rgb(82, 5, 184));">Click to View all post</summary>';
                    while ($row = $resultData = mysqli_fetch_assoc($result)){
                        

                        echo '<div class="gallery-show-card">
                        <div class="gallery-show-img">
                            <img src="../img/'.$row['Photo1'].'">
                            
                            <div class="gallery-img-hover-effect">
                                <form class="art" onsubmit="submitt('.$row['prykey'].', event)"> <button type="submit" class="" value="'.$row['prykey'].'" >DELETE</button></form>
                            </div>

                        </div>
                        <div class="gallery-img-abt">
                            '.$row['PostName'].'
                        </div>
                    </div> ';
                    echo "<script>
                        var noti = document.querySelector('.noti_msg');
                        
                        
                        noti.innerHTML = 'sucessfully Deleted';
                        noti.classList.add('succ_noti');
                        noti.style.display = 'inline-block';
                        setTimeout(function(){
                            // noti.classList.remove('succ_noti');
                            
                            noti.style.display = 'none';

                        }, 3000);
                    </script>";
                        

                    }
              
            }

                }


    }
    else {
        header("location:../index.php");
    }
?>