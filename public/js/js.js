const fetchDataRequest = async (route) => {
    try {
        const response = await fetch(route, {
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": document
                    .querySelector('meta[name="csrf-token"]')
                    .getAttribute("content"),
            },
        });
        result = await response.json();
        return result;
    } catch (error) {
        console.error("Error:", error);
    }
};
const fillterData = (route) => {
    const dataContainer = document.getElementById("data-container");
    document.getElementById("search").addEventListener("input", async (e) => {
        e.preventDefault();
        try {
            let search = e.target.value;
            const data = await fetchDataRequest(route + "/ajax/" + search);
            dataContainer.innerHTML = data.html;
        } catch (error) {
            console.error("Error:", error);
        }
    });
};
const dependentDropDown = (route, pick, destination) => {
    const dataContainer = document.getElementById(destination);
    document.getElementById(pick).addEventListener("change", async (e) => {
        e.preventDefault();
        let value = e.target.value;
        try {
            const data = await fetchDataRequest(route + "/" + value + "/1");
            dataContainer.innerHTML =
                '<option value="" selected disabled selected>-- Please Select --</option>';
            for (const key in data) {
                result = data[key];
                dataContainer.innerHTML += `<option value="${result.id}">${result.service}</option>`;
            }
        } catch (error) {
            console.error("Error:", error);
        }
    });
};
