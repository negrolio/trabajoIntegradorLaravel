@extends('components.htmlBase')

@section('page')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @include('auth.components.login')
        </div>
    </div>
</div>
@endsection
