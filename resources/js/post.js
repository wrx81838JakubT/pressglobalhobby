function tabClicked(id, cid, bid){
	var container = document.getElementById(cid).children;
	var buttons = document.getElementById(bid).children;
	for(let i = 0; i<buttons.length-1; i++){
		if(!buttons[i].classList.contains("c-active-tab")){
			buttons[i].classList.add("c-active-tab");
		}
		if(!buttons[i].classList.contains("c-inactive-tab")){
			buttons[i].classList.add("c-inactive-tab");
		}
		
		if(container[i].id === id){
			container[i].style.display = "grid";
			buttons[i].classList.toggle("c-inactive-tab");
			
		}else if(container[i].id != id){
			container[i].style.display = "none";
			buttons[i].classList.toggle("c-active-tab");
		}
	}
	
}

let slideIndex = 0;
showSlides();

function manualSlide(){
	showSlidesManual(slideIndex);
}

// Next/previous controls
function plusSlides(n) {
	slideIndex += n
  var images = document.getElementById('imgnav').children;
  for(let i = 0; i<images.length; i++){
	  if(images[i].id != slideIndex){
		images[i].style.opacity = 0.5;
	  }else{
		  images[i].style.opacity = 0.8;
	  }
  }
  showSlidesManual(slideIndex);
}

// Thumbnail image controls
function currentSlide(n) {
  var images = document.getElementById('imgnav').children;
  for(let i = 0; i<images.length; i++){
	  if(images[i].id != n){
		images[i].style.opacity = 0.5;
	  }else{
		  images[i].style.opacity = 0.8;
	  }
  }
  showSlidesManual(slideIndex = n);
}

function showSlidesManual(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
}

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  var images = document.getElementById('imgnav').children;
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  for(let i = 0; i<images.length; i++){
	  if(images[i].id != slideIndex){
		images[i].style.opacity = 0.5;
	  }else{
		  images[i].style.opacity = 0.8;
	  }
  }
  setTimeout(showSlides, 15000);
}

window.tabClicked = tabClicked;
window.showSlides = showSlides;
window.showSlidesManual = showSlidesManual;
window.currentSlide = currentSlide;
window.plusSlides = plusSlides;