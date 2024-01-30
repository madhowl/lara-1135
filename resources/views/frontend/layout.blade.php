
@include('frontend.partials.head')

<!-- ======= Header ======= -->
@include('frontend.partials.header')
<!-- End Header -->

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
@include('frontend.partials.breadcrumbs')
    <!-- End Breadcrumbs -->

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-8 entries">
                    @yield('content')


                </div><!-- End blog entries list -->

                <div class="col-lg-4">

                    @include('frontend.partials.sidebar')<!-- End sidebar -->

                </div><!-- End blog sidebar -->

            </div>

        </div>
    </section><!-- End Blog Single Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
@include('frontend.partials.footer')
