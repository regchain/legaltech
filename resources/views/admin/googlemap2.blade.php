<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Fusion Tables styling</title>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 500px;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -3.6027298, lng: 117.4558468},
          zoom: 4
        });

        var layer = new google.maps.FusionTablesLayer({
          query: {
            select: 'geometry',
            from: '1ertEwm-1bMBhpEwHhtNYT47HQ9k2ki_6sRa-UQ'
          },
          styles: [{
            polygonOptions: {
              fillColor: '#00FF00',
              fillOpacity: 0.3
            }
          }, {
            where: 'birds > 300',
            polygonOptions: {
              fillColor: '#0000FF'
            }
          }, {
            where: 'population > 5',
            polygonOptions: {
              fillOpacity: 1.0
            }
          }]
        });
        layer.setMap(map);
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSfuFPxyw3xEpFfV6yaDjXb9nvhcDRja4&callback=initMap">
    </script>
  </body>
</html>