@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
    <div class="content">
        <div class="clearfix"></div>
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Lista</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table class="table table-striped table-bordered" cellspacing="0" width="100%" id="table">
                    <thead>
                    <tr>
                        {{--<th>id</th>--}}
                        <th>Usuario</th>
                        <th>Ordenador</th>
                        <th>Clave</th>
                        {{--<th>Acción</th>--}}
                    </tr>
                    </thead>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
    </div>
@endsection
