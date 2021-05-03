<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB PEMILU</title>
</head>
<body>
    <div class="form-input">
        <header>
            <h2>Web PEMILU</h2>
        </header>
        <form method="post">
            <table width="75%" cellpadding="5px">
                <tr colspan="4">
                    <td width="20%">id_pemilih</td>
                    <td width="2%"> : </td>
                    <td><input class="lebar" type="number" name="id_pemilih"/></td>
                </tr>
                <tr colspan="4">
                    <td width="20%">Calon Ketua</td>
                    <td width="2%"> : </td>
                    <td><select name="pilihan" class="lebar">
                        <option value="Dio">1. Dio</option>
                        <option value="JoJo">2. JoJo</option>
                        <option value="Brando">3. Brando</option>
                        <option value="Anto">4. Anto</option>
                        <option value="Leo">5. Leo</option>
                    </select>
                    </td>
                </tr><tr><td><td></td></td><td>
                <button class="btn btn-primary mb-10" name="kirim" type="submit" >Kirim</button>
                </td></tr>
            </table>
        <form>

<table  id="datatable" border="1" align = "left">
    <thead>
        <tr>
            <th>Calon</th>
            <th>Total</th>
        </tr>
    </thead>
        <tbody>
                <?php
                require 'koneksi.php';
                $view = $koneksi -> query("SELECT pilihan,COUNT(*) as Hasil FROM suara GROUP by pilihan");
                while($row=$view->fetch_array()){
                ?> 
            <tr>
                <td><?= $row['pilihan']; ?></td>
                <td><?= $row['Hasil']; ?></td>
            </tr>
                <?php }?>
        </tbody>
</table>


<?php 
require './koneksi.php';
if (isset($_POST["kirim"])) {

$pilihan = $_POST['pilihan'];
$id_pemilih = $_POST['id_pemilih'];

$data1 = mysqli_query($koneksi,"select * from suara where id_pemilih='$id_pemilih'");

$cek = mysqli_num_rows($data1);

if($cek <= 0){

$data =mysqli_query($koneksi,"INSERT INTO `suara` (`id_suara`, `id_pemilih`, `pilihan`) VALUES ('', '$id_pemilih', '$pilihan')");

if ($data) {
    ?>
<script language="javascript">
alert("Data Berhasil Ditambah");
</script>
<?php

}}else if ($cek >= 0){
    ?>
    <script language="javascript">
    alert("Maaf Id sudah digunakan ");
    </script>
    <?php  

}
}
?> 	
</body>
</html>