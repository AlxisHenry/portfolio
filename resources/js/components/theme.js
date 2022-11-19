export const Themes = () => {
  // Swap themes with navbar icons
  const SwapThemeElement = document.querySelector(".__theme__main__");
  const Theme = SwapThemeElement.children[0];
  if (SwapThemeElement) {
    SwapThemeElement.addEventListener("click", () => {
      if (Theme) {
        const ActualTheme = SwapThemeElement.id;
        const SwapTo = Theme.dataset.next;
        SwapThemeElement.id = SwapTo.toLowerCase();
        Theme.id = SwapTo.toLowerCase();
        Theme.title = SwapTo;
        Theme.alt = SwapTo;
        Theme.dataset.next = ActualTheme;
        Theme.src = Theme.src.replace(ActualTheme, SwapTo.toLowerCase());
      }
    });
  }
};
