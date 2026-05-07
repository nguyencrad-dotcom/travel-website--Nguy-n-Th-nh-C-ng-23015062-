/* smooth scroll */

const sidebarLinks =
  document.querySelectorAll('.sidebar-box a');

sidebarLinks.forEach(link => {

  link.addEventListener('click', e => {

    e.preventDefault();

    const targetId =
      link.getAttribute('href');

    const target =
      document.querySelector(targetId);

    window.scrollTo({

      top: target.offsetTop - 30,

      behavior: 'smooth'

    });

  });

});


/* active menu while scrolling */

const sections =
  document.querySelectorAll('.article-section');

window.addEventListener('scroll', () => {

  let current = '';

  sections.forEach(section => {

    const sectionTop =
      section.offsetTop - 200;

    const sectionHeight =
      section.clientHeight;

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


/* fade in animation */

const observer =
  new IntersectionObserver(entries => {

    entries.forEach(entry => {

      if(entry.isIntersecting){

        entry.target.classList.add('show');

      }

    });

  }, {
    threshold:0.15
  });


document
.querySelectorAll('.article-section')
.forEach(section => {

  section.classList.add('hidden');

  observer.observe(section);

});