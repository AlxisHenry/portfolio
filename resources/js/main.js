const elementInViewport = (el) => {
    let top = el.offsetTop;
    let left = el.offsetLeft;
    let width = el.offsetWidth;
    let height = el.offsetHeight;

    while(el.offsetParent) {
        el = el.offsetParent;
        top += el.offsetTop;
        left += el.offsetLeft;
    }

    return (
        top >= window.scrollY &&
        left >= window.scrollY &&
        (top + height) <= (window.scrollY + window.innerHeight) &&
        (left + width) <= (window.scrollY + window.innerWidth)
    );
}

module.exports = {
    inViewport: elementInViewport
}