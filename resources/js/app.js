function toggleNav() {

const burgerButton = document.querySelector('.burger-button')
const burgerElement = document.querySelector('.burger-element')

if (burgerButton) {
        burgerButton.addEventListener('click', (e) => {
            burgerButton.classList.toggle('is-active')
            if (burgerElement){
                if ((!burgerElement.classList.contains('NavbarUpAnimation'))) {
                    burgerElement.classList.remove('NavbarReverseAnimation')
                    burgerElement.classList.add('NavbarUpAnimation')
                    document.querySelector('body').style.overflowY = 'hidden'
                } else {
                    burgerElement.classList.add('NavbarReverseAnimation')
                    burgerElement.classList.remove('NavbarUpAnimation')
                    document.querySelector('body').style.overflowY = 'scroll'
                }
            }
            e.preventDefault()

        }, false)
    }
}

function HoverNavbarMenu() {

    const NavTitle = document.querySelectorAll('.burger-element a:not(.nav-active)')

    if (NavTitle) {

        NavTitle.forEach(__NavTitle =>
            __NavTitle.addEventListener('mouseover', () => {

                const LoadingBar = __NavTitle.children[0].children[1]

                LoadingBar.classList.remove('loading__navbar_animation_down')
                LoadingBar.classList.add('loading__navbar_animation_up')

            }))

        NavTitle.forEach(__NavTitle =>
            __NavTitle.addEventListener('mouseout', () => {

                const LoadingBar = __NavTitle.children[0].children[1]

                LoadingBar.classList.add('loading__navbar_animation_down')

            }))

    }
}

toggleNav()
HoverNavbarMenu()
