import { createApp } from 'https://unpkg.com/vue@3/dist/vue.esm-browser.js'

createApp({
    data() {
        return {
            panel: false,
            menuIcon: "menu",
            section: "categories",
            form: ""
        }
    },
    methods: {
        /**
         * Permet d'ouvrir ou de fermer le menu de navigation en mobile.
         */
        toggleMenu() {
            if(this.menuIcon == "menu") {
                this.menuIcon = "close"
                this.panel = true
                document.body.style.overflow = "hidden";
            } else if(this.menuIcon == "close") {
                this.menuIcon = "menu"
                this.panel = false
                document.body.style.overflow = "auto";
            }
        },
        /**
         * Permet de changer la section affichée dans l'administration.
         * @param string section 
         */
        switchSection(section) {
            this.section = section
        },
        /**
         * Permet d'ouvrir ou de fermer un formulaire.
         * @param string formulaire
         */
        toggleForm(form) {
            this.form = form

            if(this.form != "") {
                document.body.style.overflow = "hidden";
            } else {
                document.body.style.overflow = "auto";
            }
        },
    }
}).mount('#app')

// avant dinclure verification parametre get
// dans la vue balise script javascript prametre get inclus dans localstorage
