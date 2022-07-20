@extends('musicworld.layouts.master')

@section('title') @lang('translation.Data_Tables') @endsection

@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Tables @endslot
        @slot('title') Data Tables @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                        <thead>
                            <tr>
                                <th>@lang('#')</th>
                                <th>@lang('Name')</th>
                                <th>@lang('Email')</th>
                                <th>@lang('Singer Type')</th>
                                <th>@lang('DOB')</th>
                                <th>@lang('Last Login')</th>
                                <th>@lang('Action')</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php
                        $j=0;
                        @endphp
                        @foreach ($users as $user)
                             @php
                        $j++;
                        @endphp
                            <tr>
                               <td>{{$j}}</td>
                               <td>{{$user->full_name}}</td>
                               <td>{{$user->email}}</td>
                               <td>{{$user->type}}</td>
                               <td>{{$user->dob}}</td>
                               <td>{{$user->last_login}}</td>
                               <td> 
                               <a href="#" class="link-primary"><i class="fas fa-eye"></i></a>
                               &nbsp;
                                <a href="#" class="link-success"><i class="fas fa-edit"></i></a>
                                &nbsp;
                                 <a href="#" class="link-danger"><i class="far fa-trash-alt"></i></a>
                               </td>
                            </tr>
                        @endforeach
                            
                    
                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

 

@endsection
@section('script')
    <!-- Required datatable js -->
    <script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
    <!-- Datatable init js -->
    <script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>
@endsection
