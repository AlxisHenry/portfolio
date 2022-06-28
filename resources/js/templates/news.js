import {InputAnimation} from "../components/about";

const RedirectToKeyword = () => {

    let submitSearch = document.querySelector('.__submit__search__')
    let submitValue = document.querySelector('.__search__input__')

    const ShowPopup = (indicator) => {
        indicator.classList.remove('hidden')
        setTimeout(() => {
            indicator.classList.add('reverse-animation')
            setTimeout(() => {
                indicator.classList.remove('reverse-animation')
                indicator.classList.add('hidden')
            }, 600)
        }, 1025)
    }

    submitValue.addEventListener('keyup', (e) => {
        if (e.keyCode === 13) {
            if (e.target.value.length > 2) {
                submitSearch.click()
            } else {
                ShowPopup(document.querySelector('.pop-up-container'))
            }
        } else {
            e.preventDefault()
        }
    })

    submitSearch.addEventListener('click', (e) => {
        let value = submitValue.value
        if (value.length > 2) {
            document.location.href = `/news/word/${value.toLowerCase()}`
        } else {
            ShowPopup(document.querySelector('.pop-up-container'))
            e.preventDefault()
        }
    })

}

window.addEventListener('load', (e) => {
    InputAnimation(e)
    RedirectToKeyword(e)
})