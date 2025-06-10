<?php
//D: representa dia da semana em inglês
//d: dia 
//M: mês por extenso em inglês
//m: número do mês
//y: ano com dois dígitos ex: 25
//Y: ano com 4 digítos ex: 2025

function exibeHoje() {
 $hoje = date( 'd/m/Y');
 echo $hoje;
}

function exibeData(){
    return date( 'D, d  \d\e  M \d\e   Y' );
}