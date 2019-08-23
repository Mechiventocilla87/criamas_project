<hr class="linea-separadora">
<div class="container traslado">
    <h3>Trasladamos a tu amigo de cuatro patitas</h3>
    <p>Revisa nuestros viajes, y chequea todos nuestros variados destinos, llegamos a donde vos necesites</p>
    <!-- ESTA ROW ES LA FILA GENERAL QUE CONTIENE LAS DOS SECCIONES IZQ Y DERE -->
    <!-- INICIO DEL FORM / TODO ESTA METIDO DENTRO DE ESTA ETIQUETA -->
    <form action="<?php echo base_url('index.php/welcome/enviar');?>" method="post">
        <div class="row">
            <!-- SECCION IZQUIERDA:ESTA COLUMNA CONTIENE EL FILTRO BUSCADOR -->
            <div class="col-sm seccion-izq">
                <p class="bold">Con nuestro apoyo, podrán tener vacaciones juntos.</p>
                <label for="tipo_destino" class="bold">Seleccione su Destino</label>
                <select name="tipo_destino" id="tipo_destino" onchange="TipoDestino();">
                    <optgroup label="Seleccione">
                        <option disabled selected>Seleccione</option>
                        <option value="nacional">Nacional</option>
                        <option value="internacional">Internacional</option>
                    </optgroup>
                </select>
            </div>

            <!-- SECCION DERECHA: ESTA COLUMNA CONTIENE RESULTADOS DE LA BUSQUEDA DEL FILTRO -->
            <div class="col-sm seccion-dere">

                <!-- ESTA ROW ES LA FILA QUE CONTIENE DOS COLUMNAS QUE MUESTRAN LAS PROVINCIAS Y LAS FECHAS -->

                <div class="row hide nacionales">
                    <div class="row">
                        <div class="col-sm">
                            <p class="bold">Tu consulta es valiosa para nosotros! </p>
                            <p class="bold">¿A Donde quieres que llevemos a tu peludo amigo?:</p>
                        </div>

                    </div>

                    <div class="ciudad_nac col-sm">

                        <label for="provincias"> Provincia</label>
                        <select name="provincias" id="provincias">
                            <optgroup label="Provincias">
                                <option disabled selected>Seleccione</option>
                                <option value="bsas" title="Buenos Aires: Capital: La Plata">Buenos Aires</option>
                                <option value="catamarca">Catamarca</option>
                                <option value="chaco">Chaco</option>
                                <option value="chubut">Chubut</option>
                                <option value="cordoba">Cordoba</option>
                                <option value="corriente">Corrientes</option>
                                <option value="entrer">Entre Ríos</option>
                                <option value="formosa">Formosa</option>
                                <option value="jujuy">Jujuy</option>
                                <option value="pampa">La Pampa</option>
                                <option value="rioja">La Rioja</option>
                                <option value="mendoza">Mendoza</option>
                                <option value="misiones">Misiones</option>
                                <option value="neuquen">Neuquen</option>
                                <option value="rioN">Río Negro</option>
                                <option value="salta">Salta</option>
                                <option value="sanJ">San Juan</option>
                                <option value="sanl">San Luis</option>
                                <option value="santac">Santa Cruz</option>
                                <option value="santaf">Santa Fe</option>
                                <option value="santi">Santiago del Estero</option>
                                <option value="tierra">Tierra del Fuego</option>
                                <option value="tucuman">Tucuman</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="fecha_nac col-sm">
                        <label for="fecha_nac" > Mes: </label>
                        <select name="mes_nac" id="mes_nac">
                            <optgroup label="Meses">
                                <option selected disabled>Seleccione</option>
                                <option value="enero">Enero</option>
                                <option value="feb">Febrero</option>
                                <option value="mar">Marzo</option>
                                <option value="abr">Abril</option>
                                <option value="may">Mayo</option>
                                <option value="jun">Junio</option>
                                <option value="jul">Julio</option>
                                <option value="ago">Agosto</option>
                                <option value="sep">Septiembre</option>
                                <option value="oct">Octubre</option>
                                <option value="nov">Noviembre</option>
                                <option value="dic">Diciembre</option>
                            </optgroup>
                        </select>
                    </div>
                </div>

                <!-- ESTA ROW MUESTRA EL RESUL DE INTERNACIONAL -->
                <div class="row hide paises">
                    <div class="col-sm ">
                        <p class="bold">Tu consulta es valiosa para nosotros! </p>
                        <label for="paises" class="bold">¿A Donde quieres que llevemos a tu peludo amigo?:</label>
                        <select name="pais" id="pais" class="custom-select" click="PaisesInter();">
                            <optgroup label=Paises>
                                <option disabled selected>Seleccione</option>
                                <option value="sura">Sudamerica</option>
                                <option value="eur">Europa</option>
                                <option value="uru">Uruguay</option>
                                <option value="rio">Río de Janeiro</option>
                                <option value="mex">México</option>
                                <option value="la">Los Angeles</option>
                                <option value="bog">Bogota</option>
                                <option value="chile">Santiago de Chile</option>
                                <option value="esp">España</option>
                                <option value="lima">Lima</option>
                            </optgroup>
                        </select>

                    </div>
                </div>
                <div class="row inter paises hide">
                    <div class="col-sm table-responsive">
                        <table class="table table-bordered">
                            <thead class="thead-light">
                                <tr>
                                    <th class="scope">Día</th>
                                    <th class="scope">Mes</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="fechaD" id="fechaD"></td>
                                    <td class="fechaM" id="fechaM"></td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="row hide formulario">
                    <div class="col-sm">
                        <p class="btn btn-outline-danger">Ingrese su datos luego de seleccionar su destino</p>

                        <div class="form-row">
                            <div class="form-group col-sm-6">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" id="mail" aria-describedby="nombreHelp" placeholder="Mi Nombre es">
                                <small id="nombreHelp" class="form-text text-muted">Ingrese su Nombre</small>
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="mail">Email</label>
                                <input type="email" class="form-control" id="mail" aria-describedby="emailHelp" placeholder="Mi e-mail es">
                                <small id="emailHelp" class="form-text text-muted">alguien@algo.com</small>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="form-group col-sm-6">
                                <label for="raza">Raza</label>
                                <select name="raza" id="raza">
                                    <optgroup label="Raza">
                                        <option disable selected>Seleccione</option>
                                        <option value="Mestizo">Mestizo</option>
                                        <option value="Beagle">Beagle</option>
                                        <option value="Dogo Argetino">Dogo Argetino</option>
                                        <option value="Boston Terrier">Boston Terrier</option>
                                        <option value="Bulldog Frances">Bulldog Frances</option>
                                        <option value="Caniche Mini">Caniche Mini</option>
                                        <option value="Chihuahua">Chihuahua</option>
                                        <option value="Caniche Rojo">Caniche Rojo</option>
                                        <option value="Baset Hound">Baset Hound</option>
                                        <option value="Dogo Burdeo">Dogo Burdeo</option>
                                        <option value="Fox Terrier">Fox Terrier</option>
                                        <option value="Gran Danes">Gran Danes</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="sexo">Sexo</label>
                                <select name="sexo" id="sexo">
                                    <optgroup label="Sexo">
                                        <option disable selected>Seleccione</option>
                                        <option value="hembra">Hembra</option>
                                        <option value="macho">Macho</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-sm-4">
                                <label for="tamaño">Tamaño</label>
                                <input type="text" class="form-control" id="tamaño" placeholder="cm">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="peso">Peso</label>
                                <input type="text" class="form-control" id="peso" placeholder="Kg">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="edad">Edad</label>
                                <input type="number" class="form-control" id="edad" placeholder="00">
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-danger" id="btnSendtras">Enviar</button>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </form>
</div>




<!-- <div class="travels">
    <h4 class="title-trav">Próximos viajes</h4>
    <div class="div-trav">
        <label for="trasOpc">Elija un destino</label>
        <select name="trasOpc" id="trasOpc" class="select" onchange="ShowSelected();">
            <optgroup>
                <option selected disabled>Seleccione</option>
                <option value="nacional" name="nacional">Nacional</option>
            </optgroup>
        </select>
    </div>
    <div class="container red hide ">
        <div class="row">
            <div class="col-sm">
                <label for="fecha">Fecha: 
                    
                </label>
            </div>
            <div class="col-sm">
                One of three columns
            </div>
        </div>
    </div>

</div> -->
