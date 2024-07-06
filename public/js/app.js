import { createApp } from "https://unpkg.com/vue@3/dist/vue.esm-browser.js";

// Association des sous-catégories et de l'ID
const subcategoriesMap = {
  "Nos créations": 1,
  Viande: 2,
  Poisson: 3,
  "À partager": 4,
  Burger: 5,
  Salade: 6,
  Végé: 7,
  Tartare: 8,
  Chocolat: 9,
  Caramel: 10,
};

createApp({
  data() {
    return {
      panel: false,
      menuIcon: "menu",
      section: "categories",
      form: "",
      currentObject: {},
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
    toggleForm(form, object) {
      if (object != null) {
        this.currentObject = object;

        // Vérification si subcategories_name existe dans l'objet
        if (this.currentObject.subcategories_name) {
          // Split l'array à chaque virgule et trouve l'ID correspondant
          // au nom dans le tableau subcategoriesMap
          this.currentObject.subcategories =
            this.currentObject.subcategories_name
              .split(",")
              .map((name) => subcategoriesMap[name]);
        } else {
          this.currentObject.subcategories = [];
        }
      }

      console.log(this.currentObject);

      this.form = form;
      localStorage.setItem("activeForm", form);

      if (this.form != "") {
        document.body.style.overflow = "hidden";
      } else {
        document.body.style.overflow = "auto";
        this.removeParams();
      }
    },
    /**
     * Permet de faire la redirection vers un url sans paramètres
     */
    removeParams() {
      let url = new URL(window.location);
      if (url.search != "") {
        url.search = "";
        window.location.href = url.href;
      }
    },
  },
  beforeMount() {
    // Récupération de l'URL actuelle
    const url = new URLSearchParams(window.location.search);
    // Cherche dans l'URL si elle comprend:
    if (
      url.has("insertion_successful") ||
      url.has("deletion_successful") ||
      url.has("update_successful") ||
      url.has("insertion_member_successful") ||
      url.has("deletion_member_successful") ||
      url.has("update_member_successful")
    ) {
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
