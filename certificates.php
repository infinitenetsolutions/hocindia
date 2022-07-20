<?php include "./include/header.php";


include "db.php";

$about_query = "SELECT * FROM `jag_ass_secretary`";
$about_display = mysqli_query($connection, $about_query);
// $about_result = mysqli_fetch_assoc($about_display);


?>
        
        
        <img src="img/certificate.jpg" style="width:100%"/>
        




<!-- Team Start -->
<div class="team">
    <div class="container">
      <div class="section-header text-center" style="margin: 0 auto 5px auto;">
            <p>QUALITY</p>
        
        
            <!-- <h2>Our Engineers & Workers</h2> -->
        </div>
      <h6 style="font-family: initial;">We adopt the Quality Standard Policy of "zero defects" We have been in the field of iron castings for the past 10 years and evolved to adopt the quality standard as “zero defects”.  We do take quality as conformance to the requirement. At the same time a continuous improvement is in our general practice in our processes in the business operation. We run through three staged quality i.e. “Input -WIP- Output”. In the Input we have stringent quality assay to induct BoM in the process which includes the finest scrap, coal, alloys and chemicals from the world's preferred vendors and producers. In the WIP we take up a rigorous process monitoring system and various tests in the routing process to ensure that no item moves frontward without fitting the quality bill. In the Output or FG we have a dedicated and trained team led by profoundly experienced team lead team to inspect, confirm and approve each FG which comes out. Here every item has to pass through a strict FG quality checklist.</h6>
        <div class="section-header text-center">
            <p>Certifications</p>
            <!-- <h2>Our Engineers & Workers</h2> -->
        </div>
        <div class="row">
        <?php
                while($row12345 = mysqli_fetch_assoc($about_display)){
                ?>
            <div class="col-lg-4 col-md-6" data-aos="fade-right" data-aos-offset="300"  data-aos-easing="ease-in-sine">
                <div class="team-item">                    
                      	  <a  data-toggle="modal" data-userid="<?php echo $row12345['id']; ?>" data-target="#myModal1<?php echo $row12345['id'];?>" style="cursor:pointer" >
                            <div class="team-img">
                        	<!--<img src="img/iso1.png" alt="Team Image">-->
                               <img <?php echo ' src="data:image/jpeg;base64,' . base64_encode($row12345['image']) . '"' ?> class="img-fluid mb-2" alt="" style=""/>
                    	</div>                                        
                    <div class="team-text">
                      <!--<h2>ISO CERTIFIED 9001</h2>-->
                        <p><?php echo $row12345['title']?></p>
                     </div></a>
                </div>
           
            </div>
          
          
          <!--modal-->
          <div class="modal fade" id="myModal1<?php echo $row12345['id'];?>">
    <div class="modal-dialog">
      <div class="modal-content">      
        
        <div class="modal-header">
         
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>        
        
        <div class="modal-body">
        <img <?php echo ' src="data:image/jpeg;base64,' . base64_encode($row12345['image']) . '"' ?> class="img-fluid mb-2" alt="" style=""/>
         <!-- <p><?php echo $row12345['id'];?></p>-->
        </div>        
                  
      </div>
    </div>
  </div>
          <!--modal end -->
             <?php }?>
          
          
          <!--<div class="col-lg-4 col-md-6" data-aos="fade-down"     data-aos-easing="linear"     data-aos-duration="1500">
                <div class="team-item">                    
                      	 <a  data-toggle="modal" data-target="#myModalcertificate2" style="cursor:pointer">
                           <div class="team-img">
                        	<img src="img/14001.png" alt="Team Image">
                    	</div>                                        
                    <div class="team-text">
                     <h2>ISO CERTIFIED 14001</h2>
                        <p><?php //echo $row1234['description']?></p>
                           </div></a>
                </div>
            </div>
          
          
          <div class="col-lg-4 col-md-6" data-aos="fade-left" data-aos-offset="300"  data-aos-easing="ease-in-sine">
                <div class="team-item">                    
                      <a  data-toggle="modal" data-target="#myModalcertificate3" style="cursor:pointer">
                        <div class="team-img">
                        	<img src="img/45001.png" alt="Team Image">
                    	</div>                                        
                    <div class="team-text">
                      <h2>ISO CERTIFIED 45001</h2>
                        <p><?php //echo $row1234['description']?></p>
                     </div></a>
                </div>
            </div>-->
              
              
           <?php //}?>
        </div>
    </div>
</div>
<!-- Team End -->








        
   

<?php include "./include/footer.php"?>