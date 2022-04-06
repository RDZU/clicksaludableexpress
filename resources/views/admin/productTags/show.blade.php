@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.productTag.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.product-tags.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.productTag.fields.id') }}
                        </th>
                        <td>
                            {{ $productTag->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.productTag.fields.name') }}
                        </th>
                        <td>
                            {{ $productTag->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.productTag.fields.imagen_tag') }}
                        </th>
                        <td>
                            @if($productTag->imagen_tag)
                                <a href="{{ $productTag->imagen_tag->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $productTag->imagen_tag->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.productTag.fields.tag_link') }}
                        </th>
                        <td>
                            {{ $productTag->tag_link }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.productTag.fields.tag_title') }}
                        </th>
                        <td>
                            {{ $productTag->tag_title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.productTag.fields.tag_alt') }}
                        </th>
                        <td>
                            {{ $productTag->tag_alt }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.product-tags.index') }}">
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
            <a class="nav-link" href="#etiquetas_products" role="tab" data-toggle="tab">
                {{ trans('cruds.product.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="etiquetas_products">
            @includeIf('admin.productTags.relationships.etiquetasProducts', ['products' => $productTag->etiquetasProducts])
        </div>
    </div>
</div>

@endsection