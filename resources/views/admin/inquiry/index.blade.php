@extends('layouts.adminlayout')
@section('content')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">

<div class="app-page-title">
    <div class="row">
    <div class="col-lg-12">
        <div class="main-card mb-3 card">
            @include('partials.alert')

            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <h5 class="card-title">All Inquiry</h5>
                    </div>
                </div>
                <table class=" table" id="table_id" style="width: 100%; ">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Phone Number</th>
                        <th>Email </th>
                        <th>Message</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php $i=1?>
                        @foreach ($inquiries as $row)
                                    <tr>
                                        <td scope="row">{{$i++}}</td>
                                        <td>{{$row->name}}</td>
                                        <td>{{$row->phone_number}}</td>
                                        <td> {{ $row->email}}</td>
                                        <td> {!! $row->message !!}</td>

                                        <td>
                                            <a href="{{route('inquiry.delete',$row->id)}}" onclick="return confirm('Are you sure you want to delete this item?');" class="label bg-red-active"><i class="fa fa-trash  fa-1x" style="color: #000"></i> </a>
                                         </td>
                                    </tr>
                                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
