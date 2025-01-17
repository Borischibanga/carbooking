<!DOCTYPE html>
<html lang="zxx">
   <head>
      <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <meta charset="utf-8">
	  <meta http-equiv="x-ua-compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
	  <meta name="description" content="">
	  <meta name="keyword" content="">
	  <meta name="author"  content=""/>
      <!-- Page Title -->
      <title>Captain Travel & Tours</title>
      <!-- Main CSS -->			
      <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
      <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
      <link href="assets/plugins/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
      <link href="assets/plugins/ionicons/css/ionicons.css" rel="stylesheet">
      <link href="assets/plugins/toastr/toastr.min.css" rel="stylesheet">
      <link href="assets/plugins/morris/morris.min.css" rel="stylesheet">
      <link href="assets/css/skin-turquoise.css" rel="stylesheet" id="style-colors">
      <link href="assets/css/app.min.css" rel="stylesheet"/>
      <link href="assets/css/style.css" rel="stylesheet"/>
      <!-- Favicon -->	
      <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
      <style>
         table, td, th {  
          border: 1px solid #ddd;
          text-align: left;
        }
        
        table {
          border-collapse: collapse;
          max-width: 100%;
         width:90%;
    
        }
        .table-data{
          
          width:65%;
          float: right;
        }
        th, td {
          padding: 15px;
        }
    body{
        overflow-x: hidden;
    }
    
    * {
      box-sizing: border-box;}
    </style>
      
   </head>
   <body>
      <!--================================-->
      <!-- Page Container Start -->
      <!--================================-->
      <div class="page-container">
         <!--================================-->
         <!-- Page Sidebar Start -->
         <!--================================-->
         <div class="page-sidebar">
            <a class="logo-box" href="index.html">
            <span><img src="assets/images/logo-white.png" alt=""></span>
            <i class="ion-aperture" id="fixed-sidebar-toggle-button"></i>
            <i class="ion-ios-close-empty" id="sidebar-toggle-button-close"></i>
            </a>
            <div class="page-sidebar-inner">
               <div class="page-sidebar-menu">
                  <ul class="accordion-menu">
                     <li class="open active">

                        <span><a href="index.html">Dashboard</a></li></span><i class="accordion-icon fa fa-angle-left"></i>
                     </li>
                     <li>
                        <a href="javascript:void(0)"><i class="fa fa-envelope-o"></i>
                        <span>Contacts</span><span class="badge-warning ft-right">10+</span></a>
                        <ul class="sub-menu">
                           <li><a href="contacts.html">Inbox</a></li>
                           <li><a href="mailbox-message.html">View Mail</a></li>
                           <li><a href="mailbox-compose.html">Compose Mail</a></li>
                        </ul>
                     </li>
   
                     <li>
                        <a href="javascript:void(0)"><i class="fa fa-pie-chart"></i>
                        <span>Reservations</span><i class="accordion-icon fa fa-angle-left"></i></a>
                        <ul class="sub-menu">
                           <li><a href="chart-morris.html">Pending Reservations</a></li>
                           <li><a href="chart-chartjs.html">Completed Reservations</a></li>
                           <li><a href="chart-flot.html">Cancelled Reservations</a></li>
                        </ul>
                     </li>
                     <li class="menu-divider mg-y-20-force"></li>
                     <li>
                        <a href="javascript:void(0)"><i class="fa fa-file-powerpoint-o"></i>
                        <span>Pages</span><i class="accordion-icon fa fa-angle-left"></i></a>
                        <ul class="sub-menu">
                          
                           <li><a href="page-profile.html">Profile</a></li>
                           <li><a href="page-singin.html">Login</a></li>
                           <li><a href="page-singup.html">Register</a></li>
                           
                           <li><a href="page-password.html">password Reset</a></li>
                           
                        </ul>
                     </li>
                     
                     <li class="menu-divider mg-y-20-force"></li>                     
                     <li class="mg-20-force menu-others">Others</li>
                     <li>
                        <a href="../documentation/documentation.html"><i class="fa fa-cogs"></i>
                        <span>Documentation</span></a>
                     </li>
                    
                  </ul>
               </div>
               <!--================================-->
               <!-- Sidebar Information Summary -->
               <!--================================-->		
               <div class="sidebar-info-summary mg-y-80">
                 
                 
                  
               </div>
            </div>
            <!--================================-->
            <!-- Sidebar Footer Start -->
            <!--================================-->
            <div class="sidebar-footer">									
               <a class="pull-left" href="page-profile.html" data-toggle="tooltip" data-placement="top" data-original-title="Profile">
               <i class="icon-user"></i></a>									
               <a class="pull-left " href="mailbox.html" data-toggle="tooltip" data-placement="top" data-original-title="Mailbox">
               <i class="icon-envelope"></i></a>
               <a class="pull-left" href="page-unlock.html" data-toggle="tooltip" data-placement="top" data-original-title="Lockscreen">
               <i class="icon-lock"></i></a>
               <a class="pull-left" href="page-singin.html" data-toggle="tooltip" data-placement="top" data-original-title="Sing Out">
               <i class="icon-power"></i></a>
            </div>
            <!--/ Sidebar Footer End -->
         </div>
         <!--/ Page Sidebar End -->
         <!--================================-->
         <!-- Page Content Start -->
         <!--================================-->
         <div class="page-content">
            <!--================================-->
            <!-- Page Header Start -->
            <!--================================-->
            <div class="page-header">
               <div class="search-form">
                  <form action="#" method="GET">
                     <div class="input-group">
                        <input class="form-control search-input" name="search" placeholder="Type something..." type="text"/>
                        <span class="input-group-btn"><span id="close-search"><i class="ion-ios-close-empty"></i></span></span>
                     </div>
                  </form>
               </div>
               <nav class="navbar navbar-default">
                  <!--================================-->
                  <!-- Brand and Logo Start -->
                  <!--================================-->
                  <div class="navbar-header">
                     <div class="navbar-brand">
                        <ul class="list-inline">
                           <!-- Mobile Toggle and Logo -->
                           <li class="list-inline-item"><a class="hidden-md hidden-lg" href="javascript:void(0)" id="sidebar-toggle-button"><i class="ion-navicon tx-20"></i></a></li>
                           <!-- PC Toggle and Logo -->
                           <li class="list-inline-item"><a class="text-muted hidden-xs hidden-sm" href="javascript:void(0)" id="collapsed-sidebar-toggle-button"><i class="ion-navicon tx-20"></i></a></li>
                           <li class="list-inline-item mg-l-10"><a class="text-muted" href="javascript:void(0)" id="search-button"><i class="ion-ios-search-strong tx-20"></i></a></li>
                        </ul>
                     </div>
                  </div>
                  <!--/ Brand and Logo End -->
                  <!--================================-->
                  <!-- Header Right Start -->
                  <!--================================-->
                  <div class="header-right pull-right">
                     <ul class="list-inline justify-content-end">
                        <!--================================-->
                        <!-- Languages Dropdown Start -->
                        <!--================================-->
                        <li class="list-inline-item dropdown hidden-xs hidden-sm">
                           <a class="text-muted" href="javascript:void(0)" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <img src="assets/images/flags/usa.png" class="mg-b-5 wd-20 img-fluid" alt="">
                           </a>
                          
                        </li>
                        
                        <li class="list-inline-item dropdown hidden-xs hidden-sm">
                           <a class="text-muted" href="javascript:void(0)" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <i class="ion-ios-email-outline tx-20"></i>
                           <span class="messages-count wave in"></span>
                           </a>
                           <ul class="dropdown-menu shadow-2">
                              <li class="messages-header">
                                 <span class="float-left">Messages (3)</span>
                                 <a href="javascript:void(0)" class="float-right">Mark all as read</a>
                              </li>
                              <li class="messages-box">
                                 <div class="row">
                                    <div class="col-lg-3 col-sm-3 col-3 text-center">
                                       <img src="assets/images/avatar/avatar4.png" class="mg-10 w-100 rounded-circle" alt="">
                                    </div>
                                    <div class="col-lg-8 col-sm-8 col-8">
                                       <strong>David John</strong>
                                       <div class="tx-12">
                                          Lorem ipsum dolor sit ipsum dolor sit amet, consectetur
                                       </div>
                                       <small class="tx-gray-500">27.11.2015, 15:00</small>
                                    </div>
                                 </div>
                              </li>
                              <li class="messages-box">
                                 <div class="row">
                                    <div class="col-lg-3 col-sm-3 col-3 text-center">
                                       <img src="assets/images/avatar/avatar2.png" class="mg-10 w-100 rounded-circle" alt="">
                                    </div>
                                    <div class="col-lg-8 col-sm-8 col-8">
                                       <strong>David John</strong>
                                       <div class="tx-12">
                                          Lorem ipsum dolor sit ipsum dolor sit amet, consectetur
                                       </div>
                                       <small class="tx-gray-500">27.11.2015, 15:00</small>
                                    </div>
                                 </div>
                              </li>
                              <li class="messages-box">
                                 <div class="row">
                                    <div class="col-lg-3 col-sm-3 col-3 text-center">
                                       <img src="assets/images/avatar/avatar6.png" class="mg-10 w-100 rounded-circle" alt="">
                                    </div>
                                    <div class="col-lg-8 col-sm-8 col-8">
                                       <strong>David John</strong>
                                       <div class="tx-12">
                                          Lorem ipsum dolor sit ipsum dolor sit amet, consectetur
                                       </div>
                                       <small class="tx-gray-500">27.11.2015, 15:00</small>
                                    </div>
                                 </div>
                              </li>
                              <li class="messages-footer text-center">
                                 <a href="javascript:void(0)">View All</a>
                              </li>
                           </ul>
                        </li>
                        <!--/ Messages Dropdown End -->
                        <!--================================-->
                        <!-- Profile Dropdown Start -->
                        <!--================================-->
                        <li class="list-inline-item dropdown">
                           <a class="text-muted" href="javascript:void(0)" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <span class="select-profile">Admin</span>
                           <img src="assets/images/avatar/avatar.png" class="mg-b-10 img-fluid wd-30" alt="">
                           </a>
                           <ul class="dropdown-menu profile-dropdown shadow-2">
                              <li>
                                 <a href="page-profile.html"><i class="icon-user"></i><span>My Profile</span></a>
                              </li>
                              <li>
                                 <a href="javascript:void(0)"><i class="icon-pencil"></i><span>Edit Profile</span></a>
                              </li>
                              <li>
                                 <a href="javascript:void(0)"><i class="icon-action-redo"></i><span>Activity Log</span></a>
                              </li>
                              <li>
                                 <a href="javascript:void(0)"><i class="icon-calendar"></i><span>My Calendar</span></a>
                              </li>
                              <li>
                                 <a href="javascript:void(0)"><i class="icon-cloud-download"></i><span>My Download</span></a>
                              </li>
                              <li>
                                 <hr class="hr-style">
                              </li>
                              <li>
                                 <a href="javascript:void(0)"><i class="icon-settings"></i><span>Settings</span></a>
                              </li>
                              <li>
                                 <a href="page-unlock.html"><i class="icon-lock"></i><span>Lockscreen</span></a>
                              </li>
                              <li>
                                 <a href="page-singin.html"><i class="icon-logout"></i><span>Sing Out</span></a>
                              </li>
                           </ul>
                        </li>
                        <!-- Profile Dropdown End -->
                     </ul>
                  </div>
                  <!--/ Header Right End -->
               </nav>
            </div>
            <!--/ Page Header End -->
            <!--================================-->
            <!-- Page Inner Start -->
            <!--================================-->
            <div class="page-inner">
               <!--================================-->
               <!-- Main Wrapper Start -->
               <!--================================-->
               <div id="main-wrapper">
                  <!--================================-->
                  <!-- Breadcrumb Start -->
                  <!--================================-->
                  <div class="pageheader pd-y-25">
                     <div class="pd-t-5 pd-b-5">
                        <h1 class="pd-0 mg-0 tx-20 text-overflow">Sending the Message</h1>
                  <div class="row clearfix">
                   <div class="table-data">
                           
