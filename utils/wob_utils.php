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

require_once 'webservice/webservice_wallet_user.php';
require_once 'webservice/webservice_params.php';
require_once 'webservice/webservice_request.php';
use \Firebase\JWT\JWT;

class WobUtils {

  /**
   * @var String OAuth 2.0 service account generated email address.
   */
  private $iss;

  /**
   * @var String Target audience for JWT.
   */
  private $audience;

  /**
   * @var String Type of request.
   */
  private $type;

  /**
   * @var Integer Time when JWT issued (in seconds).
   */
  private $iat;

  /**
   * @var Array Loyalty webservice request body.
   */
  private $responseBody = array();

  /**
   * Initializes Google credentials sent in response body.
   */
  function __construct() {
    $this->iss = SERVICE_ACCOUNT_EMAIL_ADDRESS;
    $this->audience = AUDIENCE;
    $this->type = LOYALTY_WEB;
    $this->iat = time();
  }

  /**
   * @param Array $walletUser Containing data about the user requesting loyalty
   * account signup.
   * @return Object $walletUserObject Wallet user object.
   */
  private function getWalletUserObject($walletUser) {
    if(isset($walletUser) && !empty($walletUser)) {
      $walletUserObject = new WebserviceWalletUser();
      foreach($walletUser as $key => $value) {
        $functionName = 'set'.$key;
        $walletUserObject->$functionName($value);
      }
      return $walletUserObject;
    }
  }

  /**
   * @param Array $params The parameters required for the request.
   * @return Object $paramsObject Webservice params object.
   */
  private function generateParamsObject($params) {
    if(isset($params) && !empty($params)) {
      $paramsObject = new WebserviceParams();
      if(isset($params['linkingId'])) {
        $paramsObject->setLinkingId($params['linkingId']);
      } else {
        $paramsObject->setPromotionalEmailOptIn(
            $params['promotionalEmailOptIn']);
        $paramsObject->setTosUserAcceptance($params['tosUserAcceptance']);
      }
      $paramsObject->setWalletUser($this->getWalletUserObject(
          $params['walletUser']));
      return $paramsObject;
    }
  }

  /**
   * @param Array $request Signup/linking account request body.
   * @return Object $requestObject Webservice request object.
   */
  public function getWebserviceRequestObject($request) {
    if(isset($request) && !empty($request)) {
      $requestObject = new WebserviceRequest();
      $requestObject->setApiVersion($request['apiVersion']);
      $requestObject->setMethod($request['method']);
      $requestObject->setParams($this->generateParamsObject(
          $request['params']));
      return $requestObject;
    }
  }

  /**
   * Generates the loyalty webservice response.
   * @param Loyalty $loyaltyObject The loyalty object.
   * @param Object $webResponse Webservice response object.
   * @param String $apiVersion The API version.
   * @return Array $responseBody Webservice response sent to the user.
   */
  public function generateWebserviceResponse($loyaltyObject, $webResponse,
      $apiVersion) {
    $this->responseBody['apiVersion'] = $apiVersion;
    $this->responseBody['iss'] = $this->iss;
    $this->responseBody['aud'] = $this->audience;
    $this->responseBody['typ'] = $this->type;
    $this->responseBody['iat'] = $this->iat;
    if(is_object($loyaltyObject) && !empty($loyaltyObject)) {
      $this->responseBody['payload']['loyaltyObjects'][] = $loyaltyObject;
    }
    $this->responseBody['payload']['webserviceResponse'] = $webResponse;
    return $this->responseBody;
  }
  // Creates a signed JWT.
  public function makeSignedJwt($payload,$client) {
    $header = array("typ" => "JWT", "alg" => "RS256");
    $segments = array();
    $segments[] = JWT::urlSafeB64Encode(json_encode($header));
    $segments[] = JWT::urlSafeB64Encode(json_encode($payload));
    $signing_input = implode(".", $segments);
    
    $signature = JWT::sign($signing_input, $client->getConfig("signing_key"), $alg = "RS256");
    $segments[] = JWT::urlSafeB64Encode($signature);

    return implode(".", $segments);
  }
}
