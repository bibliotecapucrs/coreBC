<form method="get" class="sidebar-form" action="<?php echo esc_url(home_url('/')); ?>">
	<div class="input-group">
	<input class="form-control" type="text" name="s" value="<?php esc_attr_e(get_search_query()); ?>" placeholder="<?php esc_attr_e('Search &hellip;', 'libcore'); ?>" title="<?php esc_attr_e('Search &hellip;', 'libcore'); ?>">
		<span class="input-group-btn">
			<button type="submit" title="<?php _e('Search', 'libcore'); ?>" id="search-btn" class="btn btn-flat">
				<i class="fa fa-search"></i>
			</button>
		</span>
	</div>
</form>