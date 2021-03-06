<?php include "./include/header.php";
include "db.php";

$about_query1 = "SELECT * FROM `jag_chairman`where `description`='MELTING'";
$about_display1 = mysqli_query($connection, $about_query1);


$about_query2 = "SELECT * FROM `jag_chairman`where `description`='MOULDING'";
$about_display2 = mysqli_query($connection, $about_query2);


$about_query3 = "SELECT * FROM `jag_chairman`where `description`='INSPECTION'";
$about_display3 = mysqli_query($connection, $about_query3);

$about_query4 = "SELECT * FROM `jag_chairman`where `description`='CARRIER MACHINES'";
$about_display4 = mysqli_query($connection, $about_query4);

$about_query5 = "SELECT * FROM `jag_chairman`where `description`='FETTLING & PAINTING'";
$about_display5 = mysqli_query($connection, $about_query5);

$about_query6 = "SELECT * FROM `jag_chairman`where `description`='AUXILLARY MACHINE'";
$about_display6 = mysqli_query($connection, $about_query6);

$about_query7 = "SELECT * FROM `jag_chairman`where `description`='POLLUTION CONTROL & RAIN WATER HARVESTING'";
$about_display7 = mysqli_query($connection, $about_query7);
//$about_result = mysqli_fetch_assoc($about_display);

?>
<style>
/* Style the tab */
.tab {
  float: left;
  border: 1px solid #ccc;
  background-color: #fff;
  width: 100%;
  height: auto;
  box-shadow: 2px 2px 6px gray;
}
  .technologies-title{
    color:#ff7701;
  }
/* Style the buttons inside the tab */
.tab button {
 display: inline-block;
    background-color: inherit;
    color: black;
    padding:15px 25px 15px 25px;
    width: auto;
    border: none;
    outline: none;
    text-align: left;
    cursor: pointer;
    transition: 0.3s;
    font-size: 0.9em;
    font-weight: 600;
}

/* Change background color of buttons on hover */
.tab button:hover {
  color: #005eb8;
}

/* Style the tab content */
.tabcontent {
  float: left;
  padding: 20px 12px;
  /*border: 1px solid #ccc;*/
  width: 100%;
  border-left: none;
  height: 100%;
  /*box-shadow: 2px 2px 6px gray;*/
}

.tab .active{
border-left:5px solid #ff7701;
background:#dedede;
color:#ff7701;
  font-weight: 700;
}

.technologies-title:after{
content: '';
    display: block;
    width: 40px;
    height: 2px;
    background-color: #ed8b00;
    margin: 12px 0 0;
	}
.technologies-content{
	font-size: 18px;
    line-height: 1.78;
    text-align: left;
    margin-bottom: 0;
	}
.technology-logos{
	margin-right: 12px;
    display: flex;
    flex-wrap: wrap;
    /* height: 100px;
    height: 100px;
    width: 115px; */
    padding: 5px;
    background: #fff;
    margin-right: 20px;
    /* -webkit-box-shadow: 0 2px 6px 0 rgba(0,0,0,.05); */
    box-shadow: 0 14px 14px 0 rgba(0,0,0,.09);
    margin-bottom: 10px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
	}
.tech-images{
	max-height: 100%;
    max-width: 100%;
	}
	.main-logo{
    display: -ms-flexbox;
    display: flex;
    flex-wrap: wrap;
	}
.main-tech{
	height:auto;
width:100%;
box-shadow: 0 2px 6px 0 rgba(0,0,0,.05);
	}
@media(max-width:700px){
.tab button {	
width: 40%;
}
	}
  .footer {
    position: inherit!important;
  }
  
  .highlight{
    font-weight: 800;
    background: #ff7701;
    font-size: 20px;
    padding: 5px 15px;
    color: #fff;
    border-radius: 0 15px 15px 0;
  }
  
  .price-body ul li{
   text-align:left; 
  }
  .price-header p{
   font-size:18px; 
  }
  .price .price-item.featured-item h3{
   margin-bottom:20px; 
  }
  
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
</style>
</head>
<body>
       <img src="img/product.jpg" style="width:100%"/>  
  
  
  <div class="container-fluid">
    <div class="row">
      <div style="text-align: center;display: block; width: 100%;">
      <h3 style="
    color: #0a0937;
    font-family: system-ui;
    padding-top: 15px;
