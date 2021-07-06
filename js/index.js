
// BackToTop Btn
  //Get the button
var mybutton = document.getElementById("TopBtn");

// When the user scrolls down 500px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}


//City Function
function testIndex(clickedID) {
  // alert(clickedID);
  var city = escape(clickedID);
  localStorage.setItem("value",city);
  window.location.href = "/city.php";

  function WriteCookie() {
    var now = new Date();
    var minutes = 1;
    now.setTime(now.getTime() + (60 * 1000));
    cookievalue = escape(city) + ";"

    document.cookie="name=" + cookievalue;
    // document.cookie = "expires=" + now.toUTCString() + ";"
    // document.write ("Setting Cookies : " + "name=" + cookievalue );
 }

 WriteCookie(); 
}


