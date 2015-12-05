<div id="editModal" class="modal fade" role="dialog">
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
					<form name="form1" method="post" action="edit-itemtype.php" style="float:Right;">
						<input name="nameID" type="hidden" id="hiddenField2" value="<?php echo $row['id']; ?>">
						<button name="btnEditItemN2" type="submit" class="btn btn-warning" id="btnEditItemN2"><span class="glyphicon glyphicon-edit"></span> Edit</button>
					</form>
				</div>
			</div>	
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>

	</div>
</div>