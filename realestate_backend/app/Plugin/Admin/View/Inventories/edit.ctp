<script type="text/javascript">
    $(document).ready(function(){
        $('#post_req').validationEngine();
        $('.paymentDate').datetimepicker({format:'<?php echo $dpFormat;?>'});
        });
</script>
<div class="container">
<div class="row">
<?php echo $this->Session->flash();?>
    <div class="col-md-12">
        <div class="panel panel-default mrg">
            <div class="panel-heading"><div class="widget-modal"><h4 class="widget-modal-title">Edit <span>Inventories</span></strong></h4><?php if(!$isError){?><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><?php }?></div></div>
                <div class="panel-body">
					<?php echo $this->Form->create('Inventory', array( 'controller' => 'Inventories','name'=>'post_req','id'=>'post_req','class'=>'form-horizontal'));?>
					<?php foreach ($Inventory as $k=>$post): $id=$post['Inventory']['id'];$form_no=$k+1;?>
						<div class="panel panel-default">
							<div class="panel-heading"><strong><small class="text-danger">Form <?php echo$form_no?></small></strong></div>
		  <div class="panel-body">
		    <div class="form-group">
                        <label for="group_name" class="col-sm-4 control-label"><small>Project:</small></label>
                        <div class="col-sm-6">
                           <?php echo $this->Form->select("$k.Inventory.project_id",$projectName,array('label' => false,'class'=>'form-control','empty'=>'Please Select','div'=>false));?>
                        </div>
                    </div>
		    <div class="form-group">
                        <label for="group_name" class="col-sm-4 control-label"><small>Category Name:</small></label>
                        <div class="col-sm-6">
                           <?php echo $this->Form->select("$k.Inventory.expense_category_id",$expenseCategory,array('label' => false,'class'=>'form-control','empty'=>'Please Select','div'=>false));?>
                        </div>
                    </div>
		    <div class="form-group">
                        <label for="group_name" class="col-sm-4 control-label"><small>Vendor/Staff Name:</small></label>
                        <div class="col-sm-6">
                           <?php echo $this->Form->select("$k.Inventory.vendor_id",$vendorName,array('label' => false,'class'=>'form-control','empty'=>'Please Select','div'=>false));?>
                        </div>
                    </div>
		    <div class="form-group">
                        <label for="group_name" class="col-sm-4 control-label"><small>Invoice No.:</small></label>
                        <div class="col-sm-6">
                           <?php echo $this->Form->input("$k.Inventory.invoice_no",array('label' => false,'class'=>'form-control','placeholder'=>'Invoice No.','div'=>false));?>
                        </div>
                    </div>
		    <div class="form-group">
                        <label for="group_name" class="col-sm-4 control-label"><small>Invoice Date:</small></label>
                        <div class="col-sm-6">
                           <div class="input-group date paymentDate" id="paymentDate">                        
                            <?php echo $this->Form->input("$k.Inventory.invoice_date",array('type'=>'text','value'=>$this->Time->format($dtFormat,$post['Inventory']['invoice_date']),'label' => false,'class'=>'form-control','div'=>false));?>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                        </div>
                        </div>                                           
                    </div>
                    <div class="form-group">
                        <label for="group_name" class="col-sm-4 control-label"><small>Quantity:</small></label>
                        <div class="col-sm-6">
                           <?php echo $this->Form->input("$k.Inventory.invoice_qty",array('label' => false,'class'=>'form-control','placeholder'=>'Quantity','div'=>false));?>
                        </div>
                    </div>                    
                    <div class="form-group">
                        <label for="group_name" class="col-sm-4 control-label"><small>Remarks:</small></label>
                        <div class="col-sm-6">
                           <?php echo $this->Form->input("$k.Inventory.remarks", array('label'=>false,'placeholder'=>'Remarks','class'=>'form-control')); ?>
                        </div>                                           
                    </div>
		    <div class="form-group text-left">
			<div class="col-sm-offset-4 col-sm-6">
			    <?php echo $this->Form->input("$k.Inventory.id",array('type' => 'hidden'));?>
			</div>
		    </div>
		  </div>
		</div>
                    <?php endforeach; ?>
                        <?php unset($post); ?>
                        <div class="form-group text-left">
                        <div class="col-sm-offset-4 col-sm-6">                            
                            <button type="submit" class="btn btn-success"><span class="fa fa-refresh"></span> Update</button>
                            <?php if(!$isError){?><button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-remove"></span> Cancel</button><?php }?>
                        </div>
                    </div>
                <?php echo$this->Form->end();?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>