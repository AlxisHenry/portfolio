<?php

namespace App\View\Components;

use App\Helpers\Alert as HelpersAlert;
use Illuminate\View\Component;

class Alert extends Component
{
    public string $type;
    public string $title;
    public string $content;
    public int $delay;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(HelpersAlert $popup)
    {
        $this->type = $popup->type;
        $this->title = $popup->title;
        $this->content = $popup->content;
        $this->delay = $popup->delay;
    }

    public function render()
    {
        return view('components.alert');
    }
}