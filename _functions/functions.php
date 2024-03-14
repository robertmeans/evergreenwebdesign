<?php

function is_post_request() {
  return $_SERVER['REQUEST_METHOD'] == 'POST';
}

function livereload() {
  if (WWW === 'local') {
    $r = '<script src="http://localhost:35729/livereload.js"></script>';
  }
  return $r;
}
