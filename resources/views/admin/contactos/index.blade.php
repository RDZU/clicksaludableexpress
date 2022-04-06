@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('cruds.contacto.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Contacto">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.contacto.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.contacto.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.contacto.fields.email') }}
                        </th>
                        <th>
                            {{ trans('cruds.contacto.fields.telefono') }}
                        </th>
                        <th>
                            {{ trans('cruds.contacto.fields.info_conocer') }}
                        </th>
                        <th>
                            {{ trans('cruds.contacto.fields.consulta') }}
                        </th>
                        <th>
                            {{ trans('cruds.contacto.fields.descripcion_consulta') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($contactos as $key => $contacto)
                        <tr data-entry-id="{{ $contacto->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $contacto->id ?? '' }}
                            </td>
                            <td>
                                {{ $contacto->name ?? '' }}
                            </td>
                            <td>
                                {{ $contacto->email ?? '' }}
                            </td>
                            <td>
                                {{ $contacto->telefono ?? '' }}
                            </td>
                            <td>
                                {{ $contacto->info_conocer ?? '' }}
                            </td>
                            <td>
                                {{ $contacto->consulta ?? '' }}
                            </td>
                            <td>
                                {{ $contacto->descripcion_consulta ?? '' }}
                            </td>
                            <td>
                                @can('contacto_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.contactos.show', $contacto->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan


                                @can('contacto_delete')
                                    <form action="{{ route('admin.contactos.destroy', $contacto->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('contacto_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.contactos.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-Contacto:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection