<?php include "./include/header.php";

include "db.php";

$about_director = "SELECT * FROM `jag_patron`";
$about_director1 = mysqli_query($connection, $about_director);
$about_director2 = mysqli_fetch_assoc($about_director1);



?>
        
        
        <!-- Page Header Start -->
     <!--<img src="img/our-director.jpg" style="width:100%"/>-->
        

        <div class="single" style="background: #0a0937;">
            <div class="container">
              
              
              
              
              
              
              <div style="padding:20px;">
              <div class="row">
    <div class="col-md-7">
<div class="single-bio-text">
                                        <h3>Our Director's Message</h3>
                                        <p style="color:#fff!important;">
                                        </p><?php echo $about_director2['description']; ?></p>                                        <p></p>
                                        <p style="text-align: right;font-weight: 600;">Managing director - <span style="color: #f07d22;"><?php echo $about_director2['title']; ?></span></p>
                                    </div>
    </div>
                                    <div class="col-md-5">
<div class="single-bio-img" style="background: #ffffff00!important;">
                                    <img height="100px" width="100px" <?php echo ' src="data:image/jpeg;base64,' . base64_encode($about_director2['image']) . '"' ?> class="img-fluid mb-2" alt="" />
                                    </div>
    </div></div>
              
              
              
              
                </div>
            </div>
        </div>
        
        
     

      

<?php include "./include/footer.php"?>