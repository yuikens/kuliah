<?php
include "conn.inc.php";

$query = "SELECT * FROM mahasiswa";
$result = mysqli_query($conn, $query);

echo "<h1>List Mahasiswa</h1>";
echo "<a href='create.php'>Tambah</a>";
echo "<table cellpadding='5' border='1'>
        <tr>
            <th>No.</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Action</th>
        </tr>";

$no = 1;
while($rec = mysqli_fetch_assoc($result)) {
    echo "<tr>
            <td>$no.</td>
            <td>$rec[nim]</td>
            <td>$rec[nama]</td>
            <td>$rec[alamat]</td>
            <td>
                <a href='update.php?id=$rec[nim]'>Update</a>
                <a href='delete.php?id=$rec[nim]'>Delete</a>
            </td>
        </tr>";
    $no++;
}

mysqli_close($conn);
?>
