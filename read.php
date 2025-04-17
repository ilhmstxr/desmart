include 'connectDatabase.php'; 
$query = "SELECT * FROM biodata"; 
$result = mysqli_query($koneksi, $query); 

echo "<table border='1'>
<tr>

</tr>"