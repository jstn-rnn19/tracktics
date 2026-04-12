document.addEventListener("DOMContentLoaded", () => {

    const radios = document.querySelectorAll('input[name="option"]');
    const customBudget = document.getElementById("custom-budget");
    const monthlyAllowance = document.getElementById('monthly-allowance');
    const forms = document.querySelectorAll('validation');
console.log(typeof(monthlyAllowance));
    radios.forEach(radio => {
        radio.addEventListener("change", () => {

            const selected = document.querySelector('input[name="option"]:checked');

            if (selected.value === "custom") {
                customBudget.classList.remove("hidden");
            } else {
                customBudget.classList.add("hidden");
            }

        });
    });
    
    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
            let invalid = form.checkVisibility;
            console.log(typeof(monthlyAllowance));
            if(monthlyAllowance.value === "") {
                monthlyAllowance.classList.add('is-invalid');
            }

            if (!invalid) {
                event.preventDefault();
                event.stopPropagation();
            }
        }, false)
    })
});