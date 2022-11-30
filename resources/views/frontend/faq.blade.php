@extends('layouts.front')
@section('title')
        Our FAQ's
    @endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-xl-8 col-lg-7">
                    <h3 class="fs-22 mb-15 f-700">General FAQ’s</h3>
                    <div class="faq-boxes">
                        <div id="accordion">
                            <div class="accordion" id="accordionPanelsStayOpenExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                    How Do I Schedule A Pickup?
                                    </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                                        <div class="accordion-body">You can contact through our portal and schedule your laundry pick-up or simply log on to our website and click on Pickup schedule, or Call our Customer Support no (8570967249) to schedule your pick up or you can directly visit to our Store at your nearest location.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                        What’s the Turnaround Tine?
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                                        <div class="accordion-body">
                                        Average Turnaround time are 48 Hours for laundry and 72 hours for dry cleaning, 48-96 hours for other Home services, Express 24 hour service is also available.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                        How to reschedule a missed pickup/delivery?
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                                        <div class="accordion-body">
                                        If you missed your pickup/delivery, you can simply contact to our customer support no (88733-88111) to reschedule it.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@include('layouts.front-footer')
@endsection