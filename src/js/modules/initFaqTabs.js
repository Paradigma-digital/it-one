const initFaqTabs = () => {
    const faqItems = document.querySelectorAll('.faq__item');

    if(faqItems.length > 0) {
        faqItems.forEach(item => {
            item.querySelector('.faq__item_text').style.display = 'none';
            item.addEventListener('click', () => {
                // faqItems.forEach(item => {
                //     item.querySelector('.faq__item_text').style.display = 'none';
                // });
                if(item.classList.contains('open')) {
                    faqItems.forEach(item => {
                        item.classList.remove('open');
                        item.querySelector('.faq__item_text').style.display = 'none';
                    });
                    item.classList.remove('open');
                    item.querySelector('.faq__item_btn').nextElementSibling.style.display = 'none';
                } else {
                    faqItems.forEach(item => {
                        item.classList.remove('open');
                        item.querySelector('.faq__item_text').style.display = 'none';
                    });
                    item.classList.add('open');
                    item.querySelector('.faq__item_btn').nextElementSibling.style.display = 'block';
                }

            });
        })
    }
}

export default initFaqTabs;