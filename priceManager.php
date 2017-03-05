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
                        <li><a href="hotelManager.php"><i class="fa fa-angle-double-right"></i> Hotel MAnager</a></li>
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
                <h3 style="color: #007acc;">Price Manager </h3>
                <hr style="color: #e6e6e6; border: solid 1px #e6e6e6;">
            </div>            
        </div>            

        <div class="row">
            <div class="col-lg-12" style="text-align: right;"><p><button type="button" class="btn btn-success" style="width: 102px;"> Add Room </button></p></div>            
        </div>

        <div class="row">
            <div class="col-lg-1" style="text-align: left;"><p><input class="form-control" type="text"></p></div>      
            <div class="col-lg-2" style="text-align: left;margin-top: 6px;">Record Per Page</div>
            <div class="col-lg-5"></div>
            <div class="col-lg-2" style="text-align: right;margin-top: 6px;">Search</div>
            <div class="col-lg-2" style="text-align: right;"><input class="form-control" type="text"></div>
        </div>

        <div class="row">
        <div class="container-fluid">

         <table class="table table-bordered">
            <thead>
              <tr>
                <th>SL No: <i class="fa fa-fw fa-sort"></i></th>
                <th>Room Type <i class="fa fa-fw fa-sort"></i></th>
                <th>Available Room <i class="fa fa-fw fa-sort"></i></th>
                <th>Available TO <i class="fa fa-fw fa-sort"></i></th>
                <th>Board Type <i class="fa fa-fw fa-sort"></i></th>
                <th>Tax & Service <i class="fa fa-fw fa-sort"></i></th>
                <th>Currency <i class="fa fa-fw fa-sort"></i></th>
                <th>Price <i class="fa fa-fw fa-sort"></i></th>
                <th>Status <i class="fa fa-fw fa-sort"></i></th>
                <th>Action <i class="fa fa-fw fa-sort"></i></th>
               
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Single </td>
                <td>5 </td>
                <td>26-03-2017</td>
                <td>Breakfast Include </td>
                <td>Include </td>
                <td>OMR </td>
                <td>50 </td>
                <td>Active </td>
                <td>View/Inactive </td>
              </tr>
              <tr>
                <td>2</td>
                <td>Single </td>
                <td>5 </td>
                <td>26-03-2017</td>
                <td>Breakfast Include </td>
                <td>Include </td>
                <td>OMR </td>
                <td>50 </td>
                <td>Active </td>
                <td>View/Inactive </td>
              </tr>
              <tr>
                <td>3</td>
                <td>Single </td>
                <td>5 </td>
                <td>26-03-2017</td>
                <td>Breakfast Include </td>
                <td>Include </td>
                <td>OMR </td>
                <td>50 </td>
                <td>Active </td>
                <td>View/Inactive </td>
              </tr>
              <tr>
                <td>4</td>
                <td>Single </td>
                <td>5 </td>
                <td>26-03-2017</td>
                <td>Breakfast Include </td>
                <td>Include </td>
                <td>OMR </td>
                <td>50 </td>
                <td>Active </td>
                <td>View/Inactive </td>
              </tr>
              <tr>
                <td>5</td>
                <td>Single </td>
                <td>5 </td>
                <td>26-03-2017</td>
                <td>Breakfast Include </td>
                <td>Include </td>
                <td>OMR </td>
                <td>50 </td>
                <td>Active </td>
                <td>View/Inactive </td>
              </tr>
              <tr>
                <td>6</td>
                <td>Single </td>
                <td>5 </td>
                <td>26-03-2017</td>
                <td>Breakfast Include </td>
                <td>Include </td>
                <td>OMR </td>
                <td>50 </td>
                <td>Active </td>
                <td>View/Inactive </td>
              </tr>
            </tbody>
        </table>
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