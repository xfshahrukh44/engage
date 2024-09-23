@extends('layouts.admin.app')

@push('before-css')
    <link href="{{asset('plugins/components/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css"/>
    <style>

    </style>
@endpush

@section('content')
<div class="content-header row">
    <div class="content-header-left col-md-12 col-12 mb-2 breadcrumb-new">
        <h3 class="content-header-title mb-0 d-inline-block">Quotation Inquiries</h3>
        <div class="row breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">Home</li>
                    <li class="breadcrumb-item active">Inquires</li>
                    <li class="breadcrumb-item active">Quotation Inquiries</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<section id="configuration">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Quotation Inquiries Info</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body card-dashboard" style="overflow-x: scroll;">
                        <div class="">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First name</th>
                                        <th>Last name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Type of insurance</th>
                                        <th>Household size</th>
                                        <th>Household income</th>
                                        <th>Gender</th>
                                        <th>Marital status</th>
                                        <th>For self</th>
                                        <th>For spouse</th>
                                        <th>For children</th>
                                        <th>Number of children</th>
                                        <th>Date of birth</th>
                                        <th>Created at</th>
{{--                                        <th>Action</th>--}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($quotation_inquiries as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->first_name }}</td>
                                        <td>{{ $item->last_name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td>{{ $item->address }}</td>
                                        <td>{{ $item->type }}</td>
                                        <td>{{ $item->household_size }}</td>
                                        <td>{{ $item->household_income }}</td>
                                        <td>{{ $item->gender }}</td>
                                        <td>{{ $item->marital_status }}</td>
                                        <td>{{ $item->is_self }}</td>
                                        <td>{{ $item->is_spouse }}</td>
                                        <td>{{ $item->is_children }}</td>
                                        <td>{{ $item->children }}</td>
                                        <td>{{ $item->dob }}</td>
                                        <td>{{ \Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</td>
{{--                                        <td>--}}
{{--                                        --}}
{{--                                            <a href="{{ url('/admin/contact/inquiries/'.$item->id) }}"--}}
{{--                                               title="View Language">--}}
{{--                                                <button class="btn btn-info btn-sm">--}}
{{--                                                    <i class="fa fa-eye" aria-hidden="true"></i> View--}}
{{--                                                </button>--}}
{{--                                            </a>--}}

{{--                                            <a href="{{ url('/admin/contact/submissions/delete',$item->id) }}"--}}
{{--                                               title="View Language">--}}
{{--                                                <button class="btn btn-danger btn-sm">--}}
{{--                                                    <i class="fa fa-trash-o"></i> Delete--}}
{{--                                                </button>--}}
{{--                                            </a>--}}
{{--                                        </td>  --}}
                                    </tr> 
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('js')<!-- ============================================================== -->
<script src="{{asset('plugins/components/toast-master/js/jquery.toast.js')}}"></script>
<script src="{{asset('plugins/components/datatables/jquery.dataTables.min.js')}}"></script>
<!-- start - This is for export functionality only -->
<!-- end - This is for export functionality only -->
<script>
    $(document).ready(function () {

        @if(\Session::has('message'))
        $.toast({
            heading: 'Success!',
            position: 'top-center',
            text: '{{session()->get('message')}}',
            loaderBg: '#ff6849',
            icon: 'success',
            hideAfter: 3000,
            stack: 6
        });
        @endif
    })

    $(function () {
        $('.zero-configuration').DataTable({
            'aoColumnDefs': [{
                'bSortable': false,
                'aTargets': [-1] /* 1st one, start by the right */
            }],
            'autoWidth': true,
        });

    });
</script>
@endpush