<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Encuesta') }}
        </h2>
    </x-slot>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <div class="py-12">
        <!-- <div class="alert alert-danger" role="alert">
            Este es un alerta
        </div> -->
        <div class="container" style="opacity: .9; ">
            <div class="shadow-lg p-3 mb-5 bg-white rounded rounded-lg border border-white">
                <!-- <x-jet-welcome /> -->
                <!-- Formulario -->        
                <div class="container">
                    <form class="form-group">
                        <label><strong>Colonia</strong></label>
                        <input type="text" class="form-control " id="colonia" placeholder="Escribir la colonia">
                        
                        <label><strong>Seleccione escuela</strong></label>
                        <select class="form-control form-control-sm">
                            <option>____ -- ____</option>
                            <option>Escuela 1</option>
                            <option>Escuela 2</option>
                            <option>Escuela 3</option>
                        </select>

                        <label><strong>Numero de identidad</strong></label>
                        <input type="text" class="form-control" id="colonia" placeholder="Escribir identidad">

                        <label><strong>Seleccione cantidad de personas agregadas</strong></label>
                        <select class="form-control form-control-sm">
                            <option>____ -- ____</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                        </select>
                    </form>
                    <br>    
                    <button type="button" class="btn btn-primary btn-sm btn-block" style="width: 100%; ">Guardar</button>
                </div>
                <!-- Fin Formulario -->
            </div>
        </div>
    </div>
    <footer class="bg-light text-center text-lg-start" style="position: fixed; width: 100%; height: 50px; bottom: 0; ">
        <div class="text-center bg-light">
            © 2021 Copyright:
            <a class="text-dark">Educredito</a>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>

    <!-- Javascript Bootsrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</x-app-layout>

