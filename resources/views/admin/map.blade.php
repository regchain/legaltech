<!DOCTYPE html>
<!-- 
    Template: Pecto - Multipurpose HTML Template Built With Twitter Bootstrap 3.3.7
    
    Version: 1.0.0
    
-->
<!--[if IE 9]> 
    <html lang="en" class="ie9">
    <![endif]-->
    <!--[if !IE]><!-->
        <html lang="en">
        <!--<![endif]-->
        <!-- BEGIN HEAD -->
        <head>
            <meta charset="utf-8"/>
            <title>LegalTech Indonesia</title>
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
            <meta content="" name="description"/>
            <meta content="" name="author"/>
            <style>
                #container {
                    height: 500px; 
                    min-width: 310px; 
                    /* max-width: 800px;  */
                    margin: 0 0; 
                }
                .loading {
                    margin-top: 10em;
                    text-align: center;
                    color: gray;
                }
                
            </style>
            <!-- Favicon -->
            <link rel="shortcut icon" href="favicon.ico"/>
        </head>
        <body>
            <!-- Preloader -->
            
            
            
            <div id="container"></div>
            
            
            <script src="https://code.highcharts.com/maps/highmaps.js"></script>
            <script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
            <script src="https://code.highcharts.com/mapdata/countries/id/id-all.js"></script>
            <script>
                // Prepare demo data
// Data is joined to map using value of 'hc-key' property by default.
// See API docs for 'joinBy' for more info on linking data and map.
var data = [
    ['id-3700', 0],
    ['id-ac', 1],
    ['id-ki', 2],
    ['id-jt', 3],
    ['id-be', 4],
    ['id-bt', 5],
    ['id-kb', 6],
    ['id-bb', 7],
    ['id-ba', 8],
    ['id-ji', 9],
    ['id-ks', 10],
    ['id-nt', 11],
    ['id-se', 12],
    ['id-kr', 13],
    ['id-ib', 14],
    ['id-su', 15],
    ['id-ri', 16],
    ['id-sw', 17],
    ['id-la', 18],
    ['id-sb', 19],
    ['id-ma', 20],
    ['id-nb', 21],
    ['id-sg', 22],
    ['id-st', 23],
    ['id-pa', 24],
    ['id-jr', 25],
    ['id-1024', 26],
    ['id-jk', 27],
    ['id-go', 28],
    ['id-yo', 29],
    ['id-kt', 30],
    ['id-sl', 31],
    ['id-sr', 32],
    ['id-ja', 33]
];

// Create the chart
Highcharts.mapChart('container', {
    chart: {
        map: 'countries/id/id-all'
    },

    title: {
        text: 'Pemetaan Kasus Pidana Khusus'
    },

    subtitle: {
        text: 'Sumber: <a href="http://kejaksaan.go.id">Kejaksaan Agung R.I</a>'
    },

    mapNavigation: {
        enabled: true,
        buttonOptions: {
            verticalAlign: 'bottom'
        }
    },

    colorAxis: {
        min: 0
    },

    series: [{
        data: data,
        name: 'Random data',
        states: {
            hover: {
                color: '#BADA55'
            }
        },
        dataLabels: {
            enabled: true,
            format: '{point.name}'
        }
    }]
});

                </script>
        </body>
        </html>