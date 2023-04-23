var activeInfoWindow;
var markers = [];

function initMap() {

    var opt = {

        center: { lat: 44.58643148068905, lng: 33.49257426439605 },

        zoom: 13,

        maxZoom: 20,

        disableDefaultUI: true,

        gestureHandling: 'greedy',

        styles: [

            {

                "featureType": "all",

                "elementType": "all",

                "stylers": [

                    {

                        "invert_lightness": true

                    },

                    {

                        "lightness": "15"

                    },

                    {

                        "saturation": "-100"

                    },

                    {

                        "hue": "#ff1a00"

                    }

                ]

            },

            {

                "featureType": "road",

                "elementType": "labels.icon",

                "stylers": [

                    {

                        "visibility": "off"

                    }

                ]

            },

            {

                "featureType": "administrative.country",

                "elementType": "geometry",

                "stylers": [

                    {

                        "color": "#ffffff"

                    }

                ]

            },

            {

                "featureType": "administrative.country",

                "elementType": "labels.text",

                "stylers": [

                    {

                        "color": "#ffffff"

                    },

                    {

                        "weight": "0.01"

                    }

                ]

            },

            {

                "featureType": "administrative.locality",

                "elementType": "labels.text",

                "stylers": [

                    {

                        "color": "#ffffff"

                    },

                    {

                        "weight": "0.01"

                    }

                ]

            },

            {

                "featureType": "administrative.land_parcel",

                "elementType": "all",

                "stylers": [

                    {

                        "visibility": "on"

                    }

                ]

            },

            {

                "featureType": "landscape",

                "elementType": "geometry.fill",

                "stylers": [

                    {

                        "color": "#004aa8"

                    }

                ]

            },

            {

                "featureType": "landscape",

                "elementType": "geometry.stroke",

                "stylers": [

                    {

                        "color": "#0b77ff"

                    }

                ]

            },

            {

                "featureType": "landscape.natural",

                "elementType": "geometry",

                "stylers": [

                    {

                        "color": "#0b77ff"

                    }

                ]

            },

            {

                "featureType": "landscape.natural.terrain",

                "elementType": "geometry",

                "stylers": [

                    {

                        "color": "#00b9d7"

                    }

                ]

            },

            {

                "featureType": "poi",

                "elementType": "all",

                "stylers": [

                    {

                        "visibility": "off"

                    },

                    {

                        "lightness": "0"

                    }

                ]

            },

            {

                "featureType": "poi.park",

                "elementType": "geometry",

                "stylers": [

                    {

                        "color": "#ee4747"

                    }

                ]

            },

            {

                "featureType": "poi.school",

                "elementType": "geometry.fill",

                "stylers": [

                    {

                        "color": "#7a0000"

                    }

                ]

            },

            {

                "featureType": "poi.sports_complex",

                "elementType": "geometry",

                "stylers": [

                    {

                        "color": "#06dbd8"

                    }

                ]

            },

            {

                "featureType": "road.highway",

                "elementType": "geometry",

                "stylers": [

                    {

                        "color": "#00295c"

                    }

                ]

            },

            {

                "featureType": "road.highway",

                "elementType": "labels.text",

                "stylers": [

                    {

                        "visibility": "off"

                    }

                ]

            },

            {

                "featureType": "road.arterial",

                "elementType": "geometry",

                "stylers": [

                    {

                        "color": "#003a83"

                    }

                ]

            },

            {

                "featureType": "road.arterial",

                "elementType": "labels.text",

                "stylers": [

                    {

                        "visibility": "off"

                    }

                ]

            },

            {

                "featureType": "road.local",

                "elementType": "geometry",

                "stylers": [

                    {

                        "color": "#0b77ff"

                    }

                ]

            },

            {

                "featureType": "road.local",

                "elementType": "labels.text",

                "stylers": [

                    {

                        "visibility": "off"

                    }

                ]

            },

            {

                "featureType": "transit.line",

                "elementType": "geometry",

                "stylers": [

                    {

                        "visibility": "off"

                    },

                    {

                        "color": "#a57474"

                    }

                ]

            },

            {

                "featureType": "transit.station.airport",
                "elementType": "geometry.fill",
                "stylers": [{
                    "color": "#b7baab"
                }]

            },

            {
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#00277b"
                }]
            }

        ]

    };

    var activeInfoWindow;

    var map = new google.maps.Map(document.getElementById('map'), opt);



    // var latitude_of_coordinate = "";
    // var longitude_of_coordinate = "";
    // var name_of_product = "";
    // var price_of_product = "";
    // var image = "";
    $(document).ready(function() {

        receiver_markers(map);

        // var m = markers;
        // var l = m.length
        // console.log(m, l, 'markers')
        // for (var i = 0; i < l; i++){
        //     console.log(markers[i])
        //     // addMarker(markers[i]);

        // }


    })

}

function addMarker(properties, map) {



    var marker = new google.maps.Marker({

        position: properties.coordinates,

        map: map,

        size: properties.size,

    });



    if (properties.image)

    {

        marker.setIcon(properties.image);

    }



    if (properties.info)

    {

        var InfoWindow = new google.maps.InfoWindow({

            content: properties.info

        });





        marker.addListener('click', function() {

            if (activeInfoWindow) { activeInfoWindow.close(); }

            InfoWindow.open(map, marker);

            activeInfoWindow = InfoWindow;

        });

    }



    map.addListener('click', function() {

        if (activeInfoWindow) { activeInfoWindow.close(); }

    });
}


function receiver_markers(map) {

    $.ajax({
        url: ajaxUrl,
        type: 'POST',
        data: { action: 'recive_business_products' },
        success: function(response) {

            $.each(response.Content, function(key, value) {
                markers.push(value);
                addMarker(value, map)
            });

        }
    });
}