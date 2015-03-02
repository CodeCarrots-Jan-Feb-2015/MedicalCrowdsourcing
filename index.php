
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Bill of Health</title>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">


  <!-- Montserrat Sans -->
  <link href='http://fonts.googleapis.com/css?family=Montserrat:400, 700' rel='stylesheet' type='text/css'>        
  <!-- Lato Font -->
  <link href='http://fonts.googleapis.com/css?family=Lato:300,700' rel='stylesheet' type='text/css'>

  <!-- Stylesheet -->
  <link href="css/style.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="js/respond.min.js"></script>
      <![endif]-->

    </head>

    <body class="blue">

      <div id="navbar" class="navbar navbar-inverse">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand scroll" href="#home"><i class="fa fa-compass"></i><span>BILL OF HEALTH</span></a>
          </div>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
              <li><a class="scroll hidden" href="#home"></a></li>
              <li><a class="scroll" href="#search">SEARCH</a></li>
              <li><a class="scroll" href="#contribute">CONTRIBUTE</a></li>
              <li><a class="scroll" href="#learn">LEARN MORE</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>    
      <!-- All Page Modals -->      
<!--  <div class="modals">
        <div class="modal fade" id="contact-form" tabindex="-1" role="dialog">
          <div class="wrapper">

            <div class="container text-center">
              <a class="close" data-dismiss="modal" href=""><i class="icon-remove"></i></a>            
              <h1 class="text-center">Contact Us</h1>

              <form role="form">
                <div class="form-group">
                  <label for="exampleInputName"><i class="icon-tag"></i></label>
                  <input type="text" class="form-control" id="exampleInputName" placeholder="Full Name" required>
                  <div class="clearfix"></div>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1"><i class="icon-inbox"></i></label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" required>
                  <div class="clearfix"></div>
                </div>
                <div class="form-group textarea">
                  <label for="exampleInputMessage"><i class="icon-pencil"></i></label>
                  <textarea rows="6" class="form-control" id="exampleInputMessage" placeholder="Write Message" required></textarea>
                  <div class="clearfix"></div>
                </div>

                <button type="submit" class="btn">SEND MESSAGE</button>
              </form>
            </div>

          </div>              
      </div>  -->         <!-- /.modal --> 
      </div><!-- /.modals -->


      <!-- Home Section -->
      <div id="home" class="section">   
        <div class="parallax"><img src="img/mountains.png"></div>
        <div class="row">
          <div class="col-md-1 col-sm-1 col-xs-12 empty"></div>
          <div class="col-md-10 col-sm-10 col-xs-12 full">
            <div class="logo"><i class="fa fa-compass"></i></div>
            <h1 class="welcome">
              Bill of Health<br />
              <span>seeks to bring transparency to healthcare data.</span>
            </h1> 
            <div class="call-to-action">
              <a class="btn scroll" id="getstarted" href="#search"><i class="fa fa-angle-down"></i>GET STARTED</a>
            </div>   
          </div>
          <div class="col-md-1 col-sm-1 col-xs-12 empty"></div>
        </div>     
      </div><!-- /.container -->

      <!-- Search Section -->
      <div id="search" class="section gray">
        <div class="container">

          <div class="content">
            <div class="text-center">
              <h2 class="title">Search</h2>            
            </div>
            <div class="row">
              <div class="col-md-2 col-sm-2 col-xs-12"></div>
              <div class="col-md-2 col-sm-2 col-xs-12"></div>
            </div>
            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="service">
                  <p class="description">Search to find out the cost of a procedure in your surrounding neighborhood. This data comes from the bills of patients like you as well as publicly available Medicare data.</p>                
                </div>
              </div>  

              <div class="col-md-6 col-sm-6 col-xs-12">   
              <form method="get" action="/results.php">            
                <div class="form-group">
                  <input type="text" class="form-control" id="procedurename" name="Diagnosis" placeholder="Enter Procedure Name">
                  <div class="clearfix"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="location" name="Location" placeholder="Enter City, State or Zipcode">
                  <div class="clearfix"></div>
                </div>
                <input type="submit" class="btn color" value="SEARCH" id="searchbtn" />
              </form>
              </div>        
            </div>
          </div>
        </div><!-- /.content -->
      </div>
    </div>


    <!-- Contribute Section -->
    <div id="contribute" class="section clear">
      <div class="container">  
        <div class="content">
          <div class="text-center">
            <h2 class="title">Contribute</h2>            
          </div>
          <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
              <p class="description">This project relies on the help of patients like you sharing their billing data after a procedure. 
              </p>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">  

              <form role="form">
                <button type="submit" class="btn color"><i class="fa fa-upload"></i>UPLOAD IMAGE</button>    
              </form>
                          <p class="instruction">We ask that your name, address, and other identifiers be removed to ensure the privacy of your contribution.</p>  
            

          </div> <!--Row close-->
          <form method="get" action="/Contribution.php"/>
          <div class="divider">
            <hr class="left"/>OR ENTER YOUR INFORMATION<hr class="right" />
          </div>
          <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
              <fieldset>
                <legend><p>PROCEDURE INFORMATION</p></legend>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Procedure Name" name="name" required>
                  <div class="clearfix"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="Tags" name="tag" placeholder="Tags (help patients find this procedure)" >
                  <div class="clearfix"></div>
                </div>
                <div class="form-group">
                  <select class="form-control" name="proceduredate">
                    <option class="form-add" value="" selected disabled>Year Procedure Was Performed</option>
                    <option value="2015">2015</option>
                    <option value="2014">2014</option>
                    <option value="2013">2013</option>
                    <option value="2012">2012</option>
                    <option value="2011">2011</option>
                  </select>
                  <div class="clearfix"></div>
                </div>
              </fieldset>
              <fieldset>
                <legend><p>PROVIDER INFORMATION</p></legend>
                <div class="form-group">
                  <select class="form-control" name="facilitytype">
                    <option class="form-add" value="" selected disabled>Facility type</option>
                    <option value="hospital">Hospital</option>
                    <option value="outpatient">Outpatient Facility</option>
                    <option value="urgentcare">Urgent Care Facility</option>
                  </select>
                  <div class="clearfix"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="facility" placeholder="Provider Name" required>
                  <div class="clearfix"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="facilitycity" placeholder="City" required>
                  <input type="text" class="form-control" name="facilitystate" placeholder="State" required>
                  <div class="clearfix"></div>
                </div>
              </fieldset>



            </div><!-- End Row-->
