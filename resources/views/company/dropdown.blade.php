@foreach($companies as $key=>$value)
  <option value="{{$key}}" 
	@isset($investment)
      {{ ( $key == $investment->company_id) ? 'selected' : '' }}
    @endisset
  
  >{{$value}}</option>
@endforeach
