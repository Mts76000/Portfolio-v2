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

  if (!isDeleting && charIndex < currentWord.length) {
    charIndex++;
    setTimeout(typeEffect, 150);
  } else if (isDeleting && charIndex > 0) {
    charIndex--;
    setTimeout(typeEffect, 100);
  } else {
    isDeleting = !isDeleting;
    if (!isDeleting) {
      wordIndex = (wordIndex + 1) % words.length;
    }
    dynamicText.classList.toggle("stop-blinking", !isDeleting);
    setTimeout(typeEffect, 1500);
  }
};

typeEffect();




gsap.registerPlugin(ScrollToPlugin, ScrollTrigger);

/* Main navigation */
let panelsSection = document.querySelector("#work"),
    panelsContainer = document.querySelector("#panels-container"),
    tween;
document.querySelectorAll(".anchor").forEach(anchor => {
    anchor.addEventListener("click", function(e) {
        e.preventDefault();
        let targetElem = document.querySelector(e.target.getAttribute("href")),
            y = targetElem;
        if (targetElem && panelsContainer.isSameNode(targetElem.parentElement)) {
            let totalScroll = tween.scrollTrigger.end - tween.scrollTrigger.start,
                totalMovement = (panels.length - 1) * targetElem.offsetWidth;
            y = Math.round(tween.scrollTrigger.start + (targetElem.offsetLeft / totalMovement) * totalScroll);
        }
        gsap.to(window, {
            scrollTo: {
                y: y,
                autoKill: false
            },
            duration: 1
        });
    });
});

/* Panels */
const panels = gsap.utils.toArray("#panels-container .panel");
tween = gsap.to(panels, {
    xPercent: -100 * (panels.length - 1),
    ease: "none",
    scrollTrigger: {
        trigger: "#panels-container",
        pin: true,
        start: "top top",
        scrub: 1,
        snap: {
            snapTo: 1 / (panels.length - 1),
            inertia: false,
            duration: {
                min: 0.1,
                max: 0.1
            }
        },
        end: () => "+=" + (panelsContainer.offsetWidth - innerWidth)
    }
});



// smooth link 
 // Fonction de défilement lisse personnalisée
 function smoothScroll(target, duration) {
  let targetPosition = target.getBoundingClientRect().top + window.pageYOffset;
  let startPosition = window.pageYOffset;
  let startTime = null;

  function animation(currentTime) {
      if (startTime === null) startTime = currentTime;
      let timeElapsed = currentTime - startTime;
      let run = ease(timeElapsed, startPosition, targetPosition - startPosition, duration);
      window.scrollTo(0, run);
      if (timeElapsed < duration) requestAnimationFrame(animation);
  }

  function ease(t, b, c, d) {
      t /= d / 2;
      if (t < 1) return c / 2 * t * t + b;
      t--;
      return -c / 2 * (t * (t - 2) - 1) + b;
  }

  requestAnimationFrame(animation);
}

// Ajoutez un écouteur d'événements aux liens
document.querySelectorAll('.smooth-link').forEach(link => {
  link.addEventListener('click', function(event) {
      event.preventDefault();
      const targetId = this.getAttribute('href').substring(1);
      const targetElement = document.getElementById(targetId);

      if (targetElement) {
          smoothScroll(targetElement, 500); // 1000 ms pour une transition plus lente
      }
  });
});



