
<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Greenfarm - @yield('title') </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('frontend.layouts.inc.style')

</head>

<body>

    <!--=============================================
	=            Header         =
	=============================================-->

    <header>
        <!--=======  header top  =======-->

        @include('frontend.layouts.inc.header_top')

        <!--=======  End of header top  =======-->

        <!--=======  header bottom  =======-->

        @include('frontend.layouts.inc.header_bottom')

        <!--=======  End of header bottom  =======-->
    </header>

    <!--=====  End of Header  ======-->

    @yield('frontend_content')


    <!--=============================================
	=            Footer         =
	=============================================-->

    <footer>
        <!--=======  newsletter section  =======-->

        @include('frontend.layouts.inc.newsletter')

        <!--=======  End of newsletter section  =======-->

        <!--=======  social contact section  =======-->

        @include('frontend.layouts.inc.social')

        <!--=======  End of social contact section  =======-->

        <!--=======  footer navigation  =======-->

        @include('frontend.layouts.inc.footer_nav')

        <!--=======  End of footer navigation  =======-->


        <!--=======  copyright section  =======-->

        @include('frontend.layouts.inc.copyright')

        <!--=======  End of copyright section  =======-->
    </footer>

    <!--=====  End of Footer  ======-->


    <!--=============================================
	=            Quick view modal         =
	=============================================-->

    @include('frontend.layouts.inc.quick_view_modal')

    <!--=====  End of Quick view modal  ======-->

    <!-- scroll to top  -->
    <a href="#" class="scroll-top"></a>
    <!-- end of scroll to top -->

    @include('frontend.layouts.inc.script')

</body>

</html>
