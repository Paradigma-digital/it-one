// import * as flsFunctions from './modules/isWebp.js';

// flsFunctions.isWebp();

import WOW from 'wow.js';

import isWebp from './modules/isWebp.js';
import setActiveClass from './modules/setActiveClass.js';
import showMenu from './modules/showMenu.js';
import initAnimatePromo from './modules/initAnimatePromo.js';

import initFaqTabs from './modules/initFaqTabs.js';
document.addEventListener('DOMContentLoaded', () => {
    isWebp();
    showMenu();
    setActiveClass();

    new WOW().init();


    initFaqTabs();
    initAnimatePromo();

});
