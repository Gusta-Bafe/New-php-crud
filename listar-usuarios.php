<?php 
    $sql = "SELECT * FROM usuarios ";

    $res = $conn->query($sql);

    $qtd = $res -> num_rows;

    if($qtd > 0 ){

        print "<table class='table table-hover table-striped table-bordered'>";
        
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
    }
?>