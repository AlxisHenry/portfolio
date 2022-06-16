const CountContactAreaLength = () => {
    // todo => Update animation / Block the user if he dom element
    const textArea = document.querySelector('.area-text-form')
    const keyCount = document.querySelector(".container-length-indicator .length-indicator .indicator .on")
    const limit = document.querySelector(".container-length-indicator .length-indicator .indicator .limit")

    textArea.addEventListener('keyup', () => {
        let count = textArea.value.length
        keyCount.innerHTML = count.toLocaleString()

        if (parseInt(count) > parseInt(limit.innerHTML)) {
            keyCount.style.color = "#F2C166"
        }

    })
}

module.exports = {
    CountContactAreaLength: CountContactAreaLength
}