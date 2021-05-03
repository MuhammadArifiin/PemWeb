<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

         <form method="get" action="index.php">
         <input style="background-color: #ff0b2b; color: #fff;" type="submit" value="Home" /></form>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="   dules/accessibility.js"></script>

    <figure class="highcharts-figure">
        <div id="container"></div>
          <p class="highcharts-description"> Berikut adalah hasil survei terkait minat dari beberapa orang mahasiswa dan pelajar.</p>
         <table id="datatable">
            <thead>
                 <tr>
                    <th>Minat</th>
                    <th>Jumlah Peminat</th>
                </tr>
             </thead>
            <tbody>
                    <?php
                    require 'koneksi.php';
                    $view = $koneksi -> query("SELECT minat,COUNT(*) AS hasil FROM `peminat` GROUP BY minat");
                    while($row=$view->fetch_array()){ ?> 
                <tr>
                    <td><?php echo $row['minat']; ?></td>  
                    <td><?php echo $row['hasil']; ?></td>                                                      
                </tr>						
                 <?php }?>
             </tbody>
        </table>
    </figure>
<script>
Highcharts.chart('container', {
    data: {
        table: 'datatable'
    },
    chart: {
        type: 'column'
    },
    title: {
        text: 'Data extracted from a HTML table in the page'
    },
    yAxis: {
        allowDecimals: false,
        title: {
            text: 'Units'
        }
    },
    tooltip: {
        formatter: function () {
            return '<b>' + this.series.name + '</b><br/>' +
                this.point.y + ' ' + this.point.name.toLowerCase();
        }
    }
});
</script>
</body>
</html>