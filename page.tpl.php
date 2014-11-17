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
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>

  <div id="container">

    <div class="topbar">
		<div class="topbar-inner">
			<div class="container">
			
			

      <?php if ($logo): ?>
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
        </a>
      <?php endif; ?>

      <?php if ($site_name || $site_slogan): ?>
        <div id="name-and-slogan">
          <?php if ($site_name): ?>
            <?php if ($title): ?>
              <div id="site-name"><strong>
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
              </strong></div>
            <?php else: /* Use h1 when the content title is empty */ ?>
              <h1 id="site-name">
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
              </h1>
            <?php endif; ?>
          <?php endif; ?>

          <?php if ($site_slogan): ?>
            <div id="site-slogan"><?php print $site_slogan; ?></div>
          <?php endif; ?>
        </div> <!-- /#name-and-slogan -->
      <?php endif; ?>

      <?php print render($page['header']); ?>

    </div></div></div> <!-- /#topbar, /#topbar-inner, /#container -->
	

	

    <?php if ($main_menu || $secondary_menu): ?>
      <div id="navigation"><div class="section">
        <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('links', 'inline', 'clearfix')), 'heading' => t('Main menu'))); ?>
        <?php print theme('links__system_secondary_menu', array('links' => $secondary_menu, 'attributes' => array('id' => 'secondary-menu', 'class' => array('links', 'inline', 'clearfix')), 'heading' => t('Secondary menu'))); ?>
      </div></div> <!-- /.section, /#navigation -->
    <?php endif; ?>

    <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
	<?php if (user_is_logged_in() && $show_messages && $messages): print $messages; endif; ?>
	
	<div id="main" role="main">
		<div class="container">
			<div class="sixteen columns">
				<div class="first row">
					
					
						
					<?php print render($page['content']); ?>
				
											

				</div>
				
				<?php if($is_front) :?>
				
					<div class="short row">
					<?php if ($page['short_row_left']): ?>
					<div class="five columns alpha"><div class="bucket"><div class="inner">
						<?php print render($page['short_row_left']); ?>
					</div></div></div>
					<?php endif; ?>
					
					<?php if ($page['short_row_center']): ?>
					<div class="six columns"><div class="bucket"><div class="inner">
						<?php print render($page['short_row_center']); ?>
					</div></div></div>
					<?php endif; ?>
					
					<?php if ($page['short_row_right']): ?>
					<div class="five columns omega"><div class="bucket"><div class="inner">
						<?php print render($page['short_row_right']); ?>
					</div></div></div>
					<?php endif; ?>
					
					</div>
							
					<div class="tall row">
					<?php if ($page['tall_row_left']): ?>
					<div class="five columns alpha"><div class="bucket"><div class="inner">
						<?php print render($page['tall_row_left']); ?>
					</div></div></div>
					<?php endif; ?>

					<?php if ($page['tall_row_center']): ?>
					<div class="six columns"><div class="bucket"><div class="inner">
						<?php print render($page['tall_row_center']); ?>
					</div></div></div>
					<?php endif; ?>

					<?php if ($page['tall_row_right']): ?>
					<div class="five columns omega"><div class="bucket"><div class="inner">
						<?php print render($page['tall_row_right']); ?>
					</div></div></div>
					<?php endif; ?>
					</div>
				
				<?php endif ?>
				
				
				<?php if ($page['administrative']): ?>
				<div class="tall row">
					<?php print render($page['administrative']); ?>
				</div>
				<?php endif; ?>
				

				
			</div>
		</div>
	</div>

 

  
		<?php if ($page['footer']): ?>
		<footer id="fixfooter">
			<div class="container">
			<div id="globe"></div>
				<div id="colophon"><div class="sixteen columns"><div class="first row">
				
					<?php print render($page['footer']); ?>
					
				</div></div></div>
				
			</div>
		</footer>
		<?php endif; ?>  
  
   </div> <!-- /#main --> 
