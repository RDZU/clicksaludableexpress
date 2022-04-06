@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.marca.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.marcas.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.marca.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marca.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="descripcion">{{ trans('cruds.marca.fields.descripcion') }}</label>
                <textarea class="form-control {{ $errors->has('descripcion') ? 'is-invalid' : '' }}" name="descripcion" id="descripcion">{{ old('descripcion') }}</textarea>
                @if($errors->has('descripcion'))
                    <div class="invalid-feedback">
                        {{ $errors->first('descripcion') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marca.fields.descripcion_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="image">{{ trans('cruds.marca.fields.image') }}</label>
                <div class="needsclick dropzone {{ $errors->has('image') ? 'is-invalid' : '' }}" id="image-dropzone">
                </div>
                @if($errors->has('image'))
                    <div class="invalid-feedback">
                        {{ $errors->first('image') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marca.fields.image_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="image_link">{{ trans('cruds.marca.fields.image_link') }}</label>
                <input class="form-control {{ $errors->has('image_link') ? 'is-invalid' : '' }}" type="text" name="image_link" id="image_link" value="{{ old('image_link', '') }}">
                @if($errors->has('image_link'))
                    <div class="invalid-feedback">
                        {{ $errors->first('image_link') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marca.fields.image_link_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="image_title">{{ trans('cruds.marca.fields.image_title') }}</label>
                <input class="form-control {{ $errors->has('image_title') ? 'is-invalid' : '' }}" type="text" name="image_title" id="image_title" value="{{ old('image_title', '') }}">
                @if($errors->has('image_title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('image_title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marca.fields.image_title_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="image_alt">{{ trans('cruds.marca.fields.image_alt') }}</label>
                <input class="form-control {{ $errors->has('image_alt') ? 'is-invalid' : '' }}" type="text" name="image_alt" id="image_alt" value="{{ old('image_alt', '') }}">
                @if($errors->has('image_alt'))
                    <div class="invalid-feedback">
                        {{ $errors->first('image_alt') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marca.fields.image_alt_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="slug">{{ trans('cruds.marca.fields.slug') }}</label>
                <input class="form-control {{ $errors->has('slug') ? 'is-invalid' : '' }}" type="text" name="slug" id="slug" value="{{ old('slug', '') }}">
                @if($errors->has('slug'))
                    <div class="invalid-feedback">
                        {{ $errors->first('slug') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marca.fields.slug_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.marca.fields.visible_home') }}</label>
                <select class="form-control {{ $errors->has('visible_home') ? 'is-invalid' : '' }}" name="visible_home" id="visible_home">
                    <option value disabled {{ old('visible_home', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Marca::VISIBLE_HOME_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('visible_home', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('visible_home'))
                    <div class="invalid-feedback">
                        {{ $errors->first('visible_home') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.marca.fields.visible_home_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection

@section('scripts')
<script>
    Dropzone.options.imageDropzone = {
    url: '{{ route('admin.marcas.storeMedia') }}',
    maxFilesize: 2, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').find('input[name="image"]').remove()
      $('form').append('<input type="hidden" name="image" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="image"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($marca) && $marca->image)
      var file = {!! json_encode($marca->image) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="image" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}
</script>
@endsection