@extends ('layouts.master')
@section('title', 'Home')
@section('content')
    <section class="hero-wrap js-fullheight" style="background-image: url('img/bgd_1.jpg')" data-section="home">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-end"
                 data-scrollax-parent="true">
                <div class="col-md-6 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"> Laravel
                        Bootcamp </h1>
                    <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">The Magma Complex, 2
                        Floor, Nairobi</p>
                    <p><a href="#" class="btn btn-primary py-3 px-4">Request a Quote</a></p>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-about ftco-no-pt ftco-no-pb img ftco-section bg-light" id="about-section">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-12 col-lg-6 pr-lg-5 py-3 py-lg-5">
                    <div class="row justify-content-start py-3 py-lg-5">
                        <div class="col-md-12 heading-section ftco-animate">
                            <span class="subheading">Welcome</span>
                            <h2 class="mb-4" style="font-size: 44px; text-transform: capitalize;">Welcome to Eventor a
                                meeting up Firm</h2>
                            <p>A small river named Duden flows by their place and supplies it with the necessary
                                regelialia. It is a paradisematic country, in which roasted parts of sentences fly into
                                your mouth.</p>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                unorthographic life One day however a small line of blind text by the name of Lorem
                                Ipsum decided to leave for the far World of Grammar.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop