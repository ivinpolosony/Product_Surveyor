<div class="articles form">
<?php echo $this->Form->create('Article'); ?>
	<fieldset>
		<legend><?php echo __('Edit Article'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('article_title');
		echo $this->Form->input('article_content');
		echo $this->Form->input('product_id',array('type'=>'hidden', 'value'=>$this->passedArgs['id']));
		echo $this->Form->input('user_id',array('type'=>'hidden', 'value'=>$this->Session->read('Auth.User.id')));
//		echo $this->Form->input('created_date');
//		echo $this->Form->input('updated_date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Article.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Article.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Articles'), array('action' => 'index')); ?></li>
	</ul>
</div>
