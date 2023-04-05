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
                    <h1 class="m-0">{{__('message.apis')}}</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">{{__('message.home')}}</a></li>
                        <li class="breadcrumb-item"><a href="#">{{__('message.settings')}}</a></li>
                        <li class="breadcrumb-item active">{{__('message.apis')}}</li>
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
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">{{ __('message.apis_settings') }}</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                <form id="admin_apis_form" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Paypal</h3>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{__('message.enable_paypal')}}</label><br />
                                <input type="radio" class="minimal" name="enable_paypal" value="yes" 
                                {{sel(setting('enable_paypal'), 'yes', 'checked')}}>
                                <strong>{{__('message.yes')}}</strong>&nbsp;&nbsp;&nbsp;
                                <input type="radio" class="minimal" name="enable_paypal" value="no"
                                {{sel(setting('enable_paypal'), 'no', 'checked')}}>
                                <strong>{{__('message.no')}}</strong>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{__('message.paypal_environment')}}</label><br />
                                <input type="radio" class="minimal" name="paypal_environment" value="testing" 
                                {{sel(setting('paypal_environment'), 'testing', 'checked')}}>
                                <strong>{{__('message.testing')}}</strong>&nbsp;&nbsp;&nbsp;
                                <input type="radio" class="minimal" name="paypal_environment" value="production"
                                {{sel(setting('paypal_environment'), 'production', 'checked')}}>
                                <strong>{{__('message.production')}}</strong>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{__('message.paypal_email')}}</label>
                                <input type="text" class="form-control" name="paypal_email" 
                                value="{{setting('paypal_email')}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{__('message.paypal_client_id')}}</label>
                                <input type="text" class="form-control" name="paypal_client_id" 
                                value="{{setting('paypal_client_id')}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{__('message.paypal_client_secret')}}</label>
                                <input type="text" class="form-control" name="paypal_client_secret" 
                                value="{{setting('paypal_client_secret')}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{__('message.paypal_webhook')}}</label>
                                <input type="text" class="form-control" readonly="true" 
                                value="{{setting('paypal_webhook')}}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <h3>Stripe</h3>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>{{__('message.enable_stripe')}}</label><br />
                                <input type="radio" class="minimal" name="enable_stripe" value="yes" 
                                {{sel(setting('enable_stripe'), 'yes', 'checked')}}>
                                <strong>{{__('message.yes')}}</strong>&nbsp;&nbsp;&nbsp;
                                <input type="radio" class="minimal" name="enable_stripe" value="no"
                                {{sel(setting('enable_stripe'), 'no', 'checked')}}>
                                <strong>{{__('message.no')}}</strong>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{__('message.stripe_publisher_key')}}</label>
                                <input type="text" class="form-control" name="stripe_publisher_key" 
                                value="{{setting('stripe_publisher_key')}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{__('message.stripe_secret_key')}}</label>
                                <input type="text" class="form-control" name="stripe_secret_key"  
                                value="{{setting('stripe_secret_key')}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{__('message.stripe_webhook')}}</label>
                                <input type="text" class="form-control" readonly="true" 
                                value="{{setting('stripe_webhook')}}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <h3><a href="https://code.tutsplus.com/tutorials/create-a-google-login-page-in-php--cms-33214" target="_blank">Google Login</a></h3>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>{{__('message.enable_google_login')}}</label><br />
                                <input type="radio" class="minimal" name="enable_google_login" value="yes" 
                                {{sel(setting('enable_google_login'), 'yes', 'checked')}}>
                                <strong>{{__('message.yes')}}</strong>&nbsp;&nbsp;&nbsp;
                                <input type="radio" class="minimal" name="enable_google_login" value="no"
                                {{sel(setting('enable_google_login'), 'no', 'checked')}}>
                                <strong>{{__('message.no')}}</strong>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{__('message.google_client_id')}}</label>
                                <input type="text" class="form-control" name="google_client_id" 
                                value="{{setting('google_client_id')}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{__('message.google_client_secret')}}</label>
                                <input type="text" class="form-control" name="google_client_secret" 
                                value="{{setting('google_client_secret')}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{__('message.google_redirect_uri')}}</label>
                                <input type="text" class="form-control" readonly="true" 
                                value="{{setting('google_redirect_uri')}}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <h3><a href="http://code-wand.com/linkedin-oauth-login-app-credentials" target="_blank">Linkedin Login</a></h3>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>{{__('message.enable_linkedin_login')}}</label><br />
                                <input type="radio" class="minimal" name="enable_linkedin_login" value="yes" 
                                {{sel(setting('enable_linkedin_login'), 'yes', 'checked')}}>
                                <strong>{{__('message.yes')}}</strong>&nbsp;&nbsp;&nbsp;
                                <input type="radio" class="minimal" name="enable_linkedin_login" value="no"
                                {{sel(setting('enable_linkedin_login'), 'no', 'checked')}}>
                                <strong>{{__('message.no')}}</strong>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{__('message.linkedin_id')}}</label>
                                <input type="text" class="form-control" name="linkedin_id" 
                                value="{{setting('linkedin_id')}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{__('message.linkedin_secret')}}</label>
                                <input type="text" class="form-control" name="linkedin_secret" 
                                value="{{setting('linkedin_secret')}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{__('message.linkedin_redirect_uri')}}</label>
                                <input type="text" class="form-control" name="linkedin_redirect_uri" readonly="true" 
                                value="{{setting('linkedin_redirect_uri')}}">
                            </div>
                        </div>

                    </div>
                    <!-- /.row -->

                    <div class="row">
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary" id="admin_apis_form_button">
                                {{__('message.update')}}
                            </button>
                        </div>
                        <!-- /.col -->
                    </div>

                </form>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
@section('page-scripts')
<script src="{{url('a-assets')}}/js/cf/setting.js"></script>
@endsection