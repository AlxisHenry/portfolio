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

toggleNav()

