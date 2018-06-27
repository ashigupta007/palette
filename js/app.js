function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
  console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
  console.log('Name: ' + profile.getName());
  console.log('Image URL: ' + profile.getImageUrl());
  console.log('Email: ' + profile.getEmail());

  localStorage.setItem("name", profile.getName());

  window.location = "pages/home.php";
}
function signOut() 
{
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
      console.log('User signed out.');
    });
}
function load(page)
{
	 var toload=page+".php";
	 console.log(toload);
	$("#container").load(page+".php");
}