<div id="page-wrapper">
	<div id="page">
		<div class="shadow">
			<div id="pre-header" class="clearfix">
				<div class="container">
					<!-- #pre-header-inside -->
					<div id="pre-header-inside" class="clearfix">
							<div class="col-md-12">
									<?php print render($page['header_top']); ?>
							</div>
					</div>
					<!-- EOF: #pre-header-inside -->

				</div>
				<div class="toggle-control"><a href="javascript:showPreHeader()"><span class="glyphicon glyphicon-plus"></span></a></div>
			</div>
			<header<?php print $header_attributes; ?>>
				<div class="section-1 clearfix">
					<div class="container">
						<div class="col-md-12">
							<?php if ($page['user_menu']): ?>
								<?php print render($page['user_menu']); ?>
							<?php endif; ?>
						</div>
					</div>
				</div><!-- end .section-5 -->
					<div class="container">
						<div class="col-md-12">
							<?php if ($logo): ?>
								<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
									<img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
								</a>
							<?php endif; ?>
						</div>
					</div>
				<div class="section-2 clearfix">
					<div class="container">
						<div class="main-menu">
							<div class="navbar navbar-inverse" role="navigation">
								<div class="container">
									<div class="navbar-header">
										<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
											<span class="sr-only">Toggle navigation</span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
									</div>
									<div class="collapse navbar-collapse">
										<?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('nav', 'navbar-nav')))); ?>
									</div>
								</div>
							</div>
						</div>
						<div class="pseudoStickyBlock" style="position: relative; display: block; height: 0px;"></div>
					</div>
				</div><!-- end .section-2 -->
			</header>
			<div id="main-wrapper">
				<div class="container">
						<div class="section-3 clearfix">
							<?php if ($page['header']): ?>
								<?php print render($page['header']); ?>
							<?php endif; ?>
						</div><!-- end .section-3 -->
						<div class="section-4 clearfix">
							<?php if ($page['header_bottom']): ?>
								<?php print render($page['header_bottom']); ?>
							<?php endif; ?>
						</div><!-- end .section-4 -->
						<?php if ($page['content_top']): ?>
							<?php print render($tabs); ?>
							<?php print render($page['content_top']); ?>
						<?php endif; ?>
						<div id="main" class="clearfix">
								<?php print $breadcrumb; ?>
							<?php if ($page['sidebar_first'] && $page['sidebar_second']): ?>
								<div id="sidebar-first" class="column col-md-2" role="complementary">
									<div class="section">
										<?php print render($page['sidebar_first']); ?>
										
									</div>
								</div>
								<div id="content" class="column col-md-7" role="main">
									<div class="section">
										<?php if ($title): ?>
											<h1 id="page-title">
												<?php print $title; ?>
											</h1>
										<?php endif; ?>
										<?php if ($tabs) : ?><div class="user-tabs"><?php print render($tabs); ?></div><?php endif; ?>
										<?php if ($page['content']): ?>
											<?php print render($page['content']); ?>
										<?php endif; ?>
									</div>
								</div>
								<div id="sidebar-second" class="column col-md-3" role="complementary">
									<div class="section">
										<?php print render($page['sidebar_second']); ?>
									</div>
								</div>
							<?php elseif($page['sidebar_first']): ?>
								<div id="sidebar-first" class="column col-md-2" role="complementary">
									<div class="section">
										<?php print render($page['sidebar_first']); ?>
									</div>
								</div>
								<div id="content" class="column col-md-10" role="main">
									<div class="section">
										<?php if ($title): ?>
											<h1 id="page-title">
												<?php print $title; ?>
											</h1>
										<?php endif; ?>
										<?php if ($tabs) : ?><div class="user-tabs"><?php print render($tabs); ?></div><?php endif; ?>
										<?php if ($page['content']): ?>
											<?php print render($page['content']); ?>
										<?php endif; ?>
									</div>
								</div>	
							<?php elseif($page['sidebar_second']): ?>
								<div id="content" class="column col-md-9" role="main">
									<div class="section">
										<?php if ($title): ?>
											<h1 id="page-title">
												<?php print $title; ?>
											</h1>
										<?php endif; ?>
										<?php if ($tabs) : ?><div class="user-tabs"><?php print render($tabs); ?></div><?php endif; ?>
										<?php if ($page['content']): ?>
											<?php print render($page['content']); ?>
										<?php endif; ?>
									</div>
								</div>
								<div id="sidebar-second" class="column col-md-3" role="complementary">
									<div class="section">
										<?php print render($page['sidebar_second']); ?>
									</div>
								</div>						
							<?php else: ?>
								<div id="content" class="column col-md-12" role="main">
									<div class="section">
										<?php if ($title): ?>
											<h1 id="page-title">
												<?php print $title; ?>
											</h1>
										<?php endif; ?>
										<?php if ($tabs) : ?><div class="user-tabs"><?php print render($tabs); ?></div><?php endif; ?>
										<?php if ($page['content']): ?>
											<?php print render($page['content']); ?>
										<?php endif; ?>
									</div>
								</div>
							<?php endif; ?>
						</div>
				</div>
			</div>
			
		</div><!-- /end .main-bg -->

		<!-- !Footer -->
		<?php if ($page['footer'] || $attribution): ?>
			<footer<?php print $footer_attributes; ?>>
				<div class="container">
					<div class="footer-top">
						<div class="col-md-12">
							<div class="container">
								<div class="row">
							<?php print render($page['footer_top']); ?>
							</div>
							</div>
						</div>
					</div>
					<div class="footer">
						<div class="col-md-12">
							<?php print render($page['footer']); ?>
						</div>
					</div>
				</div>
				<?php print $attribution; ?>
			</footer>
		<?php endif; ?>
	</div>
</div>

