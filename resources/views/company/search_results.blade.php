@isset($companies)
  @foreach ($companies as $company)
   <a href="{{ url('investments/create?company_name=' . $company->title . '&company_id=' . $company->company_number ) }}">{{$company->title}}</a> <br/>
  @endforeach
@else
  <br/>
@endisset
