const monthlyAllowance = document.querySelector('#monthly-allowance');

const budgetTypeRadio = document.querySelectorAll("input[name='inlineRadioOptions']");

const customBudget = document.getElementById('custom-budget');

budgetTypeRadio.forEach( radio => {

    radio.addEventListener("change", () => {

        if (radio.value === "custom" && radio.checked) {
            customBudget.style.display = "block";
        }else {
            customBudget.style.display = "none";
        }
    })

})
