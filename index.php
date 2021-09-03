<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jonh Travolta Aldi Zulfikar 11190910000036</title>
</head>
<style>
    .container{
        border: 1px solid black;
        margin:50px;
        padding:20px;
    }
    p{
        font-size:21px;
    }
    ol li{
        font-size:20px;
    }
    table{
        font-size:20px;
    }
</style>
<body>
<div class="container">
    <h1>Penyelesaian Soal John Travolta</h1>
    <p>
        Seorang karyawan bernama John Travolta bergaji mingguan. Gaji normal seminggu (untuk 40 jam), 
        standarnya (“rate”) adalah: Rp. 15.000,- /jam. Sedangkan untuk lembur (artinya kerja diatas 40 jam/minggu) 
        dibayar satu setengah kali dari gaji normal per jam nya (“rate”).
    </p>
    <ol>
        <li>
            Bila Mr. John Travolta pada minggu ini bekerja 52 jam, berapa gaji Mr. John tersebut?
        </li>
        <li>
            Bila pemasukan lebih besar dari pengeluaran maka, akan ditulis (di print), ”bisa menabung”. 
            Bila pemasukan sama dengan pengeluaran maka, akan ditulis (di print), ”tidak bisa menabung”. 
            Bila pemasukan sama kurang dari pengeluaran maka, akan ditulis (di print), ”cari tambahan”.
            pengeluaran Mr. john selama seminggu ini adalah Rp. 600.000. Apakah Mr. 
            John bisa menabung atau tidak ? Bila bisa, berapa besar tabungannya untuk minggu ini.
        </li>
    </ol>
        <form action="" method="POST">
            <table>
                <tr>
                    <td>Jam Kerja Perminggu</td>
                    <td> : <input type="number" name="jamkerja"></td>
                </tr>
                <tr>
                    <td>Pengeluaran</td>
                    <td> : <input type="number" name="pengeluaran"></td>
                </tr>
                <tr>
                    <td><button name="submit">Hitung</button></td>
                </tr>
            </table>
        </form>
        <br><hr>
        <p>Jawaban:</p>
        <?php
        if(isset($_POST['submit'])){
            $jamkerja = $_POST['jamkerja'];
            $pengeluaran = $_POST['pengeluaran'];
            $jamKerjaPerminggu = 40;
            $jamlembur = $jamkerja-$jamKerjaPerminggu;

            $gajiPerJam = 15000;
            $gajilembur = 1.5 * $gajiPerJam;
            $gajiPerMinggu = $gajiPerJam * $jamKerjaPerminggu;

            echo "<p>Jonh Travolta pada minggu ini berkerja sebanyak ".$jamkerja." Jam dengan pengeluaran Rp ".number_format($pengeluaran,2,',','.')." </p>";

            if($jamlembur == 0){
                echo "<p>Gaji yang diterima Jonh Travolta pada minggu ini adalah Rp ".number_format($gajiPerMinggu,2,',','.').", Maka Jonh Travolta ". statusPengeluaran($gajiPerMinggu, $pengeluaran)."</p>";
            }else if($jamlembur>0){
                $totalGaji = $gajiPerMinggu + ($jamlembur*$gajilembur);
                echo "<p>Gaji yang diterima Jonh Travolta pada minggu ini adalah Rp ".number_format($totalGaji,2,',','.').", Maka Jonh Travolta ". statusPengeluaran($totalGaji, $pengeluaran)."</p>";
            }
        }

        function statusPengeluaran($gaji, $pengeluaran){
            if($gaji > $pengeluaran){
                $tabungan = $gaji - $pengeluaran;
                $status = "bisa menabung sebanyak Rp " .number_format($tabungan,2,',','.');
                return $status;
            }else if($gaji == $pengeluaran){
                $status = "tidak bisa menabung";
                return $status;
            }else{
                $status = "harus cari tambahan";
                return $status;
            }
        }
        ?>
    </div>
</body>
</html>