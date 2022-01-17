<!-- Add New -->
    <div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add New</h4></center>
					
                </div>
				
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="addnew.php">
			
			<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Image:</label>
						</div>
						<div class="col-lg-10">
							<input type="file" class="form-control" name="image" required >
						</div>
					</div>
			
			
			
			<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Firstname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="firstname" placeholder="your first name"required >
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Lastname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="lastname" placeholder="your last name" required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Phone:</label>
						</div>
						<div class="col-lg-10">
							<input type="tel" pattern="^\d{3}-\d{3}-\d{4}$" placeholder="123-456-7890" class="form-control" name="phone" required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Email:</label>
						</div>
						<div class="col-lg-10">
							<input type="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Your email id" name="address" required>
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>
	
