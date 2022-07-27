<!-- 
    snippet('picture', [
        'image'      => $image,
        'autoOrient' => $autoOrient,
        'crop'       => $crop,
        'blur'       => $blur,
        'grayscale'  => $grayscale,
        'height'     => $height,
        'quality'    => $quality,
        'width'      => $width,
        ]);
-->
<?php
$image = $image;
$srcset = [
    'autoOrient' => $autoOrient,
    'crop'       => $crop,
    'blur'       => $blur,
    'grayscale'  => $grayscale,
    'height'     => $height,
    'quality'    => $quality,
    'width'      => $width,
]
?>

<picture>
    <source srcset="<?= $image->srcset('avif') ?>" sizes="<?= $sizes ?>" type="image/avif">
    <source srcset="<?= $image->srcset('webp') ?>" sizes="<?= $sizes ?>" type="image/webp">
    <img alt="<?= $image->alt() ?>" src="<?= $image->resize(300)->url() ?>" srcset="<?= $image->srcset() ?>" sizes="<?= $sizes ?>" width="<?= $image->resize(1800)->width() ?>" height="<?= $image->resize(1800)->height() ?>">
</picture>