<!--                         <label class="radio-inline">
                         <input type="radio" value="1" name="optradio"><i class="fa fa-star-o"></i>
                       </label>
                       <label class="radio-inline">
                         <input type="radio" value="2" name="optradio"><i class="star-o"></i>
                       </label>
                       <label class="radio-inline">
                        <input type="radio" value="3" name="optradio"><i class="star-o"></i>
                      </label>
                       <label class="radio-inline">
                         <input type="radio" value="4" name="optradio"><i class="star-o"></i>
                       </label>
                       <label class="radio-inline">
                        <input type="radio" value="5" name="optradio"><i class="star-o"></i>
                      </label>
                      </div>
                    </form>
                </div>
              --> 


        <div class="col-md-6 col-sm-6 col-xs-12">
<!--          <fieldset>
            <legend><p>INSURANCE INFORMATION</p></legend>
            <div class="form-group">
              <input type="text" class="form-control" id="exampleInputName" placeholder="Insurance Carrier" required>
              <div class="clearfix"></div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="exampleInputName" placeholder="Insurance Plan" required>
              <div class="clearfix"></div>
            </div>
          </fieldset>-->
          <fieldset>
            <legend><p>BILLING INFORMATION</p></legend>
           <div class="form-group">
              <input type="number" class="form-control" id="Cost" placeholder="Total Procedure Cost" name="cost" required>
              <div class="clearfix"></div>
            </div> 
  <!--           <div class="form-group">
              <input type="number" class="form-control" id="exampleInputName" placeholder="Amount Reimbursed by Insurance" required>
              <div class="clearfix"></div>
            </div>
            <div class="form-group">
              <input type="number" class="form-control" id="exampleInputName" placeholder="Total Out of Pocket Cost" required>
              <div class="clearfix"></div>
            </div> -->
          </fieldset>


              <fieldset>
                <div class="form-group">
                  <select name="satisfaction" >
                    <legend><p>QUALITY OF CARE</p></legend>             
                    <div class="rating">
                      <option value="1">Star 1</option>
                      <option value="2">Star 2</option>
                      <option value="3">Star 3</option>
                      <option value="4">Star 4</option>
                      <option value="5">Star 5</option>
                    </div>
                </div>
              </fieldset>

          <input type="submit" value="CONTRIBUTE" class="btn color">
        </form>


      </div>

    </div>

  </div><!-- /.content -->  
