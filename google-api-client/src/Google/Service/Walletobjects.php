<?php
/*
 * Copyright 2010 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */
class Google_Service
{
  public $batchPath;
  public $rootUrl;
  public $version;
  public $servicePath;
  public $availableScopes;
  public $resource;
  private $client;

  public function __construct(Google_Client $client)
  {
    $this->client = $client;
  }

  /**
   * Return the associated Google_Client class.
   * @return Google_Client
   */
  public function getClient()
  {
    return $this->client;
  }

  /**
   * Create a new HTTP Batch handler for this service
   *
   * @return Google_Http_Batch
   */
  public function createBatch()
  {
    return new Google_Http_Batch(
        $this->client,
        false,
        $this->rootUrl,
        $this->batchPath
    );
  }
}
/**
 * Service definition for Walletobjects (v1).
 *
 * <p>
 * The Wallet Objects API allows you to connect your business to millions of Google users and showcase your loyalty programs, offers, boarding passes, tickets, and more.
 * </p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_Walletobjects extends Google_Service
{


  public $boardingpassclass;
  public $boardingpassobject;
  public $genericclass;
  public $genericobject;
  public $giftcardclass;
  public $giftcardobject;
  public $loyaltyclass;
  public $loyaltyobject;
  public $offerclass;
  public $offerobject;
  

  /**
   * Constructs the internal representation of the Walletobjects service.
   *
   * @param Google_Client $client
   */
  public function __construct(Google_Client $client)
  {
    parent::__construct($client);
    $this->servicePath = 'walletobjects/v1/';
    $this->version = 'v1';
    $this->serviceName = 'walletobjects';

    $this->boardingpassclass = new Google_Service_Walletobjects_Boardingpassclass_Resource(
        $this,
        $this->serviceName,
        'boardingpassclass',
        array(
          'methods' => array(
            'addmessage' => array(
              'path' => 'boardingPassClass/{resourceId}/addMessage',
              'httpMethod' => 'POST',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'boardingPassClass/{resourceId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'version' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'approvedOnly' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'insert' => array(
              'path' => 'boardingPassClass',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'list' => array(
              'path' => 'boardingPassClass',
              'httpMethod' => 'GET',
              'parameters' => array(
                'issuerId' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'token' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),'patch' => array(
              'path' => 'boardingPassClass/{resourceId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'boardingPassClass/{resourceId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->boardingpassobject = new Google_Service_Walletobjects_Boardingpassobject_Resource(
        $this,
        $this->serviceName,
        'boardingpassobject',
        array(
          'methods' => array(
            'addmessage' => array(
              'path' => 'boardingPassObject/{resourceId}/addMessage',
              'httpMethod' => 'POST',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'boardingPassObject/{resourceId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'boardingPassObject',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'list' => array(
              'path' => 'boardingPassObject',
              'httpMethod' => 'GET',
              'parameters' => array(
                'classId' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'token' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),'patch' => array(
              'path' => 'boardingPassObject/{resourceId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'boardingPassObject/{resourceId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->genericclass = new Google_Service_Walletobjects_Genericclass_Resource(
        $this,
        $this->serviceName,
        'genericclass',
        array(
          'methods' => array(
            'addmessage' => array(
              'path' => 'genericClass/{resourceId}/addMessage',
              'httpMethod' => 'POST',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'genericClass/{resourceId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'version' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'approvedOnly' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'insert' => array(
              'path' => 'genericClass',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'list' => array(
              'path' => 'genericClass',
              'httpMethod' => 'GET',
              'parameters' => array(
                'issuerId' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'token' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),'patch' => array(
              'path' => 'genericClass/{resourceId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'genericClass/{resourceId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->genericobject = new Google_Service_Walletobjects_Genericobject_Resource(
        $this,
        $this->serviceName,
        'genericobject',
        array(
          'methods' => array(
            'addmessage' => array(
              'path' => 'genericObject/{resourceId}/addMessage',
              'httpMethod' => 'POST',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'genericObject/{resourceId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'genericObject',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'list' => array(
              'path' => 'genericObject',
              'httpMethod' => 'GET',
              'parameters' => array(
                'classId' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'token' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),'patch' => array(
              'path' => 'genericObject/{resourceId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'genericObject/{resourceId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->giftcardclass = new Google_Service_Walletobjects_Giftcardclass_Resource(
        $this,
        $this->serviceName,
        'giftcardclass',
        array(
          'methods' => array(
            'addmessage' => array(
              'path' => 'giftCardClass/{resourceId}/addMessage',
              'httpMethod' => 'POST',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'giftCardClass/{resourceId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'version' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'approvedOnly' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'insert' => array(
              'path' => 'giftCardClass',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'list' => array(
              'path' => 'giftCardClass',
              'httpMethod' => 'GET',
              'parameters' => array(
                'issuerId' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'token' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),'patch' => array(
              'path' => 'giftCardClass/{resourceId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'giftCardClass/{resourceId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->giftcardobject = new Google_Service_Walletobjects_Giftcardobject_Resource(
        $this,
        $this->serviceName,
        'giftcardobject',
        array(
          'methods' => array(
            'addmessage' => array(
              'path' => 'giftCardObject/{resourceId}/addMessage',
              'httpMethod' => 'POST',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'giftCardObject/{resourceId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'giftCardObject',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'list' => array(
              'path' => 'giftCardObject',
              'httpMethod' => 'GET',
              'parameters' => array(
                'classId' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'token' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),'patch' => array(
              'path' => 'giftCardObject/{resourceId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'giftCardObject/{resourceId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->loyaltyclass = new Google_Service_Walletobjects_Loyaltyclass_Resource(
        $this,
        $this->serviceName,
        'loyaltyclass',
        array(
          'methods' => array(
            'addmessage' => array(
              'path' => 'loyaltyClass/{resourceId}/addMessage',
              'httpMethod' => 'POST',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'loyaltyClass/{resourceId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'version' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'approvedOnly' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'insert' => array(
              'path' => 'loyaltyClass',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'list' => array(
              'path' => 'loyaltyClass',
              'httpMethod' => 'GET',
              'parameters' => array(
                'issuerId' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'token' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),'patch' => array(
              'path' => 'loyaltyClass/{resourceId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'loyaltyClass/{resourceId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->loyaltyobject = new Google_Service_Walletobjects_Loyaltyobject_Resource(
        $this,
        $this->serviceName,
        'loyaltyobject',
        array(
          'methods' => array(
            'addmessage' => array(
              'path' => 'loyaltyObject/{resourceId}/addMessage',
              'httpMethod' => 'POST',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'loyaltyObject/{resourceId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'loyaltyObject',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'list' => array(
              'path' => 'loyaltyObject',
              'httpMethod' => 'GET',
              'parameters' => array(
                'classId' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'token' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),'patch' => array(
              'path' => 'loyaltyObject/{resourceId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'loyaltyObject/{resourceId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->offerclass = new Google_Service_Walletobjects_Offerclass_Resource(
        $this,
        $this->serviceName,
        'offerclass',
        array(
          'methods' => array(
            'addmessage' => array(
              'path' => 'offerClass/{resourceId}/addMessage',
              'httpMethod' => 'POST',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'offerClass/{resourceId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'version' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'approvedOnly' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'insert' => array(
              'path' => 'offerClass',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'list' => array(
              'path' => 'offerClass',
              'httpMethod' => 'GET',
              'parameters' => array(
                'issuerId' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'token' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),'patch' => array(
              'path' => 'offerClass/{resourceId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'offerClass/{resourceId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->offerobject = new Google_Service_Walletobjects_Offerobject_Resource(
        $this,
        $this->serviceName,
        'offerobject',
        array(
          'methods' => array(
            'addmessage' => array(
              'path' => 'offerObject/{resourceId}/addMessage',
              'httpMethod' => 'POST',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'offerObject/{resourceId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'offerObject',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'list' => array(
              'path' => 'offerObject',
              'httpMethod' => 'GET',
              'parameters' => array(
                'classId' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'token' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),'patch' => array(
              'path' => 'offerObject/{resourceId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'offerObject/{resourceId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
  }
}


/**
 * The "boardingpassclass" collection of methods.
 * Typical usage is:
 *  <code>
 *   $walletobjectsService = new Google_Service_Walletobjects(...);
 *   $boardingpassclass = $walletobjectsService->boardingpassclass;
 *  </code>
 */
class Google_Service_Walletobjects_Boardingpassclass_Resource extends Google_Service_Resource
{

  /**
   * Adds a message to the boarding pass class referenced by the given class ID.
   * (boardingpassclass.addmessage)
   *
   * @param string $resourceId
   *
   * @param Google_BoardingPassClassAddMessageRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_BoardingPassClassAddMessageResponse
   */
  public function addmessage($resourceId, Google_Service_Walletobjects_BoardingPassClassAddMessageRequest $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('addmessage', array($params), "Google_Service_Walletobjects_BoardingPassClassAddMessageResponse");
  }
  /**
   * Returns the boarding pass class with the given class ID.
   * (boardingpassclass.get)
   *
   * @param string $resourceId
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string version
   * Identifies the version of the class to retrieve. The latest version of the class is returned if
    * this value is not specified.
   * @opt_param bool approvedOnly
   * Specifies latest class version with a reviewStatus of approved be returned. The approved_only
    * and version parameters cannot both be set.
   * @return Google_Service_Walletobjects_BoardingPassClass
   */
  public function get($resourceId, $optParams = array())
  {
    $params = array('resourceId' => $resourceId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Walletobjects_BoardingPassClass");
  }
  /**
   * Inserts a boarding pass class with the given ID and properties.
   * (boardingpassclass.insert)
   *
   * @param Google_BoardingPassClass $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_BoardingPassClass
   */
  public function insert(Google_Service_Walletobjects_BoardingPassClass $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Walletobjects_BoardingPassClass");
  }
  /**
   * Returns a list of all boarding pass classes for a given issuer ID.
   * (boardingpassclass.listBoardingpassclass)
   *
   * @param string $issuerId
   * The ID of the issuer authorized to list classes. No type field, as that is implicate in the type
    * part of the Uri.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string token
   * Used to get the next set of results if maxResults is specified, but more than maxResults classes
    * are available in a list. For example, if you have a list of 200 classes and you call list with
    * maxResults set to 20, list will return the first 20 classes and a token. Call list again with
    * maxResults set to 20 and the token to get the next 20 classes.
   * @opt_param int maxResults
   * Identifies the max number of results returned by a list. All results are returned if maxResults
    * isn't defined.
   * @return Google_Service_Walletobjects_BoardingPassClassListResponse
   */
  public function listBoardingpassclass($issuerId, $optParams = array())
  {
    $params = array('issuerId' => $issuerId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Walletobjects_BoardingPassClassListResponse");
  }
  /**
   * Updates the boarding pass class referenced by the given class ID. This method
   * supports patch semantics. (boardingpassclass.patch)
   *
   * @param string $resourceId
   *
   * @param Google_BoardingPassClass $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_BoardingPassClass
   */
  public function patch($resourceId, Google_Service_Walletobjects_BoardingPassClass $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Walletobjects_BoardingPassClass");
  }
  /**
   * Updates the boarding pass class referenced by the given class ID.
   * (boardingpassclass.update)
   *
   * @param string $resourceId
   *
   * @param Google_BoardingPassClass $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_BoardingPassClass
   */
  public function update($resourceId, Google_Service_Walletobjects_BoardingPassClass $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Walletobjects_BoardingPassClass");
  }
}

/**
 * The "boardingpassobject" collection of methods.
 * Typical usage is:
 *  <code>
 *   $walletobjectsService = new Google_Service_Walletobjects(...);
 *   $boardingpassobject = $walletobjectsService->boardingpassobject;
 *  </code>
 */
class Google_Service_Walletobjects_Boardingpassobject_Resource extends Google_Service_Resource
{

  /**
   * Adds a message to the boarding pass object referenced by the given object ID.
   * (boardingpassobject.addmessage)
   *
   * @param string $resourceId
   *
   * @param Google_BoardingPassObjectAddMessageRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_BoardingPassObjectAddMessageResponse
   */
  public function addmessage($resourceId, Google_Service_Walletobjects_BoardingPassObjectAddMessageRequest $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('addmessage', array($params), "Google_Service_Walletobjects_BoardingPassObjectAddMessageResponse");
  }
  /**
   * Returns the boarding pass object with the given object ID.
   * (boardingpassobject.get)
   *
   * @param string $resourceId
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_BoardingPassObject
   */
  public function get($resourceId, $optParams = array())
  {
    $params = array('resourceId' => $resourceId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Walletobjects_BoardingPassObject");
  }
  /**
   * Inserts a boarding pass object with the given ID and properties.
   * (boardingpassobject.insert)
   *
   * @param Google_BoardingPassObject $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_BoardingPassObject
   */
  public function insert(Google_Service_Walletobjects_BoardingPassObject $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Walletobjects_BoardingPassObject");
  }
  /**
   * Returns a list of all boarding pass objects for a given class ID.
   * (boardingpassobject.listBoardingpassobject)
   *
   * @param string $classId
   * The ID of the class whose objects will be listed.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string token
   * Used to get the next set of results if maxResults is specified, but more than maxResults objects
    * are available in a list. For example, if you have a list of 200 objects and you call list with
    * maxResults set to 20, list will return the first 20 objects and a token. Call list again with
    * maxResults set to 20 and the token to get the next 20 objects.
   * @opt_param int maxResults
   * Identifies the max number of results returned by a list. All results are returned if maxResults
    * isn't defined.
   * @return Google_Service_Walletobjects_BoardingPassObjectListResponse
   */
  public function listBoardingpassobject($classId, $optParams = array())
  {
    $params = array('classId' => $classId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Walletobjects_BoardingPassObjectListResponse");
  }
  /**
   * Updates the boarding pass object referenced by the given object ID. This
   * method supports patch semantics. (boardingpassobject.patch)
   *
   * @param string $resourceId
   *
   * @param Google_BoardingPassObject $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_BoardingPassObject
   */
  public function patch($resourceId, Google_Service_Walletobjects_BoardingPassObject $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Walletobjects_BoardingPassObject");
  }
  /**
   * Updates the boarding pass object referenced by the given object ID.
   * (boardingpassobject.update)
   *
   * @param string $resourceId
   *
   * @param Google_BoardingPassObject $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_BoardingPassObject
   */
  public function update($resourceId, Google_Service_Walletobjects_BoardingPassObject $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Walletobjects_BoardingPassObject");
  }
}

/**
 * The "genericclass" collection of methods.
 * Typical usage is:
 *  <code>
 *   $walletobjectsService = new Google_Service_Walletobjects(...);
 *   $genericclass = $walletobjectsService->genericclass;
 *  </code>
 */
class Google_Service_Walletobjects_Genericclass_Resource extends Google_Service_Resource
{

  /**
   * Adds a message to the generic class referenced by the given class ID.
   * (genericclass.addmessage)
   *
   * @param string $resourceId
   *
   * @param Google_GenericClassAddMessageRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_GenericClassAddMessageResponse
   */
  public function addmessage($resourceId, Google_Service_Walletobjects_GenericClassAddMessageRequest $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('addmessage', array($params), "Google_Service_Walletobjects_GenericClassAddMessageResponse");
  }
  /**
   * Returns the generic class with the given class ID. (genericclass.get)
   *
   * @param string $resourceId
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string version
   * Identifies the version of the class to retrieve. The latest version of the class is returned if
    * this value is not specified.
   * @opt_param bool approvedOnly
   * Specifies latest class version with a reviewStatus of approved be returned. The approved_only
    * and version parameters cannot both be set.
   * @return Google_Service_Walletobjects_GenericClass
   */
  public function get($resourceId, $optParams = array())
  {
    $params = array('resourceId' => $resourceId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Walletobjects_GenericClass");
  }
  /**
   * Inserts a generic class with the given ID and properties.
   * (genericclass.insert)
   *
   * @param Google_GenericClass $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_GenericClass
   */
  public function insert(Google_Service_Walletobjects_GenericClass $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Walletobjects_GenericClass");
  }
  /**
   * Returns a list of all generic classes for a given issuer ID.
   * (genericclass.listGenericclass)
   *
   * @param string $issuerId
   * The ID of the issuer authorized to list classes. No type field, as that is implicate in the type
    * part of the Uri.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string token
   * Used to get the next set of results if maxResults is specified, but more than maxResults classes
    * are available in a list. For example, if you have a list of 200 classes and you call list with
    * maxResults set to 20, list will return the first 20 classes and a token. Call list again with
    * maxResults set to 20 and the token to get the next 20 classes.
   * @opt_param int maxResults
   * Identifies the max number of results returned by a list. All results are returned if maxResults
    * isn't defined.
   * @return Google_Service_Walletobjects_GenericClassListResponse
   */
  public function listGenericclass($issuerId, $optParams = array())
  {
    $params = array('issuerId' => $issuerId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Walletobjects_GenericClassListResponse");
  }
  /**
   * Updates the generic class referenced by the given class ID. This method
   * supports patch semantics. (genericclass.patch)
   *
   * @param string $resourceId
   *
   * @param Google_GenericClass $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_GenericClass
   */
  public function patch($resourceId, Google_Service_Walletobjects_GenericClass $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Walletobjects_GenericClass");
  }
  /**
   * Updates the generic class referenced by the given class ID.
   * (genericclass.update)
   *
   * @param string $resourceId
   *
   * @param Google_GenericClass $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_GenericClass
   */
  public function update($resourceId, Google_Service_Walletobjects_GenericClass $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Walletobjects_GenericClass");
  }
}

/**
 * The "genericobject" collection of methods.
 * Typical usage is:
 *  <code>
 *   $walletobjectsService = new Google_Service_Walletobjects(...);
 *   $genericobject = $walletobjectsService->genericobject;
 *  </code>
 */
class Google_Service_Walletobjects_Genericobject_Resource extends Google_Service_Resource
{

  /**
   * Adds a message to the generic object referenced by the given object ID.
   * (genericobject.addmessage)
   *
   * @param string $resourceId
   *
   * @param Google_GenericObjectAddMessageRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_GenericObjectAddMessageResponse
   */
  public function addmessage($resourceId, Google_Service_Walletobjects_GenericObjectAddMessageRequest $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('addmessage', array($params), "Google_Service_Walletobjects_GenericObjectAddMessageResponse");
  }
  /**
   * Returns the generic object with the given object ID. (genericobject.get)
   *
   * @param string $resourceId
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_GenericObject
   */
  public function get($resourceId, $optParams = array())
  {
    $params = array('resourceId' => $resourceId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Walletobjects_GenericObject");
  }
  /**
   * Inserts a generic object with the given ID and properties.
   * (genericobject.insert)
   *
   * @param Google_GenericObject $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_GenericObject
   */
  public function insert(Google_Service_Walletobjects_GenericObject $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Walletobjects_GenericObject");
  }
  /**
   * Returns a list of all generic objects for a given class ID.
   * (genericobject.listGenericobject)
   *
   * @param string $classId
   * The ID of the class whose objects will be listed.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string token
   * Used to get the next set of results if maxResults is specified, but more than maxResults objects
    * are available in a list. For example, if you have a list of 200 objects and you call list with
    * maxResults set to 20, list will return the first 20 objects and a token. Call list again with
    * maxResults set to 20 and the token to get the next 20 objects.
   * @opt_param int maxResults
   * Identifies the max number of results returned by a list. All results are returned if maxResults
    * isn't defined.
   * @return Google_Service_Walletobjects_GenericObjectListResponse
   */
  public function listGenericobject($classId, $optParams = array())
  {
    $params = array('classId' => $classId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Walletobjects_GenericObjectListResponse");
  }
  /**
   * Updates the generic object referenced by the given object ID. This method
   * supports patch semantics. (genericobject.patch)
   *
   * @param string $resourceId
   *
   * @param Google_GenericObject $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_GenericObject
   */
  public function patch($resourceId, Google_Service_Walletobjects_GenericObject $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Walletobjects_GenericObject");
  }
  /**
   * Updates the generic object referenced by the given object ID.
   * (genericobject.update)
   *
   * @param string $resourceId
   *
   * @param Google_GenericObject $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_GenericObject
   */
  public function update($resourceId, Google_Service_Walletobjects_GenericObject $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Walletobjects_GenericObject");
  }
}

/**
 * The "giftcardclass" collection of methods.
 * Typical usage is:
 *  <code>
 *   $walletobjectsService = new Google_Service_Walletobjects(...);
 *   $giftcardclass = $walletobjectsService->giftcardclass;
 *  </code>
 */
class Google_Service_Walletobjects_Giftcardclass_Resource extends Google_Service_Resource
{

  /**
   * Adds a message to the gift card class referenced by the given class ID.
   * (giftcardclass.addmessage)
   *
   * @param string $resourceId
   *
   * @param Google_GiftCardClassAddMessageRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_GiftCardClassAddMessageResponse
   */
  public function addmessage($resourceId, Google_Service_Walletobjects_GiftCardClassAddMessageRequest $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('addmessage', array($params), "Google_Service_Walletobjects_GiftCardClassAddMessageResponse");
  }
  /**
   * Returns the gift card class with the given class ID. (giftcardclass.get)
   *
   * @param string $resourceId
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string version
   *
   * @opt_param bool approvedOnly
   *
   * @return Google_Service_Walletobjects_GiftCardClass
   */
  public function get($resourceId, $optParams = array())
  {
    $params = array('resourceId' => $resourceId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Walletobjects_GiftCardClass");
  }
  /**
   * Inserts a gift card class with the given ID and properties.
   * (giftcardclass.insert)
   *
   * @param Google_GiftCardClass $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_GiftCardClass
   */
  public function insert(Google_Service_Walletobjects_GiftCardClass $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Walletobjects_GiftCardClass");
  }
  /**
   * Returns a list of all gift card classes for a given issuer ID.
   * (giftcardclass.listGiftcardclass)
   *
   * @param string $issuerId
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string token
   *
   * @opt_param int maxResults
   *
   * @return Google_Service_Walletobjects_GiftCardClassListResponse
   */
  public function listGiftcardclass($issuerId, $optParams = array())
  {
    $params = array('issuerId' => $issuerId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Walletobjects_GiftCardClassListResponse");
  }
  /**
   * Updates the gift card class referenced by the given class ID. This method
   * supports patch semantics. (giftcardclass.patch)
   *
   * @param string $resourceId
   *
   * @param Google_GiftCardClass $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_GiftCardClass
   */
  public function patch($resourceId, Google_Service_Walletobjects_GiftCardClass $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Walletobjects_GiftCardClass");
  }
  /**
   * Updates the gift card class referenced by the given class ID.
   * (giftcardclass.update)
   *
   * @param string $resourceId
   *
   * @param Google_GiftCardClass $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_GiftCardClass
   */
  public function update($resourceId, Google_Service_Walletobjects_GiftCardClass $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Walletobjects_GiftCardClass");
  }
}

/**
 * The "giftcardobject" collection of methods.
 * Typical usage is:
 *  <code>
 *   $walletobjectsService = new Google_Service_Walletobjects(...);
 *   $giftcardobject = $walletobjectsService->giftcardobject;
 *  </code>
 */
class Google_Service_Walletobjects_Giftcardobject_Resource extends Google_Service_Resource
{

  /**
   * Adds a message to the gift card object referenced by the given object ID.
   * (giftcardobject.addmessage)
   *
   * @param string $resourceId
   *
   * @param Google_GiftCardObjectAddMessageRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_GiftCardObjectAddMessageResponse
   */
  public function addmessage($resourceId, Google_Service_Walletobjects_GiftCardObjectAddMessageRequest $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('addmessage', array($params), "Google_Service_Walletobjects_GiftCardObjectAddMessageResponse");
  }
  /**
   * Returns the gift card object with the given object ID. (giftcardobject.get)
   *
   * @param string $resourceId
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_GiftCardObject
   */
  public function get($resourceId, $optParams = array())
  {
    $params = array('resourceId' => $resourceId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Walletobjects_GiftCardObject");
  }
  /**
   * Inserts a gift card object with the given ID and properties.
   * (giftcardobject.insert)
   *
   * @param Google_GiftCardObject $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_GiftCardObject
   */
  public function insert(Google_Service_Walletobjects_GiftCardObject $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Walletobjects_GiftCardObject");
  }
  /**
   * Returns a list of all gift card objects for a given class ID.
   * (giftcardobject.listGiftcardobject)
   *
   * @param string $classId
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string token
   *
   * @opt_param int maxResults
   *
   * @return Google_Service_Walletobjects_GiftCardObjectListResponse
   */
  public function listGiftcardobject($classId, $optParams = array())
  {
    $params = array('classId' => $classId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Walletobjects_GiftCardObjectListResponse");
  }
  /**
   * Updates the gift card object referenced by the given object ID. This method
   * supports patch semantics. (giftcardobject.patch)
   *
   * @param string $resourceId
   *
   * @param Google_GiftCardObject $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_GiftCardObject
   */
  public function patch($resourceId, Google_Service_Walletobjects_GiftCardObject $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Walletobjects_GiftCardObject");
  }
  /**
   * Updates the gift card object referenced by the given object ID.
   * (giftcardobject.update)
   *
   * @param string $resourceId
   *
   * @param Google_GiftCardObject $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_GiftCardObject
   */
  public function update($resourceId, Google_Service_Walletobjects_GiftCardObject $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Walletobjects_GiftCardObject");
  }
}

/**
 * The "loyaltyclass" collection of methods.
 * Typical usage is:
 *  <code>
 *   $walletobjectsService = new Google_Service_Walletobjects(...);
 *   $loyaltyclass = $walletobjectsService->loyaltyclass;
 *  </code>
 */
class Google_Service_Walletobjects_Loyaltyclass_Resource extends Google_Service_Resource
{

  /**
   * Adds a message to the loyalty class referenced by the given class ID.
   * (loyaltyclass.addmessage)
   *
   * @param string $resourceId
   *
   * @param Google_LoyaltyClassAddMessageRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_LoyaltyClassAddMessageResponse
   */
  public function addmessage($resourceId, Google_Service_Walletobjects_LoyaltyClassAddMessageRequest $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('addmessage', array($params), "Google_Service_Walletobjects_LoyaltyClassAddMessageResponse");
  }
  /**
   * Returns the loyalty class with the given class ID. (loyaltyclass.get)
   *
   * @param string $resourceId
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string version
   * Identifies the version of the class to return. The latest version of the class is returned if
    * this value is not specified.
   * @opt_param bool approvedOnly
   * Returns the latest class version with a reviewStatus of approved. The approved_only and version
    * parameters cannot both be set.
   * @return Google_Service_Walletobjects_LoyaltyClass
   */
  public function get($resourceId, $optParams = array())
  {
    $params = array('resourceId' => $resourceId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Walletobjects_LoyaltyClass");
  }
  /**
   * Inserts a loyalty class with the given ID and properties.
   * (loyaltyclass.insert)
   *
   * @param Google_LoyaltyClass $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_LoyaltyClass
   */
  public function insert(Google_Service_Walletobjects_LoyaltyClass $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Walletobjects_LoyaltyClass");
  }
  /**
   * Returns a list of all loyalty classes for a given issuer ID.
   * (loyaltyclass.listLoyaltyclass)
   *
   * @param string $issuerId
   * The ID of the issuer authorized to list classes.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string token
   * Used to get the next set of results if maxResults is specified, but more than maxResults classes
    * are available in a list. For example, if you have a list of 200 classes and you call list with
    * maxResults set to 20, list will return the first 20 classes and a token. Call list again with
    * maxResults set to 20 and the token to get the next 20 classes.
   * @opt_param int maxResults
   * Identifies the max number of results returned by a list. All results are returned if maxResults
    * isn't defined.
   * @return Google_Service_Walletobjects_LoyaltyClassListResponse
   */
  public function listLoyaltyclass($issuerId, $optParams = array())
  {
    $params = array('issuerId' => $issuerId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Walletobjects_LoyaltyClassListResponse");
  }
  /**
   * Updates the loyalty class referenced by the given class ID. This method
   * supports patch semantics. (loyaltyclass.patch)
   *
   * @param string $resourceId
   *
   * @param Google_LoyaltyClass $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_LoyaltyClass
   */
  public function patch($resourceId, Google_Service_Walletobjects_LoyaltyClass $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Walletobjects_LoyaltyClass");
  }
  /**
   * Updates the loyalty class referenced by the given class ID.
   * (loyaltyclass.update)
   *
   * @param string $resourceId
   *
   * @param Google_LoyaltyClass $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_LoyaltyClass
   */
  public function update($resourceId, Google_Service_Walletobjects_LoyaltyClass $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Walletobjects_LoyaltyClass");
  }
}

/**
 * The "loyaltyobject" collection of methods.
 * Typical usage is:
 *  <code>
 *   $walletobjectsService = new Google_Service_Walletobjects(...);
 *   $loyaltyobject = $walletobjectsService->loyaltyobject;
 *  </code>
 */
class Google_Service_Walletobjects_Loyaltyobject_Resource extends Google_Service_Resource
{

  /**
   * Adds a message to the loyalty object referenced by the given object ID.
   * (loyaltyobject.addmessage)
   *
   * @param string $resourceId
   * Unique identifier for an object. Must be unique across all objects from an issuer. Should follow
    * the format .<identifier(chosen by you)>. Your unique identifier should only include alphanumeric
    * characters, '_' or '-'.
   * @param Google_LoyaltyObjectAddMessageRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_LoyaltyObjectAddMessageResponse
   */
  public function addmessage($resourceId, Google_Service_Walletobjects_LoyaltyObjectAddMessageRequest $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('addmessage', array($params), "Google_Service_Walletobjects_LoyaltyObjectAddMessageResponse");
  }
  /**
   * Returns the loyalty object with the given object ID. (loyaltyobject.get)
   *
   * @param string $resourceId
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_LoyaltyObject
   */
  public function get($resourceId, $optParams = array())
  {
    $params = array('resourceId' => $resourceId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Walletobjects_LoyaltyObject");
  }
  /**
   * Inserts a loyalty object with the given ID and properties.
   * (loyaltyobject.insert)
   *
   * @param Google_LoyaltyObject $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_LoyaltyObject
   */
  public function insert(Google_Service_Walletobjects_LoyaltyObject $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Walletobjects_LoyaltyObject");
  }
  /**
   * Returns a list of all loyalty objects for a given class ID.
   * (loyaltyobject.listLoyaltyobject)
   *
   * @param string $classId
   * The ID of the class whose objects will be listed.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string token
   * Used to get the next set of results if maxResults is specified, but more than maxResults objects
    * are available in a list. For example, if you have a list of 200 objects and you call list with
    * maxResults set to 20, list will return the first 20 objects and a token. Call list again with
    * maxResults set to 20 and the token to get the next 20 objects.
   * @opt_param int maxResults
   * Identifies the max number of results returned by a list. All results are returned if maxResults
    * isn't defined.
   * @return Google_Service_Walletobjects_LoyaltyObjectListResponse
   */
  public function listLoyaltyobject($classId, $optParams = array())
  {
    $params = array('classId' => $classId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Walletobjects_LoyaltyObjectListResponse");
  }
  /**
   * Updates the loyalty object referenced by the given object ID. This method
   * supports patch semantics. (loyaltyobject.patch)
   *
   * @param string $resourceId
   *
   * @param Google_LoyaltyObject $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_LoyaltyObject
   */
  public function patch($resourceId, Google_Service_Walletobjects_LoyaltyObject $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Walletobjects_LoyaltyObject");
  }
  /**
   * Updates the loyalty object referenced by the given object ID.
   * (loyaltyobject.update)
   *
   * @param string $resourceId
   *
   * @param Google_LoyaltyObject $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_LoyaltyObject
   */
  public function update($resourceId, Google_Service_Walletobjects_LoyaltyObject $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Walletobjects_LoyaltyObject");
  }
}

/**
 * The "offerclass" collection of methods.
 * Typical usage is:
 *  <code>
 *   $walletobjectsService = new Google_Service_Walletobjects(...);
 *   $offerclass = $walletobjectsService->offerclass;
 *  </code>
 */
class Google_Service_Walletobjects_Offerclass_Resource extends Google_Service_Resource
{

  /**
   * Adds a message to the offer class referenced by the given class ID.
   * (offerclass.addmessage)
   *
   * @param string $resourceId
   *
   * @param Google_OfferClassAddMessageRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_OfferClassAddMessageResponse
   */
  public function addmessage($resourceId, Google_Service_Walletobjects_OfferClassAddMessageRequest $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('addmessage', array($params), "Google_Service_Walletobjects_OfferClassAddMessageResponse");
  }
  /**
   * Returns the offer class with the given class ID. (offerclass.get)
   *
   * @param string $resourceId
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string version
   * Identifies the version of the class to retrieve. The latest version of the class is returned if
    * this value is not specified.
   * @opt_param bool approvedOnly
   * Specifies latest class version with a reviewStatus of approved be returned. The approved_only
    * and version parameters cannot both be set.
   * @return Google_Service_Walletobjects_OfferClass
   */
  public function get($resourceId, $optParams = array())
  {
    $params = array('resourceId' => $resourceId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Walletobjects_OfferClass");
  }
  /**
   * Inserts an offer class with the given ID and properties. (offerclass.insert)
   *
   * @param Google_OfferClass $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_OfferClass
   */
  public function insert(Google_Service_Walletobjects_OfferClass $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Walletobjects_OfferClass");
  }
  /**
   * Returns a list of all offer classes for a given issuer ID.
   * (offerclass.listOfferclass)
   *
   * @param string $issuerId
   * The ID of the issuer authorized to list classes. No type field, as that is implicate in the type
    * part of the Uri.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string token
   * Used to get the next set of results if maxResults is specified, but more than maxResults classes
    * are available in a list. For example, if you have a list of 200 classes and you call list with
    * maxResults set to 20, list will return the first 20 classes and a token. Call list again with
    * maxResults set to 20 and the token to get the next 20 classes.
   * @opt_param int maxResults
   * Identifies the max number of results returned by a list. All results are returned if maxResults
    * isn't defined.
   * @return Google_Service_Walletobjects_OfferClassListResponse
   */
  public function listOfferclass($issuerId, $optParams = array())
  {
    $params = array('issuerId' => $issuerId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Walletobjects_OfferClassListResponse");
  }
  /**
   * Updates the offer class referenced by the given class ID. This method
   * supports patch semantics. (offerclass.patch)
   *
   * @param string $resourceId
   *
   * @param Google_OfferClass $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_OfferClass
   */
  public function patch($resourceId, Google_Service_Walletobjects_OfferClass $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Walletobjects_OfferClass");
  }
  /**
   * Updates the offer class referenced by the given class ID. (offerclass.update)
   *
   * @param string $resourceId
   *
   * @param Google_OfferClass $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_OfferClass
   */
  public function update($resourceId, Google_Service_Walletobjects_OfferClass $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Walletobjects_OfferClass");
  }
}

/**
 * The "offerobject" collection of methods.
 * Typical usage is:
 *  <code>
 *   $walletobjectsService = new Google_Service_Walletobjects(...);
 *   $offerobject = $walletobjectsService->offerobject;
 *  </code>
 */
class Google_Service_Walletobjects_Offerobject_Resource extends Google_Service_Resource
{

  /**
   * Adds a message to the offer object referenced by the given object ID.
   * (offerobject.addmessage)
   *
   * @param string $resourceId
   *
   * @param Google_OfferObjectAddMessageRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_OfferObjectAddMessageResponse
   */
  public function addmessage($resourceId, Google_Service_Walletobjects_OfferObjectAddMessageRequest $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('addmessage', array($params), "Google_Service_Walletobjects_OfferObjectAddMessageResponse");
  }
  /**
   * Returns the offer object with the given object ID. (offerobject.get)
   *
   * @param string $resourceId
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_OfferObject
   */
  public function get($resourceId, $optParams = array())
  {
    $params = array('resourceId' => $resourceId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Walletobjects_OfferObject");
  }
  /**
   * Inserts an offer object with the given ID and properties.
   * (offerobject.insert)
   *
   * @param Google_OfferObject $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_OfferObject
   */
  public function insert(Google_Service_Walletobjects_OfferObject $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Walletobjects_OfferObject");
  }
  /**
   * Returns a list of all offer objects for a given class ID.
   * (offerobject.listOfferobject)
   *
   * @param string $classId
   * The ID of the class whose objects will be listed.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string token
   * Used to get the next set of results if maxResults is specified, but more than maxResults objects
    * are available in a list. For example, if you have a list of 200 objects and you call list with
    * maxResults set to 20, list will return the first 20 objects and a token. Call list again with
    * maxResults set to 20 and the token to get the next 20 objects.
   * @opt_param int maxResults
   * Identifies the max number of results returned by a list. All results are returned if maxResults
    * isn't defined.
   * @return Google_Service_Walletobjects_OfferObjectListResponse
   */
  public function listOfferobject($classId, $optParams = array())
  {
    $params = array('classId' => $classId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Walletobjects_OfferObjectListResponse");
  }
  /**
   * Updates the offer object referenced by the given object ID. This method
   * supports patch semantics. (offerobject.patch)
   *
   * @param string $resourceId
   *
   * @param Google_OfferObject $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_OfferObject
   */
  public function patch($resourceId, Google_Service_Walletobjects_OfferObject $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Walletobjects_OfferObject");
  }
  /**
   * Updates the offer object referenced by the given object ID.
   * (offerobject.update)
   *
   * @param string $resourceId
   *
   * @param Google_OfferObject $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_OfferObject
   */
  public function update($resourceId, Google_Service_Walletobjects_OfferObject $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Walletobjects_OfferObject");
  }
}




class Google_Service_Walletobjects_Barcode extends Google_Model
{
  public $alternateText;
  public $kind;
  public $label;
  public $type;
  public $value;

  public function setAlternateText($alternateText)
  {
    $this->alternateText = $alternateText;
  }

  public function getAlternateText()
  {
    return $this->alternateText;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setLabel($label)
  {
    $this->label = $label;
  }

  public function getLabel()
  {
    return $this->label;
  }

  public function setType($type)
  {
    $this->type = $type;
  }

  public function getType()
  {
    return $this->type;
  }

  public function setValue($value)
  {
    $this->value = $value;
  }

  public function getValue()
  {
    return $this->value;
  }
}

class Google_Service_Walletobjects_BoardingPassClass extends Google_Collection
{
  public $aircraftType;
  public $allowMultipleUsersPerObject;
  public $arrivalAirportCode;
  public $arrivalCityName;
  protected $arrivalDateTimeActualType = 'Google_Service_Walletobjects_DateTime';
  protected $arrivalDateTimeActualDataType = '';
  protected $arrivalDateTimeScheduledType = 'Google_Service_Walletobjects_DateTime';
  protected $arrivalDateTimeScheduledDataType = '';
  public $arrivalGate;
  public $arrivalTerminal;
  public $arrivalTimeZone;
  protected $boardingDateTimeType = 'Google_Service_Walletobjects_DateTime';
  protected $boardingDateTimeDataType = '';
  public $carrierCode;
  protected $carrierLogoImageType = 'Google_Service_Walletobjects_Image';
  protected $carrierLogoImageDataType = '';
  public $carrierName;
  public $departureAirportCode;
  public $departureCityName;
  protected $departureDateTimeActualType = 'Google_Service_Walletobjects_DateTime';
  protected $departureDateTimeActualDataType = '';
  protected $departureDateTimeScheduledType = 'Google_Service_Walletobjects_DateTime';
  protected $departureDateTimeScheduledDataType = '';
  public $departureGate;
  public $departureTerminal;
  public $departureTimeZone;
  public $flightNumber;
  protected $homepageUriType = 'Google_Service_Walletobjects_Uri';
  protected $homepageUriDataType = '';
  public $id;
  protected $imageModulesDataType = 'Google_Service_Walletobjects_ImageModuleData';
  protected $imageModulesDataDataType = 'array';
  protected $infoModuleDataType = 'Google_Service_Walletobjects_InfoModuleData';
  protected $infoModuleDataDataType = '';
  protected $issuerDataType = 'Google_Service_Walletobjects_TypedValue';
  protected $issuerDataDataType = '';
  public $issuerName;
  protected $linksModuleDataType = 'Google_Service_Walletobjects_LinksModuleData';
  protected $linksModuleDataDataType = '';
  protected $locationsType = 'Google_Service_Walletobjects_LatLongPoint';
  protected $locationsDataType = 'array';
  protected $messagesType = 'Google_Service_Walletobjects_WalletObjectMessage';
  protected $messagesDataType = 'array';
  public $onboardServices;
  public $operatingCarrierCode;
  public $operatingCarrierName;
  public $operatingFlightNumber;
  protected $renderSpecsType = 'Google_Service_Walletobjects_RenderSpec';
  protected $renderSpecsDataType = 'array';
  protected $reviewType = 'Google_Service_Walletobjects_CommonWalletObjectClassReview';
  protected $reviewDataType = '';
  public $reviewStatus;
  public $statusCode;
  protected $textModulesDataType = 'Google_Service_Walletobjects_TextModuleData';
  protected $textModulesDataDataType = 'array';
  public $version;

  public function setAircraftType($aircraftType)
  {
    $this->aircraftType = $aircraftType;
  }

  public function getAircraftType()
  {
    return $this->aircraftType;
  }

  public function setAllowMultipleUsersPerObject($allowMultipleUsersPerObject)
  {
    $this->allowMultipleUsersPerObject = $allowMultipleUsersPerObject;
  }

  public function getAllowMultipleUsersPerObject()
  {
    return $this->allowMultipleUsersPerObject;
  }

  public function setArrivalAirportCode($arrivalAirportCode)
  {
    $this->arrivalAirportCode = $arrivalAirportCode;
  }

  public function getArrivalAirportCode()
  {
    return $this->arrivalAirportCode;
  }

  public function setArrivalCityName($arrivalCityName)
  {
    $this->arrivalCityName = $arrivalCityName;
  }

  public function getArrivalCityName()
  {
    return $this->arrivalCityName;
  }

  public function setArrivalDateTimeActual(Google_Service_Walletobjects_DateTime $arrivalDateTimeActual)
  {
    $this->arrivalDateTimeActual = $arrivalDateTimeActual;
  }

  public function getArrivalDateTimeActual()
  {
    return $this->arrivalDateTimeActual;
  }

  public function setArrivalDateTimeScheduled(Google_Service_Walletobjects_DateTime $arrivalDateTimeScheduled)
  {
    $this->arrivalDateTimeScheduled = $arrivalDateTimeScheduled;
  }

  public function getArrivalDateTimeScheduled()
  {
    return $this->arrivalDateTimeScheduled;
  }

  public function setArrivalGate($arrivalGate)
  {
    $this->arrivalGate = $arrivalGate;
  }

  public function getArrivalGate()
  {
    return $this->arrivalGate;
  }

  public function setArrivalTerminal($arrivalTerminal)
  {
    $this->arrivalTerminal = $arrivalTerminal;
  }

  public function getArrivalTerminal()
  {
    return $this->arrivalTerminal;
  }

  public function setArrivalTimeZone($arrivalTimeZone)
  {
    $this->arrivalTimeZone = $arrivalTimeZone;
  }

  public function getArrivalTimeZone()
  {
    return $this->arrivalTimeZone;
  }

  public function setBoardingDateTime(Google_Service_Walletobjects_DateTime $boardingDateTime)
  {
    $this->boardingDateTime = $boardingDateTime;
  }

  public function getBoardingDateTime()
  {
    return $this->boardingDateTime;
  }

  public function setCarrierCode($carrierCode)
  {
    $this->carrierCode = $carrierCode;
  }

  public function getCarrierCode()
  {
    return $this->carrierCode;
  }

  public function setCarrierLogoImage(Google_Service_Walletobjects_Image $carrierLogoImage)
  {
    $this->carrierLogoImage = $carrierLogoImage;
  }

  public function getCarrierLogoImage()
  {
    return $this->carrierLogoImage;
  }

  public function setCarrierName($carrierName)
  {
    $this->carrierName = $carrierName;
  }

  public function getCarrierName()
  {
    return $this->carrierName;
  }

  public function setDepartureAirportCode($departureAirportCode)
  {
    $this->departureAirportCode = $departureAirportCode;
  }

  public function getDepartureAirportCode()
  {
    return $this->departureAirportCode;
  }

  public function setDepartureCityName($departureCityName)
  {
    $this->departureCityName = $departureCityName;
  }

  public function getDepartureCityName()
  {
    return $this->departureCityName;
  }

  public function setDepartureDateTimeActual(Google_Service_Walletobjects_DateTime $departureDateTimeActual)
  {
    $this->departureDateTimeActual = $departureDateTimeActual;
  }

  public function getDepartureDateTimeActual()
  {
    return $this->departureDateTimeActual;
  }

  public function setDepartureDateTimeScheduled(Google_Service_Walletobjects_DateTime $departureDateTimeScheduled)
  {
    $this->departureDateTimeScheduled = $departureDateTimeScheduled;
  }

  public function getDepartureDateTimeScheduled()
  {
    return $this->departureDateTimeScheduled;
  }

  public function setDepartureGate($departureGate)
  {
    $this->departureGate = $departureGate;
  }

  public function getDepartureGate()
  {
    return $this->departureGate;
  }

  public function setDepartureTerminal($departureTerminal)
  {
    $this->departureTerminal = $departureTerminal;
  }

  public function getDepartureTerminal()
  {
    return $this->departureTerminal;
  }

  public function setDepartureTimeZone($departureTimeZone)
  {
    $this->departureTimeZone = $departureTimeZone;
  }

  public function getDepartureTimeZone()
  {
    return $this->departureTimeZone;
  }

  public function setFlightNumber($flightNumber)
  {
    $this->flightNumber = $flightNumber;
  }

  public function getFlightNumber()
  {
    return $this->flightNumber;
  }

  public function setHomepageUri(Google_Service_Walletobjects_Uri $homepageUri)
  {
    $this->homepageUri = $homepageUri;
  }

  public function getHomepageUri()
  {
    return $this->homepageUri;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setImageModulesData($imageModulesData)
  {
    $this->imageModulesData = $imageModulesData;
  }

  public function getImageModulesData()
  {
    return $this->imageModulesData;
  }

  public function setInfoModuleData(Google_Service_Walletobjects_InfoModuleData $infoModuleData)
  {
    $this->infoModuleData = $infoModuleData;
  }

  public function getInfoModuleData()
  {
    return $this->infoModuleData;
  }

  public function setIssuerData(Google_Service_Walletobjects_TypedValue $issuerData)
  {
    $this->issuerData = $issuerData;
  }

  public function getIssuerData()
  {
    return $this->issuerData;
  }

  public function setIssuerName($issuerName)
  {
    $this->issuerName = $issuerName;
  }

  public function getIssuerName()
  {
    return $this->issuerName;
  }

  public function setLinksModuleData(Google_Service_Walletobjects_LinksModuleData $linksModuleData)
  {
    $this->linksModuleData = $linksModuleData;
  }

  public function getLinksModuleData()
  {
    return $this->linksModuleData;
  }

  public function setLocations($locations)
  {
    $this->locations = $locations;
  }

  public function getLocations()
  {
    return $this->locations;
  }

  public function setMessages($messages)
  {
    $this->messages = $messages;
  }

  public function getMessages()
  {
    return $this->messages;
  }

  public function setOnboardServices($onboardServices)
  {
    $this->onboardServices = $onboardServices;
  }

  public function getOnboardServices()
  {
    return $this->onboardServices;
  }

  public function setOperatingCarrierCode($operatingCarrierCode)
  {
    $this->operatingCarrierCode = $operatingCarrierCode;
  }

  public function getOperatingCarrierCode()
  {
    return $this->operatingCarrierCode;
  }

  public function setOperatingCarrierName($operatingCarrierName)
  {
    $this->operatingCarrierName = $operatingCarrierName;
  }

  public function getOperatingCarrierName()
  {
    return $this->operatingCarrierName;
  }

  public function setOperatingFlightNumber($operatingFlightNumber)
  {
    $this->operatingFlightNumber = $operatingFlightNumber;
  }

  public function getOperatingFlightNumber()
  {
    return $this->operatingFlightNumber;
  }

  public function setRenderSpecs($renderSpecs)
  {
    $this->renderSpecs = $renderSpecs;
  }

  public function getRenderSpecs()
  {
    return $this->renderSpecs;
  }

  public function setReview(Google_Service_Walletobjects_CommonWalletObjectClassReview $review)
  {
    $this->review = $review;
  }

  public function getReview()
  {
    return $this->review;
  }

  public function setReviewStatus($reviewStatus)
  {
    $this->reviewStatus = $reviewStatus;
  }

  public function getReviewStatus()
  {
    return $this->reviewStatus;
  }

  public function setStatusCode($statusCode)
  {
    $this->statusCode = $statusCode;
  }

  public function getStatusCode()
  {
    return $this->statusCode;
  }

  public function setTextModulesData($textModulesData)
  {
    $this->textModulesData = $textModulesData;
  }

  public function getTextModulesData()
  {
    return $this->textModulesData;
  }

  public function setVersion($version)
  {
    $this->version = $version;
  }

  public function getVersion()
  {
    return $this->version;
  }
}

class Google_Service_Walletobjects_BoardingPassClassAddMessageRequest extends Google_Model
{
  protected $messageType = 'Google_Service_Walletobjects_WalletObjectMessage';
  protected $messageDataType = '';
  public $reviewStatus;

  public function setMessage(Google_Service_Walletobjects_WalletObjectMessage $message)
  {
    $this->message = $message;
  }

  public function getMessage()
  {
    return $this->message;
  }

  public function setReviewStatus($reviewStatus)
  {
    $this->reviewStatus = $reviewStatus;
  }

  public function getReviewStatus()
  {
    return $this->reviewStatus;
  }
}

class Google_Service_Walletobjects_BoardingPassClassAddMessageResponse extends Google_Model
{
  protected $resourceType = 'Google_Service_Walletobjects_BoardingPassClass';
  protected $resourceDataType = '';

  public function setResource(Google_Service_Walletobjects_BoardingPassClass $resource)
  {
    $this->resource = $resource;
  }

  public function getResource()
  {
    return $this->resource;
  }
}

class Google_Service_Walletobjects_BoardingPassClassGetRequest extends Google_Model
{
  protected $resultMaskType = 'Google_Service_Walletobjects_BoardingPassClassMask';
  protected $resultMaskDataType = '';

  public function setResultMask(Google_Service_Walletobjects_BoardingPassClassMask $resultMask)
  {
    $this->resultMask = $resultMask;
  }

  public function getResultMask()
  {
    return $this->resultMask;
  }
}

class Google_Service_Walletobjects_BoardingPassClassListRequest extends Google_Model
{
  protected $resultMaskType = 'Google_Service_Walletobjects_BoardingPassClassMask';
  protected $resultMaskDataType = '';

  public function setResultMask(Google_Service_Walletobjects_BoardingPassClassMask $resultMask)
  {
    $this->resultMask = $resultMask;
  }

  public function getResultMask()
  {
    return $this->resultMask;
  }
}

class Google_Service_Walletobjects_BoardingPassClassListResponse extends Google_Collection
{
  protected $paginationType = 'Google_Service_Walletobjects_Pagination';
  protected $paginationDataType = '';
  protected $resourcesType = 'Google_Service_Walletobjects_BoardingPassClass';
  protected $resourcesDataType = 'array';

  public function setPagination(Google_Service_Walletobjects_Pagination $pagination)
  {
    $this->pagination = $pagination;
  }

  public function getPagination()
  {
    return $this->pagination;
  }

  public function setResources($resources)
  {
    $this->resources = $resources;
  }

  public function getResources()
  {
    return $this->resources;
  }
}

class Google_Service_Walletobjects_BoardingPassClassMask extends Google_Collection
{
  protected $fieldsType = 'Google_Service_Walletobjects_FieldMask';
  protected $fieldsDataType = 'array';
  public $projection;

  public function setFields($fields)
  {
    $this->fields = $fields;
  }

  public function getFields()
  {
    return $this->fields;
  }

  public function setProjection($projection)
  {
    $this->projection = $projection;
  }

  public function getProjection()
  {
    return $this->projection;
  }
}

class Google_Service_Walletobjects_BoardingPassObject extends Google_Collection
{
  protected $barcodeType = 'Google_Service_Walletobjects_Barcode';
  protected $barcodeDataType = '';
  public $boardingZone;
  public $classId;
  protected $classReferenceType = 'Google_Service_Walletobjects_BoardingPassClass';
  protected $classReferenceDataType = '';
  public $electronicTicket;
  public $freqFlierAccountId;
  public $freqFlierProgramName;
  public $freqFlierTierLevel;
  public $hasUsers;
  public $id;
  protected $imageModulesDataType = 'Google_Service_Walletobjects_ImageModuleData';
  protected $imageModulesDataDataType = 'array';
  protected $infoModuleDataType = 'Google_Service_Walletobjects_InfoModuleData';
  protected $infoModuleDataDataType = '';
  protected $issuerDataType = 'Google_Service_Walletobjects_TypedValue';
  protected $issuerDataDataType = '';
  protected $linksModuleDataType = 'Google_Service_Walletobjects_LinksModuleData';
  protected $linksModuleDataDataType = '';
  protected $locationsType = 'Google_Service_Walletobjects_LatLongPoint';
  protected $locationsDataType = 'array';
  protected $messagesType = 'Google_Service_Walletobjects_WalletObjectMessage';
  protected $messagesDataType = 'array';
  protected $passengerNameType = 'Google_Service_Walletobjects_PassengerName';
  protected $passengerNameDataType = '';
  public $passengerStatus;
  protected $precheckLogoType = 'Google_Service_Walletobjects_Image';
  protected $precheckLogoDataType = '';
  public $recordLocator;
  public $seat;
  public $seatClass;
  public $seatDescriptions;
  public $securitySelecteeStatus;
  public $sequenceNumber;
  public $specialServiceCodes;
  public $state;
  protected $textModulesDataType = 'Google_Service_Walletobjects_TextModuleData';
  protected $textModulesDataDataType = 'array';
  public $ticketNumber;
  protected $validTimeIntervalType = 'Google_Service_Walletobjects_TimeInterval';
  protected $validTimeIntervalDataType = '';
  public $version;

  public function setBarcode(Google_Service_Walletobjects_Barcode $barcode)
  {
    $this->barcode = $barcode;
  }

  public function getBarcode()
  {
    return $this->barcode;
  }

  public function setBoardingZone($boardingZone)
  {
    $this->boardingZone = $boardingZone;
  }

  public function getBoardingZone()
  {
    return $this->boardingZone;
  }

  public function setClassId($classId)
  {
    $this->classId = $classId;
  }

  public function getClassId()
  {
    return $this->classId;
  }

  public function setClassReference(Google_Service_Walletobjects_BoardingPassClass $classReference)
  {
    $this->classReference = $classReference;
  }

  public function getClassReference()
  {
    return $this->classReference;
  }

  public function setElectronicTicket($electronicTicket)
  {
    $this->electronicTicket = $electronicTicket;
  }

  public function getElectronicTicket()
  {
    return $this->electronicTicket;
  }

  public function setFreqFlierAccountId($freqFlierAccountId)
  {
    $this->freqFlierAccountId = $freqFlierAccountId;
  }

  public function getFreqFlierAccountId()
  {
    return $this->freqFlierAccountId;
  }

  public function setFreqFlierProgramName($freqFlierProgramName)
  {
    $this->freqFlierProgramName = $freqFlierProgramName;
  }

  public function getFreqFlierProgramName()
  {
    return $this->freqFlierProgramName;
  }

  public function setFreqFlierTierLevel($freqFlierTierLevel)
  {
    $this->freqFlierTierLevel = $freqFlierTierLevel;
  }

  public function getFreqFlierTierLevel()
  {
    return $this->freqFlierTierLevel;
  }

  public function setHasUsers($hasUsers)
  {
    $this->hasUsers = $hasUsers;
  }

  public function getHasUsers()
  {
    return $this->hasUsers;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setImageModulesData($imageModulesData)
  {
    $this->imageModulesData = $imageModulesData;
  }

  public function getImageModulesData()
  {
    return $this->imageModulesData;
  }

  public function setInfoModuleData(Google_Service_Walletobjects_InfoModuleData $infoModuleData)
  {
    $this->infoModuleData = $infoModuleData;
  }

  public function getInfoModuleData()
  {
    return $this->infoModuleData;
  }

  public function setIssuerData(Google_Service_Walletobjects_TypedValue $issuerData)
  {
    $this->issuerData = $issuerData;
  }

  public function getIssuerData()
  {
    return $this->issuerData;
  }

  public function setLinksModuleData(Google_Service_Walletobjects_LinksModuleData $linksModuleData)
  {
    $this->linksModuleData = $linksModuleData;
  }

  public function getLinksModuleData()
  {
    return $this->linksModuleData;
  }

  public function setLocations($locations)
  {
    $this->locations = $locations;
  }

  public function getLocations()
  {
    return $this->locations;
  }

  public function setMessages($messages)
  {
    $this->messages = $messages;
  }

  public function getMessages()
  {
    return $this->messages;
  }

  public function setPassengerName(Google_Service_Walletobjects_PassengerName $passengerName)
  {
    $this->passengerName = $passengerName;
  }

  public function getPassengerName()
  {
    return $this->passengerName;
  }

  public function setPassengerStatus($passengerStatus)
  {
    $this->passengerStatus = $passengerStatus;
  }

  public function getPassengerStatus()
  {
    return $this->passengerStatus;
  }

  public function setPrecheckLogo(Google_Service_Walletobjects_Image $precheckLogo)
  {
    $this->precheckLogo = $precheckLogo;
  }

  public function getPrecheckLogo()
  {
    return $this->precheckLogo;
  }

  public function setRecordLocator($recordLocator)
  {
    $this->recordLocator = $recordLocator;
  }

  public function getRecordLocator()
  {
    return $this->recordLocator;
  }

  public function setSeat($seat)
  {
    $this->seat = $seat;
  }

  public function getSeat()
  {
    return $this->seat;
  }

  public function setSeatClass($seatClass)
  {
    $this->seatClass = $seatClass;
  }

  public function getSeatClass()
  {
    return $this->seatClass;
  }

  public function setSeatDescriptions($seatDescriptions)
  {
    $this->seatDescriptions = $seatDescriptions;
  }

  public function getSeatDescriptions()
  {
    return $this->seatDescriptions;
  }

  public function setSecuritySelecteeStatus($securitySelecteeStatus)
  {
    $this->securitySelecteeStatus = $securitySelecteeStatus;
  }

  public function getSecuritySelecteeStatus()
  {
    return $this->securitySelecteeStatus;
  }

  public function setSequenceNumber($sequenceNumber)
  {
    $this->sequenceNumber = $sequenceNumber;
  }

  public function getSequenceNumber()
  {
    return $this->sequenceNumber;
  }

  public function setSpecialServiceCodes($specialServiceCodes)
  {
    $this->specialServiceCodes = $specialServiceCodes;
  }

  public function getSpecialServiceCodes()
  {
    return $this->specialServiceCodes;
  }

  public function setState($state)
  {
    $this->state = $state;
  }

  public function getState()
  {
    return $this->state;
  }

  public function setTextModulesData($textModulesData)
  {
    $this->textModulesData = $textModulesData;
  }

  public function getTextModulesData()
  {
    return $this->textModulesData;
  }

  public function setTicketNumber($ticketNumber)
  {
    $this->ticketNumber = $ticketNumber;
  }

  public function getTicketNumber()
  {
    return $this->ticketNumber;
  }

  public function setValidTimeInterval(Google_Service_Walletobjects_TimeInterval $validTimeInterval)
  {
    $this->validTimeInterval = $validTimeInterval;
  }

  public function getValidTimeInterval()
  {
    return $this->validTimeInterval;
  }

  public function setVersion($version)
  {
    $this->version = $version;
  }

  public function getVersion()
  {
    return $this->version;
  }
}

class Google_Service_Walletobjects_BoardingPassObjectAddMessageRequest extends Google_Model
{
  protected $messageType = 'Google_Service_Walletobjects_WalletObjectMessage';
  protected $messageDataType = '';

  public function setMessage(Google_Service_Walletobjects_WalletObjectMessage $message)
  {
    $this->message = $message;
  }

  public function getMessage()
  {
    return $this->message;
  }
}

class Google_Service_Walletobjects_BoardingPassObjectAddMessageResponse extends Google_Model
{
  protected $resourceType = 'Google_Service_Walletobjects_BoardingPassObject';
  protected $resourceDataType = '';

  public function setResource(Google_Service_Walletobjects_BoardingPassObject $resource)
  {
    $this->resource = $resource;
  }

  public function getResource()
  {
    return $this->resource;
  }
}

class Google_Service_Walletobjects_BoardingPassObjectGetRequest extends Google_Model
{
  protected $resultMaskType = 'Google_Service_Walletobjects_BoardingPassObjectMask';
  protected $resultMaskDataType = '';

  public function setResultMask(Google_Service_Walletobjects_BoardingPassObjectMask $resultMask)
  {
    $this->resultMask = $resultMask;
  }

  public function getResultMask()
  {
    return $this->resultMask;
  }
}

class Google_Service_Walletobjects_BoardingPassObjectListRequest extends Google_Model
{
  protected $resultMaskType = 'Google_Service_Walletobjects_BoardingPassObjectMask';
  protected $resultMaskDataType = '';

  public function setResultMask(Google_Service_Walletobjects_BoardingPassObjectMask $resultMask)
  {
    $this->resultMask = $resultMask;
  }

  public function getResultMask()
  {
    return $this->resultMask;
  }
}

class Google_Service_Walletobjects_BoardingPassObjectListResponse extends Google_Collection
{
  protected $paginationType = 'Google_Service_Walletobjects_Pagination';
  protected $paginationDataType = '';
  protected $resourcesType = 'Google_Service_Walletobjects_BoardingPassObject';
  protected $resourcesDataType = 'array';

  public function setPagination(Google_Service_Walletobjects_Pagination $pagination)
  {
    $this->pagination = $pagination;
  }

  public function getPagination()
  {
    return $this->pagination;
  }

  public function setResources($resources)
  {
    $this->resources = $resources;
  }

  public function getResources()
  {
    return $this->resources;
  }
}

class Google_Service_Walletobjects_BoardingPassObjectMask extends Google_Collection
{
  protected $fieldsType = 'Google_Service_Walletobjects_FieldMask';
  protected $fieldsDataType = 'array';
  public $projection;

  public function setFields($fields)
  {
    $this->fields = $fields;
  }

  public function getFields()
  {
    return $this->fields;
  }

  public function setProjection($projection)
  {
    $this->projection = $projection;
  }

  public function getProjection()
  {
    return $this->projection;
  }
}

class Google_Service_Walletobjects_CommonWalletObjectClassReview extends Google_Model
{
  public $comments;

  public function setComments($comments)
  {
    $this->comments = $comments;
  }

  public function getComments()
  {
    return $this->comments;
  }
}

class Google_Service_Walletobjects_DateTime extends Google_Model
{
  public $date;

  public function setDate($date)
  {
    $this->date = $date;
  }

  public function getDate()
  {
    return $this->date;
  }
}

class Google_Service_Walletobjects_FieldMask extends Google_Collection
{
  protected $fieldsType = 'Google_Service_Walletobjects_FieldMask';
  protected $fieldsDataType = 'array';
  public $id;

  public function setFields($fields)
  {
    $this->fields = $fields;
  }

  public function getFields()
  {
    return $this->fields;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }
}

class Google_Service_Walletobjects_GenericClass extends Google_Collection
{
  public $allowMultipleUsersPerObject;
  public $description;
  protected $homepageUriType = 'Google_Service_Walletobjects_Uri';
  protected $homepageUriDataType = '';
  public $id;
  protected $imageModulesDataType = 'Google_Service_Walletobjects_ImageModuleData';
  protected $imageModulesDataDataType = 'array';
  protected $infoModuleDataType = 'Google_Service_Walletobjects_InfoModuleData';
  protected $infoModuleDataDataType = '';
  protected $issuerDataType = 'Google_Service_Walletobjects_TypedValue';
  protected $issuerDataDataType = '';
  public $issuerName;
  public $kind;
  protected $linksModuleDataType = 'Google_Service_Walletobjects_LinksModuleData';
  protected $linksModuleDataDataType = '';
  protected $locationsType = 'Google_Service_Walletobjects_LatLongPoint';
  protected $locationsDataType = 'array';
  protected $messagesType = 'Google_Service_Walletobjects_WalletObjectMessage';
  protected $messagesDataType = 'array';
  protected $renderSpecsType = 'Google_Service_Walletobjects_RenderSpec';
  protected $renderSpecsDataType = 'array';
  protected $reviewType = 'Google_Service_Walletobjects_CommonWalletObjectClassReview';
  protected $reviewDataType = '';
  public $reviewStatus;
  protected $textModulesDataType = 'Google_Service_Walletobjects_TextModuleData';
  protected $textModulesDataDataType = 'array';
  public $title;
  protected $titleImageType = 'Google_Service_Walletobjects_Image';
  protected $titleImageDataType = '';
  public $version;

  public function setAllowMultipleUsersPerObject($allowMultipleUsersPerObject)
  {
    $this->allowMultipleUsersPerObject = $allowMultipleUsersPerObject;
  }

  public function getAllowMultipleUsersPerObject()
  {
    return $this->allowMultipleUsersPerObject;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setHomepageUri(Google_Service_Walletobjects_Uri $homepageUri)
  {
    $this->homepageUri = $homepageUri;
  }

  public function getHomepageUri()
  {
    return $this->homepageUri;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setImageModulesData($imageModulesData)
  {
    $this->imageModulesData = $imageModulesData;
  }

  public function getImageModulesData()
  {
    return $this->imageModulesData;
  }

  public function setInfoModuleData(Google_Service_Walletobjects_InfoModuleData $infoModuleData)
  {
    $this->infoModuleData = $infoModuleData;
  }

  public function getInfoModuleData()
  {
    return $this->infoModuleData;
  }

  public function setIssuerData(Google_Service_Walletobjects_TypedValue $issuerData)
  {
    $this->issuerData = $issuerData;
  }

  public function getIssuerData()
  {
    return $this->issuerData;
  }

  public function setIssuerName($issuerName)
  {
    $this->issuerName = $issuerName;
  }

  public function getIssuerName()
  {
    return $this->issuerName;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setLinksModuleData(Google_Service_Walletobjects_LinksModuleData $linksModuleData)
  {
    $this->linksModuleData = $linksModuleData;
  }

  public function getLinksModuleData()
  {
    return $this->linksModuleData;
  }

  public function setLocations($locations)
  {
    $this->locations = $locations;
  }

  public function getLocations()
  {
    return $this->locations;
  }

  public function setMessages($messages)
  {
    $this->messages = $messages;
  }

  public function getMessages()
  {
    return $this->messages;
  }

  public function setRenderSpecs($renderSpecs)
  {
    $this->renderSpecs = $renderSpecs;
  }

  public function getRenderSpecs()
  {
    return $this->renderSpecs;
  }

  public function setReview(Google_Service_Walletobjects_CommonWalletObjectClassReview $review)
  {
    $this->review = $review;
  }

  public function getReview()
  {
    return $this->review;
  }

  public function setReviewStatus($reviewStatus)
  {
    $this->reviewStatus = $reviewStatus;
  }

  public function getReviewStatus()
  {
    return $this->reviewStatus;
  }

  public function setTextModulesData($textModulesData)
  {
    $this->textModulesData = $textModulesData;
  }

  public function getTextModulesData()
  {
    return $this->textModulesData;
  }

  public function setTitle($title)
  {
    $this->title = $title;
  }

  public function getTitle()
  {
    return $this->title;
  }

  public function setTitleImage(Google_Service_Walletobjects_Image $titleImage)
  {
    $this->titleImage = $titleImage;
  }

  public function getTitleImage()
  {
    return $this->titleImage;
  }

  public function setVersion($version)
  {
    $this->version = $version;
  }

  public function getVersion()
  {
    return $this->version;
  }
}

class Google_Service_Walletobjects_GenericClassAddMessageRequest extends Google_Model
{
  protected $messageType = 'Google_Service_Walletobjects_WalletObjectMessage';
  protected $messageDataType = '';
  public $reviewStatus;

  public function setMessage(Google_Service_Walletobjects_WalletObjectMessage $message)
  {
    $this->message = $message;
  }

  public function getMessage()
  {
    return $this->message;
  }

  public function setReviewStatus($reviewStatus)
  {
    $this->reviewStatus = $reviewStatus;
  }

  public function getReviewStatus()
  {
    return $this->reviewStatus;
  }
}

class Google_Service_Walletobjects_GenericClassAddMessageResponse extends Google_Model
{
  protected $resourceType = 'Google_Service_Walletobjects_GenericClass';
  protected $resourceDataType = '';

  public function setResource(Google_Service_Walletobjects_GenericClass $resource)
  {
    $this->resource = $resource;
  }

  public function getResource()
  {
    return $this->resource;
  }
}

class Google_Service_Walletobjects_GenericClassGetRequest extends Google_Model
{
  protected $resultMaskType = 'Google_Service_Walletobjects_GenericClassMask';
  protected $resultMaskDataType = '';

  public function setResultMask(Google_Service_Walletobjects_GenericClassMask $resultMask)
  {
    $this->resultMask = $resultMask;
  }

  public function getResultMask()
  {
    return $this->resultMask;
  }
}

class Google_Service_Walletobjects_GenericClassListRequest extends Google_Model
{
  protected $resultMaskType = 'Google_Service_Walletobjects_GenericClassMask';
  protected $resultMaskDataType = '';

  public function setResultMask(Google_Service_Walletobjects_GenericClassMask $resultMask)
  {
    $this->resultMask = $resultMask;
  }

  public function getResultMask()
  {
    return $this->resultMask;
  }
}

class Google_Service_Walletobjects_GenericClassListResponse extends Google_Collection
{
  protected $paginationType = 'Google_Service_Walletobjects_Pagination';
  protected $paginationDataType = '';
  protected $resourcesType = 'Google_Service_Walletobjects_GenericClass';
  protected $resourcesDataType = 'array';

  public function setPagination(Google_Service_Walletobjects_Pagination $pagination)
  {
    $this->pagination = $pagination;
  }

  public function getPagination()
  {
    return $this->pagination;
  }

  public function setResources($resources)
  {
    $this->resources = $resources;
  }

  public function getResources()
  {
    return $this->resources;
  }
}

class Google_Service_Walletobjects_GenericClassMask extends Google_Collection
{
  protected $fieldsType = 'Google_Service_Walletobjects_FieldMask';
  protected $fieldsDataType = 'array';
  public $projection;

  public function setFields($fields)
  {
    $this->fields = $fields;
  }

  public function getFields()
  {
    return $this->fields;
  }

  public function setProjection($projection)
  {
    $this->projection = $projection;
  }

  public function getProjection()
  {
    return $this->projection;
  }
}

class Google_Service_Walletobjects_GenericObject extends Google_Collection
{
  protected $barcodeType = 'Google_Service_Walletobjects_Barcode';
  protected $barcodeDataType = '';
  public $classId;
  protected $classReferenceType = 'Google_Service_Walletobjects_GenericClass';
  protected $classReferenceDataType = '';
  public $hasUsers;
  public $id;
  protected $imageModulesDataType = 'Google_Service_Walletobjects_ImageModuleData';
  protected $imageModulesDataDataType = 'array';
  protected $infoModuleDataType = 'Google_Service_Walletobjects_InfoModuleData';
  protected $infoModuleDataDataType = '';
  protected $issuerDataType = 'Google_Service_Walletobjects_TypedValue';
  protected $issuerDataDataType = '';
  public $kind;
  protected $linksModuleDataType = 'Google_Service_Walletobjects_LinksModuleData';
  protected $linksModuleDataDataType = '';
  protected $locationsType = 'Google_Service_Walletobjects_LatLongPoint';
  protected $locationsDataType = 'array';
  protected $messagesType = 'Google_Service_Walletobjects_WalletObjectMessage';
  protected $messagesDataType = 'array';
  public $state;
  protected $textModulesDataType = 'Google_Service_Walletobjects_TextModuleData';
  protected $textModulesDataDataType = 'array';
  protected $validTimeIntervalType = 'Google_Service_Walletobjects_TimeInterval';
  protected $validTimeIntervalDataType = '';
  public $version;

  public function setBarcode(Google_Service_Walletobjects_Barcode $barcode)
  {
    $this->barcode = $barcode;
  }

  public function getBarcode()
  {
    return $this->barcode;
  }

  public function setClassId($classId)
  {
    $this->classId = $classId;
  }

  public function getClassId()
  {
    return $this->classId;
  }

  public function setClassReference(Google_Service_Walletobjects_GenericClass $classReference)
  {
    $this->classReference = $classReference;
  }

  public function getClassReference()
  {
    return $this->classReference;
  }

  public function setHasUsers($hasUsers)
  {
    $this->hasUsers = $hasUsers;
  }

  public function getHasUsers()
  {
    return $this->hasUsers;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setImageModulesData($imageModulesData)
  {
    $this->imageModulesData = $imageModulesData;
  }

  public function getImageModulesData()
  {
    return $this->imageModulesData;
  }

  public function setInfoModuleData(Google_Service_Walletobjects_InfoModuleData $infoModuleData)
  {
    $this->infoModuleData = $infoModuleData;
  }

  public function getInfoModuleData()
  {
    return $this->infoModuleData;
  }

  public function setIssuerData(Google_Service_Walletobjects_TypedValue $issuerData)
  {
    $this->issuerData = $issuerData;
  }

  public function getIssuerData()
  {
    return $this->issuerData;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setLinksModuleData(Google_Service_Walletobjects_LinksModuleData $linksModuleData)
  {
    $this->linksModuleData = $linksModuleData;
  }

  public function getLinksModuleData()
  {
    return $this->linksModuleData;
  }

  public function setLocations($locations)
  {
    $this->locations = $locations;
  }

  public function getLocations()
  {
    return $this->locations;
  }

  public function setMessages($messages)
  {
    $this->messages = $messages;
  }

  public function getMessages()
  {
    return $this->messages;
  }

  public function setState($state)
  {
    $this->state = $state;
  }

  public function getState()
  {
    return $this->state;
  }

  public function setTextModulesData($textModulesData)
  {
    $this->textModulesData = $textModulesData;
  }

  public function getTextModulesData()
  {
    return $this->textModulesData;
  }

  public function setValidTimeInterval(Google_Service_Walletobjects_TimeInterval $validTimeInterval)
  {
    $this->validTimeInterval = $validTimeInterval;
  }

  public function getValidTimeInterval()
  {
    return $this->validTimeInterval;
  }

  public function setVersion($version)
  {
    $this->version = $version;
  }

  public function getVersion()
  {
    return $this->version;
  }
}

class Google_Service_Walletobjects_GenericObjectAddMessageRequest extends Google_Model
{
  protected $messageType = 'Google_Service_Walletobjects_WalletObjectMessage';
  protected $messageDataType = '';

  public function setMessage(Google_Service_Walletobjects_WalletObjectMessage $message)
  {
    $this->message = $message;
  }

  public function getMessage()
  {
    return $this->message;
  }
}

class Google_Service_Walletobjects_GenericObjectAddMessageResponse extends Google_Model
{
  protected $resourceType = 'Google_Service_Walletobjects_GenericObject';
  protected $resourceDataType = '';

  public function setResource(Google_Service_Walletobjects_GenericObject $resource)
  {
    $this->resource = $resource;
  }

  public function getResource()
  {
    return $this->resource;
  }
}

class Google_Service_Walletobjects_GenericObjectGetRequest extends Google_Model
{
  protected $resultMaskType = 'Google_Service_Walletobjects_GenericObjectMask';
  protected $resultMaskDataType = '';

  public function setResultMask(Google_Service_Walletobjects_GenericObjectMask $resultMask)
  {
    $this->resultMask = $resultMask;
  }

  public function getResultMask()
  {
    return $this->resultMask;
  }
}

class Google_Service_Walletobjects_GenericObjectListRequest extends Google_Model
{
  protected $resultMaskType = 'Google_Service_Walletobjects_GenericObjectMask';
  protected $resultMaskDataType = '';

  public function setResultMask(Google_Service_Walletobjects_GenericObjectMask $resultMask)
  {
    $this->resultMask = $resultMask;
  }

  public function getResultMask()
  {
    return $this->resultMask;
  }
}

class Google_Service_Walletobjects_GenericObjectListResponse extends Google_Collection
{
  protected $paginationType = 'Google_Service_Walletobjects_Pagination';
  protected $paginationDataType = '';
  protected $resourcesType = 'Google_Service_Walletobjects_GenericObject';
  protected $resourcesDataType = 'array';

  public function setPagination(Google_Service_Walletobjects_Pagination $pagination)
  {
    $this->pagination = $pagination;
  }

  public function getPagination()
  {
    return $this->pagination;
  }

  public function setResources($resources)
  {
    $this->resources = $resources;
  }

  public function getResources()
  {
    return $this->resources;
  }
}

class Google_Service_Walletobjects_GenericObjectMask extends Google_Collection
{
  protected $fieldsType = 'Google_Service_Walletobjects_FieldMask';
  protected $fieldsDataType = 'array';
  public $projection;

  public function setFields($fields)
  {
    $this->fields = $fields;
  }

  public function getFields()
  {
    return $this->fields;
  }

  public function setProjection($projection)
  {
    $this->projection = $projection;
  }

  public function getProjection()
  {
    return $this->projection;
  }
}

class Google_Service_Walletobjects_GiftCardClass extends Google_Collection
{
  public $allowBarcodeRedemption;
  public $allowMultipleUsersPerObject;
  public $cardNumberLabel;
  public $consentToBalanceInquiry;
  public $eventNumberLabel;
  protected $generatedBarcodePartsType = 'Google_Service_Walletobjects_GiftCardClassGeneratedBarcodePart';
  protected $generatedBarcodePartsDataType = 'array';
  public $generatedBarcodeType;
  protected $homepageUriType = 'Google_Service_Walletobjects_Uri';
  protected $homepageUriDataType = '';
  public $id;
  protected $imageModulesDataType = 'Google_Service_Walletobjects_ImageModuleData';
  protected $imageModulesDataDataType = 'array';
  protected $infoModuleDataType = 'Google_Service_Walletobjects_InfoModuleData';
  protected $infoModuleDataDataType = '';
  protected $issuerDataType = 'Google_Service_Walletobjects_TypedValue';
  protected $issuerDataDataType = '';
  public $issuerName;
  public $kind;
  protected $linksModuleDataType = 'Google_Service_Walletobjects_LinksModuleData';
  protected $linksModuleDataDataType = '';
  protected $locationsType = 'Google_Service_Walletobjects_LatLongPoint';
  protected $locationsDataType = 'array';
  public $merchantName;
  protected $messagesType = 'Google_Service_Walletobjects_WalletObjectMessage';
  protected $messagesDataType = 'array';
  public $pinLabel;
  public $plasticCardRequiredForRedemption;
  public $productLineId;
  protected $programLogoType = 'Google_Service_Walletobjects_Image';
  protected $programLogoDataType = '';
  protected $renderSpecsType = 'Google_Service_Walletobjects_RenderSpec';
  protected $renderSpecsDataType = 'array';
  protected $reviewType = 'Google_Service_Walletobjects_CommonWalletObjectClassReview';
  protected $reviewDataType = '';
  public $reviewStatus;
  public $supportedCapabilitys;
  protected $textModulesDataType = 'Google_Service_Walletobjects_TextModuleData';
  protected $textModulesDataDataType = 'array';
  public $version;

  public function setAllowBarcodeRedemption($allowBarcodeRedemption)
  {
    $this->allowBarcodeRedemption = $allowBarcodeRedemption;
  }

  public function getAllowBarcodeRedemption()
  {
    return $this->allowBarcodeRedemption;
  }

  public function setAllowMultipleUsersPerObject($allowMultipleUsersPerObject)
  {
    $this->allowMultipleUsersPerObject = $allowMultipleUsersPerObject;
  }

  public function getAllowMultipleUsersPerObject()
  {
    return $this->allowMultipleUsersPerObject;
  }

  public function setCardNumberLabel($cardNumberLabel)
  {
    $this->cardNumberLabel = $cardNumberLabel;
  }

  public function getCardNumberLabel()
  {
    return $this->cardNumberLabel;
  }

  public function setConsentToBalanceInquiry($consentToBalanceInquiry)
  {
    $this->consentToBalanceInquiry = $consentToBalanceInquiry;
  }

  public function getConsentToBalanceInquiry()
  {
    return $this->consentToBalanceInquiry;
  }

  public function setEventNumberLabel($eventNumberLabel)
  {
    $this->eventNumberLabel = $eventNumberLabel;
  }

  public function getEventNumberLabel()
  {
    return $this->eventNumberLabel;
  }

  public function setGeneratedBarcodeParts($generatedBarcodeParts)
  {
    $this->generatedBarcodeParts = $generatedBarcodeParts;
  }

  public function getGeneratedBarcodeParts()
  {
    return $this->generatedBarcodeParts;
  }

  public function setGeneratedBarcodeType($generatedBarcodeType)
  {
    $this->generatedBarcodeType = $generatedBarcodeType;
  }

  public function getGeneratedBarcodeType()
  {
    return $this->generatedBarcodeType;
  }

  public function setHomepageUri(Google_Service_Walletobjects_Uri $homepageUri)
  {
    $this->homepageUri = $homepageUri;
  }

  public function getHomepageUri()
  {
    return $this->homepageUri;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setImageModulesData($imageModulesData)
  {
    $this->imageModulesData = $imageModulesData;
  }

  public function getImageModulesData()
  {
    return $this->imageModulesData;
  }

  public function setInfoModuleData(Google_Service_Walletobjects_InfoModuleData $infoModuleData)
  {
    $this->infoModuleData = $infoModuleData;
  }

  public function getInfoModuleData()
  {
    return $this->infoModuleData;
  }

  public function setIssuerData(Google_Service_Walletobjects_TypedValue $issuerData)
  {
    $this->issuerData = $issuerData;
  }

  public function getIssuerData()
  {
    return $this->issuerData;
  }

  public function setIssuerName($issuerName)
  {
    $this->issuerName = $issuerName;
  }

  public function getIssuerName()
  {
    return $this->issuerName;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setLinksModuleData(Google_Service_Walletobjects_LinksModuleData $linksModuleData)
  {
    $this->linksModuleData = $linksModuleData;
  }

  public function getLinksModuleData()
  {
    return $this->linksModuleData;
  }

  public function setLocations($locations)
  {
    $this->locations = $locations;
  }

  public function getLocations()
  {
    return $this->locations;
  }

  public function setMerchantName($merchantName)
  {
    $this->merchantName = $merchantName;
  }

  public function getMerchantName()
  {
    return $this->merchantName;
  }

  public function setMessages($messages)
  {
    $this->messages = $messages;
  }

  public function getMessages()
  {
    return $this->messages;
  }

  public function setPinLabel($pinLabel)
  {
    $this->pinLabel = $pinLabel;
  }

  public function getPinLabel()
  {
    return $this->pinLabel;
  }

  public function setPlasticCardRequiredForRedemption($plasticCardRequiredForRedemption)
  {
    $this->plasticCardRequiredForRedemption = $plasticCardRequiredForRedemption;
  }

  public function getPlasticCardRequiredForRedemption()
  {
    return $this->plasticCardRequiredForRedemption;
  }

  public function setProductLineId($productLineId)
  {
    $this->productLineId = $productLineId;
  }

  public function getProductLineId()
  {
    return $this->productLineId;
  }

  public function setProgramLogo(Google_Service_Walletobjects_Image $programLogo)
  {
    $this->programLogo = $programLogo;
  }

  public function getProgramLogo()
  {
    return $this->programLogo;
  }

  public function setRenderSpecs($renderSpecs)
  {
    $this->renderSpecs = $renderSpecs;
  }

  public function getRenderSpecs()
  {
    return $this->renderSpecs;
  }

  public function setReview(Google_Service_Walletobjects_CommonWalletObjectClassReview $review)
  {
    $this->review = $review;
  }

  public function getReview()
  {
    return $this->review;
  }

  public function setReviewStatus($reviewStatus)
  {
    $this->reviewStatus = $reviewStatus;
  }

  public function getReviewStatus()
  {
    return $this->reviewStatus;
  }

  public function setSupportedCapabilitys($supportedCapabilitys)
  {
    $this->supportedCapabilitys = $supportedCapabilitys;
  }

  public function getSupportedCapabilitys()
  {
    return $this->supportedCapabilitys;
  }

  public function setTextModulesData($textModulesData)
  {
    $this->textModulesData = $textModulesData;
  }

  public function getTextModulesData()
  {
    return $this->textModulesData;
  }

  public function setVersion($version)
  {
    $this->version = $version;
  }

  public function getVersion()
  {
    return $this->version;
  }
}

class Google_Service_Walletobjects_GiftCardClassAddMessageRequest extends Google_Model
{
  protected $messageType = 'Google_Service_Walletobjects_WalletObjectMessage';
  protected $messageDataType = '';
  public $reviewStatus;

  public function setMessage(Google_Service_Walletobjects_WalletObjectMessage $message)
  {
    $this->message = $message;
  }

  public function getMessage()
  {
    return $this->message;
  }

  public function setReviewStatus($reviewStatus)
  {
    $this->reviewStatus = $reviewStatus;
  }

  public function getReviewStatus()
  {
    return $this->reviewStatus;
  }
}

class Google_Service_Walletobjects_GiftCardClassAddMessageResponse extends Google_Model
{
  protected $resourceType = 'Google_Service_Walletobjects_GiftCardClass';
  protected $resourceDataType = '';

  public function setResource(Google_Service_Walletobjects_GiftCardClass $resource)
  {
    $this->resource = $resource;
  }

  public function getResource()
  {
    return $this->resource;
  }
}

class Google_Service_Walletobjects_GiftCardClassGeneratedBarcodePart extends Google_Model
{
  public $field;

  public function setField($field)
  {
    $this->field = $field;
  }

  public function getField()
  {
    return $this->field;
  }
}

class Google_Service_Walletobjects_GiftCardClassGetRequest extends Google_Model
{
  protected $resultMaskType = 'Google_Service_Walletobjects_GiftCardClassMask';
  protected $resultMaskDataType = '';

  public function setResultMask(Google_Service_Walletobjects_GiftCardClassMask $resultMask)
  {
    $this->resultMask = $resultMask;
  }

  public function getResultMask()
  {
    return $this->resultMask;
  }
}

class Google_Service_Walletobjects_GiftCardClassListRequest extends Google_Model
{
  protected $resultMaskType = 'Google_Service_Walletobjects_GiftCardClassMask';
  protected $resultMaskDataType = '';

  public function setResultMask(Google_Service_Walletobjects_GiftCardClassMask $resultMask)
  {
    $this->resultMask = $resultMask;
  }

  public function getResultMask()
  {
    return $this->resultMask;
  }
}

class Google_Service_Walletobjects_GiftCardClassListResponse extends Google_Collection
{
  protected $paginationType = 'Google_Service_Walletobjects_Pagination';
  protected $paginationDataType = '';
  protected $resourcesType = 'Google_Service_Walletobjects_GiftCardClass';
  protected $resourcesDataType = 'array';

  public function setPagination(Google_Service_Walletobjects_Pagination $pagination)
  {
    $this->pagination = $pagination;
  }

  public function getPagination()
  {
    return $this->pagination;
  }

  public function setResources($resources)
  {
    $this->resources = $resources;
  }

  public function getResources()
  {
    return $this->resources;
  }
}

class Google_Service_Walletobjects_GiftCardClassMask extends Google_Collection
{
  protected $fieldsType = 'Google_Service_Walletobjects_FieldMask';
  protected $fieldsDataType = 'array';
  public $projection;

  public function setFields($fields)
  {
    $this->fields = $fields;
  }

  public function getFields()
  {
    return $this->fields;
  }

  public function setProjection($projection)
  {
    $this->projection = $projection;
  }

  public function getProjection()
  {
    return $this->projection;
  }
}

class Google_Service_Walletobjects_GiftCardObject extends Google_Collection
{
  protected $balanceType = 'Google_Service_Walletobjects_Money';
  protected $balanceDataType = '';
  protected $balanceUpdateTimeType = 'Google_Service_Walletobjects_DateTime';
  protected $balanceUpdateTimeDataType = '';
  protected $barcodeType = 'Google_Service_Walletobjects_Barcode';
  protected $barcodeDataType = '';
  public $cardIdentifier;
  public $cardNumber;
  public $classId;
  protected $classReferenceType = 'Google_Service_Walletobjects_GiftCardClass';
  protected $classReferenceDataType = '';
  public $eventNumber;
  public $hasUsers;
  public $id;
  protected $imageModulesDataType = 'Google_Service_Walletobjects_ImageModuleData';
  protected $imageModulesDataDataType = 'array';
  protected $infoModuleDataType = 'Google_Service_Walletobjects_InfoModuleData';
  protected $infoModuleDataDataType = '';
  protected $issuerDataType = 'Google_Service_Walletobjects_TypedValue';
  protected $issuerDataDataType = '';
  public $kind;
  protected $linksModuleDataType = 'Google_Service_Walletobjects_LinksModuleData';
  protected $linksModuleDataDataType = '';
  protected $locationsType = 'Google_Service_Walletobjects_LatLongPoint';
  protected $locationsDataType = 'array';
  protected $messagesType = 'Google_Service_Walletobjects_WalletObjectMessage';
  protected $messagesDataType = 'array';
  public $pin;
  public $state;
  protected $textModulesDataType = 'Google_Service_Walletobjects_TextModuleData';
  protected $textModulesDataDataType = 'array';
  protected $validTimeIntervalType = 'Google_Service_Walletobjects_TimeInterval';
  protected $validTimeIntervalDataType = '';
  public $version;

  public function setBalance(Google_Service_Walletobjects_Money $balance)
  {
    $this->balance = $balance;
  }

  public function getBalance()
  {
    return $this->balance;
  }

  public function setBalanceUpdateTime(Google_Service_Walletobjects_DateTime $balanceUpdateTime)
  {
    $this->balanceUpdateTime = $balanceUpdateTime;
  }

  public function getBalanceUpdateTime()
  {
    return $this->balanceUpdateTime;
  }

  public function setBarcode(Google_Service_Walletobjects_Barcode $barcode)
  {
    $this->barcode = $barcode;
  }

  public function getBarcode()
  {
    return $this->barcode;
  }

  public function setCardIdentifier($cardIdentifier)
  {
    $this->cardIdentifier = $cardIdentifier;
  }

  public function getCardIdentifier()
  {
    return $this->cardIdentifier;
  }

  public function setCardNumber($cardNumber)
  {
    $this->cardNumber = $cardNumber;
  }

  public function getCardNumber()
  {
    return $this->cardNumber;
  }

  public function setClassId($classId)
  {
    $this->classId = $classId;
  }

  public function getClassId()
  {
    return $this->classId;
  }

  public function setClassReference(Google_Service_Walletobjects_GiftCardClass $classReference)
  {
    $this->classReference = $classReference;
  }

  public function getClassReference()
  {
    return $this->classReference;
  }

  public function setEventNumber($eventNumber)
  {
    $this->eventNumber = $eventNumber;
  }

  public function getEventNumber()
  {
    return $this->eventNumber;
  }

  public function setHasUsers($hasUsers)
  {
    $this->hasUsers = $hasUsers;
  }

  public function getHasUsers()
  {
    return $this->hasUsers;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setImageModulesData($imageModulesData)
  {
    $this->imageModulesData = $imageModulesData;
  }

  public function getImageModulesData()
  {
    return $this->imageModulesData;
  }

  public function setInfoModuleData(Google_Service_Walletobjects_InfoModuleData $infoModuleData)
  {
    $this->infoModuleData = $infoModuleData;
  }

  public function getInfoModuleData()
  {
    return $this->infoModuleData;
  }

  public function setIssuerData(Google_Service_Walletobjects_TypedValue $issuerData)
  {
    $this->issuerData = $issuerData;
  }

  public function getIssuerData()
  {
    return $this->issuerData;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setLinksModuleData(Google_Service_Walletobjects_LinksModuleData $linksModuleData)
  {
    $this->linksModuleData = $linksModuleData;
  }

  public function getLinksModuleData()
  {
    return $this->linksModuleData;
  }

  public function setLocations($locations)
  {
    $this->locations = $locations;
  }

  public function getLocations()
  {
    return $this->locations;
  }

  public function setMessages($messages)
  {
    $this->messages = $messages;
  }

  public function getMessages()
  {
    return $this->messages;
  }

  public function setPin($pin)
  {
    $this->pin = $pin;
  }

  public function getPin()
  {
    return $this->pin;
  }

  public function setState($state)
  {
    $this->state = $state;
  }

  public function getState()
  {
    return $this->state;
  }

  public function setTextModulesData($textModulesData)
  {
    $this->textModulesData = $textModulesData;
  }

  public function getTextModulesData()
  {
    return $this->textModulesData;
  }

  public function setValidTimeInterval(Google_Service_Walletobjects_TimeInterval $validTimeInterval)
  {
    $this->validTimeInterval = $validTimeInterval;
  }

  public function getValidTimeInterval()
  {
    return $this->validTimeInterval;
  }

  public function setVersion($version)
  {
    $this->version = $version;
  }

  public function getVersion()
  {
    return $this->version;
  }
}

class Google_Service_Walletobjects_GiftCardObjectAddMessageRequest extends Google_Model
{
  protected $messageType = 'Google_Service_Walletobjects_WalletObjectMessage';
  protected $messageDataType = '';

  public function setMessage(Google_Service_Walletobjects_WalletObjectMessage $message)
  {
    $this->message = $message;
  }

  public function getMessage()
  {
    return $this->message;
  }
}

class Google_Service_Walletobjects_GiftCardObjectAddMessageResponse extends Google_Model
{
  protected $resourceType = 'Google_Service_Walletobjects_GiftCardObject';
  protected $resourceDataType = '';

  public function setResource(Google_Service_Walletobjects_GiftCardObject $resource)
  {
    $this->resource = $resource;
  }

  public function getResource()
  {
    return $this->resource;
  }
}

class Google_Service_Walletobjects_GiftCardObjectGetRequest extends Google_Model
{
  protected $resultMaskType = 'Google_Service_Walletobjects_GiftCardObjectMask';
  protected $resultMaskDataType = '';

  public function setResultMask(Google_Service_Walletobjects_GiftCardObjectMask $resultMask)
  {
    $this->resultMask = $resultMask;
  }

  public function getResultMask()
  {
    return $this->resultMask;
  }
}

class Google_Service_Walletobjects_GiftCardObjectListRequest extends Google_Model
{
  protected $resultMaskType = 'Google_Service_Walletobjects_GiftCardObjectMask';
  protected $resultMaskDataType = '';

  public function setResultMask(Google_Service_Walletobjects_GiftCardObjectMask $resultMask)
  {
    $this->resultMask = $resultMask;
  }

  public function getResultMask()
  {
    return $this->resultMask;
  }
}

class Google_Service_Walletobjects_GiftCardObjectListResponse extends Google_Collection
{
  protected $paginationType = 'Google_Service_Walletobjects_Pagination';
  protected $paginationDataType = '';
  protected $resourcesType = 'Google_Service_Walletobjects_GiftCardObject';
  protected $resourcesDataType = 'array';

  public function setPagination(Google_Service_Walletobjects_Pagination $pagination)
  {
    $this->pagination = $pagination;
  }

  public function getPagination()
  {
    return $this->pagination;
  }

  public function setResources($resources)
  {
    $this->resources = $resources;
  }

  public function getResources()
  {
    return $this->resources;
  }
}

class Google_Service_Walletobjects_GiftCardObjectMask extends Google_Collection
{
  protected $fieldsType = 'Google_Service_Walletobjects_FieldMask';
  protected $fieldsDataType = 'array';
  public $projection;

  public function setFields($fields)
  {
    $this->fields = $fields;
  }

  public function getFields()
  {
    return $this->fields;
  }

  public function setProjection($projection)
  {
    $this->projection = $projection;
  }

  public function getProjection()
  {
    return $this->projection;
  }
}

class Google_Service_Walletobjects_IconBody extends Google_Collection
{
  public $bodys;
  public $icon;

  public function setBodys($bodys)
  {
    $this->bodys = $bodys;
  }

  public function getBodys()
  {
    return $this->bodys;
  }

  public function setIcon($icon)
  {
    $this->icon = $icon;
  }

  public function getIcon()
  {
    return $this->icon;
  }
}

class Google_Service_Walletobjects_Image extends Google_Model
{
  public $kind;
  protected $sourceUriType = 'Google_Service_Walletobjects_Uri';
  protected $sourceUriDataType = '';

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setSourceUri(Google_Service_Walletobjects_Uri $sourceUri)
  {
    $this->sourceUri = $sourceUri;
  }

  public function getSourceUri()
  {
    return $this->sourceUri;
  }
}

class Google_Service_Walletobjects_ImageModuleData extends Google_Model
{
  protected $mainImageType = 'Google_Service_Walletobjects_Image';
  protected $mainImageDataType = '';

  public function setMainImage(Google_Service_Walletobjects_Image $mainImage)
  {
    $this->mainImage = $mainImage;
  }

  public function getMainImage()
  {
    return $this->mainImage;
  }
}

class Google_Service_Walletobjects_InfoModuleData extends Google_Collection
{
  public $hexBackgroundColor;
  public $hexFontColor;
  protected $labelValueRowsType = 'Google_Service_Walletobjects_LabelValueRow';
  protected $labelValueRowsDataType = 'array';
  public $showLastUpdateTime;

  public function setHexBackgroundColor($hexBackgroundColor)
  {
    $this->hexBackgroundColor = $hexBackgroundColor;
  }

  public function getHexBackgroundColor()
  {
    return $this->hexBackgroundColor;
  }

  public function setHexFontColor($hexFontColor)
  {
    $this->hexFontColor = $hexFontColor;
  }

  public function getHexFontColor()
  {
    return $this->hexFontColor;
  }

  public function setLabelValueRows($labelValueRows)
  {
    $this->labelValueRows = $labelValueRows;
  }

  public function getLabelValueRows()
  {
    return $this->labelValueRows;
  }

  public function setShowLastUpdateTime($showLastUpdateTime)
  {
    $this->showLastUpdateTime = $showLastUpdateTime;
  }

  public function getShowLastUpdateTime()
  {
    return $this->showLastUpdateTime;
  }
}

class Google_Service_Walletobjects_LabelValue extends Google_Model
{
  public $label;
  public $value;

  public function setLabel($label)
  {
    $this->label = $label;
  }

  public function getLabel()
  {
    return $this->label;
  }

  public function setValue($value)
  {
    $this->value = $value;
  }

  public function getValue()
  {
    return $this->value;
  }
}

class Google_Service_Walletobjects_LabelValueRow extends Google_Collection
{
  protected $columnsType = 'Google_Service_Walletobjects_LabelValue';
  protected $columnsDataType = 'array';
  public $hexBackgroundColor;
  public $hexFontColor;

  public function setColumns($columns)
  {
    $this->columns = $columns;
  }

  public function getColumns()
  {
    return $this->columns;
  }

  public function setHexBackgroundColor($hexBackgroundColor)
  {
    $this->hexBackgroundColor = $hexBackgroundColor;
  }

  public function getHexBackgroundColor()
  {
    return $this->hexBackgroundColor;
  }

  public function setHexFontColor($hexFontColor)
  {
    $this->hexFontColor = $hexFontColor;
  }

  public function getHexFontColor()
  {
    return $this->hexFontColor;
  }
}

class Google_Service_Walletobjects_LatLongPoint extends Google_Model
{
  public $kind;
  public $latitude;
  public $longitude;

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setLatitude($latitude)
  {
    $this->latitude = $latitude;
  }

  public function getLatitude()
  {
    return $this->latitude;
  }

  public function setLongitude($longitude)
  {
    $this->longitude = $longitude;
  }

  public function getLongitude()
  {
    return $this->longitude;
  }
}

class Google_Service_Walletobjects_LinksModuleData extends Google_Collection
{
  protected $urisType = 'Google_Service_Walletobjects_Uri';
  protected $urisDataType = 'array';

  public function setUris($uris)
  {
    $this->uris = $uris;
  }

  public function getUris()
  {
    return $this->uris;
  }
}

class Google_Service_Walletobjects_LoyaltyClass extends Google_Collection
{
  public $accountIdLabel;
  public $accountNameLabel;
  public $allowMultipleUsersPerObject;
  protected $homepageUriType = 'Google_Service_Walletobjects_Uri';
  protected $homepageUriDataType = '';
  public $id;
  protected $imageModulesDataType = 'Google_Service_Walletobjects_ImageModuleData';
  protected $imageModulesDataDataType = 'array';
  protected $infoModuleDataType = 'Google_Service_Walletobjects_InfoModuleData';
  protected $infoModuleDataDataType = '';
  protected $issuerDataType = 'Google_Service_Walletobjects_TypedValue';
  protected $issuerDataDataType = '';
  public $issuerName;
  public $kind;
  protected $linksModuleDataType = 'Google_Service_Walletobjects_LinksModuleData';
  protected $linksModuleDataDataType = '';
  protected $locationsType = 'Google_Service_Walletobjects_LatLongPoint';
  protected $locationsDataType = 'array';
  protected $messagesType = 'Google_Service_Walletobjects_WalletObjectMessage';
  protected $messagesDataType = 'array';
  protected $programLogoType = 'Google_Service_Walletobjects_Image';
  protected $programLogoDataType = '';
  public $programName;
  protected $renderSpecsType = 'Google_Service_Walletobjects_RenderSpec';
  protected $renderSpecsDataType = 'array';
  protected $reviewType = 'Google_Service_Walletobjects_CommonWalletObjectClassReview';
  protected $reviewDataType = '';
  public $reviewStatus;
  public $rewardsTier;
  public $rewardsTierLabel;
  protected $textModulesDataType = 'Google_Service_Walletobjects_TextModuleData';
  protected $textModulesDataDataType = 'array';
  public $version;

  public function setAccountIdLabel($accountIdLabel)
  {
    $this->accountIdLabel = $accountIdLabel;
  }

  public function getAccountIdLabel()
  {
    return $this->accountIdLabel;
  }

  public function setAccountNameLabel($accountNameLabel)
  {
    $this->accountNameLabel = $accountNameLabel;
  }

  public function getAccountNameLabel()
  {
    return $this->accountNameLabel;
  }

  public function setAllowMultipleUsersPerObject($allowMultipleUsersPerObject)
  {
    $this->allowMultipleUsersPerObject = $allowMultipleUsersPerObject;
  }

  public function getAllowMultipleUsersPerObject()
  {
    return $this->allowMultipleUsersPerObject;
  }

  public function setHomepageUri(Google_Service_Walletobjects_Uri $homepageUri)
  {
    $this->homepageUri = $homepageUri;
  }

  public function getHomepageUri()
  {
    return $this->homepageUri;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setImageModulesData($imageModulesData)
  {
    $this->imageModulesData = $imageModulesData;
  }

  public function getImageModulesData()
  {
    return $this->imageModulesData;
  }

  public function setInfoModuleData(Google_Service_Walletobjects_InfoModuleData $infoModuleData)
  {
    $this->infoModuleData = $infoModuleData;
  }

  public function getInfoModuleData()
  {
    return $this->infoModuleData;
  }

  public function setIssuerData(Google_Service_Walletobjects_TypedValue $issuerData)
  {
    $this->issuerData = $issuerData;
  }

  public function getIssuerData()
  {
    return $this->issuerData;
  }

  public function setIssuerName($issuerName)
  {
    $this->issuerName = $issuerName;
  }

  public function getIssuerName()
  {
    return $this->issuerName;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setLinksModuleData(Google_Service_Walletobjects_LinksModuleData $linksModuleData)
  {
    $this->linksModuleData = $linksModuleData;
  }

  public function getLinksModuleData()
  {
    return $this->linksModuleData;
  }

  public function setLocations($locations)
  {
    $this->locations = $locations;
  }

  public function getLocations()
  {
    return $this->locations;
  }

  public function setMessages($messages)
  {
    $this->messages = $messages;
  }

  public function getMessages()
  {
    return $this->messages;
  }

  public function setProgramLogo(Google_Service_Walletobjects_Image $programLogo)
  {
    $this->programLogo = $programLogo;
  }

  public function getProgramLogo()
  {
    return $this->programLogo;
  }

  public function setProgramName($programName)
  {
    $this->programName = $programName;
  }

  public function getProgramName()
  {
    return $this->programName;
  }

  public function setRenderSpecs($renderSpecs)
  {
    $this->renderSpecs = $renderSpecs;
  }

  public function getRenderSpecs()
  {
    return $this->renderSpecs;
  }

  public function setReview(Google_Service_Walletobjects_CommonWalletObjectClassReview $review)
  {
    $this->review = $review;
  }

  public function getReview()
  {
    return $this->review;
  }

  public function setReviewStatus($reviewStatus)
  {
    $this->reviewStatus = $reviewStatus;
  }

  public function getReviewStatus()
  {
    return $this->reviewStatus;
  }

  public function setRewardsTier($rewardsTier)
  {
    $this->rewardsTier = $rewardsTier;
  }

  public function getRewardsTier()
  {
    return $this->rewardsTier;
  }

  public function setRewardsTierLabel($rewardsTierLabel)
  {
    $this->rewardsTierLabel = $rewardsTierLabel;
  }

  public function getRewardsTierLabel()
  {
    return $this->rewardsTierLabel;
  }

  public function setTextModulesData($textModulesData)
  {
    $this->textModulesData = $textModulesData;
  }

  public function getTextModulesData()
  {
    return $this->textModulesData;
  }

  public function setVersion($version)
  {
    $this->version = $version;
  }

  public function getVersion()
  {
    return $this->version;
  }
}

class Google_Service_Walletobjects_LoyaltyClassAddMessageRequest extends Google_Model
{
  protected $messageType = 'Google_Service_Walletobjects_WalletObjectMessage';
  protected $messageDataType = '';
  public $reviewStatus;

  public function setMessage(Google_Service_Walletobjects_WalletObjectMessage $message)
  {
    $this->message = $message;
  }

  public function getMessage()
  {
    return $this->message;
  }

  public function setReviewStatus($reviewStatus)
  {
    $this->reviewStatus = $reviewStatus;
  }

  public function getReviewStatus()
  {
    return $this->reviewStatus;
  }
}

class Google_Service_Walletobjects_LoyaltyClassAddMessageResponse extends Google_Model
{
  protected $resourceType = 'Google_Service_Walletobjects_LoyaltyClass';
  protected $resourceDataType = '';

  public function setResource(Google_Service_Walletobjects_LoyaltyClass $resource)
  {
    $this->resource = $resource;
  }

  public function getResource()
  {
    return $this->resource;
  }
}

class Google_Service_Walletobjects_LoyaltyClassGetRequest extends Google_Model
{
  protected $resultMaskType = 'Google_Service_Walletobjects_LoyaltyClassMask';
  protected $resultMaskDataType = '';

  public function setResultMask(Google_Service_Walletobjects_LoyaltyClassMask $resultMask)
  {
    $this->resultMask = $resultMask;
  }

  public function getResultMask()
  {
    return $this->resultMask;
  }
}

class Google_Service_Walletobjects_LoyaltyClassListRequest extends Google_Model
{
  protected $resultMaskType = 'Google_Service_Walletobjects_LoyaltyClassMask';
  protected $resultMaskDataType = '';

  public function setResultMask(Google_Service_Walletobjects_LoyaltyClassMask $resultMask)
  {
    $this->resultMask = $resultMask;
  }

  public function getResultMask()
  {
    return $this->resultMask;
  }
}

class Google_Service_Walletobjects_LoyaltyClassListResponse extends Google_Collection
{
  protected $paginationType = 'Google_Service_Walletobjects_Pagination';
  protected $paginationDataType = '';
  protected $resourcesType = 'Google_Service_Walletobjects_LoyaltyClass';
  protected $resourcesDataType = 'array';

  public function setPagination(Google_Service_Walletobjects_Pagination $pagination)
  {
    $this->pagination = $pagination;
  }

  public function getPagination()
  {
    return $this->pagination;
  }

  public function setResources($resources)
  {
    $this->resources = $resources;
  }

  public function getResources()
  {
    return $this->resources;
  }
}

class Google_Service_Walletobjects_LoyaltyClassMask extends Google_Collection
{
  protected $fieldsType = 'Google_Service_Walletobjects_FieldMask';
  protected $fieldsDataType = 'array';
  public $projection;

  public function setFields($fields)
  {
    $this->fields = $fields;
  }

  public function getFields()
  {
    return $this->fields;
  }

  public function setProjection($projection)
  {
    $this->projection = $projection;
  }

  public function getProjection()
  {
    return $this->projection;
  }
}

class Google_Service_Walletobjects_LoyaltyObject extends Google_Collection
{
  public $accountId;
  public $accountName;
  protected $barcodeType = 'Google_Service_Walletobjects_Barcode';
  protected $barcodeDataType = '';
  public $classId;
  protected $classReferenceType = 'Google_Service_Walletobjects_LoyaltyClass';
  protected $classReferenceDataType = '';
  public $hasUsers;
  public $id;
  protected $imageModulesDataType = 'Google_Service_Walletobjects_ImageModuleData';
  protected $imageModulesDataDataType = 'array';
  protected $infoModuleDataType = 'Google_Service_Walletobjects_InfoModuleData';
  protected $infoModuleDataDataType = '';
  protected $issuerDataType = 'Google_Service_Walletobjects_TypedValue';
  protected $issuerDataDataType = '';
  public $kind;
  protected $linksModuleDataType = 'Google_Service_Walletobjects_LinksModuleData';
  protected $linksModuleDataDataType = '';
  protected $locationsType = 'Google_Service_Walletobjects_LatLongPoint';
  protected $locationsDataType = 'array';
  protected $loyaltyPointsType = 'Google_Service_Walletobjects_LoyaltyPoints';
  protected $loyaltyPointsDataType = '';
  protected $messagesType = 'Google_Service_Walletobjects_WalletObjectMessage';
  protected $messagesDataType = 'array';
  public $state;
  protected $textModulesDataType = 'Google_Service_Walletobjects_TextModuleData';
  protected $textModulesDataDataType = 'array';
  protected $validTimeIntervalType = 'Google_Service_Walletobjects_TimeInterval';
  protected $validTimeIntervalDataType = '';
  public $version;

  public function setAccountId($accountId)
  {
    $this->accountId = $accountId;
  }

  public function getAccountId()
  {
    return $this->accountId;
  }

  public function setAccountName($accountName)
  {
    $this->accountName = $accountName;
  }

  public function getAccountName()
  {
    return $this->accountName;
  }

  public function setBarcode(Google_Service_Walletobjects_Barcode $barcode)
  {
    $this->barcode = $barcode;
  }

  public function getBarcode()
  {
    return $this->barcode;
  }

  public function setClassId($classId)
  {
    $this->classId = $classId;
  }

  public function getClassId()
  {
    return $this->classId;
  }

  public function setClassReference(Google_Service_Walletobjects_LoyaltyClass $classReference)
  {
    $this->classReference = $classReference;
  }

  public function getClassReference()
  {
    return $this->classReference;
  }

  public function setHasUsers($hasUsers)
  {
    $this->hasUsers = $hasUsers;
  }

  public function getHasUsers()
  {
    return $this->hasUsers;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setImageModulesData($imageModulesData)
  {
    $this->imageModulesData = $imageModulesData;
  }

  public function getImageModulesData()
  {
    return $this->imageModulesData;
  }

  public function setInfoModuleData(Google_Service_Walletobjects_InfoModuleData $infoModuleData)
  {
    $this->infoModuleData = $infoModuleData;
  }

  public function getInfoModuleData()
  {
    return $this->infoModuleData;
  }

  public function setIssuerData(Google_Service_Walletobjects_TypedValue $issuerData)
  {
    $this->issuerData = $issuerData;
  }

  public function getIssuerData()
  {
    return $this->issuerData;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setLinksModuleData(Google_Service_Walletobjects_LinksModuleData $linksModuleData)
  {
    $this->linksModuleData = $linksModuleData;
  }

  public function getLinksModuleData()
  {
    return $this->linksModuleData;
  }

  public function setLocations($locations)
  {
    $this->locations = $locations;
  }

  public function getLocations()
  {
    return $this->locations;
  }

  public function setLoyaltyPoints(Google_Service_Walletobjects_LoyaltyPoints $loyaltyPoints)
  {
    $this->loyaltyPoints = $loyaltyPoints;
  }

  public function getLoyaltyPoints()
  {
    return $this->loyaltyPoints;
  }

  public function setMessages($messages)
  {
    $this->messages = $messages;
  }

  public function getMessages()
  {
    return $this->messages;
  }

  public function setState($state)
  {
    $this->state = $state;
  }

  public function getState()
  {
    return $this->state;
  }

  public function setTextModulesData($textModulesData)
  {
    $this->textModulesData = $textModulesData;
  }

  public function getTextModulesData()
  {
    return $this->textModulesData;
  }

  public function setValidTimeInterval(Google_Service_Walletobjects_TimeInterval $validTimeInterval)
  {
    $this->validTimeInterval = $validTimeInterval;
  }

  public function getValidTimeInterval()
  {
    return $this->validTimeInterval;
  }

  public function setVersion($version)
  {
    $this->version = $version;
  }

  public function getVersion()
  {
    return $this->version;
  }
}

class Google_Service_Walletobjects_LoyaltyObjectAddMessageRequest extends Google_Model
{
  protected $messageType = 'Google_Service_Walletobjects_WalletObjectMessage';
  protected $messageDataType = '';

  public function setMessage(Google_Service_Walletobjects_WalletObjectMessage $message)
  {
    $this->message = $message;
  }

  public function getMessage()
  {
    return $this->message;
  }
}

class Google_Service_Walletobjects_LoyaltyObjectAddMessageResponse extends Google_Model
{
  protected $resourceType = 'Google_Service_Walletobjects_LoyaltyObject';
  protected $resourceDataType = '';

  public function setResource(Google_Service_Walletobjects_LoyaltyObject $resource)
  {
    $this->resource = $resource;
  }

  public function getResource()
  {
    return $this->resource;
  }
}

class Google_Service_Walletobjects_LoyaltyObjectGetRequest extends Google_Model
{
  protected $resultMaskType = 'Google_Service_Walletobjects_LoyaltyObjectMask';
  protected $resultMaskDataType = '';

  public function setResultMask(Google_Service_Walletobjects_LoyaltyObjectMask $resultMask)
  {
    $this->resultMask = $resultMask;
  }

  public function getResultMask()
  {
    return $this->resultMask;
  }
}

class Google_Service_Walletobjects_LoyaltyObjectListRequest extends Google_Model
{
  protected $resultMaskType = 'Google_Service_Walletobjects_LoyaltyObjectMask';
  protected $resultMaskDataType = '';

  public function setResultMask(Google_Service_Walletobjects_LoyaltyObjectMask $resultMask)
  {
    $this->resultMask = $resultMask;
  }

  public function getResultMask()
  {
    return $this->resultMask;
  }
}

class Google_Service_Walletobjects_LoyaltyObjectListResponse extends Google_Collection
{
  protected $paginationType = 'Google_Service_Walletobjects_Pagination';
  protected $paginationDataType = '';
  protected $resourcesType = 'Google_Service_Walletobjects_LoyaltyObject';
  protected $resourcesDataType = 'array';

  public function setPagination(Google_Service_Walletobjects_Pagination $pagination)
  {
    $this->pagination = $pagination;
  }

  public function getPagination()
  {
    return $this->pagination;
  }

  public function setResources($resources)
  {
    $this->resources = $resources;
  }

  public function getResources()
  {
    return $this->resources;
  }
}

class Google_Service_Walletobjects_LoyaltyObjectMask extends Google_Collection
{
  protected $fieldsType = 'Google_Service_Walletobjects_FieldMask';
  protected $fieldsDataType = 'array';
  public $projection;

  public function setFields($fields)
  {
    $this->fields = $fields;
  }

  public function getFields()
  {
    return $this->fields;
  }

  public function setProjection($projection)
  {
    $this->projection = $projection;
  }

  public function getProjection()
  {
    return $this->projection;
  }
}

class Google_Service_Walletobjects_LoyaltyPoints extends Google_Model
{
  protected $balanceType = 'Google_Service_Walletobjects_LoyaltyPointsBalance';
  protected $balanceDataType = '';
  public $label;
  public $pointsType;
  protected $pointsValidIntervalType = 'Google_Service_Walletobjects_TimeInterval';
  protected $pointsValidIntervalDataType = '';

  public function setBalance(Google_Service_Walletobjects_LoyaltyPointsBalance $balance)
  {
    $this->balance = $balance;
  }

  public function getBalance()
  {
    return $this->balance;
  }

  public function setLabel($label)
  {
    $this->label = $label;
  }

  public function getLabel()
  {
    return $this->label;
  }

  public function setPointsType($pointsType)
  {
    $this->pointsType = $pointsType;
  }

  public function getPointsType()
  {
    return $this->pointsType;
  }

  public function setPointsValidInterval(Google_Service_Walletobjects_TimeInterval $pointsValidInterval)
  {
    $this->pointsValidInterval = $pointsValidInterval;
  }

  public function getPointsValidInterval()
  {
    return $this->pointsValidInterval;
  }
}

class Google_Service_Walletobjects_LoyaltyPointsBalance extends Google_Model
{
  public $double;
  public $int;
  protected $moneyType = 'Google_Service_Walletobjects_Money';
  protected $moneyDataType = '';
  public $string;

  public function setDouble($double)
  {
    $this->double = $double;
  }

  public function getDouble()
  {
    return $this->double;
  }

  public function setInt($int)
  {
    $this->int = $int;
  }

  public function getInt()
  {
    return $this->int;
  }

  public function setMoney(Google_Service_Walletobjects_Money $money)
  {
    $this->money = $money;
  }

  public function getMoney()
  {
    return $this->money;
  }

  public function setString($string)
  {
    $this->string = $string;
  }

  public function getString()
  {
    return $this->string;
  }
}

class Google_Service_Walletobjects_Money extends Google_Model
{
  public $currencyCode;
  public $kind;
  public $micros;

  public function setCurrencyCode($currencyCode)
  {
    $this->currencyCode = $currencyCode;
  }

  public function getCurrencyCode()
  {
    return $this->currencyCode;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setMicros($micros)
  {
    $this->micros = $micros;
  }

  public function getMicros()
  {
    return $this->micros;
  }
}

class Google_Service_Walletobjects_OfferClass extends Google_Collection
{
  public $allowMultipleUsersPerObject;
  public $details;
  protected $distributionTimeIntervalType = 'Google_Service_Walletobjects_TimeInterval';
  protected $distributionTimeIntervalDataType = '';
  public $finePrint;
  protected $helpUriType = 'Google_Service_Walletobjects_Uri';
  protected $helpUriDataType = '';
  protected $homepageUriType = 'Google_Service_Walletobjects_Uri';
  protected $homepageUriDataType = '';
  public $id;
  protected $imageModulesDataType = 'Google_Service_Walletobjects_ImageModuleData';
  protected $imageModulesDataDataType = 'array';
  protected $infoModuleDataType = 'Google_Service_Walletobjects_InfoModuleData';
  protected $infoModuleDataDataType = '';
  protected $issuerDataType = 'Google_Service_Walletobjects_TypedValue';
  protected $issuerDataDataType = '';
  public $issuerName;
  public $kind;
  protected $linksModuleDataType = 'Google_Service_Walletobjects_LinksModuleData';
  protected $linksModuleDataDataType = '';
  protected $locationsType = 'Google_Service_Walletobjects_LatLongPoint';
  protected $locationsDataType = 'array';
  protected $messagesType = 'Google_Service_Walletobjects_WalletObjectMessage';
  protected $messagesDataType = 'array';
  public $provider;
  public $redemptionChannel;
  protected $renderSpecsType = 'Google_Service_Walletobjects_RenderSpec';
  protected $renderSpecsDataType = 'array';
  protected $reviewType = 'Google_Service_Walletobjects_CommonWalletObjectClassReview';
  protected $reviewDataType = '';
  public $reviewStatus;
  protected $textModulesDataType = 'Google_Service_Walletobjects_TextModuleData';
  protected $textModulesDataDataType = 'array';
  public $title;
  protected $titleImageType = 'Google_Service_Walletobjects_Image';
  protected $titleImageDataType = '';
  public $version;

  public function setAllowMultipleUsersPerObject($allowMultipleUsersPerObject)
  {
    $this->allowMultipleUsersPerObject = $allowMultipleUsersPerObject;
  }

  public function getAllowMultipleUsersPerObject()
  {
    return $this->allowMultipleUsersPerObject;
  }

  public function setDetails($details)
  {
    $this->details = $details;
  }

  public function getDetails()
  {
    return $this->details;
  }

  public function setDistributionTimeInterval(Google_Service_Walletobjects_TimeInterval $distributionTimeInterval)
  {
    $this->distributionTimeInterval = $distributionTimeInterval;
  }

  public function getDistributionTimeInterval()
  {
    return $this->distributionTimeInterval;
  }

  public function setFinePrint($finePrint)
  {
    $this->finePrint = $finePrint;
  }

  public function getFinePrint()
  {
    return $this->finePrint;
  }

  public function setHelpUri(Google_Service_Walletobjects_Uri $helpUri)
  {
    $this->helpUri = $helpUri;
  }

  public function getHelpUri()
  {
    return $this->helpUri;
  }

  public function setHomepageUri(Google_Service_Walletobjects_Uri $homepageUri)
  {
    $this->homepageUri = $homepageUri;
  }

  public function getHomepageUri()
  {
    return $this->homepageUri;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setImageModulesData($imageModulesData)
  {
    $this->imageModulesData = $imageModulesData;
  }

  public function getImageModulesData()
  {
    return $this->imageModulesData;
  }

  public function setInfoModuleData(Google_Service_Walletobjects_InfoModuleData $infoModuleData)
  {
    $this->infoModuleData = $infoModuleData;
  }

  public function getInfoModuleData()
  {
    return $this->infoModuleData;
  }

  public function setIssuerData(Google_Service_Walletobjects_TypedValue $issuerData)
  {
    $this->issuerData = $issuerData;
  }

  public function getIssuerData()
  {
    return $this->issuerData;
  }

  public function setIssuerName($issuerName)
  {
    $this->issuerName = $issuerName;
  }

  public function getIssuerName()
  {
    return $this->issuerName;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setLinksModuleData(Google_Service_Walletobjects_LinksModuleData $linksModuleData)
  {
    $this->linksModuleData = $linksModuleData;
  }

  public function getLinksModuleData()
  {
    return $this->linksModuleData;
  }

  public function setLocations($locations)
  {
    $this->locations = $locations;
  }

  public function getLocations()
  {
    return $this->locations;
  }

  public function setMessages($messages)
  {
    $this->messages = $messages;
  }

  public function getMessages()
  {
    return $this->messages;
  }

  public function setProvider($provider)
  {
    $this->provider = $provider;
  }

  public function getProvider()
  {
    return $this->provider;
  }

  public function setRedemptionChannel($redemptionChannel)
  {
    $this->redemptionChannel = $redemptionChannel;
  }

  public function getRedemptionChannel()
  {
    return $this->redemptionChannel;
  }

  public function setRenderSpecs($renderSpecs)
  {
    $this->renderSpecs = $renderSpecs;
  }

  public function getRenderSpecs()
  {
    return $this->renderSpecs;
  }

  public function setReview(Google_Service_Walletobjects_CommonWalletObjectClassReview $review)
  {
    $this->review = $review;
  }

  public function getReview()
  {
    return $this->review;
  }

  public function setReviewStatus($reviewStatus)
  {
    $this->reviewStatus = $reviewStatus;
  }

  public function getReviewStatus()
  {
    return $this->reviewStatus;
  }

  public function setTextModulesData($textModulesData)
  {
    $this->textModulesData = $textModulesData;
  }

  public function getTextModulesData()
  {
    return $this->textModulesData;
  }

  public function setTitle($title)
  {
    $this->title = $title;
  }

  public function getTitle()
  {
    return $this->title;
  }

  public function setTitleImage(Google_Service_Walletobjects_Image $titleImage)
  {
    $this->titleImage = $titleImage;
  }

  public function getTitleImage()
  {
    return $this->titleImage;
  }

  public function setVersion($version)
  {
    $this->version = $version;
  }

  public function getVersion()
  {
    return $this->version;
  }
}

class Google_Service_Walletobjects_OfferClassAddMessageRequest extends Google_Model
{
  protected $messageType = 'Google_Service_Walletobjects_WalletObjectMessage';
  protected $messageDataType = '';
  public $reviewStatus;

  public function setMessage(Google_Service_Walletobjects_WalletObjectMessage $message)
  {
    $this->message = $message;
  }

  public function getMessage()
  {
    return $this->message;
  }

  public function setReviewStatus($reviewStatus)
  {
    $this->reviewStatus = $reviewStatus;
  }

  public function getReviewStatus()
  {
    return $this->reviewStatus;
  }
}

class Google_Service_Walletobjects_OfferClassAddMessageResponse extends Google_Model
{
  protected $resourceType = 'Google_Service_Walletobjects_OfferClass';
  protected $resourceDataType = '';

  public function setResource(Google_Service_Walletobjects_OfferClass $resource)
  {
    $this->resource = $resource;
  }

  public function getResource()
  {
    return $this->resource;
  }
}

class Google_Service_Walletobjects_OfferClassGetRequest extends Google_Model
{
  protected $resultMaskType = 'Google_Service_Walletobjects_OfferClassMask';
  protected $resultMaskDataType = '';

  public function setResultMask(Google_Service_Walletobjects_OfferClassMask $resultMask)
  {
    $this->resultMask = $resultMask;
  }

  public function getResultMask()
  {
    return $this->resultMask;
  }
}

class Google_Service_Walletobjects_OfferClassListRequest extends Google_Model
{
  protected $resultMaskType = 'Google_Service_Walletobjects_OfferClassMask';
  protected $resultMaskDataType = '';

  public function setResultMask(Google_Service_Walletobjects_OfferClassMask $resultMask)
  {
    $this->resultMask = $resultMask;
  }

  public function getResultMask()
  {
    return $this->resultMask;
  }
}

class Google_Service_Walletobjects_OfferClassListResponse extends Google_Collection
{
  protected $paginationType = 'Google_Service_Walletobjects_Pagination';
  protected $paginationDataType = '';
  protected $resourcesType = 'Google_Service_Walletobjects_OfferClass';
  protected $resourcesDataType = 'array';

  public function setPagination(Google_Service_Walletobjects_Pagination $pagination)
  {
    $this->pagination = $pagination;
  }

  public function getPagination()
  {
    return $this->pagination;
  }

  public function setResources($resources)
  {
    $this->resources = $resources;
  }

  public function getResources()
  {
    return $this->resources;
  }
}

class Google_Service_Walletobjects_OfferClassMask extends Google_Collection
{
  protected $fieldsType = 'Google_Service_Walletobjects_FieldMask';
  protected $fieldsDataType = 'array';
  public $projection;

  public function setFields($fields)
  {
    $this->fields = $fields;
  }

  public function getFields()
  {
    return $this->fields;
  }

  public function setProjection($projection)
  {
    $this->projection = $projection;
  }

  public function getProjection()
  {
    return $this->projection;
  }
}

class Google_Service_Walletobjects_OfferObject extends Google_Collection
{
  protected $barcodeType = 'Google_Service_Walletobjects_Barcode';
  protected $barcodeDataType = '';
  public $classId;
  protected $classReferenceType = 'Google_Service_Walletobjects_OfferClass';
  protected $classReferenceDataType = '';
  public $hasUsers;
  public $id;
  protected $imageModulesDataType = 'Google_Service_Walletobjects_ImageModuleData';
  protected $imageModulesDataDataType = 'array';
  protected $infoModuleDataType = 'Google_Service_Walletobjects_InfoModuleData';
  protected $infoModuleDataDataType = '';
  protected $issuerDataType = 'Google_Service_Walletobjects_TypedValue';
  protected $issuerDataDataType = '';
  public $kind;
  protected $linksModuleDataType = 'Google_Service_Walletobjects_LinksModuleData';
  protected $linksModuleDataDataType = '';
  protected $locationsType = 'Google_Service_Walletobjects_LatLongPoint';
  protected $locationsDataType = 'array';
  protected $messagesType = 'Google_Service_Walletobjects_WalletObjectMessage';
  protected $messagesDataType = 'array';
  public $state;
  protected $textModulesDataType = 'Google_Service_Walletobjects_TextModuleData';
  protected $textModulesDataDataType = 'array';
  protected $validTimeIntervalType = 'Google_Service_Walletobjects_TimeInterval';
  protected $validTimeIntervalDataType = '';
  public $version;

  public function setBarcode(Google_Service_Walletobjects_Barcode $barcode)
  {
    $this->barcode = $barcode;
  }

  public function getBarcode()
  {
    return $this->barcode;
  }

  public function setClassId($classId)
  {
    $this->classId = $classId;
  }

  public function getClassId()
  {
    return $this->classId;
  }

  public function setClassReference(Google_Service_Walletobjects_OfferClass $classReference)
  {
    $this->classReference = $classReference;
  }

  public function getClassReference()
  {
    return $this->classReference;
  }

  public function setHasUsers($hasUsers)
  {
    $this->hasUsers = $hasUsers;
  }

  public function getHasUsers()
  {
    return $this->hasUsers;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setImageModulesData($imageModulesData)
  {
    $this->imageModulesData = $imageModulesData;
  }

  public function getImageModulesData()
  {
    return $this->imageModulesData;
  }

  public function setInfoModuleData(Google_Service_Walletobjects_InfoModuleData $infoModuleData)
  {
    $this->infoModuleData = $infoModuleData;
  }

  public function getInfoModuleData()
  {
    return $this->infoModuleData;
  }

  public function setIssuerData(Google_Service_Walletobjects_TypedValue $issuerData)
  {
    $this->issuerData = $issuerData;
  }

  public function getIssuerData()
  {
    return $this->issuerData;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setLinksModuleData(Google_Service_Walletobjects_LinksModuleData $linksModuleData)
  {
    $this->linksModuleData = $linksModuleData;
  }

  public function getLinksModuleData()
  {
    return $this->linksModuleData;
  }

  public function setLocations($locations)
  {
    $this->locations = $locations;
  }

  public function getLocations()
  {
    return $this->locations;
  }

  public function setMessages($messages)
  {
    $this->messages = $messages;
  }

  public function getMessages()
  {
    return $this->messages;
  }

  public function setState($state)
  {
    $this->state = $state;
  }

  public function getState()
  {
    return $this->state;
  }

  public function setTextModulesData($textModulesData)
  {
    $this->textModulesData = $textModulesData;
  }

  public function getTextModulesData()
  {
    return $this->textModulesData;
  }

  public function setValidTimeInterval(Google_Service_Walletobjects_TimeInterval $validTimeInterval)
  {
    $this->validTimeInterval = $validTimeInterval;
  }

  public function getValidTimeInterval()
  {
    return $this->validTimeInterval;
  }

  public function setVersion($version)
  {
    $this->version = $version;
  }

  public function getVersion()
  {
    return $this->version;
  }
}

class Google_Service_Walletobjects_OfferObjectAddMessageRequest extends Google_Model
{
  protected $messageType = 'Google_Service_Walletobjects_WalletObjectMessage';
  protected $messageDataType = '';

  public function setMessage(Google_Service_Walletobjects_WalletObjectMessage $message)
  {
    $this->message = $message;
  }

  public function getMessage()
  {
    return $this->message;
  }
}

class Google_Service_Walletobjects_OfferObjectAddMessageResponse extends Google_Model
{
  protected $resourceType = 'Google_Service_Walletobjects_OfferObject';
  protected $resourceDataType = '';

  public function setResource(Google_Service_Walletobjects_OfferObject $resource)
  {
    $this->resource = $resource;
  }

  public function getResource()
  {
    return $this->resource;
  }
}

class Google_Service_Walletobjects_OfferObjectGetRequest extends Google_Model
{
  protected $resultMaskType = 'Google_Service_Walletobjects_OfferObjectMask';
  protected $resultMaskDataType = '';

  public function setResultMask(Google_Service_Walletobjects_OfferObjectMask $resultMask)
  {
    $this->resultMask = $resultMask;
  }

  public function getResultMask()
  {
    return $this->resultMask;
  }
}

class Google_Service_Walletobjects_OfferObjectListRequest extends Google_Model
{
  protected $resultMaskType = 'Google_Service_Walletobjects_OfferObjectMask';
  protected $resultMaskDataType = '';

  public function setResultMask(Google_Service_Walletobjects_OfferObjectMask $resultMask)
  {
    $this->resultMask = $resultMask;
  }

  public function getResultMask()
  {
    return $this->resultMask;
  }
}

class Google_Service_Walletobjects_OfferObjectListResponse extends Google_Collection
{
  protected $paginationType = 'Google_Service_Walletobjects_Pagination';
  protected $paginationDataType = '';
  protected $resourcesType = 'Google_Service_Walletobjects_OfferObject';
  protected $resourcesDataType = 'array';

  public function setPagination(Google_Service_Walletobjects_Pagination $pagination)
  {
    $this->pagination = $pagination;
  }

  public function getPagination()
  {
    return $this->pagination;
  }

  public function setResources($resources)
  {
    $this->resources = $resources;
  }

  public function getResources()
  {
    return $this->resources;
  }
}

class Google_Service_Walletobjects_OfferObjectMask extends Google_Collection
{
  protected $fieldsType = 'Google_Service_Walletobjects_FieldMask';
  protected $fieldsDataType = 'array';
  public $projection;

  public function setFields($fields)
  {
    $this->fields = $fields;
  }

  public function getFields()
  {
    return $this->fields;
  }

  public function setProjection($projection)
  {
    $this->projection = $projection;
  }

  public function getProjection()
  {
    return $this->projection;
  }
}

class Google_Service_Walletobjects_Pagination extends Google_Model
{
  public $kind;
  public $nextPageToken;
  public $resultsPerPage;

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }

  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }

  public function setResultsPerPage($resultsPerPage)
  {
    $this->resultsPerPage = $resultsPerPage;
  }

  public function getResultsPerPage()
  {
    return $this->resultsPerPage;
  }
}

class Google_Service_Walletobjects_PassengerName extends Google_Model
{
  public $first;
  public $last;
  public $middle;
  public $prefix;
  public $suffix;

  public function setFirst($first)
  {
    $this->first = $first;
  }

  public function getFirst()
  {
    return $this->first;
  }

  public function setLast($last)
  {
    $this->last = $last;
  }

  public function getLast()
  {
    return $this->last;
  }

  public function setMiddle($middle)
  {
    $this->middle = $middle;
  }

  public function getMiddle()
  {
    return $this->middle;
  }

  public function setPrefix($prefix)
  {
    $this->prefix = $prefix;
  }

  public function getPrefix()
  {
    return $this->prefix;
  }

  public function setSuffix($suffix)
  {
    $this->suffix = $suffix;
  }

  public function getSuffix()
  {
    return $this->suffix;
  }
}

class Google_Service_Walletobjects_RenderSpec extends Google_Model
{
  public $templateFamily;
  public $viewName;

  public function setTemplateFamily($templateFamily)
  {
    $this->templateFamily = $templateFamily;
  }

  public function getTemplateFamily()
  {
    return $this->templateFamily;
  }

  public function setViewName($viewName)
  {
    $this->viewName = $viewName;
  }

  public function getViewName()
  {
    return $this->viewName;
  }
}

class Google_Service_Walletobjects_TextModuleData extends Google_Collection
{
  public $body;
  public $header;
  protected $iconBodysType = 'Google_Service_Walletobjects_IconBody';
  protected $iconBodysDataType = 'array';

  public function setBody($body)
  {
    $this->body = $body;
  }

  public function getBody()
  {
    return $this->body;
  }

  public function setHeader($header)
  {
    $this->header = $header;
  }

  public function getHeader()
  {
    return $this->header;
  }

  public function setIconBodys($iconBodys)
  {
    $this->iconBodys = $iconBodys;
  }

  public function getIconBodys()
  {
    return $this->iconBodys;
  }
}

class Google_Service_Walletobjects_TimeInterval extends Google_Model
{
  protected $endType = 'Google_Service_Walletobjects_DateTime';
  protected $endDataType = '';
  public $kind;
  protected $startType = 'Google_Service_Walletobjects_DateTime';
  protected $startDataType = '';

  public function setEnd(Google_Service_Walletobjects_DateTime $end)
  {
    $this->end = $end;
  }

  public function getEnd()
  {
    return $this->end;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setStart(Google_Service_Walletobjects_DateTime $start)
  {
    $this->start = $start;
  }

  public function getStart()
  {
    return $this->start;
  }
}

class Google_Service_Walletobjects_TypedValue extends Google_Collection
{
  public $bool;
  public $double;
  protected $imageType = 'Google_Service_Walletobjects_Image';
  protected $imageDataType = '';
  public $int;
  public $kind;
  protected $listType = 'Google_Service_Walletobjects_TypedValue';
  protected $listDataType = 'array';
  public $string;
  protected $uriType = 'Google_Service_Walletobjects_Uri';
  protected $uriDataType = '';

  public function setBool($bool)
  {
    $this->bool = $bool;
  }

  public function getBool()
  {
    return $this->bool;
  }

  public function setDouble($double)
  {
    $this->double = $double;
  }

  public function getDouble()
  {
    return $this->double;
  }

  public function setImage(Google_Service_Walletobjects_Image $image)
  {
    $this->image = $image;
  }

  public function getImage()
  {
    return $this->image;
  }

  public function setInt($int)
  {
    $this->int = $int;
  }

  public function getInt()
  {
    return $this->int;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setList($list)
  {
    $this->list = $list;
  }

  public function getList()
  {
    return $this->list;
  }

  public function setString($string)
  {
    $this->string = $string;
  }

  public function getString()
  {
    return $this->string;
  }

  public function setUri(Google_Service_Walletobjects_Uri $uri)
  {
    $this->uri = $uri;
  }

  public function getUri()
  {
    return $this->uri;
  }
}

class Google_Service_Walletobjects_Uri extends Google_Model
{
  public $description;
  public $kind;
  public $uri;

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setUri($uri)
  {
    $this->uri = $uri;
  }

  public function getUri()
  {
    return $this->uri;
  }
}

class Google_Service_Walletobjects_WalletObjectMessage extends Google_Model
{
  protected $actionUriType = 'Google_Service_Walletobjects_Uri';
  protected $actionUriDataType = '';
  public $body;
  protected $displayIntervalType = 'Google_Service_Walletobjects_TimeInterval';
  protected $displayIntervalDataType = '';
  public $header;
  protected $imageType = 'Google_Service_Walletobjects_Image';
  protected $imageDataType = '';
  public $kind;

  public function setActionUri(Google_Service_Walletobjects_Uri $actionUri)
  {
    $this->actionUri = $actionUri;
  }

  public function getActionUri()
  {
    return $this->actionUri;
  }

  public function setBody($body)
  {
    $this->body = $body;
  }

  public function getBody()
  {
    return $this->body;
  }

  public function setDisplayInterval(Google_Service_Walletobjects_TimeInterval $displayInterval)
  {
    $this->displayInterval = $displayInterval;
  }

  public function getDisplayInterval()
  {
    return $this->displayInterval;
  }

  public function setHeader($header)
  {
    $this->header = $header;
  }

  public function getHeader()
  {
    return $this->header;
  }

  public function setImage(Google_Service_Walletobjects_Image $image)
  {
    $this->image = $image;
  }

  public function getImage()
  {
    return $this->image;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }
}
