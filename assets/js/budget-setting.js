document.addEventListener("DOMContentLoaded", () => {

    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    tooltipTriggerList.map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));


    const radios = document.querySelectorAll('input[name="option"]');
    const customBudget = document.getElementById("custom-budget");
    const monthlyAllowance = document.getElementById('monthly-allowance');
    const forms = document.querySelectorAll('.needs-validation');

    radios.forEach(radio => {
        radio.addEventListener("change", () => {

            const selected = document.querySelector('input[name="option"]:checked');
            // Validate custom inputs here
            const needs = document.querySelector('input[name="needs"]');
            const wants = document.querySelector('input[name="wants"]');
            const savings = document.querySelector('input[name="savings"]');

            if (selected.value === "custom") {
                customBudget.classList.remove("hidden");
            } else {
                customBudget.classList.add("hidden");
            }
            
            

        });
    });
    
    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {

            let invalid = !form.checkValidity();

            
            if(Number(monthlyAllowance.value) < 0) {
                monthlyAllowance.classList.add('is-invalid');
            }else {
                monthlyAllowance.classList.remove('is-invalid');
            }
            // Validate custom inputs if custom is selected
            const selected = document.querySelector('input[name="option"]:checked');
            if(selected.value === "custom") {
                const needs = document.querySelector('input[name="needs"]');
                const wants = document.querySelector('input[name="wants"]');
                const savings = document.querySelector('input[name="savings"]');

                if (needs.value === '' || wants.value === '' || savings.value === '') {
                    needs.classList.add('is-invalid');
                    wants.classList.add('is-invalid');
                    savings.classList.add('is-invalid');
                    invalid = true;
                } else {
                    needs.classList.remove('is-invalid');
                    wants.classList.remove('is-invalid');
                    savings.classList.remove('is-invalid');

                    //convert the string needs, wants, & savings to number

                    const needsNum = Number(needs.value);
                    const wantsNum = Number(wants.value);
                    const savingsNum = Number(savings.value);

                    if(needsNum <= 0 || wantsNum <= 0 || savingsNum <= 0) {
                        needs.classList.add('is-invalid');
                        wants.classList.add('is-invalid');
                        savings.classList.add('is-invalid');
                        invalid = true;
                    }else {

                        const totalNum = needsNum + wantsNum + savingsNum;

                        needs.classList.remove('is-invalid');
                        wants.classList.remove('is-invalid');
                        savings.classList.remove('is-invalid');
                        if (totalNum !== 100) {
                            needs.classList.add('is-invalid');
                            wants.classList.add('is-invalid');
                            savings.classList.add('is-invalid');
                            invalid = true;
                        }else {
                            needs.classList.remove('is-invalid');
                            wants.classList.remove('is-invalid');
                            savings.classList.remove('is-invalid');
                        }
                    }

                }
            }

            if (invalid) {
                event.preventDefault();
                event.stopPropagation();
            }
        }, false)
    })
});