// import * as flsFunctions from './modules/isWebp.js';

// flsFunctions.isWebp();

import isWebp from './modules/isWebp.js';
import setActiveClass from './modules/setActiveClass.js';
import showMenu from './modules/showMenu.js';

import initFaqTabs from './modules/initFaqTabs.js';
document.addEventListener('DOMContentLoaded', () => {
    isWebp();
    showMenu();
    setActiveClass();
    initFaqTabs();

});
