<meta charset="UTF-8">

<h1>editar categoria</h1>

<form action="" method="post">
    <label for="name">Nome</label>
    <input value="<?php echo $data['name'] ?>" id="name" name="name"  type="name" class="form-control mb-3">
    
    <label for="description">Descrição</label>
    <textarea id="description" name="description"  type="description" class="form-control mb-3"><?php echo $data['description']; ?></textarea>
    
    <button class="btn btn-primary mb-3">Atualizar</button>
</form>