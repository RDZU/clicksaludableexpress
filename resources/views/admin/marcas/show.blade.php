@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.marca.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.marcas.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.marca.fields.id') }}
                        </th>
                        <td>
                            {{ $marca->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marca.fields.name') }}
                        </th>
                        <td>
                            {{ $marca->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marca.fields.descripcion') }}
                        </th>
                        <td>
                            {{ $marca->descripcion }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marca.fields.image') }}
                        </th>
                        <td>
                            @if($marca->image)
                                <a href="{{ $marca->image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $marca->image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marca.fields.image_link') }}
                        </th>
                        <td>
                            {{ $marca->image_link }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marca.fields.image_title') }}
                        </th>
                        <td>
                            {{ $marca->image_title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marca.fields.image_alt') }}
                        </th>
                        <td>
                            {{ $marca->image_alt }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marca.fields.slug') }}
                        </th>
                        <td>
                            {{ $marca->slug }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.marca.fields.visible_home') }}
                        </th>
                        <td>
                            {{ App\Models\Marca::VISIBLE_HOME_SELECT[$marca->visible_home] ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.marcas.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        {{ trans('global.relatedData') }}
    </div>
    <ul class="nav nav-tabs" role="tablist" id="relationship-tabs">
        <li class="nav-item">
            <a class="nav-link" href="#marca_products" role="tab" data-toggle="tab">
                {{ trans('cruds.product.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="marca_products">
            @includeIf('admin.marcas.relationships.marcaProducts', ['products' => $marca->marcaProducts])
        </div>
    </div>
</div>

@endsection