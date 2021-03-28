<?php
            $names= ["Joker", "Ace", "King", "Queen","Jack"];
            function vokal($kalimat) {

              $a = substr_count($kalimat, 'a');
              $i = substr_count($kalimat, 'i');
              $u = substr_count($kalimat, 'u');
              $e = substr_count($kalimat, 'e');
              $o = substr_count($kalimat, 'o');
              $A = substr_count($kalimat, 'A');
              $I = substr_count($kalimat, 'I');
              $U = substr_count($kalimat, 'U');
              $E = substr_count($kalimat, 'E');
              $O = substr_count($kalimat, 'O');
              $count = ($A+$I+$U+$E+$O+$a+$i+$u+$e+$o) ;

              return $count;
            }
            function konsonan($kalimat) {
              $jumlah = strlen($kalimat);

              $a = substr_count($kalimat, 'a');
              $i = substr_count($kalimat, 'i');
              $u = substr_count($kalimat, 'u');
              $e = substr_count($kalimat, 'e');
              $o = substr_count($kalimat, 'o');
              $A = substr_count($kalimat, 'A');
              $I = substr_count($kalimat, 'I');
              $U = substr_count($kalimat, 'U');
              $E = substr_count($kalimat, 'E');
              $O = substr_count($kalimat, 'O');
              $count = $jumlah - ($a+$i+$u+$e+$o+$A+$I+$U+$E+$O) - substr_count($kalimat, ' ');

              return $count;
          }

          function TanpaSpasi($kalimat){
            return strlen($kalimat) - substr_count($kalimat, ' ');
          }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TUGAS MODUL 1</title>

</head>
<body>
      <table border="1" cellpadding="10" cellspacing="1">
          <thead>
            <tr>
              <th bgcolor="green" rowspan="2">Nama</th>
              <th bgcolor="green" rowspan="2">Jumlah Huruf</th>
              <th bgcolor="green" rowspan="2">Jumlah Kata</th>
              <th bgcolor="green" rowspan="2">Kebalikan Nama</th>
              <th bgcolor="green" rowspan="2">Total Huruf Vokal</th>
              <th bgcolor="green" rowspan="2">Total Huruf Konsonan</th>
            </tr>
          </thead>

           <?php foreach ($names as $name) :  ?>

                    <tr>
                        <td><?php echo $name."<br>"; ?></td>
                        <td><?php echo strlen($name)."<br>"; ?></td>
                        <td><?php echo str_word_count($name)."<br>"; ?></td>
                        <td><?php echo strrev($name)."<br>"; ?></td>
                        <td><?= vokal($name);  ?></td>
                        <td><?= konsonan( $name);  ?></td>
                    </tr>
                      <?php endforeach; ?>
      </table>
</body>
</html>