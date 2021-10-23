

<?php
    include_once "header.php";
?>
<?php

                $getImageId = $_GET['image'];
                $sql = "SELECT * FROM post WHERE prykey = ".$getImageId.";";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($result);

                if ($row <= 0) {
                    # code...
                    echo "<script>
                        window.history.back();
                    </script>";
                }
?>
<section class="title_bar">
    <?php  echo $row['PostName'];?>
</section>
<section class="veiwbox">
    
    <div class="image_veiw_box">
        <div class="large_veiw">

                <?php
            
                if ($row > 0) {
                    // $n = 0;
                //   # code...
                  
                //  $n++;

                
                    # code...
                    
                        echo '<img src="img/'.$row['Photo1'].'"  id="makethisbig">';
                  
            
              
            
            
                  
            
                }
                // else{
                //     echo "<script>
                //         window.history.back();
                //     </script>";
                // }
                ?>



        </div>
        <div class="small_veiw">
            <?php
            
                if ($row > 0) {
                    // $n = 0;
                //   # code...
                  
                //  $n++;

                for ($i=1; $i < 6; $i++) { 
                    # code...
                    if($row['Photo'.$i] !== ""){
                        echo '<img src="img/'.$row['Photo'.$i].'" onclick="makethisbig(this)" class="img_small">';
                    }
                }
            
              
            
            
                  
            
                }
                // else{
                //     echo "<script>
                //         window.history.back();
                //     </script>";
                // }
                ?>
        </div>
    </div>
</section>
<section class="art_desc_veiwbox">
        <p>
            <?php
            echo "".$row['postText']."";
            ?>
        </p>
</section>

<section class="related_art">
    <div class="div_wrapper">
        <?php
        $similar = $row['category'];
               $sql = "SELECT * FROM post WHERE prykey != '$getImageId' AND category LIKE '%$similar%' OR PostName LIKE '%$similar%' LIMIT 10;";
                  $result = mysqli_query($conn, $sql);
                  if (mysqli_num_rows($result) > 0) {
                    # code...
                    while ($row = $resultData = mysqli_fetch_assoc($result)){
        
                      echo '<div class="gallery-show-card">
                      <div class="gallery-show-img to-be-protected">
                          <img src="img/'.$row['Photo1'].'">
                          <div class="image-cover"> <a href="veiw.php?image='.$row['prykey'].'" class="call_to_action">View More</a> </div>
                        </div>
                          <div class="veiw_panel">
                                <div class="gallery-img-abt">
                          '.$row['PostName'].'
                             </div>
                              
                          </div>
                      </div>
                      
                   ';
        
                    }
        
                  }
        ?>
    </div>
</section>

<script>
    document.querySelector("main").addEventListener("scroll", function() {
        // console.log(window.screenY);
    let mainbody = document.querySelector("main");
    let hero_section = document.querySelector(".veiwbox");
    let header = document.querySelector("header");
   
    // console.log(hero_section.innerText);

    if (hero_section.getBoundingClientRect().top <= 10) {
    header.style.backgroundColor = "var(--color-main)";
        
         
    }
    
    else {
        
         header.style.backgroundColor = "transparent";

    }
     if (document.querySelector(".related_art").getBoundingClientRect().top <= 50){
    header.style.backgroundColor = "transparent";

    }
    });
</script>
<?php
    include_once "footer.php";
?>