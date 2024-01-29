@extends('layouts.layout')
@section('content')
<section class="py-5">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-11">
                <div class="card box-shadow">
    <div class="row justify-content-center">
        <div class="col-md-6  d-none d-md-block d-lg-block" style="background-image: url('svg/Login 1.jpg');background-size:cover;">
                            <div class="py-5">

                            </div>
                        </div>
        <div class="col-md-6 p-5" style="background-image: url('svg/Loginbg.png');background-size:cover;">
            <h3 class=" white-text font-weight-bold mb-0 pb-0">
                                     Welcome to Nestify
                                </h3>
                                <p class="p-0 m-0 white-text">
                                   Contact Us
                                </p>
                                @include('partials.alerts')
                <div class="mt-4">
                    <form method="POST" action="{{ route('inquiry.store') }}">
                        @csrf

                        <div class="form-group ">


                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="{{ __('Name') }}" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group ">


                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror mb-4" placeholder="{{ __('E-Mail Address') }}" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>

                        <div class="form-group ">


                            <input id="phone_number" type="number" class="form-control @error('phone_number') is-invalid @enderror mb-4" placeholder="{{ __('Phone Number') }}" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number">

                            @error('phone_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                    </div>

                        <div class="form-group ">


                                <textarea id="message" type="message" class="form-control @error('message') is-invalid @enderror mb-4" placeholder="{{ __('Message') }}" name="message" required></textarea>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12">
                                <button type="submit" class=" btn btn-custom btn-block waves-effect waves-light">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</section>

@endsection