<form action="sending_message" method="POST">

  <fieldset>


    Full Name:<br>

    <input type="text" name="full_name">

    <br>

    Email:<br>

    <input type="email" name="email">

    <br>

    subject:<br>

    <input type="text" name="subject">

    <br>

    Message:<br>

    <input type="text" name="message" >

    <br><br>

    <input type="submit" name="submit" value="Send">

  </fieldset>

</form>

                  </div>
                  
                  <!--================================-->
                  <!-- Social Activity 2 Start -->
                  <!--================================-->
                  <div class="row clearfix">
                     <div class="col-md-4">
                        <div class="card mb-4 text-white bg-twitter shadow-1">
                           <div class="card-body">
                              <i class="fa fa-twitter tx-30 mb-3"></i>
                              <h6 class="card-title text-light tx-13">Some quick example text to build on the card title and make up the bulk of the card's content.</h6>
                              <span class="float-left tx-11">11 January, 2018</span>
                              <div class=" float-right">
                                 <span class="mr-3 tx-11"> <i class="fa fa-heart"></i> 234</span>
                                 <span class="tx-11"> <i class="fa fa-thumbs-up "></i> 456</span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="card mb-4 text-white bg-facebook shadow-1">
                           <div class="card-body">
                              <i class="fa fa-facebook tx-30 mb-3"></i>
                              <h6 class="card-title text-light tx-13">Some quick example text to build on the card title and make up the bulk of the card's content.</h6>
                              <span class="float-left tx-11">11 January, 2018</span>
                              <div class=" float-right">
                                 <span class="mr-3 tx-11"> <i class="fa fa-heart"></i> 234</span>
                                 <span class="tx-11"> <i class="fa fa-thumbs-up "></i> 456</span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="card mb-4 text-white bg-google-plus shadow-1">
                           <div class="card-body">
                              <i class="fa fa-google-plus tx-30 mb-3"></i>
                              <h6 class="card-title text-light tx-13">Some quick example text to build on the card title and make up the bulk of the card's content.</h6>
                              <span class="float-left tx-11">11 January, 2018</span>
                              <div class=" float-right">
                                 <span class="mr-3 tx-11"><i class="fa fa-heart"></i> 234</span>
                                 <span class="tx-11"><i class="fa fa-thumbs-up"></i> 456</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!--/ Social Activity 2 End -->
               </div>
               <!--/ Main Wrapper End -->
            </div>
            <!--/ Page Inner End -->
            <!--================================-->
            <!-- Page Footer Start -->	
            <!--================================-->
            <footer class="page-footer bg-gray-100">
               <div class="pd-y-10 pd-x-25">
                  <span class="tx-italic text-muted">Copyright&copy; 2019</span>
               </div>
            </footer>
            <!-- Page Footer End -->	
         </div>
         <!-- / End Page Content -->
      </div>
      <!--/ Page Container -->
      <!--================================-->
      <!-- Color switcher Start -->
      <!--================================-->	
      <div class="color-switcher hide-color-switcher">
         <!--Color switcher Show/Hide button -->
         <a class="switcher-button"><i class="fa fa-cog fa-spin"></i></a>
         <!-- Color switcher title -->
         <div class="color-switcher-title">
            <span class="tx-16 text-center">Color Switcher</span>
         </div>
         <!-- Colors style -->
         <div class="color-list">
            <a class="color turquoise-theme" title="turquoise"></a>
            <a class="color emerald-theme" title="emerald"></a>
            <a class="color peter-river-theme" title="peter-river"></a>
            <a class="color amethyst-theme" title="amethyst"></a>
            <a class="color wet-asphalt-theme" title="wet-asphalt"></a>
            <a class="color green-sea-theme" title="green-sea"></a>
            <a class="color nephritis-theme" title="nephritis"></a>
            <a class="color belize-hole-theme" title="belize-hole"></a>
            <a class="color wisteria-theme" title="wisteria"></a>
            <a class="color midnight-blue-theme" title="midnight-blue"></a>
            <a class="color sun-flower-theme" title="sun-flower"></a>
            <a class="color carrot-theme" title="carrot"></a>
            <a class="color alizarin-theme" title="alizarin"></a>
            <a class="color concrete-theme" title="concrete"></a>
            <a class="color orange-theme" title="orange"></a>
            <a class="color pumpkin-theme" title="pumpkin"></a>
            <a class="color bordeaux-theme" title="bordeaux"></a>
            <a class="color dark-theme" title="dark"></a>
         </div>
      </div>
      <!--/ Color switcher  End -->
      <!--================================-->
      <!-- Scroll To Top Start-->
      <!--================================-->	
      <a href="#" data-click="scroll-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
      <!--/ Scroll To Top End --> 
      <!--================================-->
      <!-- Footer Script -->	
      <!--================================-->
      <script src="assets/plugins/jquery/jquery.min.js"></script>
      <script src="assets/plugins/jquery-ui/jquery-ui.js"></script>
      <script src="assets/plugins/popper/popper.js"></script>
      <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
      <script src="assets/plugins/pace/pace.min.js"></script>
      <script src="assets/plugins/toastr/toastr.min.js"></script>
      <script src="assets/plugins/morris/morris.min.js"></script>
      <script src="assets/plugins/morris/raphael.min.js"></script>
      <script src="assets/js/jquery.slimscroll.min.js"></script>
      <script src="assets/js/highlight.min.js"></script>
      <script src="assets/js/adminify.js"></script>
      <script src="assets/js/custom.js"></script>
      <script>
         // Toster Notification
         $(document).ready(function() {
         	setTimeout(function() {
         		toastr.options = {
         			positionClass: 'toast-top-right',
         			closeButton: true,
         			progressBar: true,
         			showMethod: 'slideDown',
         			timeOut: 5000
         		};
         		toastr.info('Multipurpose Admin Template', 'Hi, welcome to Adminify');
         
         	}, 300);
         
         });		 
         
         // MORRIS AREA CHART 2
         var chart = Morris.Area({
         element: 'area2',
         data: [{
         period: 'January 16',
         dl: 77,
         up: 125
         }, {
         period: 'February 16',
         dl: 227,
         up: 88
         }, {
         period: 'March 16',
         dl: 215,
         up: 60
         }, {
         period: 'April 16',
         dl: 239,
         up: 57
         }, {
         period: 'May 16',
         dl: 146,
         up: 75
         }, {
         period: 'June 16',
         dl: 197,
         up: 57
         }, {
         period: 'July 16',
         dl: 105,
         up: 70
         }, {
         period: 'August 16',
         dl: 115,
         up: 106
         }, {
         period: 'September 16',
         dl: 239,
         up: 187
         }, {
         period: 'October 16',
         dl: 97,
         up: 57
         }, {
         period: 'November 16',
         dl: 189,
         up: 70
         }, {
         period: 'December 16',
         dl: 65,
         up: 30
         }, {
         period: 'January 17',
         dl: 35,
         up: 90
         }, {
         period: 'February 17',
         dl: 127,
         up: 58
         }, {
         period: 'March 17',
         dl: 115,
         up: 46
         }, {
         period: 'April 17',
         dl: 239,
         up: 57
         }, {
         period: 'May 17',
         dl: 46,
         up: 75
         }, {
         period: 'June 17',
         dl: 97,
         up: 57
         }, {
         period: 'July 17',
         dl: 105,
         up: 70
         }, {
         period: 'August 17',
         dl: 115,
         up: 106
         }, {
         period: 'September 17',
         dl: 239,
         up: 187
         }, {
         period: 'October 17',
         dl: 97,
         up: 57
         }, {
         period: 'November 17',
         dl: 189,
         up: 70
         }, {
         period: 'January 17',
         dl: 35,
         up: 90
         }, {
         period: 'February 17',
         dl: 127,
         up: 58
         }, {
         period: 'March 17',
         dl: 115,
         up: 46
         }, {
         period: 'April 17',
         dl: 239,
         up: 57
         }, {
         period: 'May 17',
         dl: 46,
         up: 75
         }, {
         period: 'June 17',
         dl: 97,
         up: 57
         }, {
         period: 'July 17',
         dl: 105,
         up: 70
         }, {
         period: 'August 17',
         dl: 115,
         up: 106
         }, {
         period: 'September 17',
         dl: 239,
         up: 187
         }, {
         period: 'October 17',
         dl: 97,
         up: 57
         }, {
         period: 'November 17',
         dl: 189,
         up: 70
         }, {
         period: 'December 17',
         dl: 65,
         up: 30
         }, {
         period: 'January 18',
         dl: 35,
         up: 90
         }, {
         period: 'February 18',
         dl: 127,
         up: 58
         }, {
         period: 'March 18',
         dl: 115,
         up: 46
         }, {
         period: 'April 18',
         dl: 239,
         up: 57
         }, {
         period: 'May 18',
         dl: 46,
         up: 75
         }, {
         period: 'June 18',
         dl: 97,
         up: 57
         }, {
         period: 'July 18',
         dl: 105,
         up: 70
         }, {
         period: 'August 18',
         dl: 115,
         up: 106
         }, {
         period: 'September 18',
         dl: 239,
         up: 187
         }, {
         period: 'October 18',
         dl: 97,
         up: 57
         }, {
         period: 'November 18',
         dl: 189,
         up: 70
         }, {
         period: 'December 18',
         dl: 65,
         up: 30
         }, {
         period: 'January 19',
         dl: 35,
         up: 90
         }],
         gridEnabled: true,
         gridLineColor: 'rgba(0,0,0,.1)',
         gridTextColor: '#10171e',
         gridTextSize: '11px',
         behaveLikeLine: true,
         smooth: true,
         xkey: 'period',
         ykeys: ['dl', 'up'],
         labels: ['Visitor', 'Pageview'],
         lineColors: ['#bfbfcf', '#17a2b8'],
         pointSize: 0,
         pointStrokeColors: ['#17a2b8'],
         lineWidth: 0,
         resize: true,
         hideHover: 'auto',
         fillOpacity: 0.9,
         parseTime: false
         });
         
         chart.options.labels.forEach(function (label, i) {
         var legendItem = $('<div class=\'morris-legend-items\'></div>').text(label);
         $('<span></span>').css('background-color', chart.options.lineColors[i]).prependTo(legendItem);
         $('#area-legend').append(legendItem)
         })
         
      </script>
   </body>
</html>