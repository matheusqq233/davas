<?php
class Validacao {

    public static function testarNome($valor) {
        // Agora permite letras maiúsculas, minúsculas e caracteres especiais como acentos
        $exp = '/^[a-zA-Z\sà-úÀ-ÚãÃõÕâÂêÊîÎôÔûÛáéíóúÁÉÍÓÚçÇ-]{1,50}$/';
        return preg_match($exp, $valor);
    }

    public static function testarCpf($valor) {
        $exp = '/^[0-9-.-]{3,16}$/';
        return preg_match($exp, $valor);
    }

    public static function testarSenha($valor) {
        // Verifica se a senha contém apenas números
        $exp = '/^[0-9]{6,12}$/';
        return preg_match($exp, $valor);
    }
    

    public static function testarDtNasc($valor){
        $exp = '/^\d{4}-\d{2}-\d{2}$/';
        if(preg_match($exp,$valor) ){
            return true;
        }else{
            return false;
        }//fecha o else
    }//fecha o método

    // Removido o método testarTipoNoticia

    public static function testarTipo($valor) {
        $exp = '/^(M|F|PF)$/';
        return preg_match($exp, $valor);
    }

    public static function testarTitulo($valor) {
        // Agora permite letras, números e caracteres especiais
        $exp = '/^[a-zA-Z0-9\s.,?!()_-]{1,50}$/';
        return preg_match($exp, $valor);
    }

    public static function testarTexto($valor) {
        // Agora permite letras, números e caracteres especiais
        $exp = '/^[a-zA-Z0-9\s.,?!()_-]{1,200}$/';
        return preg_match($exp, $valor);
    }

    public static function testarData($valor) {
        $data = DateTime::createFromFormat('Y-m-d', $valor);
        return $data !== false && $data > new DateTime('2023-10-24');
    }

    public static function testarHora($valor) {
        // Agora permite números e o caractere ':' no formato HH:mm:ss
        $exp = '/^[0-9:]{0,8}$/';
        return preg_match($exp, $valor);
    }

    public static function retirarEspacos($valor) {
        return trim($valor);
    }

    public static function escaparAspas($valor) {
        return addslashes($valor);
    }

    public static function validarFiltro($valor) {
        // Agora permite letras, números, '@', '_' e tem tamanho máximo de 20
        $exp = '/^[a-zA-Z0-9@_]{1,20}$/';
        return preg_match($exp, $valor);
    }
}
?>
