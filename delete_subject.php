<div id="deleteModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Add Section</h4>
			</div>
			<div class="modal-body">
				<div class="alert alert-danger">Are you Sure yuo want to Delete this Data?</div>
				<div class="modal-footer">
					<form name="form1" method="post" action="process.php" style="float:Right;">
						<input type="hidden" name="nameID" id="hiddenField" value="<?php echo $row['id']; ?>">
						<button name="btnDeleteItemN" type="submit" class="btn btn-danger" id="btnDeleteItemN"><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
						<button type="button" class="btn btn-default" data-dismiss="modal">No</button>
					</form>
				</div>
			</div>
		</div>

	</div>
</div>