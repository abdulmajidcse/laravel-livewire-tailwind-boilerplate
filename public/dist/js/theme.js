// set theme
function setTheme(theme) {
  if (theme) {
    localStorage.setItem("theme", theme);
  } else if (!localStorage.getItem("theme")) {
    localStorage.setItem(
      "theme",
      window.matchMedia("(prefers-color-scheme: dark)").matches
        ? "dark"
        : "light"
    );
  }

  const lightThemeTag = document.getElementById("light_theme");
  const darkThemeTag = document.getElementById("dark_theme");

  if (localStorage.getItem("theme") === "dark") {
    document.documentElement.classList.add("dark");
    darkThemeTag.classList.add("hidden");
    lightThemeTag.classList.remove("hidden");
  } else {
    document.documentElement.classList.remove("dark");
    lightThemeTag.classList.add("hidden");
    darkThemeTag.classList.remove("hidden");
  }
}

// when page load
window.addEventListener("load", function () {
  setTheme();
});
