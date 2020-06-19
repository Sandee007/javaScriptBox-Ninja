<?php//while loop ekata
//connection
$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn, "blood");

$detail = "SELECT * FROM member ";

$result = mysqli_query($conn, $detail);



?>


                        
<!---------EDIT second part-------->
<?php

$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn, "blood");

$id = '';
$name = '';
$idno = '';
$email = '';
$dob = '';
$gender = '';
$tp = '';
$city = '';
$address = '';


if (isset($_GET['getid']))//get id eken ena passwaord eka allagannawa 
{
    $getid = $_GET['getid'];
    
    $getdetail = "SELECT * FROM member WHERE id = '$getid'";
    
    $detailcheck = mysqli_query($conn, $getdetail);
    
    if ($detailcheck == true)
    {
        $detail_run = mysqli_fetch_assoc($detailcheck);
        
        $id = $detail_run['id'];//data table eke column 
        $name = $detail_run['name'];
        $idno = $detail_run['idnumber'];
        $email = $detail_run['email'];
        $dob = $detail_run['dob'];
        $gender = $detail_run['gender'];
        $tp = $detail_run['tp'];
        $city = $detail_run['city'];
        $address = $detail_run['address'];
        
    }
    else
    {
        
    }
     
}

?>


<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Blood Table | Blood Bank</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <!-- link fontawesome
		============================================ -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!--==============table link===============-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
<!--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->
    
    <link rel="stylesheet" type="text/css" href="Blood-details.css">
</head>

<body>
    
    <!-----------------------------MENU PANEL BOARD----------------------------------->
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="index.html"><img class="main-logo" src="img/logo/weblogo.png" alt="" /></a>
                <strong><img src="img/logo/weblogo.png" alt="" /></strong>
            </div>
            <!---------------PROFILE----------------->
			<div class="nalika-profile">
				<div class="profile-dtl">
					<a href="#"><img src="img/notification/userimg.png" alt="" /></a>
					<h2>Nuwan <span class="min-dtn">Jp</span></h2>
				</div>
				<!---ICON--->
				<div class="profile-social-dtl">
					<ul class="dtl-social">
						<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
				</div><!---ICON END--->
			</div>
           <!------------PROFILE END--------------->
           
           <!-----------DASHBOARD------------->
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li class="active">
                            <a class="has-arrow" href="index.html">
								   <i class="icon nalika-home icon-wrap"></i>
				<!------------HOME-------------->
								   <span class="mini-click-non">Home</span>
								</a>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li><a title="Dashboard v.2" href="index.html"><span class="mini-sub-pro">Dashboard v.1</span></a></li> 
                                <li><a title="Product Edit" href="BloodRequest.php"><span class="mini-sub-pro">Blood Request</span></a></li>
                                <li><a title="Product Cart" href="Transaction.php"><span class="mini-sub-pro">Transaction</span></a></li>
                            </ul>
                        </li>
                    <!------------MAILBOX-------------->
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="icon nalika-mail icon-wrap"></i> <span class="mini-click-non">Mailbox</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Inbox" href="mailbox.html"><span class="mini-sub-pro">Inbox</span></a></li>
                                <li><a title="View Mail" href="mailbox-view.html"><span class="mini-sub-pro">View Mail</span></a></li>
                                <li><a title="Compose Mail" href="mailbox-compose.html"><span class="mini-sub-pro">Compose Mail</span></a></li>
                            </ul> 
                        </li>
                    <!------------BLODD BANKS-------------->
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="icon nalika-diamond icon-wrap"></i> <span class="mini-click-non">Blodd Bnaks</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Google Map" href="google-map.html"><span class="mini-sub-pro">Google Map</span></a></li>
                            </ul> 
                        </li>
                    <!------------DETAILS-------------->
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="icon nalika-table icon-wrap"></i> <span class="mini-click-non">Details</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Peity Charts" href="Blood-details.html"><span class="mini-sub-pro">Blood Details</span></a></li>
                                <li><a title="Product List" href="DonorDetails.php"><span class="mini-sub-pro">Donor Details</span></a></li>
                                <li><a title="Peity Charts" href="memberdetails.php"><span class="mini-sub-pro">Member Details</span></a></li>
                                <li><a title="Data Table" href="Doctor-details.php"><span class="mini-sub-pro">Doctor Details</span></a></li>
                            </ul>
                        </li>
                    <!------------FORMS ELEMENTS-------------->
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="icon nalika-forms icon-wrap"></i> <span class="mini-click-non">Forms Elements</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Basic Form Elements" href="Donor-Elements.html"><span class="mini-sub-pro">Donor Elements</span></a></li>
                                <li><a title="Advance Form Elements" href="Doctor-Elements.html"><span class="mini-sub-pro">Doctor Elements</span></a></li>
                            </ul>
                        </li>
                    <!------------APP VIEW-------------->
                        <!-----------<li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="icon nalika-smartphone-call icon-wrap"></i> <span class="mini-click-non">App views</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Notifications" href="notifications.html"><span class="mini-sub-pro">Notifications</span></a></li>
                                <li><a title="Alerts" href="alerts.html"><span class="mini-sub-pro">Alerts</span></a></li>
                            </ul>
                        </li>-------------->
                    </ul>
                </nav>
            </div>
            <!---------DASHBOARD END---------->
        </nav>
    </div>
    <!-----MENU PANEL BOARD END----->
    
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="img/logo/weblogo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
													<i class="fa fa-bars" aria-hidden="true"></i>
												</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                            <ul class="nav navbar-nav mai-top-nav">
                                                <li class="nav-item"><a href="index.html" class="nav-link">Home</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
