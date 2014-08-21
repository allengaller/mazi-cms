<div class="Blogs index">
	<h2><?php echo __('Blogs'); ?></h2>
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
	<?php foreach ($blogs as $blog): ?>
	<tr>
		<td><?php echo h($blog['Blog']['id']); ?>&nbsp;</td>
		<td><?php echo h($blog['Blog']['pid']); ?>&nbsp;</td>
		<td><?php echo h($blog['Blog']['uid']); ?>&nbsp;</td>
		<td><?php echo h($blog['Blog']['content']); ?>&nbsp;</td>
		<td><?php echo h($blog['Blog']['ptitle']); ?>&nbsp;</td>
		<td><?php echo h($blog['Blog']['psubtitle']); ?>&nbsp;</td>
		<td><?php echo h($blog['Blog']['cates']); ?>&nbsp;</td>
		<td><?php echo h($blog['Blog']['pcates']); ?>&nbsp;</td>
		<td><?php echo h($blog['Blog']['tags']); ?>&nbsp;</td>
		<td><?php echo h($blog['Blog']['ptags']); ?>&nbsp;</td>
		<td><?php echo h($blog['Blog']['metadescription']); ?>&nbsp;</td>
		<td><?php echo h($blog['Blog']['metakeywords']); ?>&nbsp;</td>
		<td><?php echo h($blog['Blog']['description']); ?>&nbsp;</td>
		<td><?php echo h($blog['Blog']['detail']); ?>&nbsp;</td>
		<td><?php echo h($blog['Blog']['attention']); ?>&nbsp;</td>
		<td><?php echo h($blog['Blog']['hits']); ?>&nbsp;</td>
		<td><?php echo h($blog['Blog']['likes']); ?>&nbsp;</td>
		<td><?php echo h($blog['Blog']['is_show']); ?>&nbsp;</td>
		<td><?php echo h($blog['Blog']['is_top']); ?>&nbsp;</td>
		<td><?php echo h($blog['Blog']['img_src']); ?>&nbsp;</td>
		<td><?php echo h($blog['Blog']['price']); ?>&nbsp;</td>
		<td><?php echo h($blog['Blog']['discount']); ?>&nbsp;</td>
		<td><?php echo h($blog['Blog']['is_discount']); ?>&nbsp;</td>
		<td><?php echo h($blog['Blog']['seller_id']); ?>&nbsp;</td>
		<td><?php echo h($blog['Blog']['sales']); ?>&nbsp;</td>
		<td><?php echo h($blog['Blog']['created']); ?>&nbsp;</td>
		<td><?php echo h($blog['Blog']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $blog['Blog']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $blog['Blog']['id'])); ?>
			<?php echo $this->Form->BlogLink(__('Delete'), array('action' => 'delete', $blog['Blog']['id']), null, __('Are you sure you want to delete # %s?', $blog['Blog']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Blog'), array('action' => 'add')); ?></li>
	</ul>
</div>
