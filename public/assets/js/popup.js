const popup = {

    init: function(){
        popup.navButtons = document.querySelectorAll(".nav-link");
        popup.sections = document.querySelectorAll(".section");
        for(const button of popup.navButtons) {
            button.addEventListener("click", popup.handleClick)
        }
        // popup.navButtons.forEach(button => {button.addEventListener("click", popup.handleClick);});
    },

    handleClick : function (event) {
        for(const button of popup.navButtons) {
            button.classList.remove("active");
        }
        event.currentTarget.classList.add("active");

        for(const section of popup.sections) {
            section.classList.remove("d-none");
            section.classList.remove("d-flex");
            section.classList.add("d-none");
        }
        const buttonId = event.currentTarget.id;
        const page = document.querySelector(".section#" + buttonId);
        page.classList.remove("d-none");
        page.classList.add("d-flex");
    }
};

export default popup;
