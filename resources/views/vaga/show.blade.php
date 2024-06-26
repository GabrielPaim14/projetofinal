<!DOCTYPE html>
@extends('layout')

@section('content')
        <div class="row">
            <div class="col-lg-12 margin-tb">
                    <div clas="pull-left">
                        <h2>Visualizar Vaga</h2>
                    </div>
                    <div class="pull=right">
                        <a class="btn btn-primary"
                            href="{{ route('vaga.index') }}"> voltar</a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                       <strong>Título:</strong>
                       {{ $vaga->titulo}}
                    </div>
                </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                    <strong>Descrição:</strong>
                       {{ $vaga->descricao}}   
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                    <strong>Status:</strong>
                    {{ $vaga->status }}
                </div>
            </div>
        </div>

@endsection