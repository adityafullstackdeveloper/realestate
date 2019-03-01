<div class="row">
    <div class="col-md-12">
        <div class="btn-group">
            <?php $url=$this->Html->url(array('controller'=>'Users')); echo $this->Html->link('<span class="fa fa-plus"></span>&nbsp;Add New User',array('controller'=>'Users','action'=>'add'),array('escape'=>false,'class'=>'btn btn-success'));?>
            <?php echo $this->Html->link('<span class="fa fa-edit"></span>&nbsp;Edit','#',array('name'=>'editallfrm','id'=>'editallfrm','onclick'=>"check_perform_edit('$url');",'escape'=>false,'class'=>'btn btn-warning'));?>
            <?php echo $this->Html->link('<span class="fa fa-trash"></span>&nbsp;Delete','#',array('name'=>'deleteallfrm','id'=>'deleteallfrm','onclick'=>'check_perform_delete();','escape'=>false,'class'=>'btn btn-danger'));?>
            <?php echo $this->Html->link('<span class="fa fa-plus"></span>&nbsp;Assign Form Rights',array('action'=>'assignrights'),array('escape'=>false,'class'=>'btn btn-success'));?>
        </div>
    </div>
       <?php echo $this->element('pagination');
        $pageParams = $this->Paginator->params();
        $limit = $pageParams['limit'];
        $page = $pageParams['page'];
        $serialNo = 1*$limit*($page-1)+1;?>
        <?php echo $this->Form->create(array('name'=>'deleteallfrm','action' => 'deleteall'));?>
</div>
<?php echo $this->Session->flash();?>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
			<div class="widget">
				<h4 class="widget-title"> <span>Users</span></h4>
			</div>
		</div>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <tr>
                            <th><?php echo $this->Form->checkbox('checkbox', array('value'=>'deleteall','name'=>'selectAll','label'=>false,'id'=>'selectAll','hiddenField'=>false));?></th>
                            <th><?php echo $this->Paginator->sort('id', 'S.No.', array('direction' => 'desc'));?></th>
                            <th><?php echo $this->Paginator->sort('username', 'User Name', array('direction' => 'asc'));?></th>
                            <th><?php echo $this->Paginator->sort('name', 'Name', array('direction' => 'asc'));?></th>
                            <th><?php echo $this->Paginator->sort('email', 'Email', array('direction' => 'asc'));?></th>
                            <th><?php echo $this->Paginator->sort('mobile', 'Mobile', array('direction' => 'asc'));?></th>
                            <th><?php echo $this->Paginator->sort('status', 'Status', array('direction' => 'asc'));?></th>
                            <th>Action</th>
                        </tr>
                        <?php foreach ($User as $post):
                        $id=$post['User']['id'];?>
                        <tr>
                            <td><?php echo $this->Form->checkbox(false,array('value' => $post['User']['id'],'name'=>'data[User][id][]','id'=>"DeleteCheckbox$id",'class'=>'chkselect'));?></td>
                            <td><?php echo $serialNo++;?></td>
                            <td><?php echo h($post['User']['username']);?></td>
                            <td><?php echo h($post['User']['name']);?></td>
                            <td><?php echo h($post['User']['email']);?></td>
                            <td><?php echo h($post['User']['mobile']);?></td>
                            <td><span class="label label-<?php if(h($post['User']['status'])=="Active")echo"success";else echo"danger";?>"><?php echo h($post['User']['status']);?></span></td>
			    <td><div class="btn-group">
			    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
			    Action <span class="caret"></span>
			    </button>
			    <ul class="dropdown-menu" role="menu">
			    <li><?php echo $this->Html->link('<span class="fa fa-edit"></span>&nbsp;Edit','#',array('name'=>'editallfrm','onclick'=>"check_perform_sedit('$url','$id');",'escape'=>false));?></li>
                            <li><?php if($id!=1){echo $this->Html->Link('<span class="fa fa-trash"></span>&nbsp;Delete','#',array('onclick'=>"check_perform_sdelete('$id');",'escape'=>false));}?></td></li>
			    </ul>
			  </div></td>
                        </tr>
                        <?php endforeach;?>
                        <?php unset($post);?>
                        </table>
                </div>
        </div>
    </div>
</div>
<?php echo $this->Form->end();?>
<?php echo $this->element('pagination');?>
<div class="modal fade" id="targetModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-content">        
  </div>
</div>