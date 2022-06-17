<h1>Categorias</h1> <br>

<div class="mb-3">
    <a href="/categorias/nova" class= "btn btn-primary">Nova Categoria</a>
</div>

<table class="table table-hover table-striped">
    <thead class = "table-dark">
        <tr>
            <th>#ID</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php
            while($categoria = $data->fetch(\PDO::FETCH_ASSOC) ){
                extract ($categoria);
                echo'<tr>';
                    echo "<td>{$id}</td>";
                    echo "<td>{$name}</td>";
                    echo "<td>{$description}</td>";
                     echo "<td>
                        <a href='/categorias/editar?id={$id}' class='btn btn-warning btn-sm'> Editar </a>
                        <a href='/categorias/excluir?id={$id}' class='btn btn-danger btn-sm'> Excluir </a>
                    </td>";
                echo'</tr>';
            }
        ?>
    </tbody>

</table>

