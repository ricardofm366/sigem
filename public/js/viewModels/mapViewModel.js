this.sigem.viewmodels.MapViewModel = function(_showLayer){
    var self = this;
    this.Groups = ko.observableArray();
    this.OpenLayers = {};

    this.Map = undefined;//openlayers map
    //this.View = undefined;//openlayers main view
    this.GeoLocation = undefined;

    function Data(data) {
        ko.mapping.fromJS(data, {}, this);
    }
    
    function Layers(data) {
        ko.mapping.fromJS(data, {}, this);
    }

    this.ViewModelMapping = {
        create: function(options) {
            //console.log('Data');
            //console.log(options.data);
            return new Data(options.data);
        },
        Layers: function(options) {
           // console.log('Layers');
            //console.log(options.data);
            return new Layers(options.data);
        },
    }

    this.ShowOrHideLayer = function (data, index, subindex){
        _showLayer(index,subindex, data.Visible());
        return true;
    }

};