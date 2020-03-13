s2ap-quickstart-php
==============================

Basic PHP implementation of the Save to Google Pay API.

This sample demonstrates integration of the basic components of the Save to Google Pay API. Review the [quickstart guide](https://developers.google.com/pay/save/samples/quickstart-php) to run the sample.

This sample showcases several aspects of the API
* Creation of Classes and Objects
* Save to Google Pay insertion of classes and objects
* The Web Service API

## Creation of Classes and Objects
The code for creation of classes and objects can be found under the verticals directory. Each Object type, such as loyalty, is broken out into its own file.

## Save to Google Pay insertion of Classes and Objects
Save to Google Pay is handled on both the client and server. The index.html file is the landing page for the application and includes app.js. The app.js file makes a request to the jwt.php file to generate Object type-specific JWTs. The app.js file inserts the appropriate g:wallet tags and the Save to Google Pay JavaScript after all of the JWTs are generated. The JavaScript must be appended after the g:wallet tags because it parses the page to render Save to Google Pay buttons when it's completed loading.

## Webservice API
The Webservice API handler is webservice.php. This script handles Webservice requests, generates Loyalty Objects, converts Loyalty Objects to JWTs, and responds with the JWT. You can configure your discoverable to point to the URL handled by the webservice.php.

[![Analytics](https://ga-beacon.appspot.com/UA-46956809-1/walletobjects-quickstart-php/README.md)](https://github.com/igrigorik/ga-beacon)
