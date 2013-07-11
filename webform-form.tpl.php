<?php
foreach ($form["submitted"] as $key => $value) {
    if ("textfield" == $value["#type"]) {
        $form["submitted"][$key]['#attributes']["placeholder"] = t($value["#title"]);
    } 
}
print drupal_render($form['submitted']);
print drupal_render_children($form);