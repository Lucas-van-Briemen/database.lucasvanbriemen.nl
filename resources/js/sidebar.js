const databases = document.querySelectorAll(".database-container");

databases.forEach((database) => {
    database.addEventListener("click", () => {

        if (database.classList.contains("active")) {
            database.classList.remove("active");
            database.querySelector(".table-container").classList.remove("active");
            return;
        }

        database.classList.add("active");

        const tablesInDatabase = document.querySelector(`.database-container[data-database="${database.innerText}"] .table-container`);
        console.log(tablesInDatabase);
        tablesInDatabase.classList.add("active");
    });
});


const state = { page_id: 1, user_id: 5 };
const url = "hello-world";

history.pushState(state, "", url);


const xhr = new XMLHttpRequest();
xhr.open("GET", url, true);
xhr.send();

xhr.onreadystatechange = function () {
    if (xhr.readyState === XMLHttpRequest.DONE) {
        console.log(xhr.responseText);
    }
};
