<div class="modal" id="editar-paciente-modal-{{ $pac->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">EDITAR PACIENTE</h6>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
              <form action="{{ route('paciente.update',$pac->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="inputEmail4" class="form-label">Nombres</label>
                            <input type="text" class="form-control" name="nombres" id="nombres" value="{{ $pac->nombres }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="inputapellido" class="form-label">Apellidos</label>
                            <input type="text" class="form-control" name="apellidos" id="apellidos" value="{{ $pac->apellidos }}">
                        </div>
                    </div>
                      <div class="col-4">
                        <div class="form-group">
                            <label for="inputAddress" class="form-label">Temperatura</label>
                            <input type="text" class="form-control" name="temperatura" id="temperatura" placeholder="°C" value="{{ $pac->temperatura }}">
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="form-group">
                            <label for="inputAddress2" class="form-label">Frecuencia Cardiaca</label>
                            <input type="text" class="form-control" name="f_cardiaca" id="f_cardiaca" placeholder="" value="{{ $pac->f_cardiaca }}">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                            <label for="inputCity" class="form-label">Peso</label>
                            <input type="text" class="form-control" name="peso" id="peso" value="{{ $pac->peso }}">
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="form-group">
                            <label for="inputZip" class="form-label">Talla</label>
                            <input type="text" class="form-control" name="talla" id="talla" value="{{ $pac->talla }}">
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="form-group">
                            <label for="inputZip" class="form-label">Presion Arterial</label>
                            <input type="text" class="form-control" name="p_arterial" id="p_arterial" value="{{ $pac->p_arterial }}">
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="form-group">
                            <label for="inputZip" class="form-label">Saturación</label>
                            <input type="text" class="form-control" name="saturacion" id="saturacion" value="{{ $pac->saturacion }}">
                        </div>
                      </div>

            </div><!-- modal-body -->

              <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
              </div>
          </form>
        </div>
    </div><!-- modal-dialog -->
</div><!-- modal -->
