var $sidebarToggler = $('#sidebarToggler');
var $sidebar = $('#sidebar');
var $main = $('#main');

function toggleSidebar() {
  if (     $sidebar.hasClass('show') &&  $main.hasClass('sidebar-opened')    ) {
    $main.removeClass('sidebar-opened');
    setTimeout(function() {
      $sidebar.removeClass('show');
      $main.removeClass('transform-animation');
    }, 233);
  } else {
    $sidebar.addClass('show');
    $main.addClass('transform-animation');
    $main.addClass('sidebar-opened');
  }
}

$sidebarToggler.on('click', function(e) {
  e.preventDefault();
  toggleSidebar();
});

var mediaQuery = window.matchMedia('(min-width: 768px)');

mediaQuery.addListener(widthChange);

function widthChange(mediaQuery) {    
  if (mediaQuery.matches) {
    console.log("Escritorio");
    $main.removeClass('transform-animation');
  }else{
    console.log("Movil");
    $main.removeClass('sidebar-opened');
    $sidebar.removeClass('show');
    $main.removeClass('transform-animation');
  }
}

widthChange(mediaQuery);


/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction(){
  document.getElementById("myDropdown").classList.toggle("show");
}

function myFunctionTwo(){
  document.getElementById("myDropdown2").classList.toggle("show");
}

function myFunctionZee(){
  document.getElementById("myDropdown3").classList.toggle("show");
}


// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}