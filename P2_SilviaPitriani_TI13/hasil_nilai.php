<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Hasil Nilai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</head>
<body>
<table class="table table-bordered">
        <thead>
            <tr class="table-primary">
                <th scope="col">NO</th>
                <th scope="col">NAMA</th>
                <th scope="col">MATA KULIAH</th>
                <th scope="col">UTS</th>
                <th scope="col">UAS</th>
                <th scope="col">TUGAS</th>
                <th scope="col">NILAI AKHIR</th>
                <th scope="col">KETERANGAN</th>
                <th scope="col">GRADE</th>
                <th scope="col">PREDIKAT</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $nomor = 1;
                $uts   = (30/100)   * $_POST['uts'];
                $uas   = (35/100)   * $_POST['uas'];
                $tugas = (35/100) * $_POST['tugas'];
                $total = $uts + $uas + $tugas;                
            ?>
            
                <tr>
                    <td>    <?= $nomor      ?>     </td>
                    <td>    <?= $_POST['nama'] ?>   </td>
                    <td>    <?= $_POST['matkul'] ?>   </td>
                    <td>    <?= $_POST['uts']?>   </td>
                    <td>    <?= $_POST['uas']?> </td>
                    <td>    <?= $_POST['tugas']?>  </td>
                    <td>    <?= $total?>  </td>

                    <?php 
                    if($total>55){
                        echo '<td> Lulus </td>';
                    } else{
                        echo '<td> Tidak Lulus </td>';
                    }
                    ?>

                    <?php 
                    if($total>=0 && $total<=35.99){
                        echo '<td>E</td>';
                    }elseif($total>=36 && $total<=55.99){
                        echo '<td>D</td>';
                    }elseif($total>=56 && $total<=69.99){
                        echo '<td>C/td>';
                    }elseif($total>=70 && $total<=84.99){
                        echo '<td>B</td>';
                    }elseif($total>=85 && $total<=100){
                        echo '<td>A</td>';
                    }else{
                        echo '<td>I</td>';
                    }
                    ?>

                    <?php
                    switch ($total){
                        case $total>=0 && $total<=35.99:
                            echo '<td>Sangat Kurang</td>';
                            break;
                        case $total>=36 && $total<=55.99:
                            echo '<td>Kurang</td>';
                            break;
                        case $total>=56 && $total<=69.99:
                            echo '<td>Cukup</td>';
                            break;
                        case $total>=70 && $total<=84.99:
                            echo '<td>Memuaskan</td>';
                            break;
                        case $total>=85 && $total<=100:
                            echo '<td>Sangat Memuaskan</td>';
                            break;
                        default:
                        echo '<td>Tidak Ada</td>';
                    }
                    ?>
                </tr>
           
            <?php
                $nomor++;
            ?>

        </tbody>
    </table>
    <a class="btn btn-primary ml-2" href="tugas2.php" role="button">Kembali</a>
</body>
</html>