<?php
/**
 * Copyright 2013 Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * Set access token and include all required classes in the application.
 */
require_once 'header.php';

$type = $_REQUEST['type'];
switch($type) {
  $optParams = array('maxResults' => '5');
  case 'loyaltyclass' :
  	echo('Loyalty Classes=<br>');
    $results = $service->loyaltyclass->listLoyaltyclass(ISSUER_ID, $optParams);
  case 'offerclass' :
  	echo('Offer Classes=<br>');
    $results = $service->offerclass->listOfferclass(ISSUER_ID, $optParams);
  case 'giftcardclass' :
    echo('Gift Card Classes=<br>');
    $results = $service->giftcardclass->listGiftcardclass(ISSUER_ID, $optParams);
  case 'loyaltyobjects' :
  	$classId = $_REQUEST['classId'];
  	echo('Loyalty Object for classid='. $classId . '<br>');
    $results = $service->loyaltyobject->listLoyaltyobject($classId, $optParams);
  case 'offerobjects' :
  	$classId = $_REQUEST['classId'];
  	echo('Offer Object for classid='. $classId . '<br>');
    $results = $service->offerobject->listOfferobject($classId, $optParams);
  case 'giftcardobjects' :
    $classId = $_REQUEST['classId'];
    echo('Gift Card Object for classid='. $classId . '<br>');
    $results = $service->giftcardobject->listGiftcardobject($classId, $optParams);

  echo('Results per page=' . $results['pagination']['resultsPerPage'] . '<br>');
  echo('Next Page token=' . $results['pagination']['nextPageToken'] . '<br>');
  foreach ($results['resources'] as $walletObject) {
    echo($walletObject['id'] . '<br>');
  }
}
