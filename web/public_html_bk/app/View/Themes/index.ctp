<div class="posts index">
	<h2><?php echo __('Posts'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('pid'); ?></th>
			<th><?php echo $this->Paginator->sort('uid'); ?></th>
			<th><?php echo $this->Paginator->sort('content'); ?></th>
			<th><?php echo $this->Paginator->sort('ptitle'); ?></th>
			<th><?php echo $this->Paginator->sort('psubtitle'); ?></th>
			<th><?php echo $this->Paginator->sort('cates'); ?></th>
			<th><?php echo $this->Paginator->sort('pcates'); ?></th>
			<th><?php echo $this->Paginator->sort('tags'); ?></th>
			<th><?php echo $this->Paginator->sort('ptags'); ?></th>
			<th><?php echo $this->Paginator->sort('metadescription'); ?></th>
			<th><?php echo $this->Paginator->sort('metakeywords'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('detail'); ?></th>
			<th><?php echo $this->Paginator->sort('attention'); ?></th>
			<th><?php echo $this->Paginator->sort('hits'); ?></th>
			<th><?php echo $this->Paginator->sort('likes'); ?></th>
			<th><?php echo $this->Paginator->sort('is_show'); ?></th>
			<th><?php echo $this->Paginator->sort('is_top'); ?></th>
			<th><?php echo $this->Paginator->sort('img_src'); ?></th>
			<th><?php echo $this->Paginator->sort('price'); ?></th>
			<th><?php echo $this->Paginator->sort('discount'); ?></th>
			<th><?php echo $this->Paginator->sort('is_discount'); ?></th>
			<th><?php echo $this->Paginator->sort('seller_id'); ?></th>
			<th><?php echo $this->Paginator->sort('sales'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($posts as $post): ?>
	<tr>
		<td><?php echo h($post['Post']['id']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['pid']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['uid']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['content']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['ptitle']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['psubtitle']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['cates']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['pcates']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['tags']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['ptags']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['metadescription']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['metakeywords']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['description']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['detail']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['attention']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['hits']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['likes']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['is_show']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['is_top']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['img_src']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['price']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['discount']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['is_discount']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['seller_id']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['sales']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['created']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $post['Post']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $post['Post']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $post['Post']['id']), null, __('Are you sure you want to delete # %s?', $post['Post']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Post'), array('action' => 'add')); ?></li>
	</ul>
</div>
