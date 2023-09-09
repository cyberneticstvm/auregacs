@extends("base")
@section("content")
<!-- Google Maps -->
<div class="container-fluid p-0">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14441.857782445455!2d55.2611684!3d25.1875552!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f693560ad9fe9%3A0xdb3b467956c16a9a!2sAurega%20Group!5e0!3m2!1sen!2sin!4v1676375849520!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>		
</div>
<!-- end Google Maps -->
<!-- Contact section -->
<div class="section">
    <div class="container">
        <div class="row g-4">
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
            <div class="col-12 col-md-8">
                <div class="contact-form text-md-end">
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
        </div><!-- end row -->
    </div><!-- end container -->
</div>
<!-- end Contact section -->
@endsection