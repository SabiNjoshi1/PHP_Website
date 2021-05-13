<?php
include 'connection.php';

$sql = "SELECT * FROM form";
$result = mysqli_query($connection, $sql);
?>


<table border='1' width='100%'>
<tr>
    <th>Id</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Address</th>
    <th>Age</th>
    <th>Gender</th>
</tr>

<?php
while($row = mysqli_fetch_assoc($result)){
?>
<tr>
	<td><?php echo $row["id"];?></td>
    <td><?php echo $row["firstname"];?></td>
    <td><?php echo $row["lastname"];?></td>
    <td><?php echo $row["email"];?></td>
    <td><?php echo $row["address"];?></td>
    <td><?php echo $row["age"];?></td>
    <td><?php echo $row["gender"];?></td>
</tr>
<?php
}
?>

</table>
