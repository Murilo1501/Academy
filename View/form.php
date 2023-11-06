<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Form</title>

    <style>
        .container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            box-shadow: 10px 10px 10px 10px rgba(0, 0, 0, .2);
            padding: 20px;
            border-radius: 10px;

        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Register</h1>
        <form action="/academyOne/store" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Name:</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="name" placeholder="Example input placeholder">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Email:</label>
                <input type="email" class="form-control" id="formGroupExampleInput2" name="email" placeholder="Another input placeholder">
            </div>

            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Password:</label>
                <input type="password" class="form-control" id="formGroupExampleInput" name="password" placeholder="Example input placeholder">
            </div>

            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Cell:</label>
                <input type="number" class="form-control" id="formGroupExampleInput" name="phone" placeholder="Example input placeholder">
            </div>

            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Course:</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="course" placeholder="Example input placeholder">
            </div>

            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Birth Date:</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="birthDate" placeholder="Example input placeholder">
            </div>

            <div class="mb-3">
                <label for="formFile" class="form-label">Photo</label>
                <input class="form-control" type="file" id="formFile" name="photo">
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="male">
                <label class="form-check-label" for="flexRadioDefault1">
                    Male
                </label>

                <input type="radio" name="gender" id="" value="female">
                <label for="">
                    Female
                </label>

            </div>

            <button type="submit" class="btn btn-primary" style="float: right;" >Send</button>
        </form>
    </div>

</body>

</html>