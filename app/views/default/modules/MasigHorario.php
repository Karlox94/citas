<div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 login">
                        <h1>Asignar horario</h1>
                        <form role="form" name="formUser">
                          <div class="form-group">
                            <label>Seleccione dia</label>
                            <div class="radio-inline">                              
                                <input type="radio" value="0" name="dia">Lunes                    
                            </div>
                            <div class="radio-inline">
                                <input type="radio" value="1" name="dia">Martes
                            </div>
                            <div class="radio-inline">
                                <input type="radio" value="2" name="dia">Miercoles
                            </div>
                            <div class="radio-inline">
                                <input type="radio" value="3" name="dia">Jueves
                            </div>
                            <div class="radio-inline">
                                <input type="radio" value="4" name="dia">Viernes
                            </div>
                            <div class="radio-inline">
                                <input type="radio" value="5" name="dia">Sábado
                            </div>                     
                          </div>
                          <div class="form-group">
                            <label>Seleccione medico</label>
                            <select class="form-control">
                              <option value="0">Medico 0</option>
                              <option value="1">Medico 1</option>
                              <option value="2">Medico 2</option>
                              <option value="3">Medico 3</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>Seleccione fecha</label>
                            <input type="date" class="form-control ">
                          </div>
                          <div class="form-group">
                            <label>Seleccione hora</label>
                            <input type="time" class="form-control ">
                          </div>
                          <button type="submit" class="btn btn-success">Asignar</button>               
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