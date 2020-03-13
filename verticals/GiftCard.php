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
 * Class to generate example GiftCard class and objects
 */
class GiftCard {

  /**
   * Generates a GiftCard Class
   *
   * @param String $issuerId Wallet Object merchant account id.
   * @param String $classId Wallet Class that this wallet object references.
   * @return Object $wobClass Loyaltyclass resource.
   */
  public static function generateGiftCardClass($issuerId, $classId) {
    // Define text module data.
    $textModulesData = array(
        array(
            'header' => 'Where to Redeem',
            'body' => 'All US gift cards are redeemable in any US and Puerto Rico ' .
                'Baconrista retail locations, or online at Baconrista.com where ' .
                'available, for merchandise or services.'
        )
    );
    // Define links module data.
    $linksModuleData = new Google_Service_Walletobjects_LinksModuleData();
    $uris = array (
        array(
            'uri' => 'http://www.baconrista.com',
            'kind' => 'walletobjecs#uri',
            'description' => 'Baconrista'
        )
    );
    $linksModuleData->setUris($uris);

    // A list of locations at which the Gift card Class can be used.
    $locations = array(
        array(
            'kind' => 'walletobjects#latLongPoint',
            'latitude' => 37.422601,
            'longitude' => -122.085286
        )
    );
    // Source uri of program logo.
    $uriInstance = new Google_Service_Walletobjects_Uri();
    $imageInstance = new Google_Service_Walletobjects_Image();
    $uriInstance->setUri(
        'http://farm8.staticflickr.com/7340/11177041185_a61a7f2139_o.jpg'
    );
    $imageInstance->setSourceUri($uriInstance);

    // Create wallet class.
    $wobClass = new Google_Service_Walletobjects_GiftCardClass();
    $wobClass->setId($issuerId.'.'.$classId);
    $wobClass->setIssuerName('Baconrista');
    $wobClass->setMerchantName('Baconrista');
    $wobClass->setProgramLogo($imageInstance);
    $wobClass->setLinksModuleData($linksModuleData);
    $wobClass->setTextModulesData($textModulesData);
    $wobClass->setReviewStatus('underReview');
    $wobClass->setAllowMultipleUsersPerObject(true);
    $wobClass->setLocations($locations);
    return $wobClass;
  }

  /**
   * Generates a GiftCard Object
   *
   * @param String $issuerId Wallet Object merchant account id.
   * @param String $classId Wallet Class that this wallet object references.
   * @param String $objectId Unique identifier for a wallet object.
   * @return Object $wobObject Loyaltyobject resource.
   */
  public static function generateGiftCardObject($issuerId, $classId, $objectId) {
    // Define barcode type and value.
    $barcode = new Google_Service_Walletobjects_Barcode();
    $barcode->setAlternateText('12345');
    $barcode->setLabel('User Id');
    $barcode->setType('qrCode');
    $barcode->setValue('28343E3');
    // Define text module data.
    $textModulesData = array(
        array(
            'header' => 'Earn double points',
            'body' => 'Jane, don\'t forget to use your Baconrista Rewards when '.
                      'paying with this gift card to earn additional points'
        )
    );
    // Define links module data.
    $linksModuleData = new Google_Service_Walletobjects_LinksModuleData();
    $uris = array (
        array(
            'uri' => 'http://www.baconrista.com/mybalance?id=1234567890',
            'kind' => 'walletobjecs#uri',
            'description' => 'My Baconrista Gift Card Purchases'
        )
    );
    $linksModuleData->setUris($uris);

    $balance = new Google_Service_Walletobjects_Money();
    $balance->setKind('walletobjects#money');
    $balance->setMicros(20000000);
    $balance->setCurrencyCode('USD');

    $balanceUpdateTime = new Google_Service_Walletobjects_DateTime();
    date_default_timezone_set('UTC');
    $balanceUpdateTime->setDate(date("Y-m-d\TH:i:s.u\Z"));

    // Create wallet object.
    $wobObject = new Google_Service_Walletobjects_GiftCardObject();
    $wobObject->setClassId($issuerId.".".$classId);
    $wobObject->setId($issuerId.".".$objectId);
    $wobObject->setState('active');
    $wobObject->setVersion(1);
    $wobObject->setBarcode($barcode);
    $wobObject->setLinksModuleData($linksModuleData);
    $wobObject->setTextModulesData($textModulesData);
    $wobObject->setBalance($balance);
    $wobObject->setBalanceUpdateTime($balanceUpdateTime);
    $wobObject->setCardNumber('123jkl4889');
    $wobObject->setEventNumber('123456');
    $wobObject->setPin('1111');
    return $wobObject;
  }
}