<!------------------------------RIGHT SIDE PROFILE AND MENU NEWS-------------------------------------------->                        
                                    
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                
                                              
                                <!---------------------------------PROFILE--------------------------------->
                                               
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
															<i class="fa fa-user-o" aria-hidden="true"></i><!--USER ICON(mark)-->
															<span class="admin-name">Profile</span>
															<i class="fa fa-angle-down" aria-hidden="true"></i>
												    </a>
                                                   <!---PROFILE LIST--->
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="register.html"><span class="icon nalika-home author-log-ic"></span> Register</a>
                                                        </li>
                                                        <li><a href="#"><span class="icon nalika-user author-log-ic"></span> My Profile</a>
                                                        </li>
                                                        <li><a href="#"><span class="icon nalika-settings author-log-ic"></span> Settings</a>
                                                        </li>
                                                        <li><a href="login.html"><span class="icon nalika-unlocked author-log-ic"></span> Log Out</a>
                                                        </li>
                                                    </ul><!---PROFILE LIST END--->
                                                </li><!--------END PROFILE---------->
                                                                                                           
                               <!-----------------------------MENU NEWS--------------------------------> 
                                               
                                                <li class="nav-item nav-setting-open">
                                                   <!---MENU ICON--->
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                        <i class="fa fa-bars" aria-hidden="true"></i><!--MENU ICON(mark)-->
                                                    </a><!---MENU ICON END--->
                                                    
                                                    <!--MENU NEWS DETAILS-->
                                                    <div role="menu" class="admintab-wrap menu-setting-wrap menu-setting-wrap-bg dropdown-menu animated zoomIn">
                                                        <ul class="nav nav-tabs custon-set-tab">
                                                            <li class="active"><a data-toggle="tab" href="#Notes">News</a>
                                                            </li>
                                                        </ul>
                                                        <!--LATEST NEWS-->
                                                        <div class="tab-content custom-bdr-nt">
                                                            <div id="Notes" class="tab-pane fade in active">
                                                                <div class="notes-area-wrap">
                                                                    <div class="note-heading-indicate">
                                                                        <h2><i class="icon nalika-chat"></i><!--CHAT ICON(mark)--> Latest News</h2>
                                                                        <p>You have 10 New News.</p>
                                                                    </div>
                                                                    <div class="notes-list-area notes-menu-scrollbar">
                                                                        <ul class="notes-menu-list">
                                                                            <li>
                                                                                <a href="#">
                                                                                    <div class="notes-list-flow">
                                                                                        <div class="notes-img">
                                                                                            <img src="img/contact/4.jpg" alt="" />
                                                                                        </div>
                                                                                        <div class="notes-content">
                                                                                            <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                            <span>Yesterday 2:45 pm</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <div class="notes-list-flow">
                                                                                        <div class="notes-img">
                                                                                            <img src="img/contact/1.jpg" alt="" />
                                                                                        </div>
                                                                                        <div class="notes-content">
                                                                                            <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                            <span>Yesterday 2:45 pm</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <div class="notes-list-flow">
                                                                                        <div class="notes-img">
                                                                                            <img src="img/contact/2.jpg" alt="" />
                                                                                        </div>
                                                                                        <div class="notes-content">
                                                                                            <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                            <span>Yesterday 2:45 pm</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <div class="notes-list-flow">
                                                                                        <div class="notes-img">
                                                                                            <img src="img/contact/3.jpg" alt="" />
                                                                                        </div>
                                                                                        <div class="notes-content">
                                                                                            <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                            <span>Yesterday 2:45 pm</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                        </div><!--END LATEST NEWS-->
                                                    </div><!-- ENDMENU NEWS DETAILS-->
                                                </li><!------END MENU NEWS----->
                                            </ul>
                                        </div>
                                    </div><!-------RIGHT SIDE PROFILE AND MENU NEWS--------->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a data-toggle="collapse" data-target="#Charts" href="#">Home <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul class="collapse dropdown-header-top">
                                                
                                                <li><a href="index.html">Dashboard v.1</a></li>
                                                
                                                <li><a href="product-list.html">Donor Details</a></li>
                                                <li><a href="product-edit.html">Blood Request</a></li>
                                                <li><a href="product-detail.html">Product Detail</a></li>
                                                <li><a href="product-cart.html">Transaction</a></li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demo" href="#">Mailbox <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul id="demo" class="collapse dropdown-header-top">
                                                <li><a href="mailbox.html">Inbox</a>
                                                </li>
                                                <li><a href="mailbox-view.html">View Mail</a>
                                                </li>
                                                <li><a href="mailbox-compose.html">Compose Mail</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="#">Blood Banks <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                                                <li><a href="google-map.html">Google Map</a>
                                                </li>
                                                <li><a href="data-maps.html">Data Maps</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Tablesmob" href="#">Doctor Details <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul id="Tablesmob" class="collapse dropdown-header-top">
                                                <li><a href="static-table.html">Static Table</a>
                                                </li>
                                                <li><a href="data-table.html">Data Table</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#formsmob" href="#">Forms <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul id="formsmob" class="collapse dropdown-header-top">
                                                <li><a href="basic-form-element.html">Donor Elements</a>
                                                </li>
                                                <li><a href="advance-form-element.html">Doctor Elements</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Appviewsmob" href="#">App views <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul id="Appviewsmob" class="collapse dropdown-header-top">
                                                <li><a href="notifications.html">Notificatons</a>
                                                </li>
                                                <li><a href="alerts.html">Alerts</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->
            
            <!-----SEARCH BAR AND PATH----->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcome-heading">
                                            <form role="search" class="">
                                                <input type="text" placeholder="Search..." class="form-control">
                                                <a href=""><i class="fa fa-search" aria-hidden="true"></i></a><!--SEARCH ICON-->
                                            </form>
                                        </div>
                                    </div>
                                    <!--PATH-->
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Blood Details</span>
                                            </li>
                                        </ul>
                                    </div><!--PATH END-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-----SEARCH BAR AND PATH END----->
        </div>
        
        
        
        
        


