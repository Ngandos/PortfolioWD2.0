<?php
    include '../parts/header.php';
    include '../connect/connectmysql.php';
?>
<style>
    p {
       margin-top: 10%;
       width: 50%;
            }

    #details {
       width: 50%;
            }

    h1 {
       margin-left: 5%;
            }

    form {
        width: 50%;
        height: 70%;
        margin: auto;
        margin-bottom: 5%;
        padding: 5px;
        display: flex;
        flex-wrap: wrap;
        color: wheat;
        border: wheat solid 1px;
        border-radius: 1em;
        box-shadow: white 2px 2px 2px;
            }

    label, input {
        width: 80%;
        height: 5%;
        margin: auto;
        border-radius: 1em;
            }

    textarea {
        width: 80%;
        height: 20%;
        margin: auto;
        color: black;
        border-radius: 1em;
            }

    input, textarea {
        font-size: large;
        color: black;
            }
</style>
<title>Contact Me</title>
<h1>Contact Me</h1>
<form action="contactchecking.php" method="POST">
    <label for="name">Nom :</label><br>
    <input type="text" name="name" placeholder="Nom" required ><br>
    <label for="name">Prénom :</label><br>
    <input type="text" name="prenom" placeholder="Prénom" require><br>
    <label for="email">E-mail :</label><br>
    <input type="email" name="email" placeholder="E-mail" required><br>
    <label for="message">Message :</label>
    <textarea name="message" placeholder="message"></textarea><br>
    <input type="submit"></input>
</form>
<?php
    include '../parts/footer.php';
?>