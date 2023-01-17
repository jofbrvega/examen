<?php
$hero_50_heading = get_field('hero_50_heading');
$hero_50_text = get_field('hero_50_text');
$hero_50_image = get_field('hero_50_image');
?>

<section class="bg-white border-2 dark:bg-gray-900">
    <div class="grid grid-cols-2">
        <div>
            <h1><?php echo esc_attr($hero_50_heading); ?></h1>
            <h3><?php echo esc_attr($hero_50_text); ?></h3>
        </div>
        <div>
            <img class="w-10 h-10" src="<?php echo $hero_50_image['url']; ?>" alt="<?php $hero_50_image['alt']; ?>">
        </div>
    </div>
</section>