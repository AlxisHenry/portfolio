export const ScrollToContact = (to) => {
  let Scrolls = document.querySelectorAll(".to-contact-form");
  Scrolls.forEach((ScrollToContact) => {
    ScrollToContact.addEventListener("click", () => {
      console.log("scroll to form", to);
      window.scrollTo({
        top: to,
        behavior: "smooth",
      });
    });
  });
};
