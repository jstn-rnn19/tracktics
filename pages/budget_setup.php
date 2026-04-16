<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tracktics || Budget setup</title>
    <link rel="stylesheet" href="../assets/css/form.css">
    <link rel="stylesheet" href="../assets/css/budget-settings.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
<div class="container-md mx-auto mt-5 mb-2">

    <form class="needs-validation" action="../includes/budeget_setup.inc.php" method="post">

        <h1 class="text-center" id="title">Budget Setup</h1>

        <div class="form-floating mb-3">
            <input type="number" min="1" class="form-control" id="monthly-allowance" name="MonthlyAllowance" placeholder="2000" required>
            <label for="monthly-allowance">Monthly allowance</label>
            <div class="invalid-feedback">Please Correctly fill monthly allowance</div>
        </div>

        <h5 id="budget-type-title">Budget Type</h5>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="option" value="recommended" checked>
            <label class="form-check-label">Recommended (50/30/20)</label>
        </div>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="option" value="custom">
            <label class="form-check-label">Custom</label>
        </div>

        <div id="custom-budget" class="hidden mt-3">

            <div class="form-floating mb-2">
                <input type="number" class="form-control" name="needs" placeholder="50"
                data-bs-toggle="tooltip" data-bs-placement="left" title="Enter % for essentials (food, rent, utilities). Adjust based on your lifestyle">
                <label>Needs %</label>
                <div class="invalid-feedback">Please fill correctly the filled</div>
            </div>

            <div class="form-floating mb-2">
                <input type="number"  class="form-control" name="wants" placeholder="30"
                data-bs-toggle="tooltip" data-bs-placement="left" title="Enter % for (Personal Wants & Hobbies, Fun & Entertainment, Shopping). Adjust based on your lifestyle">
                <label>Wants %</label>
                <div class="invalid-feedback">Please fill correctly the filled</div>
            </div>

            <div class="form-floating mb-2">
                <input type="number" class="form-control" name="savings" placeholder="20" 
                data-bs-toggle="tooltip" data-bs-custom-class="custom-tooltip" data-bs-placement="left" title="Enter % for (Financial Goals, Emergency Fund, Future Planning, Savings & Investments). Adjust based on your lifestyle">
                <label>Savings (%)</label>
                <div class="invalid-feedback">Please fill correctly the filled</div>
            </div>

        </div>
        <div class="d-grid gap-2 col-sm mx-auto mt-2">
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>

    </form>

</div>

    <script src="../assets/js/budget-setting.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>