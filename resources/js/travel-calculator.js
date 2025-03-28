document.addEventListener("DOMContentLoaded", function () {
    const calculateBtn = document.getElementById("calculateBtn");
    const resultDiv = document.getElementById("result");
    const routeInput = document.getElementById("calculateRoute");

    if (!calculateBtn || !resultDiv || !routeInput) {
        console.error("Missing elements: check your Blade template!");
        return;
    }

    calculateBtn.addEventListener("click", function () {
        let formData = new FormData(document.getElementById("budgetForm"));
        let route = routeInput.value; // Get the route from the hidden input

        fetch(route, {
            method: "POST",
            body: formData,
            headers: {
                "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value
            }
        })
        .then(response => response.json())
        .then(data => {
            resultDiv.innerText = totalBudgetText + data.total_cost;
        })
        .catch(error => console.error("Error:", error));
    });
});
