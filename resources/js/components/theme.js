const switcher = document.querySelector(".__theme__main__");
const indicator = switcher.children[0];

export const themeSwitcher = () => {
  switcher.addEventListener("click", _switch);
};

const _switch = () => {
  let themeState = {
    previous: indicator.dataset.theme,
    next: indicator.dataset.next,
  };
  switcher.id = themeState.next;
  indicator.dataset.theme = themeState.next;
  indicator.dataset.next = themeState.previous;
  indicator.src = indicator.src.replace(themeState.previous, themeState.next);
  document.body.dataset.theme = themeState.next;
  store(themeState.next);
};

const store = (theme) => {
  document.cookie = "theme=" + theme + ";path=/";
};
