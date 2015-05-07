<?php 
	 $var = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	 //echo $var;
 ?>

<!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		    <div class="modal-dialog">
		      <div class="modal-content">
		        
		        <header class="modal-header">
			        <a href="#" class="close" data-dismiss="modal">&times;</a>
			        <h3><strong>Log In</strong></h3>
			     </header>
		        <div class="modal-body">
		        	
		        	<form method="post" action="<?php echo base_url(); ?>index.php/login/validate_credentials" class="form-horizontal" role="form">
					  <div class="form-group">
					    <label for="inputUsername" class="col-sm-2 control-label">Username</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" name="user_name" id="user_name" placeholder="Username">
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="inputPassword" class="col-sm-2 control-label">Password</label>
					    <div class="col-sm-10">
					      <input type="password" class="form-control" name="password" id="password" placeholder="Password">
					    </div>
					  </div>
					  <div class="form-group">
					    
					    <div class="col-sm-10">
					      <input type="hidden" class="form-control" name="uri" value="<?php echo $var; ?>">
					    </div>
					  </div>
					 <!--  <div class="form-group">
					    <div class="col-sm-offset-2 col-sm-10">
					      <div class="checkbox">
					        <label>
					          <input type="checkbox"> Remember me
					        </label>
					      </div>
					    </div>
					  </div> -->
					  
					
		        </div>
		        <footer class="modal-footer">
			        <a href="<?php echo base_url().$var; ?>" class="btn btn-primary" data-dismiss="modal" id="">Cancel</a>
			        <!-- <a href="<?php echo base_url(); ?>index.php/login/validate_credentials" class="btn btn-primary" id="">Sign In</a> -->
			    	<input type="submit" value="Sign In!" class="btn btn-primary">
			    </footer> 
		      </form>
		      </div><!-- /.modal-content -->
		    </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
	