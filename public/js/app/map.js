
(function($, sigem){
    sigem.Map = {
        initialize : _init
    };

    var viewModel;

    function _init(){
        viewModel = new sigem.viewmodels.MapViewModel(showLayer);
        initControls();
        loadBaseLayers();
        ko.applyBindings(viewModel, $('.app-body')[0]);
    }

    function initControls(){
        
        //create main map
        viewModel.Map = new ol.Map({
            target: 'mainMap',
            view: new ol.View({
              center: [-11270371, 2228861],
              zoom: 11
            })
        });

        enableGeoLocation();

        

        //var tokenData = $('input[name="_token"]').val();
        //$.postJSON('/map/layers',{_token: tokenData}, function(response){
        $.postJSON('/map/layers', null , function(response){
            //console.log(response.data);
            viewModel.Groups(ko.mapping.fromJS(response.data, viewModel.ViewModelMapping)());
            loadAllLayers();
        });
    }

    function loadBaseLayers(){
        var raster = new ol.layer.Tile({
            source: new ol.source.OSM(),
            visible: true
        });

        viewModel.Map.addLayer(raster);
        
    }

    function loadAllLayers(){
       
        /*
        var layer1 = new ol.layer.Tile({
            extent: [-11299922, 2207653, -11210786, 2306788],
            source: new ol.source.TileWMS({
              url: 'http://localhost:8080/geoserver/wms',
              params: {'LAYERS': 'SIGEMWS:anps', 'TILED': true, 'VERSION':'1.1.1' },
              serverType: 'geoserver'
            }),
            opacity: 0.5,
            visible: true
        });

        viewModel.Map.addLayer(layer1);
        */

        viewModel.Groups().forEach(function(g,i){
            /*console.log(g.Id() + '\n');
            console.log(g.Description() + '\n');*/
            viewModel.OpenLayers[i] = [];
            g.Layers().forEach(function(l,j){
                /*console.log(l.Description() + '\n');
                console.log(l.Url() + '\n');
                console.log(l.Params() + '\n');
                console.log(l.ServerType() + '\n');
                console.log(l.Opacity() + '\n');
                console.log(l.Visible() + '\n');
                */

                var paramss = {'LAYERS': l.Params(), 'TILED': true, 'VERSION':'1.1.1' };
                console.log(paramss);
                var layer = new ol.layer.Tile({
                    extent: [-11299922, 2207653, -11210786, 2306788],
                    source: new ol.source.TileWMS({
                      url: l.Url(),
                      params: paramss,
                      serverType: l.ServerType()
                    }),
                    opacity: l.Opacity(),
                    visible: l.Visible()
                });
                viewModel.Map.addLayer(layer);

                //console.log('Create: ['+ i +']'+ '['+ j +']' + '\n');
                
                viewModel.OpenLayers[i][j]= layer;
            });
        });
    }

    function showLayer(index,subindex, status){
        //console.log('Show: ['+ index +']'+ '['+ subindex +']' + '\n');
        var layer = viewModel.OpenLayers[index][subindex];
        layer.setVisible(status);
    }


    
    function enableGeoLocation(){

        viewModel.GeoLocation = new ol.Geolocation({
            tracking: true
        });
        //viewModel.GeoLocation.bindTo('projection', viewModel.Map.getView());

        

        /*
        viewModel.GeoLocation.on('change', function(evt) {
            //save position and set map center
            
            var pos = viewModel.GeoLocation.getPosition();
            viewModel.Map.getView().setCenter(pos);
          
            var iconFeature = new ol.Feature({
              geometry: new ol.geom.Point(pos)
            });
            var vectorSource = new ol.source.Vector({
              features: [iconFeature]
            });
            var vectorLayer = new ol.layer.Vector({
              source: vectorSource
            });
            var iconStyle = new ol.style.Style({
              image: new ol.style.Icon(({
                anchor: [0.5, 46],
                anchorXUnits: 'fraction',
                anchorYUnits: 'pixels',
                opacity: 0.75,
                src: 'favicon.png'
              }))
            });
        });*/
    }

})(jQuery, this.sigem);