<!-- /.content --> 





</div>         
</li>
</div>  
</div>

</div><!-- /.container -->  



<!-- Learn More Section -->
<div id="learn" class="section dark">
  <div class="parallax"><img src="img/night-mountains.png"></div>
  <div class="container">
    <div class="content">
      <div class="text-center">
        <h2 class="title">Learn More</h2>            
      </div>
      <div class="row">
        <div class="col-md-2 col-sm-2 col-xs-12"></div>
        <div class="col-md-8 col-sm-8 col-xs-12">
          <p class="description">This site is an initiative of Code Carrots.</p>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-12"></div>
      </div>

    </div><!-- /.content -->
  </div>
</div>



<!-- Contact Section -->  
<div id="contact" class="section footer-padding">
  <div class="container no-bottom">
    <div class="content">
      <div class="text-center">
        <h2 class="title">Contact</h2>            
      </div>
      <div class="row">
        <div class="col-md-2 col-sm-2 col-xs-12"></div>
        <div class="col-md-8 col-sm-8 col-xs-12">
          <p class="description">Have questions/ ideas/ contributions? Contact us!
          </p>
        </div>
      </div>
      <form role="form">
        <div class="form-group">
          <label for="exampleInputName"><i class="icon-tag"></i></label>
          <input type="text" class="form-control" id="exampleInputName" placeholder="Full Name" required>
          <div class="clearfix"></div>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1"><i class="icon-inbox"></i></label>
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" required>
          <div class="clearfix"></div>
        </div>
        <div class="form-group textarea">
          <label for="exampleInputMessage"><i class="icon-pencil"></i></label>
          <textarea rows="6" class="form-control" id="exampleInputMessage" placeholder="Write Message" required></textarea>
          <div class="clearfix"></div>
        </div>

        <button type="submit" class="btn color">SEND MESSAGE</button>
      </form>         
    </div>
  </div>
</div><!-- /.container -->

<div id="footer" class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6 col-xs-12">
        <p>&copy; 2015, Made by Bill Of Health</p>   
      </div>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="">
          <p class="social-media">
            <a href="#" data-toggle="tooltip" title="twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" data-toggle="tooltip" title="facebook"><i class="fa fa-facebook"></i></a>

          </p>
        </div>
      </div>
    </div>  
  </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  <!--    <script src="js/jquery-1.9.1.min.js"></script>
    <script src="js/modernizr.custom.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
  <script src="js/bootstrap.min.js"></script> 
    <script src="js/classie.js"></script>
    <script src="js/AnimOnScroll.js"></script>
    <script type="text/javascript"
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDAe64UN6rxbgDo8hzspyTofIGXBiNcE_U&sensor=false">
    </script>
    <script src="js/init.js"></script>
-->
  </body>
  </html>
