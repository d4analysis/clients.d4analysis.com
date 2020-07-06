<select class="form-control" id="share_class" name="meta[classification][share_class]">
  <option value="">Please select </option>
  <option value="Ordinary" {{ ( $share_class == 'Ordinary') ? 'selected' : '' }}>Ordinary</option>
  <option value="A Ordinary" {{ ( $share_class == 'A Ordinary') ? 'selected' : '' }}>A Ordinary</option>
  <option value="B Ordinary" {{ ( $share_class == 'B Ordinary') ? 'selected' : '' }}>B Ordinary</option>
  <option value="C Ordinary" {{ ( $share_class == 'C Ordinary') ? 'selected' : '' }}>C Ordinary</option>
</select>
