@extends('layouts.app')
@section('content')
    <div class="container p-5 my-5 border">
        <p class="h1">Crear Empleado</p>
        <form action="/posts" method="POST">
            {{--csrf PERMITE QUE POR RAZONES DE SUGURIDAD ME PERMITE ENVIAR INFORMACION A LARAVEL  --}}
          @csrf
            <div class="row">
              <div class="col">
                <label for="titulo" class="fw-bold">Titulo:</label>
                <input type="text" class="form-control" placeholder="" name="title">
              </div>
              <div class="col">
                <label for="categoria" class="fw-bold">Categoria:</label>
                <input type="text" class="form-control" placeholder="" name="categoria">
              </div>
              <div class="col">
                <label for="apellido" class="fw-bold">Contenido:</label>
                <textarea type="text" class="form-control" placeholder="" name="contenido"></textarea>
                {{-- <input type="text" class="form-control" placeholder="" name="contenido"> --}}
              </div>
            </div>
            {{-- <div class="row gy-3">
              <div class="col">
                <label for="fechaNac" class="fw-bold">Fecha de Nacimiento:</label>
                <input type="date" class="form-control" placeholder="" name="fechaNac">
              </div>
              <div class="col">
                <label for="municipio" class="fw-bold">Municipio:</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Seleccione un municipio</option>
                    <option value="1">La Paz</option>
                    <option value="2">El Alto</option>
                    <option value="3">Viacha</option>
                    <option value="4">Achocalla</option>
                    <option value="5">Palca</option>
                    <option value="6">Laja</option>
                    <option value="7">Pucarani</option>
                    <option value="8">Mecapaca</option>
                  </select>
              </div>
              <div class="col">
                <label for="area" class="fw-bold">Area id:</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Selecione area</option>
                    <option value="1">La Paz</option>
                    <option value="2">El Alto</option>
                  </select>
              </div>
            </div>
            <div class="row gy-3">
              <div class="col">
                <label for="cargo" class="fw-bold">Cargo id:</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Selecione cargo</option>
                    <option value="1">La Paz</option>
                    <option value="2">El Alto</option>
                  </select>
              </div>
              <div class="col">
                <label for="salario" class="fw-bold">Salario:</label>
                <input type="password" class="form-control" placeholder="" name="salario">
              </div>
              <div class="col">
                <label for="fechaIngreso" class="fw-bold">Fecha de ingreso:</label>
                <input type="password" class="form-control" placeholder="" name="fechaIngreso">
              </div>
            </div>
            <div class="row gy-3">
              <div class="col">
                <label for="genero" class="fw-bold">Genero</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Genero</option>
                    <option value="1">Masculino</option>
                    <option value="2">Femenino</option>
                  </select>
              </div>--}}
              <div class="col">
                <button type="submit" class="btn btn-success mt-4" name="crear">Crear</button>
              </div>
            </div> 
          </form>
    </div>
@endsection