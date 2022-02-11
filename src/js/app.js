// import * as flsFunctions from './modules/isWebp.js';

// flsFunctions.isWebp();

import isWebp from './modules/isWebp.js';


import initFaqTabs from './modules/initFaqTabs.js';
document.addEventListener('DOMContentLoaded', () => {
    isWebp();
    initFaqTabs();
});
