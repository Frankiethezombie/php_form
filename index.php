<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>hackers_poulette</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="./assets/css/style.css">
    </head>
    <body>

        <div class="container-fluid">

            <header class="row justify-content-center">
                <div class="col">
                <figure class="row justify-content-center">
                    <img src="./assets/images/hackers-poulette-logo.png" alt="logo hackers poulette" id="logo">
                </figure>
                <p class="row justify-content-center"id="contact">Contact us</p>

                </div>

            </header>

            <div class="row justify-content-center">

                <form action="result.php" method="post" class="col-xs-12 col-lg-10 needs-validation" id="form" novalidate>

                    <input id="website" name="website" type="text" value=""  />
                    
                    <div class="row justify-content-center" id="content">
                        <input type="text" name="fname" placeholder="first name" class="col-10 form-control" required>
                    </div>

                    <div class="row justify-content-center" id="content">
                        <input type="text" name="lname" placeholder="last name" class="col-10 form-control" required>

                    </div>
                    
                    <div class="row justify-content-center" id="content">
                        <input type="email" name="mail" placeholder="email@mailexample.com" class="col-10 form-control" required>
                    </div>
                    
                    <div class="row justify-content-center" id="content">
                        <select name="country" class="col-10 form-control" required>
                            <option value="" disabled selected>Select your country</option>
                            <option value="Belgium">Belgium</option>
                            <option value="Luxemburg">Luxemburg</option>
                            <option value="France">France</option>
                            <option value="Portugal">Portugal</option>
                            <option value="Spain">Spain</option>
                        </select>
                    </div>
                    
                    <div class="row justify-content-around" id="content">
                        <input type="radio" name="gender" value="F" ><label for="F">F</label>
                        <input type="radio" name="gender" value="M" ><label for="M">M</label>
                        <input type="radio" name="gender" value="O" ><label for="O">Other</label>
                        <input type="radio" name="gender" value="no" ><label for="no">Prefer not to say</label>
                    </div>

                    <div class="row justify-content-center" id="content">
                        <select name="subject" placeholder="problem category" class="col-10 form-control" required>
                            <option value="" disabled selected>Select your problem</option>
                            <option value="broken">My package arrived damaged</option>
                            <option value="missing">My package is missing</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div class="row justify-content-center" id="content">
                        <textarea name="message"  cols="30" rows="10" placeholder="your message here" class="form-control" required></textarea>
                    </div>
                    
                    <div class="row justify-content-end" id="content">
                        <input type="submit" value="Submit">
                    </div>

                </form>
            </div>

        </div>
        

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script>
        
        $('form').submit(function()
        {    
            if ($('input#website').val().length != 0) 
            {
                return false;
            }
        });
        
        (function() 
        {
            'use strict';
            window.addEventListener('load', function() 
            {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');

                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) 
                {
                    form.addEventListener('submit', function(event) 
                    {
                        if (form.checkValidity() === false) 
                        {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
        </script>
    </body>
</html>