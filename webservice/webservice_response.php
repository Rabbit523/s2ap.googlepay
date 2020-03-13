<?php
/**
 * Copyright 2013 Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use $this file except in compliance with the License.
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
 * Class to get and set webservice response.
 */
class WebserviceResponse {

  /**
   * @var String invalidWalletUserFields of webservice response.
   */
  public $invalidWalletUserFields;

  /**
   * @var String status of webservice response.
   */
  public $status;

  /**
   * Initialize webservice status.
   */
  public function __construct($status) {
    if($this->isValid($status))
      $this->setStatus($status);
    else
      $this->setStatus(ResponseCode::SUCCESS);
    $this->invalidWalletUserFields = array();
  }

  /**
   * @return String webservice response status.
   */
  public function getStatus() {
    return $this->status;
  }

  /**
   * @param String status set webservice response status.
   */
  public function setStatus($status) {
    $this->status = $status;
  }

  /**
   * @return String webservice response invalidWalletUserFields.
   */
  public function getInvalidWalletUserFields() {
    return $this->invalidWalletUserFields;
  }

  /**
   * @param String webservice set response invalidWalletUserFields
   */
  public function setInvalidWalletUserFields($invalidWalletUserFields) {
    $this->invalidWalletUserFields = $invalidWalletUserFields;
  }

  /**
   * @param String responseCode to validate
   */
  public function isValid($responseCode) {
    return ($responseCode == ResponseCode::ERROR_INVALID_DATA_FORMAT
      || $responseCode == ResponseCode::ERROR_DATA_ON_MERCHANT_RECORD_DIFFERENT
      || $responseCode == ResponseCode::ERROR_INVALID_LINKING_ID
      || $responseCode == ResponseCode::ERROR_PREEXISTING_ACCOUNT_REQUIRES_LINKING
      || $responseCode == ResponseCode::ERROR_ACCOUNT_ALREADY_LINKED
      || $responseCode == ResponseCode::SUCCESS
      || $responseCode == ResponseCode::SUCCESS_ACCOUNT_ALREADY_CREATED
      || $responseCode == ResponseCode::SUCCESS_ACCOUNT_ALREADY_LINKED);
  }
}

final class ResponseCode
{
  const ERROR_INVALID_DATA_FORMAT = 'ERROR_INVALID_DATA_FORMAT';
  const ERROR_DATA_ON_MERCHANT_RECORD_DIFFERENT = 'ERROR_DATA_ON_MERCHANT_RECORD_DIFFERENT';
  const ERROR_INVALID_LINKING_ID = 'ERROR_INVALID_LINKING_ID';
  const ERROR_PREEXISTING_ACCOUNT_REQUIRES_LINKING = 'ERROR_PREEXISTING_ACCOUNT_REQUIRES_LINKING';
  const ERROR_ACCOUNT_ALREADY_LINKED = 'ERROR_ACCOUNT_ALREADY_LINKED';
  const SUCCESS = 'SUCCESS';
  const SUCCESS_ACCOUNT_ALREADY_CREATED = 'SUCCESS_ACCOUNT_ALREADY_CREATED';
  const SUCCESS_ACCOUNT_ALREADY_LINKED = 'SUCCESS_ACCOUNT_ALREADY_LINKED';
}
