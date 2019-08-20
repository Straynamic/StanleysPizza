function HE_ToggleHide() {
  var x = document.getElementById("HideableElement");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}