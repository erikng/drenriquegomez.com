<?php
session_start();
unset($_SESSION['admin']);

include('functions.php');
$show_form = true;
if(!is_writeable('config.php'))
{
	$errors[] = 'Please make config.php writeable to install.';
}else{
	if($_POST['submit'])
	{
		if(!$_POST['db_host']) $errors[] = 'Please input database host.';
		if(!$_POST['db_user']) $errors[] = 'Please input database username.';
		//if(!$_POST['db_pass']) $errors[] = 'Please input database password.';
		if(!$_POST['db_name']) $errors[] = 'Please input database name.';

		if(!$_POST['admin_user']) $errors[] = 'Please input admin username.';
		if(!$_POST['admin_pass']) $errors[] = 'Please input admin password.';

		if(!$_POST['site_name']) $errors[] = 'Please input site name.';
		if(!$_POST['admin_email']) $errors[] = 'Please input email address to receive emails.';

		if(!$errors)
		{
			if(!@mysql_connect($_POST['db_host'], $_POST['db_user'], $_POST['db_pass']))
			{
				$errors[] = 'Can not connect to the database.';
			}else{
				if(!@mysql_select_db($_POST['db_name']))
				{
					$errors[] = 'Can not select database '.$_POST['db_name'].'.';
				}
			}
		}
		if(!$errors)
		{
			$sql = "show tables like '{$_POST['db_prefix']}admins'";
			$res = mysql_query($sql);

			if(mysql_num_rows($res))
			{
				$errors[] = 'You have already installed, please remove all tables before re-installing.';
			}
		}
		if(!$errors)
		{
			$content = "<?php\n";
			$content .= "define('DB_HOST', '".$_POST['db_host']."');\n";
			$content .= "define('DB_USER', '".$_POST['db_user']."');\n";
			$content .= "define('DB_PASS', '".$_POST['db_pass']."');\n";
			$content .= "define('DB_NAME', '".$_POST['db_name']."');\n";
			
			$content .= "define('PREFIX', '".$_POST['db_prefix']."');\n";

			$content .= "define('PERPAGE_ADMIN', 20);";
			$content .= "?>";

			file_put_contents('config.php', $content);


			$sql1 = "CREATE TABLE `{$_POST['db_prefix']}admins` (
			  `admin_id` int(11) NOT NULL auto_increment,
			  `username` varchar(32) NOT NULL,
			  `password` varchar(32) NOT NULL,
			  PRIMARY KEY  (`admin_id`),
			  KEY `username` (`username`)
			);";
			mysql_query($sql1);

			$sql1 = "INSERT INTO `{$_POST['db_prefix']}admins` (`username`, `password`) VALUES('{$_POST['admin_user']}', '".md5($_POST['admin_pass'])."');";
			mysql_query($sql1);

			$sql1 = "CREATE TABLE `{$_POST['db_prefix']}campaigns` (
					`campaign_id` int(11) NOT NULL auto_increment,
					`type_id` int(11) NOT NULL,
					`states` text NOT NULL,
					`title` varchar(100) NOT NULL,
					`search` varchar(100) NOT NULL,
					`status` tinyint(1) NOT NULL,
					`start` int(11) NOT NULL,
					PRIMARY KEY  (`campaign_id`),
					KEY `type_id` (`type_id`),
					KEY `status` (`status`)
					)";
			mysql_query($sql1);

			$sql1 = "CREATE TABLE `{$_POST['db_prefix']}settings` (
			  `setting_id` int(11) NOT NULL auto_increment,
			  `title` varchar(50) NOT NULL,
			  `value` text NOT NULL,
			  PRIMARY KEY  (`setting_id`),
			  KEY `title` (`title`)
			);";
			mysql_query($sql1);

			$sql1 = "INSERT INTO `{$_POST['db_prefix']}settings` (`title`, `value`) VALUES
			('site_name', '{$_POST['site_name']}'),
			('admin_email', '{$_POST['admin_email']}');";
			mysql_query($sql1);

			$sql1 = "CREATE TABLE `{$_POST['db_prefix']}states` (
			  `state_id` int(11) NOT NULL auto_increment,
			  `title` varchar(100) NOT NULL,
			  `code` varchar(100) NOT NULL,
			  PRIMARY KEY  (`state_id`)
			);";
			mysql_query($sql1);
			
			$sql1 = "CREATE TABLE `{$_POST['db_prefix']}history` (
			  `ID` int(11) NOT NULL auto_increment,
			  `campaign_id` int(11) NOT NULL,
			  `state_id` int(11) NOT NULL,
			  `lastcl_id` bigint(20) NOT NULL,
			  `cdate` int(10) NOT NULL,
			  PRIMARY KEY  (`ID`),
			  KEY `campaign_id` (`campaign_id`),
			  KEY `state_id` (`state_id`),
			  KEY `lastcl_id` (`lastcl_id`),
			  KEY `cdate` (`cdate`)
			)";
			mysql_query($sql1);

			$sql1 = "INSERT INTO `{$_POST['db_prefix']}states` (`state_id`, `title`, `code`) VALUES
			(1, 'US - abilene', 'abilene'),
			(2, 'US - akron / canton', 'akroncanton'),
			(3, 'US - alaska', 'anchorage'),
			(4, 'US - albany', 'albany'),
			(5, 'US - albuquerque', 'albuquerque'),
			(6, 'US - altoona-johnstown', 'altoona'),
			(7, 'US - amarillo', 'amarillo'),
			(8, 'US - ames, IA', 'ames'),
			(9, 'US - ann arbor', 'annarbor'),
			(10, 'US - annapolis', 'annapolis'),
			(11, 'US - appleton-oshkosh-FDL', 'appleton'),
			(12, 'US - asheville', 'asheville'),
			(13, 'US - athens, GA', 'athensga'),
			(14, 'US - athens, OH', 'athensohio'),
			(15, 'US - atlanta', 'atlanta'),
			(16, 'US - auburn', 'auburn'),
			(17, 'US - augusta', 'augusta'),
			(18, 'US - austin', 'austin'),
			(19, 'US - bakersfield', 'bakersfield'),
			(20, 'US - baltimore', 'baltimore'),
			(21, 'US - baton rouge', 'batonrouge'),
			(22, 'US - beaumont / port arthur', 'beaumont'),
			(23, 'US - bellingham', 'bellingham'),
			(24, 'US - bend', 'bend'),
			(25, 'US - binghamton', 'binghamton'),
			(26, 'US - birmingham, AL', 'bham'),
			(27, 'US - blacksburg', 'blacksburg'),
			(28, 'US - bloomington', 'bloomington'),
			(29, 'US - bloomington-normal', 'bn'),
			(30, 'US - boise', 'boise'),
			(31, 'US - boone', 'boone'),
			(32, 'US - boston', 'boston'),
			(33, 'US - boulder', 'boulder'),
			(34, 'US - bowling green', 'bgky'),
			(35, 'US - brownsville', 'brownsville'),
			(36, 'US - brunswick, GA', 'brunswick'),
			(37, 'US - buffalo', 'buffalo'),
			(38, 'US - cape cod / islands', 'capecod'),
			(39, 'US - carbondale', 'carbondale'),
			(40, 'US - catskills', 'catskills'),
			(41, 'US - cedar rapids', 'cedarrapids'),
			(42, 'US - central NJ', 'cnj'),
			(43, 'US - central michigan', 'centralmich'),
			(44, 'US - champaign urbana', 'chambana'),
			(45, 'US - charleston, SC', 'charleston'),
			(46, 'US - charleston, WV', 'charlestonwv'),
			(47, 'US - charlotte', 'charlotte'),
			(48, 'US - charlottesville', 'charlottesville'),
			(49, 'US - chattanooga', 'chattanooga'),
			(50, 'US - chautauqua', 'chautauqua'),
			(51, 'US - chicago', 'chicago'),
			(52, 'US - chico', 'chico'),
			(53, 'US - cincinnati, OH', 'cincinnati'),
			(54, 'US - clarksville, TN', 'clarksville'),
			(55, 'US - cleveland', 'cleveland'),
			(56, 'US - college station', 'collegestation'),
			(57, 'US - colorado springs', 'cosprings'),
			(58, 'US - columbia / jeff city', 'columbiamo'),
			(59, 'US - columbia, SC', 'columbia'),
			(60, 'US - columbus', 'columbus'),
			(61, 'US - columbus, GA', 'columbusga'),
			(62, 'US - corpus christi', 'corpuschristi'),
			(63, 'US - corvallis/albany', 'corvallis'),
			(64, 'US - dallas / fort worth', 'dallas'),
			(65, 'US - danville', 'danville'),
			(66, 'US - dayton / springfield', 'dayton'),
			(67, 'US - daytona beach', 'daytona'),
			(68, 'US - decatur, IL', 'decatur'),
			(69, 'US - delaware', 'delaware'),
			(70, 'US - denver', 'denver'),
			(71, 'US - des moines', 'desmoines'),
			(72, 'US - detroit metro', 'detroit'),
			(73, 'US - dothan, AL', 'dothan'),
			(74, 'US - dubuque', 'dubuque'),
			(75, 'US - duluth / superior', 'duluth'),
			(76, 'US - east idaho', 'eastidaho'),
			(77, 'US - east oregon', 'eastoregon'),
			(78, 'US - eastern CT', 'newlondon'),
			(79, 'US - eastern NC', 'eastnc'),
			(80, 'US - eastern shore', 'easternshore'),
			(81, 'US - eau claire', 'eauclaire'),
			(82, 'US - el paso', 'elpaso'),
			(83, 'US - elmira-corning', 'elmira'),
			(84, 'US - erie, PA', 'erie'),
			(85, 'US - eugene', 'eugene'),
			(86, 'US - evansville', 'evansville'),
			(87, 'US - fargo / moorhead', 'fargo'),
			(88, 'US - farmington, NM', 'farmington'),
			(89, 'US - fayetteville', 'fayetteville'),
			(90, 'US - fayetteville, AR', 'fayar'),
			(91, 'US - flagstaff / sedona', 'flagstaff'),
			(92, 'US - flint', 'flint'),
			(93, 'US - florence / muscle shoals', 'shoals'),
			(94, 'US - florence, SC', 'florencesc'),
			(95, 'US - florida keys', 'keys'),
			(96, 'US - fort collins / north CO', 'fortcollins'),
			(97, 'US - fort lauderdale', 'fortlauderdale'),
			(98, 'US - fort smith, AR', 'fortsmith'),
			(99, 'US - fort wayne', 'fortwayne'),
			(100, 'US - fredericksburg', 'fredericksburg'),
			(101, 'US - fresno', 'fresno'),
			(102, 'US - ft myers / SW florida', 'fortmyers'),
			(103, 'US - gadsden-anniston', 'gadsden'),
			(104, 'US - gainesville', 'gainesville'),
			(105, 'US - galveston', 'galveston'),
			(106, 'US - gold country', 'goldcountry'),
			(107, 'US - grand island', 'grandisland'),
			(108, 'US - grand rapids', 'grandrapids'),
			(109, 'US - green bay', 'greenbay'),
			(110, 'US - greensboro', 'greensboro'),
			(111, 'US - greenville / upstate', 'greenville'),
			(112, 'US - gulfport / biloxi', 'gulfport'),
			(113, 'US - hampton roads', 'norfolk'),
			(114, 'US - harrisburg', 'harrisburg'),
			(115, 'US - harrisonburg', 'harrisonburg'),
			(116, 'US - hartford', 'hartford'),
			(117, 'US - hattiesburg', 'hattiesburg'),
			(118, 'US - hawaii', 'honolulu'),
			(119, 'US - hickory / lenoir', 'hickory'),
			(120, 'US - hilton head', 'hiltonhead'),
			(121, 'US - houston', 'houston'),
			(122, 'US - hudson valley', 'hudsonvalley'),
			(123, 'US - humboldt county', 'humboldt'),
			(124, 'US - huntington-ashland', 'huntington'),
			(125, 'US - huntsville', 'huntsville'),
			(126, 'US - imperial county', 'imperial'),
			(127, 'US - indianapolis', 'indianapolis'),
			(128, 'US - inland empire', 'inlandempire'),
			(129, 'US - iowa city', 'iowacity'),
			(130, 'US - ithaca', 'ithaca'),
			(131, 'US - jackson, MI', 'jxn'),
			(132, 'US - jackson, MS', 'jackson'),
			(133, 'US - jackson, TN', 'jacksontn'),
			(134, 'US - jacksonville', 'jacksonville'),
			(135, 'US - janesville', 'janesville'),
			(136, 'US - jersey shore', 'jerseyshore'),
			(137, 'US - jonesboro', 'jonesboro'),
			(138, 'US - joplin', 'joplin'),
			(139, 'US - kalamazoo', 'kalamazoo'),
			(140, 'US - kansas city, MO', 'kansascity'),
			(141, 'US - kennewick-pasco-richland', 'kpr'),
			(142, 'US - kenosha-racine', 'racine'),
			(143, 'US - killeen / temple / ft hood', 'killeen'),
			(144, 'US - knoxville', 'knoxville'),
			(145, 'US - la crosse', 'lacrosse'),
			(146, 'US - lafayette', 'lafayette'),
			(147, 'US - lafayette / west lafayette', 'tippecanoe'),
			(148, 'US - lake charles', 'lakecharles'),
			(149, 'US - lakeland', 'lakeland'),
			(150, 'US - lancaster, PA', 'lancaster'),
			(151, 'US - lansing', 'lansing'),
			(152, 'US - laredo', 'laredo'),
			(153, 'US - las cruces', 'lascruces'),
			(154, 'US - las vegas', 'lasvegas'),
			(155, 'US - lawrence', 'lawrence'),
			(156, 'US - lawton', 'lawton'),
			(157, 'US - lehigh valley', 'allentown'),
			(158, 'US - lexington, KY', 'lexington'),
			(159, 'US - lima / findlay', 'limaohio'),
			(160, 'US - lincoln', 'lincoln'),
			(161, 'US - little rock', 'littlerock'),
			(162, 'US - logan', 'logan'),
			(163, 'US - long island', 'longisland'),
			(164, 'US - los angeles', 'losangeles'),
			(165, 'US - louisville', 'louisville'),
			(166, 'US - lubbock', 'lubbock'),
			(167, 'US - lynchburg', 'lynchburg'),
			(168, 'US - macon', 'macon'),
			(169, 'US - madison', 'madison'),
			(170, 'US - maine', 'maine'),
			(171, 'US - manhattan, KS', 'ksu'),
			(172, 'US - mankato', 'mankato'),
			(173, 'US - mansfield', 'mansfield'),
			(174, 'US - martinsburg', 'martinsburg'),
			(175, 'US - mcallen / edinburg', 'mcallen'),
			(176, 'US - medford-ashland-klamath', 'medford'),
			(177, 'US - memphis, TN', 'memphis'),
			(178, 'US - mendocino county', 'mendocino'),
			(179, 'US - merced', 'merced'),
			(180, 'US - miami', 'miami'),
			(181, 'US - milwaukee', 'milwaukee'),
			(182, 'US - minneapolis / st paul', 'minneapolis'),
			(183, 'US - mobile', 'mobile'),
			(184, 'US - modesto', 'modesto'),
			(185, 'US - mohave county', 'mohave'),
			(186, 'US - monroe, LA', 'monroe'),
			(187, 'US - montana', 'montana'),
			(188, 'US - monterey bay', 'monterey'),
			(189, 'US - montgomery', 'montgomery'),
			(190, 'US - morgantown', 'morgantown'),
			(191, 'US - muncie / anderson', 'muncie'),
			(192, 'US - muskegon', 'muskegon'),
			(193, 'US - myrtle beach', 'myrtlebeach'),
			(194, 'US - nashville', 'nashville'),
			(195, 'US - new hampshire', 'nh'),
			(196, 'US - new haven', 'newhaven'),
			(197, 'US - new orleans', 'neworleans'),
			(198, 'US - new york city', 'newyork'),
			(199, 'US - north dakota', 'nd'),
			(200, 'US - north jersey', 'newjersey'),
			(201, 'US - north mississippi', 'northmiss'),
			(202, 'US - northern michigan', 'nmi'),
			(203, 'US - northwest CT', 'nwct'),
			(204, 'US - ocala', 'ocala'),
			(205, 'US - odessa / midland', 'odessa'),
			(206, 'US - ogden-clearfield', 'ogden'),
			(207, 'US - oklahoma city', 'oklahomacity'),
			(208, 'US - olympic peninsula', 'olympic'),
			(209, 'US - omaha / council bluffs', 'omaha'),
			(210, 'US - orange county', 'orangecounty'),
			(211, 'US - oregon coast', 'oregoncoast'),
			(212, 'US - orlando', 'orlando'),
			(213, 'US - outer banks', 'outerbanks'),
			(214, 'US - palm springs, CA', 'palmsprings'),
			(215, 'US - panama city, FL', 'panamacity'),
			(216, 'US - parkersburg-marietta', 'parkersburg'),
			(217, 'US - pensacola / panhandle', 'pensacola'),
			(218, 'US - peoria', 'peoria'),
			(219, 'US - philadelphia', 'philadelphia'),
			(220, 'US - phoenix', 'phoenix'),
			(221, 'US - pittsburgh', 'pittsburgh'),
			(222, 'US - plattsburgh-adirondacks', 'plattsburgh'),
			(223, 'US - poconos', 'poconos'),
			(224, 'US - port huron', 'porthuron'),
			(225, 'US - portland, OR', 'portland'),
			(226, 'US - prescott', 'prescott'),
			(227, 'US - provo / orem', 'provo'),
			(228, 'US - pueblo', 'pueblo'),
			(229, 'US - pullman / moscow', 'pullman'),
			(230, 'US - quad cities, IA/IL', 'quadcities'),
			(231, 'US - raleigh / durham / CH', 'raleigh'),
			(232, 'US - reading', 'reading'),
			(233, 'US - redding', 'redding'),
			(234, 'US - reno / tahoe', 'reno'),
			(235, 'US - rhode island', 'providence'),
			(236, 'US - richmond', 'richmond'),
			(237, 'US - roanoke', 'roanoke'),
			(238, 'US - rochester, MN', 'rmn'),
			(239, 'US - rochester, NY', 'rochester'),
			(240, 'US - rockford', 'rockford'),
			(241, 'US - rocky mountains', 'rockies'),
			(242, 'US - roseburg', 'roseburg'),
			(243, 'US - roswell / carlsbad', 'roswell'),
			(244, 'US - sacramento', 'sacramento'),
			(245, 'US - saginaw-midland-baycity', 'saginaw'),
			(246, 'US - salem, OR', 'salem'),
			(247, 'US - salt lake city', 'saltlakecity'),
			(248, 'US - san antonio', 'sanantonio'),
			(249, 'US - san diego', 'sandiego'),
			(250, 'US - san francisco bay area', 'sfbay'),
			(251, 'US - san luis obispo', 'slo'),
			(252, 'US - san marcos', 'sanmarcos'),
			(253, 'US - sandusky', 'sandusky'),
			(254, 'US - santa barbara', 'santabarbara'),
			(255, 'US - santa fe / taos', 'santafe'),
			(256, 'US - sarasota-bradenton', 'sarasota'),
			(257, 'US - savannah', 'savannah'),
			(258, 'US - scranton / wilkes-barre', 'scranton'),
			(259, 'US - seattle-tacoma', 'seattle'),
			(260, 'US - sheboygan, WI', 'sheboygan'),
			(261, 'US - shreveport', 'shreveport'),
			(262, 'US - sierra vista', 'sierravista'),
			(263, 'US - sioux city, IA', 'siouxcity'),
			(264, 'US - skagit / island / SJI', 'skagit'),
			(265, 'US - south bend / michiana', 'southbend'),
			(266, 'US - south coast', 'southcoast'),
			(267, 'US - south dakota', 'sd'),
			(268, 'US - south jersey', 'southjersey'),
			(269, 'US - southeast missouri', 'semo'),
			(270, 'US - southern maryland', 'smd'),
			(271, 'US - southwest michigan', 'swmi'),
			(272, 'US - space coast', 'spacecoast'),
			(273, 'US - spokane / coeur d', 'spokane'),
			(274, 'US - springfield, IL', 'springfieldil'),
			(275, 'US - springfield, MO', 'springfield'),
			(276, 'US - st augustine', 'staugustine'),
			(277, 'US - st cloud', 'stcloud'),
			(278, 'US - st george', 'stgeorge'),
			(279, 'US - st louis, MO', 'stlouis'),
			(280, 'US - state college', 'pennstate'),
			(281, 'US - stillwater', 'stillwater'),
			(282, 'US - stockton', 'stockton'),
			(283, 'US - syracuse', 'syracuse'),
			(284, 'US - tallahassee', 'tallahassee'),
			(285, 'US - tampa bay area', 'tampa'),
			(286, 'US - terre haute', 'terrahaute'),
			(287, 'US - texarkana', 'texarkana'),
			(288, 'US - toledo', 'toledo'),
			(289, 'US - topeka', 'topeka'),
			(290, 'US - treasure coast', 'treasure'),
			(291, 'US - tri-cities, TN', 'tricities'),
			(292, 'US - tucson', 'tucson'),
			(293, 'US - tulsa', 'tulsa'),
			(294, 'US - tuscaloosa', 'tuscaloosa'),
			(295, 'US - twin falls', 'twinfalls'),
			(296, 'US - tyler / east TX', 'easttexas'),
			(297, 'US - upper peninsula', 'up'),
			(298, 'US - utica', 'utica'),
			(299, 'US - valdosta', 'valdosta'),
			(300, 'US - ventura county', 'ventura'),
			(301, 'US - vermont', 'burlington'),
			(302, 'US - victoria, TX', 'victoriatx'),
			(303, 'US - visalia-tulare', 'visalia'),
			(304, 'US - waco', 'waco'),
			(305, 'US - washington, DC', 'washingtondc'),
			(306, 'US - waterloo / cedar falls', 'waterloo'),
			(307, 'US - watertown', 'watertown'),
			(308, 'US - wausau', 'wausau'),
			(309, 'US - wenatchee', 'wenatchee'),
			(310, 'US - west palm beach', 'westpalmbeach'),
			(311, 'US - west virginia (old)', 'wv'),
			(312, 'US - western KY', 'westky'),
			(313, 'US - western maryland', 'westmd'),
			(314, 'US - western massachusetts', 'westernmass'),
			(315, 'US - western slope', 'westslope'),
			(316, 'US - wheeling, WV', 'wheeling'),
			(317, 'US - wichita', 'wichita'),
			(318, 'US - wichita falls', 'wichitafalls'),
			(319, 'US - williamsport', 'williamsport'),
			(320, 'US - wilmington, NC', 'wilmington'),
			(321, 'US - winston-salem', 'winstonsalem'),
			(322, 'US - worcester / central MA', 'worcester'),
			(323, 'US - wyoming', 'wyoming'),
			(324, 'US - yakima', 'yakima'),
			(325, 'US - york, PA', 'york'),
			(326, 'US - youngstown', 'youngstown'),
			(327, 'US - yuba-sutter', 'yubasutter'),
			(328, 'US - yuma', 'yuma'),
			(329, 'Canada - barrie', 'barrie'),
			(330, 'Canada - belleville, ON', 'belleville'),
			(331, 'Canada - calgary', 'calgary'),
			(332, 'Canada - chatham-kent', 'chatham'),
			(333, 'Canada - comox valley', 'comoxvalley'),
			(334, 'Canada - cornwall, ON', 'cornwall'),
			(335, 'Canada - cranbrook, BC', 'cranbrook'),
			(336, 'Canada - edmonton', 'edmonton'),
			(337, 'Canada - fraser valley', 'abbotsford'),
			(338, 'Canada - ft mcmurray', 'ftmcmurray'),
			(339, 'Canada - guelph', 'guelph'),
			(340, 'Canada - halifax', 'halifax'),
			(341, 'Canada - hamilton-burlington', 'hamilton'),
			(342, 'Canada - kamloops', 'kamloops'),
			(343, 'Canada - kelowna', 'kelowna'),
			(344, 'Canada - kingston, ON', 'kingston'),
			(345, 'Canada - kitchener-waterloo-cambridge', 'kitchener'),
			(346, 'Canada - lethbridge', 'lethbridge'),
			(347, 'Canada - london, ON', 'londonon'),
			(348, 'Canada - montreal', 'montreal'),
			(349, 'Canada - nanaimo', 'nanaimo'),
			(350, 'Canada - new brunswick', 'newbrunswick'),
			(351, 'Canada - newfoundland / labrador', 'newfoundland'),
			(352, 'Canada - niagara region', 'niagara'),
			(353, 'Canada - ottawa-hull-gatineau', 'ottawa'),
			(354, 'Canada - owen sound', 'owensound'),
			(355, 'Canada - peterborough', 'peterborough'),
			(356, 'Canada - prince edward island', 'pei'),
			(357, 'Canada - prince george', 'princegeorge'),
			(358, 'Canada - quebec city', 'quebec'),
			(359, 'Canada - red deer', 'reddeer'),
			(360, 'Canada - regina', 'regina'),
			(361, 'Canada - saguenay', 'saguenay'),
			(362, 'Canada - sarnia', 'sarnia'),
			(363, 'Canada - saskatchewan', 'saskatoon'),
			(364, 'Canada - sault ste marie, ON', 'soo'),
			(365, 'Canada - sherbrooke', 'sherbrooke'),
			(366, 'Canada - sudbury', 'sudbury'),
			(367, 'Canada - territories', 'territories'),
			(368, 'Canada - thunder bay', 'thunderbay'),
			(369, 'Canada - toronto', 'toronto'),
			(370, 'Canada - trois-rivieres', 'troisrivieres'),
			(371, 'Canada - vancouver, BC', 'vancouver'),
			(372, 'Canada - victoria', 'victoria'),
			(373, 'Canada - whistler, BC', 'whistler'),
			(374, 'Canada - windsor', 'windsor'),
			(375, 'Canada - winnipeg', 'winnipeg'),
			(376, 'Australia - adelaide', 'adelaide'),
			(377, 'Australia - brisbane', 'brisbane'),
			(378, 'Australia - canberra', 'canberra'),
			(379, 'Australia - darwin', 'darwin'),
			(380, 'Australia - hobart', 'hobart'),
			(381, 'Australia - melbourne', 'melbourne'),
			(382, 'Australia - perth', 'perth'),
			(383, 'Australia - sydney', 'sydney'),
			(384, 'New Zealand - auckland', 'auckland'),
			(385, 'New Zealand - christchurch', 'christchurch'),
			(386, 'New Zealand - wellington', 'wellington'),
			(387, 'UK - aberdeen', 'aberdeen'),
			(388, 'UK - bath', 'bath'),
			(389, 'UK - belfast', 'belfast'),
			(390, 'UK - birmingham', 'birmingham'),
			(391, 'UK - brighton', 'brighton'),
			(392, 'UK - bristol', 'bristol'),
			(393, 'UK - cambridge, UK', 'cambridge'),
			(394, 'UK - cardiff / wales', 'cardiff'),
			(395, 'UK - coventry', 'coventry'),
			(396, 'UK - derby', 'derby'),
			(397, 'UK - devon &amp; cornwall', 'devon'),
			(398, 'UK - dundee', 'dundee'),
			(399, 'UK - east anglia', 'norwich'),
			(400, 'UK - east midlands', 'eastmids'),
			(401, 'UK - edinburgh', 'edinburgh'),
			(402, 'UK - essex', 'essex'),
			(403, 'UK - glasgow', 'glasgow'),
			(404, 'UK - hampshire', 'hampshire'),
			(405, 'UK - kent', 'kent'),
			(406, 'UK - leeds', 'leeds'),
			(407, 'UK - liverpool', 'liverpool'),
			(408, 'UK - london', 'london'),
			(409, 'UK - manchester', 'manchester'),
			(410, 'UK - newcastle', 'newcastle'),
			(411, 'UK - nottingham', 'nottingham'),
			(412, 'UK - oxford', 'oxford'),
			(413, 'UK - sheffield', 'sheffield'),
			(414, 'Ireland - dublin', 'dublin'),
			(415, 'South Africa - cape town', 'capetown'),
			(416, 'South Africa - durban', 'durban'),
			(417, 'South Africa - johannesburg', 'johannesburg'),
			(418, 'Argentina - buenosaires', 'buenosaires'),
			(419, 'Austria - vienna', 'vienna'),
			(420, 'Bangladesh - bangladesh', 'bangladesh'),
			(421, 'Belgium - brussels', 'brussels'),
			(422, 'Brazil - belo horizonte', 'belohorizonte'),
			(423, 'Brazil - brasilia', 'brasilia'),
			(424, 'Brazil - curitiba', 'curitiba'),
			(425, 'Brazil - fortaleza', 'fortaleza'),
			(426, 'Brazil - porto alegre', 'portoalegre'),
			(427, 'Brazil - recife', 'recife'),
			(428, 'Brazil - rio de janeiro', 'rio'),
			(429, 'Brazil - salvador, bahia', 'salvador'),
			(430, 'Brazil - sao paulo', 'saopaulo'),
			(431, 'Caribbean - caribbean', 'caribbean'),
			(432, 'Chile - santiago', 'santiago'),
			(433, 'China - beijing', 'beijing'),
			(434, 'China - guangzhou', 'guangzhou'),
			(435, 'China - hangzhou', 'hangzhou'),
			(436, 'China - hong kong', 'hongkong'),
			(437, 'China - shanghai', 'shanghai'),
			(438, 'China - shenzhen', 'shenzhen'),
			(439, 'Colombia - colombia', 'colombia'),
			(440, 'Costa Rica - costarica', 'costarica'),
			(441, 'Czech Repub - prague', 'prague'),
			(442, 'Denmark - copenhagen', 'copenhagen'),
			(443, 'Egypt - cairo', 'cairo'),
			(444, 'France - bordeaux', 'bordeaux'),
			(445, 'France - brittany', 'rennes'),
			(446, 'France - grenoble', 'grenoble'),
			(447, 'France - lille', 'lille'),
			(448, 'France - loire valley', 'loire'),
			(449, 'France - lyon', 'lyon'),
			(450, 'France - marseille', 'marseilles'),
			(451, 'France - montpellier', 'montpellier'),
			(452, 'France - nice / cote d', 'cotedazur'),
			(453, 'France - normandy', 'rouen'),
			(454, 'France - paris', 'paris'),
			(455, 'France - strasbourg', 'strasbourg'),
			(456, 'France - toulouse', 'toulouse'),
			(457, 'Finland - helsinki', 'helsinki'),
			(458, 'Greece - athens', 'athens'),
			(459, 'Germany - berlin', 'berlin'),
			(460, 'Germany - bremen', 'bremen'),
			(461, 'Germany - cologne', 'cologne'),
			(462, 'Germany - dresden', 'dresden'),
			(463, 'Germany - dusseldorf', 'dusseldorf'),
			(464, 'Germany - essen / ruhr', 'essen'),
			(465, 'Germany - frankfurt', 'frankfurt'),
			(466, 'Germany - hamburg', 'hamburg'),
			(467, 'Germany - hannover', 'hannover'),
			(468, 'Germany - heidelberg', 'heidelberg'),
			(469, 'Germany - leipzig', 'leipzig'),
			(470, 'Germany - munich', 'munich'),
			(471, 'Germany - stuttgart', 'stuttgart'),
			(472, 'Hungary - budapest', 'budapest'),
			(473, 'India - ahmedabad', 'ahmedabad'),
			(474, 'India - bangalore', 'bangalore'),
			(475, 'India - chennai (madras)', 'chennai'),
			(476, 'India - delhi', 'delhi'),
			(477, 'India - goa', 'goa'),
			(478, 'India - hyderabad', 'hyderabad'),
			(479, 'India - indore', 'indore'),
			(480, 'India - jaipur', 'jaipur'),
			(481, 'India - kerala', 'kerala'),
			(482, 'India - kolkata (calcutta)', 'kolkata'),
			(483, 'India - mumbai', 'mumbai'),
			(484, 'India - pune', 'pune'),
			(485, 'Indonesia - jakarta', 'jakarta'),
			(486, 'Israel - haifa', 'haifa'),
			(487, 'Israel - jerusalem', 'jerusalem'),
			(488, 'Israel - tel aviv', 'telaviv'),
			(489, 'Italy - bologna', 'bologna'),
			(490, 'Italy - florence / tuscany', 'florence'),
			(491, 'Italy - genoa', 'genoa'),
			(492, 'Italy - milan', 'milan'),
			(493, 'Italy - napoli / campania', 'naples'),
			(494, 'Italy - perugia', 'perugia'),
			(495, 'Italy - rome', 'rome'),
			(496, 'Italy - sardinia', 'sardinia'),
			(497, 'Italy - sicilia', 'sicily'),
			(498, 'Italy - torino', 'torino'),
			(499, 'Italy - venice / veneto', 'venice'),
			(500, 'Japan - fukuoka', 'fukuoka'),
			(501, 'Japan - hiroshima', 'hiroshima'),
			(502, 'Japan - nagoya', 'nagoya'),
			(503, 'Japan - okinawa', 'okinawa'),
			(504, 'Japan - osaka-kobe-kyoto', 'osaka'),
			(505, 'Japan - sapporo', 'sapporo'),
			(506, 'Japan - tokyo', 'tokyo'),
			(507, 'Korea - seoul', 'seoul'),
			(508, 'Lebanon - beirut', 'beirut'),
			(509, 'Malaysia - malaysia', 'malaysia'),
			(510, 'Mexico - acapulco', 'acapulco'),
			(511, 'Mexico - baja california sur', 'bajasur'),
			(512, 'Mexico - chihuahua', 'chihuahua'),
			(513, 'Mexico - ciudad juarez', 'juarez'),
			(514, 'Mexico - guadalajara', 'guadalajara'),
			(515, 'Mexico - guanajuato', 'guanajuato'),
			(516, 'Mexico - hermosillo', 'hermosillo'),
			(517, 'Mexico - mazatlan', 'mazatlan'),
			(518, 'Mexico - mexico city', 'mexicocity'),
			(519, 'Mexico - monterrey', 'monterrey'),
			(520, 'Mexico - oaxaca', 'oaxaca'),
			(521, 'Mexico - puebla', 'puebla'),
			(522, 'Mexico - puerto vallarta', 'pv'),
			(523, 'Mexico - tijuana', 'tijuana'),
			(524, 'Mexico - veracruz', 'veracruz'),
			(525, 'Mexico - yucatan', 'yucatan'),
			(526, 'Guam/Micronesia - micronesia', 'micronesia'),
			(527, 'Netherlands - amsterdam', 'amsterdam'),
			(528, 'Norway - oslo', 'oslo'),
			(529, 'Pakistan - pakistan', 'pakistan'),
			(530, 'Panama - panama', 'panama'),
			(531, 'Peru - lima', 'lima'),
			(532, 'Philippines - cebu', 'cebu'),
			(533, 'Philippines - davao city', 'davaocity'),
			(534, 'Philippines - philippines', 'manila'),
			(535, 'Poland - warsaw', 'warsaw'),
			(536, 'Portugal - faro / algarve', 'faro'),
			(537, 'Portugal - lisbon', 'lisbon'),
			(538, 'Portugal - porto', 'porto'),
			(539, 'Portugal - portugal', 'portugal'),
			(540, 'Russia - moscow', 'moscow'),
			(541, 'Russia - st petersburg', 'stpetersburg'),
			(542, 'Spain - alicante', 'alicante'),
			(543, 'Spain - baleares', 'baleares'),
			(544, 'Spain - barcelona', 'barcelona'),
			(545, 'Spain - bilbao', 'bilbao'),
			(546, 'Spain - cadiz', 'cadiz'),
			(547, 'Spain - canarias', 'canarias'),
			(548, 'Spain - granada', 'granada'),
			(549, 'Spain - madrid', 'madrid'),
			(550, 'Spain - malaga', 'malaga'),
			(551, 'Spain - sevilla', 'sevilla'),
			(552, 'Spain - valencia', 'valencia'),
			(553, 'Singapore - singapore', 'singapore'),
			(554, 'Sweden - stockholm', 'stockholm'),
			(555, 'Switzerland - basel', 'basel'),
			(556, 'Switzerland - bern', 'bern'),
			(557, 'Switzerland - geneva', 'geneva'),
			(558, 'Switzerland - zurich', 'zurich'),
			(559, 'Taiwan - taipei', 'taipei'),
			(560, 'Thailand - bangkok', 'bangkok'),
			(561, 'Turkey - istanbul', 'istanbul'),
			(562, 'UAE - dubai', 'dubai'),
			(563, 'Venezuela - caracas', 'caracas'),
			(564, 'Vietnam - vietnam', 'vietnam');";
			mysql_query($sql1);

			$sql1 = "CREATE TABLE `{$_POST['db_prefix']}types` (
			  `type_id` int(11) NOT NULL auto_increment,
			  `title` varchar(100) NOT NULL,
			  `code` varchar(100) NOT NULL,
			  PRIMARY KEY  (`type_id`)
			);";
			mysql_query($sql1);


			$sql1 = "INSERT INTO `{$_POST['db_prefix']}types` (`type_id`, `title`, `code`) VALUES
			(1, 'community', 'ccc'),
			(2, 'events', 'eee'),
			(3, 'gigs', 'ggg'),
			(4, 'housing', 'hhh'),
			(5, 'jobs', 'jjj'),
			(6, 'personals', 'ppp'),
			(7, 'resumes', 'res'),
			(8, 'for sale', 'sss'),
			(9, 'services', 'bbb');";
			mysql_query($sql1);
		}
		if(!$errors)
		{
			header('location:install.php?done=1');
		}
	}
}
if($errors)
$error = gen_error_box($errors);

