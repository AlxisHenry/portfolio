export const AboutAnimation = (e) => {
  // Animation on about button of cards
  const AboutButton = document.querySelectorAll("._up_project_ ");
  if (AboutButton) {
    AboutButton.forEach((Button) =>
      Button.classList.add("__arrow__animation__about__button__")
    );
    AboutButton.forEach((Button) =>
      Button.addEventListener("mouseover", (e) => {
        let LoadTarget = e.target.classList.contains("__arrow__left__")
          ? e.target.parentNode.parentNode.parentNode.children[1]
          : e.target.parentNode.parentNode.children[1];
        LoadTarget.classList.remove("__reverse__");
        LoadTarget.classList.add("__load__");
      })
    );
    AboutButton.forEach((Button) =>
      Button.addEventListener("mouseout", (e) => {
        let LoadTarget = e.target.classList.contains("__arrow__left__")
          ? e.target.parentNode.parentNode.parentNode.children[1]
          : e.target.parentNode.parentNode.children[1];
        LoadTarget.classList.add("__reverse__");
      })
    );
  }
};
