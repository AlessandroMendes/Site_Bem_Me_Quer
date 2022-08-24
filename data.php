<?php
include("conecta.php");

$per_page = 9;
$sqlc = "show columns from convenios";
$rsdc = mysql_query($sqlc);
$cols = mysql_num_rows($rsdc);
$page = $_REQUEST['page'];

$start = ($page-1)*9;
$sql = "select * from convenios order by id limit $start,9";
$rsd = mysql_query($sql);

?>
<?php
while ($rows = mysql_fetch_assoc($rsd))	
{
$codigo = $rows["id"];
$foto = "admin/fotos_convenios/" . $codigo . ".jpg";
$nome = $rows["nome"];
$descricao = $rows["descricao"];
?>
		<ul style="list-style-type: none;">
		    <li style='overflow: hidden; float: left; width: 150px; height: 113px; margin-left:15px; margin-top: 15px;'>
				<a href="<?php echo"$foto" ?>" rel="lightbox[roadtrip]" title="<?php echo "$nome"; ?>">
				<img src=<?php echo "$foto" ?> style='border:0px; width:150px; height:113px'></a>
	      </li>
		</ul>	
<?php
}?>