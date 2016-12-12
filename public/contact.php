
<?php include("../includes/layouts/header.php"); ?>
<div id="title">
    <h2>SEWAN ALE</h2>
    <h2> E-MAIL: kido184@hotmail.com</h2>
</div>

<section id="contact">
    <div class="container">
        <form name="htmlform" method="post" action="#">
            <input type="text" name="first_name" placeholder="NAME" required>
            <input type="email" name="email" placeholder="MAIL" required>
            <textarea name="comments" placeholder="MESSAGE" required> </textarea>
            <button name="send" type="submit" class="submit">SEND</button>

        </form>
    </div> <!-- End of container -->
</section> <!-- End of section -->

<?php include("../includes/layouts/footer.php"); ?>