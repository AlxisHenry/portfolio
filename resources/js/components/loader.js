
export const RemoveLoader = () => {
    // Scroll to top
    window.scrollTo({
        top: 0,
    });
    // Hide loader
    const loader = document.querySelector('.loader')
    const body = document.querySelector('body')
    loader.classList.add('disabled')
    setTimeout(() => {
        loader.style.display = 'none'
    }, 375)
    body.classList.remove('loader-body')
}
