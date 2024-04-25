const portfolio = {
    
    init: function(){
        let isMobile = window.matchMedia("(max-width: 768px)").matches;
        portfolio.links = document.querySelectorAll(".project-link");

        if (isMobile) {
            let clickCount = 0;
            for (const mobileLink of portfolio.links) {
                mobileLink.addEventListener('click', function(event) {
                    clickCount++;
                    if (clickCount === 1) {
                        event.preventDefault(); // Empêcher l'action par défaut du lien
                    }
                    if (clickCount === 2) {
                        // Réinitialiser le compteur après le deuxième clic
                        clickCount = 0;
                    }
                });
            }
        }

    },

};

export default portfolio;