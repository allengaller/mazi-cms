<div class="posts view">
<h2><?php echo __('Post'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($post['Post']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pid'); ?></dt>
		<dd>
			<?php echo h($post['Post']['pid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Uid'); ?></dt>
		<dd>
			<?php echo h($post['Post']['uid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Content'); ?></dt>
		<dd>
			<?php echo h($post['Post']['content']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ptitle'); ?></dt>
		<dd>
			<?php echo h($post['Post']['ptitle']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Psubtitle'); ?></dt>
		<dd>
			<?php echo h($post['Post']['psubtitle']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cates'); ?></dt>
		<dd>
			<?php echo h($post['Post']['cates']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pcates'); ?></dt>
		<dd>
			<?php echo h($post['Post']['pcates']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tags'); ?></dt>
		<dd>
			<?php echo h($post['Post']['tags']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ptags'); ?></dt>
		<dd>
			<?php echo h($post['Post']['ptags']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Metadescription'); ?></dt>
		<dd>
			<?php echo h($post['Post']['metadescription']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Metakeywords'); ?></dt>
		<dd>
			<?php echo h($post['Post']['metakeywords']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($post['Post']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Detail'); ?></dt>
		<dd>
			<?php echo h($post['Post']['detail']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Attention'); ?></dt>
		<dd>
			<?php echo h($post['Post']['attention']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hits'); ?></dt>
		<dd>
			<?php echo h($post['Post']['hits']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Likes'); ?></dt>
		<dd>
			<?php echo h($post['Post']['likes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Show'); ?></dt>
		<dd>
			<?php echo h($post['Post']['is_show']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Top'); ?></dt>
		<dd>
			<?php echo h($post['Post']['is_top']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Img Src'); ?></dt>
		<dd>
			<?php echo h($post['Post']['img_src']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($post['Post']['price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Discount'); ?></dt>
		<dd>
			<?php echo h($post['Post']['discount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Discount'); ?></dt>
		<dd>
			<?php echo h($post['Post']['is_discount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Seller Id'); ?></dt>
		<dd>
			<?php echo h($post['Post']['seller_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sales'); ?></dt>
		<dd>
			<?php echo h($post['Post']['sales']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($post['Post']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($post['Post']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Post'), array('action' => 'edit', $post['Post']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Post'), array('action' => 'delete', $post['Post']['id']), null, __('Are you sure you want to delete # %s?', $post['Post']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Posts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post'), array('action' => 'add')); ?> </li>
	</ul>
</div>
