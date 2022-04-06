@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.product.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.products.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.id') }}
                        </th>
                        <td>
                            {{ $product->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.name') }}
                        </th>
                        <td>
                            {{ $product->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.description') }}
                        </th>
                        <td>
                            {!! $product->description !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.marca') }}
                        </th>
                        <td>
                            {{ $product->marca->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.category') }}
                        </th>
                        <td>
                            @foreach($product->categories as $key => $category)
                                <span class="label label-info">{{ $category->name }}</span>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.etiquetas') }}
                        </th>
                        <td>
                            @foreach($product->etiquetas as $key => $etiquetas)
                                <span class="label label-info">{{ $etiquetas->name }}</span>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.tipo_presentacion') }}
                        </th>
                        <td>
                            {{ $product->tipo_presentacion }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.slug') }}
                        </th>
                        <td>
                            {{ $product->slug }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.envase') }}
                        </th>
                        <td>
                            {{ $product->envase }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.cantidad') }}
                        </th>
                        <td>
                            {{ $product->cantidad }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.largo') }}
                        </th>
                        <td>
                            {{ $product->largo }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.ancho') }}
                        </th>
                        <td>
                            {{ $product->ancho }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.alto') }}
                        </th>
                        <td>
                            {{ $product->alto }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.peso') }}
                        </th>
                        <td>
                            {{ $product->peso }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.visible_home') }}
                        </th>
                        <td>
                            {{ App\Models\Product::VISIBLE_HOME_SELECT[$product->visible_home] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.descripcion_home') }}
                        </th>
                        <td>
                            {{ $product->descripcion_home }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.stock') }}
                        </th>
                        <td>
                            {{ App\Models\Product::STOCK_SELECT[$product->stock] ?? '' }}
                        </td>
                    </tr>
                   <!--  <tr>
                        <th>
                            {{ trans('cruds.product.fields.price') }}
                        </th>
                        <td>
                            {{ $product->price }}
                        </td>
                    </tr>
                


                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.photo') }}
                        </th>
                        <td>
                            @if($product->photo)
                                <a href="{{ $product->photo->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $product->photo->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>

                -->

                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.image_frontal_link') }}
                        </th>
                        <td>
                            {{ $product->image_frontal_link }}
                        </td>
                    </tr>


                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.image_frontal_title') }}
                        </th>
                        <td>
                            {{ $product->image_frontal_title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.image_frontal_alt') }}
                        </th>
                        <td>
                            {{ $product->image_frontal_alt }}
                        </td>
                    </tr>

                    <!--
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.photo_reverso') }}
                        </th>
                        <td>
                            @if($product->photo_reverso)
                                <a href="{{ $product->photo_reverso->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $product->photo_reverso->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>

                -->

                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.image_reverso_link') }}
                        </th>
                        <td>
                            {{ $product->image_reverso_link }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.image_reverso_title') }}
                        </th>
                        <td>
                            {{ $product->image_reverso_title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.image_reverso_alt') }}
                        </th>
                        <td>
                            {{ $product->image_reverso_alt }}
                        </td>
                    </tr>

                    <!--
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.photo_min_reverso') }}
                        </th>
                        <td>
                            @if($product->photo_min_reverso)
                                <a href="{{ $product->photo_min_reverso->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $product->photo_min_reverso->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>

                -->

                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.photo_min_reverso_link') }}
                        </th>
                        <td>
                            {{ $product->photo_min_reverso_link }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.photo_link_reverso_title') }}
                        </th>
                        <td>
                            {{ $product->photo_link_reverso_title }}
                        </td>
                    </tr>
                    <!--
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.photo_link_reverso_alt') }}
                        </th>
                        <td>
                            {{ $product->photo_link_reverso_alt }}
                        </td>
                    </tr>
                    
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.photo_min_frontal') }}
                        </th>
                        <td>
                            @if($product->photo_min_frontal)
                                <a href="{{ $product->photo_min_frontal->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $product->photo_min_frontal->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.photo_min_frontal_link') }}
                        </th>
                        <td>
                            {{ $product->photo_min_frontal_link }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.photo_link_frontal_title') }}
                        </th>
                        <td>
                            {{ $product->photo_link_frontal_title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.product.fields.photo_link_frontal_alt') }}
                        </th>
                        <td>
                            {{ $product->photo_link_frontal_alt }}
                        </td>
                    </tr>

                -->
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.products.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection