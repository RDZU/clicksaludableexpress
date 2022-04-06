@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.productTag.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.product-tags.update", [$productTag->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.productTag.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $productTag->name) }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.productTag.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="imagen_tag">{{ trans('cruds.productTag.fields.imagen_tag') }}</label>
                <div class="needsclick dropzone {{ $errors->has('imagen_tag') ? 'is-invalid' : '' }}" id="imagen_tag-dropzone">
                </div>
                @if($errors->has('imagen_tag'))
                    <div class="invalid-feedback">
                        {{ $errors->first('imagen_tag') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.productTag.fields.imagen_tag_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="tag_link">{{ trans('cruds.productTag.fields.tag_link') }}</label>
                <input class="form-control {{ $errors->has('tag_link') ? 'is-invalid' : '' }}" type="text" name="tag_link" id="tag_link" value="{{ old('tag_link', $productTag->tag_link) }}">
                @if($errors->has('tag_link'))
                    <div class="invalid-feedback">
                        {{ $errors->first('tag_link') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.productTag.fields.tag_link_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="tag_title">{{ trans('cruds.productTag.fields.tag_title') }}</label>
                <input class="form-control {{ $errors->has('tag_title') ? 'is-invalid' : '' }}" type="text" name="tag_title" id="tag_title" value="{{ old('tag_title', $productTag->tag_title) }}">
                @if($errors->has('tag_title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('tag_title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.productTag.fields.tag_title_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="tag_alt">{{ trans('cruds.productTag.fields.tag_alt') }}</label>
                <input class="form-control {{ $errors->has('tag_alt') ? 'is-invalid' : '' }}" type="text" name="tag_alt" id="tag_alt" value="{{ old('tag_alt', $productTag->tag_alt) }}">
                @if($errors->has('tag_alt'))
                    <div class="invalid-feedback">
                        {{ $errors->first('tag_alt') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.productTag.fields.tag_alt_helper') }}</span>
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
    Dropzone.options.imagenTagDropzone = {
    url: '{{ route('admin.product-tags.storeMedia') }}',
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
      $('form').find('input[name="imagen_tag"]').remove()
      $('form').append('<input type="hidden" name="imagen_tag" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="imagen_tag"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($productTag) && $productTag->imagen_tag)
      var file = {!! json_encode($productTag->imagen_tag) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="imagen_tag" value="' + file.file_name + '">')
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