<!DOCTYPE html>
<div class="tab-content">

  <?php echo validation_errors(); ?>
  
  <?php echo form_open('knoxville/updateDeliverer/'.$delivererID); //this is equal to <form method="post" accept-charset="utf-8" action="http://localhost/Knoxville-Auto-Supply/knoxville/addClient">
                                     //to add attributes, edit to: echo form('knoxville/addClient','class="lala" id="lala"'); 
  ?> 
<div class="right_col" role="main">
          <div class="">
           
    
    <div class="clearfix"></div>


  
  
  <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h3>Edit Deliverer</h3>
                   
                    <div class="clearfix"></div>
               </div>
                  <div class="x_content">
                    <br />
        <div class="col-md-6" style="padding: 10px; text-align: center; margin-left: 250px;">
          <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
               
                      <div class="form-group has-feedback">
					   <label class="form" for="cname">Vehicle </label>
                        <input type="text" class="form-control has-feedback-left" for="cname" id="inputSuccess2" placeholder="  Client Name" name="vehicle" id="vehicle" value="<?php echo $vehicle; ?>"/>
                        <span class="fa fa-user form-control-feedback left required" aria-hidden="true"></span>
                      </div>
                  
                      <div class="form-group has-feedback">
					   <label class="form" for="idesc">Contact Number </label>
                        <input type="text" class="form-control has-feedback-left" for="cname" id="inputSuccess2" placeholder="  Client Name" name="cnum" id="cnum" value="<?php echo $cnum; ?>" />
                        <span class="fa fa-user form-control-feedback left required" aria-hidden="true"></span>
                      </div>

                      <div class="form-group has-feedback">
					   <label class="form" for="idesc">Personnel Assigned </label>
                        <input type="text" class="form-control has-feedback-left" for="cname" id="inputSuccess2" placeholder="  Client Name" name="assigned" id="assigned" value="<?php echo $assigned; ?>" />
                        <span class="fa fa-user form-control-feedback left required" aria-hidden="true"></span>
                      </div>

              	<div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button"><a href="<?php echo base_url('knoxville/viewDeliverer')?>" style="color: white;">Cancel</a></button>
                          <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" class="btn btn-success" value="submit">Submit</button>
                        </div>
                      </div>
                </form>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>

</body>
</html>