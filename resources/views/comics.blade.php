@extends('layouts.app')

@section('main')
    <div class="infoAndPicture">
        <div><img src={{$single_comic_info['thumb']}} alt=""></div>
        <br>
        <div class="westSide">
            <h2>{{ $single_comic_info['title'] }}</h2>

            <div class="green-box p-2 m-auto bg-success text-white d-flex justify-content-around">
                <div class="d-flex justify-content-around">
                    <div>U.S. Price: {{ $single_comic_info['price'] }}</div>
                    <div>AVAILABLE</div>
                </div>
                <div class="check-availability w-25">
                    Check Availability
                </div>
            </div>

            <div>
                <p>{{ $single_comic_info['description'] }}</p>
            </div>
        </div>


        <div>
            <img src="{{ asset('images/adv.jpg') }}" alt="adv">
        </div>



    </div>
    <div class="infoBackground">
        <div class="boxComics">
            <h3 class="w-50">Talent</h3>

            <hr>
            <div class="d-flex">
                <div class="d-flex justify-content-between">
                    <div class="w-50">
                        <h5>Art by:</h5>
                    </div>
                    <div >
                        <p>Andrea Panzeri</p>
                    </div>
                </div>


            </div>

            <hr>
            <div class="d-flex">
                <div class="w-50">
                    <h5>Written by:</h5>
                </div>
                <div>
                    <p>Andrea Panzeri</p>
                </div>
            </div>
        </div>
        <div class="boxComics">
            <h3 class="w-50">Specs</h3>
            <hr>
            <div class="d-flex justify-content-between">
                <div>Series:</div>
                <div>{{$single_comic_info['series']}}</div>
            </div>
            <hr>
            <div class="d-flex justify-content-between">
                <div>U.S. Price</div>
                <div>{{$single_comic_info['price']}}</div>
            </div>
            <hr>
            <div class="d-flex justify-content-between">
                <div>On Sale Date:</div>
                <div>{{$single_comic_info['sale_date']}}</div>
            </div>
            <hr>
        </div>
    </div>
@endsection
