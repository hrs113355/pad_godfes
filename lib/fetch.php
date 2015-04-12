<?php
function get_data($id){
  return if ! is_numeric($id);

  $page_url = SOURCE_SITE . $id;

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $page_url);
  curl_setopt($ch, CURLOPT_HEADER, false);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

  $page_data = curl_exec($ch);
  curl_close($ch);

  parse_data($page_data);
}

function parse_data($page_data){
  // get id
  // get_name
  // get icon
}

function cached_data($id, $name, $icon){
  // save id, name to db
  // save icon to cache dir
}
?>
