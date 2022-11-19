export const ProjectInformations = (e) => {
  // Show Projects Cards Information
  const ProjectCards = document.querySelectorAll("._project_image_");
  const AboutProjectCard = document.querySelectorAll("._project_content_");
  if (ProjectCards) {
    ProjectCards.forEach((Cards) =>
      Cards.addEventListener("mouseenter", (e) => {
        const ProjectContent = e.target.src
          ? e.target.parentNode.parentNode.children[1]
          : e.target.parentNode.children[1];
        ProjectContent.classList.remove("hide");
        ProjectContent.classList.add("show");
      })
    );
  }
  if (AboutProjectCard) {
    AboutProjectCard.forEach((Cards) =>
      Cards.addEventListener("mouseleave", (e) => {
        const ProjectContent = e.target.src
          ? e.target.parentNode.parentNode.children[1]
          : e.target.parentNode.children[1];
        ProjectContent.classList.remove("show");
        ProjectContent.classList.add("hide");
      })
    );
  }
};
