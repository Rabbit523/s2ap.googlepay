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

class WebserviceParams {

  /**
   * @var String $linkingId Loyalty program account identification.
   */
  private $linkingId;

  /**
   * @var WalletUser $walletUser The WalletUser object containing data about the
   * user requesting loyalty account linking.
   */
  private $walletUser;

  /**
   * @var Boolean $promotionalEmailOptIn Identifies whether the user opted
   * into promotional emails.
   */
  private $promotionalEmailOptIn;

  /**
   * @var Boolean $tosUserAcceptance Identifies whether the user accepted the
   * signup terms of service.
   */
  private $tosUserAcceptance;

  /**
   * @return String $linkingId The linking id.
   */
  public function getLinkingId() {
    return $this->linkingId;
  }

  /**
   * @param String $linkingId The linkingId to set.
   */
  public function setLinkingId($linkingId) {
    $this->linkingId = $linkingId;
  }

  /**
   * @return WalletUser $walletUser The wallet user requesting loyalty account
   * linking.
   */
  public function getWalletUser() {
    return $this->walletUser;
  }

  /**
   * @param WalletUser $walletUser The walletUser to set.
   */
  public function setWalletUser($walletUser) {
    $this->walletUser = $walletUser;
  }

  /**
   * @return Boolean $promotionalEmailOptIn The promotional email option.
   */
  public function getPromotionalEmailOptIn() {
    return $this->promotionalEmailOptIn;
  }

  /**
   * @param Boolean $promotionalEmailOptIn The promotional email option to set.
   */
  public function setPromotionalEmailOptIn($promotionalEmailOptIn) {
    $this->promotionalEmailOptIn = $promotionalEmailOptIn;
  }

  /**
   * @return Boolean $tosUserAcceptance Identifies whether the user accepted the
   * signup terms of service.
   */
  public function getTosUserAcceptance() {
    return $this->tosUserAcceptance;
  }

  /**
   * @param Boolean $tosUserAcceptance Identifies whether the user accepted the
   * signup terms of service.
   */
  public function setTosUserAcceptance($tosUserAcceptance) {
    $this->tosUserAcceptance = $tosUserAcceptance;
  }
}
