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
			 
			 <div class="jumbotron">
				 
				
				<div class="row">
					<div class="col-sm-12 col-md-6 col-lg-4">
							<div class="card border-info mb-3">
								  <div class="card-body text-info">
									<h5 class="card-title">Single company</h5>
									<p class="card-text">Add an investment into a single private UK company</p>
								  </div>
								  
								  <a class="btn btn-info" href="{{ url('/companies/search') }}">Add <i class="fas fa-plus"></i></a>
								  
								</div>
						
					</div>
					<div class="col-sm-12 col-md-6 col-lg-4">
					<div class="card border-dark mb-3">
								  <div class="card-body text-dark">
									<h5 class="card-title">Fund</h5>
									<p class="card-text">Add an investment into an EIS/SEIS fund or VCT</p>
								  </div>
								  
								  <a class="btn btn-dark" href="{{ url('/funds/search') }}">Add <i class="fas fa-plus"></i></a>
								</div>
					</div>
					
					<div class="col-sm-12 col-md-6 col-lg-4">
					
								<div class="card border-danger mb-3">
								  <div class="card-body text-danger">
									<h5 class="card-title">Other</h5>
									<p class="card-text">To include property and other unlisted investment vehicles</p>
								  </div>
								  
								  <a class="btn btn-danger" href="{{ url('/investment/create/single') }}">Add <i class="fas fa-plus"></i></a>
								</div>
					</div>
					
				</div>
			</div>
        </div>
		
		
    </div>
</div>
@endsection
