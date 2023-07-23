







<!DOCTYPE html>
<html dir="ltr" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
        <title>add-purchase</title>
        <!-- Custom CSS -->
        <link href="assets/libs/flot/css/float-chart.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="dist/css/style.min.css" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
        <link rel="stylesheet" type="text/css" href="assets/libs/select2/dist/css/select2.min.css">
        <link rel="stylesheet" type="text/css" href="assets/libs/jquery-minicolors/jquery.minicolors.css">
        <link rel="stylesheet" type="text/css" href="assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">

        <link rel="stylesheet" type="text/css" href="assets/extra-libs/multicheck/multicheck.css">
        <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
        <link href="assets/libs/datatables/jquery.dataTables.min.css" rel="stylesheet">
        <link href="assets/libs/datatables/buttons.dataTables.min.css" rel="stylesheet">

        <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<!--        <script>
            $(document).ready(function () {
                $("#search-box").keyup(function () {
                    $.ajax({
                        type: "POST",
                        url: "loadpage/readCountry.php",
                        data: 'keyword=' + $(this).val(),
                        beforeSend: function () {
                            $("#search-box").css("background", "#FFF url(LoaderIcon.gif) no-repeat 165px");
                        },
                        success: function (data) {
                            $("#suggesstion-box").show();
                            $("#suggesstion-box").html(data);
                            $("#search-box").css("background", "#FFF");
                        }
                    });
                });
            });

            function selectCountry(val) {
                $("#search-box").val(val);
                $("#suggesstion-box").hide();
            }
        </script>
        <script>
            $(document).ready(function () {
                $("#search-box-sup").keyup(function () {
                    $.ajax({
                        type: "POST",
                        url: "loadpage/readSupplier.php",
                        data: 'keyword=' + $(this).val(),
                        beforeSend: function () {
                            $("#search-box-sup").css("background", "#FFF url(LoaderIcon.gif) no-repeat 165px");
                        },
                        success: function (data) {
                            $("#suggesstion-box-sup").show();
                            $("#suggesstion-box-sup").html(data);
                            $("#search-box-sup").css("background", "#FFF");
                        }
                    });
                });
            });

            function selectCountry(val) {
                $("#search-box-sup").val(val);
                $("#suggesstion-box-sup").hide();
            }
        </script>
        <script>
            $(document).ready(function () {
                $("#search-box-cus").keyup(function () {
                    $.ajax({
                        type: "POST",
                        url: "loadpage/readCustomer.php",
                        data: 'keyword=' + $(this).val(),
                        beforeSend: function () {
                            $("#search-box-cus").css("background", "#FFF url(LoaderIcon.gif) no-repeat 165px");
                        },
                        success: function (data) {
                            $("#suggesstion-box-cus").show();
                            $("#suggesstion-box-cus").html(data);
                            $("#search-box-cus").css("background", "#FFF");
                        }
                    });
                });
            });

            function selectCountry(val) {
                $("#search-box-cus").val(val);
                $("#suggesstion-box-cus").hide();
            }
        </script>-->
        <style>
            .frmSearch {border: 1px solid #a8d4b1;background-color: #c6f7d0;margin: 2px 0px;padding:40px;border-radius:4px;}
            #country-list{float:left;list-style:none;margin-top:-3px;padding:0;width:190px;position: absolute;}
            #country-list li{padding: 10px; background: #f0f0f0; border-bottom: #bbb9b9 1px solid;}
            #country-list li:hover{background:#ece3d2;cursor: pointer;}
            #search-box{padding: 10px;border: #a8d4b1 1px solid;border-radius:4px;}
        </style>
        <style>
            .form-control{
                border: 1px solid #07203a;
            }
            .select2-selection--single {
                border: 1px solid #061e3a!important;
                min-height: 37px!important;

            }
            .select2-container--default .select2-selection--single .select2-selection__rendered {
                line-height: 34px!important;
                margin-left: 14px;
            }
            .tbl th {
                background-color: #2255a4;
                color: white;
                border: 1px solid #ddd;
                padding: 8px;
                font-size: 18px;
                font-weight: bold;
            }

            .supinv th {
                background-color: #d2bbb5;
                color: #010910;
                border: 1px solid #ddd;
                padding: 8px;
                font-size: 18px;
                font-weight: bold;
            }
            .tblReport th {
                background-color: #2255a4;
                color: #ffffff;
                border: 1px solid #ddd;
                padding: 8px;
                font-size: 18px;
                font-weight: bold;
            }
        </style>
        <style>
            @media print {
                #printbtn {
                    display :  none;
                }
                #closeButton {
                    display :  none;
                }
            }
        </style>
    </head>

    <body>
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
                    <div id="main-wrapper" data-sidebartype="mini-sidebar" class="mini-sidebar">
                            <div id="main-wrapper">
                <header class="topbar" data-navbarbg="skin5">
                    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                        <div class="navbar-header" data-logobg="skin5">
                            <!-- This is for the sidebar toggle which is visible on mobile only -->
                            <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                            <a class="navbar-brand" href="dashboard.php">
                                <!-- Logo icon -->
                                <b class="logo-icon p-l-10">
                                    <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                                    <!-- Dark Logo icon -->
                                    <!--<img src="assets/images/logo-icon.png" alt="homepage" class="light-logo" />-->

                                </b>
                                <!--End Logo icon -->
                                <!-- Logo text -->
                                <span class="logo-text">
                                    <!-- dark Logo text -->
                                    <img src="assets/images/ps.png" width="170px" alt="homepage" class="light-logo" />

                                </span>
                                <!-- Logo icon -->
                                <!-- <b class="logo-icon"> -->
                                    <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                                <!-- Dark Logo icon -->
                                <!-- <img src="assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->

                                <!-- </b> -->
                                <!--End Logo icon -->
                            </a>
                            <!-- ============================================================== -->
                            <!-- End Logo -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- Toggle which is visible on mobile only -->
                            <!-- ============================================================== -->
                            <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                        </div>
                        <!-- ============================================================== -->
                        <!-- End Logo -->
                        <!-- ============================================================== -->
                        <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                            <!-- ============================================================== -->
                            <!-- toggle and nav items -->
                            <!-- ============================================================== -->
                            <ul class="navbar-nav float-left mr-auto">
                                <li class="nav-item d-none d-md-block">
                                    <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i>
                                    </a>
                                </li>
                                <!-- ============================================================== -->
                                <!-- create new -->
                                <!-- ============================================================== -->
                                <ul class="navbar-nav float-left mr-auto">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="d-none d-md-block">Sunday 04 Dec 2022</span> 
                                        </a>
                                    </li>
                                </ul>
                                <!-- ============================================================== -->
                                <!-- Search -->
                                <!-- ============================================================== -->

                            </ul>
                            <!-- ============================================================== -->
                            <!-- Right side toggle and nav items -->
                            <!-- ============================================================== -->
                            <ul class="navbar-nav float-right">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span style="color: #da542e; font-weight:bold;"> <i class="mdi mdi-bell font-24"></i></span><sup id="customerFollowup">0</sup>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown" aria-labelledby="2">
                                        <ul class="list-style-none">
                                            <li>
                                                <div class="">
                                                    <!-- Message -->
                                                    <a href="customer-followup.php" class="link border-top">
                                                        <div class="d-flex no-block align-items-center p-10">
                                                            <span class="btn btn-info btn-circle"><i class="fas fa-users"></i></span>
                                                            <div class="m-l-10">
                                                                <h5 class="m-b-0">Pending Collection</h5> 
                                                                <span class="mail-desc" id="customerFollowup2">0</span> 
                                                                <span class="mail-desc">Customer's have pending collection!</span> 
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span style="color: #da542e; font-weight:bold;"> <i class="mdi mdi-bell font-24"></i></span><sup id="totalItemWiseStock">0</sup>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown" aria-labelledby="2">
                                        <ul class="list-style-none">
                                            <li>
                                                <div class="">
                                                    <!-- Message -->
                                                    <a href="stock-report-item.php" class="link border-top">
                                                        <div class="d-flex no-block align-items-center p-10">
                                                            <span class="btn btn-info btn-circle"><i class="fas fa-tablets"></i></span>
                                                            <div class="m-l-10">
                                                                <h5 class="m-b-0">Out of Stock</h5> 
                                                                <span class="mail-desc" id="totalItemWiseStock2">0</span> 
                                                                <span class="mail-desc">Medicines / Products are going to be out of stock!</span> 
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <ul class="navbar-nav float-right">

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span style="color: #da542e; font-weight:bold;"> <i class="mdi mdi-bell font-24"></i></span><sup id="getTotalMedicineExprieStockh1">0</sup>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown" aria-labelledby="2">
                                            <ul class="list-style-none">
                                                <li>
                                                    <div class="">
                                                        <!-- Message -->
                                                        <a href="expired-report.php" class="link border-top">
                                                            <div class="d-flex no-block align-items-center p-10">
                                                                <span class="btn btn-info btn-circle"><i class="fas fa-tablets"></i></span>
                                                                <div class="m-l-10">
                                                                    <h5 class="m-b-0">Expired</h5> 
                                                                    <span class="mail-desc" id="getTotalMedicineExprieStockh2">0</span> 
                                                                    <span class="mail-desc"> Medicines / Products are expired already!</span> 
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span style="color: #da542e; font-weight:bold;"> <i class="mdi mdi-bell font-24"></i></span><sup id="getTotalMedicineExprieSoonStockh1"><b></b></sup>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown" aria-labelledby="2">
                                            <ul class="list-style-none">
                                                <li>
                                                    <div class="">
                                                        <!-- Message -->
                                                        <a href="expired-soon-report.php" class="link border-top">
                                                            <div class="d-flex no-block align-items-center p-10">
                                                                <span class="btn btn-info btn-circle"><i class="fas fa-tablets"></i></span>
                                                                <div class="m-l-10">
                                                                    <h5 class="m-b-0">Expired Soon</h5> 
                                                                    <span class="mail-desc" id="getTotalMedicineExprieSoonStockh2"></span> 
                                                                    <span class="mail-desc">Medicines / Products are expired soon.!</span> 
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>


                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span style="color: #da542e; font-weight:bold;"> <i class="mdi mdi-bell font-24"></i></span><sup id="totalOutStock">0</sup>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown" aria-labelledby="2">
                                            <ul class="list-style-none">
                                                <li>
                                                    <div class="">
                                                        <!-- Message -->
                                                        <a href="out-stock-report.php" class="link border-top">
                                                            <div class="d-flex no-block align-items-center p-10">
                                                                <span class="btn btn-info btn-circle"><i class="fas fa-tablets"></i></span>
                                                                <div class="m-l-10">
                                                                    <h5 class="m-b-0">Out of Stock</h5> 
                                                                    <span class="mail-desc" id="totalOutStock2">0</span> 
                                                                    <span class="mail-desc">Medicines / Products are out of stock!</span> 
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>


                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
                                        <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i>admin</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="changepassword.php"><i class="ti-settings m-r-5 m-l-5"></i>Change Password</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="?id="><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                                                                                    </div>
                                    </li>
                                </ul>
                        </div>
                    </nav>
                </header>
                <!-- ============================================================== -->
                <!-- End Topbar header -->
                <!-- ============================================================== --><aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="p-t-30">
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="dashboard.php" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
                                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="medicine-product.php" aria-expanded="false"><i class="fas fa-capsules"></i><span class="hide-menu">Medicine/Product</span></a></li>
                                                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="purchase.php" aria-expanded="false"><i class="fab fa-product-hunt"></i><span class="hide-menu">Purchase</span></a>
                                                                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="payment.php" aria-expanded="false"><i class="fab fa-amazon-pay"></i><span class="hide-menu">Payment</span></a>
                                                                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="pos.php" aria-expanded="false"><i class="fas fa-cart-plus"></i><span class="hide-menu">Point of Sale</span></a>
                            
                                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="collection.php" aria-expanded="false"><i class="fas fa-dollar-sign"></i><span class="hide-menu">Collection</span></a></li>

                                                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="customer.php" aria-expanded="false"><i class="fas fa-user"></i><span class="hide-menu">Customer</span></a></li>

                                                                <!--<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="supplier.php" aria-expanded="false"><i class="fas fa-users"></i><span class="hide-menu">Supplier</span></a></li>-->

                                                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="finance.php" aria-expanded="false"><i class="far fa-credit-card"></i><span class="hide-menu">Finance</span></a></li>
                                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="setting.php" aria-expanded="false"><i class="fas fa-cogs"></i><span class="hide-menu">Settings</span></a>
                        </li>
                                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="exp-imp.php" aria-expanded="false"><i class="fas fa-arrow-down"></i><span class="hide-menu">Backup</span></a>
                        </li>
                                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="admin-login-history.php" aria-expanded="false"><i class="fas fa-sign-in-alt"></i><span class="hide-menu">Login Log</span></a>
                            <!--                            <ul aria-expanded="false" class="collapse  first-level">
                                                            <li class="sidebar-item"><a href="admin-login-history.php" class="sidebar-link"><i class="fas fa-user"></i><span class="hide-menu">User</span></a></li>
                                                            <li class="sidebar-item"><a href="salesman-login-history.php" class="sidebar-link"><i class="fas fa-user"></i><span class="hide-menu">Salesman</span></a></li>
                                                        </ul>-->
                        </li>
                                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="report.php" aria-expanded="false"><i class="fas fa-chart-area"></i><span class="hide-menu">Report</span></a>

                        </li>
                                    </ul>
        </nav>
    </div>
