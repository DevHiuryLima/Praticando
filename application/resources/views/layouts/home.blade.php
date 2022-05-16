@extends('layouts.master.master')

@section('content')
<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Plataforma Digital</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="">Home</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row m-b-0">
                            <h1>Olá, seja bem vindo.</h1>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('templates/assets/libs/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('templates/assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
<script src="{{ asset('templates/assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('templates/dist/js/app.min.js') }}"></script>
<script src="{{ asset('templates/dist/js/app.init.light-sidebar.js') }}"></script>
<script src="{{ asset('templates/dist/js/app-style-switcher.js') }}"></script>
<script src="{{ asset('templates/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
<script src="{{ asset('templates/assets/extra-libs/sparkline/sparkline.js') }}"></script>
<script src="{{ asset('templates/dist/js/waves.js') }}"></script>
<script src="{{ asset('templates/dist/js/sidebarmenu.js') }}"></script>
<script src="{{ asset('templates/dist/js/custom.min.js') }}"></script>
<script src="{{ asset('templates/assets/extra-libs/c3/d3.min.js') }}"></script>
<script src="{{ asset('templates/assets/extra-libs/c3/c3.min.js') }}"></script>
<script src="{{ asset('templates/dist/js/pages/dashboards/dashboard1.js') }}"></script>
@endsection