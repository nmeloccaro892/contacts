<form class="form-horizontal" action="actions/add_contact.php" method="post">
	
	<div class="control-group">
		<label class="control-label" for="name">Name</label>
		<div class="controls">
			<input name="name" placeholder="First" />
			<input name="name" placeholder="Last" />
		</div>
	</div>
	
	<div class="control-group">
		<label class="control-label" for="email">Email</label>
		<div class="controls">
			<input name="email" placeholder="Example: me@me.com" />
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="phone">Phone</label>
		<div class="controls">
			<input name="phone" placeholder="Phone Number- No Dashes" />
		</div>
	</div>
	<div class="form-actions">
		<button type="submit" class="btn btn-primary">Add</button>
		<button type="button" class="btn" onclick="window.history.go(-1)">Cancel</button>
	</div>
</form>