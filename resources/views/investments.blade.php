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
				<a href="{{url('companies/search')}}" class="btn btn-warning">Add company investment</a>
				
				<a href="{{url('funds/search')}}" class="btn btn-info">Add fund investment</a>
            </div>
        </div>
@endsection
