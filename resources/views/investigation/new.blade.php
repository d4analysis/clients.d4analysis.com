@extends('layouts.app')

@section('content')
<div class="container">
    <div class="justify-content-center">
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
									<h5 class="card-title">Individual</h5>
									<p class="card-text">Add an investigation into a single person of interest</p>
								  </div>

								  <a class="btn btn-info" href="{{ url('/companies/search') }}">Add <i class="fas fa-plus"></i></a>

								</div>

					</div>
					<div class="col-sm-12 col-md-6 col-lg-4">
					<div class="card border-dark mb-3">
								  <div class="card-body text-dark">
									<h5 class="card-title">Company</h5>
									<p class="card-text">Add an investigation into a company</p>
                  <p>[Not functioning yet]</p>
								  </div>

								  <a class="btn btn-dark" href="{{ url('/companies/search') }}">Add <i class="fas fa-plus"></i></a>
								</div>
					</div>


				</div>
			</div>
        </div>


    </div>
</div>
@endsection
