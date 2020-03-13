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
 * This class represent the Wob payload object.
 */

class WobPayload {

  /**
   * @var String Target audience for JWT.
   */
  private $audience;

  /**
  * @var String Type of request.
  */
  private $type;

  /**
  * @var String OAuth 2.0 service account generated email address.
  */
  private $iss;

  /**
   * @var Array Domains to whitelist JWT saving functionality.
   */
  private $origins = array();

  /**
   * @var Integer Time when JWT issued (in seconds).
   */
  private $iat;

  /**
   * @var Array Payload.
   */
  private $payload = array();

  /**
   * @var Array Save to wallet request body.
   */
  private $requestBody = array();

  /**
   * Initializes Google credentials sent in request body.
   */
  function __construct($origins) {
    $this->iss = SERVICE_ACCOUNT_EMAIL_ADDRESS;
    $this->audience = AUDIENCE;
    $this->type = SAVE_TO_ANDROID_PAY;
    $this->iat = time();
    $this->origins = $origins;
  }

  /**
   * Add wob objects in the list.
   * @param Array $object Wallet objects/classes.
   * @param String $wobType Type of wallet object.
   */
  public function addWalletObjects($object, $wobType) {
    if($wobType == LOYALTY_CLASS_ID) {
      if(isset($object) && !(empty($object))) {
        $this->payload['loyaltyClasses'] = array($object);
      }
    } else if($wobType == LOYALTY_OBJECT_ID) {
      if(isset($object) && !(empty($object))) {
        $this->payload['loyaltyObjects'] = array($object);
      }
    } else if($wobType == OFFER_CLASS_ID) {
      if(isset($object) && !(empty($object))) {
        $this->payload['offerClasses'] = array($object);
      }
    } else if($wobType == OFFER_OBJECT_ID) {
      if(isset($object) && !(empty($object))) {
        $this->payload['offerObjects'] = array($object);
      }
    } else if($wobType == GIFTCARD_CLASS_ID) {
      if(isset($object) && !(empty($object))) {
        $this->payload['giftCardClasses'] = array($object);
      }
    } else if($wobType == GIFTCARD_OBJECT_ID) {
      if(isset($object) && !(empty($object))) {
        $this->payload['giftCardObjects'] = array($object);
      }
    } else {
      throw new InvalidArgumentException('Invalid Object type: '.$wobType);
    }
  }

  /**
   * Generates the Save to Wallet request body from a WobPayload.
   * @return Array $requestBody Save to wallet request sent.
   */
  public function getSaveToWalletRequest() {
    $this->requestBody['iss'] = $this->iss;
    $this->requestBody['aud'] = $this->audience;
    $this->requestBody['typ'] = $this->type;
    $this->requestBody['iat'] = $this->iat;
    $this->requestBody['payload'] = $this->payload;
    $this->requestBody['origins'] = $this->origins;
    return $this->requestBody;
  }
}
