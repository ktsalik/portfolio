// copy email popup
let menuMailEl = document.querySelector('.menu__contact-info-mail');
let menuMailPopup = document.querySelector('.menu__contact-info-mail-popup');
let positionMenuMailPopup = function() {
  let mailPos = menuMailEl.getBoundingClientRect();
  menuMailPopup.style.top = mailPos.top - mailPos.height + 15 + 'px';
  menuMailPopup.style.left = mailPos.left + 15 + 'px';
};
menuMailEl.addEventListener('mouseover', function() {
  positionMenuMailPopup();
  menuMailPopup.style.display = 'block';
});
menuMailEl.addEventListener('mouseout', function() {
  menuMailPopup.style.display = 'none';
});
menuMailPopup.addEventListener('mouseover', function() {
  positionMenuMailPopup();
  menuMailPopup.style.display = 'block';
});
menuMailPopup.addEventListener('mouseout', function() {
  menuMailPopup.style.display = 'none';
});
document.addEventListener('copy', function(e) {
  let menuMailPopupIsVisible = getComputedStyle(menuMailPopup).display == 'block';
  if (menuMailPopupIsVisible) {
    let isIe = (navigator.userAgent.toLowerCase().indexOf("msie")    != -1 ||
                navigator.userAgent.toLowerCase().indexOf("trident") != -1);
    if (isIe) {
        window.clipboardData.setData('Text', menuMailEl.innerText);
    } else {
        e.clipboardData.setData('text/plain', menuMailEl.innerText);
    }
    e.preventDefault();
    menuMailPopup.style.display = 'none';
  }
});

// website scroll behavior
let menuChapterOptions = document.querySelectorAll('.menu__chapter-option');
for (let i = 0; i < menuChapterOptions.length; i++) {
  menuChapterOptions[i].addEventListener('click', function() {
    let chapterEl = document.querySelector('.' + menuChapterOptions[i].getAttribute('data-chapter') + '.chapter');
    setTimeout(() => {
      chapterEl.scrollIntoView({
        behavior: 'smooth',
        block: 'center',
        inline: 'start',
      });
    });
    document.querySelector('.btn-toggle-menu').classList.remove('open');
    document.querySelector('.menu').classList.remove('open');
    document.querySelector('.chapters').classList.remove('close');
  });
}
window.addEventListener('scroll', function() {
  let chapterInView = null;
  let menuChapterOptionActive = null;
  for (let i = 0; i < menuChapterOptions.length; i++) {
    let chapterEl = document.querySelector('.' + menuChapterOptions[i].getAttribute('data-chapter') + '.chapter');
    if (window.scrollY >= chapterEl.offsetTop) {
      chapterInView = chapterEl;
      menuChapterOptionActive = menuChapterOptions[i];
    } else {
      break;
    }
  }
  for (let i = 0; i < menuChapterOptions.length; i++) {
    menuChapterOptions[i].classList.remove('active');
  }
  menuChapterOptionActive.classList.add('active');
});

// mobile menu
document.querySelector('.btn-toggle-menu').addEventListener('click', function() {
  this.classList.toggle('open');
  document.querySelector('.menu').classList.toggle('open');
  document.querySelector('.chapters').classList.toggle('close');
});