<?php

include_once("includes/portfolio-data.php");



$portfolioContent1 = buildPortfolioContent($portfolioData1);
$portfolioContent2 = buildPortfolioContent($portfolioData2);




function buildPortfolioContent($portfolioData) {
    $portfolioContent = '';
    if(count($portfolioData) ==0 ) {
        return '';
    }
    $counter4 = 0;

    foreach($portfolioData as $portfolioCode=>$tmpPortfolioData) {
        if($counter4 == 4) {
            $counter4 = 0;
        }
        if($counter4 == 0) {
            //$portfolioContent .= '<table style=" page-break-inside: avoid;"><tr style=" page-break-inside: avoid; page-break-after: always;"><td >';
            $portfolioContent .= '<div class="full-width" style="page-break-inside: avoid">';
        }
        $image1 = sprintf('
                            <img class="img-sha-217" src="images/portfolio/%s" alt="%s" />
                            ', $tmpPortfolioData['smallImage'], $tmpPortfolioData['name']);

        $image2 = sprintf('
                            <div class="img-sha-217">
                                <a class="fancybox zoom-image" href="images/portfolio/%s" rel="gallery"><img src="images/portfolio/%s" alt="%s" /></a>
                            </div>
                            ', $tmpPortfolioData['largeImage'], $tmpPortfolioData['smallImage'], $tmpPortfolioData['name']);
        $tmp = sprintf('
                        <div class="one-fourth %s">
                            %s
                            <h4>%s</h4>
                            <p> %s (%s)<br/>
                             <span class="tech">%s</span><br/>
                            </p>
                        </div>
                        ',
                        $counter4 == 3? 'last' : '',
                        ($tmpPortfolioData['largeImage']=="") ? $image1 : $image2,
                        $tmpPortfolioData['name'],
                        $tmpPortfolioData['description'],
                        $tmpPortfolioData['year'],
                        $tmpPortfolioData['tech']

                        );

        $counter4++;
        if($counter4 == 4) {
            $tmp .= '</div>';
            //$tmp .= '</td></tr></table>';
        }
        $portfolioContent .= $tmp;
    }

    if($counter4 != 4) {
        $portfolioContent .= '</div>';
    }

    return $portfolioContent;
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="author" content="AndreaVarga" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<title>Andrea Varga - Portfolio</title>

	<!-- Stylesheets -->
	<link rel="stylesheet" type="text/css" href="css/reset.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/colors.css" />
	<link rel="stylesheet" type="text/css" href="css/superfish.css" />
	<link rel="stylesheet" type="text/css" href="js/fancybox/jquery.fancybox-1.3.1.css" /> 
</head>

<body>
	<div id="wrap">
	
		<div id="header" class="clearfix">
		
			<div id="logo">
				<span><a href="index.html">Andrea Varga</a></span>
			</div>
			
			<ul id="nav" class="sf-menu">
				<li><a href="index.html">Home</a></li>
				<li><a href="about.html">About</a></li>
				<li><a href="cv-full.htm">CV</a>
					<ul>

						
						<li><a href="cv-short.html">CV short</a></li>
						<li><a href="cv-full.html">CV full</a></li>
					</ul>
				</li>
                <li><a>Portfolio</a>
                    <ul>


                        <li><a href="portfolio.php">Portfolio full</a></li>
                        <li><a href="cv-full.html">Portfolio biggest projects</a></li>
                    </ul>
                </li>
				<li><a href="contact.php">Contact</a></li>
			</ul><!--nav ends-->
			
		</div><!--header ends-->
		
		<div id="mini-header"></div><!--mini-header ends-->		
		
		<div id="content" class="clearfix">
		
			<h2>Portfolio</h2>
			<hr />

            <?php print $portfolioContent1; ?>

            <div class="full-width">
                <div class="one-half">
                    <div class="img-sha-465">
                        <a class="fancybox zoom-image" href="images/portfolio/talent.jpg"><img src="images/portfolio/sdg/sdg_180.jpg" alt="Talent Transformation App" /></a>
                    </div>
                    <h2><a href="portfolio/superDataGrid.html">FIT Talent Transformation</a></h2>
                    <p>xxxx
                    <ul class="list-arrow">
                        <li>1</li>
                        <li>2</li>
                    </ul>
                    Technologies: Flax, PHP, MySQL<br/>
                    Year: 2012-2014</p>
                    <p>
                        <a class="button" href="portfolio/sdg.html"><span>More</span></a>
                    </p>
                </div>

                <div class="one-half last">
                    <div class="img-sha-465">
                        <a class="fancybox zoom-image" href="images/portfolio/translator.jpg"><img src="images/portfolio/translator_logo.jpg" alt="Translator" /></a>
                    </div>
                    <h2>Translator</h2>
                    <p>Web Application for aiding the translation of texts for various FIT projects.
                    <ul class="list-arrow">
                        <li>import and export texts from various project databases and .po files</li>
                        <li>UI for translating texts, with filtering by projects and tags, word count</li>
                        <li>user management for translator accounts</li>

                    </ul>
                    Technologies: Flex, PHP, MySQL<br/>
                    Year: 2010-2011
                    </p>
                    <p>
                        <a class="button" href="portfolio/ppm.html"><span>More</span></a>
                    </p>
                </div>
            </div>


            <div class="full-width">
                <div class="one-half">
                    <div class="img-sha-465">
                        <a class="fancybox zoom-image" href="images/portfolio/sdg/sdg.jpg"><img src="images/portfolio/sdg/sdg_180.jpg" alt="Super Data Grid" /></a>
                    </div>
                    <h2><a href="portfolio/superDataGrid.html">Super Data Grid</a></h2>
                    <p>Feature rich, highly customizable Flex Data Grid component:
                    <ul class="list-arrow">
                        <li>filtering  and sorting based on the datatype of the column</li>
                        <li>selectable rows, select/deselect all</li>
                        <li>customizable column widths and column order</li>
                        <li>hideable columns</li>
                        <li>saving user defined views</li>
                        <li>fullscreen</li>
                        <li>lazy loading through scrolling or paging</li>
                        <li>HTML, XLSX, CSV export</li>
                    </ul>
                    Technologies: Flax, PHP<br/>
                    Year: 2012</p>
                    <p>
                        <a class="button" href="portfolio/sdg.html"><span>More</span></a>
                    </p>
                </div>

                <div class="one-half last">
                    <div class="img-sha-465">
                        <a class="fancybox zoom-image" href="images/portfolio/ppm/ppm_calibration1.jpg"><img src="images/portfolio/ppm/ppm_calibration1_180.jpg" alt="PPM" /></a>
                    </div>
                    <h2><a href="portfolio/ppm.html">PPM</a></h2>
                    <p>Employee Potential and Performance Management
                    <ul class="list-arrow">
                        <li>administration area for managing organization structure with employees, their tasks and user accounts, performance and potential scales, reporting</li>
                        <li>manager area for goal settings, team and self assessment, calibration, graphical representation of results</li>
                    </ul>
                    Technologies: Flex, PHP, MySQL<br/>
                    Year: 2010-2011
                    </p>
                    <p>
                        <a class="button" href="portfolio/ppm.html"><span>More</span></a>
                    </p>
                </div>
            </div>


            <!-- Motionloops -->

            <div class="full-width">
				<div class="one-half">
					<div class="img-sha-465">
						<a class="fancybox zoom-image" href="images/portfolio/motionloops/motionloops.jpg"><img src="images/portfolio/motionloops/motionloops_small.jpg" alt="Motionloops" /></a>
					</div>
					<h2><a href="portfolio/motionloops.html">Motionloops</a></h2>
					<p>Motionloops sells looping video clips for video editing, presentations and live performances. Started in 2006, the project is in constant evolution, including many features, like:
                        <ul class="list-arrow">
                            <li>integration with Amazon S3 (for video file storage)</li>
                            <li>integration with LivePerson</li>
                            <li>integration with Echo INC payment gateway</li>
                            <li>on the fly UPS shipping rate calculator</li>
                            <li>integration with Google Analytics</li>
                            <li>integration with NetTracker</li>
                            <li>administration area for complete content management and reporting (Flash and Flex based user interface),</li>
                            <li>automatic generation of complete product catalog in PDF</li>
                            <li>email content creation for marketing</li>
                        </ul>
                    Technologies: Flash (ActionScript 2), PHP, HTML, JavaScript, MySQL, Amazon S3<br/>
                    Year: 2006-2011</p>
                    <p>
                        <a class="button" href="portfolio/motionloops.html"><span>More</span></a>
                        <a class="button" href="http://www.motionloops.com"><span>Live preview</span></a>
                    </p>
				</div>
				<div class="one-half last">
					<div class="img-sha-465">
						<a class="fancybox zoom-image" href="images/portfolio/motionloops/seqDL.jpg"><img src="images/portfolio/motionloops/seqDL_small.jpg" alt="Sequential Downloader" /></a>
					</div>
					<h2>Sequential Downloader</h2>
					<p>Desktop Application (AIR - Flex 3) - allows sequential downloading of large video files for Motionloops.com clients.
                        Users can:
                        <ul class="list-arrow">
                            <li>users can log in using their Motionloops.com account</li>
                            <li>available videos are organized in tree structure by volumes, formats and resolutions</li>
                            <li>users can easily check multiple files and download in a specified location</li>
                            <li>destination folder of the download is remembered throughout sessions</li>
                        </ul>
                    Technologies: Flex 3, Flash, PHP, MySQL, Amazon S3<br/>
                    Year: 2011
                    </p>
				</div>
			</div>
            <hr />
            <!-- Planung -->
            <div class="full-width">
				<div class="one-half">
					<div class="img-sha-465">
						<a class="fancybox zoom-image" href="images/portfolio/planung/planung.jpg"><img src="images/portfolio/planung/planung_small.jpg" alt="Kaderplanung" /></a>
					</div>
					<h2><a href="portfolio/kaderplanung.html">Kaderplanung</a></h2>
					<p>Flex based web-application for aiding soccer club managers (internal use). Features:
                        <ul class="list-arrow">
                            <li>Full management of players and trainers of the club, including contracts, salaries, expenses etc. </li>
                            <li>Different level of data access for different users (CFO, Sports manager, Young Team manager, Scouting )</li>
                            <li>Possibility to simulate different play scenarios and budget scenarios </li>
                            <li>Reporting</li>
                            <li>Data encryption </li>
                        </ul>
                    Technologies: Flex 3, PHP, MySQL<br/>
                    Year: 2010</p>
                    <p>
					    <a class="button" href="portfolio/kaderplanung.html"><span>More</span></a>
                    </p>
				</div>

				<div class="one-half last">
					<div class="img-sha-465">
						<a class="fancybox zoom-image" href="images/portfolio/virtualro/virtualro_main.jpg"><img src="images/portfolio/virtualro/virtualro_main_180.jpg" alt="Virtualro - Flexible e-commerce solution" /></a>
					</div>
					<h2><a href="portfolio/virtualro.html">Virtualro - Flexible e-commerce</a></h2>
					<p>Flex based platform for e-commerce and shopping cart software<br/>
                        Features:
                        <ul class="list-arrow">
                            <li>administration area for complete management of product catalog with categories, clients, orders, etc.</li>
                            <li>instant product sorting and filtering</li>
                            <li>multi-lingual and multi-currency</li>
                            <li>individual styling and coloring of the store</li>
                            <li>integration with various payment gateways and shipping services</li>
                        </ul>
                    Technologies: Flex 2 (with Cairngorm), PHP, MySQL<br/>
                    Year: 2007-2009</p>
                    <p>
                    <a class="button" href="portfolio/virtualro.html"><span>More</span></a>
                    </p>

				</div>
			</div>

            <hr />
            <?php print $portfolioContent2; ?>



			
		</div><!--content ends-->
		
		<div id="mini-footer"></div><!--mini-footer ends-->
		
		<div id="footer" class="clearfix">
			<ul class="social right">
				<li><a href="#"><img alt="facebook" src="images/social-icons/facebook_16.png" /></a></li>
				<li><a href="#"><img alt="twitter" src="images/social-icons/twitter_16.png" /></a></li>
				<li><a href="#"><img alt="flickr" src="images/social-icons/flickr_16.png" /></a></li>
				<li><a href="#"><img alt="linkedin" src="images/social-icons/linkedin_16.png" /></a></li>
				<li><a href="#"><img alt="facebook" src="images/social-icons/tumblr_16.png" /></a></li>
			</ul>
			<span>Bridge - HTML theme &copy; 2010. Created by <a href="http://themeforest.net/user/AndreaVarga">AndreaVarga</a></span>
		</div><!--footer ends-->
		
	</div><!--wrap ends-->
	
	<!-- jQuery Scripts -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/hoverIntent.js"></script>
	
	<!-- Cufon font replacement -->
	<script type="text/javascript" src="js/cufon-yui.js" ></script>
	<script type="text/javascript" src="js/Sansation_300.font.js"></script>
	
	<!-- Superfish dropdown menu -->
	<script type="text/javascript" src="js/superfish.js"></script>
	<script type="text/javascript" src="js/supersubs.js"></script>

	<!-- Fancybox - image popup -->
	<script type="text/javascript" src="js/fancybox/jquery.mousewheel-3.0.2.pack.js"></script>
	<script type="text/javascript" src="js/fancybox/jquery.fancybox-1.3.1.js"></script>

	<!-- Sliders -->
	<script type="text/javascript" src="js/jquery.cycle.all.js"></script>
	<script type="text/javascript" src="js/coin-slider.js"></script>
	
	<!-- Custom javasript -->
	<script type="text/javascript" src="js/custom.js"></script>
	
	<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>