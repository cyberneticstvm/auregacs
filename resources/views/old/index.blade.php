@extends("base")
@section("content")
<!-- Hero section -->
<div class="section-xl bg-image parallax" data-bg-src="{{ asset('/assets/images/aurega/home-bg.webp') }}">
    <div class="bg-dark-05">
        <div class="container">
            <div class="row g-4">
                <div class="col-12 col-sm-10 col-md-8">
                    <div class="bg-color-spring-red-07 p-5 border-radius">
                        <h2 class="fw-light m-0 text-yellow">Great things in business are never done by one person. They're done by a team of people.</h2>
                    </div>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div>
</div>
<!-- end Hero section -->
<div class="n-margin-6">
    <div class="container icon-5xl">
        <div class="row g-4">
            <!-- Feature box 1 -->
            <div class="col-12 col-lg-4">
                <img class="border-radius" src="{{ asset('/assets/images/aurega/medium-shot-men-women-work.webp') }}" alt="business setup dubai">
                <div class="bg-white box-shadow hover-float p-4 p-xl-5">
                    <h1 class="fw-light text-center">We do<br><span class="fw-normal">Company Incorporation & Trade Licenses</span></h1>
                    <p class="text-justify">Considering starting a business in the UAE? Now is the perfect time for it. Dubai has millions of tourists flocking into the city daily-shopping, dining and taking in Dubai's tourist sites.</p>
                    <div class="text-center"><a class="button button-sm btn-warnig mt-3" href="/services/company-incorporation-and-trade-license">Let's Talk</a></div>
                </div>
            </div>
            <!-- Feature box 2 -->
            <div class="col-12 col-lg-4">
                <img class="border-radius" src="{{ asset('/assets/images/aurega/medium-shot-smiley-woman-with-passport.webp') }}" alt="company formation in dubai">
                <div class="bg-white box-shadow hover-float p-4 p-xl-5">
                    <h1 class="fw-light text-center">We do<br><span class="fw-normal">Golden Visa</span></h1>
                    <p class="text-justify">The United Arab Emirates (UAE) recently decided to issue a 10-year golden visa to professionals that will include foreign investors, entrepreneurs, engineers, physicians, Ph.Ds. who are from UAE accredited universities.</p>
                    <div class="text-center"><a class="button button-sm btn-warnig mt-3" href="/services/golden-visa">Let's Talk</a></div>
                </div>
            </div>
            <!-- Feature box 3 -->
            <div class="col-12 col-lg-4">
                <img class="border-radius" src="{{ asset('/assets/images/aurega/male-female-office-workers.webp') }}" alt="business set up in uae">
                <div class="bg-white box-shadow hover-float p-4 p-xl-5">
                    <h1 class="fw-light text-center">We do<br><span class="fw-normal">Business Consulting</span></h1>
                    <p class="text-justify">Aurega helps to create greater opportunities and the new work of modern business. Let’s create new ways for Business to do Business who wants to increase their efficiency and gain a competitive edge in the marketplace.</p>
                    <div class="text-center"><a class="button button-sm btn-warnig mt-3" href="/services/business-consulting">Let's Talk</a></div>
                </div>
            </div>
        </div><!-- end row -->
    </div><!-- end container -->
</div>
<!-- About section -->
<div class="section">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-12 col-lg-6 col-xl-7">
                <img class="border-radius" src="{{ asset('/assets/images/aurega/minimalistic-business-desk-arrangement.webp') }}" alt="company setup dubai">
            </div>
            <div class="col-12 col-lg-6 col-xl-5">
                <h2 class="fw-normal">About Aurega</h2>
                <p class="text-justify">Aurega Group is the global gateway to multidisciplinary business requirements. We're one of the most trusted business setup advisory establishments which give comprehensive professional services to individuals, associations and large corporates. As we've times of experience in serving the trade and new business sector universally, we give largely substantiated business setup services and veritable cooperative platform to our clients.</p>
                <div class="text-center"><a class="button button-sm btn-warnig mt-3" href="/about">Let's Know More</a></div>
            </div>
        </div><!-- end row -->
    </div>
</div>
<!-- end About section -->

