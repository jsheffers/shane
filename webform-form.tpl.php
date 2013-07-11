<?php
foreach ($form['submitted'] as $key => $value) {
 if (isset($form['submitted'][$key])) {
   $types = array('textfield', 'webform_email', 'textarea');

   if (isset($value['#type']) && in_array($value['#type'], $types)) {
     $form['submitted'][$key]['#attributes']['placeholder'] = t($value['#title']);
   }
 }
}
print drupal_render($form['submitted']);
print drupal_render_children($form);