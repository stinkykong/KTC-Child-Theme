<nav class="nav-primary" itemscope itemtype="http://schema.org/SiteNavigationElement">
	<div class="wrap">
		<ul id="menu-main-nav" class="menu genesis-nav-menu menu-primary">
			<?php if ( ! $user_is_logged_in ) : ?>
			<li class="menu-item menu__join">
				<a href="<?php echo home_url( 'membership' ); ?>" itemprop="url"><span itemprop="name"><i class="fa fa-code" aria-hidden="true"></i> Join</span></a>
			</li>
			<?php endif; ?>
			<li class="menu-item menu__library<?php if ( is_page( 'quick-start-guide' ) ) { echo ' current-menu-item'; } ?>">
				<a href="<?php echo home_url( 'quick-start-guide' ); ?>" itemprop="url"><span itemprop="name"><i class="fa fa-fighter-jet" aria-hidden="true"></i> Our Screencast Libraries</span></a>
			</li>
			<li class="menu-item menu__whatsnew<?php if ( is_page( 'whats-new' ) ) { echo ' current-menu-item'; } ?>">
				<a href="<?php echo home_url( 'whats-new' ); ?>" itemprop="url"><span itemprop="name"><i class="fa fa-plus-circle" aria-hidden="true"></i> What's New</span></a>
			</li>
			<li class="menu-item menu__help<?php if ( is_help_center_page() ) { echo ' current-menu-item'; } ?>">
				<a href="<?php echo home_url( 'help-center' ); ?>" itemprop="url"><span itemprop="name"><i class="fa fa-life-ring" aria-hidden="true"></i> Help Center</span></a>
			</li>
			<?php if ( $user_is_logged_in ) : ?>
			<li class="menu-item menu__dashboard<?php if ( is_page( 'my-dashboard' ) ) { echo ' current-menu-item'; } ?>">
				<a href="<?php echo home_url( 'my-dashboard' ); ?>" itemprop="url"><span itemprop="name"><i class="fa fa-dashboard" aria-hidden="true"></i> My Dashboard</span></a>
			</li>
			<?php endif; ?>
		</ul>
	</div>
</nav>