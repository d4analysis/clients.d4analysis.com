<select class="form-control" id="director" name="meta[director][name]">
  <option value="">Please select </option>
  @foreach ($company->directors as $director)
    @if(!isset($director->resigned_on))
      <option value="{{$director->name}}" {{ (isset($investigation->meta['director']['name'])  && $director->name == $investigation->meta['director']['name']) ? 'selected' : '' }}>{{$director->name}}</option>
    @endif
  <br/>
  @endforeach
</select>
