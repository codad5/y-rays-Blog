<?php 

    include_once "header.php";


?>
<section class="artwork-grid-style">
    <h1 class="section-header">MY ART-WORK</h1>
</section>



<section class="mainboard__container artwork_show">
    <?php
                $sql = "SELECT * FROM post ORDER BY prykey DESC;";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    // $n = 0;
                //   # code...
                  while ($row = mysqli_fetch_assoc($result)){
                //  $n++;
            
                echo '
                
            
                    <a href="veiw.php?image='.$row['prykey'].'" class="to-be-protected art-wrapper">
                        <div class="image_container">
                            <img src="img/'.$row['Photo1'].'" alt="" srcset="">
                        </div>
                        <div class="image-cover">
                        </div>
                    </a>
                    
                ';
            
            
                  }
            
                }
                ?>
</section>




<?php
    include_once "footer.php";
?>