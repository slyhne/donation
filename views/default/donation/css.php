<?php

	/**
	 * Elgg Donation plugin
	 * @license: GPL v 2.
	 * @author Tiger
	 * @copyright TechIsUs
	 * @link www.techisus.dk
	 */
 
?>
.sidebarBox .donationWrapper {
	background: white;
	-webkit-border-radius: 8px; 
	-moz-border-radius: 8px;
	padding:5px;	
}
.sidebarBox .donationWrapper .recentDonator {
	margin:2px;
	float:left;
}
.sidebarBox .donationWrapper .recentDonator .usericon img {
	/*width:25px;*/
	/*height:25px;*/
	padding:0px;	
}
/* br necessary for ie6 & 7 */
.sidebarBox .donationWrapper br {
	height:0;
	line-height:0;
}
.profile_donation {
	padding:0 0 0 21px;
	line-height:1.3em;
	min-height:17px;
	margin:2px;
	background: url(<?php echo $vars['url']; ?>mod/donation/graphics/icon_donation.png) no-repeat left -1px;
}
.list_donation {
	float:right;
	padding:0 0 0 21px;
	line-height:1.3em;
	min-height:17px;
	margin-top: -20px;
	background: url(<?php echo $vars['url']; ?>mod/donation/graphics/icon_donation.png) no-repeat left -1px;
}
/* ***************************************
	ALL DONATORS
*************************************** */
.contentWrapper .donationWrapper {
	background: white;
	-webkit-border-radius: 8px; 
	-moz-border-radius: 8px;

}
.contentWrapper .donationWrapper .recentDonator {
	margin:2px;
	float:left;
	padding:4px;	
}
.contentWrapper .recentDonator .usericon img {
	width:100px;
	height:100px;
}


