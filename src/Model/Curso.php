<?php

namespace Alura\Solid\Model;

class Curso implements Pontuavel, Assistivel
{
    private $nome;
    private $videos;
    private $feedbacks;

    public function __construct(string $nome)
    {
        $this->nome = $nome;
        $this->videos = [];
        $this->feedbacks = [];
    }

    public function receberFeedback(FeedBack $feedBack): void
    {
        $this->feedbacks[] = $feedBack;
    }

    public function adicionarVideo(Video $video)
    {
        if ($video->minutosDeDuracao() < 3) {
            throw new \DomainException('Video muito curto');
        }

        $this->videos[] = $video;
    }

    public function assistir() : void
    {
        foreach ($this->recuperarVideos() as $video) {
            $video->assistir();
        }
    }
    
    /** @return Video[] */
    public function recuperarVideos(): array
    {
        return $this->videos;
    }

    public function recuperaPontuacao(): int
    {
        return 100;
    }
}
