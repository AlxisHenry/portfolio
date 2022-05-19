const ExtendsAnimationClass =  '__element__navbar__extends__'
const ReverseExtendsAnimationClass = '__reverse__element__navbar__extends__'
const ExtendsNavbar = 'NavbarUpAnimation'
const ReverseExtendsNavbar = 'NavbarReverseAnimation'
const Button = document.querySelector('.burger-button')
const Navbar = document.querySelector('.burger-element')
const ElementToMoveDuringExtends = [
    document.querySelector('.__presentation__'),
    document.querySelector('.__about__card__'),
    document.querySelector('#__spoilerProjects'),
    document.querySelector('#__spoilerCards'),
    document.querySelector('.__main__projects__')
]

const ButtonAction = () => {
    if (!Button || !Navbar) { return false }
    Button.addEventListener('click', (e) => {
        Button.classList.toggle('is-active')
        if (Navbar.classList.length === 1) {
            Navbar.classList.add(ExtendsNavbar)
        } else {
            Navbar.classList.toggle(ReverseExtendsNavbar)
            Navbar.classList.toggle(ExtendsNavbar)
        }
    })
}

const NavbarAnimation = () => {
    if (!Button || !Navbar) { return false }
    Button.addEventListener('click', (e) => {
        if (window.innerWidth > 1500) {
            if (Navbar.classList.contains(ExtendsNavbar)) {
                ElementToMoveDuringExtends.forEach((Element) => {
                    if(Element) {
                        Element.classList.remove(ReverseExtendsAnimationClass)
                        Element.classList.add(ExtendsAnimationClass)
                    }
                })
            } else {
                ElementToMoveDuringExtends.forEach((Element) => {
                    if(Element) {
                        Element.classList.remove(ExtendsAnimationClass)
                        Element.classList.add(ReverseExtendsAnimationClass)
                    }
                })
            }
        }
    })
}

const ResizeNavAnimation = () => {
    if (!Button || !Navbar) { return false }
    ElementToMoveDuringExtends.forEach((Element) => {
        if (window.innerWidth <= 1500) {
            if(Element) {
                Element.classList.remove(ExtendsAnimationClass)
                Element.classList.remove(ReverseExtendsAnimationClass)
            }
        } else if (Navbar.classList.contains('NavbarUpAnimation')) {
            if(Element) {
                Element.classList.add(ExtendsAnimationClass)
            }
        }
    })
}

const HoverNavbarMenu = () => {

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

module.exports = {
    Button: ButtonAction,
    Animation: NavbarAnimation,
    Resize: ResizeNavAnimation,
    Hover: HoverNavbarMenu
}