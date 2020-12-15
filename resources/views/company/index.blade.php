<div class="col-sm-12">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div>
  @endif
</div>

  <ul class="list-group">
  @foreach($companies as $company)
    <li class="list-group-item">
        <h6>
        {{$company->company_name ?? 'Not found'}}

        <a class="float-right" href="{{url('company/profile/' . $company->company_id)}}">
          <i class="fas fa-external-link-square-alt text-primary fa-lg"></i>
        </a>
      </h6>
    </li>

  @endforeach
  </ul>
