console.log('App js')


function toggleNav() {

const button = document.querySelector('.burger-button')
const primaryElement = document.querySelector('.primary-navbar')
const secondaryElement = document.querySelector('.secondary-navbar')

if (button) {
        button.addEventListener('click', (e) => {
            button.classList.toggle('is-active')
            if (primaryElement && secondaryElement){
                if ((!primaryElement.classList.contains('primaryAnimation')) && (!secondaryElement.classList.contains('secondaryAnimation'))) {
                    primaryElement.classList.remove('primaryReverseAnimation')
                    secondaryElement.classList.remove('secondaryReverseAnimation')
                    primaryElement.classList.add('primaryAnimation')
                    secondaryElement.classList.add('secondaryAnimation')
                } else {
                    primaryElement.classList.add('primaryReverseAnimation')
                    secondaryElement.classList.add('secondaryReverseAnimation')
                    primaryElement.classList.remove('primaryAnimation')
                    secondaryElement.classList.remove('secondaryAnimation')
                }
            }
            e.preventDefault()

        }, false)
    }
}

toggleNav()

