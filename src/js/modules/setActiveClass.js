
const setActiveClass = () => {
    document.addEventListener('scroll', () => {
        const navLinks = document.querySelectorAll('.header__nav_item > a'),
              sections = document.querySelectorAll('[id]');
              sections[1].getBoundingClientRect().y

        sections.forEach(item => {
            let id = item.getAttribute('id');
            if(item.getBoundingClientRect().bottom > 100 && item.getBoundingClientRect().y < 50) {
                if(id && id !== '') {
                    console.log(id);

                    navLinks.forEach(a => {
                        if ( a.getAttribute('href') === `#${id}`) {
                            a.classList.add('active')
                        } else {
                            a.classList.remove('active')
                        }
                    });

                    
                }
            } else {
                navLinks.forEach(a => {
                    if ( a.getAttribute('href') === `#${id}`) {
                        a.classList.remove('active')
                    } 
                });
            }
        })



    }) 
}

export default setActiveClass;