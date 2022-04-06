@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.contacto.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.contactos.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.contacto.fields.id') }}
                        </th>
                        <td>
                            {{ $contacto->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contacto.fields.name') }}
                        </th>
                        <td>
                            {{ $contacto->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contacto.fields.email') }}
                        </th>
                        <td>
                            {{ $contacto->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contacto.fields.telefono') }}
                        </th>
                        <td>
                            {{ $contacto->telefono }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contacto.fields.info_conocer') }}
                        </th>
                        <td>
                            {{ $contacto->info_conocer }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contacto.fields.consulta') }}
                        </th>
                        <td>
                            {{ $contacto->consulta }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contacto.fields.descripcion_consulta') }}
                        </th>
                        <td>
                            {{ $contacto->descripcion_consulta }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.contactos.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection