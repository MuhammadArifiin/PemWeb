<html>
<head>
<link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="row">
        <div class = "column">
         <h1 style="background-color: black; width:1470px; height:40px; color:white;">Data Survei Minat</h1>
         <form method="get" action="chart.php">
         <input style="background-color: #ff0b2b; color: #fff;" type="submit" value="Chart" /></form>
            <table border="1" align = "left">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Profesi</th>
                        <th>Minat</th>
                        
                    </tr>
                </thead>
                    <?php
                       require 'koneksi.php';
                        $view = $koneksi -> query("SELECT * FROM peminat");
                        while($row=$view->fetch_array()){

                    ?> 
                     <tr>
                          <td><?php echo $row['id']; ?></td>  
                          <td><?php echo $row['nama']; ?></td>  
                          <td><?php echo $row['profesi']; ?></td>                                                     
                          <td><?php echo $row['minat']; ?></td>                                                          
                     </tr>						
                        <?php }?>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>