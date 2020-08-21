
<?php
$db=mysqli_connect("localhost","root","","railres");
$query = mysqli_query($db,"select * from booking");

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
</head>
<body>
	<div class="container">
   <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>uname</th>
                <th>Tnumber</th>
                <th>class</th>
                <th>doj</th>
                <th>DOB</th>
                <th>fromstn</th>
                <th>tostn</th>
                <th>Name</th>
                <th>Age</th>\
                <th>sex</th>
                <th>Status</th>
            </tr>
        </thead>
        <tfoot>
               <th>uname</th>
                <th>Tnumber</th>
                <th>class</th>
                <th>doj</th>
                <th>DOB</th>
                <th>fromstn</th>
                <th>tostn</th>
                <th>Name</th>
                <th>Age</th>\
                <th>sex</th>
                <th>Status</th>
            </tr>
        </tfoot>
        <tbody>
            
            <?php while ($r = mysqli_fetch_object($query)): ?>

            	<tr>
            		
            			<td><?php echo $r->uname; ?></td>
            			<td><?php echo $r->Tnumber; ?></td>
            			<td><?php echo $r->class; ?></td>
                        <td><?php echo $r->doj; ?></td>
            			<td><?php echo $r->DOB; ?></td>
            			<td><?php echo $r->fromstn; ?></td>
            			<td><?php echo $r->tostn; ?></td>
            			<td><?php echo $r->Name; ?></td>
            			<td><?php echo $r->Age; ?></td>
            			<td><?php echo $r->sex; ?></td>
            			<td><?php echo $r->Status; ?></td>
            		
            	</tr>
            <?php endwhile; ?>
        </tbody>
        
    </table>
    <script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="datatable.jquery.min.js"></script>
	<script type="text/javascript" src="datatable.bootstrap.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
    $('#example').DataTable();
} );
	</script>
</body>

</html>