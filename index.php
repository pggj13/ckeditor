<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <form method="POST">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email"class="form-control"/>
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="nome"class="form-control"/>
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <textarea name="corpo" id="corpo"></textarea>
            </div>
            <input type="submit"value="Fazer Login" class="btn btn-default"/>
        </form>
        <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
        <script type="text/javascript">
        window.onload = function(){
            CKEDITOR.replace("corpo");
        }
        </script>
    </body>
</html>
