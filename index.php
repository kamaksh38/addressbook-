<!DOCTYPE html>
<html>
<head>
	<title>PHP/MySQLi CRUD Operation using Bootstrap/Modal</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>


<link rel="Stylesheet" href=" " "text="" javascript""="" src=""https://code.jquery.com/jquery-1.12.3.js""> 
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.3.js"></script> 
<script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
<body>
<nav class="navbar navbar-inverse" >
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WeUsThem</a>
    </div>
    <ul class="nav navbar-nav" >
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Career</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
	<div style="height:50px;"></div>
	<div class="well" style="margin:auto; padding:auto; width:80%;">
	<span style="font-size:25px; color:blue"><center><strong>My Address Book </strong></center></span>	
		<span class="pull-left"><a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add New</a></span>
		<div style="height:50px;"></div>
		<table class="table table-striped table-bordered table-hover"  id="MyTable" class="display">
		
        
		<br>
			<thead>
			<th>Image</th>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Phone</th>
				<th>Email</th>
				
				<th>Action</th>
			</thead>
			<tbody id="geeks">
			<?php
				include('conn.php');
				
				$query=mysqli_query($conn,"select * from `user`");
				while($row=mysqli_fetch_array($query)){
					?>
					<tr>
						<td><?php echo $row['image']; ?></td>
						<td><?php echo ucwords($row['firstname']); ?></td>
						<td><?php echo ucwords($row['lastname']); ?></td>
						<td><?php echo $row['phone'];?></td>
						<td><?php echo $row['address']; ?></td>
						
						<td>
							<a href="#edit<?php echo $row['userid']; ?>" data-toggle="modal" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Edit</a> || 
							<a href="#del<?php echo $row['userid']; ?>" data-toggle="modal" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
							<?php include('button.php'); ?>
						</td>
					</tr>
					<?php
				}
			
			?>
			</tbody>
		</table>
	</div>
	<?php include('add_modal.php'); ?>
</div>
</div>
  <script>
            $(document).ready(function() {
                $("#gfg").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                    $("#geeks tr").filter(function() {
                        $(this).toggle($(this).text()
                        .toLowerCase().indexOf(value) > -1)
                    });
                });
            });
        </script>
		<script>
		$(document).ready(function() {  
    $('#MyTable').DataTable( {  
        initComplete: function () {  
            this.api().columns().every( function () {  
                var column = this;  
                var select = $('<select><option value=""></option></select>')  
                    .appendTo( $(column.footer()).empty() )  
                    .on( 'change', function () {  
                        var val = $.fn.dataTable.util.escapeRegex(  
                            $(this).val()  
                        );  
                //to select and search from grid  
                        column  
                            .search( val ? '^'+val+'$' : '', true, false )  
                            .draw();  
                    } );  
   
                column.data().unique().sort().each( function ( d, j ) {  
                    select.append( '<option value="'+d+'">'+d+'</option>' )  
                } );  
            } );  
        }  
    } );  
} );  </script>

</body>
</html>