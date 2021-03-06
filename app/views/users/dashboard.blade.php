<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="cse311 final project">
    <meta name="author" content="rakeen">
    <link rel="shortcut icon" href="images/favicon.png">
    <title>HRMS</title>


    <!-- CSS Dependencies -->
    <link href="css/normalize.min.css" rel="stylesheet">
    <link href="assets/jquery-ui/jquery-ui-1.10.1.custom.min.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    
        
    <!-- Custom styles for this Page -->
    <link href="css/style.css" rel="stylesheet">
    
    
    @yield('style')
</head>



<body>
<section id="container">
    <!--header start-->
    <header class="header fixed-top clearfix">
    <!--logo start-->
    <div class="brand">

        <a href="index.html" class="logo">
            <img src="" alt="HRMS!">
        </a>
        <div class="sidebar-toggle-box">
            <div class="fa fa-bars"></div>
        </div>
    </div>
    <!--logo end-->


    <div class="top-nav clearfix">
        <!--search & user info start-->
        <ul class="nav pull-right top-menu">
            
            <!-- user login dropdown start-->
            <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <img alt="" src="images/avatar1_small.jpg">
                    <span class="username">
                        <?php
                            $uName=Auth::user()->UserInfo->first_name;
                            $uName.=" ";
                            $uName.=Auth::user()->UserInfo->last_name;
                        ?>
                        {{-- Session::get('user_name') --}}
                        {{ $uName }}
                    </span>
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu extended logout">
                    <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                    <li><a href="/logout"><i class="fa fa-key"></i> Log Out</a></li>
                </ul>
            </li>
            <!-- user login dropdown end -->

        </ul>
        <!--search & user info end-->
    </div>
    </header>
    <!--header end-->
    <!--sidebar start-->
    
    
    <?php $utype=Auth::user()->user_type; ?>

    @if($utype =="Employee")
        @include('users.employee.sidebar')
    @else
        @include('users.manager.sidebar')
    @endif


    <section id="main-content">
        <section class="wrapper">
            @yield('main')
        </section>
    </section>


</section>

<!-- Placed js at the end of the document so the pages load faster -->
<!--Core js-->
<script src="js/lib/jquery.js"></script>
<script src="assets/jquery-ui/jquery-ui-1.10.1.custom.min.js"></script>
<script src="js/accordion-menu/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scrollTo/jquery.scrollTo.min.js"></script>
<script src="assets/jQuery-slimScroll-1.3.0/jquery.slimscroll.js"></script>
<script src="js/nicescroll/jquery.nicescroll.js"></script>
<script src="assets/skycons/skycons.js"></script>
<script src="assets/jquery.scrollTo/jquery.scrollTo.js"></script>
<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script> -->
<script src="assets/calendar/clndr.js"></script>
<!-- <script src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js"></script> -->
<script src="assets/calendar/moment-2.2.1.js"></script>
<script src="js/calendar/evnt.calendar.init.js"></script>

<!-- <script src="assets/gauge/gauge.js"></script>
<script src="js/dashboard.js"></script>-->
<script src="js/custom-select/jquery.customSelect.min.js" ></script>

<!--common script init for all pages-->



<!--    CHECK THE ORDER of the SCRIPTS      -->
<!-- ====================================== -->

@yield('script')



<script src="js/scripts.js"></script>
<!--script for this page-->

</body>
</html>