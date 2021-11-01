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

   /* _____________________________________

     Form Focus
     _____________________________________ */

     var formControl = $(".form-control");

     formControl.on('focus', function () {
       $(this).parent().addClass('focus')
 
     });
     formControl.on('blur', function () {
       $(this).parent().removeClass('focus');
     });
 
 
     /* _____________________________________
 
      Mail Chimp
      _____________________________________ */
 
     var form = $('#mc-form');
 
     if (form.length) {
       form.ajaxChimp({
         callback: mailchimpCallback,
         // Replace the URL above with your mailchimp URL (put your URL inside '').
         url: ''
       });
     }
 
     // callback function when the form submitted, show the notification box
     function mailchimpCallback(resp) {
       var messageContainer = $('#message-newsletter');
       messageContainer.removeClass('error');
 
       form.find('.form-group').removeClass('error');
       if (resp.result === 'error') {
         form.find('.input-group').addClass('error');
         messageContainer.addClass('error');
       } else {
         form.find('.form-control').fadeIn().val('');
       }
 
       messageContainer.slideDown('slow', 'swing');
 
       setTimeout(function () {
         messageContainer.slideUp('slow', 'swing');
       }, 10000);
     }