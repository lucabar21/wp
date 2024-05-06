<?php get_header(); ?>
<!-- HERO SECTION -->
<div class="hp-section my-4 mx-3">
    <img class="hero-img" src="http://placedog.net/455" alt="hero">
    <div class="hero-text">
        <h2>TITOLO DESTINAZIONE</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut optio vero tenetur quia unde. Natus nobis dolores
            laboriosam veli, hic veniam. Facilis amet explicabo, exercitationem atque ea a molestias laborum?</p>
        <button>Scopri di più</button>
    </div>
</div>
<!-- PROMO -->
<div class="hp-bot-section-3 my-4 mx-3">
    <div id="promo-img"><img src="wp-content\uploads\2024\05\promo.png" alt="promo"></div>
    <div id="promo-btn">
        <h5>APPROFITTA DEI NOSTRI IMPERDIBILI SCONTI VIAGGIO!</h5>
        <div>COUPON 50%</div>
    </div>
</div>

<!-- LATEST POST SECTION -->
<div class="hp-section-2 my-4 mx-3">
    <h5>Dai un'occhiata alle destinazioni che abbiamo proposto le settimane precedenti.</h5>
    <div class="row justify-content-center past">
        <div class="col-auto hp-card">
            <img src="http://placedog.net/200" alt="card">
            <div class="hero-text">
                <h2>TITOLO DESTINAZIONE</h2>
                <button>Scopri di più</button>
            </div>
        </div>
        <div class="hp-card col-auto">
            <img src="http://placedog.net/201" alt="card">
            <div class="hero-text">
                <h2>TITOLO DESTINAZIONE</h2>
                <button>Scopri di più</button>
            </div>
        </div>
        <div class="hp-card col-auto">
            <img src="http://placedog.net/202" alt="card">
            <div class="hero-text">
                <h2>TITOLO DESTINAZIONE</h2>
                <button>Scopri di più</button>
            </div>
        </div>
        <div class="hp-card col-auto">
            <img src="http://placedog.net/203" alt="card">
            <div class="hero-text">
                <h2>TITOLO DESTINAZIONE</h2>
                <button>Scopri di più</button>
            </div>
        </div>
    </div>
</div>
<!-- CALL TO ACTION FORM -->
<div class="hp-top-section-3 my-4 mx-3">
    <h5 class="my-3">Consigliaci nuove destinazioni che vorresti presentassimo nelle prossime settimane!</h5>
    <form>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Inserisci il tuo nome</label>
            <input type="text" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Inserisci il tuo indirizzo email</label>
            <input type="email" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Dacci un consiglio...</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
    </form>
</div>
<?php get_footer(); ?>