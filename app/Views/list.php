<section class="container">
    <div class="list">
        <div class="list-content">
            <table class="table">
                <thead>
                    <th>Artista</th>
                    <th>Titulo</th>
                    <th>Acçao</th>
                </thead>
                <tbody>
                    <?php foreach ($albuns as $album) : ?>
                        <tr>
                            <td><?=$album['artista']?></td>
                            <td><?=$album['titulo']?></td>
                            <td>
                                <a href="<?= site_url('/home/editar/'.$album['id']);?>" class="btn primary">Editar</a>
                                <a href="http://" class="btn danger">Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>
</section>

<script src="<?= base_url() ?>/assets/script/js.js"></script>
</body>

</html>