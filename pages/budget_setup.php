<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tracktics || Budget setup</title>
    <link rel="stylesheet" href="../assets//css/form.css">
    <link rel="stylesheet" href="../assets//css/budget-settings.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    
<div class="container-md mx-auto mt-5 mb-2">
        <form action="../includes/budeget_setup.inc.php" method="post" class="sign-in-form">
            <h1 class="text-center" id="title">Budget Setup</h1>
            <div class="d-grid gap-2 col-md mx-auto">
                <div class="form-floating">
                    <input type="number" class="form-control " id="monthly-allowance" name="MonthlyAllowance" placeholder="Example: 2000" required>
                    <label for="monthly-allowance">Monthly allowance</label>
                    <div class="invalid-feedback email-feedback">Please enter a Monthly allowance.</div>
                </div>
                <h5 id="budget-type-title">Budget Type</h5>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="recommended">
                    <label class="form-check-label" for="inlineRadio1">Recommended (50/30/20)</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="custom">
                    <label class="form-check-label" for="inlineRadio2">Custom</label>
                </div>
                <div class="d-grid gap-2 col-md" id="custom-budget" style="display: none;">
                    <div class="form-floating">
                        <input type="number" class="form-control " id="needs-input" name="needs" placeholder="Example: 50%" required>
                        <label for="needs-input">Needs</label>
                        <div class="invalid-feedback email-feedback">Please enter a Needs.</div>
                    </div>
                    <div class="form-floating">
                        <input type="number" class="form-control " id="wants-input" name="wants" placeholder="Example: 20%" required>
                        <label for="wants-input">Wants</label>
                        <div class="invalid-feedback email-feedback">Please enter a Wants.</div>
                    </div>
                    <div class="form-floating">
                        <input type="number" class="form-control " id="savings-input" name="savings" placeholder="Example: 30%" required>
                        <label for="savings-input">Savings</label>
                        <div class="invalid-feedback email-feedback">Please enter a Savings.</div>
                    </div>
                </div>
            </div>
            <div class="d-grid gap-2 col-sm mx-auto mt-2">
                <button class="btn btn-primary btn-lg" type="submit">Submit</button>
            </div>
        </form>

 <script src="../assets/js/budget-setting.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>