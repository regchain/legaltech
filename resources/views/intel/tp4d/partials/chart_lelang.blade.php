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
    <div id="lelang" style="min-width: 310px; height: 550px; margin: 0 auto"></div>

    <script>
    Highcharts.chart('lelang', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'SKPD Anggaran Terbesar Tahun Ini / Telah Berjalan'
    },
    subtitle: {
        text: 'Lelang & Pengadaan Langsung'
    },
    xAxis: {
        categories: [
            'Bidang PPSMP',
            'Bagian Umum',
            'Bidang PPSD',
            'Dinas Pemuda Dan Olah Raga',
            'Sekretariat DPRD',
            'Dinas Perhubungan',
            'Dinas Pekerjaan Umum',
            'Dinas Penataan Ruang',
            'Dinas Lingkungan Hidup Dan Kebersihan',
            'Dinas Pangan Dan Pertanian',
            'Dinas Kesehatan',
            'Dinas Pariwisata'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Nilai Kontrak (Rp.)'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Lelang',
        data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]

    }, {
        name: 'Pengadaan Langsung',
        data: [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3, 91.2, 83.5, 106.6, 92.3]

    }, {
        name: 'Swakelola',
        data: [48.9, 38.8, 39.3, 41.4, 47.0, 48.3, 59.0, 59.6, 52.4, 65.2, 59.3, 51.2]

    }]
});
</script>
</body>
</html>