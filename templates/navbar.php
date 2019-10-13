<?php
const LANGUAGES = [
    '#ru' => 'Russian',
    '#en' => 'English',
    '#ch' => 'Chinese',
    '#ind' => 'Indian'
]
?>
<nav>
    <div class="nav-wrapper">
        <a href="#" class="brand-logo">Catagram</a>
        <ul class="right hide-on-med-and-down">
            <!-- Dropdown Trigger -->
            <li>
                <a class="dropdown-trigger" href="#!" data-target="dropdown1">languages
                    <i class="material-icons right">arrow_drop_down</i>
                </a>
                <ul id="dropdown1" class="dropdown-content">
                    <?php foreach (LANGUAGES as $key => $feature) : ?>
                        <li><a href=<?= $key ?>><?= $feature ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </li>
        </ul>
    </div>
</nav>
