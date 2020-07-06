@isset($companies)
  @foreach ($companies as $company)
   <a href="{{ url('investment/add/single/' . $company->company_number . '/' . $company->title ) }}">{{$company->title}}</a> <br/>
  @endforeach
@else
  <br/>
@endisset
