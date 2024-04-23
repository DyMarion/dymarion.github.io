import popup from "./popup.js";
import theme from "./theme.js";


const app = {
    init: function() {
        popup.init();
        theme.init();
    },
};

document.addEventListener("DOMContentLoaded", () => app.init());

