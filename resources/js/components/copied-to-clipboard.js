const toClipboard = (textToCopy) => {

    // The Clipboard API is only existing with HTTPS
    if (navigator.clipboard && window.isSecureContext) return navigator.clipboard.writeText(textToCopy)

    // The solution is to make a textarea with the data to copy to clipboard
    let textArea = document.createElement("textarea");
    textArea.value = textToCopy;
    textArea.style.position = "fixed";
    textArea.style.left = "-999999px";
    textArea.style.top = "-999999px";
    document.body.appendChild(textArea);
    textArea.focus();
    textArea.select();
    return new Promise((res, rej) => {
        document.execCommand('copy') ? res() : rej();
        textArea.remove();
    });

}

const CopyToClipboard = () => {

    const copyThis = Array.from(document.querySelectorAll('.copy-this'))
    console.log(copyThis)

    if (!copyThis) {
        return
    }

    copyThis.forEach((copy) => {

        copy.addEventListener('mouseenter', () => {
            document.querySelector('.click-to-copy-indicator').classList.remove('invisible')
        })

        copy.addEventListener('mouseleave', () => {
            document.querySelector('.click-to-copy-indicator').classList.add('invisible')
        })

        copy.addEventListener('contextmenu', (e) => {
            e.preventDefault()
            let valueToCopy = e.target.innerHTML
            console.log(valueToCopy)
            if (!valueToCopy) return
            if(toClipboard(valueToCopy)) {
                let indicator = document.querySelector('.pop-up-container')
                indicator.classList.remove('hidden')
                setTimeout(() => {
                    indicator.classList.add('reverse-animation')
                    setTimeout(() => {
                        indicator.classList.remove('reverse-animation')
                        indicator.classList.add('hidden')
                    }, 600)
                }, 1725)
            }

        })
    })
}

module.exports = {
    CopyToClipboard: CopyToClipboard
}

