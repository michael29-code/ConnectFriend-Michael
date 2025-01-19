<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="col-md-4">
            <h1 class="text-center mb-4">Register</h1>
            <form action="/register" method="post">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" placeholder="name@example.com"
                        name="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter your password"
                        name="password">
                </div>
                <div class="mb-3">
                    <label for="linkedin" class="form-label">linkedin</label>
                    <input type="text" class="form-control" id="linkedin" name="username_linkedin"
                        placeholder="Enter your linkedin username">
                </div>
                <div class="mb-3">
                    <label for="gender" class="form-label">Gender</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                        <label class="form-check-label" for="male">Male</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                        <label class="form-check-label" for="female">Female</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="interest" class="form-label">Interests</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="tennis" value="tennis" name="interest">
                        <label class="form-check-label" for="tennis">Tennis</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="basketball" value="basketball"
                            name="interest">
                        <label class="form-check-label" for="basketball">Basketball</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="football" value="football" name="interest">
                        <label class="form-check-label" for="football">Football</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="golf" value="golf" name="interest">
                        <label class="form-check-label" for="golf">Golf</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="swimming" value="swimming" name="interest">
                        <label class="form-check-label" for="swimming">Swimming</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="phoneNumber" class="form-label">Phone Number</label>
                    <input type="number" class="form-control" id="phoneNumber" name="phoneNumber"
                        placeholder="Enter your phone number" min="0">
                </div>
                <div class="text-center">
                    <input name="price" value="{{ $number }}"></input>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">register!</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
