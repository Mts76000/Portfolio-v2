

const theformulaire = document.querySelector("#theformulaire");
const titreform = document.querySelector(".titreform");
const b = document.querySelector(".b");
const btn = document.querySelector(".submit");
const span = document.querySelector(".error");
const span_nom = document.querySelector("#error_nom");
const span_prenom = document.querySelector("#error_prenom");
const span_messsage = document.querySelector("#error_message");
const span_email = document.querySelector("#error_email");
const form = document.querySelector(".form");

let params = new FormData();
params.append("action", "form");
async function addForm() {
  try {
    let response = await fetch(MYSCRIPT.ajaxUrl, {
      method: "post",
      body: params,
    });
    let data = await response.json();
    // console.log(data);

    if (data.success) {
      console.log("ok");
      theformulaire.style.display = "none";
      titreform.style.display = "none";

      form.style.height = "100%";
      form.style.display = "flex";
      form.style.flexDirection = "column";
      form.style.justifyContent = "space-between";

      const success = document.createElement("h3");
      success.innerHTML = "Your message has been sent";
      success.classList.add("success");
      b.appendChild(success);
    } else {
      span_nom.innerHTML = "";
      span_prenom.innerHTML = "";
      span_messsage.innerHTML = "";
      span_email.innerHTML = "";

      if (data.errors.email) {
        span_email.innerHTML = data.errors.email;
        span_email.style.display = "block";
      }

      if (data.errors.nom) {
        span_nom.innerHTML = data.errors.nom;
        span_nom.style.display = "block";
      }

      if (data.errors.prenom) {
        span_prenom.innerHTML = data.errors.prenom;
        span_prenom.style.display = "block";
      }

      if (data.errors.message) {
        span_messsage.innerHTML = data.errors.message;
        span_messsage.style.display = "block";
      }
    }
  } catch (error) {
    console.error("Erreur lors de la conversion de la réponse JSON :", error);
  }
}

if (theformulaire !== null) {
  theformulaire.addEventListener("submit", function (evt) {
    evt.preventDefault();
    btn.disabled = true;

    setTimeout(function () {
      btn.disabled = false;
    }, 1500);

    params = new FormData(theformulaire);
    params.append("action", "form");

    addForm();
  });
}
