document.addEventListener("DOMContentLoaded", function () {
  const openBtn = document.getElementById("mobile-menu-button");
  const closeBtn = document.getElementById("close-mobile-menu");
  const mobileMenu = document.getElementById("mobile-menu");

  if (openBtn && closeBtn && mobileMenu) {
    openBtn.addEventListener("click", function () {
      mobileMenu.classList.remove("hidden");
    });

    closeBtn.addEventListener("click", function () {
      mobileMenu.classList.add("hidden");
    });

    // Opcional: cerrar al hacer click fuera del menú
    mobileMenu.addEventListener("click", function (e) {
      if (e.target === mobileMenu) {
        mobileMenu.classList.add("hidden");
      }
    });

    // Accesibilidad: cerrar con ESC
    document.addEventListener("keydown", function (e) {
      if (e.key === "Escape") {
        mobileMenu.classList.add("hidden");
      }
    });
  }
});
