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
                <div class="card-header">{{ __('Edit investment') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{route('investment.update', $investment->id) }}">
                        @csrf
                          @method('PUT')

						<div class="form-group row">
                            <label for="company" class="col-md-4 col-form-label text-md-right">{{ __('Company') }}</label>

                            <div class="col-md-6">

                                <input class="form-control" name="company_name" value="{{$investment->company_name ?? 'n/a'}}" id="company" readonly/>
                                <input type="hidden" name="company_id" value="{{$investment->company_id ?? 'n/a'}}"/>

                                @error('value')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

					 <div class="form-group row">
							<label for="value" class="col-md-4 col-form-label text-md-right">{{ __('Purchased') }}</label>
					   
							<div class="col-md-6">
							
								<input type="date" class="form-control" name="purchased_at" placeholder=" " value="{{$investment->purchased_at ? $investment->purchased_at->format('Y-m-d') : ''}}" required/>
								
							</div>
						</div>

                        <div class="form-group row">
                            <label for="value" class="col-md-4 col-form-label text-md-right">{{ __('Cost') }}</label>

                            <div class="col-md-6">
                                <input id="value" type="number" class="form-control @error('value') is-invalid @enderror" name="value" value="{{ $investment->value }}" required autocomplete="value" autofocus>

                                @error('value')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="volume" class="col-md-4 col-form-label text-md-right">{{ __('Number of shares') }}</label>

                            <div class="col-md-6">
                                <input id="volume" type="number" class="form-control" name="meta[info][volume]" value="{{$investment->meta['info']['volume'] ?? ''}}" autofocus>

                                @error('volume')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

						<div class="form-group row">
                            <label for="share_class" class="col-md-4 col-form-label text-md-right">{{ __('Share Class') }}</label>

                            <div class="col-md-6">
                              @include('forms/select_share_class')

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
                                    {{ __('Update') }}
                                </button>

							&nbsp;
								<a href="{{url('/investments')}}" type="button" class="btn btn-light">
                                    Cancel
                                </a>
                            </div>
                        </div>
                    </form>
                    <form id="form-delete" action="{{route('investment.destroy', $investment->id) }}" method="post">
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
