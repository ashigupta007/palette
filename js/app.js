function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
   name=profile.getName();
   img_url=profile.getImageUrl();
   email=profile.getEmail();
   localStorage.setItem("name", name);
   localStorage.setItem("profpic", img_url);
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
function display_color(current,dest)
{
	if (current.getAttribute && current.value.length==current.getAttribute("maxlength"))
	{
		var color="#" + current.value;
		console.log(color);
		console.log(dest);
		var div=document.getElementById(dest);
		div.setAttribute('class','popup');
		div.setAttribute('style','background-color:' + color + ';');
	}
}
function display_color_palette(current,dest)
{
	if (current.getAttribute && current.value.length==current.getAttribute("maxlength"))
	{
		var color="#" + current.value;
		console.log(color);
		console.log(dest);
		var div=document.getElementById('color_1');
		console.log(div);
		div.removeAttribute('class');
		div.setAttribute('class','color-cont-display-2');
		div.setAttribute('style','background-color:' + color + ';');
	}
}