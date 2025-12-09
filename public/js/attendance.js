var LeftMenuCount=0;
function menuBar() {
    let leftMenu = document.querySelector(".leftSide");
    let leftMenuClasses = leftMenu.classList;
        if (LeftMenuCount===0) {
            leftMenu.classList.remove("d-md-block");
            leftMenu.classList.remove("d-sm-none")
            LeftMenuCount++;
        }
        else if(LeftMenuCount===1){
            leftMenuClasses.add("d-md-block");
            leftMenuClasses.add("d-sm-none");
            LeftMenuCount=0;
        }
}

