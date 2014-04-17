<div id="body" class="html front not-logged-in no-sidebars page-node with-navigation with-subnav">
	<div id="page-wrapper">
		<div id="page">
			<div class="main-bg">
				<header id="header" role="banner" class="clearfix">
					<div class="container-12">
						<div class="grid-12">
							<div class="section-1 clearfix">
								<div class="grid-4 alpha">
									<div class="region region-header-left">
										<?php if ($page['header_left']): ?>
											<?php print render($page['header_left']); ?>
										<?php else: ;?>
											<div class="region region-header-left">
												<div id="block-block-12" class="block block-block block-phone block-odd">
													<div class="content">
														<div class="phone-style-1">CALL US FOR RESERVATION</div>
														<div class="phone-style-2">+ 1 800 456 78 90</div>
													</div>
												</div>
											</div>
										<?php endif; ?>
									</div>
								</div>
								<div class="grid-4">
									<?php if ($logo):?>
										<a id="logo" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"> <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /> </a>
									<?php endif; ?>
								</div>
								<div class="grid-4 omega">
									<?php if ($page['header_right']): ?>
										<?php print render($page['header_right']); ?>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
				</header>
				<div id="main-wrapper">
					<div class="container-12">
						<div class="grid-12">
							<div class="section-2 clearfix">
								<div class="search">
									<div class="region region-menu">
										<div id="block-superfish-1" class="block block-superfish block-odd">
											<div class="content">
												<?php if ($main_menu): ?>
													<?php print theme('links__system_main_menu', array(
													  'links' => $main_menu,
													  'attributes' => array('id' => 'superfish-1', 'class' => array('menu', 'sf-menu', 'sf-main-menu', 'sf-horizontal', 'sf-style-none', 'sf-total-items-6', 'sf-parent-items-1', 'sf-single-items-5', 'superfish-processed', 'sf-js-enabled'),
													  ))); ?>
												<?php endif; ?>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="section-3 clearfix">
								<div class="region region-header">
									<?php print render($page['slideshow']); ?>
								</div>
							</div>
							<div class="section-4 clearfix">
								<div class="region region-header-bottom">
									<?php print render($page['content_top']); ?>
								</div>
							</div>
							<div class="region region-content-top">
								<div id="block-block-9" class="block block-block grid-8 alpha block-welcome block-even">
									<h1><?php print $title; ?></h1>
									<?php print render($tabs); ?>
									<?php print render($page['content']); ?>
								</div>
								<div id="block-block-10" class="block block-block grid-4 omega block-table block-odd">
									<?php print render($page['sidebar_right']); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<footer id="footer" role="contentinfo">
			<div class="footer-top-wrapper">
				<div class="footer-top-shadow clearfix">
					<div class="container-12">
						<div class="grid-12">
							<div class="region region-footer-top">
								<?php if ($page['footer_top']): ?>
                                <?php print render($page['footer_top']); ?>
                            <?php endif; ?>
                            <?php if (theme_get_setting('social_display', 'APT_Pro')): ?>
                                <?php
                                    $twitter_url = check_plain(theme_get_setting('twitter_url', 'APT_Pro')); 
                                    $facebook_url = check_plain(theme_get_setting('facebook_url', 'APT_Pro')); 
                                    $google_plus_url = check_plain(theme_get_setting('google_plus_url', 'APT_Pro')); 
                                    $youtube_url = check_plain(theme_get_setting('youtube_url', 'APT_Pro'));
                                ?>
                                <div id="block-follow-site" class="block block-follow block-odd">
                                    <?php if ($facebook_url): ?><div class="follow-link-wrapper follow-link-wrapper-facebook">
                                        <a href="<?php print $facebook_url; ?>" class="follow-link follow-link-facebook follow-link-site" title="<?php print $site_name; ?> in Facebook"><?php print $site_name; ?> Facebook </a></div>
                                    <?php endif; ?>
                                    <?php if ($twitter_url): ?><div class="follow-link-wrapper follow-link-wrapper-twitter">
                                        <a href="<?php print $twitter_url; ?>" class="follow-link follow-link-twitter follow-link-site" title="<?php print $site_name; ?> in Twitter"><?php print $site_name; ?> Twitter </a></div>
                                    <?php endif; ?>
                                    <?php if ($google_plus_url): ?><div class="follow-link-wrapper follow-link-wrapper-googleplus">
                                        <a href="<?php print $google_plus_url; ?>" class="follow-link follow-link-googleplus follow-link-site" title="<?php print $site_name; ?> in Google plus"><?php print $site_name; ?> Google plus </a></div>
                                    <?php endif; ?>
                                    <?php if ($youtube_url): ?><div class="follow-link-wrapper follow-link-wrapper-this-site">
                                        <a href="<?php print $youtube_url; ?>" class="follow-link follow-link-this-site follow-link-site" title="Follow La Biele on This site (RSS)">This site (RSS)</a></div>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-wrapper clearfix">
				<div class="container-12">
					<div class="grid-12">
						<div class="region region-footer">
							<div id="block-block-5" class="block block-block block-even">
                            <div class="content">
                                <?php print t('Copyright'); ?> &copy; <?php echo date("Y"); ?>, <a href="<?php print $front_page; ?>"><?php print $site_name; ?></a>|
                                <?php print t('Theme by'); ?>  <a href="http://www.myhandworld.com" target="_blank">APT Pro</a>
                            </div>
                        </div> 
						</div>
					</div>
				</div>
			</div>
		</footer>			
	</div>
</div>






