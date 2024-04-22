const popup = {
    navButtons : document.querySelectorAll(".nav-link"),
    sections : document.querySelectorAll(".section"),

    init: function(){
        console.log(this.navButtons);
        for(const button of popup.navButtons) {
            button.addEventListener("click", popup.handleClick)
        }
        // popup.navButtons.forEach(button => {button.addEventListener("click", popup.handleClick);});
    },

    handleClick : function (event) {
        const buttonId = event.currentTarget.id;
        for(const section of popup.sections) {
            section.classList.remove("d-none");
            section.classList.remove("d-flex");
            section.classList.add("d-none");
        }
        const page = document.querySelector(".section#" + buttonId);
        page.classList.remove("d-none");
        page.classList.add("d-flex");
    }
};

export default popup;
