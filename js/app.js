function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
   name=profile.getName();
   img_url=profile.getImageUrl();
   email=profile.getEmail();
   localStorage.setItem("name", name);
   $.post("signin.php", { name:name, email:email } ,function(data){
          console.log(response);
        });

  window.location="pages/home.php";
}
function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
      console.log('User signed out.');
      window.location="../index.html";
    });
  }
function onLoad() {
      gapi.load('auth2', function() {
        gapi.auth2.init();
      });
    }
function load(page)
{
	var toload=page+".php";
	$("#container").load(page+".php");
}