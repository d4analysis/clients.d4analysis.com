@extends('layouts.app')

@section('content')
        <div>
            <div class="content">
                <h1>
                   Investments
                </h1>

                <br/>
                @include('investment.index')

				<br/>
				<a href="{{ url('investments/add') }}" class="btn btn-warning">Add investment&nbsp;&nbsp;<i class="fas fa-plus"></i></a>
				
            </div>
        </div>
@endsection
