@extends('adminlte::page')

@section('content')
    <div class="container">
        @include('erros._check')
        <div class="row">
            <hr>
            <div class="col-sm-12">

                <div class="col-md-4">
                    <!-- /.info-box -->
                    <div class="info-box bg-green">
                        <span class="info-box-icon"><i class="ion ion-ios-heart-outline"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Imóveis Vendidos</span>
                            <span class="info-box-number">{{\ComercEnergia\Models\GestaoNumero::getMetrica()['vendido']}}</span>

                            <div class="progress">
                                <div class="progress-bar" style="width: 80%"></div>
                            </div>
                            <span class="progress-description">20% Cresceu em 30 Dias</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                    <!-- Info Boxes Style 2 -->
                    <div class="info-box bg-yellow">
                        <span class="info-box-icon"><i class="ion ion-ios-pricetag-outline"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Imóveis Alugados</span>
                            <span class="info-box-number">{{\ComercEnergia\Models\GestaoNumero::getMetrica()['alugado']}}</span>

                            <div class="progress">
                                <div class="progress-bar" style="width: 50%"></div>
                            </div>
                            <span class="progress-description">50% Cresceu em 30 Dias</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                    <div class="info-box bg-aqua">
                        <span class="info-box-icon"><i class="ion-ios-chatbubble-outline"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Imóveis Disponíveis</span>
                            <span class="info-box-number">{{\ComercEnergia\Models\GestaoNumero::getMetrica()['disponivel']}}</span>

                            <div class="progress">
                                <div class="progress-bar" style="width: 40%"></div>
                            </div>
                            <span class="progress-description">40% Cresceu em 30 Dias</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    {{--{{var_dump($data)}}--}}
                </div>
                <div class="col-md-6">
                    <div class="box box-success">
                        <div class="box-header with-border">
                            <h3 class="box-title">Feeds {{ $data['title'] }}</h3>
                            <div class="col-md-12">

                                <div class="media-body">
                                    <div class="clearfix">
                                        <div class="header">
                                            <h3><a href="{{ $data['permalink'] }}">{{ $data['title'] }}</a></h3>
                                        </div>
                                        @foreach ($data['items'] as $item)
                                            <div class="item">
                                                <h3>
                                                    <a href="{{ $item->get_permalink() }}">{{ $item->get_title() }}</a>
                                                </h3>
                                                <p>{!! $item->get_description() !!} </p>
                                                <p>
                                                    <small>Posted on {{ $item->get_date('j F Y | g:i a') }}</small>
                                                </p>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection

@section('js')

@endsection