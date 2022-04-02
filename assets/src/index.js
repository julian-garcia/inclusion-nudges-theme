import "./style/main.scss";
import "normalize.css";
import "@splidejs/splide/dist/css/splide.min.css";
import "@splidejs/splide/dist/css/themes/splide-default.min.css";
import "@splidejs/splide/dist/js/splide.min.js";
import Splide from "@splidejs/splide";

if ("serviceWorker" in navigator) {
  window.addEventListener("load", () => {
    navigator.serviceWorker
      .register("/service-worker.js")
      .then((registration) => {
        console.log("SW registered: ", registration);
      })
      .catch((registrationError) => {
        console.log("SW registration failed: ", registrationError);
      });
  });
}

setTimeout(() => {
  const splideElement = document.querySelector(".splide");

  if (splideElement) {
    new Splide(".splide", {
      autoplay: true,
      interval: 10000,
      pauseOnHover: false,
      pauseOnFocus: false,
      arrows: true,
      rewind: true,
      pagination: true,
    }).mount();

    new Splide(".splide-questions", {
      autoplay: true,
      interval: 10000,
      pauseOnHover: false,
      pauseOnFocus: false,
      arrows: true,
      rewind: true,
      pagination: true,
    }).mount();
  }
});
