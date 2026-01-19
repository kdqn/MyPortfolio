<?php
// Navigation items
$navItems = [
    ['title' => 'Home',       'route' => ''],
    ['title' => 'About',      'route' => 'about'],
    ['title' => 'Projects',   'route' => 'projects'],
    ['title' => 'Resume',     'route' => 'resume.pdf', 'external' => true],
    ['title' => 'Experience','route' => 'experience'],
    ['title' => 'Contact',    'route' => 'contact'],
    ['title' => 'Login',      'route' => 'login']
];
?>

<!-- Hamburger menu toggle -->
<input type="checkbox" id="active">
<label for="active" class="menu-btn"><span></span></label>
<label for="active" class="close"></label>

<div class="wrapper">
    <ul class="wrapper">
        <?php foreach ($navItems as $item): ?>
            <?php
                // Determine href
                $href = (isset($item['external']) && $item['external'])
                        ? URL_ROOT . 'media/' . $item['route']   // for resume.pdf
                        : URL_ROOT . $item['route'];            // for front controller pages
            ?>
            <li>
                <a href="<?= $href ?>">
                    <h2 data-name="<?= htmlspecialchars($item['title']) ?>">
                        <?= htmlspecialchars($item['title']) ?>
                    </h2>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>

<aside class="_social-links">
    <ul class="_links-list">
        <li class="_social-link">
            <a href="https://www.linkedin.com/in/caydenodegard/" target="_blank">
                <i class="fa-brands fa-linkedin"></i>linkedin
            </a>
        </li>
        <li class="_social-link">
            <a href="https://github.com/kdqn/" target="_blank">
                <i class="fa-brands fa-github"></i>github
            </a>
        </li>
        <li class="_social-link">
            <a href="mailto:cayden.odegard@gmail.com" target="_blank">
                <i class="fa-solid fa-at"></i>email me
            </a>
        </li>
    </ul>
</aside>
