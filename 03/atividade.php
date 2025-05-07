<h1>Lista de Alunos</h1>
<ul>
    <?php
    /*
Crie um array com 4 nomes de alunos e exiba-os em uma lista <ul>
no navegador
*/

    $alunos = ["Pedro", "Joel", "Maria"];
    foreach ($alunos as $aluno) {
        echo "<li> $aluno </li>";
    }
    ?>

</ul>