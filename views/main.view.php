<div class="project-card">
    <h3><?php echo isset($article['title']) ? $article['title'] : ''; ?></h3>
    <p><?php echo isset($article['content']) ? $article['content'] : ''; ?></p>

    <?php if (!empty($article['languages'])): ?>
        <p><strong>Languages/Tech:</strong> <?php echo $article['languages']; ?></p>
    <?php endif; ?>

    <?php if (!empty($article['link'])): ?>
        <a href="<?php echo $article['link']; ?>" target="_blank">See More</a>
    <?php endif; ?>
</div>
