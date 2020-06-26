<section class="form">
    <form action="<?= base_url() ?>/home/store" method="post" class="form-card">
        <div class="form-field">
            <label for="artista">Artista</label>
            <input type="text" name="artista" id="artista" placeholder="Informe o artista do album" required minlength="3">
        </div>
        <div class="form-field">
            <label for="titulo">Título</label>
            <input type="text" name="titulo" id="titulo" placeholder="Informe o titulo do album" required minlength="5">
        </div>
        <div class="button">
            <button type="submit">Registar Album</button>
        </div>
    </form>
</section>
</body>

</html>