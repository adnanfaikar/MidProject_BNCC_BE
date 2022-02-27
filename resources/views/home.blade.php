@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Book') }}</div>

                <div class="card-body">
                    <a href="{{ route('create') }} ">Click Here</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container" style="margin-top: 15px">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('View Books') }}</div>

                <div class="card-body">
                    <a href="{{ route('Viewall') }} ">Click Here</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
