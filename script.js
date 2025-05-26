const monParagraphe = document.getElementById("monParagraphe");
const maDiv = document.getElementById("maDiv");
setTimeout(() => {
    monParagraphe.textContent = "Le texte a été modifié";
    monParagraphe.style.backgroundColor = "lightblue";
    monParagraphe.style.textAlign = "center";
}, 2000);
maDiv.addEventListener("click", function () {
    monParagraphe.textContent = "Un clic a été détecté";
});
