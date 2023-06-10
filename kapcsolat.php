<?php include "pages/begin.php"; ?>

    <!-- FORM -->
    <section class="form-section">
        <div class="form-container">
            <h2>Küldjön nekünk emailt!</h2>
        <form class="contact-form" action="kapcsolat-form.php" method="post">
            <div class="form-group">
                <input type="text" name="name" placeholder="Teljes név">
            </div>

            <div class="form-group">
                <input type="email" name="email" placeholder="Email">
            </div>

            <div class="form-group">
                <input type="text" name="subject" placeholder="Tárgy">
            </div>

            <div class="form-group">
            <textarea name="message" placeholder="Üzenet"> </textarea>
            </div>
        
            <button type="submit" name="submit">Küldés</button>
        </form>
    </div>
    </section>
    <!-- FORM END-->
    <?php include "pages/end.php"; ?>