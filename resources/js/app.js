function toggleNav() {

const button = document.querySelector('.burger-button')
const primaryElement = document.querySelector('.primary-navbar')

if (button) {
        button.addEventListener('click', (e) => {
            button.classList.toggle('is-active')
            if (primaryElement){
                if ((!primaryElement.classList.contains('primaryAnimation'))) {
                    primaryElement.classList.remove('primaryReverseAnimation')
                    primaryElement.classList.add('primaryAnimation')
                } else {
                    primaryElement.classList.add('primaryReverseAnimation')
                    primaryElement.classList.remove('primaryAnimation')
                }
            }
            e.preventDefault()

        }, false)
    }
}

function HoverNavbarMenu() {

    const NavTitle = document.querySelectorAll('.primary-navbar a .nav-content .nav-title:not(.nav-active)')

    if (NavTitle) {

        NavTitle.forEach(__NavTitle =>
            __NavTitle.addEventListener('mouseover', () => {

                const LoadingBar = __NavTitle.parentNode.children[1]

                LoadingBar.classList.remove('loading__navbar_animation_down')
                LoadingBar.classList.add('loading__navbar_animation_up')

            }))

        NavTitle.forEach(__NavTitle =>
            __NavTitle.addEventListener('mouseout', () => {

                const LoadingBar = __NavTitle.parentNode.children[1]

                LoadingBar.classList.add('loading__navbar_animation_down')

            }))

    }

}

toggleNav()
HoverNavbarMenu()
