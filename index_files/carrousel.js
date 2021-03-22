    (function(){
         let bout1 = document.getElementById('un');
		let bout2 = document.getElementById('deux');
		let bout3 = document.getElementById('trois');
		let carrousel = document.querySelector('.carrousel')
		bout1.addEventListener('mousedown', function() {
             carrousel.style.transform = "translateX(0vw)";
		});
		bout2.addEventListener('mousedown', function() {
			carrousel.style.transform = "translateX(-100vw)";
		});
		bout3.addEventListener('mousedown', function() {
			carrousel.style.transform = "translateX(-200vw)";
		});
    }())