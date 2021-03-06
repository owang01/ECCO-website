<?php
	/* define page vars */
	$include_path = '../../';
	$page_title = "ECCO | Latest Product";
	$page_id = 'research';
	$theme = 'light_background'; //dark_background || light_background
	$include_other = <<<EOF
EOF;

	include_once($include_path . 'includes/header.inc.php');
?>
	<!-- START CONTENT -->
	<div class='header_mask'></div>

<!-- Ichiro Fukumori 2019-12-04 -->

	<section class='content_page module white-bg'>
		<div class='grid_layout'>
			<header id='page_header'>
				<h1 class='article_title'>Version 4 Release 3</h1>
				<a href="../all">All Products</a>
			</header>
			<div class='wysiwyg_content'>

				<h2>ECCO Central Production Version 4 Release 3</h2>
				<small>Authors: Fukumori, Ichiro; Wang, Ou; Fenty, Ian; Forget, Gael; Heimbach, Patrick; Ponte, Rui M.</small>


				<div class="grid">
					<div class="grid-cell flexit">
						
						<h4>Description:</h4>
						<p>Version 4 Release 3 (V4r3) covers the period 1992-2015. This product is an updated edition to that described by Forget et al. (2015, Geosci. Model Dev.). Version 4 is the first multi-decadal ECCO estimate that is truly global, including the Arctic Ocean. The Release 3 edition includes improvements in time-period (1992-2015), model (e.g., sea-ice), observations (e.g., GRACE, Aquarius), and constraints (e.g., correlated errors). V4r3 is superseced by Release 4 (V4r4) that covers an additional two year period. 
						</p>

				<!-- Start  of Ou Wang 2020-04-20 -->
						<p>[<i>Image at right</i>] ECCO v4r3 Sea Level Trend 1993-2015 [mm/yr].</p>
				<!-- End of Ou Wang 2020-04-20 -->
                                                
				<!-- Start  of Ian Fenty 2020-04-17 -->
				<h2>Citation</h2>

					<p>As a condition of using this product, you <strong><i>must</i></strong> use the following citations:</p>
				  
					<div class="indent gray-bg pad-20">
					
						<b>ECCO Version 4 Release 3 Dataset:</b>
						<i><p>ECCO Consortium, 2019: ECCO Central Estimate Version 4 Release 3. Retrieved from [to be specified by user]</p></i>

						<b>ECCO Version 4 Release 3 Synopsis:</b>
						<i><p><a href="https://ecco.jpl.nasa.gov/drive/files/Version4/Release3/doc/v4r3_estimation_synopsis.pdf">ECCO Consortium, 2017: ECCO Central Estimate Version 4 Release 3 Synopsis, http://hdl.handle.net/1721.1/110380, doi:1721.1/110380 </a></p></i>

						<b>ECCO Version 4 Description:</b>
						<i><p><a href="https://www.geosci-model-dev.net/8/3071/2015/">Forget, G., J.-M. Campin, P. Heimbach, C. N. Hill, R. M. Ponte, and C. Wunsch, 2015: ECCO version 4: an integrated framework for non-linear inverse modeling and global ocean state estimation. Geoscientific Model Development, 8, 3071-3104, doi:10.5194/gmd-8-3071-2015</a></p></i>
					</div>


				<h2>Download Dataset</h2>

					<p><i>Note: ECCO's anonymous ftp server ftp://ecco.jpl.nas.gov has been discontinued.</i></p>

					<h4>Option 1: ECCO Drive</h4>

						<p>ECCO Drive <a href="https://ecco.jpl.nasa.gov/drive/files">https://ecco.jpl.nasa.gov/drive/files</a> is a WebDAV server that offers users a familiar interface to browse and download data through a web browser. Additionaly, ECCO's WebDAV server lets you mount ECCO Drive as if it were a local disk. Users can also transfer ECCO Drive files via the command line.</p>

						<p><strong>Note: To use ECCO Drive users must first register for an <a href="https://urs.earthdata.nasa.gov/documentation">Earthdata account</a> at <a href="https://urs.earthdata.nasa.gov/users/new">https://urs.earthdata.nasa.gov/users/new</a>.</strong> After creating an Earthdata account, you will be issued ECCO Drive "WebDAV/Programmaic API credentials" (login and password) which you can find at <a href="https://ecco.jpl.nasa.gov/drive/">https://ecco.jpl.nasa.gov/drive/</a>. ECCO Drive WebDAV/Programmatic API credentials are not required to browse or download files from the web portal, but they are required to mount the ECCO Drive to your local machine and to download ECCO Drive files using command line tools like <i>wget</i>. <b>Just remember that your Earthdata and ECCO Drive credentials are different!</b><br><br>

						<strong><a href="https://ecco.jpl.nasa.gov/drive/files" class="button white">ECCO Drive Web Interface</a></strong><br>
						<strong><a href="https://ecco.jpl.nasa.gov/drive/help" class="button white">ECCO Drive Mounting Instructions</a></strong><br>
						<strong><a href="https://drive.google.com/open?id=1XqQsfV1KnEX_ejQkcJoNrv6Qxknt8Kcr" class="button white">ECCO Drive Command Line Instructions</a></strong>

					<h4>Option 2: UT Austin Mirror</h4>

					<p>All ECCO V4r3 files on the ECCO Drive are mirrored at UT Austin</p><br>

						<strong><a href="https://web.corral.tacc.utexas.edu/OceanProjects/ECCO/ECCOv4/Release3/" class="button white">UT Austin FTP Mirror</a></strong>

				</div>
				<div class="grid-cell grid--1of3 margin-20">
				<!-- Start  of Ou Wang 2020-04-20 -->
					<div><img src="/assets/images/home/ECCO_v4r3_GMSLR.png"></div>
				<!-- End of Ou Wang 2020-04-20 -->
				</div>
				</div>


				<h2>Overview</h2>
				<div>
					<table class="full-width gray-striped text-left one-quarter-width">
						<tr>
							<td>Period:</td>
							<td>Jan 1992 - Dec 2015</td>
						</tr>
						<tr>
							<td>Grid & Resolution:</td>
							<td>LLC90 (1 deg)</td>
						</tr>
						<tr>
							<td>Domain:</td>
							<td>Global</td>
						</tr>
						<tr>
							<td>Variable:</td>
							<td>Ocean State (temperature, salinity, velocity, sea level, bottom pressure), Fluxes (temperature, salt, volume)</td>
						</tr>
						<tr>
							<td>Temporal Resolution:</td>
							<td>Monthly, Daily, Hourly</td>
						</tr>
						<tr>
							<td>Data Used:</td>
							<td><a href="/data/#satellite-altimetry">Satellite Altimetry</a>, <a href="/data/#argo">ARGO</a>, <a href="/data/#grace">GRACE</a>, Aquarius, CTD, XBT</td>
						</tr>
						<tr>
							<td>Type of Estimation:</td>
							<td>Adjoint</td>
						</tr>
						<tr>
							<td>Data Format(s):</td>
							<td>NetCDF, Binary</td>
						</tr>
						<tr>
							<td>Version:</td>
							<td>Release 3</td>
						</tr>
						<tr>
							<td>Contact Person:</td>
							<td>Ian Fenty, Ichiro Fukumori, Ou Wang</td>
						</tr>
						<tr>
							<td>Last Updated Date:</td>
							<td>October 15, 2017</td>
						</tr>
					</table>
				</div>

				<h2>User Guide</h2>
				<p>A detailed description of available files and their content are
