<div class="col-sm-12">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div>
  @endif
</div>


<ul class="list-group">

@foreach($investigations as $investigation)

  <li class="list-group-item">
      <h6>
      {{$investigation->meta['director']['name'] ?? '-'}}

      <a class="float-right" href="{{ url('investigation/'. $investigation->id. '/edit') }}">
        <i class="fas fa-external-link-square-alt text-primary fa-lg"></i>
      </a>
    </h6>
    {{$investigation->company_name ?? 'Not found'}}
  </li>
@endforeach
</ul>

{{ $investigations->links() }}
