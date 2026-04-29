<?php

namespace App\Cells;

class Header
{
    public function render(array $params): string
    {
        return <<<HTML
        <header class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class=\"container\">
            <a href="/" class="navbar-brand">Commentiter</a>
          </div>
        </header>
        HTML;
    }
}
