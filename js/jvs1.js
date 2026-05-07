/* ========================= */
/* SIDEBAR LINKS */
/* ========================= */

const sidebarLinks =
document.querySelectorAll('.sidebar-box a');

const sections =
document.querySelectorAll('.article-section');

/* ========================= */
/* SMOOTH SCROLL */
/* ========================= */

sidebarLinks.forEach(link => {

  link.addEventListener('click', e => {

    e.preventDefault();

    const targetId =
    link.getAttribute('href');

    const targetSection =
    document.querySelector(targetId);

    if(targetSection){

      window.scrollTo({

        top:
        targetSection.offsetTop - 40,

        behavior:'smooth'

      });

    }

  });

});

/* ========================= */
/* ACTIVE SIDEBAR */
/* ========================= */

window.addEventListener('scroll', () => {

  let currentSection = '';

  sections.forEach(section => {

    const sectionTop =
    section.offsetTop - 220;

    const sectionHeight =
    section.clientHeight;

    if(
      pageYOffset >= sectionTop &&
      pageYOffset <
      sectionTop + sectionHeight
    ){

      currentSection =
      section.getAttribute('id');

    }

  });

  sidebarLinks.forEach(link => {

    link.classList.remove('active');

    if(
      link.getAttribute('href')
      === `#${currentSection}`
    ){

      link.classList.add('active');

    }

  });

});

/* ========================= */
/* SCROLL ANIMATION */
/* ========================= */

const observer =
new IntersectionObserver(entries => {

  entries.forEach(entry => {

    if(entry.isIntersecting){

      entry.target.classList.add('show');

    }

  });

},{
  threshold:0.15
});

sections.forEach(section => {

  section.classList.add('hidden');

  observer.observe(section);

});

/* ========================= */
/* IMAGE PARALLAX */
/* ========================= */

const images =
document.querySelectorAll(
'.full-img, .image-grid img'
);

window.addEventListener('scroll', () => {

  const scrollY =
  window.scrollY;

  images.forEach(img => {

    const speed = 0.02;

    img.style.transform =
    `translateY(${scrollY * speed}px)`;

  });

});

/* ========================= */
/* HEADER SHADOW */
/* ========================= */

const header =
document.querySelector('.header');

window.addEventListener('scroll', () => {

  if(window.scrollY > 20){

    header.style.boxShadow =
    '0 10px 30px rgba(0,0,0,0.06)';

  }else{

    header.style.boxShadow =
    'none';

  }

});