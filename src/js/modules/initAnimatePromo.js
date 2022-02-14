const initAnimatePromo = () => {
    document.querySelector('.promo__systemic_spans').animate([
        // keyframes
        { transform: 'translate3D(0, 0, 0)' },
        { transform: 'translate3D(-100%, 0, 0)' }
      ], {
        // timing options
        duration: 3000,
        iterations: Infinity
      })
}

export default initAnimatePromo;