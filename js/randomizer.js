"use strict"; 

document.addEventListener('DOMContentLoaded', (event) => {
    console.log('The Dom is Ready') //the DOM is ready
 })


function randomImage() {
    const fileNames = [
        "../images/index.jpg",
        "../images/1.jpg",
        "../images/2.jpg",
        "../images/3.jpg",
        "../images/4.jpg"
      ],
      randomIndex = Math.floor(Math.random() * fileNames.length),
      backgroundImage = 'url(' + fileNames[randomIndex] + ')';
      document.querySelector('.jumbotron').style.backgroundImage = backgroundImage;
  }
  
  randomImage();


   