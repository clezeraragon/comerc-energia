@extends('adminlte::page')

@section('content')
    <div class="container">

        <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
            <div class="box box-solid box-primary">
                <div class="box-header">
                    <h3 class="box-title">Editar Gestao de Numeros</h3>
                </div>
                <div class="box-body">
                    <div class="container">
                        <div class="col-md-6 col-sm-4">
                            {{ Form::open(['route' => ['gestao.update',$results->id],'class' => 'form-horizontal','id' => 'form-create-num']) }}
                            {{--{{ Form::hidden('id',$results->id) }}--}}
                            <div class="form-group">
                                <label>Selecione uma opção</label>
                                {{Form::select('option',
                                 \ComercEnergia\Models\OptionGestaoNumero::getComboxGetao(),
                                  $results->option_gestao_id,
                                  ['placeholder' => 'Selecione uma opcao' , 'class' => 'form-control'])}}

                            </div>

                            <div class="form-group">
                                <label>Digite um valor</label>
                                {{Form::text('number', $results->valor,['id' => 'number','class' => 'form-control input-md','required'])}}
                            </div>
                            <div class="left">
                                <button class="btn btn-primary" type="submit">submit</button>
                                {{--<button class="btn btn-danger" type="reset">Reset</button>--}}
                            </div>
                            {{Form::close()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection

@section('js')
    <script>
        $(document).ready(function () {
            $('#example').DataTable();

            $('#form-create-num')
                .bootstrapValidator({
                    framework: 'bootstrap',
                    icon: {
                        valid: 'glyphicon glyphicon-ok',
                        invalid: 'glyphicon glyphicon-remove',
                        validating: 'glyphicon glyphicon-refresh'
                    },
                    fields: {
                        option: {
                            row: '.form-group',
                            validators: {
                                notEmpty: {
                                    message: 'Este campo é obrigatório!'
                                }
                            }
                        },
                        number: {
                            validators: {
                                notEmpty: {
                                    message: 'Este campo é obrigatório!'
                                }
                            }
                        }
                    }
                })
        });

        $('#number').mask('0.000', {reverse: true});

    </script>
@endsection