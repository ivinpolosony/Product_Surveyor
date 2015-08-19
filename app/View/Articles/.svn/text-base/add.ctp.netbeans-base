<?php 
?>

<div class="articles form">
<?php echo $this->Html->script('jquery',FALSE); ?>    
    
<?php echo $this->Form->create(array('id' => 'article_add')); ?>
	<fieldset>
		<legend><?php echo __('Add Article'); ?></legend>
	<?php
                
            pr($this->passedArgs);
            pr($this->Session->read('Auth.User'));
		
                
                echo $this->Form->input('article_title');
		echo $this->Form->input('article_content');
		echo $this->Form->input('product_id',array('type'=>'hidden', 'value'=>$this->passedArgs['id']));
		echo $this->Form->input('user_id',array('type'=>'hidden', 'value'=>$this->Session->read('Auth.User.id')));
		//echo $this->Form->input('created_date');
		
               
             
	?>
	</fieldset>
<?php echo $this->Js->submit('Add',
                            array(
                                        
                                    'before' => $this->Js->get('#sending')->effect('fadeIn'),
                                    'success' => $this->Js->get('#sending')->effect('fadeOut'),
                                    'update' => '#success1'
                                    
                                
                                    )); ?>
</div>

<div id ="sending" style="display: none" > Sending ...... </div>
<div id ="success1" style="display: block" >  </div>

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Articles'), array('action' => 'index')); ?></li>
	</ul>
</div>
<?php echo $this->Js->writeBuffer(); ?>