</aside><style type="text/css">
    .list-group{
        list-style-type: none;
        text-align: left;

    }
    .list-group li{
        padding: 10px;
        background: #fff;
        border-bottom: 1px solid #fff;
        cursor: pointer;
    }
    .list-group li:hover, a:active {
        padding: 10px;
        background: #5897fb;
        color: #ffffff;
        width: auto;
    }
    .sli a:focus{
        padding: 10px;
        color: #ffffff;
        background: #5897fb;
        width: auto;
        display:block;
    }
    .sli a{
        color: #000000;
    }
    .sli a:hover{
        color: #ffffff;
    }
</style>

<style>
    .modal {
        text-align: center;
        padding: 0 !important;
    }

    .modal:before {
        content: '';
        display: inline-block;
        height: 100%;
        vertical-align: middle;
        margin-right: -4px;
    }

    .modal-dialog {
        display: inline-block;
        text-align: left;
        vertical-align: middle;
    }

    .modal-header, h4, .close {
        background-color: #2255a4;
        color: white !important;
        text-align: center;
        font-size: 30px;
    }

    .modal-header_two {
        background-color: green;
        color: white !important;
        text-align: center;
        font-size: 30px;
    }

    .modal-header_three {
        background-color: #27a9e3;
        color: white !important;
        text-align: center;
        font-size: 30px;
    }

    .modal-footer {
        background-color: #154ca5;
    }
