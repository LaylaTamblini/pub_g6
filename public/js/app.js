import { createApp } from 'https://unpkg.com/vue@3/dist/vue.esm-browser.js'

createApp({
    data() {
        return {
            panel: false,
            menuIcon: "menu",
            sectAdmin: "categories"
        }
    },
    methods: {
        toggleMenu() {
            if(this.menuIcon == "menu") {
                this.menuIcon = "close"
                this.panel = true
                // Voir alternative vue.js
                document.body.style.overflow = "hidden";
            } else if(this.menuIcon == "close") {
                this.menuIcon = "menu"
                this.panel = false
                // Voir alternative vue.js
                document.body.style.overflow = "auto";
            }
        },

    }
}).mount('#app')


/**
 * 
 * TO-DO
 * 
 * 1. Margin top main + panneau auto with prog
 * 2. Animation panneau
 */