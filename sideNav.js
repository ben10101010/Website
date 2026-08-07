const text = document.getElementById("yes");

function openNav() {
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

