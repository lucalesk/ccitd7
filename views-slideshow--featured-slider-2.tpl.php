<?php


/*
    Copyright 2014 Luca Leschiutta
    
    This file is part of ccitd7.

    ccitd7 is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    ccitd7 is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with ccitd7.  If not, see <http://www.gnu.org/licenses/>.
    
    

*/

/**
 * @file
 * Default views template for displaying a slideshow.
 *
 * - $view: The View object.
 * - $options: Settings for the active style.
 * - $rows: The rows output from the View.
 * - $title: The title of this group of rows. May be empty.
 *
 * @ingroup views_templates
 */
?>

<?php if (!empty($slideshow)): ?>
  
    <?php if (!empty($top_widget_rendered)): ?>
		
		<?php print $top_widget_rendered; ?>

		
    <?php endif; ?>
	
	<div class="carousel  bucket" >
		<div id="slides" class="inner">
			
				<div class="slide" >
		
    <?php print $slideshow; ?>
											
				</div>
	
						
		</div>
	</div>
	
    <?php if (!empty($bottom_widget_rendered)): ?>
      
        <?php print $bottom_widget_rendered; ?>
      
    <?php endif; ?>
  
<?php endif; ?>


