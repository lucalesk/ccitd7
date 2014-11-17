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

?>

<?php


function ccitd7_form_alter(&$form, &$form_state, $form_id) {
  if ($form_id == 'search_block_form') {
    $form['search_block_form']['#title'] = t('Search'); // Change the text on the label element
    $form['search_block_form']['#title_display'] = 'invisible'; // Toggle label visibilty
    $form['search_block_form']['#size'] = 40;  // define size of the textfield
    $form['search_block_form']['#default_value'] = t('Search'); // Set a default value for the textfield
    $form['actions']['submit']['#value'] = t('GO!'); // Change the text on the submit button
    $form['actions']['submit'] = array('#type' => 'submit', '#src' => base_path() . path_to_theme() . '/img/search-glass.png');
	$form['actions']['submit']['#attributes']['id'][] = 'glass';
    // Add extra attributes to the text box
    $form['search_block_form']['#attributes']['onblur'] = "if (this.value == '') {this.value = 'Cerca';}";
    $form['search_block_form']['#attributes']['onfocus'] = "if (this.value == 'Cerca') {this.value = '';}";
    // Prevent user from searching the default text
    $form['#attributes']['onsubmit'] = "if(this.search_block_form.value=='Cerca'){ alert('Inserire un parametro di ricerca'); return false; }";
    // Alternative (HTML5) placeholder attribute instead of using the javascript
    $form['search_block_form']['#attributes']['placeholder'] = t('Search');
  }
}

?>
