<?php
$bw_authors = ["Matteo", "Francesco", "Luca", "Simone"];
shuffle($bw_authors);
?>

</div>
<footer class="py-3 text-white container-fluid">
    <div class="container">
        <div class="fs-3">
            <i class="bi bi-instagram mx-1"></i>
            <i class="bi bi-facebook mx-1"></i>
            <i class="bi bi-twitter-x mx-1"></i>
            <i class="bi bi-telegram mx-1"></i>
        </div>
        <div>about</div>
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