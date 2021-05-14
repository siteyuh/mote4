// main.js
function toggle_menu() {
  var angle = screen && screen.orientation && screen.orientation.angle;
  if (angle == undefined) {
    angle = window.orientation;    // iOS用
  }
  var fMenu = document.getElementById('toggle_menu').style.display;
  if (fMenu == 'block' || fMenu == 'flex') {// block
    document.getElementById('toggle_menu').style.display = 'none';
    document.menu_btn.src = '/assets/menu.svg';
  } else {// none
    if (angle != 0) {
      document.getElementById('toggle_menu').style.display = 'flex'
    } else {
      document.getElementById('toggle_menu').style.display = 'block'
    }
    document.menu_btn.src = '/assets/close.svg';
  }
}