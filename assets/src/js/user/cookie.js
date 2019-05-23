/**
 * Cookie Policy
 */

let accepted = false;


function cookieAccepted() {
  accepted = true;
  document.cookie = "cookiepolicy=accepted; expires=Mon, 28 Dec 2020 12:00:00 UTC; path=/";
  let cookieDiv = document.getElementById('cookielaw');
  cookieDiv.classList.remove('active');

  window.setInterval(function () {
    cookieDiv.remove();
  }, 1000);
}


function cookie(args) {
  if (document.cookie.indexOf('cookiepolicy=') < 0) {

    // show the banner
    let cookieBanner = '<div id="cookielaw" class="active">\n' +
      '\t<i class="material-icons">close</i>\n' +
      '\t<p>' + args.message + '</p>\n' +
      '\t<button onclick="cookieAccepted()">' + args.button + '</button>\n' +
      '</div>';


    document.documentElement.innerHTML += cookieBanner;

    if (!accepted && document.pageYOffset >= 200) {
      window.setInterval(function () {
        cookieAccepted();
      }, 1000);
    }

  }
}

document.addEventListener("DOMContentLoaded", function (event) {
  cookie(args);
});