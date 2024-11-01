<?php

namespace Alura\Solid\Service;

use Alura\Solid\Model\Pontuavel;
//Foi usado o Design Pattern Strategy
//Também foi utilizado o "O" do SOLID
//Aberto para extensão, mas fechado para manutenção
class CalculadorPontuacao
{
    public function recuperarPontuacao(Pontuavel $conteudo)
    {
        return $conteudo->recuperaPontuacao();
    }
}
