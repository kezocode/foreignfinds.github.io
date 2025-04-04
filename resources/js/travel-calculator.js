document.addEventListener("DOMContentLoaded", function () {
    const transportCheckboxesContainer = document.getElementById("transportOptions");
    const destinationCheckboxes = document.querySelectorAll("#destinationOptions input[type='checkbox']");
    const peopleInput = document.getElementById("peopleCount");
    const durationInput = document.getElementById("tripDuration");
    const hotelCheckboxes = document.querySelectorAll("#hotelOptions input[type='checkbox']");
    const foodCheckboxes = document.querySelectorAll("#foodOptions input[type='checkbox']");
    const shoppingCheckboxes = document.querySelectorAll("#shoppingOptions input[type='checkbox']");
    const totalDisplay = document.getElementById("totalCost");
    const perPersonDisplay = document.getElementById("perPersonCost");

    window.adjustValue = function(id, amount) {
        const input = document.getElementById(id);
        let value = parseInt(input.value) + amount;
        if (value < 1) value = 1;
        input.value = value;
        input.dispatchEvent(new Event('input')); };


    if (!peopleInput || !durationInput || !transportCheckboxesContainer || !totalDisplay) {
        console.error("One or more elements not found!");
        return;
    }

    function getCurrentLang() {
        return document.documentElement.lang || "en"; // Default to English
    }

    // Transportation costs for each location
    const locationCosts = {
        Tokyo: { Shinkansen: 50000, Bus: 500, Flight: 30000 },
        Osaka: { Shinkansen: 30000, Bus: 200, Flight: 20000 },
        Kyoto: { Shinkansen: 35000, Bus: 400, Flight: 25000 },
        Hokkaido: { Shinkansen: 60000, Bus: 1000, Flight: 35000 },
        Okinawa: { Shinkansen: 0, Bus: 1500, Flight: 25000 },
        Ishikawa: { Shinkansen: 25000, Bus: 800, Flight: 20000 },
    };

    // buttons
    function adjustValue(id, amount) {
        const input = document.getElementById(id);
        let value = parseInt(input.value) + amount;
        if (value < 1) value = 1;
        input.value = value;
        input.dispatchEvent(new Event('input')); // Trigger input event for recalculation
    }

    // Function to get checked values from checkboxes
    function getCheckedValues(checkboxes) {
        return Array.from(checkboxes)
            .filter(checkbox => checkbox.checked)
            .reduce((total, checkbox) => total + parseInt(checkbox.value) || 0, 0);
    }

    function calculateTotal() {
        const people = parseInt(peopleInput.value) || 1;
        const duration = parseInt(durationInput.value) || 1;

        const transportCheckboxes = document.querySelectorAll(".transport-checkbox:checked");
        const hotelCheckboxes = document.querySelectorAll("#hotelOptions input[type='checkbox']:checked");
        const foodCheckboxes = document.querySelectorAll("#foodOptions input[type='checkbox']:checked");
        const shoppingCheckboxes = document.querySelectorAll("#shoppingOptions input[type='checkbox']:checked");

        const transportCost = getCheckedValues(transportCheckboxes);
        const hotelCost = getCheckedValues(hotelCheckboxes) * duration; // Hotel is per day
        const foodCost = getCheckedValues(foodCheckboxes) * duration; // Food is per day
        const shoppingCost = getCheckedValues(shoppingCheckboxes) * duration; // Shopping is per day

        const perPersonCost = transportCost + hotelCost + foodCost + shoppingCost;
        const totalCost = perPersonCost * people;

        // Update total cost display
        totalDisplay.textContent = totalCost === 0 ? "¥0" : `${translations.jsTotalCost}: ¥${totalCost.toLocaleString()}`;
        perPersonDisplay.textContent = totalCost === 0 ? "¥0" : `${translations.jsPerPerson}: ¥${perPersonCost.toLocaleString()}`;
    }

    function updateTransportCosts() {
        transportCheckboxesContainer.innerHTML = ""; // Clear previous transport options

        const selectedDestinations = Array.from(destinationCheckboxes)
            .filter(checkbox => checkbox.checked)
            .map(checkbox => checkbox.value.charAt(0).toUpperCase() + checkbox.value.slice(1)); // Capitalize the first letter

            console.log("Selected Destinations:", selectedDestinations); // Debug log

        // Check if no destinations are selected
        if (selectedDestinations.length === 0) {
            transportCheckboxesContainer.innerHTML = `<p>${translations.jsSelectTwo}</p>`; // Message to select destinations
            return;
        }

        // Check if only one destination is selected (no inter-transportation options)
        if (selectedDestinations.length < 2) {
            transportCheckboxesContainer.innerHTML = `<p>${translations.jsSelectTwo}</p>`; // Message to select more destinations for inter-transportation
            return;
        }


        selectedDestinations.forEach((destination, index) => {
            const costs = locationCosts[destination];

    if (!costs) {
        console.error(`No costs found for destination: ${destination}`);
        return;
    }

    const transportSection = document.createElement("div");
    transportSection.classList.add("transport-section");

    // Translate destination
    const translatedDestination = translations[destination.toLowerCase()] || destination;

    const title = document.createElement("h3");
    title.textContent = `${translations.transportation_costs} ${translatedDestination}`;
    transportSection.appendChild(title);

   // Generate transport options only if they exist
   if (costs.Bus !== undefined) {
    const busCostWrapper = document.createElement("div");
    const busCheckbox = document.createElement("input");
    busCheckbox.type = "checkbox";
    busCheckbox.classList.add("transport-checkbox");
    busCheckbox.value = costs.Bus;

    const busLabel = document.createElement("label");
    busLabel.textContent = ` ${translations.bus}: ¥${costs.Bus.toLocaleString()}`;

    busCostWrapper.appendChild(busCheckbox);
    busCostWrapper.appendChild(busLabel);
    transportSection.appendChild(busCostWrapper);
}

if (costs.Shinkansen !== undefined) {
    const shinkansenWrapper = document.createElement("div");
    const shinkansenCheckbox = document.createElement("input");
    shinkansenCheckbox.type = "checkbox";
    shinkansenCheckbox.classList.add("transport-checkbox");
    shinkansenCheckbox.value = costs.Shinkansen;

    const shinkansenLabel = document.createElement("label");
    shinkansenLabel.textContent = `${translations.shinkansen_to} ${translations[destination.toLowerCase()] || destination}: ¥${costs.Shinkansen.toLocaleString()}`;

    shinkansenWrapper.appendChild(shinkansenCheckbox);
    shinkansenWrapper.appendChild(shinkansenLabel);
    transportSection.appendChild(shinkansenWrapper);
}

if (costs.Flight !== undefined) {
    const flightWrapper = document.createElement("div");
    const flightCheckbox = document.createElement("input");
    flightCheckbox.type = "checkbox";
    flightCheckbox.classList.add("transport-checkbox");
    flightCheckbox.value = costs.Flight;

    const flightLabel = document.createElement("label");
    flightLabel.textContent = `${translations.flight_to} ${translations[destination.toLowerCase()] || destination}: ¥${costs.Flight.toLocaleString()}`;

    flightWrapper.appendChild(flightCheckbox);
    flightWrapper.appendChild(flightLabel);
    transportSection.appendChild(flightWrapper);
}

transportCheckboxesContainer.appendChild(transportSection);

// Inter-transportation (Shinkansen and Flight) between destinations
// if (index < selectedDestinations.length - 1) {
//     const nextDestination = selectedDestinations[index + 1];
//     const interTransportSection = document.createElement("div");
//     interTransportSection.classList.add("inter-transport-section");

//     if (locationCosts[destination].Shinkansen !== undefined) {
//         const shinkansenWrapper = document.createElement("div");
//         const shinkansenCheckbox = document.createElement("input");
//         shinkansenCheckbox.type = "checkbox";
//         shinkansenCheckbox.classList.add("transport-checkbox");
//         shinkansenCheckbox.value = locationCosts[destination].Shinkansen;

//         const shinkansenLabel = document.createElement("label");
//         shinkansenLabel.textContent = `${translations.shinkansenTo} ${translations[nextDestination.toLowerCase()] || nextDestination}: ¥${locationCosts[destination].Shinkansen.toLocaleString()}`;

//         shinkansenWrapper.appendChild(shinkansenCheckbox);
//         shinkansenWrapper.appendChild(shinkansenLabel);
//         interTransportSection.appendChild(shinkansenWrapper);
//     }

//     if (locationCosts[destination].Flight !== undefined) {
//         const flightWrapper = document.createElement("div");
//         const flightCheckbox = document.createElement("input");
//         flightCheckbox.type = "checkbox";
//         flightCheckbox.classList.add("transport-checkbox");
//         flightCheckbox.value = locationCosts[destination].Flight;

//         const flightLabel = document.createElement("label");
//         flightLabel.textContent = `${translations.flightTo} ${translations[nextDestination.toLowerCase()] || nextDestination}: ¥${locationCosts[destination].Flight.toLocaleString()}`;

//         flightWrapper.appendChild(flightCheckbox);
//         flightWrapper.appendChild(flightLabel);
//         interTransportSection.appendChild(flightWrapper);
//     }

//     transportSection.appendChild(interTransportSection);

//     transportCheckboxesContainer.appendChild(transportSection);

// }
});

calculateTotal(); // Recalculate after updating transport options
}






    // Attach event listeners to destination checkboxes
    destinationCheckboxes.forEach(checkbox => {
        checkbox.addEventListener("change", updateTransportCosts);
    });

    document.addEventListener("change", function (event) {
        if (event.target.matches(".transport-checkbox, .hotel-checkbox, #foodOptions input[type='checkbox'], #shoppingOptions input[type='checkbox']")) {
            calculateTotal();
            // calculatePerPersonTotal(); // Update per person cost
        }
    });


    // Attach event listeners to input fields
    peopleInput.addEventListener("input", calculateTotal);
    durationInput.addEventListener("input", calculateTotal);

    // Initial setup
    updateTransportCosts(); // Ensure transport options are initialized correctly
    calculateTotal();
});
