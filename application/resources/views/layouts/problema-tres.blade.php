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
                            <li class="breadcrumb-item active" aria-current="page">Problema 3</li>
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
                        <h3>Problema 3</h3>
                        <hr>
                        <div class="alert alert-warning text-black p-2">
                            <p class="m-0">Criar um algoritmo que gere uma matriz 5x5 e imprima: toda a matriz, a matriz gerada apenas com os números ímpares e outra só com os números pares.</p>
                        </div>

                        <div class="alert alert-success text-black p-2">

                            @php
                                $i=0;
                                $j=0;
                            @endphp
                            <table class="table table-striped table-bordered display" style="width:100px">
                                <caption>Números pares</caption>
                                @while ($i < 5)     
                                <tr>
                                    @while ($j < 5)
                                    
                                        @php $numero = rand(1, 100); @endphp

                                        @if($numero%2 == 0)
                                            <td>
                                            @php
                                                echo $numero;
                                                $j++;
                                            @endphp
                                            </td>
                                        @endif
                                    @endwhile
                                </tr>

                                @php
                                    $j=0;
                                    $i++;
                                @endphp
                                @endwhile

                            </table>

                            @php
                                $i=0;
                                $j=0;
                            @endphp
                            <table class="table table-striped table-bordered display" style="width:100px">
                                <caption>Números ímpares</caption>
                                @while ($i < 5)     
                                <tr>
                                    @while ($j < 5)
                                    
                                        @php $numero = rand(1, 100); @endphp

                                        @if($numero%2 != 0)
                                            <td>
                                            @php
                                                echo $numero;
                                                $j++;
                                            @endphp
                                            </td>
                                        @endif
                                    @endwhile
                                </tr>

                                @php
                                    $j=0;
                                    $i++;
                                @endphp
                                @endwhile

                            </table>
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