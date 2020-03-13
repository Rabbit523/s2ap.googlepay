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

class WebserviceRequest {

  /**
   * @var String $apiVersion The API version.
   */
  private $apiVersion;

  /**
   * @var String $method The type of request. Valid values are signup and link.
   */
  private $method;

  /**
   * @var WebserviceParams $params The parameters required for the request.
   */
  private $params;

  /**
   * @return String $apiVersion The API version.
   */
  public function getApiVersion() {
    return $this->apiVersion;
  }

  /**
   * @param String $apiVersion The API version to set.
   */
  public function setApiVersion($apiVersion) {
    $this->apiVersion = $apiVersion;
  }

  /**
   * @return String $method The type of request.
   */
  public function getMethod() {
    return $this->method;
  }

  /**
   * @param String $method The type of request to set.
   */
  public function setMethod($method) {
    $this->method = $method;
  }

  /**
   * @return WebserviceParams $params The parameters for the request.
   */
  public function getParams() {
    return $this->params;
  }

  /**
   * @param WebserviceParams $params The parameters for the request to set.
   */
  public function setParams($params) {
    $this->params = $params;
  }
}
