<?php get_header(); ?>
    <div class="container">
        <div class="py-3">
        <div class="row">
            <div class="col-6">
                <div>
                    <h2>Contattaci...</h2>
                    <ul class="p-0">
                        <li class="nav-link my-1"><i class="bi bi-geo-alt-fill"></i> via Roma, Milano (MI), Italy</li>
                        <li class="nav-link my-1"><i class="bi bi-telephone-fill"></i> +02 02020202</li>
                        <li class="nav-link my-1"><i class="bi bi-envelope-fill"></i> info@team.it</li>
                    </ul>
                </div>
            </div>
            <div class="col-6">
                <div>
                    <h2>... oppure compila il form</h2>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Nome">
                            <input type="text" class="form-control" placeholder="Cognome">
                        </div>
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                            <label for="floatingTextarea">Messaggio</label>
                        </div>
                        <button class="my-2">Invia</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer();