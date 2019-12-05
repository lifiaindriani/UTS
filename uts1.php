<?php
//connection database
include "koneksi1.php";

//menangkap data yang dikirim dari form
$nik = $_POST ['nik'];
$nama = $_POST ['nama'];
$cuti = $_POST ['cuti'];

//menginput data ke databasse
mysqli_query ($connection, "insert into t_cuti values ('','$nik','$nama','$cuti')");

?>

<Form Method="POST"  action=""><!---Form untuk kirim data ke DB-->
<table border="1">
<tr>
<td>nik</td>
<td><input name="nik" type="text"></td>
</tr>
<tr>
<td>nama</td>
<td><input name="nama" type="text"></td>
</tr>
<tr>
<td>cuti</td>
<td><input name="cuti" type="number"></td>
</tr>
<tr>
<td><input name="simpen" type="submit"></td>
</tr>
</table>
</form>