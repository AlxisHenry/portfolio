import {InputAnimation} from "../components/about";

const CheckLocalStorageWord = () => {
    // Redirect user to last research
    if (!localStorage.getItem('word')) {
        console.log('Not redirected to any word')
        return false
    }
    let word = localStorage.getItem('word')
    let location = document.location.href
    if (!location.includes('/news/word/' + word.toLowerCase())) {
        document.location.href = `/news/word/${(word.toLocaleString()).toLowerCase()}`
    }
}

const RedirectToKeyword = () => {

    let submitSearch = document.querySelector('.__submit__search__')
    let submitValue = document.querySelector('.__search__input__')

    submitValue.addEventListener('keyup', (e) => {
        if (e.keyCode === 13) {
            if (e.target.value.length > 2) {
                submitSearch.click()
            }
        } else {
            e.preventDefault()
        }
    })

    submitSearch.addEventListener('click', (e) => {
        let value = submitValue.value
        if (value.length > 2) {
            console.log('Store to localstorage')
            localStorage.setItem('word',value)
            document.location.href = `/news/word/${value.toLowerCase()}`
        } else {
            e.preventDefault()
        }
    })

}

const InitLastKeyword = () => {

    if (localStorage.getItem('word')) {

        let word = localStorage.getItem('word')
        console.log('1:' + word)
        if ((word.toLocaleString()).length > 2) {
            console.log('2: ' + word)
            let submitValue = document.querySelector('.__search__input__')
            submitValue.value = word
        }

    }

    const Show_All = document.querySelector('.show_all a')

    Show_All.addEventListener('click', () => {
        localStorage.removeItem('word')
    })

}

window.addEventListener('load', (e) => {
    CheckLocalStorageWord()
    InputAnimation(e)
    RedirectToKeyword(e)
    InitLastKeyword()
})