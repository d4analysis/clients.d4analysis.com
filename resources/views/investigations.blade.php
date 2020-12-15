@extends('layouts.app')

@section('content')
        <div class="col-sm-12">
            <div class="content">
                <h1 class="white-text">
                   Investigations
                </h1>

                <br/>
                @include('investigation.index')

    				<br/>
    				<a href="{{ url('investigations/add') }}" class="btn btn-primary">Add investigation&nbsp;&nbsp;<i class="fas fa-plus"></i></a>

            </div>
        </div>
@endsection
