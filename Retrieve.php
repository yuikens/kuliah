<?php
include "conn.inc.php";

$query = "SELECT * FROM matakuliah";
$result = mysqli_query($conn, $query);

echo "<h2>List Mata Kuliah</h1>";
echo "<table cellpadding='5' border='1'>
        <tr>
            <th>No.</th>
            <th>Kode Mata Kuliah</th>
            <th>Nama Mata Kuliah</th>
            <th>SKS</th>
        </tr>";

$no = 1;
while ($rec = mysqli_fetch_assoc($result)) {
    echo "<tr align='center'>
            <td>$no.</td>
            <td>$rec[kd_mtk]</td>
            <td>$rec[nm_mtk]</td>
            <td>$rec[sks]</td>
        </tr>";
    
    $no++;
}
?>

<form action="create.php">
    <input type="submit" value="Tambah" href="create.php">
</form>

<?
mysqli_close($conn);
?>
