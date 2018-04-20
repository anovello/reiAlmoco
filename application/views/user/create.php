<div class="container">
    <div class="row">
        <div class="col-12">
            <form method="POST" enctype="multipart/form-data"  name="formCreateUser" id="formCreateUser">
                <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="text" class="form-control" id="name" aria-describedby="name" placeholder="Digite seu Nome" required>
                </div>

                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Digite seu E-mail" required>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Foto</label>
                    <input type="file" class="form-control" id="file" name="file" placeholder="foto" required>
                </div>
                
                <button type="button" class="btn btn-primary" id="createUser">Salvar</button>
            </form>
        </div>
    </div>
    
</div>