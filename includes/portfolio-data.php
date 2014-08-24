<?php
/**
 * Created by IntelliJ IDEA.
 * User: andi
 * Date: 6/5/11
 * Time: 8:15 PM
 * To change this template use File | Settings | File Templates.
 */


$portfolioData1 = array(

    array(
        "name" => "FIT Talent Management",
        "description" => " Application offering integrated Talent Management, for both mobile devices and desktop computers",
        "features" => array(
            "organization design",
            "employee goal setting and evaluation",
            "talent calibration"
        ),

        "tech" => "Flex, PHP, MySQL",
        "year" => '2013-2014',
        "smallImage" => "fit-talent/fit-talent_login_180.jpg",
        "largeImage" => "fit-talent/fit-talent_login.jpg",
        "more" => "fit-talent.html",
    ),

    array(
            "name" => "FIT Transformation Management",
            "description" => "Application for supporting large international organizations in transforming their workforce",
            "features" => array(
                        "organization design",
                        "managing positions based on profiles and automatic generations of job postings",
                        "management of candidates and conducting interviews",
                        "management and conduction of various transforming processes",
                        "various reporting possibilities",
                        "user accounts with various roles and permission levels",

                    ),

            "tech" => "Flex, PHP, MySQL",
            "year" => '2013-2014',
            "smallImage" => "fit-transformation/fit_candidates_180.jpg",
            "largeImage" => "fit-transformation/fit_candidates.jpg",
            "more" => "fit-transformation.html",

            "isLarge" => true
        ),

    array(
            "name" => "Translator",
            "description" => "Web Application for aiding the translation of texts for various FIT projects",
            "features" => array(
                        "import and export texts from various project databases and .po files",
                        "UI for translating texts, with filtering by projects and tags, word count",
                        "user management for translator accounts"

                    ),

            "tech" => "Flex, PHP, MySQL",
            "year" => '2010-2011',
            "smallImage" => "translator_logo.jpg",
            "largeImage" => "translator.jpg",
        ),

    array(
            "name" => "Super Data Grid",
            "description" => "Feature rich, highly customizable Flex Data Grid component",
            "features" => array(
                        "filtering  and sorting based on the datatype of the column",
                        "selectable rows, select/deselect all",
                        "customizable column widths and column order",
                        "hideable columns",
                        "saving user defined views",
                        "fullscreen",
                        "lazy loading through scrolling or paging",
                        "HTML, XLSX, CSV export"

                    ),

            "tech" => "Flex, PHP, MySQL",
            "year" => '2012',
            "smallImage" => "sdg/sdg_180.jpg",
            "largeImage" => "sdg/sdg.jpg",

            "isFavorite" => true
        ),

    array(
        "code" => "spacer",
        "height" => 350
        ),

    array(
            "name" => "PPM",
            "description" => "Employee Potential and Performance Management",
            "features" => array(
                        "administration area for managing organization structure with employees, their tasks and user accounts, performance and potential scales, reporting",
                        "manager area for goal settings, team and self assessment, calibration, graphical representation of results",

                    ),

            "tech" => "Flex, PHP, MySQL",
            "year" => '2010-2011',
            "smallImage" => "ppm/ppm_calibration1_180.jpg",
            "largeImage" => "ppm/ppm_calibration1.jpg",
            "more" => "ppm.html",

            "isLarge" => true
        ),

    array(
        "name" => "Kaderplanung",
        "description" => "Flex based web-application for aiding soccer club managers (internal use)",
        "features" => array(
            "Full management of players and trainers of the club, including contracts, salaries, expenses etc. ",
            "Different level of data access for different users (CFO, Sports manager, Young Team manager, Scouting )",
            "Possibility to simulate different play scenarios and budget scenarios ",
            "Reporting",
            "Data encryption "
        ),

        "tech" => "Flex 3, PHP, MySQL",
        "year" => '2010',
        "smallImage" => "planung/planung_small.jpg",
        "largeImage" => "planung/planung.jpg",
        "more" => "kaderplanung.html",
        "isLarge" => true
    ),


    array(
            "name" => "Motionloops",
            "description" => "<a href=\"http://www.motionloops.com\">www.motionloops.com</a><br/>Motionloops sells looping video clips for video editing, presentations and live performances. Started in 2006, the project is in constant evolution, including many features",
            "features" => array(
                        "integration with Amazon S3 (for video file storage)",
                            "integration with LivePerson",
                            "integration with Echo INC payment gateway",
                            "on the fly UPS shipping rate calculator",
                            "integration with Google Analytics",
                            "integration with NetTracker",
                            "administration area for complete content management and reporting (Flash and Flex based user interface),",
                            "automatic generation of complete product catalog in PDF",
                            "email content creation for marketing"

                    ),

            "tech" => " Flash (ActionScript 2), PHP, HTML, JavaScript, MySQL, Amazon S3",
            "year" => '2006-2010',
            "smallImage" => "motionloops/motionloops_small.jpg",
            "largeImage" => "motionloops/motionloops.jpg",
            "more" => "motionloops.html",
            "isLarge" => true,
            "isFavorite" => true
        ),

    array(
            "name" => "Sequential Downloader",
            "description" => "Desktop Application (AIR - Flex 3) - allows sequential downloading of large video files for Motionloops.com clients",
            "features" => array(
                            "users can log in using their Motionloops.com account",
                            "available (free or purchased) videos are organized in tree structure by volumes, formats and resolutions",
                            "users can easily check multiple files, download and save into a specified location",
                            "destination folder of the download is remembered throughout sessions"
                    ),

            "tech" => "Flex 3, PHP, MySQL, Amazon S3",
            "year" => '2010',
            "smallImage" => "motionloops/seqDL_small.jpg",
            "largeImage" => "motionloops/seqDL.jpg",
            "isFavorite" => true
        ),


    array(
        "code" => "spacer",
        "height" => 440
        ),

    array(
            "name" => "Virtualro - Flexible e-commerce",
            "description" => "Flex based platform for e-commerce and shopping cart software",
            "features" => array(
                            "administration area for complete management of product catalog with categories, clients, orders, etc.",
                            "instant product sorting and filtering",
                            "multi-lingual and multi-currency",
                            "individual styling and coloring of the store",
                            "integration with various payment gateways and shipping services"
                    ),

            "tech" => "Flex 2 (with Cairngorm), PHP, MySQL",
            "year" => '2007-2009',
            "smallImage" => "virtualro/virtualro_main_180.jpg",
            "largeImage" => "virtualro/virtualro_main.jpg",
            "more" => "virtualro.html",
            "isLarge" => true
        )


);