<div class="container">
        <div class="table-wrapper">
           
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Member <b>Details</b></h2></div>
                    
                    <div class="col-sm-4 add-new-btn">
                           <button>Add New</button>
                    </div>
                </div>
            </div>
<!--                         <div class="insert">   -->
                         
                     <style>
                         .d-none{
                             display:none !important;
                         }
                     </style>
                     
<div class="card justify-content-center text-center d-flex">
<form action="php/insertMember.php" method="post" class="insert-form d-none" >
<div class="form-group">
        <input type="hidden" name="memid" value="'.$id.'">
</div>
<table class="d-flex justify-content-center">
    <tr>
        <td>
           <!-- <div class="col-sm-3">-->
               <!--<div class="form-group">-->
                    <input type="text" name="name"  class="form-control" placeholder="Name">
                <!--</div>    second part eken value gannwa-->
           <!--</div>-->

        </td>
        <td>
          <!--<div class="col-sm-2">-->
                <!--<div class="form-group">-->
                    <input type="text" name="id"  class="form-control" placeholder="ID Card no">
                <!--</div>-->
           <!--</div>-->
        </td>
        <td>
            <!--<div class="col-sm-3">-->
                <!--<div class="form-group">-->
                    <input type="text" name="email"  class="form-control" placeholder="Email">
                <!--</div>-->
           <!-- </div>--> 
        </td>
        <td>
            <!--<div class="col-sm-3">-->
                <!--<div class="form-group">-->
                    <input type="text" name="dob"  class="form-control" placeholder="Date of Birth">
                <!--</div>-->
            <!--</div> -->
        </td>
    </tr><br>
     <tr>
        <td>
           <!-- <div class="col-sm-3">-->
                <!--<div class="form-group">-->
                    <input type="text" name="gender"  class="form-control" placeholder="Gender">
                <!--</div>-->
            <!--</div>--> 
        </td>
        <td>
           <!-- <div class="col-sm-3">-->
                <!--<div class="form-group">-->
                    <input type="text" name="tp"  class="form-control" placeholder="Conatct No">
                <!--</div>-->
            <!--</div>--> 
        </td>
        <td>
            <!--<div class="col-sm-3">-->
                <!--<div class="form-group">-->
                    <input type="text" name="city"  class="form-control" placeholder="City">
                <!--</div>-->
           <!-- </div> -->
        </td>
        <td>
           <!-- <div class="col-sm-3">-->
                <!--<div class="form-group">-->
                    <input type="text" name="address"  class="form-control" placeholder="Address">
                <!--</div>-->
           <!-- </div> -->
        </td>
    </tr><br>
     <!--<div class="col-sm-4">-->
        <button type="submit" name="submit" class="btn btn-info add-new"><i class="fa fa-plus"></i> Insert</button>
    <!--</div>--> 
