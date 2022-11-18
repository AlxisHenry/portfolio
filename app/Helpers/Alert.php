<?php

namespace App\Helpers;

class Alert {

    public string $type;
    public string $title;
    public string $content;
    public int $delay;

    public function __construct(string $type, string $title, string $content, bool $create = false, int $delay = 4000) {
        $this->type = $type;
        $this->title = $title;
        $this->content = $content;
        $this->delay = $delay;
        if ($create) $this->create();
    }

    public function create(): array
    {
        return [
            'type' => $this->type,
            'title' => $this->title,
            'content' => $this->content,
            'delay' => $this->delay
        ];
    }

}