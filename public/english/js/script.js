//Get the button
let mybutton = document.getElementById("btn-back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener("click", backToTop);

function backToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}



//tabs

function openTap(evt, type) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById("All").style.display = "block";
  evt.currentTarget.className += " active";

  // Filter elements by type
  if (type !== "All") {
      var elements = document.getElementsByClassName("tabtype");
      for (i = 0; i < elements.length; i++) {
          elements[i].style.display = "block";
      }

      // Hide elements with other types
      var allElements = document.getElementsByClassName("tabtype");
      for (i = 0; i < allElements.length; i++) {
          if (!allElements[i].classList.contains(type)) {
              allElements[i].style.display = "none";
          }
      }

      var allElements = document.getElementsByClassName("tabtype");
      for (i = 0; i < allElements.length; i++) {
          if (allElements[i].classList.contains(type)) {
              allElements[i].style.display = "block";
          }
      }
  }else{
    var allElements = document.getElementsByClassName("tabtype");
    for (i = 0; i < allElements.length; i++) {
            allElements[i].style.display = "block";}
  }
}
document.getElementById("defaultOpen").click();



  //show more
  function showMore() {
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("myBtn");

    if (moreText.style.display === "block") {
      btnText.innerHTML = "VIEW MORE WORKS";
      moreText.style.display = "none";
    } else {
      btnText.innerHTML = "VIEW LESS WORKS";
      moreText.style.display = "block";
    }
  }




