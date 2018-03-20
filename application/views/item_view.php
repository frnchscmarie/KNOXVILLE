<!DOCTYPE html>
<body class="nav-md">
    <div class="container body">
      <div class="main_container">

<div class="right_col" role="main">
          <div class="">
    
    <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Items</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
					  <li><a data-toggle="modal" data-target="#squarespaceModal" class="butt5" ><i class="fa fa-plus"></i> Add Item </a>
					  
					  	

<div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" ><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
			<h3 class="modal-title" id="lineModalLabel">Add Item</h3>
		</div>
		<div class="modal-body">
		<div>&nbsp;</div>
  <div class="container">
  <?php echo validation_errors(); ?>
  
  <?php echo form_open('knoxville/addItem'); //this is equal to <form method="post" accept-charset="utf-8" action="http://localhost/Knoxville-Auto-Supply/knoxville/addClient">
                                     //to add attributes, edit to: echo form('knoxville/addClient','class="lala" id="lala"'); 
  ?> 
    <div class="form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" for="idesc" id="inputSuccess2" placeholder="Item Description" name="idesc" value="<?php echo set_value('idesc'); ?>" id="idesc">
                        <span class="fa fa-book form-control-feedback left" aria-hidden="true"></span>
                      </div>
		
                      <div class="form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" for="price" id="inputSuccess2" placeholder="Price" name="price" value="<?php echo set_value('price'); ?>" id="price">
                        <span class="fa fa-cube form-control-feedback left" aria-hidden="true"></span>
                      </div>

    
	
	<div class="">
		<label class="control-label col-sm-4">&nbsp;</label>
	
    </div>
	
	 <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button" style="margin-left: 50px;"><a href="<?php echo base_url('knoxville/viewItems')?>" style="color: white;">Cancel</a></button>
                          
                          <button type="submit" class="btn btn-success" value="submit">Submit</button>
                        </div>
      </div>
	  
  </div>
  </form>
  
 </div>
  </div>
  </div>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
					  
					  
                      </li>
					  
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      Manage all the items.
                    </p>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                    <tr id="trHead">
						<th>Item Description</th>
						<th>Price</th>
						<th>ACTION</th>
					</tr>
				</thead>
        <tbody>
            <?php
                foreach($item as $c){  
                    echo "<tr><td>".$c['item_desc']."</td><td>".$c['unit_price']
                    .'</td><td><a href="'.base_url('knoxville/updateItem/'.$c['itemID']).'" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i> Edit</a><a href="'.base_url('knoxville/delItem/'.$c['itemID']).'"class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete</a></td></tr>';
                    //echo base_url('knoxville/delClient/'.c['clientID'])
                }
            ?>
        </tbody>
    </table>
    </div>
</div>
</div>


<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Stocks</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a href="<?php echo base_url('knoxville/addStocks')?>"><i class="fa fa-plus"></i> Add Stock</a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      Manage all the items.
                    </p>
                    <table id="datatable-checkbox" class="table table-striped table-bordered">
                      <thead>
                    <tr id="trHead">
            <th>Item Description</th>
            <th>Stock ID</th>
            <th>Quantity</th>
            <th>Date</th>
            <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            if(isset($stocks)){
            foreach($stocks as $s){

              echo "<tr><td>";

              foreach($item as $i){
                if($s['itemID']==$i['itemID'])
                  echo $i['item_desc'];
              }
              echo "</td><td>".$s['stockID']."</td><td>".$s['quantity']."</td><td>".$s['date'].'</td><td><a href="'.base_url('knoxville/delItem/'.$s['itemID']).'"class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete</a></td></tr>';
                    //echo base_url('knoxville/delClient/'.c['clientID'])

            }
            }
                  
            ?>
        </tbody>
    </table>
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