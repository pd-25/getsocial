<?php 
use App\Models\Logo;

$sitesetting_item = Logo::first();
// dd($sitesetting_item);
?>

<!doctype html>
<html lang="en">

    

<head>
        
        <meta charset="utf-8" />
        <title>Dashboard | SFO Ride Black</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="/LogoImages/{{$sitesetting_item->favicon_image}}">

        <!-- jquery.vectormap css -->
        <link href="{{asset('assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

        {{-- added --}}
    {{-- fontaswm w3school --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">


    </head>

    <body data-topbar="dark">
    
    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            
            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                       <!-- LOGO -->
                       <div class="navbar-brand-box">
                        <a href="{{ url('admin/dashboard') }}" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="/LogoImages/{{$sitesetting_item->logo_image}}" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="/LogoImages/{{$sitesetting_item->logo_image}}" alt="" height="20">
                            </span>
                        </a>

                        <a href="{{ url('admin/dashboard') }}" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="/LogoImages/{{$sitesetting_item->logo_image}}" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="/LogoImages/{{$sitesetting_item->logo_image}}" alt="" height="20">
                            </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>

                       

                    </div>

                    <div class="d-flex">

                        

                       

                        

                        

                        <div class="dropdown d-inline-block user-dropdown">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="{{asset('assets/images/users/avatar-2.jpg')}}"
                                    alt="Header Avatar">
                                    <span><i class="fa fa-angle-down"></i></span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                                <div class="p-3">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0"> Danish Zehen </h6>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div data-simplebar style="max-height: 230px;">
                                <!-- item-->
                                <a href="{{ url('admin/profile') }}" class="text-reset notification-item">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-xs me-3 mt-1">
                                            <span class="avatar-title bg-soft-primary rounded-circle font-size-16">
                                                <i class="ri-user-line text-primary font-size-16"></i> 
                                            </span>
                                        </div>
                                        <div class="flex-grow-1 text-truncate">
                                            <h6 class="mb-1">Profile</h6>
                                           
                                        </div>
                                    </div>
                                </a>
                                <!-- item-->
                                <a href="{{url('admin/change-password')}}" class="text-reset notification-item">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-xs me-3 mt-1">
                                            <span class="avatar-title bg-soft-warning rounded-circle font-size-16">
                                                <i class="ri-wallet-2-line text-warning font-size-16"></i> 
                                            </span>
                                        </div>
                                        <div class="flex-grow-1 text-truncate">
                                            <h6 class="mb-1">Change Password</h6>
                                            
                                        </div>
                                    </div>
                                </a>
                                
                            </div>
                             <!-- item-->
                             <div class="pt-2 border-top">
                                <div class="d-grid">
                                    <a class="btn btn-sm btn-link font-size-14 text-center" href="{{ route('logOut') }}">
                                        <i class="ri-shut-down-line align-middle me-1"></i> Logout
                                    </a>
                                </div>
                            </div>
                            </div>
                        </div>

                      
            
                    </div>
                </div>
            </header>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <a href="{{ url('admin/dashboard') }}" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="/LogoImages/{{$sitesetting_item->logo_image}}" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="/LogoImages/{{$sitesetting_item->logo_image}}" alt="" height="22">
                        </span>
                    </a>

                    <a href="{{ url('admin/dashboard') }}" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="/LogoImages/{{$sitesetting_item->favicon_image}}" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="/LogoImages/{{$sitesetting_item->logo_image}}" alt="" height="50">
                        </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
                    <i class="fa fa-fw fa-bars"></i>
                </button>

                <div data-simplebar class="sidebar-menu-scroll">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                           
                            <li>
                                <a href="{{ url('admin/dashboard') }}" class="waves-effect">
                                    <i class="ri-home-gear-line"></i><span class="badge rounded-pill bg-success float-end"></span>
                                    <span>Dashboard</span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ url('admin/cms') }}" class="waves-effect">
                                    <i class="fa fa-film"></i><span class="badge rounded-pill bg-success float-end"></span>
                                    <span>CMS</span>
                                </a>
                            </li>

                            
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="fa fa-address-book-o"></i>
                                    <span>Testimonial Mgmt </span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ url('admin/client') }}">List of Testimonials</a></li>
                                    <li><a href="{{url('admin/client/create')}}">Add New Testimonial</a></li>
                                    <!-- <li><a href="ecommerce-orders.html">Orders</a></li>
                                    <li><a href="ecommerce-customers.html">Customers</a></li>
                                    <li><a href="ecommerce-cart.html">Cart</a></li>
                                    <li><a href="ecommerce-checkout.html">Checkout</a></li>
                                    <li><a href="ecommerce-shops.html">Shops</a></li>
                                    <li><a href="ecommerce-add-product.html">Add Product</a></li> -->
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="fa fa-address-card-o"></i>
                                    <span>User Management</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ url('admin/users/list-of-user') }}">List of Users</a></li>
                                    <li><a href="{{ url('admin/users/add-user') }}">Add New User</a></li>
                                    <!-- <li><a href="ecommerce-orders.html">Orders</a></li>
                                    <li><a href="ecommerce-customers.html">Customers</a></li>
                                    <li><a href="ecommerce-cart.html">Cart</a></li>
                                    <li><a href="ecommerce-checkout.html">Checkout</a></li>
                                    <li><a href="ecommerce-shops.html">Shops</a></li>
                                    <li><a href="ecommerce-add-product.html">Add Product</a></li> -->
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="fa fa-cog"></i>
                                    <span>Settings</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ url('admin/Settings/logo-setting/edit') }}">Logo Settings</a></li>
                                    <li><a href="{{ url('admin/Settings/site-setting/edit') }}">Site Settings</a></li>
                                    <!-- <li><a href="ecommerce-orders.html">Orders</a></li>
                                    <li><a href="ecommerce-customers.html">Customers</a></li>
                                    <li><a href="ecommerce-cart.html">Cart</a></li>
                                    <li><a href="ecommerce-checkout.html">Checkout</a></li>
                                    <li><a href="ecommerce-shops.html">Shops</a></li>
                                    <li><a href="ecommerce-add-product.html">Add Product</a></li> -->
                                </ul>
                            </li>
                
                           

                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->

            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <!-- End Page-content -->

               
            <div class="page-content">
                <div class="container-fluid">
                    {{-- content --}}


                    @yield('content')

               
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © SFO Black Ride.
                            </div>
                            
                        </div>
                    </div>
                </footer>
                
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
       
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="{{asset('assets/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>

        
        <!-- apexcharts -->
        <script src="{{asset('assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- jquery.vectormap map -->
        <script src="{{asset('assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
        <script src="{{asset('assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js')}}"></script>

        <script src="{{asset('assets/js/pages/dashboard.init.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('assets/js/app.js')}}"></script>

        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
            <script>
                $(document).ready(function() {
                    $("#your_summernote").summernote();
                    $('.dropdown-toggle').dropdown();
                });
            </script>
            <script>
                $('.chefdeletebtn').click(function(e) {
                    e.preventDefault();
                    var delete_id = $(this).closest("tr").find('.deleteChef').val();
                    swal({
                            title: "Are you sure to delete?",
                            text: "Once deleted, you will not be able to recover this Data!",
                            icon: "warning",
                            buttons: true,
                            dangerMode: true,
                        })
                        .then((willDelete) => {
                            if (willDelete) {
                                $.ajax({
                                    url: '',
                                    type: "POST",
                                    dataType: "json",
                                    data: {
                                        "_token": "{{ csrf_token() }}",
                                        id: delete_id,
                                    },
                                    success: function(res) {
                                        if (res.success) {
                                            swal(response.status, {
                                                    icon: "success",
                                                })
                                                .then((result) => {
                                                    location.reload();
                                                });
                                        }

                                    }
                                });

                            } else {
                                swal("Your data file is safe!");
                            }
                        });
                });
            </script
    </body>



</html>