const fillterData = (route) => {
    // public/js/ajax.js
    document.addEventListener("DOMContentLoaded", function () {
        const dataContainer = document.getElementById("data-container");
        document
            .getElementById("search")
            .addEventListener("input", function (e) {
                e.preventDefault();
                let search = e.target.value;
                fetch(route + "/ajax/" + search, {
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": document
                            .querySelector('meta[name="csrf-token"]')
                            .getAttribute("content"),
                    },
                })
                    .then((response) => response.json())
                    .then((data) => {
                        dataContainer.innerHTML = data.html;
                        console.log(data);
                    })
                    .catch((error) => {
                        console.error("Error:", error);
                    });
            });
    });
};
