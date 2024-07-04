<?php include("views/components/head.php") ?>

<!-- Si un utilisateur est login, affiche un panel d'administration -->
<?php if(!empty($_SESSION["user_id"])): ?>
    <?php include("views/components/index/admin.php") ?>
<?php endif ?>

<?php include("views/components/index/header.php") ?>

<main>
    <?php include("views/components/index/btn-up.php") ?>
    <?php include("views/components/index/hero.php") ?>
    <?php include("views/components/index/menu.php") ?>
    <?php include("views/components/index/about.php") ?>
    <?php include("views/components/index/marquee.php") ?>
    <?php include("views/components/index/history.php") ?>
    <?php include("views/components/index/comments.php") ?>
    <?php include("views/components/index/contact.php") ?>
    <?php include("views/components/index/newsletter.php") ?>
</main>

<?php include("views/components/index/footer.php") ?>
<?php include("views/components/foot.php") ?>