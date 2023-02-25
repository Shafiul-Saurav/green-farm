<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>GreenFarm | @yield('title') </title>

    @include('backend.layouts.inc.style')

</head>

<body class="layout-boxed">
    <!-- BEGIN LOADER -->
    @include('backend.layouts.inc.loader')
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    @include('backend.layouts.inc.navbar')
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        @include('backend.layouts.inc.sidebar')
        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">

                <div class="middle-content container-xxl p-0">

                    <div class="row layout-top-spacing">

                        @yield('admin_content')
                        {{-- <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                            <h1>Welcome To Dashboard</h1>

                        </div> --}}
                    </div>

                </div>

            </div>
            <!--  BEGIN FOOTER  -->
            @include('backend.layouts.inc.footer')
            <!--  END FOOTER  -->
        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->

    @include('backend.layouts.inc.script')

</body>

</html>
