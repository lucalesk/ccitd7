ccitd7
======

Drupal 7.x theme for the Creative Commons Italian site

ccitd7 is a Drupal 7.x theme that aims at replicating in Drupal the look and feel of the creativecommons.org theme originally developed for wordpress.

Particularly you will find the:

ccitd7.info file that describes the different areas in which the layout is organized and which css files  shall be imported

several template files .tpl.php that handle the output of a specific themable chunk of data. Namely the page.tpl.php, node--story.tpl.php, node.tpl.php and block.tpl.php override the relevant drupal core templates. 
The views-slideshow--featured-slider-2.tpl.php and views-view-fields--featured-slider-2.tpl.php  handle the output of the homepage carousel.
The views-view-unformatted--news.tpl.php and views-view-fields--news.tpl.php  handle the output of the  news page.

The .export files are needed to import in drupal the relevant views.

The ListModules_ccitd7.html file contains a list of the core modules to be enabled and of the additional modules that shall be installed to make the ccitd7 theme work.

The template.php contains additional conditional logic and data processing of the output.
