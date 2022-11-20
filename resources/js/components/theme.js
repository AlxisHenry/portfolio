const switcher = document.querySelector(".__theme__main__");
const indicator = switcher.children[0];
const themes = {
  light: 'light',
  dark: 'dark'
}

export const themeInitialization = () => { 
  const lastSavedTheme = localStorage.getItem('theme')
  if (lastSavedTheme) {
    if (!(lastSavedTheme in themes)) {
      store(themes.light)
      return
    }
    let nextTheme = lastSavedTheme === themes.dark ? themes.light : themes.dark
    switcher.id = lastSavedTheme
    indicator.dataset.theme = lastSavedTheme
    indicator.dataset.next = nextTheme
    indicator.src = indicator.src.replace(filename(indicator), lastSavedTheme);
    document.body.dataset.theme = lastSavedTheme
  }
}

export const themeSwitcher = () => {
  if (switcher) {
    switcher.addEventListener("click", () => {
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
    });
  }
};

const filename = (_) => {
  return _.src.split('/').pop().split('.').shift()
}

const store = (theme) => {
  localStorage.setItem('theme', theme)
}