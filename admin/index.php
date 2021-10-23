<?php
require "incs/dbh.inc.php";


?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Digital Art&amp; Design Studio, Our Mission, Need Amazing Design?, What We Offer:, Branding &amp; Design, Creative Thinking, About Us &amp; Our Work, 8k, 10k, 15k, Do you need a consultation?, Our Portfolio, Development, Leadership, Relevance">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Home</title>
    

    
    
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Roboto+Condensed:300,300i,400,400i,700,700i|Oswald:200,300,400,500,600,700">
    <link  rel="stylesheet" href="css/master.css"/>
    <link  rel="stylesheet" href="css/Blog-Template.css"/>
    <link  rel="stylesheet" href="css/Post-Template.css"/>
    <link  rel="stylesheet" href="css/Home.css"/>
    <link  rel="stylesheet" href="css/smscreen.css"/>
    <link rel="stylesheet" href="../css/animate/animate.min.css">
    <script src="../scripts/jquery-3.6.0.min.js"></script>
    
    
    
    
    
    
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"url": "index.php",
		"logo": "#"
}</script>
  
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#f49ea8">
    <link rel="canonical" href="index.php">
    <meta property="og:url" content="../index.php">
  </head>
  <body data-home-page="Home.html" data-home-page-title="Home" class="u-body">

      <main>

     
      <section class="admin-gallery-add-section">
        
          <?php
            if (isset($_GET['error'])) {
              # code...
              switch ($_GET['error']) {
                case 'uploadsucess':
                  # code...
                  echo '<div class="noti_msg succ_noti animate__animated animate__fadeIn">Upload sucess';
                  break;
                  
                  case 'NoImage':
                    # code...
                    echo '<div class="noti_msg error_noti animate__animated animate__fadeIn">No image found';
                    break;
                    case 'stmtfailed':
                    echo '<div class="noti_msg error_noti animate__animated animate__fadeIn">An error occurred';
                      # code...
                      break;
                      case 'emptyform':
                        # code...
                        echo '<div class="noti_msg error_noti animate__animated animate__fadeIn">Fill in all fields';
                        break;
                    default:
                      echo '<div class="noti_msg succ_noti animate__animated animate__fadeIn">Hello Y-ray';

              }
            }
            else {
              echo '<div class="noti_msg succ_noti animate__animated animate__fadeIn">Hello Y-ray';
            }
          ?>
          
        </div>

        <div class="admin-gallery-cnt">
            <div class="form-cnt">
                <form action="incs/submit.inc.php" method="post" enctype="multipart/form-data">
                    <div class="input-details">
                        <label for="">Post Title</label>
                        <input type="text" name="title" id="title" placeholder="Article Title">
                    </div>
                    <div class="input-details">
                        <label for="">Post Description</label>
                        <textarea  name="Description" id="Description" placeholder="Description"></textarea>
                    </div>
                    <!-- <div class="input-details">
                        <label for="">Post Tags</label>
                        <input type="text" name="tags" id="tags" placeholder="Tags:: Use , to space Tags">

                    </div> -->
                     <!-- <div class="input-details">
                        <label for="">Facebook Link</label>
                        <input type="text" name="Facebook" id="Instagram" placeholder="Facebook Link">
                    </div>
                     <div class="input-details">
                        <label for="">Instagram Link</label>
                        <input type="text" name="Instagram" id="Instagram" placeholder="Instagram Link">
                    </div>
                     <div class="input-details">
                        <label for="">Artstation Link</label>
                        <input type="text" name="Artstation" id="Artstation" placeholder="Artstation Link">
                    </div> -->
                    <div class="input-details">
                        <label for="">Post Category</label>
                        <select name="Category" id="Category">
                          <option>Game</option>
                          <option value="Cartoon">Cartoons</option>
                          <option value="Cartoon">Wallpaper</option>
                        </select>
                    </div>
                    <div class="input-details file-details">
                        <label for="">Select Images</label>
                        <div class="image-input img-input-1"><img src="" class="preview-input-img img-pre-1">
                        <input type="file"  name="image1" id="Image1"  onchange="loadFile(event, 1)">
                    </div>

                    <div class="image-input img-input-2"><img src="" class="preview-input-img img-pre-2">
                        <input type="file"  name="image2" id="Image2"  onchange="loadFile(event, 2)">
                    </div>

                    <div class="image-input img-input-3"><img src="" class="preview-input-img img-pre-3">
                        <input type="file"  name="image3" id="Image3"  onchange="loadFile(event, 3)">
                    </div>

                    <div class="image-input img-input-4"><img src="" class="preview-input-img img-pre-4">
                        <input type="file"  name="image4" id="Image4"  onchange="loadFile(event, 4)">
                    </div>

                     <div class="image-input img-input-5"><img src="" class="preview-input-img img-pre-5">
                        <input type="file"   name="image5" id="Image5"  onchange="loadFile(event, 5)">
                    </div>
                        
                    </div>
                    
                     <div class="input-details ">
                        <label for="">Select zip file</label>
                          <input type="file" name="zipfile" id="zipfile" placeholder="" style="opacity:1;" accept=".zip">

                    </div>
                     <div class="input-details">
                        <label for="">Submit to Gallery</label>
                        <button  name="submit" id="submit" value="submit">Submit</button>
                    </div>
                </form>
            </div>

        </div>

      </section>
       <section>
         <details class="gallery-show-section">
         <summary style="text-align:left; left:0;margin-bottom:10px;padding:5px 10px; width:100%;background:linear-gradient(rgba(83, 5, 184, 0.89), rgb(82, 5, 184));">Click to View all post</summary>

          <?php
              $sql = "SELECT * FROM post;";
              $result = mysqli_query($conn, $sql);
              if (mysqli_num_rows($result) > 0) {
                # code...
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
         
                }
         
              }
         
            ?>
         
         
         
         
             <script>
               // var data;
              function submitt(da, event){
                    event.preventDefault();
         
                $(document).ready(function() {
         
                // $(this).submit(function(event) {
                    // event.preventDefault();
                    let data = da
         
         
                    $(".gallery-show-section").load("incs/delete.inc.php", {
                        data:data
         
                    });
                // });
            });
              }
         
               // $(document).ready(function() {
                
               //         $("art").submit(function(event) {
               //             event.preventDefault();
               //         console.log(data);
         
                    
               //             $(".gallery-show-section").load("incs/delete.inc.php", {
               //                 data:data
                        
               //             });
               //         });
               //     });
               // function AssignData(th){
               //           data = th.value;
               //   console.log(data);
         
               //             }
               
             </script>
              <!-- <div class="gallery-show-card">
                  <div class="gallery-show-img">
                      <div class="gallery-img-hover-effect">
                      </div>
                  </div>
                  <div class="gallery-img-abt">
                      Cleo_ved Fashion site
                  </div>
              </div> -->
         
              
               </details>
       </section>

      </main>
                <script>
                        window.addEventListener("load", function() {
                        let noti = document.querySelector('.noti_msg');

                          setTimeout(function(){
                            noti.classList.remove("animate__animated", "animate__fadeIn");
                            // noti.classList.add("animate__animated", "animate__fadeOut");
                            // noti.classList.remove('succ_noti');
                            noti.style.display = 'none';

                        }, 3000);
                        });
                        
                    </script>
    
  <script>
      document.querySelector(".img-input-1").addEventListener("click", function(){
        document.querySelector("#Image1").click();
        console.log(1);
      });
      document.querySelector(".img-input-2").addEventListener("click", function(){
        document.querySelector("#Image2").click();
        console.log(1);
      });
      document.querySelector(".img-input-3").addEventListener("click", function(){
        document.querySelector("#Image3").click();
        console.log(1);
      });

      document.querySelector(".img-input-4").addEventListener("click", function(){
        document.querySelector("#Image4").click();
        console.log(1);
      });

      document.querySelector(".img-input-5").addEventListener("click", function(){
        document.querySelector("#Image5").click();
        console.log(1);
      });

     


      var loadFile = function(event, num) {
            var image = document.getElementById('output');
            let selector = '.img-pre-'+num;
            document.querySelector(selector).src = URL.createObjectURL(event.target.files[0]);
            console.log(event.target.files);
        };
      




      
  </script>
</html>