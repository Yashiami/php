<?php
$totalPages = (int) ceil($pagination['count'] / $pagination['perPage']);
$from = $pagination['count'] > 0 ? (($pagination['page'] - 1) * $pagination['perPage']) + 1 : 0;
$to = min($pagination['count'], $pagination['page'] * $pagination['perPage']);
?>
<section class="city-search">
    <div class="city-search__intro">
        <div class="city-search__text">
            <h1 class="city-search__title">List of cities</h1>
            <p class="city-search__subtitle">
                Browse major cities worldwide and open a card to learn more about each location.
            </p>
        </div>
    </div>

    <ul class="city-grid">
        <?php foreach($entries as $city): ?>
            <li class="city-card">
                <a class="city-card__link" href="city.php?<?php echo http_build_query(['id' => $city->id]); ?>">
                    <span class="city-card__name"><?php echo e($city->city); ?></span>
                    <span class="city-card__country"><?php echo e($city->country); ?></span>
                    <?php if ($city->population): ?>
                        <span class="city-card__population">
                            Population: <?php echo e(number_format((int) $city->population)); ?>
                        </span>
                    <?php endif; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

    <div class="city-pagination">
        <div class="city-pagination__info">
            <?php if ($pagination['count'] > 0): ?>
                Showing <?php echo e($from); ?>–<?php echo e($to); ?> of <?php echo e($pagination['count']); ?> cities · Page <?php echo e($pagination['page']); ?> of <?php echo e($totalPages); ?>
            <?php else: ?>
                No results yet
            <?php endif; ?>
        </div>
        <div class="city-pagination__actions">
            <?php if ($pagination['page'] > 1): ?>
                <a class="button button--ghost" href="index.php?<?php echo http_build_query(['page' => $pagination['page'] - 1]); ?>">Prev</a>
            <?php endif; ?>
            <?php if ($pagination['perPage'] * $pagination['page'] < $pagination['count']): ?>
                <a class="button" href="index.php?<?php echo http_build_query(['page' => $pagination['page'] + 1]); ?>">Next</a>
            <?php endif; ?>
        </div>
    </div>
</section>
