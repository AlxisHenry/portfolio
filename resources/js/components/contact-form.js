export const CountContactAreaLength = () => {
  const textArea = document.querySelector(".area-text-form");
  const keyCount = document.querySelector(
    ".container-length-indicator .length-indicator .indicator .on"
  );
  const limit = document.querySelector(
    ".container-length-indicator .length-indicator .indicator .limit"
  );
  if (!textArea || !keyCount || !limit) {
    return;
  }
  textArea.addEventListener("keyup", () => {
    let count = textArea.value.length;
    keyCount.innerHTML = count.toLocaleString();

    if (parseInt(count) > parseInt(limit.innerHTML)) {
      keyCount.style.color = "#F2C166";
    }
  });
};
export const CheckControllerScrollReturn = (
  to = document.querySelector("#__ContactForm")
) => {
  console.log("Get Item");
  if (localStorage.getItem("scroll")) {
    let scroll = localStorage.getItem("scroll");
    localStorage.removeItem("scroll");
    if (scroll) {
      console.log("SCROLL");
      window.scrollTo({
        top: to.offsetTop - 25,
      });
    }
  }
};
