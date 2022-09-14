const hero = document.querySelector('.hero-image');
const cta = document.querySelector('.cta');

const tl = new TimelineMax();


tl.fromTo(hero, 1.2, { width: '0%' }, { width: '100%', ease: Power2.easeInOut })
    .fromTo(cta, 1.2, { width: '0%' }, { width: '100%' }, "-=1.2");


