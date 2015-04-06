 <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 login">
                        <h1>Registrar datos de usuario</h1>
                        <form role="form" name="formUser">
                          <div class="form-group">
                            <label>Documento de identidad</label>
                            <input type="text" class="form-control" id="dni"
                                   placeholder="Cedula o Tarjeta de identidad">
                          </div>
                          <div class="form-group">
                            <label>Nombres</label>
                            <input type="password" class="form-control" id="clave" 
                                   placeholder="Primer y segundo nombre">
                          </div>
                          <div class="form-group">
                            <label>Apellidos</label>
                            <input type="password" class="form-control" id="clave" 
                                   placeholder="Primer y segundo apellido">
                          </div>
                          <div class="form-group">
                            <label>Tipo de usuario</label>
                            <div class="radio-inline">
                              <input type="radio" value="medico" name="tipo" onclick="mostrarReferencia();">Medico
                            </div>             
							              <div class="radio-inline">
                              <input type="radio" value="paciente" name="tipo" onclick="mostrarReferencia();">Paciente
                            </div> 
						              </div>
                          <div class="form-group" id="telefono">
                            <label>Telefono</label>
                            <input type="password" class="form-control" id="clave" 
                                   placeholder="Telefono">
                          </div>
                          <div class="form-group" id="tiposangre">
                            <label>Tipo de sangre</label>
                            <input type="password" class="form-control" id="clave" 
                                   placeholder="Tipo sangre">
                          </div>
                          <div class="form-group" id="eps">
                            <label>E.P.S.</label>
                            <input type="password" class="form-control" id="clave" 
                                   placeholder="E.P.S.">
                          </div>
                          <div class="form-group" id="especialidad">
                            <label>Especialidad</label>
                            <input type="password" class="form-control" id="clave" 
                                   placeholder="Medicina general o Odontologia">
                          </div>
                          <button type="submit" class="btn btn-success">Enviar</button>
                        </form>
                        <br>
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Ocultar menú</a>
                    </div>
                </div>
            </div>
            <footer class="col-lg-3">
                Copyright &copy; 2015
            </footer>
        </div>