const theme = {
    
    init: function(){
    theme.themeButtons = document.querySelectorAll(".theme-switch");
    theme.body = document.querySelector("body");
        for(const button of theme.themeButtons) {
            button.addEventListener("click", theme.handleThemes);
        }
    },

    handleThemes : function (event) {
        const themeColor = event.currentTarget.id;
        theme.body.classList.remove("theme-1", "theme-2", "theme-3");
        theme.body.classList.add(themeColor);
    },
};

export default theme;
