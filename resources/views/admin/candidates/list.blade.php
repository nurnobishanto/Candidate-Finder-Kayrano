@extends('admin.layouts.master')
@section('page-title'){{$page}}@endsection
@section('menu'){{$menu}}@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{__('message.candidates')}}</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">{{__('message.home')}}</a></li>
                        <li class="breadcrumb-item active">{{__('message.candidates')}}</li>
                    </ol>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">{{__('message.candidates').' '.__('message.list')}}</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                            <div class="row dt-controls-row">
                                <div class="col-md-12">
                                    <div class="datatable-top-controls datatable-top-controls-filter">
                                        @if(allowedTo('create_candidate'))
                                        <button type="button" class="btn btn-info create-or-edit-candidate">
                                        <i class="fa fa-plus"></i> {{ __('message.add_candidate') }}
                                        </button>
                                        @endif
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default">{{ __('message.actions') }}</button>
                                            <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu" role="menu">
                                                <a class="dropdown-item bulk-action" href="#" data-action="activate">{{ __('message.activate') }}</a>
                                                <a class="dropdown-item bulk-action" href="#" data-action="deactivate">{{ __('message.deactivate') }}</a>
                                                <a class="dropdown-item bulk-action" href="#" data-action="email">{{ __('message.email') }}</a>
                                                <a class="dropdown-item bulk-action" href="#" data-action="download-resume">{{ __('message.download_resume_pdf') }}</a>
                                                <a class="dropdown-item bulk-action" href="#" data-action="download-excel">{{ __('message.download_candidates_excel') }}</a>
                                            </div>
                                        </div>                                        
                                    </div>

                                    <div class="datatable-top-controls datatable-top-controls-dd">
                                        <div class="input-group">
                                            <select class="form-control select2" id="account_type">
                                                <option value="">{{ __('message.all') }}</option>
                                                <option value="site">{{ __('message.site') }}</option>
                                                <option value="google">{{ __('message.google') }}</option>
                                                <option value="linkedin">{{ __('message.linkedin') }}</option>
                                            </select>
                                            <span class="input-group-append">
                                                <button type="button" class="btn btn-info">
                                                    <i class="fa fa-filter"></i> {{ __('message.account_type') }}
                                                </button>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="datatable-top-controls datatable-top-controls-dd">
                                        <div class="input-group">
                                            <select class="form-control select2" id="status">
                                                <option value="">{{ __('message.all') }}</option>
                                                <option value="1">{{ __('message.active') }}</option>
                                                <option value="0">{{ __('message.inactive') }}</option>
                                            </select>
                                            <span class="input-group-append">
                                                <button type="button" class="btn btn-info">
                                                    <i class="fa fa-filter"></i> 
                                                    {{ __('message.status') }}
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if(allowedTo('view_candidate_listing'))
                            <table class="table table-bordered table-striped" id="candidates_datatable">
                                <thead>
                                    <tr>
                                        <th><input type="checkbox" class="minimal all-check"></th>
                                        <th>{{ __('message.image') }}</th>
                                        <th>{{ __('message.first_name') }}</th>
                                        <th>{{ __('message.last_name') }}</th>
                                        <th>{{ __('message.email') }}</th>
                                        <th>{{ __('message.job_title') }}</th>
                                        <th>{{ __('message.experience_months') }}</th>
                                        <th>{{ __('message.account_type') }}</th>
                                        <th>{{ __('message.created_on') }}</th>
                                        <th>{{ __('message.status') }}</th>
                                        <th>{{ __('message.actions') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                            @endif
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Forms for actions -->
<form id="resume-form" method="POST" action="{{url(route('admin-candidates-resume-pdf'))}}" target='_blank'></form>
<form id="candidates-form" method="POST" action="{{url(route('admin-candidates-excel'))}}" target='_blank'></form>

@endsection
@section('page-scripts')
<script src="{{url('a-assets')}}/js/cf/candidate.js"></script>
@endsection