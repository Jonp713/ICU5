<?php
include 'core/init.php';
active_protect($_GET['c']);

include 'includes/overall/header.php';

?>

<?php 


if($_SESSION['seen_ad'] == 0){
	
	if($_GET['c'] == "Hampy"){
	
		include 'includes/content/fullpagead.php';
	
		$_SESSION['seen_ad'] = 1;
	
	}
}

echo('<span class = "communitymoderator pull-right hidden-xs">');

if(empty($_GET['service'])){

	echo('<span class = "higherandscroll">');

	include 'includes/content/communityinfo.php';

}else{
	
	echo('<span class = "lowerandscroll">');
	
}

include 'includes/widgets/submitpost.php';

include 'includes/widgets/subscribe.php';

include 'includes/content/displaymoderator.php';

if($_GET['c'] == "TrapCity"){
	
	//$adid = get_random_ad(2);

	//display_side_ad($adid);

	//increment_display_count($adid);	
		
}

echo('</span></span>');

//$rgb = hex2rgb($colortouse);

//echo('<span class = "communitynav col-xs-12" style = "background-color:rgba('.implode($rgb,',').',0.5)">');

echo('<span class = "communitynav col-xs-12">');

echo('<span class = "lowerandscroll">');

include 'includes/content/servicelist.php';

echo('</span></span>');



echo('<span class = "postfeed">');

echo('<span class = "hidden-sm hidden-md hidden-lg">');

echo('</span>');

include 'includes/content/unnapprovedposts.php';


include 'includes/content/displayposts.php';

echo('</span>');

include 'includes/content/sharedpost.php';

?>




<?php include 'includes/overall/footer.php'; ?>