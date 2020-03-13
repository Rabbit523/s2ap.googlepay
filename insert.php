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

switch($_REQUEST['type']) {
  case 'loyalty' :
    $service->loyaltyclass->insert(
      Loyalty::generateLoyaltyClass(ISSUER_ID, LOYALTY_CLASS_ID));
    break;
  case 'offer' :
    $service->offerclass->insert(
      Offer::generateOfferClass(ISSUER_ID, OFFER_CLASS_ID));
    break;
  case 'giftcard' :
    echo $service->giftcardclass->insert(
      GiftCard::generateGiftCardClass(ISSUER_ID, GIFTCARD_CLASS_ID));
    break;
}
