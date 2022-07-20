<?php include "./include/header.php";
include "db.php";

$about_query1 = "SELECT * FROM `jag_product` where `category`='Pipe Fittings'";
$about_display1 = mysqli_query($connection, $about_query1);

?>

<style>
  /* Style the tab */
  .tab {
    float: left;
    border: 1px solid #ccc;
    background-color: #0a0937;
    width: 100%;
    height: auto;
    box-shadow: 2px 2px 6px gray;
  }

  .technologies-title {
    color: #ff7701;

  }

  /* Style the buttons inside the tab */
  .tab a,
  button {
    width: 100%;
    display: inline-block;
    background-color: inherit;
    color: #fff;
    padding: 15px 25px 15px 25px;
    /*width: auto;*/
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
    position: relative;
    float: left;
    padding: 0px 12px;
    /*border: 1px solid #ccc;*/
    width: 100%;
    border-left: none;
    height: 100%;
    /*box-shadow: 2px 2px 6px gray;*/
  }

  .tab .active {
    border-left: 5px solid #ff7701;
    background: #171644;
    color: #ff7701;
    font-weight: 700;
  }

  .technologies-title:after {
    content: '';
    display: block;
    width: 40px;
    height: 2px;
    background-color: #ed8b00;
    margin: 12px 0 0;
  }

  .technologies-content {
    font-size: 18px;
    line-height: 1.78;
    text-align: left;
    margin-bottom: 0;
  }

  .technology-logos {
    width: 200px;
    margin-right: 12px;
    display: flex;
    flex-wrap: wrap;
    /* height: 100px;
    height: 100px;
    width: 115px; */
    padding: 10px;
    background: #fff;
    margin-right: 10px;
    /* -webkit-box-shadow: 0 2px 6px 0 rgba(0,0,0,.05); */
    box-shadow: 0 14px 14px 0 rgba(0, 0, 0, .09);
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

  .tech-images {
    max-height: 100%;
    max-width: 100%;
  }

  .main-logo {
    display: -ms-flexbox;
    display: flex;
    flex-wrap: wrap;
  }

  .main-tech {
    margin-top: 50px;
    height: auto;
    width: 100%;
    box-shadow: 0 2px 6px 0 rgba(0, 0, 0, .05);
  }

  @media(max-width:700px) {
    .tab button {
      width: 40%;
    }
  }

  .footer {
    position: inherit !important;
  }



  @media(min-width:576px) {

    .main-tech {
      display: flex;
    }

    .tab {
      float: left;
      border: 1px solid #ccc;
      background-color: #171644;
      width: 300px !important;
      height: 100%;
    }
  }

  @media(min-width:576px) {
    .facilities-text {
      padding: 0 120px;
    }
  }

  .highlight {
    font-weight: 800;
    background: #ff7701;
    font-size: 20px;
    padding: 5px 15px;
    color: #fff;
    border-radius: 0 15px 15px 0;
  }
</style>
</head>

<body>
  <img src="img/product.jpg" style="width:100%" />

  <!-- product details starts here  -->
  <div class="main-tech">
<div class="tab">
  <a class="tablinks" href="composite_mahole.php">COMPOSITE MAHOLE COVERS & FRAME</a>
  <a class="tablinks" href="frp&grp.php">FRP & GRP GRATINGS WITH FRAME</a>
  <a class="tablinks" href="surface_box.php">SURFACE BOX & TREE GRATE</a>
  <a class="tablinks" href="manual_steps.php">MANUAL STEPS & LIFTING BAR</a>
  <a class="tablinks" href="agricultural_casting.php">AGRICULTURAL CASTINGS</a>
  <button class="tablinks" onclick="openCity(event, 'tech1')" id="defaultOpen">PIPE FITTINGS</button>
</div>
 
<div id="tech1" class="tabcontent">
  <h3 class="technologies-title">PIPE FITTINGS</h3>
<div class="main-content">
   
  <div class="main-logo">
            <?php while($about_result1 = mysqli_fetch_assoc($about_display1)){?>
  <div class="technology-logos" data-toggle="tooltip" title="">
  <img <?php echo ' src="data:image/jpeg;base64,' . base64_encode($about_result1['image']) . '"' ?> class="tech-images" />
   <h6 style="width: 100%;text-align: center;color: #0a0937; margin-top: 10px;"><?php echo $about_result1['title'];?></h6>
  </div>
  <?php }?>
    
  </div>
</div>
</div>

</div>
  <!-- product details ends here -->

  <!-- other details of product page start -->
  <div class="container-fluid">
    <div class="row">
      <div style="text-align: center;display: block; width: 100%;">
        <h3 style="
    color: #0a0937;
    font-family: system-ui;
    padding-top: 15px;
">PRODUCT SELECTOR / LOADING CLASS</h3>
      </div>
      <div class="col-md-12">



        <div class="price">
          <div class="price-item">

            <div class="row">
              <div class="col-md-3"><img src="img/x1.PNG" style="width:100%;" /></div>
              <div class="col-md-3"><img src="img/x2.PNG" style="width:100%;" /></div>
              <div class="col-md-3"><img src="img/x3.PNG" style="width:100%;" /></div>
              <div class="col-md-3"><img src="img/x4.PNG" style="width:100%;" /></div>
            </div>


          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="price">

          <div class="price-item featured-item">
            <div class="price-header">


              <div style="display:block;text-align:left;"><span class="highlight">Class A 15 </span></div>
              <p style="
    text-align: left;
">The appropriate class of manhole top or gully top to be used depends upon the place
                of installation. The selection of the appropriate class is the responsibility of the designer.
                However, if there remains any doubt then stronger class should be selected.</p>
              <div style="display:block;text-align:left;"><span class="highlight">Class B 125 </span></div>
              <p style="
    text-align: left;
">Cover & Gratings capable for withstanding 125KN Test Load mainly used for areas were only
                occasional vehicular access like domestic driveways
              </p>

              <div style="display:block;text-align:left;"><span class="highlight">Class C 250 </span></div>
              <p style="
    text-align: left;
">Cover & Gratings capable for withstanding 250KN Test Load mainly used for areas were used in
                lightly trafficked roads and private car parks.

              </p>

              <div style="display:block;text-align:left;"><span class="highlight">Class D 400 </span></div>
              <p style="
    text-align: left;
">Cover & Gratings capable for withstanding 400KN Test Load mainly used for areas where high
                trafficked roads like public car parks and lorries access including carriage ways
              </p>

              <div style="display:block;text-align:left;"><span class="highlight">Class E 600 </span></div>
              <p style="
    text-align: left;
">Cover & Gratings capable for withstanding 600KN Test Load mainly used for areas where high
                wheel loads have access like Non-public roads, industrial loading areas, aircraft cargo handling
                pavements.

              </p>

              <div style="display:block;text-align:left;"><span class="highlight">Class F 900 </span></div>
              <p style="
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
  <!-- other details of product page ends -->

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

  <script>
    $(document).ready(function() {
      $('[data-toggle="tooltip"]').tooltip();
    });
  </script>
  <?php include "include/footer.php" ?>