$portfolioData2 = array(


    //2011
    array(
                "name" => "Performance Curve",
                "description" => "Simulation of employee performance results",
                "tech" => "Flex 4.5",
                "year" => 2011,
                "smallImage" => "performanceCurve_logo.jpg",
                "largeImage" => "performanceCurve.jpg",
                ),
    array(
                "name" => "HMP Website",
                "description" => "Official website of Holger Manske &amp; Partner GmbH",
                "tech" => "HTML, JavaScript, Hyde Template engine, ImageMagick",
                "year" => "2011-2014",
                "smallImage" => "hmp_logo.jpg",
                "largeImage" => "hmp.jpg",
                ),

    array(
                "name" => "FIT Website",
                "description" => "Official website of FIT Talent Management GmbH",
                "tech" => "HTML, JavaScript, Hyde Template engine, ImageMagick",
                "year" => "2011-2014",
                "smallImage" => "fit_logo.jpg",
                "largeImage" => "fit.jpg",
            ),

    array(
                "name" => "FIT Christmas Card",
                "description" => "Christmas Card design",
                "tech" => "Gimp",
                "year" => 2011,
                "smallImage" => "christmasCard_logo.jpg",
                "largeImage" => "christmasCard.jpg",
                "isFavorite" => true
            ),
    array(
            "name" => "Anita Health Center",
            "description" => "Website of the health center where I was working as aerobics trainer (in 2009-2012)",
            "tech" => "HTML, JavaScript",
            "year" => 2010,
            "smallImage" => "ahc_logo.jpg",
            "largeImage" => "ahc.jpg",
        ),

    array(
                "name" => "Long Legs",
                "description" => "Women clothing store based on the Virtualro platform",
                "tech" => "Flex 2, PHP, MySQL",
                "year" => 2009,
                "smallImage" => "longLegs_logo.jpg",
                "largeImage" => "longLegs.jpg",
                ),

    array(
                "name" => "Sparta Gifts",
                "description" => "Online calendars store based on the Virtualro platform",
                "tech" => "Flex 2, PHP, MySQL",
                "year" => 2009,
                "smallImage" => "spartaCalendars_logo.jpg",
                "largeImage" => "",
                ),

    array(
                "name" => "Party Banner",
                "description" => "Party Planner - funny Flash banner",
                "tech" => "Flash 8",
                "year" => "2009",
                "smallImage" => "partyPlanner_logo.jpg",
                "largeImage" => "partyPlanner.jpg",
                ),
    array(
                "name" => "Asterisk",
                "description" => "Flash store for Knee Protection Systems ",
                "tech" => "Flash",
                "year" => 2007,
                "smallImage" => "asterisk_logo.jpg",
                "largeImage" => "asterisk.jpg",
                ),
    array(
                "name" => "Caps 4 a cause",
                "description" => "Flash site for raising charity - competition between fraternities an sororities ",
                "tech" => "Flash, HTML, PHP, MySQL",
                "year" => 2006,
                "smallImage" => "caps4acause_logo.jpg",
                "largeImage" => "caps4acause.jpg",


            ),
    array(
                "name" => "9 Months in Style",
                "description" => "Clothing store for pregnant women",
                "tech" => "Flash 6, HTML, PHP, MySQL",
                "year" => 2006,
                "smallImage" => "9months_logo.jpg",
                "largeImage" => "",

            ),
    array(
                "name" => "Discount Europe Hotels",
                "description" => "Hotels search tool",
                "tech" => "HTML, PHP, MySQL",
                "year" => 2006,
                "smallImage" => "discountHotels_logo.jpg",
                "largeImage" => "",
            ),
    array(
        "code" => "spacer",
        "height" => 300
    ),

    array(
                "name" => "Europe Villas",
                "description" => "Real estate website ",
                "tech" => "HTML, PHP, MySQL",
                "year" => 2006,
                "smallImage" => "europeVillas_logo.jpg",
                "largeImage" => "",
            ),
    array(
                "name" => "imageXperience",
                "description" => "Online Presentation for professional photography services",
                "tech" => "HTML, PHP, MySQL, Flex 2",
                "year" => 2006,
                "smallImage" => "imageXperience_logo.jpg",
                "largeImage" => "imageXperience.jpg",
            ),
    array(
                "name" => "JamieO Skin",
                "description" => "Online shop for skin care products",
                "tech" => "Flash, HTML, PHP, MySQL",
                "year" => 2006,
                "smallImage" => "jamieo_logo.jpg",
                "largeImage" => "jamieo.jpg",
            ),
    array(
                "name" => "Olga's Skin Care",
                "description" => "Online shop for skin care products",
                "tech" => "Flash, HTML, PHP, MySQL",
                "year" => 2006,
                "smallImage" => "olgas_logo.jpg",
                "largeImage" => "olgas.jpg",
            ),

    array(
                "name" => "Sostanza",
                "description" => "Online presentation of the Sostanza products",
                "tech" => "Flash, Photoshop",
                "year" => 2006,
                "smallImage" => "sostanza_logo.jpg",
                "largeImage" => "sostanza.jpg",
            ),
    //2005
    array(
                "name" => "Kong Chase",
                "description" => "Game",
                "tech" => "Flash 5",
                "year" => 2005,
                "smallImage" => "gameKongChase_logo.jpg",
                "largeImage" => "gameKongChase.jpg",
                "isGame" => true
            ),
    array(
                "name" => "Trap Door",
                "description" => "Game",
                "tech" => "Flash 5",
                "year" => 2005,
                "smallImage" => "gameTrapDoor_logo.jpg",
                "largeImage" => "gameTrapDoor.jpg",
                "isGame" => true
            ),

    array(
                "name" => "Crazy Catapult",
                "description" => "Game",
                "tech" => "Flash 5",
                "year" => 2005,
                "smallImage" => "gameCrazyCatapult_logo.jpg",
                "largeImage" => "gameCrazyCatapult.jpg",
                "isGame" => true
            ),
    array(
                "name" => "Blow Pipe",
                "description" => "Game",
                "tech" => "Flash 5",
                "year" => 2005,
                "smallImage" => "gameBlowpipe_logo.jpg",
                "largeImage" => "gameBlowpipe.jpg",
                "isGame" => true
            ),
    array(
                "name" => "Robin Game",
                "description" => "Game",
                "tech" => "Flash 5",
                "year" => 2005,
                "smallImage" => "gameRobin_logo.jpg",
                "largeImage" => "gameRobin.jpg",
                "isGame" => true
            ),
    array(
                "name" => "Deskgifts",
                "description" => "Online store for gift items",
                "tech" => "PHP, HTML, MySQL, osCommerce",
                "year" => 2005,
                "smallImage" => "deskgifts_logo.jpg",
                "largeImage" => "deskgifts.jpg",
            ),
    array(
                "name" => "Dragonfly",
                "description" => "Flash online store for T-shirts",
                "tech" => "Flash 6, PHP (Smarty framework), HTML, MySQL",
                "year" => 2005,
                "smallImage" => "dragonfly_logo.jpg",
                "largeImage" => "dragonfly.jpg",
            ),
    array(
                "name" => "Aerotype",
                "description" => "Flash store for selling fonts - shopping cart implementation",
                "tech" => "Flash 6",
                "year" => 2005,
                "smallImage" => "aerotype_logo.jpg",
                "largeImage" => "aerotype.jpg",


            ),
    array(
                "name" => "Antler Office Furniture",
                "description" => "Flash shopping cart for office furniture store",
                "tech" => "Flash 5, HTML, JavaScript, PHP, MySQL",
                "year" => 2005,
                "smallImage" => "antler_logo.jpg",
                "largeImage" => "antler.jpg",

            ),
    array(
                "name" => "Harbonder",
                "description" => "Mp3 store",
                "tech" => "Flash, PHP, Smarty, MySQL",
                "year" => 2005,
                "smallImage" => "harbonder_logo.jpg",
                "largeImage" => "harbonder.jpg",
            ),
    array(
                "name" => "Pixels",
                "description" => "Artists collaborating in creating an image, each contributing by adding one color for a pixel",
                "tech" => "Flash, PHP, HTML, JavaScript, MySQL",
                "year" => 2005,
                "smallImage" => "pixels_logo.jpg",
                "largeImage" => "pixels.jpg",
                "isFavorite" => true
            ),
    array(
                "name" => "Rapt in Maille",
                "description" => "Online jewelry store",
                "tech" => "Flash, PHP, HTML, JavaScript, MySQL",
                "year" => 2005,
                "smallImage" => "raptInMaille_logo.jpg",
                "largeImage" => "raptInMaille.jpg",
            ),
    array(
                "name" => "Rib Crib",
                "description" => "Contact form implementation for multiple locations of the RibCrib restaurant chain",
                "tech" => "Flash, PHP, MySQL",
                "year" => 2005,
                "smallImage" => "ribCrib_logo.jpg",
                "largeImage" => "ribCrib.jpg",
            ),
    array(
                "name" => "Your Turf",
                "description" => "Flash presentation of the advantages of artificial grass",
                "tech" => "Flash",
                "year" => 2005,
                "smallImage" => "yourTurf_logo.jpg",
                "largeImage" => "yourTurf.jpg",
            ),
    //2004
    array(
                "name" => "Jeansmarket",
                "description" => "Flash jeans store",
                "tech" => "Flash, PHP, MySQL, HTML",
                "year" => 2004,
                "smallImage" => "jeansmarket_logo.jpg",
                "largeImage" => "jeansmarket.jpg",
            ),

    array(
        "code" => "spacer",
        "height" => 400
    ),

    array(
                "name" => "Coop Group",
                "description" => "Flash website for company that offers creative audio services, with client logins and possibility for listening to audio samples",
                "tech" => "Flash",
                "year" => 2004,
                "smallImage" => "coopgroup_logo.jpg",
                "largeImage" => "coopgroup.jpg",
            ),
    array(
                "name" => "DGT Jewelry",
                "description" => "Online jewelry store with possibility for the user to design his/her own jewelry from available pieces",
                "tech" => "Flash 4, HTML, PHP, MySQL",
                "year" => 2004,
                "smallImage" => "jewelry_logo.jpg",
                "largeImage" => "jewelry.jpg",
            ),
    array(
                "name" => "Drunken Fish",
                "description" => "Event Calendar for a bar's website",
                "tech" => "Flash, XML",
                "year" => 2004,
                "smallImage" => "drunkenFish_logo.jpg",
                "largeImage" => "drunkenFish.jpg",
            ),
    array(
                "name" => "La Linea",
                "description" => "Flash animation of the La Linea cartoon by Osvaldo Cavandoli (personal project)",
                "tech" => "Flash",
                "year" => 2004,
                "smallImage" => "laLinea_logo.jpg",
                "largeImage" => "laLinea.jpg",
            ),
    array(
                "name" => "Eny Const",
                "description" => "Flash presentation CD for a construction company",
                "tech" => "Flash",
                "year" => 2004,
                "smallImage" => "enyConst_logo.jpg",
                "largeImage" => "enyConst.jpg",
            ),
    array(
                "name" => "Trivia",
                "description" => "Game",
                "tech" => "Flash 4, XML",
                "year" => 2004,
                "smallImage" => "gameTrivia_logo.jpg",
                "largeImage" => "gameTrivia.jpg",
                "isGame" => true
            ),
    array(
                "name" => "Wheel of Fortune",
                "description" => "Game",
                "tech" => "Flash 4, XML",
                "year" => 2004,
                "smallImage" => "gameWOF_logo.jpg",
                "largeImage" => "gameWOF.jpg",
                "isGame" => true
            ),
    array(
                "name" => "Prem-I-Air",
                "description" => "E-commerce site for selling air conditioning and related instruments",
                "tech" => "PHP, HTML, JavaScript, MySQL, osCommerce",
                "year" => 2004,
                "smallImage" => "premiair_logo.jpg",
                "largeImage" => "premiair.jpg",
            ),

    //2003
    array(
                "name" => "Plug &amp; Graph",
                "description" => "Creating and Presenting graphs, reading input values from XML files",
                "tech" => "Flash, XML",
                "year" => 2003,
                "smallImage" => "plugAndGraph_logo.jpg",
                "largeImage" => "plugAndGraph.jpg",
                "isFavorite" => true
            ),
    array(
                "name" => "Pig Brother",
                "description" => "Official website of the movie: Pig Brother",
                "tech" => "Flash",
                "year" => 2003,
                "smallImage" => "pigBrother_logo.jpg",
                "largeImage" => "pigBrother.jpg",
            ),
    array(
                "name" => "Nextra Telecom",
                "description" => "Nextra Telecom public website",
                "tech" => " PHP, HTML, JavaScript, Photoshop",
                "year" => 2003,
                "smallImage" => "nextraTelecom_logo.jpg",
                "largeImage" => "nextraTelecom.jpg",
            ),
    array(
                "name" => "HotelsAndInns",
                "description" => "Online hotel booking service",
                "tech" => "Flash, PHP, Smarty, MySQL",
                "year" => 2003,
                "smallImage" => "hotelsAndInns_logo.jpg",
                "largeImage" => "hotelsAndInns.jpg",
            ),
    array(
                "name" => "Greedskate",
                "description" => "Flash presentation of products catalog (T-shirts)",
                "tech" => "Flash, PHP, Smarty, MySQL",
                "year" => 2003,
                "smallImage" => "greedskate_logo.jpg",
                "largeImage" => "",
            ),
    array(
                "name" => "Kikwear",
                "description" => "Flash presentation of products catalog",
                "tech" => "Flash, PHP, MySQL",
                "year" => 2003,
                "smallImage" => "kikwear_logo.jpg",
                "largeImage" => "",
            ),
    array(
                "name" => "Gordian",
                "description" => "Online newspaper",
                "tech" => "HTML, JavaScript, PHP, MySQL",
                "year" => 2003,
                "smallImage" => "gordian_logo.jpg",
                "largeImage" => "gordian.jpg",
            ),
    array(
                "name" => "Back4Life",
                "description" => "Presentation and Flash survey form of medical center",
                "tech" => "HTML, Flash, PHP, XML",
                "year" => 2003,
                "smallImage" => "back4life_logo.jpg",
                "largeImage" => "back4life.jpg",
            ),
    array(
                "name" => "FontSurfer",
                "description" => "Font search engine",
                "tech" => "Flash, PHP, MySQL",
                "year" => 2003,
                "smallImage" => "fontsurfer_logo.jpg",
                "largeImage" => "fontsurfer.jpg",
            ),
    //2002
    array(
                "name" => "Nova Fishing",
                "description" => "Nova Scotia fishing log book",
                "tech" => "PHP, HTML, Photoshop",
                "year" => 2002,
                "smallImage" => "novaFishing_logo.jpg",
                "largeImage" => "novaFishing.jpg",


            ),
    array(
                "name" => "Online personality tests",
                "description" => "Created for transindex.ro",
                "tech" => "PHP, HTML, Photoshop",
                "year" => 2002,
                "smallImage" => "pszihoteszt_logo.jpg",
                "largeImage" => "pszihoteszt.jpg",


            ),
    array(
                "name" => "History of Communication",
                "description" => "Created for transindex.ro",
                "tech" => "PHP, HTML, Photoshop",
                "year" => 2002,
                "smallImage" => "kronologia_logo.jpg",
                "largeImage" => "kronologia.jpg",
            ),

    array(
        "code" => "spacer",
        "height" => 260
    ),

    //2001
    array(
                "name" => "Provincia",
                "description" => "Bilingual online monthly newspaper",
                "tech" => "Perl, HTML, Photoshop",
                "year" => 2001,
                "smallImage" => "provincia_logo.jpg",
                "largeImage" => "provincia.jpg",
            ),
    array(
                "name" => "EDRC - Roma Projects",
                "description" => "Presentation website",
                "tech" => "HTML, Photoshop",
                "year" => 2001,
                "smallImage" => "edrcProjecteRoma_logo.jpg",
                "largeImage" => "edrcProjecteRoma.jpg",
            ),
    array(
                "name" => "Mihaly Andor &amp; Co",
                "description" => "Presentation website of attorneys' agency",
                "tech" => "Flash 4",
                "year" => 2001,
                "smallImage" => "attorneys_logo.jpg",
                "largeImage" => "attorneys.jpg",
            ),

);

?>
 
