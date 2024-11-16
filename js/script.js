document.addEventListener("DOMContentLoaded", function () {
    const portfolioItems = document.querySelectorAll(".each-portfolio");

    portfolioItems.forEach(item => {
        item.addEventListener("mouseover", function () {
            const details = this.querySelector(".content-details");
            details.style.height = "100px";
        });

        item.addEventListener("mouseleave", function () {
            const details = this.querySelector(".content-details");
            details.style.height = "0";
        });
    });
});
