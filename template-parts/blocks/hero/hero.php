<?php
$hero_image = get_field('hero_image');
$hero_heading = get_field('hero_heading');
$hero_text = get_field('hero_text');
?>

<?php if ($hero_image) : ?>
    <section class="border-b border-gray-500 border-none w-full max-w-screen-2xl py-4 lg:py-10 px-4 h-[70vh] bg-center bg-cover flex flex-col justify-center" style="background-image: url('<?php echo $hero_image['url']; ?>');">
        <div class="text-center">
            <h1 class="text-6xl"><?php echo esc_attr($hero_heading); ?></h1>
            <h3><?php echo esc_attr($hero_text); ?></h3>
        </div>
    </section>
<?php else : ?>
    <section class="border-b border-gray-500 border-none w-full max-w-screen-2xl py-4 lg:py-10 px-4 h-[70vh] bg-center bg-cover flex flex-col justify-center">
        <div class="flex flex-row justify-center lg:h-screen">
        <div class="text-center">
            <img class="object-cover loading=lazy" src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/placeholder.png" alt="placeholder">
            <h1 class="text-3xl font-extrabold sm:text-5xl"><?php echo esc_attr($hero_heading); ?></h1>
            <strong class="font-extrabold sm:block"><?php echo esc_attr($hero_text); ?></strong>
        </div>
        </div>
    </section>
<?php endif; ?>