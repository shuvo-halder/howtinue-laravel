@extends('layouts.BasUserMaster')
@section('FrontTitle', 'Dashboard')
@section('basUser')


<section class="pb-80">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- breaddcrumb -->
                <!-- Breadcrumb -->
                <ul class="breadcrumbs bg-light mb-4">
                    <li class="breadcrumbs__item">
                        <a href="{{ route('basUser.dashboard') }}" class="breadcrumbs__url">
                            <i class="fa fa-home"></i> Dashboard</a>
                    </li>
                    
                    <li class="breadcrumbs__item breadcrumbs__item--current">
                        OverView
                    </li>
                </ul>
                <!-- end breadcrumb -->
            </div>

            <div class="col-md-8 m-auto">
                <div class="card">
                    <div class="card-header">{{ __('Basic User Dashboard') }}</div>
    
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
    
                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>



<div class="container">
    <div class="row justify-content-center">
        
    </div>
</div>



@endsection


