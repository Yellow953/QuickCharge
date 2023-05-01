@extends('layouts.app')

@section('content')

@include('layouts._header')

<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center py-0">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up">Fast, Secure & Trustworthy</h1>
                <h2 data-aos="fade-up" data-aos-delay="400"><b>Stay Connected. Anytime, Anywhere!</b></h2>
                <div data-aos="fade-up" data-aos-delay="600">
                    <div class="text-center text-lg-start">
                        <a href="/categories"
                            class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center nav-link py-4 btn-rounded">
                            <span>Check Our Products</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                <img src="{{asset('assets/images/hero-img.png')}}" alt="" class="img-fluid">
            </div>
        </div>
    </div>

</section><!-- End Hero -->

<main id="main">
    <!-- ======= Values Section ======= -->
    <section id="values" class="values">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Categories</h2>
            </header>

            <div class="row">
                @foreach ($categories as $category)
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="box">
                        <img src="{{asset($category->image)}}" class="img-fluid" alt="">
                        <h3>{{$category->name}}</h3>
                        <p>{{$category->decription}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section><!-- End Values Section -->

    {{--
    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Pricing</h2>
                <p>Check our Pricing</p>
            </header>

            <div class="row gy-4" data-aos="fade-left">

                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box">
                        <h3 style="color: #07d5c0;">Free Plan</h3>
                        <div class="price"><sup>$</sup>0<span> / mo</span></div>
                        <img src="{{asset('assets/images/pricing-free.png')}}" class="img-fluid" alt="">
                        <ul>
                            <li>Aida dere</li>
                            <li>Nec feugiat nisl</li>
                            <li>Nulla at volutpat dola</li>
                            <li class="na">Pharetra massa</li>
                            <li class="na">Massa ultricies mi</li>
                        </ul>
                        <a href="#" class="btn-buy">Buy Now</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                    <div class="box">
                        <span class="featured">Featured</span>
                        <h3 style="color: #65c600;">Starter Plan</h3>
                        <div class="price"><sup>$</sup>19<span> / mo</span></div>
                        <img src="{{asset('assets/images/pricing-starter.png')}}" class="img-fluid" alt="">
                        <ul>
                            <li>Aida dere</li>
                            <li>Nec feugiat nisl</li>
                            <li>Nulla at volutpat dola</li>
                            <li>Pharetra massa</li>
                            <li class="na">Massa ultricies mi</li>
                        </ul>
                        <a href="#" class="btn-buy">Buy Now</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                    <div class="box">
                        <h3 style="color: #ff901c;">Business Plan</h3>
                        <div class="price"><sup>$</sup>29<span> / mo</span></div>
                        <img src="{{asset('assets/images/pricing-business.png')}}" class="img-fluid" alt="">
                        <ul>
                            <li>Aida dere</li>
                            <li>Nec feugiat nisl</li>
                            <li>Nulla at volutpat dola</li>
                            <li>Pharetra massa</li>
                            <li>Massa ultricies mi</li>
                        </ul>
                        <a href="#" class="btn-buy">Buy Now</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                    <div class="box">
                        <h3 style="color: #ff0071;">Ultimate Plan</h3>
                        <div class="price"><sup>$</sup>49<span> / mo</span></div>
                        <img src="{{asset('assets/images/pricing-ultimate.png')}}" class="img-fluid" alt="">
                        <ul>
                            <li>Aida dere</li>
                            <li>Nec feugiat nisl</li>
                            <li>Nulla at volutpat dola</li>
                            <li>Pharetra massa</li>
                            <li>Massa ultricies mi</li>
                        </ul>
                        <a href="#" class="btn-buy">Buy Now</a>
                    </div>
                </div>

            </div>

        </div>

    </section><!-- End Pricing Section --> --}}

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>F.A.Q</h2>
                <p>Frequently Asked Questions</p>
            </header>

            <div class="row">
                <div class="col-lg-6">
                    <!-- F.A.Q List 1-->
                    <div class="accordion accordion-flush" id="faqlist1">
                        {{-- @foreach ($faqs as $faq)
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-content-{{$faq->id}}">
                                    {{$faq->question}}
                                </button>
                            </h2>
                            <div id="faq-content-{{$faq->id}}" class="accordion-collapse collapse"
                                data-bs-parent="#faqlist1">
                                <div class="accordion-body">
                                    {{$faq->answer}}
                                </div>
                            </div>
                        </div>
                        @endforeach --}}
                    </div>
                </div>
            </div>

        </div>

    </section><!-- End F.A.Q Section -->

    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-blog-posts" class="recent-blog-posts">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Telecom News</h2>
            </header>

            <div class="row">
                {{-- @foreach ($news as $n)
                <div class="col-lg-4">
                    <div class="post-box">
                        <div class="post-img"><img src="{{asset($n->image)}}" class="img-fluid" alt="">
                        </div>
                        <span class="post-date">{{$n->created_at}}</span>
                        <h3 class="post-title">
                            {{$n->text}}
                        </h3>
                    </div>
                </div>
                @endforeach --}}
            </div>

        </div>

    </section><!-- End Recent Blog Posts Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Contact</h2>
                <p>Contact Us</p>
            </header>

            <div class="row gy-4">

                <div class="col-lg-6">

                    <div class="row gy-4">
                        <div class="col-md-6">
                            <div class="info-box row">
                                <div class="col-2 my-auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                        class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                    </svg>
                                </div>
                                <div class="col-10">
                                    <h3>Call Us</h3>
                                    <a href="https://api.whatsapp.com/send/?phone=96179308778&text=Hello%20I%20would%20like%20to%20ask%20for%20some%20details"
                                        target="_blank">+961 79 308 778</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box row">
                                <div class="col-2 my-auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                        class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                                    </svg>
                                </div>
                                <div class="col-10">
                                    <h3>Email Us</h3><a href="mailto:quickchargetelecom@gmail.com"
                                        target="_blank">quickchargetelecom@gmail.com</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box row">
                                <div class="col-2 my-auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                        class="bi bi-clock-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                    </svg>
                                </div>
                                <div class="col-10">
                                    <h3>Open Hours</h3>
                                    <p>Monday - Friday<br>9:00AM - 05:00PM</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box row">
                                <div class="col-2 my-auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                        class="bi bi-clock-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                    </svg>
                                </div>
                                <div class="col-10">
                                    <h3>Customer Service</h3>
                                    <p>Monday - Friday<br>9:00AM - 05:00PM</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6">
                    <form action="/contact_us" method="post" class="php-email-form">
                        <div class="row gy-4">

                            <div class="col-md-12">
                                <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                            </div>

                            <div class="col-md-12 ">
                                <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                            </div>

                            <div class="col-md-12">
                                <textarea class="form-control" name="message" rows="6" placeholder="Message"
                                    required></textarea>
                            </div>

                            <div class="col-md-12 text-center">
                                <button type="submit">Send Message</button>
                            </div>

                        </div>
                    </form>

                </div>

            </div>

        </div>

    </section><!-- End Contact Section -->

</main><!-- End #main -->

@include('layouts._footer')

@endsection