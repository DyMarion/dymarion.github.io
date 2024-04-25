import popup from "./popup.js";
import theme from "./theme.js";
import portfolio from "./portfolio.js";


const app = {
    init: function() {
        popup.init();
        theme.init();
        portfolio.init();
    },
};

document.addEventListener("DOMContentLoaded", () => app.init());

