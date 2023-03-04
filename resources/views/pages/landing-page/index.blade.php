@extends('layouts.landing-page.main')

@section('content')
<main id="main">

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">{{ $page->title }}</h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">{{ $page->description }}</h2>
                    <div data-aos="fade-up" data-aos-delay="800">
                        <a href="#about" class="btn-get-started scrollto">Kenal lebih dalam</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
                    <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients clients">
        <div class="container">

            <div class="row">
                <div class="d-flex justify-content-around">
                    @if ($clients != null)
                    @foreach ($clients as $client)
                    <div class="col-lg-2 col-md-4 col-6">
                        <img src="{{ asset($client->logo) }}" class="img-fluid" alt="" data-aos="zoom-in">
                    </div>
                    @endforeach
                    @else

                    @endif

                    {{-- <div class="col-lg-2 col-md-4 col-6">
                        <img src="assets/img/clients/client-2.png" class="img-fluid" alt="" data-aos="zoom-in"
                            data-aos-delay="100">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <img src="assets/img/clients/client-3.png" class="img-fluid" alt="" data-aos="zoom-in"
                            data-aos-delay="200">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <img src="assets/img/clients/client-4.png" class="img-fluid" alt="" data-aos="zoom-in"
                            data-aos-delay="300">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <img src="assets/img/clients/client-5.png" class="img-fluid" alt="" data-aos="zoom-in"
                            data-aos-delay="400">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <img src="assets/img/clients/client-6.png" class="img-fluid" alt="" data-aos="zoom-in"
                            data-aos-delay="500">
                    </div> --}}
                </div>

            </div>

        </div>
    </section><!-- End Clients Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>About Us</h2>
            </div>

            <div class="row content">
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
                    <p>
                        {{ $page->about1 }}
                    </p>
                    <ul>
                        @foreach ($details as $detail)
                            
                        <li><i class="ri-check-double-line"></i> {{ $detail->detail }} </li>
                        @endforeach
                        {{-- <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate
                            velit</li>
                        <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat
                        </li> --}}
                    </ul>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
                    <p>
                        {{ $page->about2 }}
                    </p>
                    <a href="#" class="btn-learn-more">Learn More</a>
                </div>
            </div>

        </div>
    </section><!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Services</h2>
            </div>

            <div class="row">
                @foreach ($services as $service)
                    
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon"> {{ $service->icon }}  <i class="bx bxl-dribbble"></i> </div>
                        <h4 class="title"><a href=""> {{ $service->title }} </a></h4>
                        <p class="description">{{ $service->description }}</p>
                    </div>
                </div>
                @endforeach

                {{-- <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon"><i class="bx bx-file"></i></div>
                        <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                        <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                            dolore</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon"><i class="bx bx-tachometer"></i></div>
                        <h4 class="title"><a href="">Magni Dolores</a></h4>
                        <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                        <div class="icon"><i class="bx bx-world"></i></div>
                        <h4 class="title"><a href="">Nemo Enim</a></h4>
                        <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                        </p>
                    </div>
                </div> --}}

            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Contact Us</h2>
            </div>

            <div class="row">

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="contact-about">
                        <h3>{{ $page->title }}</h3>
                        <p>{{ $page->description }}</p>
                        <div class="social-links">
                            <a href="{{ $page->twitter != null ? $page->twitter : '#' }}" class="twitter"><i
                                    class="bi bi-twitter"></i></a>
                            <a href="{{ $page->facebook != null ? $page->facebook : '#' }}" class="facebook"><i
                                    class="bi bi-facebook"></i></a>
                            <a href="{{ $page->instagram != null ? $page->instagram : '#' }}" class="instagram"><i
                                    class="bi bi-instagram"></i></a>
                            <a href="{{ $page->linkedin != null ? $page->linkedin : '#' }}" class="linkedin"><i
                                    class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                    <div class="info">
                        <div>
                            <i class="ri-map-pin-line"></i>
                            <p>{{ $page->address }}</p>
                        </div>

                        <div>
                            <i class="ri-mail-send-line"></i>
                            <p>{{ $page->email }}</p>
                        </div>

                        <div>
                            <i class="ri-phone-line"></i>
                            <p>{{ $page->phone_num }}</p>
                        </div>

                    </div>
                </div>

                <div class="col-lg-5 col-md-12" data-aos="fade-up" data-aos-delay="300">
                    <form action="{{ route('send-email') }}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                        </div>
                        <div class="form-group mb-3">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                                required>
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                                required>
                        </div>
                        <div class="form-group mb-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                required></textarea>
                        </div>
                        <div class="text-center mt-2"><button class="btn btn-primary" type="submit">Send Message</button></div>
                    </form>
                    {{-- <form action="{{ route('send-email') }}" method="post" role="form" class="php-email-form">
                        @csrf
                        
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            @if ($errors->any())
                            @foreach ($errors->all() as $item)
                            <div class="error-message">{{ $item }}</div>
                            @endforeach
                            @else
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                            @endif
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form> --}}
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->
@endsection
