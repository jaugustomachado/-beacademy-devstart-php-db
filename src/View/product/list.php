<h1>Produtos</h1> <br>

<div class="mb-3">
    <a href="/produtos/novo" class= "btn btn-primary">Novo Produto</a>
    <a href="/produtos/relatorio" class= "btn btn-primary">Gerar Relatório</a>
</div>

<table class="table table-hover table-stripped">
    <thead class="table-dark">
        <tr>
            <th>#ID</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Imagem</th>
            <th>Preço</th>
            <th>Quantidade</th>
            <th>Data de cadastro</th>
            <th>Ações</th>
        </tr>
    </thead>
    
    <tbody>
        <?php
            while($product = $data->fetch(\PDO::FETCH_ASSOC)){
                extract($product);
                echo "
                    <tr>
                        <td>{$id}</td>
                        <td>{$name}</td>
                        <td>{$description}</td>
                        <td> <img width =100px src='{$photo}'</td>
                        <td> R$ {$value}</td>
                        <td>{$quantity}</td>
                        <td>{$created_at}</td>
                        <td>
                            <a href='/produtos/editar?id={$id}' class='btn btn-outline-warning btn-sm'>Editar</a>
                            <a href='/produtos/excluir?id={$id}' class='btn btn-outline-danger btn-sm'>Excluir</a>
                        </td>
                    </tr>
                ";
            }
        ?>
    </tbody>
</table>
