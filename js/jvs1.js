/* SIDEBAR */

const sidebarLinks =
document.querySelectorAll('.sidebar-box a');

const sections =
document.querySelectorAll('.article-section');

/* SMOOTH SCROLL */

sidebarLinks.forEach(link => {

  link.addEventListener('click', e => {

    e.preventDefault();

    const id =
    link.getAttribute('href');

    const target =
    document.querySelector(id);

    window.scrollTo({

      top: target.offsetTop - 40,

      behavior:'smooth'

    });

  });

});

/* ACTIVE LINK */

window.addEventListener('scroll', () => {

  let current = '';

  sections.forEach(section => {

    const sectionTop =
    section.offsetTop - 220;

    if(pageYOffset >= sectionTop){

      current =
      section.getAttribute('id');

    }

  });

  sidebarLinks.forEach(link => {

    link.classList.remove('active');

    if(
      link.getAttribute('href')
      === `#${current}`
    ){

      link.classList.add('active');

    }

  });

});

/* SCROLL ANIMATION */

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

/* HEADER SHADOW */

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