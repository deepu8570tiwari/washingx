@extends('layouts.front')
@section('title')
        Our Pricing
    @endsection
@section('content')
<div class="py-3 shadow-sm bg-warning border-top">
    <div class="container">
        <div class="mb-0">
            <a href="{{url('/')}}">
                Home
            </a>/
            <a href="{{url('/pricing')}}">
                Pricing
            </a>
        </div>
    </div>
</div>
<div class="container card shadow mt-3">
    <div class="row price-row-width justify-content-center z-5">
        <div class="col-lg-4 col-md-4">
            <div class="each-price-2 shadow-2 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                <div class="price-2-heads">
                    <h4 class="fs-22 f-300 mb-15">GENTLEMEN <br>DRY-CLEANING</h4>
                    <span class="line bg-blue mb-20 mt-20"></span>
                </div>
                <h4 class="fs-22 f-300 mb-15">Add-ons</h4>
                <div class="prive-2-list mb-20">
                    <table class="table">
                        <tbody><tr>
                            <th>Items</th>
                            <th>Price</th>
                        </tr>
                        <tr>
                            <td>Suit (3 Piece)</td>
                            <td>500</td>
                        </tr>
                        <tr>
                            <td>Suit (2 Piece)</td>
                            <td>425</td>
                        </tr>
                        <tr>
                            <td>Coat/Blazer</td>
                            <td>300</td>
                        </tr>
                        <tr>
                            <td>Over Coat</td>
                            <td>300</td>
                        </tr>
                        <tr>
                            <td>Sweater (Light/Heavy)</td>
                            <td>250/300</td>
                        </tr>
                        <tr>
                            <td>Tie</td>
                            <td>60</td>
                        </tr>
                        <tr>
                            <td>Shirt/T-Shirt</td>
                            <td>100</td>
                        </tr>
                        <tr>
                            <td>Kurta Pyjama (Cotton/Silk)</td>
                            <td>150/200</td>
                        </tr>
                        <tr>
                            <td>Sherwani (3pcs)Light/Heavy</td>
                            <td>400/500</td>
                        </tr>
                        <tr>
                            <td>Churidar/Pyjama</td>
                            <td>100</td>
                        </tr>
                        <tr>
                            <td>Long Kurta/Jacket</td>
                            <td>220</td>
                        </tr>
                        <tr>
                            <td>Vest (Woolen)</td>
                            <td>120</td>
                        </tr>
                        <tr>
                            <td>Pathani Suit</td>
                            <td>300</td>
                        </tr>
                        <tr>
                            <td>Jacket (Light / Heavy/Leather)</td>
                            <td>300/400/500</td>
                        </tr>
                    </tbody></table>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4">
            <div class="each-price-2  wow fadeInUp shadow-3 active" data-overlay="9" style="background-image: url(&quot;img/bg/cleanitems.jpg&quot;); visibility: visible; animation-name: fadeInUp;">
                <div class="price-2-heads z-5">

                    <h4 class="fs-22 f-300 mb-15">HOME FURNISHING <br>DRY-CLEANING</h4>

                    <span class="line bg-blue mb-20 mt-20"></span>
                </div>
                <h4 class="fs-22 f-300 mb-15">Add-ons</h4>
                <div class="prive-2-list mb-20 z-5">
                    <table class="table">
                        <tbody><tr>
                            <th>Items</th>
                            <th>Price</th>
                        </tr>
                        <tr>
                            <td>Shirt/T-shirt</td>
                            <td>72</td>
                        </tr>
                        <tr>
                            <td>Shorts/Skirt/Frock</td>
                            <td>72</td>
                        </tr>
                        <tr>
                            <td>Trouser</td>
                            <td>90</td>
                        </tr>
                        <tr>
                            <td>Salwar Kameez</td>
                            <td>150</td>
                        </tr>
                        <tr>
                            <td>Jacket</td>
                            <td>200</td>
                        </tr>
                        <tr>
                            <td>Ghagra</td>
                            <td>200</td>
                        </tr>
                        <tr>
                            <td>Suit (2 Pcs)</td>
                            <td>250</td>
                        </tr>
                        <tr>
                            <td>Suit (3 Pcs)</td>
                            <td>250</td>
                        </tr>
                        <tr>
                            <td>Trouser</td>
                            <td>90</td>
                        </tr>
                        <tr>
                            <td>Coat Blazer</td>
                            <td>200</td>
                        </tr>
                    </tbody></table>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4">
            <div class="each-price-2  wow fadeInUp shadow-3 active" data-overlay="9" style="background-image: url(&quot;img/bg/cleanitems.jpg&quot;); visibility: visible; animation-name: fadeInUp;">
                <div class="price-2-heads z-5">

                    <h4 class="fs-22 f-300 mb-15">HOME FURNISHING <br>DRY-CLEANING</h4>

                    <span class="line bg-blue mb-20 mt-20"></span>
                </div>
                <h4 class="fs-22 f-300 mb-15">Add-ons</h4>
                <div class="prive-2-list mb-20 z-5">
                    <table class="table">
                        <tbody><tr>
                            <th>Items</th>
                            <th>Price</th>
                        </tr>
                        <tr>
                            <td>Bath towel</td>
                            <td>60</td>
                        </tr>
                        <tr>
                            <td>Bed Sheet (Single/Double)</td>
                            <td>75/100</td>
                        </tr>
                        <tr>
                            <td>Blanket (Light/ Medium/Heavy)</td>
                            <td>350/500/600</td>
                        </tr>
                        <tr>
                            <td>Quilt Cover</td>
                            <td>200</td>
                        </tr>
                        <tr>
                            <td>Soft Toy</td>
                            <td>300</td>
                        </tr>
                    </tbody></table>
                </div>
            </div>
        </div>
    </div>
</div>
 @include('layouts.front-footer')
@endsection