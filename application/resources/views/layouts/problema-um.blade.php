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
                            <li class="breadcrumb-item">
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Problema 1</li>
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
                        <h3>Problema 1</h3>
                        <hr>
                        <div class="alert alert-warning text-black p-2">
                            <p class="m-0">Chico tem 1,50m e cresce 2 centímetros por ano, enquanto Juca tem 1,10m e cesce 3 centímetros por ano. Construa um algoritmo que calcule e imprima quantos anos serão necessários para que Juca seja maior que Chico.</p>
                        </div>

                        <div class="alert alert-success text-black p-2">
                            <p class="m-0">
                                @php
                                    $alturaChico = 150;
                                    $alturaJuca = 110;
                                    $anos = 0;                                
                                @endphp
                                
                                @while ($alturaJuca <= $alturaChico)
                                    @php
                                        $alturaChico += 2;
                                        $alturaJuca += 3;
                                        $anos++;
                                    @endphp
                                @endwhile

                                @php
                                    echo "Serão necessário $anos Anos para que Juca seja maior do que Chico.";
                                @endphp
                            </p>
                        </div>
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
<script>
    $(function() {
        "use strict";
        $("#main-wrapper").AdminSettings({
            Theme: false, // this can be true or false ( true means dark and false means light ),
            Layout: 'vertical',
            LogoBg: 'skin5', // You can change the Value to be skin1/skin2/skin3/skin4/skin5/skin6 
            NavbarBg: 'skin5', // You can change the Value to be skin1/skin2/skin3/skin4/skin5/skin6
            SidebarType: 'mini-sidebar', // You can change it full / mini-sidebar / iconbar / overlay
            SidebarColor: 'skin6', // You can change the Value to be skin1/skin2/skin3/skin4/skin5/skin6
            SidebarPosition: false, // it can be true / false ( true means Fixed and false means absolute )
            HeaderPosition: false, // it can be true / false ( true means Fixed and false means absolute )
            BoxedLayout: false, // it can be true / false ( true means Boxed and false means Fluid ) 
        });
    });
</script>

<script src="{{ asset('templates/dist/js/app-style-switcher.js') }}"></script>
<script src="{{ asset('templates/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
<script src="{{ asset('templates/assets/extra-libs/sparkline/sparkline.js') }}"></script>
<script src="{{ asset('templates/dist/js/waves.js') }}"></script>
<script src="{{ asset('templates/dist/js/sidebarmenu.js') }}"></script>
<script src="{{ asset('templates/dist/js/custom.min.js') }}"></script>
<script src="{{ asset('templates/assets/libs/chartist/dist/chartist.min.js') }}"></script>
<script src="{{ asset('templates/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js') }}"></script>
<script src="{{ asset('templates/assets/extra-libs/c3/d3.min.js') }}"></script>
<script src="{{ asset('templates/assets/extra-libs/c3/c3.min.js') }}"></script>
<script src="{{ asset('templates/assets/libs/chart.js/dist/Chart.min.js') }}"></script>
<script src="{{ asset('templates/dist/js/pages/dashboards/dashboard1.js') }}"></script>
<script src="{{ asset('templates/assets/extra-libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('templates/dist/js/pages/datatable/datatable-basic.init.js') }}"></script>
@endsection