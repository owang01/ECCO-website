<?php
	/* define page vars */
	$include_path = '../';
	$page_title = "ECCO | Knowledge";
	$page_id = 'research';
	$theme = 'light_background'; //dark_background || light_background
	$include_other = <<<EOF
EOF;

	include_once($include_path . 'includes/header.inc.php');
?>
	<!-- START CONTENT -->
	<div class='header_mask'></div>

	<section class='content_page module'>
		<div class='grid_layout'>
			<header id='page_header'>
				<h1 class='article_title'>Research</h1>
			</header>
			<div class='wysiwyg_content'>
				<!--<p>Select an option below.</p>-->
			</div><!-- //.wysiwyg_content -->
			<!--<br /><br />-->
			<div class="grid">

				<!-- Ian : I updated all of the icons 2018-11-16 and added
				           publication highlights -->
				<!-- Ou : I fixed two broken links from Topics and Teams. -->
			 	<div class="grid-cell flexit">
			 		<a href="topics/">
		 				<img alt="Topics" src="/assets/images/icons/new_research_topics.jpg">
		 				<div class="content_title text-center">Topics</div>
			 		</a>
			 	</div>

			 	<div class="grid-cell flexit">
			 		<a href="teams/">
	 					<img alt="Teams" src="/assets/images/icons/new_teams.jpg">
		 				<div class="content_title text-center">Teams</div>
			 		</a>
			 	</div>
				<!-- Ou : END "I fixed two broken links from Topics and Teams." -->

			 	<?php /*
			 	<div class="grid-cell flexit">
			 		<a href="scientists/">
		 				<img alt="Scientists" src="/assets/images/icons/scientists.jpg">
		 				<div class="content_title text-center">Scientists</div>
			 		</a>
			 	</div>
			 	*/ ?>

				<div class="grid-cell flexit">
			 		<a href="publicationHighlights/">
		 				<img alt="Publications" src="/assets/images/icons/publication_hightlights.png">
		 				<div class="content_title text-center">Publication Highlights</div>
			 		</a>
			 	</div>


			 	<div class="grid-cell flexit">
			 		<a href="publications/">
		 				<img alt="Publications" src="/assets/images/icons/new_publications.png">
		 				<div class="content_title text-center">Publications</div>
			 		</a>
			 	</div>

			 	<div class="grid-cell flexit">
			 		<a href="presentations/">
			 			<img alt="Presentations" src="/assets/images/icons/new_presentation.png">
			 			<div class="content_title text-center">Presentations</div>
			 		</a>
			 	</div>
			 	<!-- Ian : end I updated all of the icons 2018-11-16 -->

			</div><!-- //.grid -->
		</div><!-- //.grid_layout -->
	</section><!-- //.content_page -->

	<!-- END CONTENT -->
<?php include_once($include_path . 'includes/footer.inc.php'); ?>
</html>
