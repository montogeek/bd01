<!--<div id="social-sidebar">
	<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>/" >
		<input type="text" value="" placeholder="<?php esc_attr_e( 'Dale Enter!', '' ); ?>&#8230;" name="s" id="s" />
		<input type="submit" id="searchsubmit" value="<?php esc_attr_e( 'Buscar', '' ); ?>" />
	</form>
</div>-->
<form role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>">
	<div id="social-sidebar" class="row collapse">
		<div class="small-8 columns">
			<input type="text" value="" name="s" id="s" placeholder="<?php _e('Search', 'reverie'); ?>">
		</div>
		<div class="small-4 columns">
			<input type="submit" id="searchsubmit" value="<?php _e('Search', 'reverie'); ?>" class="prefix button">
		</div>
	</div>
</form>