<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="../css/paciente.css">

<body>
<div class="container">
    <div class="card">
        <div class="card-body">
            <h1>TRIAJE DE PACIENTES</h1>
        </div>
        <div class="card-body">
            <form class="row g-3" action="{{ route('paciente.store') }}" method="post">
                @csrf
                <div class="col-md-5">
                  <label for="inputEmail4" class="form-label">Nombres</label>
                  <input type="text" class="form-control" name="nombres" id="nombres" placeholder="Ingrese Nombres" value="{{ old('nombres') }}">
                  @error('nombres')
                  <small style="color: red">*{{$message}}</small>
                  <br>
                  @enderror
                </div>
                <p id="status" class="lead mt-3 text-light" style="display: none">Escuchando ...</p>
                <div class="col-md-1 forma">
                  <a type="button" class="" title="Iniciar microfono" onclick="grabarVoz(1)" id="iniciar" ><i class="fa fa-microphone icon" aria-hidden="true"></i></a>
                </div>

                <div class="col-md-5">
                  <label for="inputPassword4" class="form-label">Apellidos</label>
                  <input type="text" class="form-control" name="apellidos" id="apellidos" placeholder="Ingrese Apellidos" value="{{ old('apellidos') }}">
                  @error('apellidos')
                        <small style="color: red">*{{$message}}</small>
                        <br>
                   @enderror
                </div>
                <div class="col-md-1 forma2">
                    <a type="button" class="" title="Iniciar microfono" onclick="grabarVoz(2)" id="iniciar2" ><i class="fa fa-microphone icon2" aria-hidden="true"></i></a>

                </div>
                <div class="col-3">
                  <label for="inputAddress" class="form-label">Temperatura</label>
                  <input type="text" class="form-control" name="temperatura" id="temperatura" placeholder="°c" value="{{ old('temperatura') }}">
                  @error('temperatura')
                    <small style="color: red">*{{$message}}</small>
                    <br>
                    @enderror
                </div>
                <div class="col-md-1 formatemperatura">
                    <a type="button" class="" title="Iniciar microfono" onclick="grabarVoz(3)" id="iniciar" ><i class="fa fa-microphone icontemperatura" aria-hidden="true"></i></a>

                </div>
                <div class="col-3">
                  <label for="inputAddress2" class="form-label">Frecuencia Cardiaca</label>
                  <input type="text" class="form-control" name="f_cardiaca" id="f_cardiaca" placeholder="x/min" value="{{ old('f_cardiaca') }}">
                  @error('f_cardiaca')
                    <small style="color: red">*{{$message}}</small>
                    <br>
                    @enderror
                </div>
                <div class="col-md-1 formafcardiaca">
                    <a type="button" class="" title="Iniciar microfono" onclick="grabarVoz(4)" id="iniciar" ><i class="fa fa-microphone iconfcardiaca" aria-hidden="true"></i></a>

                     </div>
                <div class="col-md-3">
                  <label for="inputCity" class="form-label">Peso</label>
                  <input type="text" class="form-control" name="peso" id="peso" placeholder="Kg." value="{{ old('peso') }}">
                  @error('peso')
                    <small style="color: red">*{{$message}}</small>
                    <br>
                    @enderror
                </div>
                <div class="col-md-1 formapeso">
                    <a type="button" class="" title="Iniciar microfono" onclick="grabarVoz(5)" id="iniciar" ><i class="fa fa-microphone iconpeso" aria-hidden="true"></i></a>

                     </div>
                <div class="col-md-2">
                  <label for="inputZip" class="form-label">Talla</label>
                  <input type="text" class="form-control" name="talla" id="talla" placeholder="m." value="{{ old('talla') }}">
                  @error('talla')
                    <small style="color: red">*{{$message}}</small>
                    <br>
                    @enderror
                </div>
                <div class="col-md-1 formatalla">
                    <a type="button" class="" title="Iniciar microfono" onclick="grabarVoz(6)" id="iniciar" ><i class="fa fa-microphone icontalla" aria-hidden="true"></i></a>

                     </div>
                <div class="col-md-2">
                    <label for="inputZip" class="form-label">Presion Arterial</label>
                    <input type="text" class="form-control" name="p_arterial" id="p_arterial" placeholder="x/mmHg" value="{{ old('p_arterial') }}">
                    @error('p_arterial')
                    <small style="color: red">*{{$message}}</small>
                    <br>
                    @enderror
                </div>
                <div class="col-md-1 formaparterial">
                    <a type="button" class="" title="Iniciar microfono" onclick="grabarVoz(7)" id="iniciar" ><i class="fa fa-microphone iconparterial" aria-hidden="true"></i></a>

                     </div>
                <div class="col-md-2">
                    <label for="inputZip" class="form-label">Saturación</label>
                    <input type="text" class="form-control" name="saturacion" id="saturacion" placeholder="%" value="{{ old('saturacion') }}">
                    @error('saturacion')
                    <small style="color: red">*{{$message}}</small>
                    <br>
                    @enderror
                </div>
                <div class="col-md-1 formasaturacion">
                    <a type="button" class="" title="Iniciar microfono" onclick="grabarVoz(8)" id="iniciar" ><i class="fa fa-microphone iconsaturacion" aria-hidden="true"></i></a>

                </div>
                <div class="card">
                    <div class="card-body">
                                <div class="row">
                                <div class="col-6">
                                    <div class="row mb-1">
                                        <label for="inputEmail3" class="col-sm-6 col-form-label">Superficie Corporal: </label>
                                        <div class="col-sm-6">
                                          <input type="text" class="form-control pointer-none"  name="s_corporal" id="s_corporal">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-6 col-form-label">Indice de Masa Corporal(IMC): </label>
                                        <div class="col-sm-6">
                                          <input type="text" class="form-control pointer-none"  name="imc" id="imc">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="row mb-1">
                                        <label for="inputEmail3" class="col-sm-6 col-form-label">Riesgo de Enfermedad: </label>
                                        <div class="col-sm-6">
                                          <input type="text" class="form-control pointer-none"  name="r_enfermedad" id="r_enfermedad">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-6 col-form-label">Clasificación IMC: </label>
                                        <div class="col-sm-6">
                                          <input type="text" class="form-control pointer-none"  name="clasificacion_imc" id="clasificacion_imc">
                                        </div>
                                    </div>
                                </div>

                            </div>
                         </div>
                     </div>

                <div class="col-12">
                  <button type="submit" class="btn btn-primary">Guardar</button>
                  <button class="btn btn-danger" type="reset">Cancelar</button>
                </div>
              </form>
        </div>

