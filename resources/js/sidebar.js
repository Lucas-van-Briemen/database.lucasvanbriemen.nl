const databases = document.querySelectorAll(".database-container");

databases.forEach((database) => {
    database.addEventListener("click", () => {

        if (database.classList.contains("active")) {
            database.classList.remove("active");
            database.querySelector(".table-container").classList.remove("active");
            return;
        }3

        database.classList.add("active");

        const tablesInDatabase = document.querySelector(`.database-container[data-database="${database.innerText}"] .table-container`);
        console.log(tablesInDatabase);
        tablesInDatabase.classList.add("active");
    });
});
