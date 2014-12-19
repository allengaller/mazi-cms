<div class="posts form">
<?php echo $this->Form->create('Post'); ?>
	<fieldset>
		<legend><?php echo __('Add Post'); ?></legend>
	<?php
		echo $this->Form->input('pid');
		echo $this->Form->input('uid');
		echo $this->Form->input('content');
		echo $this->Form->input('ptitle');
		echo $this->Form->input('psubtitle');
		echo $this->Form->input('cates');
		echo $this->Form->input('pcates');
		echo $this->Form->input('tags');
		echo $this->Form->input('ptags');
		echo $this->Form->input('metadescription');
		echo $this->Form->input('metakeywords');
		echo $this->Form->input('description');
		echo $this->Form->input('detail');
		echo $this->Form->input('attention');
		echo $this->Form->input('hits');
		echo $this->Form->input('likes');
		echo $this->Form->input('is_show');
		echo $this->Form->input('is_top');
		echo $this->Form->input('img_src');
		echo $this->Form->input('price');
		echo $this->Form->input('discount');
		echo $this->Form->input('is_discount');
		echo $this->Form->input('seller_id');
		echo $this->Form->input('sales');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Posts'), array('action' => 'index')); ?></li>
	</ul>
</div>
