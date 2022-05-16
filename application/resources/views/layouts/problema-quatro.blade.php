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
                            <p class="m-0">Criar um algoritimo com um campo que possa receber apenas números e vírgulas, separe os valores enviados e valide aqueles que são um número válido da Sequência de Fibonacci e imprima os números de forma crescente, conforme o exemplo:</p>
                            <br>
                            <p>CAMPO RECEBE 1,13,55,21,5,83</p>
                            <p>IMPRIME: 1,5,13,21,55</p>
                        </div>

                        <form name="formProblemaQuatro">
                            @csrf
                            <div class="row" id="menssagem">
                                
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <fieldset class="form-group">
                                        <label class="form-label semibold" for="numeros">Insira os números separados por virgula*</label>
                                        <input type="text" name="numeros" placeholder="0,1,2,3,4,5,6,7,8,9" id="numeros" class="form-control" onkeypress="mascara(this, validaNumber)" required="">
                                    </fieldset>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success" style="float: left;">Enviar</button>
                        </form>
                        <br>
                        <br>
                        <div class="alert alert-success text-black p-2">
                            <p><b>Resultado:</b></p>
                            <p class="m-0" id="resolucao">

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
<script>
function validaNumber(numeros) {
    return numeros.replace(/[^0-9\,]/, '');
}
</script>
<script>
 $(function() {
    $('form[name="formProblemaQuatro"]').submit(function(event) {
        event.preventDefault();

        $.ajax({
            url: `{{ route('problema-quatro-resolucao') }}`,
            type: 'POST',
            data: $(this).serialize(),
            dataType: 'json',
            success: function( resposta ) {
            $('#numeros').val('');
            $('#menssagem').empty();
            $('#resolucao').empty();

            $('#menssagem').append(`<div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fas fa-check-circle"></i> Resolvido! Veja o resultado abaixo.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>`);
            $('#resolucao').text(resposta);
            }
    })
    .fail(function(resposta){
        if ((resposta.status == 400) || (resposta.status == 422)) {
            alert(resposta.responseJSON.message);
        } else if (resposta.status == 500) {
            alert('Ocorreu um erro interno!\n\n' + resposta.responseJSON.message);
        } else {
            alert('Ocorreu um erro ao tentar cadastrar!\n\n' + resposta.responseJSON.message);
        }
    });
    })
 });
</script>
@endsection