</style>
<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h3 class="page-title">Medicine / Product Purchase</h3><br>
                                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">add purchase</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="modal w3-animate-zoom" id="waitModal" role="dialog" data-controls-modal="waitModal" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog w3-card-4">
            <!-- Modal content-->
            <div class="modal-content modal-header_three">
                <div class="modal-header_three" style="padding:25px 40px;">
                    <h4><span class="glyphicon glyphicon-exclamation-sign w3-padding-small"></span> Please Wait untill done.<br> জনাব অনুগ্রহ করে অপেক্ষা করুন</h4>
                    <div class="modal-footer">
                        <a id="closemodal" href="#" class="btn btn-danger">close</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container-fluid">
        <form class="form-horizontal" method="post" action="">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">   
                        <div class="col-md-9">
                            <div class="form-group">
                                <label for="lname">Medicine/Product<span style="color: red"> *</span></label>
                                <div align="center">
                                    <input type="text" name="search" id="search" class="search form-control" placeholder="Search Medicine or Product" autofocus="autofocus" autocomplete="off"/>
                                    <ul class="list-group" id="result"></ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div id="employee_table">
                        <div class="box4">
                            <div class="bottom table-responsive">
                                <table class="table table-bordered table-striped table-hover tbl" style="margin-top: 10px;">
                                    <thead>
                                        <tr style="background-color: #ff9900">
                                            <th class="text-center" style="width: 10px">SL</th>
                                            <th class="text-center" style="width: 120px">Item Name</th>
                                            <th class="text-center" style="width: 50px">Min Stock Alert</th>
                                            <th class="text-center" style="width: 50px">Expire date</th>
                                            <th class="text-center" style="width: 100px">Cost Price</th>
                                            <th class="text-center" style="width: 100px">MRP</th>
                                            <th class="text-center" style="width: 100px">Quantity</th>
                                            <th class="text-center" style="width: 100px">Subtotal</th>
                                            <th class="text-center" style="width: 100px">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div> 
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Product Supplier<span style="color: red">*</span></label>
                                            <select name="product_sup_name" id="sup_id" class="form-control select2" style="width: 100%;" required>
                                                <option value="">SELECT SUPPLIER</option>
                                                                                                    <option value="1">Ablation Pharmaceuticals Ltd.</option>
                                                                                                    <option value="2">ACI Limited</option>
                                                                                                    <option value="3">Acme Laboratories Ltd.</option>
                                                                                                    <option value="4">Acme Specialized Pharmaceuticals Ltd.</option>
                                                                                                    <option value="5">Ad-din Pharmaceuticals Ltd.</option>
                                                                                                    <option value="6">Adco Pharmaceuticals & Chemicals Ltd.</option>
                                                                                                    <option value="7">Advent Pharma Ltd.</option>
                                                                                                    <option value="8">Aexim Pharmaceuticals Ltd.</option>
                                                                                                    <option value="9">Agrani Pharmaceuticals</option>
                                                                                                    <option value="10">Al-Madina Pharmaceuticals Ltd.</option>
                                                                                                    <option value="11">Albert David (BD) Limited</option>
                                                                                                    <option value="12">Albion Laboratories Ltd.</option>
                                                                                                    <option value="13">Alco Pharma Limited</option>
                                                                                                    <option value="14">Alkad Laboratories</option>
                                                                                                    <option value="15">Alpha Pharmaceuticals</option>
                                                                                                    <option value="16">Ambee Pharmaceuticals Ltd.</option>
                                                                                                    <option value="17">Amico Laboratories Ltd.</option>
                                                                                                    <option value="18">Amulet Pharmaceuticals Ltd.</option>
                                                                                                    <option value="19">APC Pharma Ltd.</option>
                                                                                                    <option value="20">Apex Pharma Limited.</option>
                                                                                                    <option value="21">Apollo Pharmaceutical Laboratories Ltd.</option>
                                                                                                    <option value="22">Aristopharma Limited</option>
                                                                                                    <option value="23">Asiatic Laboratories Ltd.</option>
                                                                                                    <option value="24">Astra Biopharmaceuticals Ltd.</option>
                                                                                                    <option value="25">Avert Pharma Ltd.</option>
                                                                                                    <option value="26">Aztec Pharmaceuticals</option>
                                                                                                    <option value="27">Bangladesh Antibiotic Industries Limited</option>
                                                                                                    <option value="28">Bangladesh Immunity Co.</option>
                                                                                                    <option value="29">Bangladesh Oxygen Ltd.</option>
                                                                                                    <option value="30">BC Laboratories Ltd.</option>
                                                                                                    <option value="31">Beacon Pharmaceuticals Ltd.</option>
                                                                                                    <option value="33">Belsen Pharmaceuticals Ltd.</option>
                                                                                                    <option value="34">Bengal Drugs & Chemical Works Pharm. Ltd.</option>
                                                                                                    <option value="35">Bengal Techno Pharma Ltd.</option>
                                                                                                    <option value="36">Benham Pharmaceuticals Ltd.</option>
                                                                                                    <option value="37">Beximco Pharmaceuticals Ltd.</option>
                                                                                                    <option value="39">Bikalpa Friends Pharmaceuticals Ltd.</option>
                                                                                                    <option value="40">Bio Pharma Laboratories Ltd.</option>
                                                                                                    <option value="41">Bios Pharmaceutical Ltd.</option>
                                                                                                    <option value="43">Blubell Laboratories Ltd.</option>
                                                                                                    <option value="44">Boichem Pharmaceutical</option>
                                                                                                    <option value="45">Bosco Laboratory</option>
                                                                                                    <option value="46">Bridge Pharmaceuticals Ltd.</option>
                                                                                                    <option value="47">Bristol Pharma Ltd.</option>
                                                                                                    <option value="48">BS Industries Ltd.</option>
                                                                                                    <option value="49">Care Pharma Laboratories Ltd.</option>
                                                                                                    <option value="50">Carew & Co.</option>
                                                                                                    <option value="51">Central Pharmaceutical Ltd.</option>
                                                                                                    <option value="52">Chemist Laboratories Ltd.</option>
                                                                                                    <option value="53">Cipla Ltd.</option>
                                                                                                    <option value="54">City Chemicals & Pharmaceuticals Works Ltd.</option>
                                                                                                    <option value="56">Comilla Laboratories Ltd.</option>
                                                                                                    <option value="57">Concord Pharmaceuticals Ltd.</option>
                                                                                                    <option value="58">Cosmic Chemical Industries Ltd.</option>
                                                                                                    <option value="59">Cosmo Pharma Laboratories Ltd.</option>
                                                                                                    <option value="60">Cresent Pharmaceuticals</option>
                                                                                                    <option value="61">Crystal Pharmaceuticals Ltd.</option>
                                                                                                    <option value="62">Decent Pharma Laboratories Ltd.</option>
                                                                                                    <option value="63">Delta Pharma Limited</option>
                                                                                                    <option value="64">Desh Pharmaceuticals Ltd.</option>
                                                                                                    <option value="65">Doctor Tims Pharmaceuticals Ltd.</option>
                                                                                                    <option value="66">Doctor's Chemicals Works Ltd.</option>
                                                                                                    <option value="68">Doms Pharmaceuticals</option>
                                                                                                    <option value="70">Dr. Jalil's Pharma (Pvt) Ltd.</option>
                                                                                                    <option value="71">Drug International Ltd.</option>
                                                                                                    <option value="73">Drugland Limited</option>
                                                                                                    <option value="75">Eastern Drug Co. (Pvt.) Ltd.</option>
                                                                                                    <option value="76">Eastern Pharmaceuticals Ltd.</option>
                                                                                                    <option value="78">EDCL (Dhaka)</option>
                                                                                                    <option value="79">Edruc Ltd.</option>
                                                                                                    <option value="80">Eon Pharmaceuticals Ltd.</option>
                                                                                                    <option value="81">Eskayef Bangladesh Ltd.</option>
                                                                                                    <option value="83">Ethical Drug Ltd.</option>
                                                                                                    <option value="84">Euro Pharma Ltd.</option>
                                                                                                    <option value="85">Everest Pharmaceuticals Ltd.</option>
                                                                                                    <option value="86">F N F Pharmaceuticals Ltd.</option>
                                                                                                    <option value="87">G. A. Company Ltd.</option>
                                                                                                    <option value="88">G.M. Laboratory</option>
                                                                                                    <option value="89">G.P.I. Ltd.</option>
                                                                                                    <option value="91">General Pharmaceuticals Ltd.</option>
                                                                                                    <option value="92">Gentry Pharmaceuticals Ltd.</option>
                                                                                                    <option value="93">GlaxoSmithKline Bangladesh Ltd.</option>
                                                                                                    <option value="94">Global Heavy Chemicals Ltd.</option>
                                                                                                    <option value="95">Global s Ltd.</option>
                                                                                                    <option value="97">Globe Drug Ltd</option>
                                                                                                    <option value="98">Globe Laboratories (Pvt.) Ltd.</option>
                                                                                                    <option value="99">Globe Pharmaceuticals Ltd.</option>
                                                                                                    <option value="101">Globex Pharmaceuticals Ltd.</option>
                                                                                                    <option value="104">Gonoshasthaya Pharmaceuticals Ltd.</option>
                                                                                                    <option value="105">Great Bengal Chemical & Pharmaceuticals Works (Suspended)</option>
                                                                                                    <option value="106">Green Laboratory</option>
                                                                                                    <option value="107">Greenland Pharmaceuticals Ltd.</option>
                                                                                                    <option value="108">Guardian Healthcare Ltd.</option>
                                                                                                    <option value="109">Hallmark Pharmaceuticals Ltd.</option>
                                                                                                    <option value="110">Healthcare Pharmaceuticals Ltd.</option>
                                                                                                    <option value="111">Hope Pharmaceuticals Ltd.</option>
                                                                                                    <option value="112">Hudson Pharmaceuticals Ltd.</option>
                                                                                                    <option value="113">Huqsons Laboratories Ltd. Suspened</option>
                                                                                                    <option value="114">Hydroxide Ltd.</option>
                                                                                                    <option value="115">Ibn Sina Pharmaceutical Ind. Ltd.</option>
                                                                                                    <option value="116">Incepta Pharmaceuticals Ltd.</option>
                                                                                                    <option value="119">Indobangla Pharmaceuticals</option>
                                                                                                    <option value="120">Innova Phrmaceutical Ltd.</option>
                                                                                                    <option value="121">Institute of Public Health</option>
                                                                                                    <option value="122">Islami Pharmaceutical Industries Ltd.</option>
                                                                                                    <option value="123">J C I Bangladesh Ltd</option>
                                                                                                    <option value="124">Jalalabad Pharmaceuticals Ltd.</option>
                                                                                                    <option value="126">Jams Pharmaceuticals Ltd.</option>
                                                                                                    <option value="127">Janasheba Pharmaceuticals Ltd.</option>
                                                                                                    <option value="128">Jayson Pharmaceuticals Ltd.</option>
                                                                                                    <option value="129">JMI Syringes & Medical Devices Ltd.</option>
                                                                                                    <option value="131">Kasiruddin Chemical Works (pvt) Ltd. (Suspended)</option>
                                                                                                    <option value="132">KDH Laboratories Ltd.</option>
                                                                                                    <option value="133">Kemiko Pharmaceuticals Ltd.</option>
                                                                                                    <option value="134">Kumudini Pharma Ltd.</option>
                                                                                                    <option value="135">Labaid Pharmaceuticals Ltd.</option>
                                                                                                    <option value="136">Leon Pharmaceuticals Ltd.</option>
                                                                                                    <option value="138">Libra Pharmaceuticls Ltd.</option>
                                                                                                    <option value="139">Links Pharma</option>
                                                                                                    <option value="140">Loly Pharma (Vet)</option>
                                                                                                    <option value="141">Mafnaz Pharmaceuticals Ltd.</option>
                                                                                                    <option value="142">Maks Drugs Ltd.</option>
                                                                                                    <option value="143">Marksman Pharmaceutical Ltd.</option>
                                                                                                    <option value="144">Maxborn Pharmaceuticals Ltd.</option>
                                                                                                    <option value="145">Medico Pharmaceuticals Ltd.</option>
                                                                                                    <option value="146">Medicon Pharmaceuticals Ltd.</option>
                                                                                                    <option value="147">Medimet Pharmaceuticals Ltd.</option>
                                                                                                    <option value="148">Microbe Laboratories Ltd.</option>
                                                                                                    <option value="149">Mig Pharmaceutical Ltd.</option>
                                                                                                    <option value="150">Millat Pharmaceuticals Ltd.</option>
                                                                                                    <option value="151">Modern Pharmaceuticals Ltd.</option>
                                                                                                    <option value="152">Momotaz Pharmaceuticals Ltd.</option>
                                                                                                    <option value="153">Monicopharma Limited</option>
                                                                                                    <option value="154">Monomedi Bangladesh Ltd.</option>
                                                                                                    <option value="155">Mundipharma (Bangladesh) Pvt. Ltd.</option>
                                                                                                    <option value="156">Mystic Pharmaceuticals Ltd.</option>
                                                                                                    <option value="157">Naafco Pharma Ltd.</option>
                                                                                                    <option value="158">Najat Pharma Co. (Suspended)</option>
                                                                                                    <option value="159">Natal Chemical Ind.</option>
                                                                                                    <option value="161">National Laboratories Ltd.</option>
                                                                                                    <option value="163">Navana Pharmaceuticals Ltd.</option>
                                                                                                    <option value="164">Nip Chemicals And Pharmaceuticals Ltd.</option>
                                                                                                    <option value="165">Nipa Pharmaceuticals Ltd.</option>
                                                                                                    <option value="167">NIPRO JMI Pharma Limited</option>
                                                                                                    <option value="169">Novartis (Bangladesh) Ltd.</option>
                                                                                                    <option value="170">Novelta Bestway Pharmaceuticals Ltd.</option>
                                                                                                    <option value="171">Novo Healthcare and Pharma Ltd.</option>
                                                                                                    <option value="173">Novus Pharmaceuticals Ltd.</option>
                                                                                                    <option value="174">Nuvista Pharma Ltd</option>
                                                                                                    <option value="175">Oasis Laboratories Ltd.</option>
                                                                                                    <option value="176">Opso Saline Ltd.</option>
                                                                                                    <option value="178">Opsonin Pharma Limited</option>
                                                                                                    <option value="179">Orbit Pharmaceuticals Ltd.</option>
                                                                                                    <option value="180">Organic Health Care</option>
                                                                                                    <option value="182">Orion Pharma Ltd.</option>
                                                                                                    <option value="183">Oyster Pharmaceuticals Ltd.</option>
                                                                                                    <option value="184">Pacific Pharmaceuticals Ltd.</option>
                                                                                                    <option value="185">Paradise Chemical Industries</option>
                                                                                                    <option value="187">Peoples Pharma Ltd.</option>
                                                                                                    <option value="188">Pharmacil Ltd.</option>
                                                                                                    <option value="189">Pharmaco International Ltd.</option>
                                                                                                    <option value="190">Pharmadesh Laboratories Ltd.</option>
                                                                                                    <option value="191">Pharmasia Ltd.</option>
                                                                                                    <option value="192">Pharmatek Chemicals Ltd.</option>
                                                                                                    <option value="193">Pharmik Laboratories Ltd.</option>
                                                                                                    <option value="194">Phoenix Chemicals Laboratories (BD) Ltd.</option>
                                                                                                    <option value="195">Pioneer Pharmaceutical Ltd</option>
                                                                                                    <option value="196">Pip Limited</option>
                                                                                                    <option value="198">Popular Pharmaceuticals Ltd.</option>
                                                                                                    <option value="199">Premier Pharmaceuticals</option>
                                                                                                    <option value="200">Prime Pharmaceuticals Ltd.</option>
                                                                                                    <option value="201">Pubali Pharmaceutical</option>
                                                                                                    <option value="203">Quality Pharmaceuticals Ltd.</option>
                                                                                                    <option value="204">R.D.C.C.S. Limited</option>
                                                                                                    <option value="205">Radiant Pharmaceutical Ltd.</option>
                                                                                                    <option value="206">Rahman Chemicals Ltd.</option>
                                                                                                    <option value="207">Julphar Bangladesh Ltd.</option>
                                                                                                    <option value="208">Rampart-Power Bangladesh Ltd.</option>
                                                                                                    <option value="209">Rangs Medicine</option>
                                                                                                    <option value="210">Rangs Pharmaceuticals Ltd.</option>
                                                                                                    <option value="211">Rasa Pharmaceuticals Ltd.</option>
                                                                                                    <option value="212">Reckitt & Benckiser Bangladesh Ltd.</option>
                                                                                                    <option value="213">Reliable Drugs & Chemicals</option>
                                                                                                    <option value="214">Reliance Laboratories Ltd.</option>
                                                                                                    <option value="215">Reliance Pharmaceuticals Ltd.</option>
                                                                                                    <option value="216">Reman Drug Laboratories Ltd.</option>
                                                                                                    <option value="217">Remex Pharmaceuticals</option>
                                                                                                    <option value="219">Renata Limited</option>
                                                                                                    <option value="221">Rephco Pharmaceuticals Ltd.</option>
                                                                                                    <option value="222">Rex Pharma</option>
                                                                                                    <option value="224">RN Pharmaceuticals</option>
                                                                                                    <option value="225">Roche Bangladesh Pharmaceutical</option>
                                                                                                    <option value="226">Royal Pharmaceutical</option>
                                                                                                    <option value="227">S. N. Pharmaceuticals Ltd.</option>
                                                                                                    <option value="228">Salton Pharmaceuticals Ltd.</option>
                                                                                                    <option value="229">Sanofi Aventis (BD) Ltd.</option>
                                                                                                    <option value="230">Sarma Chemical Works Ltd.</option>
                                                                                                    <option value="231">Save Pharmaceutical</option>
                                                                                                    <option value="232">Seba Laboratories Ltd.</option>
                                                                                                    <option value="233">Seema Pharmaceuticals Ltd.</option>
                                                                                                    <option value="234">Seftchem Ltd.</option>
                                                                                                    <option value="235">Shamsul Al-Amin Pharmaceuticals Ltd.</option>
                                                                                                    <option value="236">Sharif Pharmaceuticals Ltd.</option>
                                                                                                    <option value="237">Sheba Chemicals Industries Ltd.</option>
                                                                                                    <option value="238">Silco Pharmaceuticlas Ltd.</option>
                                                                                                    <option value="239">Silva Pharmaceuticals Ltd.</option>
                                                                                                    <option value="240">Skylab Ltd.</option>
                                                                                                    <option value="241">Social Marketing Company</option>
                                                                                                    <option value="243">Somatec Pharmaceuticals Ltd.</option>
                                                                                                    <option value="244">Sonear Laboratories Ltd.</option>
                                                                                                    <option value="245">Sonergaon Chemical Complex (pvt) Ltd.</option>
                                                                                                    <option value="246">Sony Pharmaceutical Ltd.</option>
                                                                                                    <option value="247">Spark Pharmaceutical Ltd.</option>
                                                                                                    <option value="248">Spectra Oxygen Limited</option>
                                                                                                    <option value="249">Square Cephalosporins Ltd.</option>
                                                                                                    <option value="250">Square Pharmaceuticals Ltd.</option>
                                                                                                    <option value="253">Standard Laboratories Ltd.</option>
                                                                                                    <option value="254">Stars Pharmaceuticals Ltd.</option>
                                                                                                    <option value="255">Sun Pharmaceutical (Bangladesh) Ltd.</option>
                                                                                                    <option value="257">Super Power Pharmaceuticals Ltd.</option>
                                                                                                    <option value="258">Supreme Pharmaceuticals Ltd.</option>
                                                                                                    <option value="259">Syntho Laboratories Ltd.</option>
                                                                                                    <option value="260">Techno Drugs Ltd.</option>
                                                                                                    <option value="262">Theraputics (BD) Ltd.</option>
                                                                                                    <option value="263">Tropical Pharmaceuticals Ltd.</option>
                                                                                                    <option value="264">Ultra Pharma Ltd.</option>
                                                                                                    <option value="265">Unimed & Unihealth Manufacturers Ltd.</option>
                                                                                                    <option value="266">Union Pharmaceuticals Ltd.</option>
                                                                                                    <option value="267">Unique Pharmaceutical Ltd.</option>
                                                                                                    <option value="268">United Chemicals & Pharmaceuticals Ltd.</option>
                                                                                                    <option value="272">Veritas Pharmaceuticals Ltd.</option>
                                                                                                    <option value="273">Virgo Pharmaceuticals Ltd.</option>
                                                                                                    <option value="274">Weinberg Pharmaceuticals</option>
                                                                                                    <option value="275">Wellcome Chemical</option>
                                                                                                    <option value="276">White Horse Pharma</option>
                                                                                                    <option value="277">Zaman Pharmaceutical Ltd,</option>
                                                                                                    <option value="278">Zenith Pharmaceuticals Ltd.</option>
                                                                                                    <option value="279">Ziska Pharmaceuticals Ltd.</option>
                                                                                                    <option value="280">245-3410(V)-98</option>
                                                                                                    <option value="281">A/S Lundbeck Export DivisionLtd., Denmark</option>
                                                                                                    <option value="283">Abbott HealthcareProducts,Netherlands</option>
                                                                                                    <option value="284">Abbott Laboratories Ltd., Pakistan</option>
                                                                                                    <option value="285">Abbott Laboratories Ltd., USA</option>
                                                                                                    <option value="286">Abbott Laboratories, UK</option>
                                                                                                    <option value="287">Ace Chemicals,UK</option>
                                                                                                    <option value="288">Actavis Italy SpA, Italy</option>
                                                                                                    <option value="289">Actavis, UK</option>
                                                                                                    <option value="290">Advanced Medical Optics UppsalaAB, Sweden</option>
                                                                                                    <option value="291">Aesica Queenborough Limited, UK</option>
                                                                                                    <option value="292">Alcon Cannada Inc., Canada</option>
                                                                                                    <option value="293">Alcon Laboratories Inc, USA</option>
                                                                                                    <option value="296">Allergan Inc, USA</option>
                                                                                                    <option value="300">Allergan Pharmaceuticals Ltd.,Ireland</option>
                                                                                                    <option value="303">Allergan Sales LLC, USA</option>
                                                                                                    <option value="304">Alpha Therapeutic Corporation,USA</option>
                                                                                                    <option value="305">Anhui Kangning Industrial (Group)Co. Ltd., China</option>
                                                                                                    <option value="306">Anji Sunlight Medical Products Co.Ltd. China</option>
                                                                                                    <option value="309">Antec International Ltd., U.K.</option>
                                                                                                    <option value="313">Aspen Bad Oldesloe, Germany</option>
                                                                                                    <option value="314">Asta Medica AG, Germany</option>
                                                                                                    <option value="315">Astral Pharmaceuticals Industries,India</option>
                                                                                                    <option value="316">Aventis Behring GmbH, Germany</option>
                                                                                                    <option value="317">Aventis Pasteur S.A. France</option>
                                                                                                    <option value="320">Aventis Pharma, Dagenham, UK</option>
                                                                                                    <option value="321">Aventis Pharma, France</option>
                                                                                                    <option value="322">Aventis Pharma, Germany</option>
                                                                                                    <option value="323">Aventis Pharma, UK</option>
                                                                                                    <option value="325">Axcentive Sarl, France</option>
                                                                                                    <option value="326">Ayerst Wyeth PharmaceuticalsInc.,</option>
                                                                                                    <option value="329">B. Braun Melsungen Ag, Germany</option>
                                                                                                    <option value="330">Baxter Ag, Australia</option>
                                                                                                    <option value="331">Baxter AG, Austria</option>
                                                                                                    <option value="332">Baxter Healthcare SA, Singapore</option>
                                                                                                    <option value="333">Baxter Oncology Gmbh, Germany</option>
                                                                                                    <option value="335">Bayer Pharma AG Berlin,Germany</option>
                                                                                                    <option value="336">Bayer SChering Pharma Oy,Finland</option>
                                                                                                    <option value="337">Becton Dickinson and Company,USA</option>
                                                                                                    <option value="338">Behringwerke AG, Germany</option>
                                                                                                    <option value="339">Beijing Fresenius KabiPharmacutical co. Ltd., China</option>
                                                                                                    <option value="340">Bene Arzneimittel GmbH,Germany</option>
                                                                                                    <option value="341">Berna Biotech Ltd., Switzerland</option>
                                                                                                    <option value="342">Berna Biotech, Korea</option>
                                                                                                    <option value="343">Bestar Laboratories (Singapore)Pte Ltd., Singapore</option>
                                                                                                    <option value="345">Biogen & Co. Ltd., Korea</option>
                                                                                                    <option value="347">Biomune Company, USA</option>
                                                                                                    <option value="349">Biomune de Mexico S.de R L CV., Mexico</option>
                                                                                                    <option value="350">Biopharm, Research Institute ofBiopharmacy and veterinaryDrugs, Czech Republic</option>
                                                                                                    <option value="352">Bioveta, Czech Republic</option>
                                                                                                    <option value="353">Bomac Laboratories Limited NewZearland</option>
                                                                                                    <option value="355">Bracco S.P.A, Italy</option>
                                                                                                    <option value="356">Bremer Pharma GmbH, Germany</option>
                                                                                                    <option value="357">Bristol Caribbean, USA</option>
                                                                                                    <option value="358">Bristol Myers Squibb Pvt. Ltd.,USA</option>
                                                                                                    <option value="360">Bristol-Myers, Italy</option>
                                                                                                    <option value="361">C.B. Fleet Company Inc, USA</option>
                                                                                                    <option value="362">Ceva Phylaxia, Hungary</option>
                                                                                                    <option value="363">CEVA Phylaxia, VeterinaryBiological Company, Hungary</option>
                                                                                                    <option value="364">Ceva-Phylaxia VeterinaryBiological Co. Ltd., Hungary</option>
                                                                                                    <option value="365">CEVA-PHYLAXIA VeterinaryBiologicals Co. Ltd., Hungary</option>
                                                                                                    <option value="366">Cheil Bio Co. Ltd., Korea</option>
                                                                                                    <option value="367">Chemial Works of Gedeon RichterLtd., Hungary</option>
                                                                                                    <option value="370">Chiron Behring Vaccine Pvt. Ltd.,</option>
                                                                                                    <option value="371">Choong Ang Animal DiseaseLaboratory, Korea</option>
                                                                                                    <option value="372">Choong Ang VaccineLaboratory,Korea.</option>
                                                                                                    <option value="375">Choongwae Pharma Corporation,Korea</option>
                                                                                                    <option value="376">Ciba Geigy Ltd., Switzerland</option>
                                                                                                    <option value="377">Ciba Vision Ag, Switzerland</option>
                                                                                                    <option value="378">CID Lines N.V Waterpoorstraat 2,Belgium</option>
                                                                                                    <option value="379">Cilag AG, Switzerland</option>
                                                                                                    <option value="380">Claris Lifesciences Ltd., India</option>
                                                                                                    <option value="381">Closed Joint-Stock Company</option>
                                                                                                    <option value="382">CLS Pharma ,France</option>
                                                                                                    <option value="383">CNN-Laboratoria veterinario Ltda.,Hungary</option>
                                                                                                    <option value="384">Coophavate,France</option>
                                                                                                    <option value="387">Coophavet, France</option>
                                                                                                    <option value="388">Coventry Chemicals Limited, EU</option>
                                                                                                    <option value="389">CSL Behring Ag, Switzeland</option>
                                                                                                    <option value="390">CSL Behring GmbH, Germany</option>
                                                                                                    <option value="392">Dabur Pharmaceuticals Ltd., India</option>
                                                                                                    <option value="393">Dae Sung Microbiological Labs,korea</option>
                                                                                                    <option value="394">DaOne Chemical Co. Ltd., Korea</option>
                                                                                                    <option value="395">Denex International, India</option>
                                                                                                    <option value="396">Dong Bang Co. Ltd. Korea</option>
                                                                                                    <option value="397">Dong Kook Pharmaceutical, Korea</option>
                                                                                                    <option value="398">Dopharma International,Netherlands</option>
                                                                                                    <option value="399">Eagle Vet. Tech Co., Ltd., Korea</option>
                                                                                                    <option value="400">Eastern Medikit Limited, India</option>
                                                                                                    <option value="402">Ebew Pharma,Austria</option>
                                                                                                    <option value="403">Eco Animal Health Ltd., UK</option>
                                                                                                    <option value="404">Egis Pharmaceuticals, Hungary</option>
                                                                                                    <option value="405">Elanco Animal Health, USA</option>
                                                                                                    <option value="407">Eli Lilly and Company USA</option>
                                                                                                    <option value="408">Eli Lilly France SA, France</option>
                                                                                                    <option value="409">Eli Lilly Italia SpA, Italy</option>
                                                                                                    <option value="410">Evans Vanodine International, UK</option>
                                                                                                    <option value="412">Ewabo Chemikalien GmbH,Germany</option>
                                                                                                    <option value="413">Excella, Germany</option>
                                                                                                    <option value="415">Excelvision AG, Switzerland</option>
                                                                                                    <option value="416">F. H. Faulding & Co., Ltd.,Australia</option>
                                                                                                    <option value="418">F. Hoffmann La Roche,Switzerland</option>
                                                                                                    <option value="419">F. Hoffmann, Switzerland</option>
                                                                                                    <option value="421">F. Hoffmann-La Roche Ltd.Switzerland</option>
                                                                                                    <option value="422">F. Hoffmann-La Roche Ltd.,Canada</option>
                                                                                                    <option value="425">F.Hoffmann La Roche, Switzerland</option>
                                                                                                    <option value="427">F.Hoffmann-La Roche Ltd.Germany</option>
                                                                                                    <option value="429">Fam Vanodione International, UK</option>
                                                                                                    <option value="430">Famy Care Lrtd., India</option>
                                                                                                    <option value="431">Fatro SpA, Italy</option>
                                                                                                    <option value="432">Ferring GmbH, Germany</option>
                                                                                                    <option value="433">Fidia Farmaceutical SPA, Italy</option>
                                                                                                    <option value="434">Fisons Limited, UK</option>
                                                                                                    <option value="435">Fort Dodge Animal Health, USA</option>
                                                                                                    <option value="436">Fresenius Kabi (Guangzhou) Co.Ltd., China</option>
                                                                                                    <option value="437">Fresenius Kabi Austria GmbH,Austria</option>
                                                                                                    <option value="438">Fresenius Kabi DeutschlandGmbH, Germany</option>
                                                                                                    <option value="440">Fresenius Medical CareDeustshland, Germany</option>
                                                                                                    <option value="441">Fresinus Kabi Austria GmbH,Austria</option>
                                                                                                    <option value="442">Galxo Wellcome, France</option>
                                                                                                    <option value="443">GE Health Care., Ireland</option>
                                                                                                    <option value="446">Genentech Inc, USA</option>
                                                                                                    <option value="448">Genentech Inc., USA</option>
                                                                                                    <option value="449">Glaxo Operations UK Ltd., UK</option>
                                                                                                    <option value="450">Glaxo Smith Klin ,Australia</option>
                                                                                                    <option value="451">Glaxo Smith Kline Bioglan SA,Belgium</option>
                                                                                                    <option value="452">Glaxo Smith Kline Biological S.A.,Belgium</option>
                                                                                                    <option value="455">Glaxo Smith Kline SpA, Italy</option>
                                                                                                    <option value="457">Glaxo SmithKline Biological S.A.,Belgium</option>
                                                                                                    <option value="460">Glaxo Wellcome GmbH, Germany</option>
                                                                                                    <option value="461">Glaxo Wellcome Operations, UK</option>
                                                                                                    <option value="462">Glaxo Wellcome Production,France</option>
                                                                                                    <option value="463">Glaxo Wellcome Spa, Italy</option>
                                                                                                    <option value="465">GlaxoSmithkline Biologicals S.A,Australia</option>
                                                                                                    <option value="466">GlaxoSmithkline Biologicals S.A,Belgium</option>
                                                                                                    <option value="468">GlaxoSmithKline Biologicals,Germany</option>
                                                                                                    <option value="469">Godecke GmbH, Germany</option>
                                                                                                    <option value="470">Gosun Pharma Co. Ltd., China</option>
                                                                                                    <option value="471">GP Grenzach Produktion GmbH,Germany</option>
                                                                                                    <option value="472">Green Cross GuangzhouPharmaceutical Co. Ltd., China</option>
                                                                                                    <option value="473">Green Cross veterinary productsCo. Ltd. Korea</option>
                                                                                                    <option value="476">Grifols Biologicals Inc, USA</option>
                                                                                                    <option value="477">Gruppo Lepetit Srl, Italy</option>
                                                                                                    <option value="479">H. Lundbeck & Co., A/S, Denmark</option>
                                                                                                    <option value="480">H. Lundbeck A/S, Ottiliavej,Denmark</option>
                                                                                                    <option value="481">Haiou Medical Appliance Co.,Chine</option>
                                                                                                    <option value="482">Halocarbone Laboratories, USA</option>
                                                                                                    <option value="483">Hamdard Lab. (Waqf), Pakistan</option>
                                                                                                    <option value="484">Hameln Pharma Plus GmbH,Germany</option>
                                                                                                    <option value="486">Hangdong Co.Ltd. Korea</option>
                                                                                                    <option value="488">Haupt Pharma, Germany</option>
                                                                                                    <option value="489">Hexal Ag Germany by EbewePharma Austria</option>
                                                                                                    <option value="490">Hexal Ag, Austria</option>
                                                                                                    <option value="491">Hexal ag, Germany</option>
                                                                                                    <option value="492">HLL Life Care Limited, India</option>
                                                                                                    <option value="494">Hoechst Marion RousselDeutschland GmbH, Germany</option>
                                                                                                    <option value="495">Hoechst Roussel Vet Private Ltd.,India</option>
                                                                                                    <option value="496">Hoechstl Aventis Pharma,Germany</option>
                                                                                                    <option value="497">Hoffman-La Roche Ltd.Switzerland</option>
                                                                                                    <option value="499">Hospira Australia Pty Ltd.,Australia</option>
                                                                                                    <option value="500">Hospira Australia Pvt. Ltd.,Australia</option>
                                                                                                    <option value="501">Huaian wanjia Medical Divice Co.Ltd. China</option>
                                                                                                    <option value="502">Instituto Grifols S.A., Spain</option>
                                                                                                    <option value="503">Instituto Sierovaccinogeno ItalianoSpa, Italy</option>
                                                                                                    <option value="505">Intervet International B.V,Netherland</option>
                                                                                                    <option value="506">Intervet International B.V., Holland</option>
                                                                                                    <option value="510">Intervet International,Netherland</option>
                                                                                                    <option value="512">IZO S.p.A Via Bianchi, Italy</option>
                                                                                                    <option value="514">Janseen Pharmaceutica, Belgium</option>
                                                                                                    <option value="517">Jhon Wyeth & Brother Ltd. UK andMarketing Authorisation HolderWyeth Lederle Vaccine SABelgium</option>
                                                                                                    <option value="518">JHP Pharmaceuticals, USA</option>
                                                                                                    <option value="519">Jiaxing Tianhe Pharmaceutical Co.Ltd. China</option>
                                                                                                    <option value="522">JMS Singapore Pte Ltd.,Singapore</option>
                                                                                                    <option value="525">Kanters Middenakkerweg,Netherlands</option>
                                                                                                    <option value="526">Kawasumi Laboratories, Thailand</option>
                                                                                                    <option value="528">KBNP Inc. Korea</option>
                                                                                                    <option value="531">Kedrion, Italy</option>
                                                                                                    <option value="532">Kela Laboratoria, Belgium</option>
                                                                                                    <option value="533">Kela N.V., Belgium</option>
                                                                                                    <option value="534">Kepro B.V Maagdenburgstarrt,Netherland</option>
                                                                                                    <option value="535">Kepro BV Compagnieweg, TheNetherlands</option>
                                                                                                    <option value="538">Komipharm International Co.Ltd. Korea</option>
                                                                                                    <option value="541">Korea Thumb Vet Co. Ltd., Korea</option>
                                                                                                    <option value="543">Koream Vetchem Co., Korea</option>
                                                                                                    <option value="544">Kyowa Hakko KivinCo. Ltd., Japan</option>
                                                                                                    <option value="545">Kyowa Hakko Kogyo Co., Ltd.,Japan</option>
                                                                                                    <option value="547">Laboratories Crinex, France</option>
                                                                                                    <option value="548">Laboratories Hipra S.A., Spain</option>
                                                                                                    <option value="550">Laboratories Ovejero S.A Spain</option>
                                                                                                    <option value="553">Laboratories Panpharma, France</option>
                                                                                                    <option value="554">Laboratories Sogeval</option>
                                                                                                    <option value="555">Laboratorio Aldo-Union, Spain</option>
                                                                                                    <option value="556">Laboratorios Hipra SA, Spain</option>
                                                                                                    <option value="558">Lavipharm S.A, Greece</option>
                                                                                                    <option value="559">Leiras OY, Finland</option>
                                                                                                    <option value="560">Lek dd Ljubljana Pharmaceutical &Chemical Co., Slovenia</option>
                                                                                                    <option value="561">Leo Pharmaceutical Products,Denmark</option>
                                                                                                    <option value="563">Les Laboratories Servier Industrie,France</option>
                                                                                                    <option value="566">LFB Biomedicaments, France</option>
                                                                                                    <option value="567">LG Life Sciences Ltd.(LGLS),Korea</option>
                                                                                                    <option value="568">Lilly Deutsch Land GmbH,Germany</option>
                                                                                                    <option value="569">Lilly Egypt, Egypt</option>
                                                                                                    <option value="571">Lilly France SA, France</option>
                                                                                                    <option value="572">Lilly, France</option>
                                                                                                    <option value="573">Lohmann Animal HealthInternational, USA</option>
                                                                                                    <option value="574">Lohmann Animal Health GmbH &Co., Germany</option>
                                                                                                    <option value="577">LTS Lohmann Therapie-Systeme,Germany</option>
                                                                                                    <option value="578">M/S Meril select Inc,U.S.A</option>
                                                                                                    <option value="579">M/s Organon,Holland</option>
                                                                                                    <option value="580">M/S. LG Life Sciences Ltd., Korea</option>
                                                                                                    <option value="581">Made for F. Hoffmann-La RocheLtd. Switzerland By RocheDiagnostic GmbH Germany</option>
                                                                                                    <option value="582">Mallinckrodt Inc., USA</option>
                                                                                                    <option value="583">Mayne Pharma Pty Ltd., Australia</option>
                                                                                                    <option value="584">Mayne Pharma Pty. Ltd., Germany</option>
                                                                                                    <option value="586">Medac Gesellschaft fur Klinischespezialpraparate Germany</option>
                                                                                                    <option value="588">Medica AG, Germany</option>
                                                                                                    <option value="589">Medipro Medikal Uruler San.,Turkey</option>
                                                                                                    <option value="590">Merck , Italy</option>
                                                                                                    <option value="591">Merck KGaA, Germany</option>
                                                                                                    <option value="592">Merck Serono S.A., Switzerland</option>
                                                                                                    <option value="593">Merck Serono S.p.A, Italy</option>
                                                                                                    <option value="597">Merial Biological Laboratory, UK</option>
                                                                                                    <option value="598">Merial Italia S.p. A., Italy</option>
                                                                                                    <option value="600">Merial Select, Inc., USA</option>
                                                                                                    <option value="603">Merial, France</option>
                                                                                                    <option value="604">Merial, U.K</option>
                                                                                                    <option value="605">Merial,France</option>
                                                                                                    <option value="606">Mika Pharma GmbH, Germany</option>
                                                                                                    <option value="607">N V Organon OSS, Holland</option>
                                                                                                    <option value="608">N. V. Organon, Netherlands</option>
                                                                                                    <option value="609">N.V. Organon, Holland</option>
                                                                                                    <option value="611">N.V. Upjohn S.A., Belgium</option>
                                                                                                    <option value="612">Nantong Egens Biotechinology Co.Ltd., China</option>
                                                                                                    <option value="613">Nephron Pharma, USA</option>
                                                                                                    <option value="614">Nippon Kayaku Co Ltd,.Japan</option>
                                                                                                    <option value="616">Norbrook Laboratories Ltd.,Ireland</option>
                                                                                                    <option value="617">Novartis Farma SpA, Italy</option>
                                                                                                    <option value="619">Novartis Farmaceutica S.A., Spain</option>
                                                                                                    <option value="622">Novartis Opthalmics, Switzerland</option>
                                                                                                    <option value="623">Novartis Pharma AG, Switzerland</option>
                                                                                                    <option value="625">Novartis Pharma Ag. Germany</option>
                                                                                                    <option value="626">Novartis Pharma Ag. Switerland</option>
                                                                                                    <option value="627">Novartis Pharma GmbH, Germany</option>
                                                                                                    <option value="628">Novartis Pharma SA, China</option>
                                                                                                    <option value="629">Novartis Pharma SA, France</option>
                                                                                                    <option value="630">Novartis Pharma Switzerland</option>
                                                                                                    <option value="631">Novartis Pharma, France</option>
                                                                                                    <option value="634">Novartis Pharmaceuticals, UK</option>
                                                                                                    <option value="635">Novartis Vaccine and DiagnosticsGermany</option>
                                                                                                    <option value="636">Novartis Vaccines & DiagnosticsS.r.l Italy</option>
                                                                                                    <option value="638">Novo Industri A/S, Denmark</option>
                                                                                                    <option value="639">Novo Nordisk A/S Denmark</option>
                                                                                                    <option value="642">Nycomed GmbH, USA</option>
                                                                                                    <option value="643">Nycomed, Germany</option>
                                                                                                    <option value="644">Octapharma Pharmazeutika mbH,Germany</option>
                                                                                                    <option value="645">Oculus Innovative Sciences, USA</option>
                                                                                                    <option value="646">Organon (Ireland) Ltd., Ireland</option>
                                                                                                    <option value="649">Organon Iteland Ltd., Organon</option>
                                                                                                    <option value="650">Orion Corporation Finland</option>
                                                                                                    <option value="652">Pacific Hospital Supply Co., Ltd.,USA</option>
                                                                                                    <option value="654">Pacsun Industrial Co. Ltd., Korea</option>
                                                                                                    <option value="655">Pasteur Merieux Serums andVaccines, France</option>
                                                                                                    <option value="656">Patheon Inc., Canada</option>
                                                                                                    <option value="658">Pfizer (perth) Pty. Ltd. Australia</option>
                                                                                                    <option value="661">Pfizer Animal Health, USA</option>
                                                                                                    <option value="663">Pfizer Italia Srl, Italy</option>
                                                                                                    <option value="664">Pfizer Manufacturing deutchslandGermany</option>
                                                                                                    <option value="665">Pfizer Manufacturing, Belgium</option>
                                                                                                    <option value="667">Pfizer PGM, France</option>
                                                                                                    <option value="668">Pfizer Pharmaceuticals, Ireland</option>
                                                                                                    <option value="669">Pfizer Puus SP.A, Italy</option>
                                                                                                    <option value="670">Pfizer Puus SP.A,., Belgium</option>
                                                                                                    <option value="671">Pfizer Spa, Italy</option>
                                                                                                    <option value="672">Pfizer, Belgium</option>
                                                                                                    <option value="673">Pfizer, Canada</option>
                                                                                                    <option value="675">Pharmachemie B. V. Netherlands</option>
                                                                                                    <option value="677">Pharmachemie B.V., Holland</option>
                                                                                                    <option value="679">Pharmacia Spa, Italy</option>
                                                                                                    <option value="680">Pharmacosmos</option>
                                                                                                    <option value="681">Pharmathen S.A Greece</option>
                                                                                                    <option value="682">Plasmapharm Sera GmbH & Co.,Austria</option>
                                                                                                    <option value="683">Polichem S.A., Spain</option>
                                                                                                    <option value="684">Premier Enterprises, India</option>
                                                                                                    <option value="685">Procter & Gumble, Germany</option>
                                                                                                    <option value="686">Quatchem Limited, Uk</option>
                                                                                                    <option value="687">R. P. Scherer GmbH, Germany</option>
                                                                                                    <option value="689">Reckitt & Colman Products Ltd., UK</option>
                                                                                                    <option value="690">Riemser Arzneimittel AG,Germany</option>
                                                                                                    <option value="691">Roche Diagnostic, GermanyUnder Licence Roche, Swiss</option>
                                                                                                    <option value="692">Roche Diagnostics GmbH,Germany</option>
                                                                                                    <option value="693">Roche Fontenay, France</option>
                                                                                                    <option value="694">Roche Spa, ItalyF. Hoffmann La Roche,Switzerland</option>
                                                                                                    <option value="695">Roche SpA, Italy</option>
                                                                                                    <option value="696">Rotexmedica GmbH, Germany</option>
                                                                                                    <option value="699">S. A. Alcon Couvereur NV,Belgium</option>
                                                                                                    <option value="700">S. A. Alcon Couvreur N.V.,Belgium</option>
                                                                                                    <option value="706">S.C Sindan Pharma S.R.l,Romania</option>
                                                                                                    <option value="707">S.C Sindan Pharma S.R.LkRomania</option>
                                                                                                    <option value="708">S.P Veterinaria, s.a, Spain</option>
                                                                                                    <option value="709">Samyang Anipharm Co. Ltd. Korea</option>
                                                                                                    <option value="710">Samyang Pharma ChemicalsCo.Ltd,, Korea</option>
                                                                                                    <option value="711">Sandoz GmbH, Austria</option>
                                                                                                    <option value="712">Sandoz Private Ltd. India</option>
                                                                                                    <option value="729">SBL Vaccin AB, Sweden</option>
                                                                                                    <option value="730">Schering A.G, Germany</option>
                                                                                                    <option value="731">Schering Plough, Ireland</option>
                                                                                                    <option value="732">Schering- Plough Animal HealthCorp., USA</option>
                                                                                                    <option value="733">ScheringOy,Pansiontie,47,20210Turku, Finland</option>
                                                                                                    <option value="735">Schwarz Pharma, USA</option>
                                                                                                    <option value="736">Senexi Sas Fontenay-Sous-Bois,France</option>
                                                                                                    <option value="737">Senixi SAS, France</option>
                                                                                                    <option value="738">Serono Pharma Ltd., UK</option>
                                                                                                    <option value="739">Serono Pharma Spa, Italy</option>
                                                                                                    <option value="740">Serumwerk Burnburg AG,Germany</option>
                                                                                                    <option value="741">SF Co. Ltd., Korea</option>
                                                                                                    <option value="742">Shandong weigao Group MedicalPolymer Co. Ltd., China</option>
                                                                                                    <option value="746">Shinil Biogen & Co. Ltd., Korea</option>
                                                                                                    <option value="749">Sino Swed PharmaceuticalCorporation Ltd., China</option>
                                                                                                    <option value="750">Smith & Nephew Medical Ltd., UK</option>
                                                                                                    <option value="751">Socorex Isba S .A. CH.ChampColomb 7,Switzerland</option>
                                                                                                    <option value="752">Solvay Pharmaceuticals,Netherlands</option>
                                                                                                    <option value="753">Special T Products Ltd., UK</option>
                                                                                                    <option value="754">Stiefel Laboratories Ptd Ltd.,Ireland</option>
                                                                                                    <option value="755">Stiefel Laboratories Ptd Ltd.,Singapore</option>
                                                                                                    <option value="758">Sumitomo Pharmaceuticals Co.,Ltd., Japan</option>
                                                                                                    <option value="759">Super</option>
                                                                                                    <option value="760">Swensweg 5 Haarlem, Holland</option>
                                                                                                    <option value="761">Takeda Pharmaceutical Companyltd., Japan</option>
                                                                                                    <option value="762">Talecris Biotherapeutics Inc. USA</option>
                                                                                                    <option value="763">Terumo Corporation, Japan</option>
                                                                                                    <option value="764">Teva Pharmaceutical Private Ltd.,Hungary</option>
                                                                                                    <option value="765">Thai Nokorn Patana Co. Ltd.Thailand</option>
                                                                                                    <option value="766">The Dow Chemical Company,USA</option>
                                                                                                    <option value="767">The Research Foundation forMicrobial Disease of OsakaUniversity, Japan</option>
                                                                                                    <option value="768">TRB Chemedica International Sa,Switzerland</option>
                                                                                                    <option value="769">Tyco Healthcare, Canada</option>
                                                                                                    <option value="770">UCB India Ltd., India</option>
                                                                                                    <option value="771">UG Medical Disposable DNMalaysia</option>
                                                                                                    <option value="772">United Propotions Inc., USA</option>
                                                                                                    <option value="773">Varun Medimpex,India</option>
                                                                                                    <option value="775">Vetech Labortories Inc., Canada</option>
                                                                                                    <option value="776">Vetoquinol SA, France</option>
                                                                                                    <option value="777">Vifor (International) Inc.,Switzerland</option>
                                                                                                    <option value="778">Walter Ritter GmbH, Germany</option>
                                                                                                    <option value="779">Walter Ritter Kg, Germany</option>
                                                                                                    <option value="780">Wyeth Canada, Canada</option>
                                                                                                    <option value="781">Wyeth Pharma GmbH, Germany</option>
                                                                                                    <option value="783">Y. Snore LLC 460, USA</option>
                                                                                                    <option value="784">Zagro Singapore Pte. Ltd.,Singapore</option>
                                                                                                    <option value="785">Zentaris GmbH, Germany</option>
                                                                                                    <option value="786">Zhejiang Anji Sunlight MedicinalProducts Co., Ltd., China</option>
                                                                                                    <option value="787">not a pharma</option>
                                                                                                    <option value="788">Janata Pharma</option>
                                                                                                    <option value="789">Convatec</option>
                                                                                                    <option value="790">Lundbeck/Lilac</option>
                                                                                                    <option value="791">Apothecon</option>
                                                                                                    <option value="792">GNC</option>
                                                                                                    <option value="793">Merz Pharmaceuticals</option>
                                                                                                    <option value="794">Abbott India Ltd</option>
                                                                                                    <option value="795">Dr. Reddy's Laboratories ltd</option>
                                                                                                    <option value="796">Adcock Ingram</option>
                                                                                                    <option value="797">Meyer organics ltd</option>
                                                                                                    <option value="798">POLIPHARM CO LTD</option>
                                                                                                    <option value="799">E. Merck</option>
                                                                                                    <option value="800">Bioderma</option>
                                                                                                    <option value="801">City overseas</option>
                                                                                                    <option value="802">Novo Nordisk</option>
                                                                                                    <option value="803">UniDerma</option>
                                                                                                    <option value="804">Nicholas</option>
                                                                                                    <option value="805">Norgine</option>
                                                                                                    <option value="806">Kawser Chemicals</option>
                                                                                                    <option value="807">M.R Chemicals</option>
                                                                                                    <option value="808">Kazi Chemicals</option>
                                                                                                    <option value="809">JMI Pharma</option>
                                                                                                    <option value="810">IPH</option>
                                                                                                    <option value="811">Elixir</option>
                                                                                                    <option value="812"> Boehringer Ingelheim Pharmaceutical</option>
                                                                                                    <option value="813">Astrazeneca Pharmaceutical company</option>
                                                                                                    <option value="814">Modi-mundipharma</option>
                                                                                                    <option value="815">Laboratorio Varifarma, Argentina</option>
                                                                                                    <option value="816">S.A. Alcon Couvreur.,N.V., Belgium</option>
                                                                                                    <option value="817">Allied Pharmaceuticals Ltd.</option>
                                                                                                    <option value="818">Orion Infusion Ltd.</option>
                                                                                                    <option value="819">Essential Drugs Company Ltd.</option>
                                                                                                    <option value="820">Medihealth Pharmaceutical Limited</option>
                                                                                                    <option value="821">Shire Pharmaceuticals Ltd.</option>
                                                                                                    <option value="822">Faruk Pharmaceutical</option>
                                                                                                    <option value="823">One Pharma Ltd.</option>
                                                                                                    <option value="825">Cosmic Pharma Ltd.</option>
                                                                                                    <option value="826">MST Pharma and Healthcare Ltd.</option>
                                                                                                    <option value="827">MedRx Life Science Ltd.</option>
                                                                                                    <option value="828">Team Pharmaceuticals Ltd.</option>
                                                                                                    <option value="829">SMC Enterprise Limited Bangladesh</option>
                                                                                                    <option value="830">Active Fine Chemicals Ltd</option>
                                                                                                    <option value="831">SUNMAN-BIRDEM Pharma Ltd</option>
                                                                                                    <option value="832">Get Well Limited</option>
                                                                                                    <option value="833">Centeon Pharma Limited</option>
                                                                                                    <option value="834">Hamdard Laboratories bangladesh</option>
                                                                                                    <option value="835">Kumudini pharma</option>
                                                                                                    <option value="836">Ripon Doctor  dental</option>
                                                                                                    <option value="837">Uni Drug Laboratories </option>
                                                                                                    <option value="838">Bashundhara </option>
                                                                                                    <option value="839">Ergon Pharmaceuticals</option>
                                                                                                    <option value="840">Servier Bangladesh Operations</option>
                                                                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Previous Dues<span style="color: red">*</span></label>
                                            <input type="text" name="predues" id="preDue" class="form-control"  placeholder="0.00" readonly="">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Supplier Invoice Number<span style="color: red">*</span></label>
                                            <input type="text" name="invoice_number" class="form-control" value="22120413493">
                                            <input type="hidden" name="common_id" class="form-control"  value="">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="datepicker-autoclose">Date</label>
                                            <input type="text" class="form-control" id="datepicker-autoclose" name="purchase_date" value="12/04/2022" placeholder="mm/dd/yyyy" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Total Amount<span style="color: red">*</span></label>
                                            <input type="text" name="totalAmount" class="form-control" id="grand_total" value="" readonly="">
                                            <input type="hidden" class="form-control" id="hiddenTotalamount" value="" readonly="">
                                            <input type="hidden" name="totalNetAmount" id="totalNetAmount" class="form-control" value="" readonly="">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label style="font-size: 14px;">Payment Method</label><br>
                                            <select name="payment_method" class="form-control"  id="getFname" onchange="admSelectCheck(this);" style="width: 100%;">
                                                <option value="Cash">Cash</option>
                                                <option id="admOption" value="Cheque">Cheque</option>
                                                <option value="Pay order">Pay order</option>
                                                <option value="Credit Card">Credit Card</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <label>Discount</label>
                                            <input type="text" name="disCnt" class="form-control" id="disCnt" oninput="calculateDis(this)" autocomplete="off">
                                        </div>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <label>Less</label>
                                            <input type="text" name="less" class="form-control" id="less" oninput="calculateDis(this)" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Amount<span style="color: red">*</span></label>
                                            <input type="text" name="cashPaid" class="form-control" id="paid" oninput="paidamount(this)" placeholder="Amount" autocomplete="off"required="">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>Dues<span style="color: red">*</span></label>
                                            <input type="text" name="dues" id="currdue" class="form-control" value="0" readonly="">
                                        </div>
                                    </div> 
                                    <div class="col-md-3" id="admDivCheck4" style="display:none;">
                                        <div class="form-group">
                                            <label style="font-size: 14px;">Check Amount</label><br>
                                            <input type="text" name="chequeAmount" class="form-control" placeholder="0.00">
                                        </div>
                                    </div>
                                    <div class="col-md-3" id="admDivCheck" style="display:none;">
                                        <div class="form-group">
                                            <label style="font-size: 14px;">Bank Name</label><br>
                                            <select name="bankName" class="form-control" style="width: 100%;">
                                                <option value="">--SELECT BANK--</option>
                                                                                                    <option value="2">Sonali Bank</option>
                                                                                                    <option value="3">Dutch Bangla Bank Ltd.</option>
                                                                                                    <option value="4">IFIC bank</option>
                                                                                                    <option value="5">Islami Bank Bangladesh Ltd.</option>
                                                                                                    <option value="6">EXIM Bank</option>
                                                                                                    <option value="7">BDBL Bank</option>
                                                                                                    <option value="8">Rupali Bank</option>
                                                                                                    <option value="9">Janata Bank</option>
                                                                                                    <option value="10">Agrani Bank</option>
                                                                                            </select>
                                        </div>
                                    </div> 
                                    <div class="col-md-3" id="admDivCheck2" style="display:none;">
                                        <div class="form-group">
                                            <label style="font-size: 14px;">Cheque Number</label><br>
                                            <input type="text" name="cheque_num" class="form-control" placeholder="0.00">
                                        </div>
                                    </div>
                                    <div class="col-md-3" id="admDivCheck3" style="display:none;">
                                        <div class="form-group">
                                            <label for="datepicker-autoclose">Cheque Approval Date</label>
                                            <input type="text" class="form-control" id="datepicker-autoclose2" name="ChequeAppDate" placeholder="mm/dd/yyyy">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="border-top">
                            <div class="card-body" align="center">
                                <button type="submit" onclick="addPurchase()" name="btn" class="btn btn-success" type="button">
                                    <i class="ace-icon fa fa-check bigger-110"></i>
                                    Submit
                                </button>
                                &nbsp; &nbsp; &nbsp;
                                <!--                                <button class="btn btn-danger" type="reset">
                                                                    <i class="ace-icon fa fa-undo bigger-110"></i>
                                                                    Cancle
                                                                </button>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div> 
