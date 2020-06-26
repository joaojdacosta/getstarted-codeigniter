<section class="form">
    <form action="<?= base_url() ?>/home/altAlbum" method="post" class="form-card">
        <div class="form-field">
            <label for="artista">Artista</label>
            <input type="text" name="artista" id="artista" value="<?php echo $altCd['artista']; ?>" required minlength="5">
        </div>
        <div class="form-field">
            <label for="titulo">Título</label>
            <input type="text" name="titulo" id="titulo" value="<?php echo $altCd['titulo']; ?>" required minlength="5">
        </div>
        <div class="button">
            <button type="submit">Guardar Alterção</button>
        </div>
        <input type="hidden" name="id" value ="<?php echo isset($altCd['id'])?$altCd['id']:''; ?>">
    </form>
</section>
</body>

</html>