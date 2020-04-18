<?php
  $title="Beranda"; 
  $filejs="berandajs";
?> <!-- Judul Halaman -->

 <?=content_open('Peta Kacamatan Losari')?><!-- Judul Konten -->
 
          <div class="card-body p-0">
                <div class="table-responsive">
                  <div id="mapid" style=" height: 70vh;"></div>
                   <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js" 
                     integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="
                     crossorigin=""></script>

                      <script src="<?=assets()?>js/leaflet-panel-layers-master/src/leaflet-panel-layers.js"></script>
                      <script src="<?=assets()?>js/leaflet.ajax.js"></script>

                     <script>
               
                  var map = L.map('mapid').setView([-6.8447429,108.850007], 11);

                  var layerkita=L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                      maxZoom: 25,
                      attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                        '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                        'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                      id: 'mapbox.streets'
                      });
                  map.addLayer(layerkita);
                      


    function iconByName(name) {
    return '<i class="icon" style="background-color:'+name+';border-radius:50%"></i>';
    }

    function featureToMarker(feature, latlng) {
      return L.marker(latlng, {
        icon: L.divIcon({
          className: 'marker-'+feature.properties.amenity,
          html: iconByName(feature.properties.amenity),
          iconUrl: '../images/markers/'+feature.properties.amenity+'.png',
          iconSize: [25, 41],
          iconAnchor: [12, 41],
          popupAnchor: [1, -34],
          shadowSize: [41, 41]
        })
      });
    }

    var baseLayers = [
      {
        name: "OpenStreetMap",
        layer: layerkita
      },
      {
        name: "OpenCycleMap",
        layer: L.tileLayer('http://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
      },
      {
        name: "Outdoors",
        layer: L.tileLayer('http://{s}.tile.thunderforest.com/outdoors/{z}/{x}/{y}.png')
      }
    ];


                      function style(feature) {
                        return {
                          weight: 1,
                          opacity: 1,
                          color: 'white',
                          dashArray: '3',
                          fillOpacity: 0.7,
                          fillColor: getColor(feature.properties.density)
                        };
                      }
                    function highlightFeature(e) {
                        var layer = e.target;

                        layer.setStyle({
                          weight: 3,
                          color: '#666',
                          dashArray: '',
                          fillOpacity: 0.7
                        });

                        if (!L.Browser.ie && !L.Browser.opera && !L.Browser.edge) {
                          layer.bringToFront();
                        }

                      }



                      function resetHighlight(e) {
                        var layer = e.target;

                        layer.setStyle({
                          weight: 2,
                          opacity: 1,
                          color: 'white',
                          dashArray: '3',
                          fillOpacity: 0.7
                        });
                      }

                      function zoomToFeature(e) {
                        map.fitBounds(e.target.getBounds());
                      }

                      function onEachFeature(feature, layer) {
                        layer.on({
                          mouseover: highlightFeature,
                          mouseout: resetHighlight,
                          click: zoomToFeature
                        });
                      }

    <?php 
    include "koneksi.php";
    $data = mysqli_query($connection,"SELECT * FROM desa ORDER BY id_desa ");
    while ($d = mysqli_fetch_array($data)) {
      ?>
          var myStyle<?=$d['id_desa']?>={
              "color":"white",
              "weight":2,
              "dashArray": '3',
              "fillOpacity": 0.7,
              "fillColor": "<?=$d['warna']?>"
          }
      <?php
      $arraydes[]='{
        name: "'.str_replace('_', ' ', $d['nama_desa']).'",
        icon: iconByName("'.$d['warna'].'"),
        layer:  new L.GeoJSON.AJAX(["assets/geojson/'.$d['nama_desa'].'.geojson"] ,{onEachFeature:onEachFeature,style:myStyle'.$d['id_desa'].',pointToLayer: featureToMarker }).addTo(map).bindPopup("<b>Desa '.$d['nama_desa'].' </b><br>Luas : '.$d['luas'].' ha<br>Luas Pemukiman : '.$d['bangunan'].' ha<br>Luas Kebun : '.$d['kebun'].' ha<br>Luas Hutan Negara: '.$d['hutan_negara'].' ha<br>Luas Tambak : '.$d['tambak'].' ha<br>Ketinggian Dari Permukaan Laut : '.$d['mdpl'].' mdpl<br>")
      }';
    }
      # code...
    
      
  
     ?>

    var overLayers = [
     <?=implode(',', $arraydes);?>
    ];

    var panelLayers = new L.Control.PanelLayers(baseLayers, overLayers);

    map.addControl(panelLayers);
  </script>
                            
                          </div>
                        </div>
 <?=content_close() ?>