@extends ('layouts.map.app-template')

@section('content')
    <div id='mainMap' style="width: 100%; height: 100%; position:fixed">
        
    </div>
@endsection



@section('viewscripts')
<!--<script src="http://openlayers.org/en/v3.16.0/build/ol.js"></script>-->

<script src="http://openlayers.org/en/latest/build/ol.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/proj4js/2.4.4/proj4.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.2.61/jspdf.min.js"></script>

<script src= "{{ asset('js/viewModels/mapViewModel.js') }}"></script>
<script src= "{{ asset('js/app/map.js') }}"></script>

<script>

/*
    var raster = new ol.layer.Tile({
          source: new ol.source.OSM()
        });

    var layers = [
        raster,
        //-11299922.450112,2207653.2407562,-11260786.691635,2246788.9992328
        //new ol.layer.Tile({
        //  extent: [-11299922, 2207653, -11241786, 2306788],
        //  source: new ol.source.TileWMS({
        //    url: 'http://187.195.19.245/geoserver/wms',
        //    params: {'LAYERS': 'SIGEM:limite_municipal', 'TILED': true, 'STYLES':'LIMITE_MUNICIPAL' },
        //    serverType: 'geoserver'
        //  }),
        //  opacity: 0.5,
        //  visible: true
        //}),
        new ol.layer.Tile({
          extent: [-11299922, 2207653, -11241786, 2306788],
          source: new ol.source.TileWMS({
            url: 'http://localhost:8080/geoserver/wms',
            params: {'LAYERS': 'SIGEMWS:zonificacion_secundaria', 'TILED': false, 'VERSION':'1.1.1', 'STYLES':'line' },
            serverType: 'geoserver'
          }),
          opacity: 0.5,
          visible: true
        }),
        new ol.layer.Tile({
          extent: [-11299922, 2207653, -11210786, 2306788],
          source: new ol.source.TileWMS({
            url: 'http://localhost:8080/geoserver/wms',
            params: {'LAYERS': 'SIGEMWS:anps', 'TILED': true, 'VERSION':'1.1.1' },
            serverType: 'geoserver'
          }),
          opacity: 0.5,
          visible: true
        }),
        new ol.layer.Image({
          extent: [-13884991, 2870341, -7455066, 6338219],
          source: new ol.source.ImageWMS({
            url: 'https://ahocevar.com/geoserver/wms',
            params: {'LAYERS': 'topp:states'},
            ratio: 1,
            serverType: 'geoserver'
          })
        })
      ];
    var map = new ol.Map({
        layers: layers,
        target: 'mainMap',
        view: new ol.View({
          center: [-11270371, 2227161],
          zoom: 10
        })
    });

*/
    $(document).ready(function() {
        sigem.Map.initialize();
    });

</script>
    
@endsection