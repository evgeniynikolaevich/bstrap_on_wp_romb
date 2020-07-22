j



function button_hide() {
  let body = document.getElementsByTagName('body')[0];
  var menu = document.getElementById("menu-header_menu");
   container = document.getElementById('header-container');
  phone = document.getElementById('header-phone');
  button = document.getElementById("header-button");
  logo = document.getElementById("header-logo");
  menu_elements =document.getElementsByClassName('menu-item-type-custom');
  logo.style.display = 'none';
if (menu.style.display === "block") {
    menu.style.display = "none";
    phone.style.display="none";
    container.style.height="64px";
    container.style.position="inherit";
    body.style.overflow="inherit";
    button.style.display="none";
    for(let i =0;i<menu_elements.length;i++){
    menu_elements[i].style["margin-bottom"]='0px';
    }
      logo.style.display = 'block';
  } else
   {

    menu.style.display = "block";
    container.style.height= "100vh";
    // container.style.position="fixed";
    body.style.overflow="hidden";
    phone.style.display="block";
    phone.style["margin-top"]="80px";
    button.style.display="block";
    button.style.padding="0px";
    for(let i =0;i<menu_elements.length;i++){
    menu_elements[i].style["margin-bottom"]='10px';
  }
    logo.style.display = 'none';
  }
}
