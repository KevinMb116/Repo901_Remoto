@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Pedido
@endsection

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica Laravel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Pedido</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('pedidos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('pedido.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
