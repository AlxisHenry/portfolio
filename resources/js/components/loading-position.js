export const LoadingPosition = (e) => {
  // Load scrollbar on the left of the page
  const LoadingIndicator = document.querySelector(".__scrollbar__indicator__");
  const TotalHeight = document.body.offsetHeight;
  const PassedHeight = Math.round(window.scrollY + window.innerHeight);
  const LoadingState = Math.round((PassedHeight / TotalHeight) * 100);
  LoadingIndicator.style.height = LoadingState + "%";
};
