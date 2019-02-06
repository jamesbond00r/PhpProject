<?php include "includes/header.php" ?>
<body>

<div id="wrapper">

<?php include "includes/nav.php" ?>

<div id="page-wrapper">

<div class="container-fluid">

<!-- Page Heading -->
<div class="row">
<div class="col-lg-12">

<h1 class="page-header">Post page </h1>

<table>
	
	<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<th>Id</th>
				<th>Author</th>
				<th>Title</th>
				<th>Category</th>
				<th>Status</th>
				<th>Image</th>
				<th>Tages</th>
				<th>Comments</th>
				<th>Dates</th>
			</tr>
		</thead>
	
<tbody>
	
	<?php

	$query = "SELECT * FROM posts ";

$select_post = mysqli_query($connection, $query);

while($row = mysqli_fetch_assoc($select_post)){

$post_id = $row['post_id'];
$post_author = $row['post_author'];
$post_title = $row['post_title'];
$post_cat = $row['post_category_id'];
$post_status = $row['post_status'];
$post_img = $row['post_image'];
$post_tags = $row['post_tags'];
$post_date = $row['post_date'];

	echo "<tr>";
	echo"<td>{$post_id}</td>";
	echo"<td>{$post_author}</td>";
	echo"<td>{$post_title}</td>";
	echo"<td>{$post_cat}</td>";
	echo"<td>{$post_status}</td>";
	echo"<td><img width='100' src='../images/$post_img'/></td>";
	echo"<td>{$post_tags}</td>";
	echo"<td>{$post_date}</td>";
	echo "</tr>";

}





	?>



		<td>10</td>
		<td>Rob</td>
		<td>JavaScript</td>
		<td>Programing</td>
		<td>Pending</td>
		<td>pic.jep</td>
		<td>stuff</td>
		<td>Love it</td>
		<td>2/5/2019</td>
	
</tbody>
</table></table>

</div>
</div>
<!-- /.row -->

</div>
<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

<?php include "includes/footer.php" ?>