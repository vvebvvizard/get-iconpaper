<!DOCTYPE>
<html>

  <head>
  
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Get Iconpaper on your website!</title>
		
    <!--Include the css file, in this file you can customize all elements-->
    <link href="geticonpaper/geticonpaper.css" rel="stylesheet" type="text/css" media="screen" />
		
    <!--Include the php file, in this file you can change the layout and reorganize all elements-->
    <?php include('geticonpaper/geticonpaper.php'); ?>
    
    <!--CSS for background and postit used in this example-->
    <style type="text/css">
      body { 
        background: url('tile.png') repeat;
      }
      #getter {
      	position: relative;
      	top: 10%;
        width: 222px;
        height: 230px;
        margin: auto;
        padding: 55px 0 0 55px;
        background-image: url('postit.png');   
      }
    </style>
    
  </head>
  
  <body>
	
    <div id="getter">
    
      <!--Call the function wherever you want. You need to provide the number of posts (3 in this example) you want to display as parameter (10 max)-->
      <?php getIconpaper(3,20); ?>
      <!--You can provide an optional parameter (20 in this example), providing a maximum of characters for the title. Useful to adapt the function to your layout. The title will end with ... (ex : here the title for Professor von Quackerstein will be "Professor von Qu ..."-->
      
    </div>
		
  </body>
  
</html>