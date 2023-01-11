<?php 

/** POST
 * A superglobal POST pega os valores
 * pelo Header. De forma oculta, dife-
 * rente do método GET, o POST pega
 * esses valores "por debaixo dos panos".
 * 
 * Por exemplo, nos dados de um formulário
 * recebido temos uma query string, porém,
 * sem o sinal de ?, já que essa query
 * string não está na url.
 * 
 * Quando solicitamos o valor específico ou
 * o array advindo da superglobal $_POST,
 * não obtemos essa query string de forma
 * crua, o PHP dá um jeito de decodificar
 * e então os apresentar como um tipo de dado
 * do próprio PHP.
 */
