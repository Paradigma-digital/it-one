// const isContainerMargin = document.querySelector('.promo .container'),
//       overflowElement = document.querySelectorAll('.promo__series');

//   function marginElement(elem, elem2) {
//     let a = elem.getBoundingClientRect().left;
//     elem2.forEach(i=> {
//         i.style.paddingLeft = `${a}px`;
//         if (a === 0) {
//             i.style.paddingLeft = `15px`
//         }
//     });
    
//   };
//   marginElement(isContainerMargin, overflowElement);

//   window.addEventListener('resize', ()=> {
//     marginElement(isContainerMargin, overflowElement);
//   })





  
let scrollpos = window.scrollY

const header = document.querySelector("header")
const scrollChange = 1

const add_class_on_scroll = () => header.classList.add("bg-black")
const remove_class_on_scroll = () => header.classList.remove("bg-black")

if (scrollpos > 10) {
    add_class_on_scroll()
}

window.addEventListener('scroll', function() { 
  scrollpos = window.scrollY;

  if (scrollpos >= scrollChange) { add_class_on_scroll() }
  else { remove_class_on_scroll() }
  
})
