/* ========================= */
/* IMAGE HOVER EFFECT */
/* ========================= */

const images =
document.querySelectorAll(
'.full-img, .image-grid img, .city-card img'
);

images.forEach(img => {

  img.addEventListener('mouseenter', () => {

    img.style.transform =
    'scale(1.03)';

  });

  img.addEventListener('mouseleave', () => {

    img.style.transform =
    'scale(1)';

  });

});