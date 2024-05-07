const portfolio = {
    
    init: function(){
        let isMobile = window.matchMedia("(max-width: 768px)").matches;
        portfolio.links = document.querySelectorAll(".project-link");

        if (isMobile) {
            for (const mobileLink of portfolio.links) {
                let clickCount = 0;
                mobileLink.addEventListener('click', function(event) {
                    clickCount++;
                    if (clickCount === 1) {
                        event.preventDefault(); // Prevent default "link" action : opening a new window
                    }
                    if (clickCount === 2) {
                        // Reset count after the second click
                        clickCount = 0;
                    }
                });
            }
        }
    },

};

export default portfolio;