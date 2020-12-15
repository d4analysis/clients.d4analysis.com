@extends('layouts.app')

@section('content')
        <div class="col-sm-12">
            <div class="content">
                <h1>
                   Companies
                </h1>

                <br/>
                @include('company.index')

				<br/>
				<a href="{{ url('companies/add') }}" class="btn btn-primary">Add company&nbsp;&nbsp;<i class="fas fa-plus"></i></a>

            </div>
        </div>
@endsection
