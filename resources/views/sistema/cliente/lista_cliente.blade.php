@extends('layouts.main')
@section('title','Lista clientes')
@section('todo')
<div class="content-wrapper">

    <div class="content-header">
    <div class="container-fluid" id="contenido">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="text-center">
                        <h1>lita de los clientes</h1>

                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="table-responsive">
                        <table class="table  table-hover">
                            <thead class="thead-dark">
                              <tr>
                                <th >#</th>
                                <th >Nombre</th>
                                <th >nacionalidad</th>
                                <th></th>
                                <th></th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach($cliente as $clien)
                                <tr>
                                    <td>{!! $clien->id_cliente !!}</td>
                                    <td>{!! $clien->nom_cli." ".$clien->apellido_cli !!}</td>
                                    <td>{!! $clien->nacionalidad !!}</td>
                                    <td> <a href="#{!! $clien->id_cliente !!}" onclick="ver_cliente('{!! $clien->id_cliente !!}');">ver</a></td>
                                    <td><a href="">editar</a></td>
                                    <td><a href="">eliminar</a></td>

                                </tr>
                                @endforeach

                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>

</div>
@stop
