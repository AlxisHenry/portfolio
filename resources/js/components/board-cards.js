const BoardCardsAnimation = () => {

    const BoardCards = document.querySelectorAll('.__documentation__card__download__')

    BoardCards.forEach((Card) => {

        const AnimationBar = Card.children[0].children[1].children[0];

        Card.addEventListener('click', () => {
            AnimationBar.classList.remove('up-animation')
            AnimationBar.classList.add('up-animation')

            setTimeout(() => {
                AnimationBar.classList.remove('up-animation')
            }, 2200)

        })

    })

}

module.exports = {
    BoardCardsAnimation: BoardCardsAnimation,
}