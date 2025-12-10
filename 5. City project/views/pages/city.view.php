<?php
/**
 * @var WorldCityModel $city
 */
?>
<section class="city-details">
    <div class="city-details__header">
        <h1>City: <?php echo e($city->getCityWithCountry()); ?></h1>
        <a class="button button--ghost" href="index.php"
           onclick="if (window.history.length > 1) { history.back(); return false; }">
            Back
        </a>
    </div>
    <table>
        <tbody>
            <tr>
                <th>City name:</th>
                <td><?php echo e($city->city); ?></td>
            </tr>
            <tr>
                <th>City name (ascii):</th>
                <td><?php echo e($city->cityAscii); ?></td>
            </tr>
            <tr>
                <th>Country:</th>
                <td><?php echo e($city->country); ?></td>
            </tr>
            <tr>
                <th>Flag of the country:</th>
                <td><?php echo e($city->getFlag()); ?></td>
            </tr>
            <tr>
                <th>ISO2 code of country:</th>
                <td><?php echo e($city->iso2); ?></td>
            </tr>
            <tr>
                <th>Population:</th>
                <td><?php echo e($city->population); ?></td>
            </tr>
        </tbody>
    </table>
</section>
