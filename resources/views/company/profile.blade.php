@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
             @if (session('status'))
                <div class="alert alert-success" role="alert">
                   {{ session('status') }}
                  </div>
             @endif
			 <h3>Company profile</h3>
			 <br/>
			 <h5>{{ $company->company_name }}</h5>
			 
			 <p>Founded: {{ $company->date_of_creation }}</p>
			 <p>... and the rest as json</p>
			 
			 {{$company->json}}
			 
			 <br/><br/>
			 <h4>Offices</h4>
			  {{$company->offices}}
			  
			  <br/><br/>
			  <h4>Directors</h4>
			  {{$company->directors}}
			  
			  <br/><br/>
			  <h4>Filing history</h4>
			  @foreach ($company->history as $file)
			  {{$file->date}}: {{$file->description}}<br/>
			  @endforeach
		</div>
	</div>
</div>

@endsection