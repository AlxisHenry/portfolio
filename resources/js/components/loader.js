
export const RemoveLoader = () => {
    // Hide loader
    const loader = document.querySelector('.loader')
    const body = document.querySelector('body')
    loader.classList.add('disabled')
    setTimeout(() => {
        loader.style.display = 'none'
    }, 375)
    body.classList.remove('loader-body')
}
