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

function cancelFunction() {
  // alert("Hello World");
  
}

function continueFunction(){

  var candidateName = document.getElementById("fname").value;
  var candidateSurname = document.getElementById("lname").value;
  var access_key = document.getElementById("user_key").value;
  var user_names = document.getElementById("user_names").value;

  // alert("Please Enter Candidate Name -->"+candidateName.length);

  if(candidateName.length == 0 || candidateSurname == 0){

    alert("Please Enter Candidate Full Details!");

  }else{

     // alert("The Candidate Name You Have Entered Is ->>"+candidateName +"--"+candidateSurname);
     window.open('/benchmark/00198200/user_001/upload/00124.php?k_cd='+access_key+'&nms='+user_names+'' ,'_self');

  }

}


// Check for the File API support.
if (window.File && window.FileReader && window.FileList && window.Blob) {
  document.getElementById('files').addEventListener('change', handleFileSelect, false);
} else {
  alert('The File APIs are not fully supported in this browser.');
}

async function handleFileSelect(evt) {
  var f = evt.target.files[0]; // FileList object
  var reader = new FileReader();
  // Closure to capture the file information.
  reader.onload = (function(theFile) {
    return function(e) {
      var binaryData = e.target.result;
      //Converting Binary Data to base 64
      var base64String = window.btoa(binaryData);
      //showing file converted to base64
      document.getElementById('base64').value = base64String.substr(0,base64String.length/3);
      document.getElementById('positiontext0').innerHTML = "<textarea class='form-control' rows='5' name='cv_data_two' >"+base64String.substr(base64String.length/3,base64String.length/4)+"</textarea>"
      document.getElementById('positiontext1').innerHTML = "<textarea class='form-control' rows='5' name='cv_data_three' >"+base64String.substr(base64String.length/4,base64String.length/5)+"</textarea>"
      document.getElementById('positiontext2').innerHTML = "<textarea class='form-control' rows='5' name='cv_data_four' >"+base64String.substr(base64String.length/5,base64String.length)+"</textarea>"
      alert('CV File Was Converted Successfully!!');
      document.getElementById('confirm_holder').innerHTML = "<img src='img/confirm.png' style='width: 50px; height: 50px;'>";
      // document.getElementById('documentess').innerHTML = "<iframe width='100%' height='100%' src='data:application/pdf;base64, " +
      //       encodeURI(base64String) + "'></iframe>";

    };
  })(f);
  // Read in the image file as a data URL.
  reader.readAsBinaryString(f);
}


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

function viewDocument(){

   var doc_payload = document.getElementById('base64').value.toString();
   alert("datax--"+doc_payload);
   document.getElementById('documentess').innerHTML = "<iframe width='100%' height='100%' src='data:application/pdf;base64, " +
   encodeURI(doc_payload) + "'></iframe>";

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