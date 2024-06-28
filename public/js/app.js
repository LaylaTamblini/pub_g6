import { createApp } from 'https://unpkg.com/vue@3/dist/vue.esm-browser.js'

createApp({
    data() {
        return {
            panel: false,
            menuIcon: "menu",
            section: "categories"
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
        }

    }
}).mount('#app')
