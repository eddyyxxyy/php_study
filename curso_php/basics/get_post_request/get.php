<?php 

/** GET
 * A superglobal GET pega os valores
 * que foram dispostos em uma query string,
 * por exemplo:
 * 
 * localhost:5000/?id=45&email=teste@gmail.com
 * 
 * Se chamarmos o 'var_dump($_GET);' teremos como
 * resultado:
 * 
 * array(2) { ["id"]=> string(2) "45" ["email"]=> string(18) "teste@gmail.com"}
 */