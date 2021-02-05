//open modal when reserve button clicked

var modalBtn = document.querySelector('.myBtn');
var modalbg =document.querySelector('.modal');
var modalclose =document.querySelector('.modal-close');

modalBtn.addEventListener('click',function() {
modalbg.classList.add('bg-active')
document.getElementById("photo").src="uniforms/Poloko.png";
});

modalclose.addEventListener('click', function(){
modalbg.classList.remove('bg-active');
});

var modalBtn2 = document.querySelector('.myBtn2');
var modalbg =document.querySelector('.modal');
var modalclose =document.querySelector('.modal-close');

modalBtn2.addEventListener('click',function() {
modalbg.classList.add('bg-active')
document.getElementById("photo").src="uniforms/Pantsko.png";
});

modalclose.addEventListener('click', function(){
modalbg.classList.remove('bg-active');
});

var modalBtn3 = document.querySelector('.myBtn3');
var modalbg =document.querySelector('.modal');
var modalclose =document.querySelector('.modal-close');

modalBtn3.addEventListener('click',function() {
modalbg.classList.add('bg-active')
document.getElementById("photo").src="uniforms/Blouseko.png";
});

modalclose.addEventListener('click', function(){
modalbg.classList.remove('bg-active');
});

var modalBtn4 = document.querySelector('.myBtn4');
var modalbg =document.querySelector('.modal');
var modalclose =document.querySelector('.modal-close');

modalBtn4.addEventListener('click',function() {
modalbg.classList.add('bg-active')
document.getElementById("photo").src="uniforms/Skirtko.png";
});

modalclose.addEventListener('click', function(){
modalbg.classList.remove('bg-active');
});

var modalBtn5 = document.querySelector('.myBtn5');
var modalbg =document.querySelector('.modal');
var modalclose =document.querySelector('.modal-close');

modalBtn5.addEventListener('click',function() {
modalbg.classList.add('bg-active')
document.getElementById("photo").src="uniforms/Peshirtko.png";
});

modalclose.addEventListener('click', function(){
modalbg.classList.remove('bg-active');
});

var modalBtn6 = document.querySelector('.myBtn6');
var modalbg =document.querySelector('.modal');
var modalclose =document.querySelector('.modal-close');

modalBtn6.addEventListener('click',function() {
modalbg.classList.add('bg-active')
document.getElementById("photo").src="uniforms/Pepantsko.png";
});

modalclose.addEventListener('click', function(){
modalbg.classList.remove('bg-active');
});

var modalBtn7 = document.querySelector('.myBtn7');
var modalbg =document.querySelector('.modal');
var modalclose =document.querySelector('.modal-close');

modalBtn7.addEventListener('click',function() {
modalbg.classList.add('bg-active')
document.getElementById("photo").src="uniforms/MaleBundle.png";
});

modalclose.addEventListener('click', function(){
modalbg.classList.remove('bg-active');
});

var modalBtn8 = document.querySelector('.myBtn8');
var modalbg =document.querySelector('.modal');
var modalclose =document.querySelector('.modal-close');

modalBtn8.addEventListener('click',function() {
modalbg.classList.add('bg-active')
document.getElementById("photo").src="uniforms/FemaleBundle.png";
});

modalclose.addEventListener('click', function(){
modalbg.classList.remove('bg-active');
});

var modalBtn9 = document.querySelector('.myBtn9');
var modalbg =document.querySelector('.modal');
var modalclose =document.querySelector('.modal-close');

modalBtn9.addEventListener('click',function() {
modalbg.classList.add('bg-active')
document.getElementById("photo").src="uniforms/PeBundle.png";
});

modalclose.addEventListener('click', function(){
modalbg.classList.remove('bg-active');
});



//quantity increment and decrement
let addBtn = document.querySelector('#add');
let subBtn = document.querySelector('#sub');
let qty = document.querySelector('#qtyBox');
		
addBtn.addEventListener('click',()=>{
	qty.value = parseInt(qty.value) + 1;
});

subBtn.addEventListener('click',()=>{
	if (qty.value <= 0) {
		qty.value = 0;
		}
	else{
		qty.value = parseInt(qty.value) - 1;
		}
});

function Name() {
	var e = document.getElementById("selected");
var strUser = e.options[e.pickedIndex].text;

var a = document.getElementById("selected");
var strUser = a.options[a.PoloIndex].text;
}