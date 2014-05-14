<div id="page">
	<div class="main-bg">
		<header<?php print $header_attributes; ?>>
			<div class="container">
				<div class="section-1 clearfix">
					<div class="row">
						<div class="col-md-4 alpha">
							<?php if($page['header_left']) : ?>
								<?php print render($page['header_left']); ?>
							<?php endif; ?>
						</div>
						<div class="col-md-4">
							<a href="<?php print base_path(); ?>" title="Home" rel="home" id="logo">
								<img src="<?php print $logo; ?>" alt="Home">
							</a>
						</div>
						<div class="col-md-4 omega">
							<?php if($page['header_right']) : ?>
								<?php print render($page['header_right']); ?>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</header>
		<div id="main-wrapper">
			<div class="container">
					<div class="section-2 clearfix">
					<div class="row"><div class="col-md-12">
						<div class="search">
							<?php if ($main_menu): ?>
								<?php print render($page['main_menu']); ?>
							<?php endif; ?>
						</div></div></div>
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
							<aside id="sidebar-first" class="column col-md-2 alpha" role="complementary">
								<div class="section">
									<?php print render($page['sidebar_first']); ?>
								</div>
							</aside>
							<div id="content" class="column col-md-7 alpha omega" role="main">
								<div class="section">
									<?php if ($page['content']): ?>
										<?php print render($page['content']); ?>
									<?php endif; ?>
								</div>
							</div>
							<aside id="sidebar-second" class="column col-md-3 omega" role="complementary">
								<div class="section">
									<?php print render($page['sidebar_second']); ?>
								</div>
							</aside>
						<?php elseif($page['sidebar_first']): ?>
							<aside id="sidebar-first" class="column col-md-2 alpha" role="complementary">
								<div class="section">
									<?php print render($page['sidebar_first']); ?>
								</div>
							</aside>
							<div id="content" class="column col-md-10 omega" role="main">
								<div class="section">
									<?php if ($page['content']): ?>
										<?php print render($page['content']); ?>
									<?php endif; ?>
								</div>
							</div>	
						<?php elseif($page['sidebar_second']): ?>
							<div id="content" class="column col-md-9 alpha" role="main">
								<div class="section">
									<?php if ($page['content']): ?>
										<?php print render($page['content']); ?>
									<?php endif; ?>
								</div>
							</div>
							<aside id="sidebar-second" class="column col-md-3 omega" role="complementary">
								<div class="section">
									<?php print render($page['sidebar_second']); ?>
								</div>
							</aside>						
						<?php else: ?>
							<div id="content" class="column col-md-12 alpha omega" role="main">
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
			<div class="footer-top-wrapper">
				<div class="footer-top-shadow clearfix">
					<div class="container">
						<div class="col-md-12">
							<?php print render($page['footer_top']); ?>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-wrapper clearfix">
				<div class="container">
					<div class="col-md-12">
						<?php print render($page['footer']); ?>
					</div>
				</div>
			</div>
			<?php print $attribution; ?>
		</footer>
	<?php endif; ?>
	
	<div class="lrcounter_verticalsimplebox lrcounter-vertical-vertical" style="background-color: transparent; border: 0px solid rgb(221, 221, 221); border-top-left-radius: 6px; border-top-right-radius: 6px; border-bottom-right-radius: 6px; border-bottom-left-radius: 6px; padding: 0px; clear: both; display: inline-block; text-align: center; box-shadow: rgb(209, 209, 209) 0px 0px 0px inset; z-index: 9999; left: 0px; top: 80px; position: fixed;">
		<table style="border:none !important;background:none !important;">
			<tbody style="border:none !important;background:none !important;">
				<tr style="border:none !important;background:none !important;">
					<td style="border:none !important;background:none !important;">
						<div class="fb-like" data-href="<?php print $front_page; ?>" data-layout="box_count" data-action="like" data-show-faces="true" data-share="true"></div>
					</td>
				</tr>
				<tr style="border:none !important;background:none !important;">
					<td style="border:none !important;background:none !important;">
						<div class="g-plusone" data-href="<?php print $front_page; ?>" data-size="tall"></div>
					</td>
				</tr>
				<tr style="border:none !important;background:none !important;">
					<td style="border:none !important;background:none !important;">
						<div class="g-plus" data-href="<?php print $front_page; ?>" data-action="share" data-annotation="vertical-bubble" data-height="60"></div>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	
</div>