<footer class="footer text-center">
    All Rights Reserved. Developed by <a target="_blank" href="https://www.youtube.com/c/RobotBalok">Robot Balok's</a> team.
</footer>
</div>
</div>
<script src="assets/libs/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
<script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="assets/extra-libs/sparkline/sparkline.js"></script>
<!--Wave Effects -->
<script src="dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="dist/js/custom.min.js"></script>
<!--This page JavaScript -->
<script src="dist/js/pages/dashboards/dashboard1.js"></script> 
<!-- Charts js Files -->
<script src="assets/libs/flot/excanvas.js"></script>
<script src="assets/libs/flot/jquery.flot.js"></script>
<script src="assets/libs/flot/jquery.flot.pie.js"></script>
<script src="assets/libs/flot/jquery.flot.time.js"></script>
<script src="assets/libs/flot/jquery.flot.stack.js"></script>
<script src="assets/libs/flot/jquery.flot.crosshair.js"></script>
<script src="assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
<script src="dist/js/pages/chart/chart-page-init.js"></script>
<script src="assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
<script src="dist/js/pages/mask/mask.init.js"></script>
<script src="assets/libs/select2/dist/js/select2.full.min.js"></script>
<script src="assets/libs/select2/dist/js/select2.min.js"></script>
<script src="assets/libs/jquery-asColor/dist/jquery-asColor.min.js"></script>
<script src="assets/libs/jquery-asGradient/dist/jquery-asGradient.js"></script>
<script src="assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js"></script>
<script src="assets/libs/jquery-minicolors/jquery.minicolors.min.js"></script>
<script src="assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="assets/libs/quill/dist/quill.min.js"></script>
<script>
    //***********************************//
    // For select 2
    //***********************************//
    $(".select2").select2({
        tags: "true",
        minimumInputLength: 2,
        placeholder: "Select an option",
        allowClear: true
    });
    $(".select22").select2({
        tags: "true",
        //minimumInputLength: 2,
        placeholder: "Select an option",
        allowClear: true
    });

    /*datwpicker*/
    jQuery('.mydatepicker').datepicker();
    jQuery('#datepicker-autoclose').datepicker({
        autoclose: true,
        todayHighlight: true
    });
    jQuery('#datepicker-autoclose1').datepicker({
        autoclose: true,
        todayHighlight: true
    });
    jQuery('#datepicker-autoclose4').datepicker({
        autoclose: true,
        todayHighlight: true
    });
    jQuery('#datepicker-autoclose3').datepicker({
        autoclose: true,
        todayHighlight: true
    });
    var quill = new Quill('#editor', {
        theme: 'snow'
    });

