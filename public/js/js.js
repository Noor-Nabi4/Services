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
const fetchServicesDataAndSetInOrder = () => {
    document
        .getElementById("service_id")
        .addEventListener("change", async (e) => {
            const min_value = document.getElementById("min_value");
            const max_value = document.getElementById("max_value");
            const quantity = document.getElementById("quantity");
            const rate = document.getElementById("rate");
            const value = e.target.value;
            const data = await fetchDataRequest("/services/" + value);
            const minValue = parseInt(data.min_value);
            const maxValue = parseInt(data.max_value);
            min_value.innerHTML = minValue;
            max_value.innerHTML = maxValue;
            quantity.setAttribute("min", minValue);
            quantity.setAttribute("max", maxValue);
            rate.setAttribute("value", parseInt(data.rate));
            // rate.innerHTML = ;
            try {
            } catch (error) {
                console.error("Error:", error);
            }
        });
};
