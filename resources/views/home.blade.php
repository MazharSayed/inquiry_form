
@extends('layouts.adminlayout')

@section('content')

<div class="row">
    <div class="col-lg-3 col-md-6">
        <a href="{{ route('inquiry.list')}}">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-five">
                        <div class="stat-icon dib flat-color-1">
                            <i class="fa fa-users"></i>
                        </div>
                        <div class="stat-content">
                            <div class="text-left dib">
                                <div class="stat-text">
                                    <span class="count">
                                        {{@App\Models\Inquiry::count()}}
                                    </span>
                                </div>
                                <div class="stat-heading">Inquiry Users</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>
@endsection
