var slideIndex=1;
showSlides(slideIndex);

function plusSlides(n)
{
	showSlides(slideIndex+=n);
}

function currentSlide(n)
{
	showSlides(slideIndex=n);
}

function showSlides(n)
{
	var i;
	var slides = document.getElementsByClassName("slide");
	
	if(n>slides.length)
		{
			slideIndex=1;
		}
	if(n<1)
		{
			slideIndex=slides.length;
		}
	for(i=0; i<slides.length;i++)
		{
			slides[i].style.display= "none";
		}
	
	slides[slideIndex-1].style.display= "block";
}


function listSelect(n)
{
	var i;
	var list= document.getElementsByClassName("list_btn");
	var prev= document.getElementsByClassName("slide_previev");
	
	for(i=0; i<list.length;++i)
	{
		list[i].className= list[i].className.replace("select_btn","");
	}
	
	for(i=0; i<prev.length;++i)
	{
		prev[i].className= prev[i].className.replace("prev_select","");
	}
	
	currentSlide(n);
	
	list[n-1].classList.add("select_btn");
	prev[n-1].classList.add("prev_select");
}