</table>
</form>
</div>
<br><br><br>

<!--               <div class="row ">-->
<!--
                  <form action="php/insertMember.php" method="post" class="insert-form d-none" >
                   <div class="form-group">
                            <input type="hidden" name="memid" value="'.$id.'">
                    </div>
                        
                <div class="col-sm-3">
                       <div class="form-group">
                            <input type="text" name="name"  class="form-control" placeholder="Name">
                        </div>    second part eken value gannwa
                   </div>
                   
                      
                      <div class="col-sm-2">
                        <div class="form-group">
                            <input type="text" name="id"  class="form-control" placeholder="ID Card no">
                        </div>
                   </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <input type="text" name="email"  class="form-control" placeholder="Email">
                        </div>
                    </div>    
                    <div class="col-sm-3">
                        <div class="form-group">
                            <input type="text" name="dob"  class="form-control" placeholder="Date of Birth">
                        </div>
                    </div>
                    <div class="col-sm-3">    
                       <div class="form-group">
                            <input type="text" name="gender"  class="form-control" placeholder="Gender">
                        </div>
                   </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <input type="text" name="tp"  class="form-control" placeholder="Contact Number">
                        </div>
                   </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <input type="text" name="city"  class="form-control" placeholder="City">
                        </div>
                    </div>    
                    <div class="col-sm-3">
                        <div class="form-group">
                            <input type="text" name="address"  class="form-control" placeholder="Address">
                        </div>
                    </div> 
                      
                       <div class="col-sm-4">
                        <button type="submit" name="submit" class="btn btn-info add-new"><i class="fa fa-plus"></i> Insert</button>
                    </div> 
                      
                   </form> 
-->
<!--
                   </div>
                </div>
-->

            
            <script> 
//                console.log("123");
                const addNew = document.querySelector(".add-new-btn");
                const form = document.querySelector(".insert-form");
                
                addNew.addEventListener("click" , e => {
                    const test = form.classList.remove("d-none");
                    console.log(test);
                });
            </script>

            
            
            
            <?php ///Error of succesfull msg
                        if(isset($_GET['delete']))
                        {    
                        echo '<div class="alert alert-danger">Delete Successful!</div>';
                        }
                        if(isset($_GET['error']))
                        {
                             echo '<div class="alert alert-danger">Cant Delete!</div>';                            
                        }
                      ?>
                       
                      <!--Refresh and hide--> 
                    <script>  
                        
                        if(typeof window.history.pushState == "function")
                        {
                            window.history.pushState({}, "Hide", "memberdetails.php");
                        }
                    </script> <!---Error end--> 
            
            
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Id Card</th>
                        <th>Email</th>
                        <th>DoB</th>
                        <th>Gender</th>
                        <th>Contact No</th>
                        <th>City</th>
                        <th>Address</th>
                        <th>Action</th>
                        
                    </tr>
                </thead>
                <tbody>
                  
                  <!------data pennawa array ekak ------>
                   <?php
                    
                    
//while loop ekata
//connection
$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn, "blood");

$detail = "SELECT * FROM member ";

