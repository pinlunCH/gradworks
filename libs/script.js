// Get the button that opens the modal
var modalBtn = document.querySelectorAll("a.modalBtn");

// Get all page modals
var modals = document.querySelectorAll('.bgModal');

// Get the element that closes the modal
var spans = document.getElementsByClassName("close");

for (var i = 0; i < modalBtn.length; i++) 
{
 modalBtn[i].onclick = function(e) {
    console.log(e);
    e.preventDefault();
    modal = document.querySelector(e.target.getAttribute("href"));
    console.log(modal)
    modal.style.display = "block";
 }
}
for (var i = 0; i < spans.length; i++) {
 spans[i].onclick = function() { 
    for (var index in modals) {
      if (typeof modals[index].style !== 'undefined') modals[index].style.display = "none"; 
        console.log('running'); 
    }
 }
}

window.onclick = function(event) {
    if (event.target.classList.contains('modal')) {
     for (var index in modals) {
      if (typeof modals[index].style !== 'undefined') modals[index].style.display = "none";    
     }
    }
}


    
    