console.log('App js')


function toggleNav() {

const button = document.querySelector('.burger-button')
const element = document.querySelector('.menu-navigation')

if (button) {
        button.addEventListener('click', (e) => {
            button.classList.toggle('is-active')
            if (element){
                if (!element.classList.contains('nav-up-animation')) {
                    element.classList.remove('nav-down-animation')
                    element.classList.add('nav-up-animation')
                } else {
                    element.classList.remove('nav-up-animation')
                    element.classList.add('nav-down-animation')
                }
            }
            e.preventDefault()

        }, false)
    }
}

toggleNav()