if($_GET['done']){
	$msg = 'Installation completed, please remove install.php and make config.php readonly then login <a href="login.php">here</a> to use.';
}
include('header.php');
?>

<h1>Install</h1>

<?php if($error){?>
<div class="error_msg"><?php echo $error;?></div>
<?php } ?>
<?php if($msg){?>
<div class="msg"><?php echo $msg;?></div>
<?php } ?>

<?php if(!$_GET['done']){?>
<form action="" method="post" enctype="multipart/form-data" onsubmit="">
<table class="detail">

<tr>
<th colspan="2" class="subtitle">Database Information</th>
</tr>

<tr>
<th><label for="db_host">Database Host</label></th>
<td><input type="text" class="txt" name="db_host" id="db_host" value="<?php echo $_POST['db_host'] ? $_POST['db_host'] : 'localhost';?>" size="60"/></td>
</tr>

<tr>
<th><label for="db_user">Database Username</label></th>
<td><input type="text" class="txt" name="db_user" id="db_user" value="<?php echo $_POST['db_user'];?>" size="60"/></td>
</tr>

<tr>
<th><label for="db_pass">Database Passowrd</label></th>
<td><input type="text" class="txt" name="db_pass" id="db_pass" value="<?php echo $_POST['db_pass'];?>" size="60"/></td>
</tr>

<tr>
<th><label for="db_name">Database Name</label></th>
<td><input type="text" class="txt" name="db_name" id="db_host" value="<?php echo $_POST['db_name'];?>" size="60"/></td>
</tr>

<tr>
<th><label for="db_prefix">Database Prefix</label></th>
<td><input type="text" class="txt" name="db_prefix" id="db_prefix" value="<?php echo $_POST['db_prefix'] ? $_POST['db_prefix'] : 'cl_';?>" size="60"/></td>
</tr>

<tr class="space">
<td colspan="2">&nbsp;</td>
</tr>

<tr>
<th colspan="2" class="subtitle">Login & Password</th>
</tr>

<tr>
<th><label for="admin_user">Admin Username</label></th>
<td><input type="text" class="txt" name="admin_user" id="admin_user" value="<?php echo $_POST['admin_user'];?>" size="60"/></td>
</tr>

<tr>
<th><label for="admin_pass">Admin Password</label></th>
<td><input type="text" class="txt" name="admin_pass" id="admin_pass" value="<?php echo $_POST['admin_pass'];?>" size="60"/></td>
</tr>

<tr class="space">
<td colspan="2">&nbsp;</td>
</tr>

<tr>
<th colspan="2" class="subtitle">General Settings</th>
</tr>

<tr>
<th><label for="site_name">Site Name</label></th>
<td><input type="text" class="txt" name="site_name" id="site_name" value="<?php echo $_POST['site_name'];?>" size="60"/></td>
</tr>

<tr>
<th><label for="admin_email">Admin Email</label></th>
<td><input type="text" class="txt" name="admin_email" id="admin_email" value="<?php echo $_POST['admin_email'];?>" size="60"/></td>
</tr>

<tr>
<td colspan="2" align="center">
<input type="submit" name="submit" value="Submit" class="btn" />
</td>
</tr>

</table>
</form>
<?php
}
?>
<?php
include('footer.php');
?>