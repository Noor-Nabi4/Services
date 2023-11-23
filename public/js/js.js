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
            valuesEmpty(destination);
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
            // rate.innerHTML = ;
            try {
                valuesEmpty("service_id");
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
                quantity.min = minValue;
                quantity.max = maxValue;
                rate.setAttribute("value", parseInt(data.rate));
            } catch (error) {
                console.error("Error:", error);
            }
        });
};
const setPrice = () => {
    document.getElementById("quantity").addEventListener("input", async (e) => {
        const quantity = e.target.value;
        const rate = document.getElementById("rate").value;
        const price = document.getElementById("price");
        const charges = (rate / 1000) * quantity;
        // console.log(quantity,rate,price,charges);
        price.value = charges;
    });
};
const valuesEmpty = (destination = null) => {
    if (destination !== "service_id") {
        document.getElementById("service_id").innerHTML = "";
    }
    document.getElementById("min_value").innerHTML = "";
    document.getElementById("max_value").innerHTML = "";
    document.getElementById("rate").removeAttribute("value");
    document.getElementById("price").value = "";
    const quantity = document.getElementById("quantity");
    quantity.removeAttribute("min");
    quantity.removeAttribute("max");
    quantity.value = "";
};
