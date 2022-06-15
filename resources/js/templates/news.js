import {InputAnimation} from "../components/about";

const RedirectToKeyword = () => {

    let submitSearch = document.querySelector('.__submit__search__')
    let submitValue = document.querySelector('.__search__input__')

    submitValue.addEventListener('keyup', (e) => {
        if (e.keyCode === 13) {
            if (e.target.value.length > 3) {
                submitSearch.click()
            }
        } else {
            e.preventDefault()
        }
    })

    submitSearch.addEventListener('click', (e) => {
        let value = submitValue.value
        if (value.length > 3) {
            document.location.href = `/news/word/${value.toLowerCase()}`
        } else {
            e.preventDefault()
        }
    })

}

window.addEventListener('load', (e) => {
    InputAnimation(e)
    RedirectToKeyword(e)
})