</script>

<!-- this page js -->
<script src="assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
<script src="assets/extra-libs/multicheck/jquery.multicheck.js"></script>
<script src="assets/extra-libs/DataTables/datatables.min.js"></script>

<script src="assets/extra-libs/buttondt/buttons.flash.min.js"></script>
<script src="assets/extra-libs/buttondt/buttons.html5.min.js"></script>
<script src="assets/extra-libs/buttondt/buttons.print.min.js"></script>
<script src="assets/extra-libs/buttondt/dataTables.buttons.min.js"></script>

<script src="assets/extra-libs/buttondt/jszip.min.js"></script>
<script src="assets/extra-libs/buttondt/pdfmake.min.js"></script>
<script src="assets/extra-libs/buttondt/vfs_fonts.js"></script>
<script>
    /****************************************
     *       Basic Table                   *
     ****************************************/
    $('#zero_config').DataTable();
    $('#zero_config2').DataTable();
    $('#zero_config3').DataTable();
    $('#zero_config4').DataTable();
</script>
<script>
    $(document).ready(function () {
        $('#buttonTab').DataTable({
            responsive: true,
//            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
//	    dom: 'lfrtiBp',	
            dom: 'lBfrtip',
            buttons: [
                'copy', 'excel', 'pdf', 'csv', 'print'
            ]
        });
    });
