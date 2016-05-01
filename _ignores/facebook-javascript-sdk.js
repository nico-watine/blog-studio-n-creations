// INSERT RIGHT AFTER <BODY> TAG

<meta property="fb:app_id" content="985598931535022">

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '985598931535022',
      xfbml      : true,
      version    : 'v2.6'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>