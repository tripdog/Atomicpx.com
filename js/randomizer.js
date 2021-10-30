"use strict"; 

document.addEventListener('DOMContentLoaded', (event) => {
    console.log('The Dom is Ready') //the DOM is ready
 })


function randomImage() {
    const fileNames = [
        "./images/index.jpg",
        "./images/1.jpg",
        "./images/2.jpg",
        "./images/3.jpg",
        "./images/4.jpg"
      ],
      randomIndex = Math.floor(Math.random() * fileNames.length),
      backgroundImage = 'url(' + fileNames[randomIndex] + ')';
      document.querySelector('.jumbotron').style.backgroundImage = backgroundImage;   
  }
 randomImage();

//Add active class to the current button (highlight it) Aint Javascript badass?   
const currentLocation = location.href   
const menuItem = document.querySelectorAll('.nav-link')    
const menuLength = menuItem.length      //get the length of the menu    
for (let i = 0; i < menuLength; i++) {    
    if (currentLocation === menuItem[i].href) {    
        menuItem[i].className = 'active'    
    }    
}
console.log(menuItem)
