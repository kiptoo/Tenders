<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>Fullscreen Background Image Slideshow with CSS3</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Fullscreen Background Image Slideshow with CSS3 - A Css-only fullscreen background image slideshow" />
        <meta name="keywords" content="css3, css-only, fullscreen, background, slideshow, images, content" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="../../front/css/component.css" />
        <link rel="stylesheet" type="text/css" href="../../front/css/default.css" />
        <link rel="stylesheet" type="text/css" href="../../front/css/demo.css" />
        <link rel="stylesheet" type="text/css" href="../../front/css/style1.css" />
        <link rel="stylesheet" href="../../front/css/style.css" type="text/css" media="screen"/>
		<script type="text/javascript" src="../../front/js/modernizr.custom.86080.js"></script>
        	<script type="text/javascript" src="../../front/js/modernizr.custom.js"></script>
   
    </head>
    <body >
        <ul class="cb-slideshow">
            <img src="../../front/images/2.jpg" alt="kip" style="width: 100%"/>
        </ul>
        <div class="container">
        
        <!-- Codrops top bar -->
            <div class="codrops-top">
                <a href="http://www.techkraze.com">
                    <strong>&laquo; Designed by: </strong>Techkraze interactive 
                </a>
                <span class="right">
                    <a href="http://www.karubui photography.com" target="_blank">Photography by Mark karubui</a>
                    <a href="http://creativecommons.org/licenses/by-sa/2.0/deed.en" target="_blank">CC 2013</a>
                    
                    </a>
                </span>
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
			<ul id="cbp-tm-menu" class="cbp-tm-menu">
				<li>
					<a href="#">HOME</a>
				</li>
				<li>
					<a href="#">TENDERS</a>
			
				</li>
				<li>
					<a href="#">NOTICES</a>
			
				</li>
				<li>
					<a href="#">PROCUREMENT ENTITIES</a>
				
				</li>
			</ul>
		
        </div>
        
			<div class="searchBox">
				
                <form id="ui_element" class="sb_wrapper">
                    <p>
						<span class="sb_down"></span>
						<input class="sb_input" type="text"/>
						<input class="sb_search" type="submit" value=""/>
					</p>
					<ul class="sb_dropdown" style="display:none;">
						<li class="sb_filter">Filter your search</li>
						<li><input type="checkbox"/><label for="all"><strong>All Categories</strong></label></li>
						<li><input type="checkbox"/><label for="Automotive">Automotive</label></li>
						<li><input type="checkbox"/><label for="Baby">Baby</label></li>
						<li><input type="checkbox"/><label for="Beauty">Beautys</label></li>
						<li><input type="checkbox"/><label for="Books">Books</label></li>
						<li><input type="checkbox"/><label for="Cell">Cell Phones &amp; Service</label></li>
						<li><input type="checkbox"/><label for="Cloth">Clothing &amp; Accessories</label></li>
						<li><input type="checkbox"/><label for="Electronics">Electronics</label></li>
						<li><input type="checkbox"/><label for="Gourmet">Gourmet Food</label></li>
						<li><input type="checkbox"/><label for="Health">Health &amp; Personal Care</label></li>
						<li><input type="checkbox"/><label for="Home">Home &amp; Garden</label></li>
						<li><input type="checkbox"/><label for="Industrial">Industrial &amp; Scientific</label></li>
						<li><input type="checkbox"/><label for="Jewelry">Jewelry</label></li>
						<li><input type="checkbox"/><label for="Magazines">Magazines</label></li>
					</ul>
                </form>
            </div>
         		<div class="mb_footer">
             <a href="#" ><div id="slide">HideSlideshow</div></a>    
			<a class="mb_left" href="http://www.techkraze.com"><span>&laquo; Designed by:</span> Techkraze interactive </a>
			<a href="http://tympanus.net/codrops/2011/03/28/moving-boxes-content/"><strong>cc 2013</strong></a>
			<a href="http://www.karubui photography.com" target="_blank">Photography by Mark karubui</a>
		</div>
       
		<script>
			var menu = new cbpTooltipMenu( document.getElementById( 'cbp-tm-menu' ) );
		</script>
           <script type="text/javascript">
            $(function() {
				/**
				* the element
				*/
				var $ui 		= $('#ui_element');
				
				/**
				* on focus and on click display the dropdown, 
				* and change the arrow image
				*/
				$ui.find('.sb_input').bind('focus click',function(){
					$ui.find('.sb_down')
					   .addClass('sb_up')
					   .removeClass('sb_down')
					   .andSelf()
					   .find('.sb_dropdown')
					   .show();
				});
				
				/**
				* on mouse leave hide the dropdown, 
				* and change the arrow image
				*/
				$ui.bind('mouseleave',function(){
					$ui.find('.sb_up')
					   .addClass('sb_down')
					   .removeClass('sb_up')
					   .andSelf()
					   .find('.sb_dropdown')
					   .hide();
				});
				
				/**
				* selecting all checkboxes
				*/
				$ui.find('.sb_dropdown').find('label[for="all"]').prev().bind('click',function(){
					$(this).parent().siblings().find(':checkbox').attr('checked',this.checked).attr('disabled',this.checked);
				});
            });
        </script>
    </body>
</html>