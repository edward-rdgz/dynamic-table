<?php 
include('_users.php');
$user = new users();
$query = $user->list_users();
$rows = $query->fetch_all(MYSQLI_ASSOC);
?>

<table border="0" align="center">
<tr>
 <th>Lista de usuarios</th>
</tr>
</table>

<table border="1" id="list" align="center">
<?php
$count = 0;
foreach($rows as $row) { 
	if($count == 0) { 
		echo '<thead>';
		echo '<tr>';
		foreach($row as $element => $i) { 
			echo '<th align="center">'.$element.'</th>';
		} 
		echo '<th align="center">Modificar</th>';
		echo '<th align="center">Eliminar</th>';
		echo '</tr>'; 
		echo '</thead>';
		$count = 1;
	} 
	echo '<tr>';
	foreach($row as $element => $i) {
		echo '<td align="center">'.$i.'</td>';
	} 
	echo '<td align="center"><a href="#?id='.$row['N°'].'" class="update_row">Modificar</a></td>';
	echo '<td align="center"><a href="#?id='.$row['N°'].'" class="remove_row">Eliminar</a></td>';
	echo '</tr>';
} 
?>
</table>