import { createApp } from "https://unpkg.com/vue@3/dist/vue.esm-browser.js";

createApp({
  data() {
    return {
      panel: false,
      menuIcon: "menu",
      section: "categories",
      form: "",
    };
  },
  methods: {
    /**
     * Permet d'ouvrir ou de fermer le menu de navigation en mobile.
     */
    toggleMenu() {
      if (this.menuIcon == "menu") {
        this.menuIcon = "close";
        this.panel = true;
        document.body.style.overflow = "hidden";
      } else if (this.menuIcon == "close") {
        this.menuIcon = "menu";
        this.panel = false;
        document.body.style.overflow = "auto";
      }
    },
    /**
     * Permet de changer la section affichée dans l'administration.
     * @param string section
     */
    switchSection(section) {
      this.section = section;
      // Enregistre la section active dans le localStorage
      localStorage.setItem("activeSection", section);
    },
    /**
     * Permet d'ouvrir ou de fermer un formulaire.
     * @param string formulaire
     */
    toggleForm(form) {
      this.form = form;
      localStorage.setItem("activeForm", form);

      if (this.form != "") {
        document.body.style.overflow = "hidden";
      } else {
        document.body.style.overflow = "auto";
      }
    },
  },
  beforeMount() {
    // Récupération de l'URL actuelle
    const url = new URLSearchParams(window.location.search);
    // Cherche dans l'URL si elle comprend "registration_successful"
    if (url.has("registration_successful")) {
      localStorage.removeItem("activeForm");
    }

    // Récupération de la valeur associé à "section" dans le localStorage
    const storedSection = localStorage.getItem("activeSection");
    // Vérification s'il y a une "section" stocké dans le localStorage
    if (storedSection) {
      this.switchSection(storedSection);
    }

    const storedForm = localStorage.getItem("activeForm");
    if (storedForm) {
      this.toggleForm(storedForm);
    }
  },
}).mount("#app");
