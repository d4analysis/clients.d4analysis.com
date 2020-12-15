@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-sm-12">
             @if (session('status'))
                <div class="alert alert-success" role="alert">
                   {{ session('status') }}
                  </div>
             @endif
        </div>
        <div class="col-sm-12">
          <div class="card">
              <div class="card-header">{{ __('Edit investigation') }}</div>

              <div class="card-body">
            			 <h3>{{ $company->company_name }}</h3>
            			 <br/>
            			 <h5>Directors</h5>
                    @foreach ($company->directors as $director)
                      @if(!isset($director->resigned_on))
                        {{$director->name}}
                      @endif
                    <br/>
            			  @endforeach
                    <a href="{{url('/')}}" type="button" class="btn btn-light">
                      Close
                    </a>
                  </div>
                </div>

            </div>
        </div>
	</div>

@endsection
