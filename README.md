Get Iconpaper on your website
=============================

`website` [get.iconpaper.org](http://get.iconpaper.org)

![Screenshot](http://www.iconpaper.org/geticonpaper/get.jpg)

### Directions ###

1/ Include the [geticonpaper.css](https://github.com/gor0n/Get-Iconpaper/blob/master/geticonpaper/geticonpaper.css) file on your page with a `<link>` tag ( in this file you can customize all elements )

    <link href="geticonpaper/geticonpaper.css" rel="stylesheet" type="text/css" media="screen" />


2/ Include the [geticonpaper.php](https://github.com/gor0n/Get-Iconpaper/blob/master/geticonpaper/geticonpaper.php) file on your page with `<?php include ?>` ( in this file you can change the layout and reorganize all elements )

    <?php include('geticonpaper/geticonpaper.php'); ?>


3/ Call the function wherever you want on your page, it will display the number of rss items you've set as parameter

    <?php getIconpaper(3); ?>


Try the [example page](https://github.com/gor0n/Get-Iconpaper/blob/master/example.php) to see it in action

### Options ###

You can set a second parameter to trim the title for your needs

	<?php getIconpaper(3,20); ?>
	
In this case, it will trim the title to 20 characters (with " ..."). So it will crop the title to 20 - 4 characters and add " ..." to the end

`example` the title "Professor von Quackerstein" limited to 20 char become "Professor von Qu ..."

### Versions ###

2012 01 04 - **1.0**