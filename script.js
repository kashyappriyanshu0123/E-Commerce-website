// Script for navigation bar
const bar=document.getElementById('bar');
const close=document.getElementById('close');
const nav=document.getElementById('navbar');
// alert("Hello! I am an alert box!!");
if (bar){
    // alert("Hello! I am an alert box!!");
    bar.addEventListener('click', () => {
      nav.classList.add('active');
    })
}
if (close){
    // alert("Hello! I am an alert box!!");
    close.addEventListener('click', () => {
      nav.classList.remove('active');
    })
}