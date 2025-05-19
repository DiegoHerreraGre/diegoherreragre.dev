// Selecciona todos los enlaces o botones con to="#contacto" o href="#contacto"
const contactoLinks = document.querySelectorAll(
  'a[to="#contacto"], [to="#contacto"], a[href="#contacto"]'
);

contactoLinks.forEach((link) => {
  link.addEventListener("click", (e) => {
    e.preventDefault();
    const contactoSection = document.getElementById("contacto");
    if (contactoSection) {
      // Scroll lento y muy suave
      const yOffset = -40; // Ajusta si tienes un header fijo
      const y =
        contactoSection.getBoundingClientRect().top + window.scrollY + yOffset;
      window.scrollTo({
        top: y,
        behavior: "smooth",
      });
    }
  });
});

// Declarar contactoForm correctamente
const contactoForm = document.getElementById("contacto");
if (contactoForm) {
  const contactoFormObserver = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        contactoForm.classList.add("opacity-100");
      } else {
        contactoForm.classList.remove("opacity-100");
      }
    });
  });
  contactoFormObserver.observe(contactoForm);
}
