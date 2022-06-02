const BackToTopArrow = (status) => {
    // Back to top arrow
    if (status) {
        // Test if the user is on presentation section at the loading of the page
        if(document.documentElement.scrollTop < 350) {
            console.log(status, "Presentation section")
            status = false
            console.log("new status", status)
            return
        }
    }

    const Arrow = document.querySelector('.to-top-arrow')

    Arrow.addEventListener('click', () => {
        // Scroll to the top of the page when user click on the button
        window.scroll({
            top: 0,
            behavior: 'smooth'
        });
    })

    // Animation for show/hide the button
    if(document.documentElement.scrollTop > 350) {
        Arrow.classList.remove('hidden')
        Arrow.classList.remove('reverse-animation')
    } else {
        Arrow.classList.add('reverse-animation')
    }

}

module.exports = {
    BackToTopArrow: BackToTopArrow
}