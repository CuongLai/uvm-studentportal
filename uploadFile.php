<?php require("includes/top.php");
      require("includes/nav.php"); ?>


<body id = 'login'>
<div class="container content-container">
	<div class="row">
		<div class="col-sm-12"  style="margin-top: 30px">
			<div class="col-sm-offset-3 col-sm-6">
				<div class="panel panel-default">
					<!-- HEADER -->
					<div class="panel-heading">
						<h4 class="text-center">Upload or submit a new file</h4>
					</div>

					<!-- BODY -->
					<div class ="form-group">
								<label class="control-label col-sm-3">Class</label>
								<div class="col-sm-9">
								<select name = "formClass">
								<option value="">Select...</option>
								<option value="Bio001">Bio001</option>
								<option value="CS205">CS205</option>
								<option value="Stats111">Stats111</option>
								</select>	
								</div>
							</div>
					<div class="panel-body">
						<p>
							<input type="submit" name="upload" value="Browse"/>
								</div>
							</div>

						</form>
					</div>

					
				</div>
			</div>
		</div>
	</div>
</div>
</body>
<?php require("includes/footer.php"); ?>

<br>

<form action="viewFile.php" method="POST" enctype="multipart/form-data">
          <textarea name="txt" rows="28" cols="150" onfocus="this.select()"></textarea>
         <input type="submit"/>
</form>

<?php require("includes/footer.php"); ?>
