<div class="col-sm-12">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div>
  @endif
</div>

<table class="table text-left">
  <thead>
    <tr>
      <th>Company/fund</th>
      <th>Value</th>
      <th>Class</th>
      <th>Number</th>
      <th>Date</th>
      <th>Edit</th>
    </tr>
  </thead>
  <tbody>
@foreach($investments as $investment)
  <tr>
    <td>
	   {{$investment->company_name ?? 'Not found'}}
    </td>
    <td>£{{ number_format($investment->value, 2, ',', '.') }}</td>
    <td>{{$investment->meta['classification']['share_class'] ?? '-'}}</td>
    <td>{{$investment->meta['info']['volume'] ?? '-'}}</td>
    <td>{{$investment->purchased_at ? $investment->purchased_at->format('d/m/Y') : '-'}}</td>
    <td>
          <a href="{{ url('investments/'. $investment->id. '/edit') }}">
            <i class="fas fa-edit text-primary"></i>
          </a>
    </td>
  </tr>
@endforeach
</tbody>
</table>
{{ $investments->links() }}
