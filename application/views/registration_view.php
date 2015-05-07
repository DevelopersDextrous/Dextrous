<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dextrous::Registration</title>
    
    <!-- Styles -->
    <?php $this->load->view('includes/default_css'); ?>


  </head>


<body role="document">
  
  <!-- Head Wrapper -->
     <?php $this->load->view('includes/head_wrapper'); ?>

	<div id="k-head" class="container">
    
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-info">
                  <div class="panel-heading"><strong><span class="glyphicon glyphicon-pencil"></span> Register Form</strong></div>
                  <div class="panel-body">  
                  	<div class="alert alert-warning alert-dismissible" role="alert">
                  		<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>

                  		<h3><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
                  			The *** marked fields are mandatory, you cannot proceed wihtout completing them!!!
                  		</h3>
                  	</div>
                         
                    <form id="contactform" method="post" action="<?php echo base_url(); ?>index.php/registration/create_member">
                                        <div class="row"><!-- starts row -->
                                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                <label for="first_name"><span class="required">*</span> First Name</label>
                                                <input type="text" aria-required="true" size="30" value="" name="first_name" id="first_name" class="form-control requiredField" />
                                            </div>

                                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                <label for="last_name"><span class="required">*</span> Last Name</label>
                                                <input type="text" aria-required="true" size="30" value="" name="last_name" id="last_name" class="form-control requiredField" />
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                              <label for="gender"><span class="required">*</span> Gender:</label><br>
                                              <input type="radio" class="requiredField" value="M" name="gender">Male
                                              <input type="radio" class="requiredField" value="F" name="gender">Female
                                            </div>

                                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                              <label for="dob"><span class="required">*</span> Date of Birth:</label>
                                              <input type="date" class="form-control" name="dob" id="dob" class="form-control requiredField">
                                            </div>
                                            
                                          </div>
                                          <div class="row">
                                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                <label for="contactPhone"><span class="required">*</span> Phone / Cell</label>
                                                <input type="text" aria-required="true" size="30" value="" name="contactPhone" id="contactPhone" class="form-control requiredField" />
                                            </div>
                                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                              <label for="address">Address:</label>
                                              <input type="text" class="form-control" id="address" name="address" placeholder="Address">
                                            </div>
                                          </div>
                                          <div class="row">

                                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                <label for="email"><span class="required">*</span> E-mail</label>
                                                <input type="text" aria-required="true" size="30" value="" name="email" id="email" class="form-control requiredField" />
                                            </div>
                                        </div><!-- ends row -->
                                        
                                        <div class="row"><!-- starts row -->
                                            
                                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                <label for="password"><span class="required">*</span> Password:</label>
                                                <input type="password" aria-required="true" class="form-control requiredField" id="password" name="password" placeholder="Enter Password">
                                                <span class="help-block text-danger"><span class="glyphicon glyphicon-warning-sign">                              
                                                </span> 6 characters minimum</span>
                                            </div>
                                        </div><!-- ends row -->
                                        
                                        <div class="row"><!-- starts row -->
                                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                              <label for="password2"><span class="required">*</span> Confirm Password:</label>
                                              <input type="password" aria-required="true" class="form-control requiredField" id="password2" name="password2" placeholder="Confirm Password">
                                            </div>
                                        </div><!-- ends row -->
                                        
                                        <div class="col-xs-10">
                            
                                        <input type="submit" value="Submit" id="submit_btn" class="btn btn-success btn-large">
                                      </div>
                                    </form>
                                                 
                                                                            
                    </div>
                </div>
			</div>
		</div>
	</div>
                                                <?php $this->load->view('includes/login_modal'); ?>

                       <?php $this->load->view('includes/footer'); ?>

   

      <?php $this->load->view('includes/script_files'); ?>
	

</body>
</html>