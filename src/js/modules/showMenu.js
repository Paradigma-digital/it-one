const showMenu = () => {
    const trigger = document.querySelector('.humburger'), 
          menu    = document.querySelector('.header__nav'),
          menuItems = document.querySelectorAll('.header__nav_item > a');


    trigger.addEventListener('click', () => {
        if(trigger.classList.contains('close')) {
            trigger.classList.remove('close');
            menu.style.opacity = '';
            menu.style.visibility = '';
            document.body.style.overflow = 'hidden';
        } else {
            trigger.classList.add('close');
            menu.style.opacity = '1';
            menu.style.visibility = 'visible';
            document.body.style.overflow = 'hidden';
        }
    });

    menuItems.forEach(item => {
        item.addEventListener('click', () => {
            trigger.classList.remove('close');
            menu.style.opacity = '';
            menu.style.visibility = '';
            document.body.style.overflow = 'hidden';
        })  
    })

    

}

export default showMenu;