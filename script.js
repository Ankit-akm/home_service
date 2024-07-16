const Boxes = document.querySelectorAll('.box');

Boxes.forEach(box => {
  box.addEventListener('mouseenter', handleMouseEnter);
  box.addEventListener('mouseleave', handleMouseLeave);
});

// Function to handle mouse enter event
function handleMouseEnter(event) {
  const box = event.target;
  box.style.transform = 'scale(1.1)'; // You can use a scale transformation to zoom in.
  box.style.boxShadow = ' 15px 15px 15px 15px rgba(255, 255, 255, 0.8)'; 
}

// Function to handle mouse leave event
function handleMouseLeave(event) {
  const box = event.target;
  box.style.transform = 'scale(1)'; // Return to the original size when the mouse leaves.
  box.style.boxShadow = 'none'; 
}

//slider code starts
var counter = 1;
setInterval(function(){
  document.getElementById('radio' + counter).checked = true;
  counter++;
  if(counter > 4){
    counter = 1;
  }
}, 3000);
//slider code ends