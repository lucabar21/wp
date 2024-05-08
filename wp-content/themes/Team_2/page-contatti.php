<?php get_header(); ?>

<div class="contact-section my-4 mx-3">

    <div class="col-6 cont">
        <div>
            <h2>Contattaci</h2>
            <ul class="p-0">
                <li class="nav-link my-1"><i class="bi bi-geo-alt-fill"></i> via Roma, Milano (MI), Italy</li>
                <li class="nav-link my-1"><i class="bi bi-telephone-fill"></i> +02 02020202</li>
                <li class="nav-link my-1"><i class="bi bi-envelope-fill"></i> info@team.it</li>
            </ul>
        </div>
    </div>
    <div class="col-6 cont">
        <form>
            <div class="d-flex flex-column justify-content-center align-items-center">
                <h2>...oppure compila il form</h2>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Nome">
                    <input type="text" class="form-control" placeholder="Cognome">
                </div>
                <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="Email">
                </div>
                <div class="form-floating w-100">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                    <label style="color:#797D7E" for="floatingTextarea">Messaggio</label>
                </div>
                <button type="submit" class="form-btn my-2">Invia</button>
            </div>
        </form>
    </div>

</div>

<?php get_footer();