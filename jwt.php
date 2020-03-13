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
/**
 * This class contains utility functions to create request/response objects for
 * webservice api.
 */
require_once 'utils/wob_utils.php';

$wobPayload = new WobPayload($ORIGINS);
$objId = strval(rand(1, 100));

switch($_REQUEST['type']) {
  case 'loyalty' :
    $loyaltyObject = Loyalty::generateLoyaltyObject(
      ISSUER_ID, LOYALTY_CLASS_ID, LOYALTY_OBJECT_ID . $objId);
    $wobPayload->addWalletObjects($loyaltyObject, LOYALTY_OBJECT_ID);
    break;
  case 'offer' :
    $offerObject = Offer::generateOfferObject(
      ISSUER_ID, OFFER_CLASS_ID, OFFER_OBJECT_ID . $objId);
    $wobPayload->addWalletObjects($offerObject, OFFER_OBJECT_ID);
    break;
  case 'giftcard' :
    $giftCardObject = GiftCard::generateGiftCardObject(
      ISSUER_ID, GIFTCARD_CLASS_ID, GIFTCARD_OBJECT_ID . $objId);
    $wobPayload->addWalletObjects($giftCardObject, GIFTCARD_OBJECT_ID);
    break;
}
// Save to wallet request body.
$requestBody = $wobPayload->getSaveToWalletRequest();
// Create the response JWT.
$utils = new WobUtils();
echo $jwt = $utils->makeSignedJwt($requestBody, $client);
