<?php 
include "db.php";


$contact_query_result = "SELECT * FROM `jag_site_info`";
$contact_data = mysqli_query($connection,$contact_query_result);
$result = mysqli_fetch_assoc($contact_data);
// print_r($result);


?>
<!-- Footer Start -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="footer-contact">
                    <h2>Get In Touch</h2>
                    <p><i class="fa fa-map-marker-alt"></i> <?php echo $result['address']?></p>
                    <p><i class="fa fa-phone-alt"></i> <?php echo $result['phone1']?>, <?php echo $result['phone2']?></p>
                    <p><i class="fa fa-envelope"></i><?php echo $result['email']?></p>
                   
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-link">
                    <h2>Popular Links</h2>
                    <a href="about.php">About Us</a>
                    <a href="about-directors.php">Directors </a>
                    <a href="certificates.php">Certificates</a>
                  <a href="privacy.php">Privacy</a>
                   <a href="facilities.php">Facilities</a>
                    <a href="products.php">Products</a>
                    <a href="contact.php">Contact</a>
                   <a href="hoc_admin">Login</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-link">
                    <h2>Our Products</h2>
                  <?php
  $products_query = "SELECT * FROM `jag_product` ORDER BY ID DESC LIMIT 5";
$product_display = mysqli_query($connection, $products_query);
while($row123 = mysqli_fetch_assoc($product_display)){
                ?>
                   <a href="pdf.php?id=<?php echo $row123['id']?>"><?php echo $row123['title']?></a>
                  <?php }?>
                  <a href="products.php" class="btn btn-warning" style="
    background: #f07d22;
    color: #fff;
    font-weight: 700;
">View All Product</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-newsletter">
                    <h2>Social Media</h2>
                    <div class="footer-social">
                        <a class="btn" href="<?php echo $result['twitter']?>"><i class="fab fa-twitter"></i></a>
                        <a class="btn" href="<?php echo $result['facebook']?>"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn" href="<?php echo $result['youtube']?>"><i class="fab fa-youtube"></i></a>
                        
                        <a class="btn" href="<?php echo $result['linkedin']?>"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container copyright">
        <p>&copy; <a href="index.php"><?php echo date("Y")?> Hariom Casting Company (P) Limited</a>, All Right Reserved. Designed By <a href="https://infinitenetsolutions.com/">Infinite Net solutions</a></p>
    </div>
</div>
<!-- Footer End -->

<!-- Back to top button -->
<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- Pre Loader -->
<!--<div id="loader" class="show">
    <div class="loader"></div>
</div>-->

  <!-- JavaScript Libraries -->
    <script src="css/jquery.js"></script>
    <script src="css/bundle.js"></script>

   

    <!-- Template Javascript -->
 
<script>
        AOS.init();
    </script>
</body>

</html>