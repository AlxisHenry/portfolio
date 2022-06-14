const ArrowEvent = (to) => {
    const arrow = document.querySelector('.arrow-container')

    arrow.addEventListener('click', () => {
        window.scroll({
            top: to,
            behavior: 'smooth'
        });
    })
}

module.exports = {
    ArrowEvent: ArrowEvent
}