const text = document.getElementById("yes");

function openNav() {
    var screenWidth = window.innerWidth
    let openpos = (8.88074 * 10**-10)*Math.pow(screenWidth, 4) - 0.00000462262*Math.pow(screenWidth, 3) + 0.0087766*Math.pow(screenWidth, 2) - 6.19803*screenWidth + 1718.77043
    document.documentElement.style.setProperty('--swordPosition', ''+openpos+'px');
    let openposPhone = -0.00000418598*Math.pow(screenWidth, 3) + 0.00526292*Math.pow(screenWidth, 2) - 1.0987*screenWidth - 66.25771
    document.documentElement.style.setProperty('--swordPositionPhone', ''+openposPhone+'px');

  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginRight = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
  if (text.classList.contains("reverse-anim")) {
    text.classList.remove("reverse-anim");
  }
  text.classList.add("play-anim");
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginRight = "0";
  document.body.style.backgroundColor = "white";
  text.classList.remove("play-anim");
  text.classList.add("reverse-anim");
}

(function() {
    var link = document.querySelector("link[rel*='icon']") || document.createElement('link');
    link.type = 'image/png';
    link.rel = 'shortcut icon';
    link.href = '/images/favicon.png';
    document.getElementsByTagName('head')[0].appendChild(link);
})();



