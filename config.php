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

define('SERVICE_ACCOUNT_EMAIL_ADDRESS', 'ServiceAccountEmail@developer.gserviceaccount.com');
define('ISSUER_ID', 'IssuerId');
define('SERVICE_ACCOUNT_PRIVATE_KEY', 'privatekey.json');
define('APPLICATION_NAME', 'Android Pay Demo');
// Application origins for save to wallet button.
$ORIGINS = array('http://localhost:8080');
// Type of request.
define('SAVE_TO_ANDROID_PAY', 'savetoandroidpay');
define('LOYALTY_WEB', 'loyaltywebservice');
// Api scopes url.
define('SCOPES', 'https://www.googleapis.com/auth/wallet_object.issuer');
//Target audience for JWT.
define('AUDIENCE', 'google');
// Wallet objects API classes and objects ids.
define('LOYALTY_CLASS_ID', 'LoyaltyClass');
define('LOYALTY_OBJECT_ID', 'LoyaltyObject');
define('OFFER_CLASS_ID', 'OfferClass');
define('OFFER_OBJECT_ID', 'OfferObject');
define('GIFTCARD_CLASS_ID', 'GiftCardClass');
define('GIFTCARD_OBJECT_ID', 'GiftCardObject');
