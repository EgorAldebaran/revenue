<?php

function defence() {
    $errors = array();
    $input = array();

    $input['company'] = $_POST['company'];
    if(strlen(trim($input['company']))==0) {
        $errors[] = "name company can't be null. error name";
    }
    return array($errors,$input);
}

  ?>
