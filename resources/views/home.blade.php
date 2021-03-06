@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div>
                <div>{{ __('Dashboard') }}</div>

                <div>
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif



                    @if (auth()->check())
                    @if (auth()->user()->is_admin === 1)
                    Hello Admin You must click <a href="/admin/home">here</a> for manage website
                    @else
                    Hello standard user
                    @endif
                    @endif
                    <br>

                    {!!$msg!!}


                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection