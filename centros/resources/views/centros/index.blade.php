<x-app-layout>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Encuesta</title>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Encuesta') }}
            </h2>
        </x-slot>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </head>

    <body>
        @include('sweetalert::alert')
    <div class="py-12">
            <!-- <div class="alert alert-danger" role="alert">
                Este es un alerta
            </div> -->
            <div class="container" style="opacity: .9; padding-top:10%;">
                <div class="shadow-lg p-3 mb-5 bg-white rounded rounded-lg border border-white">
                    <!-- <x-jet-welcome /> -->
                    <!-- Formulario -->
                    <div class="container">

                        <form class=" form form-group" id="formu">
                            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                            <input name="idUser" type="text" value="{{ Auth::user()->id }}" style="display: none">
                            <label><strong>Seleccione La Colonia</strong></label>
                            <select required class="form-control form-control-sm"  id="centros" onchange="selectValue()">
                            </select>
                            <label><strong>Escuelas</strong></label>
                            <select required name="escuela_id" class="form-control form-control-sm" id="escuelas">
                            </select>
                            <label><strong>Numero de identidad</strong></label>
                            <input required name="identidad" type="text" class="form-control" id="numId" placeholder="Escribir identidad">
                            <label><strong>Personas agregadas</strong></label>
                            <select required name="cantidad" class="form-control form-control-sm"  id="canPersonas" > Cantidad de personas
                                <option selected value="" disabled >Cantidad de personas</option>
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </form>
                        <br>
                        <button type="submit" style="width: 100%; " onclick="guardar()" id="btnGuardar" class="btn btn-success btn-sm btn-block" >Guardar</button>


                    </div>
                    <!-- Fin Formulario -->
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- jquery.inputmask -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.5/jquery.inputmask.min.js"></script>
        {{-- <script src="{{ asset('template/vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js')}}"></script> --}}

        <script>

            var  selector  = document.getElementById("numId");
            var  im = new Inputmask("9999-9999-99999");
            nunId = im.mask(selector);

            //(estatus())(){};
            (estatus)();

            function estatus() {
                // console.log('datos: ', $("#idPic").serialize());


                $.ajax({
                type:"GET",
                url: "http://10.62.144.245:8000/centro/create",
                contentType: false,
                cache: false,
                processData:false,
                dataType:"json",
                success: function(data){
                    console.log(data);
                    cargo(data);




            //$('#img').attr('src', e.target.result);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    // CierraPopup(modalID);
                    // toastr.error('Problemas con el envio. Vuelva a intentarlo por favor.');
                    console.log(jqXHR, textStatus, errorThrown);
                }
            })
            }
            function cargo(data){
                 var html_select =' <option selected value="" disabled >Seleccione la Colonia </option>';
                 for (var i=0; i<data.length; ++i)
                   html_select += '<option value="'+data[i].id+'" ">'+data[i].nombre +'</option>'

                   $('#centros').html(html_select)
             }


            function selectValue(){
                var idColonia = document.getElementById("centros").value;
                escuela( idColonia);
            }

            function escuela(idColonia) {
                // console.log('datos: ', $("#idPic").serialize());


                $.ajax({
                type:"GET",
                url: "http://10.62.144.245:8000/colonias/escuelas/"+idColonia,
                contentType: false,
                cache: false,
                processData:false,
                dataType:"json",
                success: function(data){
                    console.log("escuela",data[0]);
                    cargoEscuela(data);





            //$('#img').attr('src', e.target.result);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    // CierraPopup(modalID);
                    // toastr.error('Problemas con el envio. Vuelva a intentarlo por favor.');
                    console.log(jqXHR, textStatus, errorThrown);
                }
            })
            }

            function cargoEscuela(data){
                 var html_select =' <option selected value="" disabled >Seleccione la Escuela </option>';
                 for (var i=0; i<data.length; ++i)
                   html_select += '<option value="'+data[i].id+'"">'+data[i].nombre +'</option>'
                   $('#escuelas').html(html_select)
             }


            function guardar() {
                // console.log('datos: ', $("#idPic").serialize());

                var data = new FormData($('#formu').get(0));
                $.ajax({
                type:"POST",
                url: "http://10.62.144.245:8000/centro",
                data: data,
                contentType: false,
                cache: false,
                processData:false,
                dataType:"json",
                success: function(data){
                console.log(data);

                swal("hola");

                },
                error: function (jqXHR, textStatus, errorThrown) {


                    console.log(jqXHR, textStatus, errorThrown);
                }
            })
            }
            </script>


        <script src="https://code.jquery.com/jquery-3.2.1.js"></script>

        <!-- Javascript Bootsrap -->
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    </body>
</html>
</x-app-layout>
