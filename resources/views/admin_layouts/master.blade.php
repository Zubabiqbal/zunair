
<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
@include('admin_layouts.master_head')
<body>
<div id="body-bg">
    <!-- Phone/Email -->
    @include('layouts.master_phone_email')
    <!-- End Phone/Email -->
    <!-- Header -->
    <div id="header">
        <div class="container-fluid">
            <div class="row">
                <!-- Logo -->
                <div class="logo">
                    <a href="index.html" title="">
                        <img src="assets/img/logo.png" alt="Logo" />
                    </a>
                </div>
                <!-- End Logo -->
            </div>
        </div>
    </div>
    <!-- End Header -->
    <!-- Top Menu -->
    @include('admin_layouts.master_menu')
    <!-- End Top Menu -->
    <!-- === END HEADER === -->
    <!-- === BEGIN CONTENT === -->
    <div id="content">
        <div class="container-fluid background-white">
            <div class="row margin-vert-30">
                <div class="col-md-12 margin-top-30">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <!-- === END CONTENT === -->
    <!-- === BEGIN FOOTER === -->
    <!-- Footer -->
    @include('admin_layouts.master_footer')
    <!-- End Footer -->
    <!-- JS -->
    @include('admin_layouts.master_js')
    <!-- End JS -->
</body>
</html>
<!-- === END FOOTER === -->