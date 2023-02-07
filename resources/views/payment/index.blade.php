@extends('front.master-payment')

@section('content')


        <div class="container">
            <div class="row">
                <div class="d-flex justify-content-start" >
                    <div class="container" style="margin:0 auto !important; margin:0 auto !important; border:5px solid #a7a7a7;" >
                        {!!html_entity_decode($iframe)!!}
                    </div>
                </div>
            </div>
        </div>

@endsection
