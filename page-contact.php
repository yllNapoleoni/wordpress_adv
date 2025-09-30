<?php
get_header();

?>

<div id="content" class="side-content">
    <main id="main" class="site-main">
        <section class="conact-hero">
            <div class="container">
                <h1>contact us</h1>
                <p>we would love to hear from you</p>
            </div>

        </section>

        <section class="contact-form-section">
            <div class="container">
                <form action="" method="post" class="contact-form">

                <p>
                    <label for="name">your name:</label>
                    <input type="text" id="name"
                    name="name" required>
                </p>
                <p>
                    <label for="email">your email:</label>
                    <input type="email" id="email" name="email" required>
                </p>
                <p>
                    <label for="subject">subject</label>
                    <input type="text" id="subject" name="subject">
                </p>
                <p>
                    <label for="message">message:</label>
                    <textarea name="message" id="message"
                     rows="6" required></textarea>
                </p>
                <p>
                    <input type="submit" name="submit_contact" value="send message">
                </p>

                </form>

            </div>

        </section>

    </main>

</div>
<?php get_footer();?>