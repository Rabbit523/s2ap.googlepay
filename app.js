/**
 * Save to Android Pay success handler.
 */
var successHandler = function(params) {
  console.log('Object added successfully' + params);
}

/**
 * Save to Android Pay failure handler.
 */
var failureHandler = function(params) {
  console.log('Object insertion failed' + params);
}

/**
 * Initialization function
 */
function init() {
  // Bind click event for 'Insert Loyalty Class' button.
  document.getElementById('loyalty').addEventListener('click', function() {
    $.get('insert.php?type=loyalty', function(data) {
      console.log(data);
    });
  });
  // Bind click event for 'Insert Offer Class' button.
  document.getElementById('offer').addEventListener('click', function() {
    $.get('insert.php?type=offer', function(data) {
      console.log(data);
    });
  });
  // Bind click event for 'Insert Gift Card Class' button.
  document.getElementById('giftcard').addEventListener('click', function() {
    $.get('insert.php?type=giftcard', function(data) {
      console.log(data);
    });
  });

  $.when(
    // Get jwt of loyalty object and render 'Save card' wallet button.
    $.get('jwt.php?type=loyalty', function(data) {
      saveToAndroidPay = document.createElement('g:savetoandroidpay');
      saveToAndroidPay.setAttribute('jwt', data);
      saveToAndroidPay.setAttribute('onsuccess', 'successHandler');
      saveToAndroidPay.setAttribute('onfailure', 'failureHandler');
      document.querySelector('#loyaltysave').appendChild(saveToAndroidPay);
      }
    ),
    // Get jwt of offer object and render 'Get offer' wallet button.
    $.get('jwt.php?type=offer', function(data) {
      saveToAndroidPay = document.createElement('g:savetoandroidpay');
      saveToAndroidPay.setAttribute('jwt', data);
      saveToAndroidPay.setAttribute('onsuccess', 'successHandler');
      saveToAndroidPay.setAttribute('onfailure', 'failureHandler');
      document.querySelector('#offersave').appendChild(saveToAndroidPay);
      }
    ),
    // Get jwt of giftcard object and render 'Get Gift Card' wallet button.
    $.get('jwt.php?type=giftcard', function(data) {
      saveToAndroidPay = document.createElement('g:savetoandroidpay');
      saveToAndroidPay.setAttribute('jwt', data);
      saveToAndroidPay.setAttribute('onsuccess', 'successHandler');
      saveToAndroidPay.setAttribute('onfailure', 'failureHandler');
      document.querySelector('#giftcardsave').appendChild(saveToAndroidPay);
      }
    )
    ).done(function() {
      // It will execute after all above ajax requests are successful.
      script = document.createElement('script');
      script.src = 'https://apis.google.com/js/plusone.js';
      document.head.appendChild(script);
      }
    );
}

$(window).ready(function() {
  init();
});
