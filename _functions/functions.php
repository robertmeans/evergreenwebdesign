<?php
function is_post_request() {
  return $_SERVER['REQUEST_METHOD'] == 'POST';
}

function h($string="") {
  return htmlentities($string);
}


function validate_pc_contact($field) {

  $errors = [];
  
    if ($field['name'] == '') {
      $errors['name'] = "Don't go nameless on me!";
    }

  return $errors; 
}





function display_errors($errors=array()) {
  $output = '';
  if(!empty($errors)) {
    $output .= "<div class=\"errors\">";
    $output .= "Please fix the following errors:";
    $output .= "<ul>";
    foreach($errors as $error) {
      $output .= "<li>" . h($error) . "</li>";
    }
    $output .= "</ul>";
    $output .= "</div>";
  	}
  	return $output;
	}