">PRODUCT SELECTOR / LOADING CLASS</h3></div>
       <div class="col-md-12">

        
        
        <div class="price">
      <div class="price-item">
                           
        <div class="row">
          <div class="col-md-3"><img src="img/x1.PNG" style="width:100%;"/></div>
          <div class="col-md-3"><img src="img/x2.PNG" style="width:100%;"/></div>
          <div class="col-md-3"><img src="img/x3.PNG" style="width:100%;"/></div>
          <div class="col-md-3"><img src="img/x4.PNG" style="width:100%;"/></div>
        </div>
        
        
          </div>
                        </div>
      </div>
    <div class="col-md-12">
      <div class="price">
      
      <div class="price-item featured-item" >
                            <div class="price-header">
                              
                              
                              <div style="display:block;text-align:left;"><span class="highlight">Class A 15 </span></div> <p style="
    text-align: left;
">The appropriate class of manhole top or gully top to be used depends upon the place
of installation. The selection of the appropriate class is the responsibility of the designer.
  However, if there remains any doubt then stronger class should be selected.</p>
                              <div style="display:block;text-align:left;"><span class="highlight">Class B 125 </span></div> <p style="
    text-align: left;
">Cover & Gratings capable for withstanding 125KN Test Load mainly used for areas were only
occasional vehicular access like domestic driveways
</p>
                              
                              <div style="display:block;text-align:left;"><span class="highlight">Class C 250 </span></div> <p style="
    text-align: left;
">Cover & Gratings capable for withstanding 250KN Test Load mainly used for areas were used in
lightly trafficked roads and private car parks.

</p>
                              
                              <div style="display:block;text-align:left;"><span class="highlight">Class D 400 </span></div> <p style="
    text-align: left;
">Cover & Gratings capable for withstanding 400KN Test Load mainly used for areas where high
trafficked roads like public car parks and lorries access including carriage ways
</p>
                              
                              <div style="display:block;text-align:left;"><span class="highlight">Class E 600 </span></div>  <p style="
    text-align: left;
">Cover & Gratings capable for withstanding 600KN Test Load mainly used for areas where high
wheel loads have access like Non-public roads, industrial loading areas, aircraft cargo handling
pavements.

</p>
                              
                               <div style="display:block;text-align:left;"><span class="highlight">Class F 900 </span></div> <p style="
    text-align: left;
">Cover & Gratings capable for withstanding 900KN Test Load mainly used in areas like Docks,
Airport Landing strips and extreme heavy-duty application.
</p>
                            </div>
                                                                          
                           
                        </div>
      </div>
    </div>
     
      
      
  </div>
  </div>
  
<!-- Products Sections start here -->
<div class="main-tech">
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'tech1')" id="defaultOpen">MELTING</button>
  <button class="tablinks" onclick="openCity(event, 'tech2')">MOULDING</button>
  <button class="tablinks" onclick="openCity(event, 'tech3')">INSPECTION</button>
  <button class="tablinks" onclick="openCity(event, 'tech4')">CARRIER MACHINES</button>
  <button class="tablinks" onclick="openCity(event, 'tech5')">FINISHING</button>
  <button class="tablinks" onclick="openCity(event, 'tech6')">AUXILLARY MACHINE</button>
  <button class="tablinks" onclick="openCity(event, 'tech7')">POLLUTION CONTROL & RAIN WATER HARVESTING</button>
  <button class="tablinks" onclick="openCity(event, 'tech8')">OFFICE & INFRASTRUCTURE</button>
  
  
  
  
  
  
  
</div>
 
<div id="tech1" class="tabcontent">
  <h3 class="technologies-title">MELTING</h3>
<div class="main-content">
   
  <div class="main-logo">
            <?php while($about_result1 = mysqli_fetch_assoc($about_display1)){?>
  <div class="technology-logos" data-toggle="tooltip" title="">
  <img <?php echo ' src="data:image/jpeg;base64,' . base64_encode($about_result1['image']) . '"' ?> class="tech-images" />
   <h6 style="
    width: 100%;
    text-align: center;
    color: #0a0937;
    margin-top: 10px;
"><?php echo $about_result1['title'];?></h6>
  </div>
  <?php }?>
    
  </div>
