<div class="form-group row">
    <label for="share_class" class="col-md-4 col-form-label text-md-right">{{ __('Investigation Stages') }}</label>

    <div class="col-md-6">

      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="type_1" name="meta[investigation][types][early_warning]" value="1" {{ ( isset($investigation->meta['investigation']['types']['early_warning']) && $investigation->meta['investigation']['types']['early_warning'] == 1 ? ' checked' : '') }}>
        <label class="form-check-label" for="type_1">Early Warning</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="type_2" name="meta[investigation][types][full_report]" value="1" {{ ( isset($investigation->meta['investigation']['types']['full_report']) && $investigation->meta['investigation']['types']['full_report'] == 1 ? ' checked' : '') }}>
        <label class="form-check-label" for="type_2">Full Report</label>
      </div>

        @error('value')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>