$result = mysqli_query($conn, $detail);


                    
                    if($result)
                    {
                        
                      while($row= mysqli_fetch_assoc($result))
                      {
                      
                          //get table details
                      echo' <tr>
                            <td>'.$row["id"].'</td>
                            <td>'.$row["name"].'</td>
                            <td>'.$row["idnumber"].'</td>
                            <td>'.$row["email"].'</td>
                            <td>'.$row["dob"].'</td>
                            <td>'.$row["gender"].'</td>
                            <td>'.$row["tp"].'</td>
                            <td>'.$row["city"].'</td>
                            <td>'.$row["address"].'</td>
                            <td>
                                                                 
                                <a href="memberdetails.php?getid='.$row["id"].'"><i class="material-icons">&#xE254;</i></a>
                                <a href="php/memeberdelete.php?delid='.$row["id"].'"><i class="material-icons">&#xE872;</i></a>
                            </td>
                        </tr>';
                      }                                   //get id get table details(from echo)
                    }
                  ?>

                         
                </tbody>
            </table>
        </div>
        
       
        
        <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->
        
      
     
        

<?php
 if (isset($_GET['getid']))
 {
                 
        echo'<div class="edit">   
               <div class="row">
                  <form action="php/updatemember.php" method="post" id="togglef1">
                   <div class="form-group">
                            <input type="hidden" name="memid" value="'.$id.'">
                    </div>
                        
                <div class="col-sm-3">
                       <div class="form-group">
                            <input type="text" name="name" value="'.$name.'" class="form-control" placeholder="Name">
                        </div>    <!--second part eken value gannwa-->
                   </div>
                   
                      
                      <div class="col-sm-2">
                        <div class="form-group">
                            <input type="text" name="id" value="'.$idno.'" class="form-control" placeholder="ID Card no">
                        </div>
                   </div> 
                    <div class="col-sm-3">
                        <div class="form-group">
                            <input type="text" name="email" value="'.$email.'" class="form-control" placeholder="Email">
                        </div>
                    </div>    
                    <div class="col-sm-3">
                        <div class="form-group">
                            <input type="text" name="dob" value="'.$dob.'" class="form-control" placeholder="Date of Birth">
                        </div>
                    </div>
                    <div class="col-sm-3">    
                       <div class="form-group">
                            <input type="text" name="gender" value="'.$gender.'" class="form-control" placeholder="Gender">
                        </div>
                   </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <input type="text" name="tp" value="'.$tp.'" class="form-control" placeholder="Contact Number">
                        </div>
                   </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <input type="text" name="city" value="'.$city.'" class="form-control" placeholder="City">
                        </div>
                    </div>    
                    <div class="col-sm-3">
                        <div class="form-group">
                            <input type="text" name="address" value="'.$address.'" class="form-control" placeholder="Address">
                        </div>
                    </div> 
                      
                       <div class="col-sm-4">
                        <button type="submit" name="btnadd" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button>
                    </div> 
                      
                   </form> 
                   </div>
                </div>';
          
            }
    
    ?>
        
            </div>
        </div>


                

       
       <!-- Static Table Start -->
        <!------------<div class="data-table-area mg-tb-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                  <table id="customers">
                                    <tr>
                                        <th>Doctor Full Name</th>
                                        <th>ID</th>
                                        <th>Doctor #####</th>
                                        <th>Contact-No</th>
                                        <th>Work Place</th>
                                        <th>Action</th>
                                    </tr>
                                <div class="Details">
                                    <tr>
                                        <td>Alfreds Futterkisteghf</td>
                                        <td>Maria Anders</td>
                                        <td>Germany</td>
                                        <td>vgd</td>
                                        <td>bbvb</td>
                                    </tr>
                                    <tr>
                                        <td>Berglunds snabbköp</td>
                                        <td>Christina Berglund</td>
                                        <td>Sweden</td>
                                        <td>bbvb</td>
                                        <td>bbvb</td>
                                    </tr>
                                    <tr>
                                        <td>Centro comercial Moctezuma</td>
                                        <td>Francisco Chang</td>
                                        <td>Mexico</td>
                                        <td>bbvb</td>
                                        <td>bbvb</td>
                                    </tr>
                                    <tr>
                                        <td>Ernst Handel</td>
                                        <td>Roland Mendel</td>
                                        <td>Austria</td>
                                        <td>bbvb</td>
                                        <td>bbvb</td>
                                    </tr>
                                    <tr>
                                        <td>Island Trading</td>
                                        <td>Helen Bennett</td>
                                        <td>UK</td>
                                        <td>bbvb</td>
                                        <td>bbvb</td>
                                    </tr>
                                    <tr>
                                        <td>Königlich Essen</td>
                                        <td>Philip Cramer</td>
                                        <td>Germany</td>
                                        <td>bbvb</td>
                                        <td>bbvb</td>
                                    </tr>
                                    <tr>
                                        <td>Laughing Bacchus Winecellars</td>
                                        <td>Yoshi Tannamuri</td>
                                        <td>Canada</td>
                                        <td>bbvb</td>
                                        <td>bbvb</td>
                                    </tr>
                                    <tr>
                                        <td>Magazzini Alimentari Riuniti</td>
                                        <td>Giovanni Rovelli</td>
                                        <td>Italy</td>
                                        <td>bbvb</td>
                                        <td>bbvb</td>
                                    </tr>
                                    <tr>
                                        <td>North/South</td>
                                        <td>Simon Crowther</td>
                                        <td>UK</td>
                                        <td>bbvb</td>
                                        <td>bbvb</td>
                                    </tr>
                                    <tr>
                                        <td>Paris spécialités</td>
                                        <td>Marie Bertrand</td>
                                        <td>France</td>
                                        <td>bbvb</td>
                                        <td>bbvb</td>
                                    </tr>
                                </div>
                                </table>----------------->
                                    <!-----------------------------------
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                           <div class="T-head">
                                            <tr>
                                                <th data-field="state" data-checkbox="true"></th>
                                                <th data-field="id">ID</th>
                                                <th data-field="name" data-editable="true">Doctor Name</th>
                                                <th data-field="company" data-editable="true">Contact-No</th>
                                                <th data-field="price" data-editable="true">Work Place</th>
												<th data-field="date" data-editable="true">Date</th>
												<th data-field="task" data-editable="true">Status</th>
												<th data-field="email" data-editable="true">Total Sales</th>
                                                <th data-field="action">Action</th>
                                            </tr>
                                            </div>
                                        </thead>
                                        <tbody>
                                           <div class="T-body">
                                            <tr>
                                                <td></td>
                                                <td>1</td>
                                                <td>name</td>
                                                <td>0725415893</td>
												<td>$</td>
												<td>Jul 14, 2017</td>
                                                <td>Active</td>
												<td>$700</td>
                                                <td class="datatable-ct"><i class="fa fa-check"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>2</td>
                                                <td>name</td>
                                                <td>0725415893</td>
												<td>$</td>
												<td>Jul 14, 2017</td>
                                                <td>Active</td>
												<td>$700</td>
                                                <td class="datatable-ct"><i class="fa fa-check"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>3</td>
                                                <td>name</td>
                                                <td>0725415893</td>
												<td>$</td>
												<td>Jul 14, 2017</td>
                                                <td>Active</td>
												<td>$700</td>
                                                <td class="datatable-ct"><i class="fa fa-check"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>4</td>
                                                <td>name</td>
                                                <td>0725415893</td>
												<td>$</td>
												<td>Jul 14, 2017</td>
                                                <td>Active</td>
												<td>$700</td>
                                                <td class="datatable-ct"><i class="fa fa-check"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>5</td>
                                                <td>name</td>
                                                <td>0725415893</td>
												<td>$</td>
												<td>Jul 14, 2017</td>
                                                <td>Active</td>
												<td>$700</td>
                                                <td class="datatable-ct"><i class="fa fa-check"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>6</td>
                                                <td>name</td>
                                                <td>0725415893</td>
												<td>$</td>
												<td>Jul 14, 2017</td>
                                                <td>Active</td>
												<td>$700</td>
                                                <td class="datatable-ct"><i class="fa fa-check"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>7</td>
                                                <td>name</td>
                                                <td>0725415893</td>
												<td>$</td>
												<td>Jul 14, 2017</td>
                                                <td>Active</td>
												<td>$700</td>
                                                <td class="datatable-ct"><i class="fa fa-check"></i>
                                                </td>
                                            </tr>
                                            
                                            </div>
                                        </tbody>
                                    </table>------------------------------------------>
                                <!-------</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>---------------->
        <!-------FOOTER-------->
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2020 <a href="https://colorlib.com/wp/templates/">BLOOD BANK</a> All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-------FOOTER END-------->
    
    </div>

    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- peity JS
		============================================ -->
    <script src="js/peity/jquery.peity.min.js"></script>
    <script src="js/peity/peity-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="js/tab.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
</body>

</html>