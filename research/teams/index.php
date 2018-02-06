<?php
	/* define page vars */
	$include_path = '../../';
	$page_title = "ECCO | Research Teams";
	$page_id = 'research';
	$theme = 'light_background'; //dark_background || light_background
	$include_other = <<<EOF
EOF;

	$ogImage = "https://via.placeholder.com/1280x720";

	include_once($include_path . 'includes/header.inc.php');
?>
	<!-- START CONTENT -->
	<div class='header_mask'></div>

	<section class='content_page'>
		<section class="module">
			<div class='grid_layout'>
				<header id='page_header'>
					<h1 class='article_title'>Research Teams</h1>
				</header>
				<div class="wysiwyg_content">

					<div class='grid'>
						<div class="grid-cell grid--1of3 border">
							<div class="pad-20">
								<img src="/assets/images/logo/jpl_logo.jpg" alt="JPL Logo" title="JPL Logo">
								<p>NASA's Jet Propulsion Laboratory (JPL) is the leading U.S. center for robotic exploration of the solar system, and has 19 spacecraft and 10 major instruments carrying out planetary, Earth science and space-based astronomy missions.</p>
								<p><a href="https://www.jpl.nasa.gov/" target="_blank" rel="noopener noreferrer">Visit the JPL website</a>.</p>
							</div>
						</div>
						<div class="grid-cell grid--1of3 border">
							<div class="pad-20">
								<img src="/assets/images/logo/mit_logo.jpg" alt="MIT Logo" title="MIT Logo">
								<p>The mission of the Massachusetts Institute of Technology is to advance knowledge and educate students in science, technology, and other areas of scholarship that will best serve the nation and the world in the 21st century. We are also driven to bring knowledge to bear on the world’s great challenges.</p>
								<p><a href="http://web.mit.edu/" target="_blank" rel="noopener noreferrer">Visit the MIT website</a>.</p>
							</div>
						</div>
						<div class="grid-cell grid--1of3 border">
							<div class="pad-20">
								<img src="/assets/images/logo/texas_logo.jpg" alt="University of Texas, Austin Logo" title="University of Texas, Austin Logo">
								<p>The University of Texas at Austin provides public access to a first-class education and the tools of discovery. This has resulted in a culture of ambition and leadership, where physical scale is matched by bold goals and achievements.</p>
								<p><a href="https://www.utexas.edu/" target="_blank" rel="noopener noreferrer">Visit the University of Texas, Austin website</a>.</p>
							</div>
						</div>
						<div class="grid-cell grid--1of3 border">
							<div class="pad-20">
								<img src="/assets/images/logo/aer_logo.jpg" alt="Atmospheric &amp; Environmental Research, Inc. Logo" title="Atmospheric &amp; Environmental Research, Inc. Logo">
								<p>AER scientists and engineers help governments and businesses solve the world’s biggest climate issues. They prepare agencies like NOAA, NASA and the Department of Defense, along with large insurance, investment and energy companies to anticipate, manage, react to and profit from weather and climate related risk.</p>
								<p><a href="https://www.aer.com/" target="_blank" rel="noopener noreferrer">Visit the Atmospheric &amp; Environmental Research, Inc. website</a>.</p>
							</div>
						</div>
						<div class="grid-cell grid--1of3 border">
							<div class="pad-20">
								<img src="/assets/images/logo/scripps_logo.jpg" alt="Scripps Logo" title="Scripps Logo">
								<p>A department of UC San Diego, Scripps Institution of Oceanography is one of the oldest, largest, and most important centers for ocean, earth and atmospheric science research, education, and public service in the world.</p>
								<p><a href="https://scripps.ucsd.edu/" target="_blank" rel="noopener noreferrer">Visit the UC, San Diego website</a>.</p>
							</div>
						</div>
						<div class="grid-cell grid--1of3 border">
							<div class="pad-20">
								<img src="/assets/images/logo/uhh_logo.jpg" alt="University of Hamburg, Germany Logo" title="University of Hamburg, Germany Logo">
								<p>Universität Hamburg is the largest institution for research and education in the north of Germany. As one of the country's largest universities, we offer a diverse course spectrum and excellent research opportunities.</p>
								<p><a href="https://www.uni-hamburg.de/en.html" target="_blank" rel="noopener noreferrer">Visit the University of Hamburg, Germany website</a>.</p>
							</div>
						</div>
					</div>

				</div>
			</div><!-- //.grid_layout -->
		</section><!-- //section -->
	</section><!-- //.content_page -->

	<!-- END CONTENT -->
<?php include_once($include_path . 'includes/footer.inc.php'); ?>
</html>
