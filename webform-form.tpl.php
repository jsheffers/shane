<?php
foreach ($form["submitted"] as $key => $value) {
    if ("textfield" == $value["#type"]) {
        $form["submitted"][$key]['#attributes']["placeholder"] = t($value["#title"]);
    } 
}