@extends('layouts.app')

@section('content')
<div class="container-fluid">
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
                <div class="card-header">{{ __('Edit investigation') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{route('investigation.update', $investigation->id) }}">
                        @csrf
                          @method('PUT')

						<div class="form-group row">
                            <label for="company" class="col-md-4 col-form-label text-md-right">{{ __('Company') }}</label>

                            <div class="col-md-6">

                                <input class="form-control" name="company_name" value="{{$investigation->company_name ?? 'n/a'}}" id="company" readonly/>
                                <input type="hidden" name="company_id" value="{{$investigation->company_id ?? 'n/a'}}"/>

                                @error('value')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                                        <label for="share_class" class="col-md-4 col-form-label text-md-right">{{ __('Director') }}</label>

                                        <div class="col-md-6">
                                          @include('forms/select_director')

                                          @error('value')
                                              <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                              </span>
                                          @enderror
                                        </div>
                                    </div>

                                    @include('forms/investigation_settings')

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>

							&nbsp;
								<a href="{{url('/')}}" type="button" class="btn btn-light">
                                    Cancel
                                </a>
                            </div>
                        </div>
                    </form>
                    <form id="form-delete" action="{{route('investigation.destroy', $investigation->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                           <button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Are you sure?')">
                				  <i class="far fa-trash-alt"></i>
                		   </button>
                        </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
