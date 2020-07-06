@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-sm-12">

        @if(session()->get('success'))
          <div class="alert alert-success">
            {{ session()->get('success') }}
          </div>
        @endif
      </div>

        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">{{ __('Search for company') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{route('company.search') }}">
                        @csrf

						            <div class="form-group row">
                            <label for="value" class="col-md-4 col-form-label text-md-right">{{ __('Company name or number') }}</label>

                            <div class="col-md-6">
                                <input id="search" type="text" class="form-control @error('search') is-invalid @enderror" name="search" placeholder="Search terms" required autofocus>

                                @error('value')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

			                    <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Search') }}
                                </button>

					                   </div>
                          </div>

                          <hr/>
                          @include('company.search_results')
              </div>
          </div>
      </div>
    </div>
</div>
@endsection
