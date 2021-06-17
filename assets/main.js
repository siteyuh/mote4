// main.js
function toggle_menu() {
  var fMenu = document.getElementById('toggle_menu').style.display;
  if ( fMenu == 'block' ) {// block
    document.getElementById( 'toggle_menu' ).style.display = 'none';
    document.menu_btn.src = '/assets/menu.svg';
  } else {// none
    document.getElementById( 'toggle_menu' ).style.display = 'block'
    document.menu_btn.src = '/assets/close.svg';
  }
}