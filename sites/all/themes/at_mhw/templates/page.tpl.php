<div id="page">
	<div class="main-bg">
		<header<?php print $header_attributes; ?>>
			<div class="container-12">
				<div class="grid-12">
					<div class="section-1 clearfix">
						<div class="grid-4 alpha">
							<?php if($page['header_left']) : ?>
								<?php print render($page['header_left']); ?>
							<?php endif; ?>
						</div>
						<div class="grid-4">
							<a href="<?php print base_path(); ?>" title="Home" rel="home" id="logo">
								<img src="<?php print $logo; ?>" alt="Home">
							</a>
						</div>
						<div class="grid-4 omega">
							<?php if($page['header_right']) : ?>
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
							<?php if ($main_menu): ?>
								<?php print render($page['main_menu']); ?>
							<?php endif; ?>
						</div>
					</div><!-- end .section-2 -->
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
						<?php if ($page['sidebar_first'] && $page['sidebar_second']): ?>
							<aside id="sidebar-first" class="column grid-3 alpha" role="complementary">
								<div class="section">
									<?php print render($page['sidebar_first']); ?>
								</div>
							</aside>
							<div id="content" class="column grid-6 alpha omega" role="main">
								<div class="section">
									<?php if ($page['content']): ?>
										<?php print render($page['content']); ?>
									<?php endif; ?>
								</div>
							</div>
							<aside id="sidebar-second" class="column grid-3 omega" role="complementary">
								<div class="section">
									<?php print render($page['sidebar_second']); ?>
								</div>
							</aside>
						<?php elseif($page['sidebar_first']): ?>
							<aside id="sidebar-first" class="column grid-3 alpha" role="complementary">
								<div class="section">
									<?php print render($page['sidebar_first']); ?>
								</div>
							</aside>
							<div id="content" class="column grid-9 omega" role="main">
								<div class="section">
									<?php if ($page['content']): ?>
										<?php print render($page['content']); ?>
									<?php endif; ?>
								</div>
							</div>	
						<?php elseif($page['sidebar_second']): ?>
							<div id="content" class="column grid-9 alpha" role="main">
								<div class="section">
									<?php if ($page['content']): ?>
										<?php print render($page['content']); ?>
									<?php endif; ?>
								</div>
							</div>
							<aside id="sidebar-second" class="column grid-3 omega" role="complementary">
								<div class="section">
									<?php print render($page['sidebar_second']); ?>
								</div>
							</aside>						
						<?php else: ?>
							<div id="content" class="column grid-12 alpha omega" role="main">
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
		</div>
		
	</div><!-- /end .main-bg -->

	<!-- !Footer -->
	<?php if ($page['footer'] || $attribution): ?>
		<footer<?php print $footer_attributes; ?>>
			<div class="footer-top-wrapper">
				<div class="footer-top-shadow clearfix">
					<div class="container-12">
						<div class="grid-12">
							<?php print render($page['footer_top']); ?>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-wrapper clearfix">
				<div class="container-12">
					<div class="grid-12">
						<?php print render($page['footer']); ?>
					</div>
				</div>
			</div>
			<?php print $attribution; ?>
		</footer>
	<?php endif; ?>
</div>

