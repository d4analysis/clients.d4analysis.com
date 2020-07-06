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
				  <h1 class="display-4">Hello, {{ Auth::user()->name }}</h1>
				  <p class="lead">Wholefolio aggregates all of your alternative investments and provides additional information.</p>
				  <hr class="my-4">
				  <p>
					<a href="{{url('/investments') }}">View all of your investments</a>
				  </p>
				<div class="row">
					<div class="col-sm-12 col-md-6 col-lg-4">
						<div class="card border-info mb-3">
								  <div class="card-body text-info">
									<h5 class="card-title">Portfolios</h5>
									<p class="card-text">View your collections of investments</p>
								  </div>
								</div>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-4">
					<div class="card border-dark mb-3">
								  <div class="card-body text-dark">
									<h5 class="card-title">News &amp; Announcements</h5>
									<p class="card-text">See the latest information on your portfolio companies.</p>
								  </div>
								</div>
					</div>
					
					<div class="col-sm-12 col-md-6 col-lg-4">
					
								<div class="card border-danger mb-3">
								  <div class="card-body text-danger">
									<h5 class="card-title">Tax summary</h5>
									<p class="card-text">Assess your past, current and future potential liabilities.</p>
								  </div>
								</div>
					</div>
					
				</div>
			</div>
        </div>
		
		
    </div>
</div>
@endsection
