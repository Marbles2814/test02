<h2><?= esc($title) ?></h2>

<?php if (! empty($flights) && is_array($flights)): ?>

    <?php foreach ($flights as $flights_item): ?>

        <h3><?= esc($flights_item['Airline']) ?></h3>

        <div class="main">
            <?= esc($flights_item['Price']) ?>
        </div>
        <p><a href="/flights/<?= esc($flights_item['id'], 'url') ?>">View article</a></p>

    <?php endforeach ?>

<?php else: ?>

    <h3>No News</h3>

    <p>Unable to find any news for you.</p>

<?php endif ?>
