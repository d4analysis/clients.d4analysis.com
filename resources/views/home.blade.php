@extends('layouts.app')

@section('content')

    <div class="justify-content-center">
        <div class="col-sm-12">
             @if (session('status'))
                <div class="alert alert-success" role="alert">
                   {{ session('status') }}
                  </div>
             @endif
             <h1>Dashboard</h1>
              <br/>
    				<div class="row">
      					<div class="col-sm-12 col-md-6">
                    <h5 class="text-white">Individuals</h5>
      							@include('investigation.index')
                    <br/>
                    <a href="{{ url('/companies/search') }}" class="btn btn-primary">Add investigation&nbsp;&nbsp;<i class="fas fa-plus"></i></a>
                    <br/><br/>
      					</div>
                <div class="col-sm-12 col-md-6">
                    <h5 class="text-white">Companies</h5>
      							@include('company.index')
      					</div>

  			     </div>
    </div>
</div>
@endsection
