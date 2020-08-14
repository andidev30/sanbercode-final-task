@include('template.partials.head')

<!-- ======= Header ======= -->
@include('template.partials.header')


<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="">

    </section>
    <!-- End Breadcrumbs -->

    <section class="inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action active">Pertanyaan</a>
                        <a href="#" class="list-group-item list-group-item-action">Tags</a>
                        <a href="#" class="list-group-item list-group-item-action disabled">Users</a>
                    </div>
                </div>
                <div class="col-md-9">
                    @yield('content')
                </div>
            </div>
        </div>
    </section>

</main><!-- End #main -->

<!-- ======= Footer ======= -->
@include('template.partials.footer')
