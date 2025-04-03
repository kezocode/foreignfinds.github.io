document.addEventListener("DOMContentLoaded", function () {
    const transportCheckboxesContainer = document.getElementById("transportOptions");
    const destinationCheckboxes = document.querySelectorAll("#destinationOptions input[type='checkbox']");

    window.adjustValue = function(id, amount) {
        const input = document.getElementById(id);
        let value = parseInt(input.value) + amount;
        if (value < 1) value = 1;
        input.value = value;
        input.dispatchEvent(new Event('input')); };

    const peopleInput = document.getElementById("peopleCount");
    const durationInput = document.getElementById("tripDuration");
    const hotelCheckboxes = document.querySelectorAll("#hotelOptions input[type='checkbox']");
    const foodCheckboxes = document.querySelectorAll("#foodOptions input[type='checkbox']");
    const shoppingCheckboxes = document.querySelectorAll("#shoppingOptions input[type='checkbox']");
    const totalDisplay = document.getElementById("totalCost");
    const perPersonDisplay = document.getElementById("perPersonCost");


    if (!peopleInput || !durationInput || !transportCheckboxesContainer || !totalDisplay) {
        console.error("One or more elements not found!");
        return;
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

    // Function to update the transport costs based on selected destinations
    function updateTransportCosts() {
        transportCheckboxesContainer.innerHTML = ""; // Clear previous transport options

        const selectedDestinations = Array.from(destinationCheckboxes)
            .filter(checkbox => checkbox.checked)
            .map(checkbox => checkbox.value);

        if (selectedDestinations.length < 2) {
            transportCheckboxesContainer.innerHTML = "<p>Please select at least two destinations for inter-transportation calculation.</p>";
            return;
        }

        selectedDestinations.forEach((destination, index) => {
            const costs = locationCosts[destination];

            const transportSection = document.createElement("div");
            transportSection.classList.add("transport-section");

            // Title for each destination
            const title = document.createElement("h3");
            title.textContent = `Transportation Costs in ${destination}`;
            transportSection.appendChild(title);

            // Display bus cost for each destination
            const busCostWrapper = document.createElement("div");
            const busCheckbox = document.createElement("input");
            busCheckbox.type = "checkbox";
            busCheckbox.classList.add("transport-checkbox");
            busCheckbox.value = costs.Bus;

            const busLabel = document.createElement("label");
            busLabel.textContent = ` Bus: ¥${costs.Bus.toLocaleString()}`;

            busCostWrapper.appendChild(busCheckbox);
            busCostWrapper.appendChild(busLabel);
            transportSection.appendChild(busCostWrapper);

            // If not the last destination, display inter-transportation costs (Shinkansen and Flight)
            if (index < selectedDestinations.length - 1) {
                const nextDestination = selectedDestinations[index + 1];
                const interTransportSection = document.createElement("div");
                interTransportSection.classList.add("inter-transport-section");

                const shinkansenWrapper = document.createElement("div");
                const shinkansenCheckbox = document.createElement("input");
                shinkansenCheckbox.type = "checkbox";
                shinkansenCheckbox.classList.add("transport-checkbox");
                shinkansenCheckbox.value = locationCosts[destination].Shinkansen;

                const shinkansenLabel = document.createElement("label");
                shinkansenLabel.textContent = ` Shinkansen to ${nextDestination}: ¥${locationCosts[destination].Shinkansen.toLocaleString()}`;

                shinkansenWrapper.appendChild(shinkansenCheckbox);
                shinkansenWrapper.appendChild(shinkansenLabel);
                interTransportSection.appendChild(shinkansenWrapper);

                const flightWrapper = document.createElement("div");
                const flightCheckbox = document.createElement("input");
                flightCheckbox.type = "checkbox";
                flightCheckbox.classList.add("transport-checkbox");
                flightCheckbox.value = locationCosts[destination].Flight;

                const flightLabel = document.createElement("label");
                flightLabel.textContent = ` Flight to ${nextDestination}: ¥${locationCosts[destination].Flight.toLocaleString()}`;

                flightWrapper.appendChild(flightCheckbox);
                flightWrapper.appendChild(flightLabel);
                interTransportSection.appendChild(flightWrapper);

                transportSection.appendChild(interTransportSection);
            }

            transportCheckboxesContainer.appendChild(transportSection);
        });

        calculateTotal(); // Recalculate after updating transport options
    }

    // Function to calculate the total cost
    function calculateTotal() {
        const people = parseInt(peopleInput?.value) || 1;
        const duration = parseInt(durationInput?.value) || 1;

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
        totalDisplay.textContent = totalCost === 0 ? "" : `Total Estimated Cost: ¥${totalCost.toLocaleString()}`;
        perPersonDisplay.textContent = totalCost === 0 ? "" : `Total Cost Per Person: ¥${perPersonCost.toLocaleString()}`;
    }


    // Function to get checked values from checkboxes
    function getCheckedValues(checkboxes) {
        return Array.from(checkboxes)
            .filter(checkbox => checkbox.checked)
            .reduce((total, checkbox) => total + parseInt(checkbox.value) || 0, 0);
    }

    // Attach event listeners to destination checkboxes
    destinationCheckboxes.forEach(checkbox => {
        checkbox.addEventListener("change", updateTransportCosts);
    });

    document.addEventListener("change", function (event) {
        if (event.target.matches(".transport-checkbox, .hotel-checkbox, #foodOptions input[type='checkbox'], #shoppingOptions input[type='checkbox']")) {
            calculateTotal();
            calculatePerPersonTotal(); // Update per person cost
        }
    });

    document.addEventListener("change", function (event) {
        if (event.target.matches(".transport-checkbox, .hotel-checkbox, #foodOptions input[type='checkbox'], #shoppingOptions input[type='checkbox']")) {
            calculateTotal();
        }
    });

    // Attach event listeners to input fields
    peopleInput.addEventListener("input", calculateTotal);
    durationInput.addEventListener("input", calculateTotal);

    // Initial setup
    updateTransportCosts(); // Ensure transport options are initialized correctly
    calculateTotal();
});
