document.getElementById("changeTitle").addEventListener("click", function() {
    let titleElement = document.getElementById("title");
    titleElement.innerText = "Title Changed!";
    titleElement.style.color = "red";
});