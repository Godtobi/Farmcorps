// Get the modal
var modal = document.getElementById("myModal");
console.log(modal)

// Get the button that opens the modal
// var btn = document.getElementsByClassName("open-modal");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal


function openModal() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

const playPauseBtn = document.getElementById('playPause')

// $(document).ready(function(){
// 	$('#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4').click(function(){
// 		$(this).toggleClass('open');
// 	});
// });

document.addEventListener("DOMContentLoaded", function(){
  document.getElementById('nav-icon1').addEventListener('click', function() {
    if(this.classList.contains('open')) {
      this.classList.remove('open')
      document.querySelector('.mobile-nav').classList.remove('show')
      // document.querySelector('.nav div.container .auth').classList.toggle('show')
      // document.querySelector('.nav div.container .nav-links').classList.toggle('show')
    }
    else {
      this.classList.add('open')
      document.querySelector('.mobile-nav').classList.add('show')
   }
  })
});