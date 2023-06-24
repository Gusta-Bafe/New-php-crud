<?php 
    $sql = "SELECT * FROM usuarios ";

    $res = $conn->query($sql);

    $qtd = $res -> num_rows;

    if($qtd > 0 ){

        print "<table class='table table-hover table-striped table-bordered'>";
<<<<<<< HEAD
        print"<tr>";
        print "<th>#</th>";
        print "<th>NOME</th>";
        print "<th>E-MAIL</th>";
        print "<th>DATA NASCIMENTO</th>";
        print"</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>". $row->id."</td>";
            print "<td>". $row->nome."</td>";
            print "<td>".$row->email."</td>";
            print "<td>".$row->data_nasc."</td>";
            print "<td> 
                    <button onclick=\"location.href='?page=editar&id=".$row->id."'; \" class = 'btn btn-success'> Editar </button>
                    
                    <button onclick=\"if(confirm('Tem certeza que deseja excluir o usuário permanentemente?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\" class='btn btn-danger'>Excluir</button>


                </td>";

            print "</tr>";
        }
        print "</table>";

    }else{
        print"<p class = 'alert alert-danger'>Sem resultados</p>";
=======
        
        print "<th>NOME<th>";
        print "<th>E-MAIL<th>";
        print "<th>DATA NASCIMENTO<th>";
        
        while($row = $res->fetch_Object()){
            print "<tr>";
            print "<td>". $row->nome."<td>";
            print "<td>".$row->email."<td>";
            print "<td>".$row->data_nasc."<td>";
            print "<td> 
                    <button class = 'btn btn-success'> Editar </button>
                    <button class = 'btn btn-danger'> Excluir </button>
            

                <td>";

            print "</tr>";
        }
        print "<table>";

    }else{
        print"<p class = 'alert alert-danger'>Não a usuarios na lista</p>";
>>>>>>> 007dbeefd923c765c4f17dc255c6f24330f5df02
    }
?>