</script>


<script>
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
    }
</script>

<script>
    $("#show").change(function () {
        if ($(this).val() == "Box")
        {
            $("#box").show();
        } else
        {
            $("#box").hide();
        }
        if ($(this).val() == "Carton")
        {
            $("#cqty").show();
            $("#bqty").show();
        } else
        {
            $("#cqty").hide();
            $("#bqty").hide();
        }
    });

</script>
<script>
    function admSelectCheck(nameSelect)
    {
        if (nameSelect) {
            admOptionValue = document.getElementById("admOption").value;
            if (admOptionValue == nameSelect.value) {
                document.getElementById("admDivCheck").style.display = "block";
                document.getElementById("admDivCheck2").style.display = "block";
                document.getElementById("admDivCheck3").style.display = "block";
                document.getElementById("admDivCheck4").style.display = "block";
            } else {
                document.getElementById("admDivCheck").style.display = "none";
                document.getElementById("admDivCheck2").style.display = "none";
                document.getElementById("admDivCheck3").style.display = "none";
                document.getElementById("admDivCheck4").style.display = "none";
            }
        } else {
            document.getElementById("admDivCheck").style.display = "none";
        }
    }
</script>
<script>
    function totalItemWiseStock(id) {
        $('#totalItemWiseStock').html('<img src="LoaderIcon.gif" />');
        jQuery.ajax({
            url: "contentload/totalItemWiseStock.php",
            data: 'id=' + id,
            type: "POST",
            success: function (data) {
                if (data.trim() == '') {
                    $('#totalItemWiseStock').html(0);
                    $('#totalItemWiseStock2').html(0);
                } else {
                    $('#totalItemWiseStock').html(data);
                    $('#totalItemWiseStock2').html(data);
                }

            }
        });
    }
    function getTotalMedicineExprieStock(id) {
        $('#getTotalMedicineExprieStock').html('<img src="LoaderIcon.gif" />');
        jQuery.ajax({
            url: "contentload/getTotalMedicineExprieStock.php",
            data: 'id=' + id,
            type: "POST",
            success: function (data) {
                if (data.trim() == '') {
                    $('#getTotalMedicineExprieStockh1').html(0);
                    $('#getTotalMedicineExprieStockh2').html(0);
                    $('#getTotalMedicineExprieStock').html(0);
                } else {
                    $('#getTotalMedicineExprieStockh1').html(data);
                    $('#getTotalMedicineExprieStockh2').html(data);
                    $('#getTotalMedicineExprieStock').html(data);
                }

            }
        });
    }
    function getTotalMedicineExprieSoonStock(id) {
        $('#getTotalMedicineExprieSoonStock').html('<img src="LoaderIcon.gif" />');
        jQuery.ajax({
            url: "contentload/getTotalMedicineExprieSoonStock.php",
            data: 'id=' + id,
            type: "POST",
            success: function (data) {
                if (data.trim() == '') {
                    $('#getTotalMedicineExprieSoonStockh1').html(0);
                    $('#getTotalMedicineExprieSoonStockh2').html(0);
                    $('#getTotalMedicineExprieSoonStock').html(0);
                } else {
                    $('#getTotalMedicineExprieSoonStockh1').html(data);
                    $('#getTotalMedicineExprieSoonStockh2').html(data);
                    $('#getTotalMedicineExprieSoonStock').html(data);
                }

            }
        });
    }
    function totalOutStock(id) {
        $('#totalOutStock').html('<img src="LoaderIcon.gif" />');
        jQuery.ajax({
            url: "contentload/totalOutStock.php",
            data: 'id=' + id,
            type: "POST",
            success: function (data) {
                if (data.trim() == '') {
                    $('#totalOutStock').html(0);
                    $('#totalOutStock2').html(0);
                } else {
                    $('#totalOutStock').html(data);
                    $('#totalOutStock2').html(data);
                }
            }
        });
    }
    
    function totalCustomerFollowup(id) {
        $('#totalOutStock').html('<img src="LoaderIcon.gif" />');
        jQuery.ajax({
            url: "contentload/customer_followup_count.php",
            data: 'id=' + id,
            type: "POST",
            success: function (data) {
                if (data.trim() == '') {
                    $('#customerFollowup').html(0);
                    $('#customerFollowup2').html(0);
                } else {
                    $('#customerFollowup').html(data);
                    $('#customerFollowup2').html(data);
                }

            }
        });
    }

    totalItemWiseStock(1);
    getTotalMedicineExprieStock(1);
    getTotalMedicineExprieSoonStock(1);
    totalOutStock(1);
    totalCustomerFollowup(1);
