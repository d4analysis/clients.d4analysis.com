@isset($company_search)
  @foreach ($company_search as $company)
   <a href="{{ url('investigation/add/single/' . $company->company_number . '/' . $company->title ) }}">{{$company->title}}</a> <br/>
  @endforeach
@else
  <br/>
@endisset
