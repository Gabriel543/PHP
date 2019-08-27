detectResize();

function detectResize(){
    var w = window;
    d = document;
    e = d.documentElement;
    g = d.getElementsByTagName('body')[0];
    x = w.innerWidth || e.clientWidth || g.clientWidth;
    backpos = 575 - x; 
    getComputedStyle(document.documentElement).getPropertyValue('--grid-size-extra-small');
    document.documentElement.style.setProperty('--grid-size-extra-small', String(x - 30) + 'px');
    getComputedStyle(document.documentElement).getPropertyValue('--grid-size-extra-small');
    document.documentElement.style.setProperty('--background-position', String( -backpos - 450) + 'px');
}