// menu burger

const menu = document.querySelector("#link_burger");
const burger = document.querySelector("#nav_burger");
const close = document.querySelector(".close");
const home = document.querySelector(".home")
const skill = document.querySelector(".skill")
const work = document.querySelector(".work")
const contact = document.querySelector(".contact")

menu.addEventListener("click", (e) => {
  e.preventDefault();
  burger.classList.add("opened");
});

close.addEventListener("click", (e) => {
  e.preventDefault();
  burger.classList.remove("opened");
});

home.addEventListener("click", (e) => {
  burger.classList.remove("opened");
});
skill.addEventListener("click", (e) => {
  burger.classList.remove("opened");
});

work.addEventListener("click", (e) => {
  burger.classList.remove("opened");
});
contact.addEventListener("click", (e) => {
  burger.classList.remove("opened");
});

// changmement text

const dynamicText = document.querySelector("p span");
const words = ["développeur", "étudiant"];

// Variables to track the position and deletion status of the word
let wordIndex = 0;
let charIndex = 0;
let isDeleting = false;

const typeEffect = () => {
  const currentWord = words[wordIndex];
  const currentChar = currentWord.substring(0, charIndex);
  dynamicText.textContent = currentChar;
  dynamicText.classList.add("stop-blinking");

  if (!isDeleting && charIndex < currentWord.length) {
    charIndex++;
    setTimeout(typeEffect, 200);
  } else if (isDeleting && charIndex > 0) {
    charIndex--;
    setTimeout(typeEffect, 100);
  } else {
    isDeleting = !isDeleting;
    dynamicText.classList.remove("stop-blinking");
    wordIndex = !isDeleting ? (wordIndex + 1) % words.length : wordIndex;
    setTimeout(typeEffect, 1500);
  }
};

typeEffect();

gsap.registerPlugin(ScrollTrigger);

let sections = gsap.utils.toArray(".panel");

gsap.to(sections, {
  xPercent: -100 * (sections.length - 1),
  ease: "none",
  scrollTrigger: {
    trigger: ".full-content",
    pin: true,
    scrub: 1,
    snap: 1 / (sections.length - 1),
    // base vertical scrolling on how wide the container is so it feels more natural.
    end: "+=750",
  },
});