</script>
</body>

</html>
<script>
    $(document).ready(function () {
        $('#sup_id').change(function () {
            var id = $(this).val();
            $.ajax({
                type: 'POST',
                url: 'loadpage/supplierpreDuesLoad.php',
                data: {'sup_id': id},
                success: function (html) {
                    console.log(html);
                    $('#preDue').val(html);
                }
            });
        });
    });

    function addPurchase() {

        var e = document.getElementById("sup_id");
        var supplier = e.options[e.selectedIndex].value;
        var paid = document.getElementById("paid").value;
        var cprice = document.getElementsByClassName("cprice").required = true;
        var cprice1 = document.getElementsByClassName("cprice").value;

        if (supplier != '' && paid != '' && cprice1 != '0.00') {
            $('#waitModal').modal('show');
            $('#waitModal').modal({backdrop: 'static', keyboard: false});
        }

    }

    $('#closemodal').click(function () {
        $('#waitModal').modal('hide');
    });

</script>
<script>
    var products = [];
    $(document).ready(function () {
        var availableTags = []

//        $('.search').on('keyup', function () {
        $('.search').on('keypress', function () {
            var li = ""
            var text = ''
            var sup_id = document.getElementById("sup_id").value;
            $.getJSON('product2.php?name=' + $(this).val() + '&&sup_id=' + sup_id, function (response) {
                response.forEach(function (value) {
                    var data_field = value.medicine_name + "|" + value.medicine_form + "| " + value.medicine_strength;
                    var data_field1 = value.medicine_name + "|" + value.medicine_form + "| " + value.medicine_strength + "| " + value.generic_name + "| " + value.company_name;
                    li += "<li class='sli' data-id='" + value.id + "' data-stock='" + value.stock + "' data-cprice='" + value.purchases_price + "' data-sprice='" + value.sale_price + "' data-min_stock='" + value.min_stock + "' id='" + data_field + "'><a href='#'>" + data_field1 + "</a></li>"
                });
                $('.list-group').html(li)
            })

        })

        $('.tbl tbody').on('click', '.delete-row', function () {
            var id = $(this).data('id')
            console.log(id, products)
            products = products.filter(function (value) {
                return value.id != id
            });
            bindTOTemplate(products)
            createTotal()
        })
        $('.tbl tbody').on('change', '.qty', function () {
            console.log($(this).data('id'), products)

        })
        $('.tbl tbody').on('keyup', '.qty', function () {
            console.log($(this).data('id'), products)
            var id = $(this).data('id')
            var p = products.find(function (value) {
                return value.id == id
            })
            p.qtn = $(this).val();
            var total = +p.qtn * +p.cprice;
            $(this).parent('td').siblings('.sub_total').text(total)
            createTotal()

        })

        $('.tbl tbody').on('keyup', '.cprice', function () {
            console.log($(this).data('id'), products)
            var id = $(this).data('id')
            var p = products.find(function (value) {
                return value.id == id
            })
            p.cprice = $(this).val();
            var total = +p.qtn * +p.cprice;
            $(this).parent('td').siblings('.sub_total').text(total)
            createTotal()

        })


        var grand_total = 0;
        function createTotal() {
            grand_total = products.reduce(function (amount, row) {
                return amount += row.subtotal()
            }, 0)
            var grandTotal = roundToTwo(grand_total);
            $('#grand_total').val(grandTotal)
            $('#hiddenTotalamount').val(grandTotal)
        }
        function bindTOTemplate(products) {
            products.reverse();
            $('.tbl tbody').empty()
            if (products) {
                var a = 1;
                products.forEach(function (pro) {

                    var product = "<tr>"
                    product += "<td style='width: 10px'>" + a++ + "</td>"
                    product += "<td style='width: 150px'>" + pro.name + "</td>"
                    product += "<td>"
                    product += "<input type = 'number' style='width: 120px' name='minstk[]' class='form-control minstk' onchange='change6(this.value," + pro.id + ")' value='" + pro.minstk + "' data-id='" + pro.id + "' />"
                    product += "</td>"
                    product += "<td>"
                    product += "<input id='edate_" + a + "' type = 'date' style='width: 160px;" + pro.ed() + "' name='edate[]' onchange='changed3(" + a + "),change4(this.value," + pro.id + ")' class='edate form-control' required value='" + pro.edv() + "' data-id='" + pro.id + "' />"
                    product += "<input type='hidden' name='product_id[]' class='form-control' value='" + pro.id + "' data-id='" + pro.id + "' />"
                    product += "</td>"
                    product += "<td><input id='cost_price_" + a + "' type = 'number' step='any' name='cprice[]' style='width: 100px;" + pro.cp() + "' onkeyup='changed(" + a + ")' class='cprice form-control' value='" + pro.cprice + "'  data-id='" + pro.id + "' /></td>"
                    product += "<td><input id='sale_price_" + a + "' type = 'number' step='any' style='width: 100px;" + pro.sp() + "' name='sprice[]' onkeyup='changed2(" + a + "),change5(this.value," + pro.id + ")' class='sprice form-control' value='" + pro.sprice + "'  data-id='" + pro.id + "' /></td>"
                    product += "<td><input type = 'number' style='width: 100px' name='quantity[]' class='qty form-control' value='" + pro.qtn + "' data-id='" + pro.id + "' /></td>"
                    product += "<td class='sub_total' style='width: 150px'>" + pro.subtotal() + "</td>"
                    product += "<td style='width: 100px'><button class='btn btn-danger delete-row' data-id='" + pro.id + "' >x</button></td>"
                    product += "</tr>"
                    $('.tbl tbody').append(product)
                    createTotal()

                });


            }


        }

//        var products = [];
        $('body').on('click', '.list-group li', function () {
            $('.search').val($(this).attr('id'));
            var qty = 1
            var discount = 0
            var subtotal = qty * $(this).data('cprice')
            var id = $(this).data('id')
            var prod = products.find(function (value) {
                return value.id == id
            })
            if (prod) {
                alert('already added!!');
                return;
            }

            var p = {
                sl: 1,
                id: $(this).data('id'),
                name: $(this).attr('id'),
                qtn: 1,
                instance: "you can here",
                cprice: $(this).data('cprice'),
                sprice: $(this).data('sprice'),
                //edate: $(this).data('edate'),
                edate: "mm/dd/yyyy",
                minstk: $(this).data('min_stock'),
                discount: 0,
                stock: $(this).data('stock'),
                subtotal: function () {

                    var total = +this.qtn * +this.cprice;
                    return total;

                },
                sprce: function () {
                    var sprc = this.sprice;
                    return sprc;
                },
                cp: function () {

                    console.log(this.edate);

                    if (this.cprice == '0.00')
                        return "background-color:red;color:white;";
                    else
                        return "black";

                },
                sp: function () {
                    if (this.sprice == '0.00')
                        return "background-color:red;color:white;";
                    else
                        return "black";
                },
                ed: function () {
                    if (this.edate == "mm/dd/yyyy")
                        return "background-color:red;color:white;";
                    else
                        return "black";
                },
                edv: function () {
                    return this.edate;
                    console.log(this.edate);
                }
            }
            products.push(p)
            bindTOTemplate(products)
            clearSearch()
        })

        function clearSearch() {
            $('#search').val('')
            var ele = document.getElementById('search');
            var newVal = '';

            ele.value = newVal;
            ele.focus();

            // To update cursor position to recently added character in textBox
            ele.setSelectionRange(newVal.length, newVal.length);
        }
        $('body').click(function () {
            var li = ""

            $('.list-group').html(li)

        })

    });

    function formatDate(date) {
        var d = new Date(date),
                month = '' + (d.getMonth() + 1),
                day = '' + d.getDate(),
                year = d.getFullYear();

        if (month.length < 2)
            month = '0' + month;
        if (day.length < 2)
            day = '0' + day;

        return [year, month, day].join('-');
    }


    function checkData(value)
    {
        console.log(value);
    }


    function changed(id) {
        var docId = document.getElementById('cost_price_' + id);
        docId.style.backgroundColor = "white";
        docId.style.color = "black";

        console.log(id);
    }
    function changed2(id) {
        var docId = document.getElementById('sale_price_' + id);
        docId.style.backgroundColor = "white";
        docId.style.color = "black";

        console.log(id);
    }
    function changed3(id) {
        var docId = document.getElementById('edate_' + id);
        docId.style.background = "white";
        docId.style.color = "black";

        console.log(id);
    }

    function change4(date, id) {
        var productsLog = [];

        products.forEach(function (product) {
            if (product.id == id)
            {
                product.edate = date;
            }

            productsLog.push(product);
        });

        products = productsLog;
    }
    function change5(spv, id) {
        var productsLog = [];

        products.forEach(function (product) {
            if (product.id == id)
            {
                product.sprice = spv;
            }

            productsLog.push(product);
        });

        products = productsLog;
    }

    function change6(minstk, id) {
        var productsLog = [];

        products.forEach(function (product) {
            if (product.id == id)
            {
                product.minstk = minstk;
            }

            productsLog.push(product);
        });

        products = productsLog;
    }


    function calculateDis(id) {
        var hiddenTotalamount = $('#hiddenTotalamount').val();
        var disCnt = $('#disCnt').val();

        $('#grand_total').val(0);

        var less = $('#less').val();
        var disCntRes = Number(hiddenTotalamount) * Number(disCnt);
        var totl = Number(disCntRes) / 100;
        var result = Number(hiddenTotalamount) - Number(totl);
        var res = Number(result) - Number(less);
        $('#currdue').val(res);
        $('#grand_total').val(res);
    }

    function paidamount(id) {
        var totalAmount = $('#grand_total').val();
        var paid = $('#paid').val();
        $('#currdue').val(0);
        var currentDues = Number(totalAmount) - Number(paid);
        if (currentDues > 0) {
            $('#currdue').val(currentDues).css('border', '5px solid red');
        } else if (currentDues < 0) {
            $('#currdue').val(currentDues).css('border', '5px solid red');
        } else {
            $('#currdue').val(currentDues).css('border', '5px solid green');
        }
    }

    function roundToTwo(num) {
        return num.toFixed(2);
        //return +(Math.round(num + "e+2")  + "e-2");
    }
</script>
