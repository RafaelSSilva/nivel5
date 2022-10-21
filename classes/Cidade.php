<?php

class Cidade {
    public static function lista_combo_cidades ($id = null) {
        $conn = new PDO('mysql:host=127.0.0.1;port=3306;dbname=livro', 'root', '');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $result = $conn->query("SELECT id, nome FROM cidade");
        $output = '';
        foreach($result->fetchAll() as $cidade) {
            $check  = ($cidade['id'] == $id) ? 'selected=1' : '';
            $output .= "<option $check value='{$cidade['id']}'>{$cidade['nome']}</option>\n";
        }

        return $output;
    }
}