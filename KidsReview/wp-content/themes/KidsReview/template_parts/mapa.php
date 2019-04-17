<div class="container" style="margin-top: 20px;margin-bottom: -50px;">
  <h4 style="text-align: center">MAPA</h4>
            <?php $arr = get_field('map');
            ?>
              <section id="map"></section> 


          <div id="formContent" class="card mb-3" style="max-width: 25rem; padding: 0;" >
            <div class="card-header" style="margin-bottom: 20px; background-color:#a0d995; border-radius: 5px;">Filtrar lugares por su tipo:
            </div>
            <div class="card-body text-dark" style="padding: 0">
                <form action="" id="" style="">
                  <div class="form-group" style="padding-right: 10px; padding-left: 10px;">
                      <select class="form-control form-control-md" id="type"  onchange="filterMarkers();">
                        <option value="">
                             Seleccione tipo
                        </option>
                        <option value="parques">
                             Parques
                        </option>
                        <option value="diversiones">
                            Juegos
                        </option>
                        <option value="museos">
                            Museos
                        </option>
                        <option value="zoologicos">
                           Zoologicos
                        </option>
                        <option value="restaurantes">
                           Restaurantes kids-frendly
                        </option>
                        <option value="planetarios">
                            Planetarios
                        </option>
                        <option value="bibliotecas">
                            Bibliotecas
                        </option>
                    </select>
                  </div>
                </form>
            </div>
          </div>
            
            
        </div>
        
        <script>
            var lugares = <?php echo json_encode($arr); ?>;
            console.log(lugares);
        </script>