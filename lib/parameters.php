<?php
// this file is common for a lot of landings
// vertical_id and offer_id are set through generate_inputs function (hidden to the user, different for each landing)
// the other values are parameters in the url
// creator_id will be set to 615 if undefined

$default_creator_id = 615;

$parameters =
[
  "vertical_id" => "",
  
  "offer_id" =>  isset($_GET["offer_id"]) ? $_GET["offer_id"] : "",
  "creator_id" =>  isset($_GET["creator_id"]) ? $_GET["creator_id"] : $default_creator_id,
  "aff_id" =>  isset($_GET["aff_id"]) ? $_GET["aff_id"] : "",
  "sub_aff_id" =>  isset($_GET["sub_aff_id"]) ? $_GET["sub_aff_id"] : "",
  "aff_sub" =>  isset($_GET["aff_sub"]) ? $_GET["aff_sub"] : "",
  "aff_sub2" =>  isset($_GET["aff_sub2"]) ? $_GET["aff_sub2"] : "",
  "aff_sub3" =>  isset($_GET["aff_sub3"]) ? $_GET["aff_sub3"] : "",
  "aff_sub4" =>  isset($_GET["aff_sub4"]) ? $_GET["aff_sub4"] : "",
  "aff_sub5" =>  isset($_GET["aff_sub5"]) ? $_GET["aff_sub5"] : "",
  "ad_keyword" =>  isset($_GET["ad_keyword"]) ? $_GET["ad_keyword"] : "",
  "click_id" =>  isset($_GET["click_id"]) ? $_GET["click_id"] : "",
  "msclkid" =>  isset($_GET["msclkid"]) ? $_GET["msclkid"] : "",
  "gclid" =>  isset($_GET["gclid"]) ? $_GET["gclid"] : "",
  "device" =>  isset($_GET["device"]) ? $_GET["device"] : "",
  "source" =>  isset($_GET["source"]) ? $_GET["source"] : "",
  "ip" => isset($_SERVER["HTTP_CF_CONNECTING_IP"]) ? $_SERVER["HTTP_CF_CONNECTING_IP"] : $_SERVER['REMOTE_ADDR'],
  "lead" => 0
];

function set_parameters($values)
{
  global $parameters;

  // always in function parameters
  $parameters["vertical_id"] = $values["vertical_id"];

  // to add any parameter we want
  foreach($values as $key => $value)
  {
    if(isset($_GET[$key])) $parameters[$key] = $_GET[$key];
    else $parameters[$key] = $value;
  }
}

function generate_inputs($values)
{
  global $parameters;

  set_parameters($values);

  echo '<!-- Start V3 values -->' . "\n";

  foreach($parameters as $name => $value)
  {
    echo '<input type="hidden" name="' . $name . '" value="' . $value . '">' . "\n";
  }

  echo '<!-- End V3 values -->' . "\n";
}
?>
