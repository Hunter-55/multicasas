var MapMaker = function () {
    var map;
    var markerClickCallbacks;

    var callbackMarkersOnClick = function (pixel) {
        map.forEachFeatureAtPixel(pixel, function (feature, layer) {
            (markerClickCallbacks[feature.getId()])({
                id: feature.getId()
            });
        })
    };

    return {
        createOSMap: function (lon, lat, zoom) {
            //a layer for markers - initially it has no markers
            var markerLayer = new ol.layer.Vector({
                source: new ol.source.Vector({
                    features: [],
                    projection: 'EPSG:4326'
                })
            });

            var baseLayer = new ol.layer.Tile({
                source: new ol.source.OSM()
            });

            map = new ol.Map({
                target: 'map', // The DOM element that will contains the map
                renderer: 'canvas', // Force the renderer to be used
                layers: [baseLayer, markerLayer],
                // Create a view centered on the specified location and zoom level
                view: new ol.View({
                    center: ol.proj.transform([lon, lat], 'EPSG:4326', 'EPSG:3857'),
                    zoom: zoom
                })
            });

            map.on('singleclick', function (evt) {
                callbackMarkersOnClick(evt.pixel);
            });

            markerClickCallbacks = Object();

        }, //ENDOF createOSMap

        addMarker: function (id, lon, lat) {
            //create a point
            var geom = new ol.geom.Point(ol.proj.transform([lon, lat], 'EPSG:4326', 'EPSG:3857'));
            var feature = new ol.Feature(geom);

            feature.setStyle([
                new ol.style.Style({
                    image: new ol.style.Icon(({
                        anchor: [0.5, 1],
                        anchorXUnits: 'fraction',
                        anchorYUnits: 'fraction',
                        opacity: 20,
                        src: './marcador.png'
                    }))
                })
            ]);

            if (id != null) {
                feature.setId(id);
            }

            map.getLayers().item(1).getSource().addFeature(feature);
        }, //ENDOF addMarker

        deleteMarkerById: function (id) {
            var id = map.getLayers().item(1).getSource().getFeatureById(id);
            map.getLayers().item(1).getSource().removeFeature(id);
            delete markerClickCallbacks[id];
        }, //ENDOF deleteMarkerById


        moveMarker: function (id, lon, lat) {
            var feature = map.getLayers().item(1).getSource().getFeatureById(id);
            if (feature != null) {
                feature.setGeometry(new ol.geom.Point(ol.proj.transform([lon, lat], 'EPSG:4326', 'EPSG:3857')));
            } else {
                this.addMarker(id, lon, lat);
            }
        }, //ENDOF moveMarker

        removeAllMarkers: function () {
            map.getLayers().item(1).getSource().clear();
            markerClickCallbacks = Object();
        }, //ENDOF removeAllMarkers

        markerCount: function () {
            return map.getLayers().item(1).getSource().getFeatures().length;
        }, //ENDOF markerCount

        onMarkerSingleClick: function (id, callback) {
            markerClickCallbacks[id] = callback;
        } //ENDOF onMarkerSingleClick

    } //return
};


///////////////////////
mymap = MapMaker();

function generate_points(lat1, lon1, lat2, lon2, pcount) {
    var delta_lat = (lat2 - lat1) / (pcount * 1.0);
    var delta_lon = (lon2 - lon1) / (pcount * 1.0);
    var points = [];

    for (var i = 0; i < pcount; i++) {
        points.push({
            lat: lat1 + delta_lat * i,
            lon: lon1 + delta_lon * i
        })
    }

    points.push({
        lat: lat2,
        lon: lon2
    });
    return points;
}

function animate(points) {
    mymap.addMarker(2005, points[0].lon, points[0].lat);
    var pointIndex = 0;
    var setIntervalId = setInterval(
        function () {
            if (pointIndex < points.length - 1) {
                pointIndex++;
                mymap.moveMarker(2005, points[pointIndex].lon, points[pointIndex].lat);
            } else {
                clearInterval(setIntervalId);
            }

        }, 10);
}