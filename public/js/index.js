function menuBar() {
    if (window.innerWidth < 768) {
        const leftMenu = document.querySelector(".leftSide");
        const leftMenuClasses = leftMenu.classList;

        if (!leftMenu.classList.contains("expanded")) {
            leftMenuClasses.remove("d-md-block", "d-none", "col-sm-2");
            leftMenuClasses.add("col-sm-12", "expanded");
        } else {
            leftMenuClasses.remove("col-sm-12", "expanded");
            leftMenuClasses.add("d-md-block", "d-none", "col-sm-2");
        }
    }
}
