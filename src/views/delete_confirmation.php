<main class="content">
    <div class="background-color">
        <div class="foreground">
            <div class="card">
                <h3>Tem certeza?</h3>
                <div class="btns">
                    <a href="users.php" class="btn btn-secondary btn-lg">Cancelar</a>
                    <a href="users.php?confirm_delete=<?= $_GET['delete'] ?>" class="btn btn-danger btn-lg">Deletar</a>
                </div>
            </div>
        </div>
    </div>
    <div class="background">
        <?php
            renderTitle(
                "Cadastro de Usuários",
                "Mantenha os dados dos usuários atualizados",
                'icofont-users'
            );
    
            include(TEMPLATE_PATH . '/messages.php');
    
        ?>
        <a href="save_user.php" class="btn btn-lg btn-primary mb-3">Novo Usuário</a>
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <th>Nome</th>
                <th>Email</th>
                <th>Data de Admissão</th>
                <th>Data de Desligamento</th>
                <th>Ações</th>
            </thead>
            <tbody>
                <?php foreach($users as $user): ?>
                    <tr>
                        <td><?= $user->name ?></td>
                        <td><?= $user->email ?></td>
                        <td><?= $user->start_date ?></td>
                        <td><?= $user->end_date ?></td>
                        <td>
                            <a href="save_user.php?update=<?= $user->id ?>" class="btn btn-warning rounded-circle mr-2">
                                <i class="icofont-edit"></i>
                            </a>
                            <a href="?delete=<?= $user->id ?>" class="btn btn-danger rounded-circle">
                                <i class="icofont-trash"></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</main>
<style>
    .content {
        overflow: hidden;
    }
    .background {
    }
    .background-color {
        z-index: 11;
        background: rgba(0, 0, 0, 0.5);
        width: 100%;
        top: 0%;
        left: 0%;
        height: 100%;
        position: absolute;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .foreground {
        z-index: 12;
        /* position: absolute; */
        min-width: 500px;
        min-height: 300px;
    }
    .foreground .card {
        display: flex;
        flex-direction: column;
        text-align: center;
        border-radius: 20px;
        background-color: #EEE;
        color: #333;
        padding: 100px;
    }
    .foreground .card .btns {
        display: flex;
        justify-content: space-between;
        margin: 20px;
        position: relative;
        bottom: -30px;
    }

    .foreground .card .btns a {
        margin-right: 20px;
        font-size: 1.8rem;
        color: white;
        padding: 5px 30px;
        
    }
</style>