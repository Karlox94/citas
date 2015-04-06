<div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 login">
                        <h1>Buscar paciente</h1>
                        <form role="form" name="formUser">
                          <div class="form-group">
                            <label>Ingrese DNI</label>                             
                            <input class="form-control" type="text" placeholder="Digite numero de identificacion del paciente" name="dni"> <br>
                         <button type="submit" class="btn btn-success">Buscar</button>                                       
                        </form>
                        <form role="form">
                          <div class="division">
                            <table class="table table-hover table-bordered">
                              <thead>
                                <tr>
                                  <td>Id</td>
                                  <td>DNI</td>
                                  <td>Nombres</td>
                                  <td>Apellidos</td>
                                  <td>Modificar</td>
                                  <td>Eliminiar</td>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>1</td>
                                  <td>1065003539</td>
                                  <td>carlos antonio</td>
                                  <td>salcedo bello</td>
                                  <td><a href="modificarPaciente.html">Modificar</a></td>
                                  <td><a href="#">Eliminar</a></td>
                                </tr>                                
                              </tbody>
                            </table>
                          </div>
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