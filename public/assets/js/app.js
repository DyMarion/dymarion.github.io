import popup from "./popup.js";

const app = {
    init: function() {
        popup.init();
    },
};

document.addEventListener("DOMContentLoaded", () => app.init());

