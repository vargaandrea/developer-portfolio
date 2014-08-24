<?php

include_once("includes/portfolio-data.php");



$isPrint = isset($_GET['print']);

$portfolioContent1 = buildPortfolioContent($portfolioData1, 2);
$portfolioContent2 = buildPortfolioContent($portfolioData2, 4);

$pageTitle = "Portfolio";

$filter = '';
switch($_REQUEST['filter']) {
    case 'all':
        $pageTitle .= ' - All';
        break;
    case 'largest':
        $filter = '';
        $pageTitle .= ' - Largest';
        break;
    case 'flex':
        $pageTitle .= ' - Flex';
        break;
    case 'flash':
        $pageTitle .= ' - Flash';
        break;
    case 'php':
        $pageTitle .= ' - PHP, MySQL';
        break;
    case 'games':
        $pageTitle .= ' - Games';
        break;
    case 'favorites':
        $pageTitle .= ' - My Favorites';
        break;
    default:
        $filter = '';

}


function buildPortfolioContent($portfolioData, $columnCount = 4) {
    global $isPrint;

    $portfolioContent = '';
    if(count($portfolioData) ==0 ) {
        return '';
    }
    $columnCounter = 0;

    switch($columnCount) {
        case 2:
            $rowDivStyle = 'one-half';
            $imageWidth = 465;

            $titleTag = 'h2';
            break;
        case 4:
            $rowDivStyle = 'one-fourth';
            $imageWidth = 217;

            $titleTag = 'h4';
            break;

    }

    foreach($portfolioData as $tmpPortfolioData) {

        if(!compliesToFilter($tmpPortfolioData)) {
            continue;
        }

        if(isset($tmpPortfolioData['code']) and $tmpPortfolioData['code']== 'spacer') {
            if($isPrint) {
                $portfolioContent .= '<div class="full-width" style="height: ' . $tmpPortfolioData['height'] . 'px">&nbsp;</div>';
            }
            continue;
        }

        if($columnCounter == $columnCount) {
            $columnCounter = 0;
        }
        if($columnCounter == 0) {
            //$portfolioContent .= '<table style=" page-break-inside: avoid;"><tr style=" page-break-inside: avoid; page-break-after: always;"><td >';
            $portfolioContent .= '<div class="full-width" style="page-break-inside: avoid">';
        }

        $features = '';

        if($tmpPortfolioData["more"]) {
            $title = sprintf('<a href="portfolio-details/%s">%s</a>',
                $tmpPortfolioData["more"],
                $tmpPortfolioData["name"]);
        } else {
            $title = $tmpPortfolioData['name'];
        }
        if(count($tmpPortfolioData['features']) > 0) {
            foreach ($tmpPortfolioData['features'] as $feature) {
                $features .= '<li>' . $feature . '</li>';
            }

            $features = '<ul class="list-arrow">' . $features . '</ul>';
        }

        $image1 = sprintf('
                            <img class="img-sha-%s" src="images/portfolio/%s" alt="%s" />
                            ', $imageWidth, $tmpPortfolioData['smallImage'], $tmpPortfolioData['name']);

        $image2 = sprintf('
                            <div class="img-sha-%s">
                                <a class="fancybox zoom-image" href="images/portfolio/%s" rel="gallery"><img src="images/portfolio/%s" alt="%s" /></a>
                            </div>
                            ', $imageWidth, $tmpPortfolioData['largeImage'], $tmpPortfolioData['smallImage'], $tmpPortfolioData['name']);

        $more = '';
        if($tmpPortfolioData["more"]  and !$isPrint) {
            $more = sprintf('<p>
                                <a class="button" href="portfolio-details/%s"><span>More</span></a>
                            </p>',
                $tmpPortfolioData["more"]

            );
            //<a class="button" href="http://www.motionloops.com"><span>Check out live</span></a>
        }
        $tmp = sprintf('
                        <div class="%s %s">
                            %s
                            <'.$titleTag.'>'.$title.'</'.$titleTag.'>

                            <div class="port-desc">%s (%s)<br/>
                            <div class="spacer-5"> </div>
                            %s
                             <span class="tech">%s</span><br/>
                            </div>
                            '.$more.'
                        </div>
                        ',
                        $rowDivStyle,
                        ($columnCounter == $columnCount-1)? 'last' : '',
                        ($tmpPortfolioData['largeImage']=="") ? $image1 : $image2,

                        $tmpPortfolioData['description'],
                        $tmpPortfolioData['year'],
                        $features,
                        $tmpPortfolioData['tech']

                        );



        $columnCounter++;
        if(strlen($tmp)>0 and $columnCounter == $columnCount) {
            $tmp .= '</div>';
            //$tmp .= '</td></tr></table>';
        }
        $portfolioContent .= $tmp;
    }

    if(strlen($portfolioContent) > 0 and $columnCounter != $columnCount) {
        $portfolioContent .= '</div>';
    }

    return $portfolioContent;
}

function compliesToFilter($portfolioData) {
    if($portfolioData["code"] == "spacer") {
        return true;
    }

    switch($_REQUEST['filter']) {
        case 'all':
            return true;
            break;
        case 'largest':
            return $portfolioData["isLarge"];
            break;
        case 'flex':
            return strpos($portfolioData["tech"], "Flex") !== false;
            break;
        case 'flash':
            return strpos($portfolioData["tech"], "Flash") !== false;
            break;
        case 'php':
            return strpos($portfolioData["tech"], "PHP") !== false;
            break;
        case 'games':
            return $portfolioData["isGame"];
            break;
        case 'favorites':
            return $portfolioData["isFavorite"];
            break;

    }

    return true;

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
	<link rel="stylesheet" type="text/css" href="css/style<?php print($isPrint?'_print':'');?>.css" />
	<link rel="stylesheet" type="text/css" href="css/colors<?php print($isPrint?'_print':'');?>.css" />
	<link rel="stylesheet" type="text/css" href="css/superfish.css" />
	<link rel="stylesheet" type="text/css" href="js/fancybox/jquery.fancybox-1.3.1.css" /> 
</head>

<body>
	<div id="wrap">
	
		<div id="header" class="clearfix">
		
			<div id="logo">
				<span><a href="index.html">Andrea Varga</a></span>
			</div>
            <?php
                if($isPrint) {
            ?>
                <div class="top-portfolio-link">
                    <a href="http://andrea.narancs.net/portfolio/">http://andrea.narancs.net/portfolio/</a>
                </div>
            <?php
                } else {
            ?>
                <ul id="nav" class="sf-menu">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="cv-full.html">CV</a></li>
                    <li><a href="portfolio.php">Portfolio</a></li>
                    <!--<li><a href="contact.php">Contact</a></li>-->
                </ul><!--nav ends-->
            <?php
                }
            ?>
			
		</div><!--header ends-->
		
		<div id="mini-header"></div><!--mini-header ends-->		
		
		<div id="content" class="clearfix">


            <div class="full-width" style="page-break-inside: avoid">
                <div class="one-half ">
                    <h2><?php print $pageTitle; ?></h2>
                </div>

                <div class="one-half last" style="text-align: right;">
                    <?php
                        if(!$isPrint) {
                            ?>
                            <ul class="filter-buttons">
                                <li><a class="portfolio-filter" href="?filter=all">All</a></li>
                                <li><a class="portfolio-filter" href="?filter=largest">Largest</a></li>
                                <li><a class="portfolio-filter" href="?filter=flex">Flex</a></li>
                                <li><a class="portfolio-filter" href="?filter=flash">Flash</a></li>
                                <li><a class="portfolio-filter" href="?filter=php">PHP</a></li>
                                <li><a class="portfolio-filter" href="?filter=games">Games</a></li>
                                <!--<li><a class="portfolio-filter" href="?filter=favorites">My Favorites</a></li>-->
                            </ul>
                        <?php
                        }
                    ?>
                </div>
            </div>

            <hr/>
            <?php
                print $portfolioContent1;
                if(strlen($portfolioContent1) > 0 ) {
                    print "<hr />";
                }
            ?>
            <?php print $portfolioContent2; ?>



			
		</div><!--content ends-->

        <div id="mini-footer"></div><!--mini-footer ends-->

        <div id="footer" class="clearfix" style="height: 100">
            <ul class="social right" style="height: 100">
                <li><a href="http://de.linkedin.com/pub/andrea-varga/11/5a1/55b"><img alt="linkedin" src="images/social-icons/linkedin_16.png" /></a></li>
            </ul>
            <span>&copy; 2014 <a href="index.html">Andrea Varga</a></span>

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