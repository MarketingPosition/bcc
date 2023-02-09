<?php
require_once ('../form/check-browser.php');
/*
 *
 * UTM Data
 *
 */
$browser           = get_browser_name($_SERVER['HTTP_USER_AGENT']);
$device            = get_device();

$utm_params = array(
  "utmsource"    => urldecode($_POST["USOURCE"]),
  "utmmedium"    => urldecode($_POST["UMEDIUM"]),
  "utmcampaign"  => urldecode($_POST["UCAMPAIGN"]),
  "utmcontent"   => urldecode($_POST["UCONTENT"]),
  "utmterm"      => urldecode($_POST["UTERM"]),
  "utmgclid"     => urldecode($_POST["GCLID"]),
  "referpage"    => urldecode($_POST["IREFERRER"]),
  "landingpage"  => urldecode($_POST["ILANDPAGE"]),
  "device"       => urldecode($device),
  "browser"      => urldecode($browser)
);
