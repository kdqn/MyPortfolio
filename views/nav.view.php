<?php
// Your nav array, keep exactly as before
$nav = [
    'nav' => [
        ['linktitle' => 'Home', 'linkname' => URL_ROOT . 'index.php'],
        ['linktitle' => 'About', 'linkname' => URL_ROOT . 'pages/about.php'],
        ['linktitle' => 'Projects', 'linkname' => URL_ROOT . 'pages/projects.php'],
        ['linktitle' => 'Resume', 'linkname' => URL_ROOT . 'media/resume.pdf'],
        ['linktitle' => 'Experience', 'linkname' => URL_ROOT . 'pages/experience.php'],
        ['linktitle' => 'Contact', 'linkname' => URL_ROOT . 'pages/contact.php'],
        ['linktitle' => 'Login', 'linkname' => URL_ROOT . 'pages/login.php']
    ]
];
?>

<!-- Hamburger menu toggle -->
<input type="checkbox" id="active">
<label for="active" class="menu-btn"><span></span></label>
<label for="active" class="close"></label>

<div class="wrapper">
    <ul class="wrapper">
        <?php
        for ($i = 0; $i < count($nav['nav']); $i++) {
            echo "<li>";
            echo "<a href=\"" . $nav['nav'][$i]['linkname'] . "\"><h2 data-name=\"" . $nav['nav'][$i]['linktitle'] . "\">" . $nav['nav'][$i]['linktitle'] . "</h2></a>";
            echo "</li>";
        }
        ?>
    </ul>
</div>

<aside class="_social-links">
    <ul class="_links-list">
        <li class="_social-link"><a href="https://www.linkedin.com/in/caydenodegard/" target="_blank"><i class="fa-brands fa-twitter"></i>linkedin</a></li>
        <li class="_social-link"><a href="https://github.com/kdqn/" target="_blank"><i class="fa-brands fa-github"></i>github</a></li>
        <li class="_social-link"><a href="mailto:cayden.odegard@gmail.com" target="_blank"><i class="fa-solid fa-at"></i>email me</a></li>
    </ul>
</aside>
