<?php 

/**
 * Iconpaper RSS Reader for Websites
 * http://get.iconpaper.org/
 *
 * @author Verswyvel Vivian
 * @param $nbitems number of RSS items to display (10 max)
 */

function getIconpaper($nbitems) {
	# Use curl to get the xml file
	$ch = curl_init('http://feeds.feedburner.com/iconpaper?format=xml');
	curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	$xml = curl_exec($ch);
	curl_close($ch);
	
	# Parse the xml data file
	$parsedxml = new SimpleXmlElement($xml, LIBXML_NOCDATA);
	
	# 10 items max (feedburner limitation)
	if ($nbitems > 10) {$nbitems = 10;}
	
	# Begin to write the html
	echo '<div id="geticonpaper-wrap">';
	
	# Loop to write the nbitems we want
    for($i=0; $i<$nbitems; $i++) {
    	# Get the informations available in the RSS
	   	$url 	= $parsedxml->channel->item[$i]->link;
		$title 	= $parsedxml->channel->item[$i]->title;
		$desc = $parsedxml->channel->item[$i]->description;
		
		# Description includes some other informations, we need to extract these informations
		$thumbnail = substr($desc, 0, 75);
		
		# Get the author (not used in this example)
		# $getauthorStep1 = explode("by", $desc);
		# $getauthorStep2 = explode(",", $getauthorStep1[1]);
		
		# Get the category
		$getcategoryStep1 = explode("in our", $desc);
		$getcategoryStep2 = explode("gallery", $getcategoryStep1[1]);
		
		# So we get the author and category with $getauthorStep2[0] and $getcategoryStep2[0]
		
		# Write the current item in the loop
		echo '<div class="geticonpaper-wraprssitem"><div class="geticonpaper-rssthumb">', $thumbnail, '</div><div class="geticonpaper-rssinfos">', $title, '</br><span class="geticonpaper-rssauthor">in ', $getcategoryStep2[0], '</span><div onclick="window.open(\'', $url, '\', \'_blank\'); return false;" class="geticonpaper-dlbutton">Download</div></div></div>';
    }
    echo '</div>';
}

?>