</div>
<div class="container">
    <div class="card">
    <div class="card-body">
        <div class="container">
            <div class="row">
                <div class="col titleus">
                    <nav class="text-center p-2">LISTA DE PACIENTES</nav>
                </div>
            </div>
            <div class="table-responsive">
              <table id="datatable1" class="table table-striped table-bordered">
                <thead class="thead-colored thead-dark">
                  <tr>
                    <th>N°</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Temperatura</th>
                    <th>F. Cardiaca</th>
                    <th>Peso</th>
                    <th>Talla</th>
                    <th>P. Arterial</th>
                    <th>Saturación</th>
                    <th>Imc</th>
                    <th>Clasificacion</th>
                    <th>Riesgo</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($paciente as $key=>$pac)
                  <tr>
                  <td>{{ $key+1 }}</td>
                  <td>{{ $pac->nombres }}</td>
                  <td>{{ $pac->apellidos }}</td>
                  <td>{{ $pac->temperatura }}</td>
                  <td>{{ $pac->f_cardiaca }}</td>
                  <td>{{ $pac->peso }}</td>
                  <td>{{ $pac->talla }}</td>
                  <td>{{ $pac->p_arterial }}</td>
                  <td>{{ $pac->s_corporal }}</td>
                  <td>{{ $pac->imc }}</td>
                  <td>{{ $pac->r_enfermedad }}</td>
                  <td>{{ $pac->clasificacion_imc }}</td>
                  <td>
                    <a type="button" class="btn btn-outline-info btn-icon" href="" data-bs-toggle="modal" data-bs-target="#editar-paciente-modal-{{ $pac->id }}" title="Editar"><div><i class="fa fa-edit"></i></div></a>
                    <form action="{{ route('paciente.delete',$pac->id) }}" class="d-inline formulario-eliminar" method="POST">
                      @method('delete')
                      @csrf
                    <button class="btn btn-outline-danger btn-icon"  title="Eliminar"><div><i class="fa fa-trash" ></i></div></button>
                    </form>
                  </td>
              </tr>
              @include('home.edit')
              @endforeach
            </tbody>
              </table>
            </div>
        </div>

    </div>
    </div>
</div>
</div>
<br><script src = "http://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js" defer ></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js" integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="../js/paciente.js"></script>
<script src="../js/recovoz.js"></script>

    @if (session('Guardado') == 'OK')
    <script>
      Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Registro Guardado con exito',
        showConfirmButton: false,
        timer: 2000
      })
    </script>
    @endif

    @if (session('Actualizado') == 'OK')
    <script>
      Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Registro Actualizado con exito',
        showConfirmButton: false,
        timer: 2000
      })
    </script>
    @endif

    @if (session('Eliminado') == 'OK')
    <script>
      Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Registro Eliminado con exito',
        showConfirmButton: false,
        timer: 2000
      })
    </script>
    @endif

    <script>
$('.formulario-eliminar').submit(function(e){
    e.preventDefault();

    Swal.fire({
        title: '¿Estás seguro?',
        text: "Se eliminarán el registro del docente seleccionado",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, Estoy seguro',
        cancelButtonText: 'No, cancelar'
      }).then((result) => {
        if (result.value) {
        //   Swal.fire(
        //     'Deleted!',
        //     'Your file has been deleted.',
        //     'success'
        //   )

        this.submit();
        }
      })

});
    </script>
</body>

</html>