</div>
</div>

<div id="tech2" class="tabcontent">
  <div class="main-content">
  <h3 class="technologies-title">MOULDING</h3>
  
  <div class="main-logo">
  <?php while($about_result2 = mysqli_fetch_assoc($about_display2)){?>
  <div class="technology-logos">
  <img <?php echo ' src="data:image/jpeg;base64,' . base64_encode($about_result2['image']) . '"' ?> class="tech-images" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine"/>
    <h6 style="
    width: 100%;
    text-align: center;
    color: #0a0937;
    margin-top: 10px;
"><?php echo $about_result2['title'];?></h6>

  </div>
    <?php }?>
  
  </div>
</div>
</div>


<div id="tech3" class="tabcontent">
   <div class="main-content">
  <h3 class="technologies-title">INSPECTION</h3>
  
  <div class="main-logo">
  <?php while($about_result3 = mysqli_fetch_assoc($about_display3)){?>
  <div class="technology-logos">
  <img <?php echo ' src="data:image/jpeg;base64,' . base64_encode($about_result3['image']) . '"' ?> class="tech-images" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine"/>
  <h6 style="
    width: 100%;
    text-align: center;
    color: #0a0937;
    margin-top: 10px;
"><?php echo $about_result3['title'];?></h6>

  </div>
    <?php }?>
  
  </div>
</div>
</div>

<div id="tech4" class="tabcontent">
  <div class="main-content">
  <h3 class="technologies-title">CARRIER MACHINES</h3>
  
  <div class="main-logo">
  <?php while($about_result4 = mysqli_fetch_assoc($about_display4)){?>
  <div class="technology-logos">
  <img <?php echo ' src="data:image/jpeg;base64,' . base64_encode($about_result4['image']) . '"' ?> class="tech-images" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine"/>
   <h6 style="
    width: 100%;
    text-align: center;
    color: #0a0937;
    margin-top: 10px;
"><?php echo $about_result4['title'];?></h6>

  </div>
  <?php }?>
  </div>
</div>
</div>

<div id="tech5" class="tabcontent">
  <div class="main-content">
  <h3 class="technologies-title">FINISHING</h3>
  
  <div class="main-logo">
  <?php while($about_result5 = mysqli_fetch_assoc($about_display5)){?>
  <div class="technology-logos">
  <img <?php echo ' src="data:image/jpeg;base64,' . base64_encode($about_result5['image']) . '"' ?> class="tech-images" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine"/>
      <h6 style="
    width: 100%;
    text-align: center;
    color: #0a0937;
    margin-top: 10px;
"><?php echo $about_result5['title'];?></h6>
  </div>
  <?php }?>
  </div>
</div>
</div>

<div id="tech6" class="tabcontent">
  <div class="main-content">
  <h3 class="technologies-title">AUXILLARY MACHINE</h3>
  
  <div class="main-logo">
  <?php while($about_result6 = mysqli_fetch_assoc($about_display6)){?>
  <div class="technology-logos">
  <img <?php echo ' src="data:image/jpeg;base64,' . base64_encode($about_result6['image']) . '"' ?> class="tech-images" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine"/>
    <h6 style="width: 100%; text-align: center;color: #0a0937; margin-top: 10px;"><?php echo $about_result6['title'];?></h6>
  </div>
 <?php }?> 
  </div>
</div>
</div>


     
  <div id="tech7" class="tabcontent">
  <div class="main-content">
  <h3 class="technologies-title">POLLUTION CONTROL & RAIN WATER HARVESTING</h3>
  
  <div class="main-logo">
  <?php while($about_result7 = mysqli_fetch_assoc($about_display7)){?>
  <div class="technology-logos">
  <img 
<?php echo ' src="data:image/jpeg;base64,' . base64_encode($about_result7['image']) . '"' ?> class="tech-images" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine"/>
        <h6 style="
    width: 100%;
    text-align: center;
    color: #0a0937;
    margin-top: 10px;
"><?php echo $about_result7['title'];?></h6>

  </div>
  <?php }?>
  </div>
</div>
</div>
</div>



<!-- Products Section Ends here -->


<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
   <?php include "include/footer.php"?>