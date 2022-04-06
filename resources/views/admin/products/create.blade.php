@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.product.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.products.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.product.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="description">{{ trans('cruds.product.fields.description') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description">{!! old('description') !!}</textarea>
                @if($errors->has('description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="marca_id">{{ trans('cruds.product.fields.marca') }}</label>
                <select class="form-control select2 {{ $errors->has('marca') ? 'is-invalid' : '' }}" name="marca_id" id="marca_id" required>
                    @foreach($marcas as $id => $marca)
                        <option value="{{ $id }}" {{ old('marca_id') == $id ? 'selected' : '' }}>{{ $marca }}</option>
                    @endforeach
                </select>
                @if($errors->has('marca'))
                    <div class="invalid-feedback">
                        {{ $errors->first('marca') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.marca_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="categories">{{ trans('cruds.product.fields.category') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('categories') ? 'is-invalid' : '' }}" name="categories[]" id="categories" multiple>
                    @foreach($categories as $id => $category)
                        <option value="{{ $id }}" {{ in_array($id, old('categories', [])) ? 'selected' : '' }}>{{ $category }}</option>
                    @endforeach
                </select>
                @if($errors->has('categories'))
                    <div class="invalid-feedback">
                        {{ $errors->first('categories') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.category_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="etiquetas">{{ trans('cruds.product.fields.etiquetas') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('etiquetas') ? 'is-invalid' : '' }}" name="etiquetas[]" id="etiquetas" multiple>
                    @foreach($etiquetas as $id => $etiquetas)
                        <option value="{{ $id }}" {{ in_array($id, old('etiquetas', [])) ? 'selected' : '' }}>{{ $etiquetas }}</option>
                    @endforeach
                </select>
                @if($errors->has('etiquetas'))
                    <div class="invalid-feedback">
                        {{ $errors->first('etiquetas') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.etiquetas_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="tipo_presentacion">{{ trans('cruds.product.fields.tipo_presentacion') }}</label>
                <input class="form-control {{ $errors->has('tipo_presentacion') ? 'is-invalid' : '' }}" type="text" name="tipo_presentacion" id="tipo_presentacion" value="{{ old('tipo_presentacion', '') }}" required> 
                @if($errors->has('tipo_presentacion'))
                    <div class="invalid-feedback">
                        {{ $errors->first('tipo_presentacion') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.tipo_presentacion_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="slug">{{ trans('cruds.product.fields.slug') }}</label>
                <input class="form-control {{ $errors->has('slug') ? 'is-invalid' : '' }}" type="text" name="slug" id="slug" value="{{ old('slug', '') }}" required>
                @if($errors->has('slug'))
                    <div class="invalid-feedback">
                        {{ $errors->first('slug') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.slug_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="envase">{{ trans('cruds.product.fields.envase') }}</label>
                <input class="form-control {{ $errors->has('envase') ? 'is-invalid' : '' }}" type="text" name="envase" id="envase" value="{{ old('envase', '') }}" required>
                @if($errors->has('envase'))
                    <div class="invalid-feedback">
                        {{ $errors->first('envase') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.envase_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="cantidad">{{ trans('cruds.product.fields.cantidad') }}</label>
                <input class="form-control {{ $errors->has('cantidad') ? 'is-invalid' : '' }}" type="text" name="cantidad" id="cantidad" value="{{ old('cantidad', '') }}" required>
                @if($errors->has('cantidad'))
                    <div class="invalid-feedback">
                        {{ $errors->first('cantidad') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.cantidad_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="largo">{{ trans('cruds.product.fields.largo') }}</label>
                <input class="form-control {{ $errors->has('largo') ? 'is-invalid' : '' }}" type="number" name="largo" id="largo" value="{{ old('largo', '') }}" step="1" required>
                @if($errors->has('largo'))
                    <div class="invalid-feedback">
                        {{ $errors->first('largo') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.largo_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="ancho">{{ trans('cruds.product.fields.ancho') }}</label>
                <input class="form-control {{ $errors->has('ancho') ? 'is-invalid' : '' }}" type="number" name="ancho" id="ancho" value="{{ old('ancho', '') }}" step="1" required>
                @if($errors->has('ancho'))
                    <div class="invalid-feedback">
                        {{ $errors->first('ancho') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.ancho_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="alto">{{ trans('cruds.product.fields.alto') }}</label>
                <input class="form-control {{ $errors->has('alto') ? 'is-invalid' : '' }}" type="number" name="alto" id="alto" value="{{ old('alto', '') }}" step="1" required>
                @if($errors->has('alto'))
                    <div class="invalid-feedback">
                        {{ $errors->first('alto') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.alto_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="peso">{{ trans('cruds.product.fields.peso') }}</label>
                <input class="form-control {{ $errors->has('peso') ? 'is-invalid' : '' }}" type="text" name="peso" id="peso" value="{{ old('peso', '') }}" required>
                @if($errors->has('peso'))
                    <div class="invalid-feedback">
                        {{ $errors->first('peso') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.peso_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.product.fields.visible_home') }}</label>
                <select class="form-control {{ $errors->has('visible_home') ? 'is-invalid' : '' }}" name="visible_home" id="visible_home">
                    <option value disabled {{ old('visible_home', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Product::VISIBLE_HOME_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('visible_home', '0') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('visible_home'))
                    <div class="invalid-feedback">
                        {{ $errors->first('visible_home') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.visible_home_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="descripcion_home">{{ trans('cruds.product.fields.descripcion_home') }}</label>
                <input class="form-control {{ $errors->has('descripcion_home') ? 'is-invalid' : '' }}" type="text" name="descripcion_home" id="descripcion_home" value="{{ old('descripcion_home', '') }}">
                @if($errors->has('descripcion_home'))
                    <div class="invalid-feedback">
                        {{ $errors->first('descripcion_home') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.descripcion_home_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.product.fields.stock') }}</label>
                <select class="form-control {{ $errors->has('stock') ? 'is-invalid' : '' }}" name="stock" id="stock">
                    <option value disabled {{ old('stock', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Product::STOCK_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('stock', '1') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('stock'))
                    <div class="invalid-feedback">
                        {{ $errors->first('stock') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.stock_helper') }}</span>
            </div>

            <!-- 
            <div class="form-group">
                <label for="price">{{ trans('cruds.product.fields.price') }}</label>
                <input class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" type="number" name="price" id="price" value="{{ old('price', '') }}" step="0.01">
                @if($errors->has('price'))
                    <div class="invalid-feedback">
                        {{ $errors->first('price') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.price_helper') }}</span>
            </div>
        -->

        <!--
            <div class="form-group">
                <label for="photo">{{ trans('cruds.product.fields.photo') }}</label>
                <div class="needsclick dropzone {{ $errors->has('photo') ? 'is-invalid' : '' }}" id="photo-dropzone">
                </div>
                @if($errors->has('photo'))
                    <div class="invalid-feedback">
                        {{ $errors->first('photo') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.photo_helper') }}</span>
            </div>
-->
            <div class="form-group">
                <label class="required" for="image_frontal_link">{{ trans('cruds.product.fields.image_frontal_link') }}</label>
                <input class="form-control {{ $errors->has('image_frontal_link') ? 'is-invalid' : '' }}" type="text" name="image_frontal_link" id="image_frontal_link" value="{{ old('image_frontal_link', '') }}" required>
                @if($errors->has('image_frontal_link'))
                    <div class="invalid-feedback">
                        {{ $errors->first('image_frontal_link') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.image_frontal_link_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="image_frontal_title">{{ trans('cruds.product.fields.image_frontal_title') }}</label>
                <input class="form-control {{ $errors->has('image_frontal_title') ? 'is-invalid' : '' }}" type="text" name="image_frontal_title" id="image_frontal_title" value="{{ old('image_frontal_title', '') }}">
                @if($errors->has('image_frontal_title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('image_frontal_title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.image_frontal_title_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="image_frontal_alt">{{ trans('cruds.product.fields.image_frontal_alt') }}</label>
                <input class="form-control {{ $errors->has('image_frontal_alt') ? 'is-invalid' : '' }}" type="text" name="image_frontal_alt" id="image_frontal_alt" value="{{ old('image_frontal_alt', '') }}">
                @if($errors->has('image_frontal_alt'))
                    <div class="invalid-feedback">
                        {{ $errors->first('image_frontal_alt') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.image_frontal_alt_helper') }}</span>
            </div>

            <!--
            <div class="form-group">
                <label for="photo_reverso">{{ trans('cruds.product.fields.photo_reverso') }}</label>
                <div class="needsclick dropzone {{ $errors->has('photo_reverso') ? 'is-invalid' : '' }}" id="photo_reverso-dropzone">
                </div>
                @if($errors->has('photo_reverso'))
                    <div class="invalid-feedback">
                        {{ $errors->first('photo_reverso') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.photo_reverso_helper') }}</span>
            </div>
        -->

        <div class="form-group">
            <label  class="required">{{ trans('cruds.product.fields.photo_min_frontal_link') }}</label>
            <select class="form-control {{ $errors->has('photo_min_frontal_link') ? 'is-invalid' : '' }}" name="photo_min_frontal_link" id="photo_min_frontal_link">
                <option value disabled {{ old('photo_min_frontal_link', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                @foreach(App\Models\Product::PHOTO_MIN_FRONTAL_LINK_SELECT as $key => $label)
                    <option value="{{ $key }}" {{ old('photo_min_frontal_link', '1') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                @endforeach
            </select>
            @if($errors->has('photo_min_frontal_link'))
                <div class="invalid-feedback">
                    {{ $errors->first('photo_min_frontal_link') }}
                </div>
            @endif
            <span class="help-block">{{ trans('cruds.product.fields.photo_min_frontal_link_helper') }}</span>
        </div>

            <div class="form-group">
                <label class="required" for="image_reverso_link">{{ trans('cruds.product.fields.image_reverso_link') }}</label>
                <input class="form-control {{ $errors->has('image_reverso_link') ? 'is-invalid' : '' }}" type="text" name="image_reverso_link" id="image_reverso_link" value="{{ old('image_reverso_link', '') }}" required>
                @if($errors->has('image_reverso_link'))
                    <div class="invalid-feedback">
                        {{ $errors->first('image_reverso_link') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.image_reverso_link_helper') }}</span>
            </div>

            <div class="form-group">
                <label for="image_reverso_title">{{ trans('cruds.product.fields.image_reverso_title') }}</label>
                <input class="form-control {{ $errors->has('image_reverso_title') ? 'is-invalid' : '' }}" type="text" name="image_reverso_title" id="image_reverso_title" value="{{ old('image_reverso_title', '') }}">
                @if($errors->has('image_reverso_title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('image_reverso_title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.image_reverso_title_helper') }}</span>
            </div>

            <div class="form-group">
                <label for="image_reverso_alt">{{ trans('cruds.product.fields.image_reverso_alt') }}</label>
                <input class="form-control {{ $errors->has('image_reverso_alt') ? 'is-invalid' : '' }}" type="text" name="image_reverso_alt" id="image_reverso_alt" value="{{ old('image_reverso_alt', '') }}">
                @if($errors->has('image_reverso_alt'))
                    <div class="invalid-feedback">
                        {{ $errors->first('image_reverso_alt') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.image_reverso_alt_helper') }}</span>
            </div>
            <!--
            <div class="form-group">
                <label for="photo_min_reverso">{{ trans('cruds.product.fields.photo_min_reverso') }}</label>
                <div class="needsclick dropzone {{ $errors->has('photo_min_reverso') ? 'is-invalid' : '' }}" id="photo_min_reverso-dropzone">
                </div>
                @if($errors->has('photo_min_reverso'))
                    <div class="invalid-feedback">
                        {{ $errors->first('photo_min_reverso') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.photo_min_reverso_helper') }}</span>
            </div>

        -->


            <div class="form-group">
                <label for="photo_min_reverso_link">{{ trans('cruds.product.fields.photo_min_reverso_link') }}</label>
                <input class="form-control {{ $errors->has('photo_min_reverso_link') ? 'is-invalid' : '' }}" type="text" name="photo_min_reverso_link" id="photo_min_reverso_link" value="{{ old('photo_min_reverso_link', '') }}">
                @if($errors->has('photo_min_reverso_link'))
                    <div class="invalid-feedback">
                        {{ $errors->first('photo_min_reverso_link') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.photo_min_reverso_link_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="photo_link_reverso_title">{{ trans('cruds.product.fields.photo_link_reverso_title') }}</label>
                <input class="form-control {{ $errors->has('photo_link_reverso_title') ? 'is-invalid' : '' }}" type="text" name="photo_link_reverso_title" id="photo_link_reverso_title" value="{{ old('photo_link_reverso_title', '') }}">
                @if($errors->has('photo_link_reverso_title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('photo_link_reverso_title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.photo_link_reverso_title_helper') }}</span>
            </div>

<!--
             
            <div class="form-group">
                <label for="photo_link_reverso_alt">{{ trans('cruds.product.fields.photo_link_reverso_alt') }}</label>
                <input class="form-control {{ $errors->has('photo_link_reverso_alt') ? 'is-invalid' : '' }}" type="text" name="photo_link_reverso_alt" id="photo_link_reverso_alt" value="{{ old('photo_link_reverso_alt', '') }}">
                @if($errors->has('photo_link_reverso_alt'))
                    <div class="invalid-feedback">
                        {{ $errors->first('photo_link_reverso_alt') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.photo_link_reverso_alt_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="photo_min_frontal">{{ trans('cruds.product.fields.photo_min_frontal') }}</label>
                <div class="needsclick dropzone {{ $errors->has('photo_min_frontal') ? 'is-invalid' : '' }}" id="photo_min_frontal-dropzone">
                </div>
                @if($errors->has('photo_min_frontal'))
                    <div class="invalid-feedback">
                        {{ $errors->first('photo_min_frontal') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.photo_min_frontal_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="photo_min_frontal_link">{{ trans('cruds.product.fields.photo_min_frontal_link') }}</label>
                <input class="form-control {{ $errors->has('photo_min_frontal_link') ? 'is-invalid' : '' }}" type="text" name="photo_min_frontal_link" id="photo_min_frontal_link" value="{{ old('photo_min_frontal_link', '') }}">
                @if($errors->has('photo_min_frontal_link'))
                    <div class="invalid-feedback">
                        {{ $errors->first('photo_min_frontal_link') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.photo_min_frontal_link_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="photo_link_frontal_title">{{ trans('cruds.product.fields.photo_link_frontal_title') }}</label>
                <input class="form-control {{ $errors->has('photo_link_frontal_title') ? 'is-invalid' : '' }}" type="text" name="photo_link_frontal_title" id="photo_link_frontal_title" value="{{ old('photo_link_frontal_title', '') }}">
                @if($errors->has('photo_link_frontal_title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('photo_link_frontal_title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.photo_link_frontal_title_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="photo_link_frontal_alt">{{ trans('cruds.product.fields.photo_link_frontal_alt') }}</label>
                <input class="form-control {{ $errors->has('photo_link_frontal_alt') ? 'is-invalid' : '' }}" type="text" name="photo_link_frontal_alt" id="photo_link_frontal_alt" value="{{ old('photo_link_frontal_alt', '') }}">
                @if($errors->has('photo_link_frontal_alt'))
                    <div class="invalid-feedback">
                        {{ $errors->first('photo_link_frontal_alt') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.product.fields.photo_link_frontal_alt_helper') }}</span>
            </div>

        -->
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
    $(document).ready(function () {
  function SimpleUploadAdapter(editor) {
    editor.plugins.get('FileRepository').createUploadAdapter = function(loader) {
      return {
        upload: function() {
          return loader.file
            .then(function (file) {
              return new Promise(function(resolve, reject) {
                // Init request
                var xhr = new XMLHttpRequest();
                xhr.open('POST', '/admin/products/ckmedia', true);
                xhr.setRequestHeader('x-csrf-token', window._token);
                xhr.setRequestHeader('Accept', 'application/json');
                xhr.responseType = 'json';

                // Init listeners
                var genericErrorText = `Couldn't upload file: ${ file.name }.`;
                xhr.addEventListener('error', function() { reject(genericErrorText) });
                xhr.addEventListener('abort', function() { reject() });
                xhr.addEventListener('load', function() {
                  var response = xhr.response;

                  if (!response || xhr.status !== 201) {
                    return reject(response && response.message ? `${genericErrorText}\n${xhr.status} ${response.message}` : `${genericErrorText}\n ${xhr.status} ${xhr.statusText}`);
                  }

                  $('form').append('<input type="hidden" name="ck-media[]" value="' + response.id + '">');

                  resolve({ default: response.url });
                });

                if (xhr.upload) {
                  xhr.upload.addEventListener('progress', function(e) {
                    if (e.lengthComputable) {
                      loader.uploadTotal = e.total;
                      loader.uploaded = e.loaded;
                    }
                  });
                }

                // Send request
                var data = new FormData();
                data.append('upload', file);
                data.append('crud_id', '{{ $product->id ?? 0 }}');
                xhr.send(data);
              });
            })
        }
      };
    }
  }

  var allEditors = document.querySelectorAll('.ckeditor');
  for (var i = 0; i < allEditors.length; ++i) {
    ClassicEditor.create(
      allEditors[i], {
        extraPlugins: [SimpleUploadAdapter]
      }
    );
  }
});
</script>

<script>
    Dropzone.options.photoDropzone = {
    url: '{{ route('admin.products.storeMedia') }}',
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
      $('form').find('input[name="photo"]').remove()
      $('form').append('<input type="hidden" name="photo" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="photo"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($product) && $product->photo)
      var file = {!! json_encode($product->photo) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="photo" value="' + file.file_name + '">')
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
<script>
    Dropzone.options.photoReversoDropzone = {
    url: '{{ route('admin.products.storeMedia') }}',
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
      $('form').find('input[name="photo_reverso"]').remove()
      $('form').append('<input type="hidden" name="photo_reverso" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="photo_reverso"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($product) && $product->photo_reverso)
      var file = {!! json_encode($product->photo_reverso) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="photo_reverso" value="' + file.file_name + '">')
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
<script>
    Dropzone.options.photoMinReversoDropzone = {
    url: '{{ route('admin.products.storeMedia') }}',
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
      $('form').find('input[name="photo_min_reverso"]').remove()
      $('form').append('<input type="hidden" name="photo_min_reverso" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="photo_min_reverso"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($product) && $product->photo_min_reverso)
      var file = {!! json_encode($product->photo_min_reverso) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="photo_min_reverso" value="' + file.file_name + '">')
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
<script>
    Dropzone.options.photoMinFrontalDropzone = {
    url: '{{ route('admin.products.storeMedia') }}',
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
      $('form').find('input[name="photo_min_frontal"]').remove()
      $('form').append('<input type="hidden" name="photo_min_frontal" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="photo_min_frontal"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($product) && $product->photo_min_frontal)
      var file = {!! json_encode($product->photo_min_frontal) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="photo_min_frontal" value="' + file.file_name + '">')
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