<?php
/**
 * Simple GeoIP API that can be used in place of Google Location Service in Firefox
 * 
 * PHP Version 5.4.4
 * 
 * @category API
 * @package  GeoIP
 * @author   Pierre Rudloff <contact@rudloff.pro>
 * @license  LGPL https://www.gnu.org/licenses/lgpl.html
 * @link     https://rudloff.pro/divers/geoip/
 * */
$record=geoip_record_by_name($_SERVER['REMOTE_ADDR']);
echo json_encode(
    array('location'=>array('lat'=>$record['latitude'],
    'lng'=>$record['longitude']), 'accuracy'=>40000)
);
?>
