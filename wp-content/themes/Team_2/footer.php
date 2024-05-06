<?php
$bw_authors = ["Matteo", "Francesco", "Luca", "Simone"];
shuffle($bw_authors);
?>

</div>
<footer class="py-3 text-white container-fluid">
    <div class="container">
        <div class="d-flex justify-content-end gap-3 my-1 fs-4">
            <i class="bi bi-instagram"></i>
            <i class="bi bi-facebook"></i>
            <i class="bi bi-twitter-x"></i>
            <i class="bi bi-telegram"></i>
        </div>
        <div class="row row-cols-4">
            <div class="col">
                <div>Destinazioni</div>
                <div class="fs-6 text-white-50">
                    <div class="nav-link">Asia</div>
                    <div class="nav-link">Africa</div>
                    <div class="nav-link">Europa</div>
                    <div class="nav-link">America</div>
                </div>
            </div>
            <div class="col">
            <div>Servizi</div>
                <div class="fs-6 text-white-50">
                    <div class="nav-link">Voli</div>
                    <div class="nav-link">Biglietti</div>
                </div>
            </div>
            <div class="col">
                <div>Help</div>
                <div class="fs-6 text-white-50">
                    <div>Privacy Policy</div>
                    <div>FAQ</div>
                </div>
            </div>
            <div class="col">
                <div>Contatti</div>
                <div class="fs-6 text-white-50">
                    <div><i class="bi bi-geo-alt-fill"></i> via Roma, Milano (MI), Italy</div>
                    <div><i class="bi bi-telephone-fill"></i> +02 02020202</div>
                    <div><i class="bi bi-envelope-fill"></i> info@team.it</div>
                </div>
            </div>
        </div>
        <div class="text-center border-top border-white pt-3 mt-3">
            Made with<span class="text-danger mx-2">♥</span>by 
            <?php foreach($bw_authors as $bw_author) {
                echo $bw_author . " ";
            }
            ?>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
<?php wp_footer(); ?>
</body>

</html>