<!-- Testimonial section -->
<div class="section-xl bg-image parallax" data-bg-src="{{ asset('/assets/images/aurega/aerial-view-business-team.webp') }}">
    <div class="bg-dark-05">
        <div class="container">
            <div class="owl-carousel" data-owl-dots="false" data-owl-nav="true" data-owl-margin="30" data-owl-xs="1" data-owl-sm="1" data-owl-md="1" data-owl-lg="2" data-owl-xl="2">
                <!-- Testimonial Slider Item 1 -->
                <div class="bg-color-spring-red-07 border-radius p-5">
                    <div class="d-flex align-items-center mb-3">
                        <div class="d-inline-block me-3">
                            <img class="img-mask-avatar-sm" src="{{ asset('/assets/images/aurega/avatar.png') }}" alt="business setup uae">
                        </div>
                        <div class="d-inline-block">
                            <h5 class="fw-normal m-0 line-height-140">Emiley Haley</h5>
                            <span class="font-small text-white-09">Manager - Cybernetics</span>
                        </div>
                    </div>
                    <p class="text-white">The professionals at Aurga really take the time to understand our unique business needs and have undoubtedly provided the critical support we require to efficiently manage processes in support of preparing our company for future business endeavors. We really appreciate the time they dedicate to helping our company constantly move forward.</p>
                </div>
                <!-- Testimonial Slider Item 2 -->
                <div class="bg-color-spring-red-07 border-radius p-5">
                    <div class="d-flex align-items-center mb-3">
                        <div class="d-inline-block me-3">
                            <img class="img-mask-avatar-sm" src="{{ asset('/assets/images/aurega/avatar.png') }}" alt="business setup services in dubai">
                        </div>
                        <div class="d-inline-block">
                            <h5 class="fw-normal m-0 line-height-140">Biju Janardhanan</h5>
                            <span class="font-small text-white-09">CEO - Enieco</span>
                        </div>
                    </div>
                    <p class="text-white">We have received great services and assistance. Every steps were clear, organised for us and well communicated. It made the process easier and we could make the right choice for our company and businesses. Thanks to Aurega and its consultants who offered us the best service and accompanied us in every step along the way.</p>
                </div>
                <!-- Testimonial Slider Item 3 -->
                <div class="bg-color-spring-red-07 border-radius p-5">
                    <div class="d-flex align-items-center mb-3">
                        <div class="d-inline-block me-3">
                            <img class="img-mask-avatar-sm" src="{{ asset('/assets/images/aurega/avatar.png') }}" alt="business set up companies in uae">
                        </div>
                        <div class="d-inline-block">
                            <h5 class="fw-normal m-0 line-height-140">Abdul Samad</h5>
                            <span class="font-small text-white-09">Designer - Artemirate</span>
                        </div>
                    </div>
                    <p class="text-white">Excellent customer service! Creative zone is organising my work visa and today I had an excellent experience getting my medical done. Aurega's employee picked me up to take me to my appointment. His service was punctual, professional and polite. Everything was organised very quickly. Thank you very much Aurega.</p>
                </div>
                <!-- Testimonial Slider Item 4 -->
                <div class="bg-color-spring-red-07 border-radius p-5">
                    <div class="d-flex align-items-center mb-3">
                        <div class="d-inline-block me-3">
                            <img class="img-mask-avatar-sm" src="{{ asset('/assets/images/aurega/avatar.png') }}" alt="business setup in dubai uae">
                        </div>
                        <div class="d-inline-block">
                            <h5 class="fw-normal m-0 line-height-140">Mohammed Labadi</h5>
                            <span class="font-small text-white-09">Entrepreneur - Spliftglobal</span>
                        </div>
                    </div>
                    <p>I knew nothing about UAE business registration and the whole emirates id and banking thing. These guys helped me get the whole thing done super fast.</p>
                </div>
            </div><!-- end owl-carousel -->
        </div><!-- end container -->
    </div><!-- end bg-dark-* -->
</div>
<!-- end Testimonial section -->

<!-- Contact section -->
<div class="section">
    <div class="container">
        <div class="row g-4">
            <!-- Contact Info -->
            <div class="col-12 col-md-4">
                <div class="mb-4">
                    <h6 class="fw-medium m-0">Phone:</h6>
                    <p><a href="tel:+971528686158">+(971) 52 868 6158</a></p>
                    <p><a href="tel:+971506939558">+(971) 50 693 9558</a></p>
                </div>
                <div class="mb-4">
                    <h6 class="fw-medium m-0">Email:</h6>
                    <p><a href="mailto:mkt@auregagroup.com">mkt@auregagroup.com</a></p>
                </div>
                <div>
                    <h6 class="fw-medium m-0">Address:</h6>
                    <p>#106, Bay Square 11, Business Bay, Dubai</p>
                </div>
            </div>
            <!-- Contact Form -->
            <div class="col-12 col-md-8">
                <div class="contact-form text-end mb-5">
                    <!-- Submit result -->
                    <div class="submit-result mb-3">
                        @if(session()->has('success'))
                            <div class="text-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif
                        @if(session()->has('error'))
                            <div class="text-danger">
                                {{ session()->get('error') }}
                            </div>
                        @endif
                    </div>
                    <form method="post" action="https://crm.zoho.com/crm/WebToLeadForm" name='WebToLeads2950419000001349003' onSubmit='javascript:document.charset="UTF-8";' accept-charset='UTF-8'>
                        @csrf
                        <input type='text' style='display:none;' name='xnQsjsdp' value='445896b0bcde9382b9d796cabd9a0d0a65c455f797700c04263c5384dc2af4ac'></input> 
                        <input type='hidden' name='zc_gad' id='zc_gad' value=''></input> 
                        <input type='text' style='display:none;' name='xmIwtLD' value='0943c0b24a3e03c0eb553c3d557dae92a32d567e93542e44b5d35737852256c2'></input> 
                        <input type='text'  style='display:none;' name='actionType' value='TGVhZHM='></input>
                        <input type='text' style='display:none;' name='returnURL' value='http&#x3a;&#x2f;&#x2f;auregacs.com&#x2f;message' > </input>
                        <div class="row gx-3 gy-0">
                            <div class="col-12 col-sm-6">
                                <input type="text" id='First_Name' name='First Name' placeholder="First Name" required>
                            </div>
                            <div class="col-12 col-sm-6">
                            <input type="text" id='Last_Name' name='Last Name' placeholder="Last Name" required>
                            </div>
                        </div>
                        <input type="email" ftype='email' id='Email' name='Email' placeholder="E-Mail" required>
                        <input type="text" id='Mobile' name='Mobile' placeholder="Contact Number">
                        <input type="text" id='LEADCF4' name='LEADCF4' placeholder="Subject">
                        <textarea id='LEADCF5' name='LEADCF5' placeholder="Message"></textarea>
                        <button type="submit" class="button button-sm btn-submit btn-warnig mt-3" href="#">SUBMIT</button>
                    </form>
                </div>
            </div>
            <!-- end Contact Form -->
        </div><!-- end row -->
        <!-- Google Maps -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14441.857782445455!2d55.2611684!3d25.1875552!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f693560ad9fe9%3A0xdb3b467956c16a9a!2sAurega%20Group!5e0!3m2!1sen!2sin!4v1676375849520!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div><!-- end container -->
</div>
<!-- end Contact section -->
@endsection