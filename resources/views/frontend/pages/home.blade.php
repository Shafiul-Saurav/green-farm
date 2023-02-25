@extends('frontend.layouts.master')

@section('title', 'Home')

@push('web_style')

@endpush

@section('frontend_content')
    <!--=============================================
 =            Hero slider with category         =
 =============================================-->

<div class="hero-slider-with-category-container mt-35 mb-35">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <!--=======  slider left category  =======-->

                @include('frontend.pages.widgets.slider_left_cateory')

                <!--=======  End of slider left category  =======-->
            </div>

            <div class="col-lg-9 col-md-12">
                <!--=======  slider container  =======-->

                @include('frontend.pages.widgets.slider_container')

                <!--=======  End of slider container  =======-->
            </div>
        </div>
    </div>
</div>

<!--=====  End of Hero slider with category   ======-->

<!--=============================================
 =            Policy area         =
 =============================================-->

@include('frontend.pages.widgets.policy')

<!--=====  End of Policy area  ======-->


<!--=============================================
 =            category slider         =
 =============================================-->

@include('frontend.pages.widgets.slider_top_category')

<!--=====  End of category slider  ======-->


<!--=============================================
 =            Double banner          =
 =============================================-->

@include('frontend.pages.widgets.double_banner')

<!--=====  End of Double banner   ======-->


<!--=============================================
 =            Tab slider         =
 =============================================-->

@include('frontend.pages.widgets.tab_slider')

<!--=====  End of Tab slider  ======-->


<!--=============================================
 =            Featured product image gallery         =
 =============================================-->

@include('frontend.pages.widgets.feature_product_image_gallery')

<!--=====  End of Featured product image gallery  ======-->


<!--=============================================
 =            Best seller slider         =
 =============================================-->

@include('frontend.pages.widgets.best_seller')

<!--=====  End of Best seller slider  ======-->


<!--=============================================
 =            Blog post slider container         =
 =============================================-->

@include('frontend.pages.widgets.blog_slider')

<!--=====  End of Blog post slider  ======-->


<!--=============================================
 =            Brand logo slider         =
 =============================================-->

@include('frontend.pages.widgets.brand_logo')

<!--=====  End of Brand logo slider  ======-->
@endsection

@push('web_script')

@endpush
