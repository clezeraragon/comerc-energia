@extends('adminlte::page')

@section('content')
    <div class="container">
        @include('erros._check')
    <div class="row">
        <hr>
        <div class="col-sm-12">
            <div class="col-md-7">

            </div>

            <div class="col-sm-4 col-sm-offset-0 col-xs-10 col-xs-offset-2 col-md-6 col-md-offset-0">
                <a href="{{route('dashboard')}}" type="button" class="btn btn-primary">Dashboard</a>
                <a href="{{route('gestao.create')}}" type="button" class="btn btn-success"> <strong>+</strong> Novo Número</a>
            </div>
        </div>
        <br>
        <br>
        <br>
        <table id="grid-ajax-gestao" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>ID</th>
                <th>Titulo</th>
                <th>Valor</th>
                <th>Data/Hora</th>
                <th>Ações</th>
            </tr>
            </thead>
            <tfoot>
            </tbody>
        </table>
    </div>
    </div>

@endsection

@section('js')
    <script src="{{asset('/js/datatable_responsive.js')}}"></script>
    <script>
        $(document).ready(function() {
            $('#grid-ajax-gestao').DataTable({
                "oLanguage": {
                    "sProcessing":   "Processando...",
                    "sLengthMenu":   "Mostrar _MENU_ registros",
                    "sZeroRecords":  "Não foram encontrados resultados",
                    "sInfo":         "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                    "sInfoEmpty":    "Mostrando de 0 até 0 de 0 registros",
                    "sInfoFiltered": "",
                    "sInfoPostFix":  "",
                    "sSearch":       "Buscar:",
                    "sUrl":          "",
                    "oPaginate": {
                        "sFirst":    "Primeiro",
                        "sPrevious": "Anterior",
                        "sNext":     "Seguinte",
                        "sLast":     "Último"
                    }
                },
                serverSide: true,
                responsive: true,
                processing: true,
                ajax: '{{route('gestao.ajax.grid')}}',
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'option_gestao_numero.name', name: 'option_gestao_numero.name'},
                    {data: 'valor', name: 'valor'},
                    {data: 'created_at', name: 'created_at'},
                    {data: 'action', name: 'action', orderable: false, searchable: false}
                ]
            });
        } );
    </script>
    @endsection