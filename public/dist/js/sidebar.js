document.addEventListener("alpine:init", () => {
    Alpine.store("sidebar", {
        openIs: true,
        toggle() {
            this.openIs = !this.openIs;
        },
    });
});

function matchMediaForSidebar(e) {
    if (e.matches) {
        // in lg screen
        Alpine.store("sidebar").openIs = true;
    } else {
        // in less than lg screen
        Alpine.store("sidebar").openIs = false;
    }
}

const windowWidthLg = window.matchMedia("(min-width: 1024px)");
windowWidthLg.addEventListener("change", matchMediaForSidebar);

window.addEventListener("load", function () {
    matchMediaForSidebar(windowWidthLg);
});
