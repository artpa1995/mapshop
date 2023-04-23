var activeInfoWindow; 

function initMap() {

    var opt = {

        center: {lat:44.58643148068905, lng:33.49257426439605},

        zoom: 13,

        maxZoom: 20,

        disableDefaultUI: true,

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

                      "color": "#ffffff"

                  },

                  {

                      "weight": "0.01"

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

                      "color": "#ffffff"

                  },

                  {

                      "weight": "0.01"

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

                      "color": "#ffffff"

                  },

                  {

                      "weight": "0.01"

                  }

              ]

          },

          {

              "featureType": "transit.line",

              "elementType": "geometry",

              "stylers": [

                  {

                      "weight": "0.51"

                  },

                  {

                      "color": "#a57474"

                  }

              ]

          },

          {

              "featureType": "transit.station.airport",

              "elementType": "geometry.fill",

              "stylers": [

                  {

                      "color": "#b7baab"

                  }

              ]

          },

          {

              "featureType": "water",

              "elementType": "geometry",

              "stylers": [

                  {

                      "color": "#00277b"

                  }

              ]

          }

      ]

    };

    

    var activeInfoWindow; 

    var map = new google.maps.Map(document.getElementById('map'), opt);

    

    

    var markers = [

        {

            coordinates: {lat:44.603444141576645, lng:33.47656000773765},

            image: 'http://billiclub.u1246912.cp.regruhosting.ru/wp-content/themes/BilliClub/img/iconsMap/moika.svg', scaledSize: new google.maps.Size(50,50),

            info: '<div class="card p-0 m-0 InfoWindowProject" style="width: 100%;"><div class="volna"></div> <img src="http://billiclub.u1246912.cp.regruhosting.ru/wp-content/themes/BilliClub/img/iconsMap/moika.svg" class="card-img-top img-fluid" alt="..."><div class="card-body"><h5 class="card-title">Проект</h5><a  type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreen">Посмотреть</a > </div></div>'

        },

        {

            coordinates: {lat:44.59216550944457, lng:33.45536120128001},

            image: 'http://billiclub.u1246912.cp.regruhosting.ru/wp-content/themes/BilliClub/img/iconsMap/apteka.svg',

            info: '<div class="card p-0 m-0 InfoWindowProject" style="width: 100%;"><div class="volna"></div> <img src="http://billiclub.u1246912.cp.regruhosting.ru/wp-content/themes/BilliClub/img/iconsMap/apteka.svg" class="card-img-top img-fluid" alt="..."><div class="card-body"><h5 class="card-title">Проект</h5><a  type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreen">Посмотреть</a > </div></div>'

        },

        {

            coordinates: {lat:44.61054196530708, lng:33.47755606204109},

            image: 'http://billiclub.u1246912.cp.regruhosting.ru/wp-content/themes/BilliClub/img/iconsMap/calyan.svg',

            info: '<div class="card p-0 m-0 InfoWindowProject" style="width: 100%;"><div class="volna"></div> <img src="http://billiclub.u1246912.cp.regruhosting.ru/wp-content/themes/BilliClub/img/iconsMap/calyan.svg" class="card-img-top img-fluid" alt="..."><div class="card-body"><h5 class="card-title">Проект</h5><a  type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreen">Посмотреть</a ></div></div>'

        },

        {

            coordinates: {lat:44.571394750357726, lng:33.47057653956021},

            image: 'http://billiclub.u1246912.cp.regruhosting.ru/wp-content/themes/BilliClub/img/iconsMap/clear.svg',

            info: '<div class="card p-0 m-0 InfoWindowProject" style="width: 100%;"><div class="volna"></div> <img src="http://billiclub.u1246912.cp.regruhosting.ru/wp-content/themes/BilliClub/img/iconsMap/clear.svg" class="card-img-top img-fluid" alt="..."><div class="card-body"><h5 class="card-title">Проект</h5><a  type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreen">Посмотреть</a ></div></div>'

        },

        {

            coordinates: {lat:44.57291215780087, lng:33.478532743127275},

            image: 'http://billiclub.u1246912.cp.regruhosting.ru/wp-content/themes/BilliClub/img/iconsMap/condicioner.svg',

            info: '<div class="card p-0 m-0 InfoWindowProject" style="width: 100%;"><div class="volna"></div> <img src="http://billiclub.u1246912.cp.regruhosting.ru/wp-content/themes/BilliClub/img/iconsMap/condicioner.svg" class="card-img-top img-fluid" alt="..."><div class="card-body"><h5 class="card-title">Проект</h5><a  type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreen">Посмотреть</a ></div></div>'

        },

        {

            coordinates: {lat:44.571394750357726, lng:33.47057653956021},

            image: 'http://billiclub.u1246912.cp.regruhosting.ru/wp-content/themes/BilliClub/img/iconsMap/fitnes.svg',

            info: '<div class="card p-0 m-0 InfoWindowProject" style="width: 100%;"><div class="volna"></div> <img src="http://billiclub.u1246912.cp.regruhosting.ru/wp-content/themes/BilliClub/img/iconsMap/fitnes.svg" class="card-img-top img-fluid" alt="..."><div class="card-body"><h5 class="card-title">Проект</h5><a  type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreen">Посмотреть</a ></div></div>'

        },

        {

            coordinates: {lat:44.57509975385923, lng:33.48980999053754},

            image: 'http://billiclub.u1246912.cp.regruhosting.ru/wp-content/themes/BilliClub/img/iconsMap/him4istka.svg',

            info: '<div class="card p-0 m-0 InfoWindowProject" style="width: 100%;"><div class="volna"></div> <img src="http://billiclub.u1246912.cp.regruhosting.ru/wp-content/themes/BilliClub/img/iconsMap/him4istka.svg" class="card-img-top img-fluid" alt="..."><div class="card-body"><h5 class="card-title">Проект</h5><a  type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreen">Посмотреть</a ></div></div>'

        },

        {

            coordinates: {lat:44.58682343440065, lng:33.491975768893774}, 

            image: 'http://billiclub.u1246912.cp.regruhosting.ru/wp-content/themes/BilliClub/img/iconsMap/kafe.svg',

            info: '<div class="card p-0 m-0 InfoWindowProject" style="width: 100%;"><div class="volna"></div> <img src="http://billiclub.u1246912.cp.regruhosting.ru/wp-content/themes/BilliClub/img/iconsMap/kafe.svg" class="card-img-top img-fluid" alt="..."><div class="card-body"><h5 class="card-title">Проект</h5><a  type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreen">Посмотреть</a ></div></div>'

        },

        {

            coordinates: {lat:44.58571124288048, lng:33.46607614417683},

            image: 'http://billiclub.u1246912.cp.regruhosting.ru/wp-content/themes/BilliClub/img/iconsMap/karaoke.svg',

            info: '<div class="card p-0 m-0 InfoWindowProject" style="width: 100%;"><div class="volna"></div> <img src="http://billiclub.u1246912.cp.regruhosting.ru/wp-content/themes/BilliClub/img/iconsMap/karaoke.svg" class="card-img-top img-fluid" alt="..."><div class="card-body"><h5 class="card-title">Проект</h5><a  type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreen">Посмотреть</a ></div></div>'

        },

        {

            coordinates: {lat:44.582705767953414, lng:33.459836947257685},

            image: 'http://billiclub.u1246912.cp.regruhosting.ru/wp-content/themes/BilliClub/img/iconsMap/kino.svg',

            info: '<div class="card p-0 m-0 InfoWindowProject" style="width: 100%;"><div class="volna"></div> <img src="http://billiclub.u1246912.cp.regruhosting.ru/wp-content/themes/BilliClub/img/iconsMap/kino.svg" class="card-img-top img-fluid" alt="..."><div class="card-body"><h5 class="card-title">Проект</h5><a  type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreen">Посмотреть</a ></div></div>'

        },

        {

            coordinates: {lat:44.59175859880369, lng:33.47197878690532},

            image: 'http://billiclub.u1246912.cp.regruhosting.ru/wp-content/themes/BilliClub/img/iconsMap/kofe.svg',

            info: '<div class="card p-0 m-0 InfoWindowProject" style="width: 100%;"><div class="volna"></div> <img src="http://billiclub.u1246912.cp.regruhosting.ru/wp-content/themes/BilliClub/img/iconsMap/kofe.svg" class="card-img-top img-fluid" alt="..."><div class="card-body"><h5 class="card-title">Проект</h5><a  type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreen">Посмотреть</a ></div></div>'

        },

        {

            coordinates: {lat:44.5954641371618, lng:33.474697108533654},

            image: 'http://billiclub.u1246912.cp.regruhosting.ru/wp-content/themes/BilliClub/img/iconsMap/magazin.svg',

            info: '<div class="card p-0 m-0 InfoWindowProject" style="width: 100%;"><div class="volna"></div> <img src="http://billiclub.u1246912.cp.regruhosting.ru/wp-content/themes/BilliClub/img/iconsMap/magazin.svg" class="card-img-top img-fluid" alt="..."><div class="card-body"><h5 class="card-title">Проект</h5><a  type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreen">Посмотреть</a ></div></div>'

        },

        {

            coordinates: {lat:44.59017307250547, lng:33.48243785491882},

            image: 'http://billiclub.u1246912.cp.regruhosting.ru/wp-content/themes/BilliClub/img/iconsMap/obshepit.svg',

            info: '<div class="card p-0 m-0 InfoWindowProject" style="width: 100%;"><div class="volna"></div> <img src="http://billiclub.u1246912.cp.regruhosting.ru/wp-content/themes/BilliClub/img/iconsMap/obshepit.svg" class="card-img-top img-fluid" alt="..."><div class="card-body"><h5 class="card-title">Проект</h5><a  type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreen">Посмотреть</a ></div></div>'

        },

        {

            coordinates: {lat:44.58150722232357, lng:33.48564806395958},

            image: 'http://billiclub.u1246912.cp.regruhosting.ru/wp-content/themes/BilliClub/img/iconsMap/restoran.svg',

            info: '<div class="card p-0 m-0 InfoWindowProject" style="width: 100%;"><div class="volna"></div> <img src="http://billiclub.u1246912.cp.regruhosting.ru/wp-content/themes/BilliClub/img/iconsMap/restoran.svg" class="card-img-top img-fluid" alt="..."><div class="card-body"><h5 class="card-title">Проект</h5><a  type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreen">Посмотреть</a ></div></div>'

        },

        {

            coordinates: {lat:44.588347819912954, lng:33.49424313975544},

            image: 'http://billiclub.u1246912.cp.regruhosting.ru/wp-content/themes/BilliClub/img/iconsMap/salon-krasotu.svg',

            info: '<div class="card p-0 m-0 InfoWindowProject" style="width: 100%;"><div class="volna"></div> <img src="http://billiclub.u1246912.cp.regruhosting.ru/wp-content/themes/BilliClub/img/iconsMap/salon-krasotu.svg" class="card-img-top img-fluid" alt="..."><div class="card-body"><h5 class="card-title">Проект</h5><a  type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreen">Посмотреть</a ></div></div>'

        },

        {

            coordinates: {lat:44.59124238571999, lng:33.50345954648564},

            image: 'http://billiclub.u1246912.cp.regruhosting.ru/wp-content/themes/BilliClub/img/iconsMap/school.svg',

            info: '<div class="card p-0 m-0 InfoWindowProject" style="width: 100%;"><div class="volna"></div> <img src="http://billiclub.u1246912.cp.regruhosting.ru/wp-content/themes/BilliClub/img/iconsMap/school.svg" class="card-img-top img-fluid" alt="..."><div class="card-body"><h5 class="card-title">Проект</h5><a  type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreen">Посмотреть</a ></div></div>'

        },

        {

            coordinates: {lat:44.59975931626038, lng:33.4982041233277},

            image: 'http://billiclub.u1246912.cp.regruhosting.ru/wp-content/themes/BilliClub/img/iconsMap/spa.svg',

            info: '<div class="card p-0 m-0 InfoWindowProject" style="width: 100%;"><div class="volna"></div> <img src="http://billiclub.u1246912.cp.regruhosting.ru/wp-content/themes/BilliClub/img/iconsMap/spa.svg" class="card-img-top img-fluid" alt="..."><div class="card-body"><h5 class="card-title">Проект</h5><a  type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreen">Посмотреть</a ></div></div>'

        },

        {

            coordinates: {lat:44.60160157563452, lng:33.482440913588555},

            image: 'http://billiclub.u1246912.cp.regruhosting.ru/wp-content/themes/BilliClub/img/iconsMap/strijka.svg',

            info: '<div class="card p-0 m-0 InfoWindowProject" style="width: 100%;"><div class="volna"></div> <img src="http://billiclub.u1246912.cp.regruhosting.ru/wp-content/themes/BilliClub/img/iconsMap/strijka.svg" class="card-img-top img-fluid" alt="..."><div class="card-body"><h5 class="card-title">Проект</h5><a  type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreen">Посмотреть</a ></div></div>'

        },

        {

            coordinates: {lat:44.6025509853249, lng:33.49022447931096},

            image: 'http://billiclub.u1246912.cp.regruhosting.ru/wp-content/themes/BilliClub/img/iconsMap/tatu.svg',

            info: '<div class="card p-0 m-0 InfoWindowProject" style="width: 100%;"><div class="volna"></div> <img src="http://billiclub.u1246912.cp.regruhosting.ru/wp-content/themes/BilliClub/img/iconsMap/tatu.svg" class="card-img-top img-fluid" alt="..."><div class="card-body"><h5 class="card-title">Проект</h5><a  type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreen">Посмотреть</a ></div></div>'

        },

        {

            coordinates: {lat:44.607783499855095, lng:33.4947209615012},

            image: 'http://billiclub.u1246912.cp.regruhosting.ru/wp-content/themes/BilliClub/img/iconsMap/taxi.svg',

            info: '<div class="card p-0 m-0 InfoWindowProject" style="width: 100%;"><div class="volna"></div> <img src="http://billiclub.u1246912.cp.regruhosting.ru/wp-content/themes/BilliClub/img/iconsMap/taxi.svg" class="card-img-top img-fluid" alt="..."><div class="card-body"><h5 class="card-title">Проект</h5><a  type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreen">Посмотреть</a ></div></div>'

        },

    ];



    for (var i = 0; i < markers.length; i++){

        addMarker(markers[i]);

    }



    function addMarker(properties) {

        var marker = new google.maps.Marker ({

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

                if (activeInfoWindow) { activeInfoWindow.close();}

                InfoWindow.open(map, marker);

                activeInfoWindow = InfoWindow;

            });

        }

        



    }

    



    

}