summarized in a "User Guide" in the link below.</p>
				
				<p><strong><a href="./user-guide/" class="button white">Read the User Guide</a></strong></p>
				
				<h2>Analysis Tools</h2>

				<p><strong>ecco_v4_py: A Python package and tutorial for V4r3</strong></p>
					<div class="indent">
						<p>
							<a href="https://ecco-v4-python-tutorial.readthedocs.io/">https://ecco-v4-python-tutorial.readthedocs.io/</a><br/>
						</p>
					</div>

				
				<p><strong>gcmfaces: A general Matlab/Octave toolbox for analyzing V4r3</strong></p>
					<div class="indent">
						<p>
							<a href="https://gcmfaces.readthedocs.io/en/latest/index.html">https://gcmfaces.readthedocs.io/en/latest/index.html</a><br/>
						</p>
					</div>

		
				<p><strong>Guide for calculating budgets with V4r3 output</strong></p>
					<div class="indent">
						<p>
							<a href="https://ecco.jpl.nasa.gov/drive/files/Version4/Release3/doc/v4r3_budgets_howto.pdf" target="_blank" rel="noopener noreferrer">https://ecco.jpl.nasa.gov/drive/files/Version4/Release3/doc/v4r3_budgets_howto.pdf</a><br/>
						</p>
					</div>

				<p><strong>Guide for reproducing V4r3 results with MITgcm</strong></p>
					<div class="indent">
						<p>
							<a href="https://ecco.jpl.nasa.gov/drive/files/Version4/Release3/doc/v4r3_reproduction_howto.pdf" target="_blank" rel="noopener noreferrer">https://ecco.jpl.nasa.gov/drive/files/Version4/Release3/doc/v4r3_reproduction_howto.pdf</a><br/>
						</p>
					</div>
						
				<h2>Technical Reference</h2>
				<div>
					
					<p><strong>Synopsis of V4r3 estimation</strong></p>
					<div class="indent">
						<p>
							
							<a href="https://ecco.jpl.nasa.gov/drive/files/Version4/Release3/doc/v4r3_estimation_synopsis.pdf" target="_blank" rel="noopener noreferrer">https://ecco.jpl.nasa.gov/drive/files/Version4/Release3/doc/v4r3_estimation_synopsis.pdf</a><br/>
						</p>
					</div>

					<p><strong>Overview of V4r3 files</strong></p>
					<div class="indent">
						<p>
							
							<a href="https://ecco.jpl.nasa.gov/drive/files/Version4/Release3/doc/v4r3_output_fields.pdf" target="_blank" rel="noopener noreferrer">https://ecco.jpl.nasa.gov/drive/files/Version4/Release3/doc/v4r3_output_fields.pdf</a><br/>
						</p>
					</div>
					<p><strong>Plots of V4r3</strong></p>
					<div class="indent">
						<p>
							
							<a href="https://ecco.jpl.nasa.gov/drive/files/Version4/Release3/doc/v4r3_overview_plots.pdf" target="_blank" rel="noopener noreferrer">https://ecco.jpl.nasa.gov/drive/files/Version4/Release3/doc/v4r3_overview_plots.pdf</a><br/>
						</p>
					</div>
					<p><strong>Data used in V4r3</strong></p>
					<div class="indent">
						<p>
							
							<a href="https://ecco.jpl.nasa.gov/drive/files/Version4/Release3/doc/v4r3_input_data.pdf" target="_blank" rel="noopener noreferrer">https://ecco.jpl.nasa.gov/drive/files/Version4/Release3/doc/v4r3_input_data.pdf</a><br/>
						</p>
					</div>
					
					
				</div>

				<h2>Support</h2>
				<div>
					<p>No FAQs or How-To's available for this product.</p>
					<p>Access complete <a href="/knowledge">Knowledge Base</a></p>
					<p>Questions? Please contact:</p>
					
					<p>Email: <a href="mailto:Ou.Wang@jpl.nasa.gov">Ou.Wang@jpl.nasa.gov</a> or <a href="mailto:mailto:ecco-support@mit.edu">ecco-support@mit.edu</a></p>
				</div>

			</div><!-- //.wysiwyg_content -->
			
			</div><!-- //.grid -->
		</div><!-- //.grid_layout -->
	</section><!-- //.content_page -->

	<!-- END CONTENT -->
<?php include_once('../../includes/footer.inc.php'); ?>
</html>
