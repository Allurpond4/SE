<?php session_start(); 
header('Content-Type: text/html; charset=utf-8');?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>สินค้า</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link href="css/all.css" rel="stylesheet" type="text/css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet">
  <style type="text/css">
    @media (min-width: 800px) and (max-width: 850px) {
      .navbar:not(.top-nav-collapse) {
        background: #1C2331 !important;
      }
    }
    html,
    body,
    header,
    .carousel {
      height: 60vh;
    }

    @media (max-width: 740px) {

      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {

      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {
      .navbar:not(.top-nav-collapse) {
        background: #929FBA !important;
      }
    }
  </style>
</head>

<body>

<?php include_once('header.php'); ?>

    <!--Carousel Wrapper-->
    <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">

      <!--Indicators-->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-1z" data-slide-to="1"></li>
        <li data-target="#carousel-example-1z" data-slide-to="2"></li>
      </ol>
      <!--/.Indicators-->

      <!--Slides-->
      <div class="carousel-inner" role="listbox">

        <!--First slide-->
        <div class="carousel-item active">
          <div class="view" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/nature7.jpg'); background-repeat: no-repeat; background-size: cover;">

            <!-- Mask & flexbox options-->
            <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

              <!-- Content -->
              <div class="text-center white-text mx-5 wow fadeIn">
                <h1 class="mb-4">
                  <strong> <?php         
                            if($_SESSION['status']=='ADMIN') { 
                                echo 'การจัดการ';
                            }
                    ?>สินค้า</strong>
                </h1>

                
              </div>
              <!-- Content -->

            </div>
            <!-- Mask & flexbox options-->

          </div>
        </div>
        <!--/First slide-->

       

      </div>
      <!--/.Slides-->

      <!--Controls-->
      <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
      <!--/.Controls-->

    </div>
    <!--/.Carousel Wrapper-->
	
  <!--Main layout-->
  <main>
    <div class="container">
		
      <!--Section: Main info-->
      <section class="mt-5 wow fadeIn">

        <!--Grid row-->
        <div class="row">

		  <!--Main layout-->
		  <main>
			<div class="container">
				<h2 class="h2 mb-2"><strong>สินค้า</strong></h2><br>
			  <!--Section: Products v.3-->
			  <section class="text-center mb-4">

				<!--Grid row-->
				<div class="row wow fadeIn">

            <center>
                <div >
                  <table>
                <tr>
                 <td>
                   
                   <div class="input-group md-form form-sm form-1 pl-0" style="margin-left: 800px; width: 300px;margin-bottom: 5px;">
                    
                    <input class="form-control my-0 py-1" type="text" placeholder="Search" aria-label="Search" id="search_text">
                  <div class="input-group-prepend" >
                    <span class="input-group-text cyan lighten-2" id="basic-text1"><i class="fas fa-search text-black-50"
                      aria-hidden="true"></i></span>
                    </div>
                  </div>
                   
                </td>
                  
                </tr>
                 </table>
                    </div>
                <div class="contentblock">
                <section>
                  <div class="container-fluid" >
                        <div class="container">
                    
                        <div class="row" id="result">
                    </div> 
                          </div>	
                                   
          
                      </div>
                
                     </div>
                  </div>
                </div>
              </section>
                
                </div>	  
           </center>
          
          



				</div>
		

			  </section>
			
			</div>
		  </main>
		  <!--Main layout-->
        </div>
        <!--Grid row-->
      </section>
      <!--Section: Main info-->

  </main>
  <!--Main layout-->

<!-- Footer -->
<footer class="page-footer text-center font-small mt-4 wow fadeIn">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">

        <!-- Content -->
        <h5 class="font-weight-bold text-uppercase mb-4">M4U</h5>
        <p>Here you can use rows and columns to organize your footer content.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit amet numquam iure provident voluptate
          esse
          quasi, veritatis totam voluptas nostrum.</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mb-4">Menu</h5>

        <ul class="list-unstyled">
          <li>
            <p>
              <a href="#!">หน้าแรก</a>
            </p>
          </li>
          <li>
            <p>
              <a href="#!">สินค้า</a>
            </p>
          </li>
          <li>
            <p>
              <a href="#!">บริการ</a>
            </p>
          </li>
          <li>
            <p>
              <a href="#!">เกี่ยวกับเรา</a>
            </p>
          </li>
          <li>
            <p>
              <a href="#!">ระบบ Admin</a>
            </p>
          </li>			
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1">

        <!-- Contact details -->
        <h5 class="font-weight-bold text-uppercase mb-4">ติดต่อเรา</h5>

        <ul class="list-unstyled">
          <li>
            <p>
              <i class="fas fa-home mr-3"></i> เลขที่ 2316 ถนนประชาสงเคราะห์ แขวงดินแดง เขตดินแดง กทม. 10400</p>
          </li>
          <li>
            <p>
              <i class="fas fa-envelope mr-3"></i> xxxx@xxxxx.com</p>
          </li>
          <li>
            <p>
              <i class="fas fa-phone mr-3"></i> xxx xxx xxxx</p>
          </li>
          <li>
            <p>
              <i class="fas fa-print mr-3"></i> xx xxx xxx</p>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 text-center mx-auto my-4">

        <!-- Social buttons -->
        <h5 class="font-weight-bold text-uppercase mb-4">Follow Us</h5>

        <!-- Facebook -->
        <a type="button" class="btn-floating btn-fb">
          <i class="fab fa-facebook-f"></i>
        </a>
        <!-- Twitter -->
        <a type="button" class="btn-floating btn-tw">
          <i class="fab fa-twitter"></i>
        </a>
        <!-- Google +-->
        <a type="button" class="btn-floating btn-gplus">
          <i class="fab fa-google-plus-g"></i>
        </a>
        <!-- Dribbble -->
        <a type="button" class="btn-floating btn-dribbble">
          <i class="fab fa-dribbble"></i>
        </a>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2019 Copyright:
    <a href=""> M4U.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->	
	
  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

  </script>
</body>
<script>
    $(document).ready(function(){
    
     load_data();
    
     function load_data(query)
     {
      $.ajax({
       url:"load_product.php",
       method:"POST",
       data:{query:query},
       success:function(data)
       {
        $('#result').html(data);
       }
      });
     }
     $('#search_text').keyup(function(){
      var search = $(this).val();
      if(search != '')
      {
       load_data(search);
      }
      else
      {
       load_data();
      }
     });
    });
    </script>
</html>
