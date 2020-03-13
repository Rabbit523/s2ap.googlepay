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
 * Generates an example Offer Class and Object.
 */
class Offer {

  /**
   * Create an example Offer Class
   *
   * @param String $issuerId Wallet Object merchant account id.
   * @param String $classId Wallet Class that this wallet object references.
   * @return Object $wobClass Offerclass resource.
   */
  public static function generateOfferClass($issuerId, $classId) {
    // A list of locations at which the Wallet Class can be used.
    $locations = array(
        array(
            'kind' => 'walletobjects#latLongPoint',
            'latitude' => 37.424015499999996,
            'longitude' => -122.09259560000001
        ),
        array(
            'kind' => 'walletobjects#latLongPoint',
            'latitude' => 37.424354,
            'longitude' => -122.09508869999999
        ),
        array(
            'kind' => 'walletobjects#latLongPoint',
            'latitude' => 37.7901435,
            'longitude' => -122.39026709999997
        ),
        array(
            'kind' => 'walletobjects#latLongPoint',
            'latitude' => 40.7406578,
            'longitude' => -74.00208940000002
        )
    );
    // Source uri of title image.
    $uriTitleImageInstance = new Google_Service_Walletobjects_Uri();
    $imageTitleImageInstance = new Google_Service_Walletobjects_Image();
    $uriTitleImageInstance->setUri(
        'http://farm4.staticflickr.com/3723/11177041115_6e6a3b6f49_o.jpg'
    );
    $imageTitleImageInstance->setSourceUri($uriTitleImageInstance);
    // Define text module data.
    $textModulesData = array(
        array(
            'header' => 'Details',
            'body' => '20% off one cup of coffee at all Baconrista Coffee locations. ' .
                'Only one can be used per visit.'
        ),
        array(
            'header' => 'About Baconrista',
            'body' => 'Since 2013, Baconrista Coffee has been committed to making high ' .
                'quality bacon coffee. Visit us in our stores or online at www.baconrista.com'
        )
    );
    // Define links module data.
    $linksModuleData = new Google_Service_Walletobjects_LinksModuleData();
    $uris = array (
        array(
            'uri' => 'http://maps.google.com/?q=google',
            'kind' => 'walletobjecs#uri',
            'description' => 'Nearby Locations'
        ),
        array(
            'uri' => 'tel:6505555555',
            'kind' => 'walletobjecs#uri',
            'description' => 'Call Customer Service'
        )
    );
    $linksModuleData->setUris($uris);

    $uriModuleImageInstance = new Google_Service_Walletobjects_Uri();
    $uriModuleImageInstance->setUri(
        'http://farm8.staticflickr.com/7401/11177116434_d8e600bba6_o.jpg'
    );
    $uriModuleImageInstance->setDescription('Coffee beans');
    $imageModuleImageInstance = new Google_Service_Walletobjects_Image();
    $imageModuleImageInstance->setSourceUri($uriModuleImageInstance);
    $imagesModuleData = new Google_Service_Walletobjects_ImageModuleData();
    $imagesModuleData->setMainImage($imageModuleImageInstance);
    $imagesModuleDataArr = array ($imagesModuleData);

    // Create wallet class.
    $wobClass = new Google_Service_Walletobjects_OfferClass();
    $wobClass->setId($issuerId.'.'.$classId);
    $wobClass->setIssuerName('Baconrista Coffee');
    $wobClass->setTitle('20% off on one bacon fat latte');
    $wobClass->setProvider('Baconrista Deals');
    $wobClass->setTitleImage($imageTitleImageInstance);
    $wobClass->setLinksModuleData($linksModuleData);
    $wobClass->setTextModulesData($textModulesData);
    $wobClass->setImageModulesData($imagesModuleDataArr);
    $wobClass->setRedemptionChannel('both');
    $wobClass->setReviewStatus('underReview');
    $wobClass->setLocations($locations);
    $wobClass->setAllowMultipleUsersPerObject(true);
    return $wobClass;
  }

  /**
   * Create an example Offer Object
   *
   * @param String $issuerId Wallet Object merchant account id.
   * @param String $classId Wallet Class that this wallet object references.
   * @param String $objectId Unique identifier for a wallet object.
   * @return Object $wobObject Offerobject resource.
   */
  public static function generateOfferObject($issuerId, $classId, $objectId) {
    // Define barcode type and value.
    $barcode = new Google_Service_Walletobjects_Barcode();
    $barcode->setType('upcA');
    $barcode->setValue('123456789012');
    $barcode->setAlternateText('12345');
    $barcode->setLabel('Offer Code');
    // Create wallet object.
    $wobObject = new Google_Service_Walletobjects_OfferObject();
    $wobObject->setClassId($issuerId.'.'.$classId);
    $wobObject->setId($issuerId.'.'.$objectId);
    $wobObject->setBarcode($barcode);
    $wobObject->setState('active');
    $wobObject->setVersion(1);
    return $wobObject;
  }
}
