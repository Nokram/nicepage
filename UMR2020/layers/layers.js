var wms_layers = [];

var lyr_DepHydro_0 = new ol.layer.Tile({
                            source: new ol.source.TileWMS(({
                              url: "http://localhost:8080/geoserver/UMR-2020/wms?version%3D1.1.0%26layers%3DUMR-2020%3AUMR-2020%26bbox%3D-15033.043733948376%2C6019370.146298862%2C1346105.3951628036%2C7142683.034909542%26width%3D768%26height%3D633%26srs%3DEPSG%3A2154",
    attributions: ' ',
                              params: {
                                "LAYERS": "UMR-2020",
                                "TILED": "true",
                                "VERSION": "1.1.1"},
                            })),
                            title: "Dep+Hydro",
                            opacity: 1.000000,
                            
                            
                          });
              wms_layers.push([lyr_DepHydro_0, 0]);

lyr_DepHydro_0.setVisible(true);
var layersList = [lyr_DepHydro_0];
