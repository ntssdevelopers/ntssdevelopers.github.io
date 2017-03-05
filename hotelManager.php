<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>  		
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/dashboardStyle.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
  	<script src="js/dashboardScript.js"></script>

    <style>
        .bottom-hr{

            width: 140px;
            
            
        }
        
        h5{
            color:#a6a6a6;
        }
        .tile:hover
        {
            
            z-index: 2;
            -webkit-transition: all 350ms ease-in;
            -webkit-transform: scale(1.1);
            -ms-transition: all 350ms ease-in;
            -ms-transform: scale(1.1);   
            -moz-transition: all 350ms ease-in;
            -moz-transform: scale(1.1);
            transition: all 350ms ease-in;
            transform: scale(1.1);
        }

        .cbox{
            transform:scale(1.3, 1.3);
        }

    </style>

</head>
<body>
	<div id="throbber" style="display:none; min-height:120px;"></div>
<div id="noty-holder"></div>
<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img src="http://placehold.it/200x50&text=LOGO" alt="LOGO"">
            </a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
            <!--li><a href="#" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Stats"><i class="fa fa-bar-chart-o"></i>
                </a>
            </li-->            
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Admin User</b> <i class="fa fa-user fa-lg"></i> <b class="fa fa-angle-down fa-lg"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#"><i class="fa fa-fw fa-user"></i> Edit Profile</a></li>
                    <li><a href="#"><i class="fa fa-fw fa-cog"></i> Change Password</a></li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="fa fa-fw fa-power-off"></i> Logout</a></li>
                </ul>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">



                <li>
                    <a href="#"><i class="fa fa-home fa-2x"></i> Home</a>
                    
                </li>

                <li>
                    <a href="dashboard.php"><i class="fa fa-th-large fa-lg"></i> Dashboard</a>
                    
                </li>




                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-user fa-lg"></i> Manage Profile <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                    <ul id="submenu-1" class="collapse">
                        <li><a href="hotelProfile.php" class="active"><i class="fa fa-angle-double-right"></i> Hotel Profile</a></li>
                        <li><a href="#" class="active"><i class="fa fa-angle-double-right"></i> Logo Manager</a></li>
                        <li><a href="passwordManager.php"><i class="fa fa-angle-double-right"></i> Password Manager</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-2"><i class="fa fa-bank fa-lg"></i>  Manage Hotel <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                    <ul id="submenu-2" class="collapse">
                        <li><a href="hotelManager.php"><i class="fa fa-angle-double-right"></i> Hotel Manager</a></li>
                        <li><a href="roomManager.php"><i class="fa fa-angle-double-right"></i> Room Manager</a></li>
                        <li><a href="priceManager.php"><i class="fa fa-angle-double-right"></i> Price Manager</a></li>
                    </ul>
                </li>
                
                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-3"><i class="fa fa-file-text-o fa-lg"></i>  Manage Account <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                    <ul id="submenu-3" class="collapse">
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 3.1</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 3.2</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 3.3</a></li>
                    </ul>

                </li>
                
                <li>
                    <a href="#"><i class="fa fa-money fa-lg"></i> Reservations</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-calendar fa-lg"></i> Rates & Availability</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-tags fa-lg"></i> Promotions</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-edit fa-lg"></i> Property Details</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">
        <div class="row" style="margin-top: -20px;">
            <div class="col-xs-12">
                <h3 style="color: #007acc;">Edit Hotel Detail </h3>
                <hr style="color: #e6e6e6; border: solid 1px #e6e6e6;">
            </div>            
        </div>            

        <div class="row">
            <div class="col-lg-3" style="text-align: right;margin-top: 6px;">
                <p><label for="">Hotel Name:</label></p>
            </div>

            <div class="col-lg-5" style="">
                <p><input class="form-control" type="text"></p>
            </div>
        </div>

        <div class="row" style="margin-top: 10px;">
            <div class="col-lg-3" style="text-align: right;margin-top: 6px;">
                <p><label for="">Hotel Location:</label></p>
            </div>

            <div class="col-lg-2" style="margin-top: 6px;">
              <input type="checkbox" class="cbox" value="city"> City <br>
              <input type="checkbox" class="cbox" value="highway"> Highway <br>
              <input type="checkbox" class="cbox" value="souq"> Souq
            </div>


            <div class="col-lg-2" style="margin-top: 6px;">
              <input type="checkbox" class="cbox" value="beach"> Beach <br>
              <input type="checkbox" class="cbox" value="mountain"> Mountain <br>              
            </div>

            <div class="col-lg-3" style="margin-top: 6px;">
              <input type="checkbox" class="cbox" value="corniche"> Corniche <br>
              <input type="checkbox" class="cbox" value="desert"> Desert <br>
            </div>
                     
        </div>



        <div class="row" style="margin-top: 10px;">
            <div class="col-lg-3" style="text-align: right;margin-top: 6px;">
                <p><label for="">Hotel Amenities:</label></p>
            </div>

            <div class="col-lg-2" style="margin-top: 6px;">
              <input type="checkbox" class="cbox" class="cbox" value="airportshuttle"> Airport Shuttle <br>
              <input type="checkbox" class="cbox" value="carhire"> Car Hire <br>
              <input type="checkbox" class="cbox" value="drycleaning"> Dry Cleaning <br>
              <input type="checkbox" class="cbox" value="giftshop"> Gift Shop <br>
              <input type="checkbox" class="cbox" value="resturent"> Resturent <br>
              <input type="checkbox" class="cbox" value="swimmingpool"> Swimming Pool
            </div>


            <div class="col-lg-2" style="margin-top: 6px;">
              <input type="checkbox" class="cbox" value="barbarshop"> Barbar Shop <br>
              <input type="checkbox" class="cbox" value="carparking"> Car Parking <br>
              <input type="checkbox" class="cbox" value="fitnesscenter"> Fitness Center <br>
              <input type="checkbox" class="cbox" value="indorpool"> Indor Pool <br>
              <input type="checkbox" class="cbox" value="roomservice"> Room Service <br>
              <input type="checkbox" class="cbox" value="sauna"> Sauna
            </div>

            <div class="col-lg-2" style="margin-top: 6px;">
              <input type="checkbox" class="cbox" value="beautyshop"> Beauty Shop <br>
              <input type="checkbox" class="cbox" value="freewifi"> Free WiFi <br>
              <input type="checkbox" class="cbox" value="laundry"> Laundry <br>
              <input type="checkbox" class="cbox" value="nonsmokingroom"> Non Smoking Room <br>
              <input type="checkbox" class="cbox" value="roomservice"> Safe Deposit Box <br>
            </div>
                     
        </div>

        <div class="row" style="margin-top: 10px;">
            <div class="col-lg-3" style="text-align: right;margin-top: 6px;">
                <p><label for="">Business & Function:</label></p>
            </div>

            <div class="col-lg-2" style="margin-top: 6px;">
              <input type="checkbox" class="cbox" class="cbox" value="conferenceroom"> Conference Room <br>            
            </div>


            <div class="col-lg-2" style="margin-top: 6px;">
              <input type="checkbox" class="cbox" value="functionhall"> Function Hall <br>
            </div>

            <div class="col-lg-2" style="margin-top: 6px;">
              <input type="checkbox" class="cbox" value="businesscenter"> Business Center <br>              
            </div>
                     
        </div>

        <div class="row">
            <div class="col-lg-3" style="text-align: right;margin-top: 18px;">
                <p><label for="">Hotel Main Image:</label></p>
            </div>

            <div>

                <div class="col-lg-4" style="text-align: left;margin-right: 10px;background: #ffffcc;padding-top: 10px;border-style: dotted;">
                    <p><button type="button" class="btn btn-default"> Choose File </button><label style="color: #3385ff;float: right;margin-top: 5px;" for="">No File Chosen</label></p>
                </div>                   
                
            </div>                                     
           
        </div>



        

        <div class="row" style="margin-top: 10px;">
            <div class="col-lg-4" style="text-align: right;margin-top: 6px;">
                
            </div>

            <div class="col-lg-1" style="text-align: center;margin-right: 10px;">
                <p><img src="cinqueterre.jpg" class="img-rounded" alt="Cinque Terre" width="150" height="150"></p>
            </div>
                     
        </div>        


        <div class="row" style="">
            <div class="col-xs-12">
                <hr style="color: #e6e6e6; border: solid 1px #e6e6e6;">
                <h7>&copy; Hotel.com. All Rights Reserved</h7>
            </div>            
        </div>          

    </div>
    <!-- /#page-wrapper -->
</div><!-- /#wrapper -->
</body>
</html>