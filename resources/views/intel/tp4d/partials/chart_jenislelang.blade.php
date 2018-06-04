<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>

<div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>

    <script>
    Highcharts.chart('container', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Pengadaan Langsung Tahun Ini / Telah Berjalan'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                style: {
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                }
            }
        }
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'Pengadaan Barang',
            y: 61.41,
            sliced: true,
            selected: true
        }, {
            name: 'Program Pengembangan Data/Informasi',
            y: 11.84
        }, {
            name: 'Program Pelayanan Administrasi Perkantoran',
            y: 10.85
        }, {
            name: 'Program Peningkatan Sarana dan Prasarana Aparatur',
            y: 4.67
        }, {
            name: 'Program peningkatan disiplin aparatur',
            y: 4.18
        }, {
            name: 'Program Pengembangan Komunikasi, Informasi dan Media Massa',
            y: 1.64
        }, {
            name: 'Opera',
            y: 1.6
        }, {
            name: 'QQ',
            y: 1.2
        }, {
            name: 'Lain-lain',
            y: 2.61
        }]
    }]
});
</script>
</body>
</html>