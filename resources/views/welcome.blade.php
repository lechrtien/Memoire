<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login & Signup Form</title>
    <link rel="stylesheet" href="{{asset('Formulaire/style.css')}}" />
</head>

<body>
    <section class="wrapper">
        <div class="form signup">
            <header>S'inscrire</header>
            <form action="#">
                <input type="text" placeholder="Nom" required />
                <input type="text" placeholder="E-mail" required />
                <input type="password" placeholder="Mot de passe" required />
                <input type="password" placeholder=" Confimez le mot de passe" required />
                <div class="checkbox">
                    <input type="checkbox" id="signupCheck" />
                    <label for="signupCheck">J'accepte tous les termes et condition</label>
                </div>
                <input type="submit" value="S'inscrire" />
            </form>
        </div>

        <div class="form login">
            <header>Se connecter</header>
            <form action="#">
                <input type="text" placeholder="E-mail" required />
                <input type="password" placeholder="Mot de passe" required />
                <a href="#">Mot de passe oublié?</a>
                <input type="submit" value="Se connecter" />
            </form>
        </div>

        <script>
            const wrapper = document.querySelector(".wrapper"),
                signupHeader = document.querySelector(".signup header"),
                loginHeader = document.querySelector(".login header");

            loginHeader.addEventListener("click", () => {
                wrapper.classList.add("active");
            });
            signupHeader.addEventListener("click", () => {
                wrapper.classList.remove("active");
            });
        </script>
    </section>
</body>

</html>
