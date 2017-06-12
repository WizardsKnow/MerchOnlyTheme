(function mobileMenuToggle() {
	let menuBtn = document.getElementById('js-mobile-menu');
	let nav = document.getElementById('js-nav');
	menuBtn.onclick = (e) => {
		e.preventDefault();
		nav.classList.toggle('header-nav--active');
	}
})();