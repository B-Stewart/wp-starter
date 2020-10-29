import { debounce } from "../../utilities";

export const useViewportWidth = () => {
  addScrollbarWidthVariable();
  // jQuery(window).resize(debounce(addScrollbarWidthVariable, 250));
};

const addScrollbarWidthVariable = () => {
  const width = window.innerWidth - jQuery("body").width();
  document.body.style.setProperty("--scrollbar-width", width + "px");
};
