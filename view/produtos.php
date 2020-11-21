<?php 

    use App\Config;

    $page->name = "Produtos";
    $page->addCss('pages/produtos/main');
    $page->addCss('components/produto');
    $page->addScript('pages/produtos/main');
    $page->activeMenu = 'produtos';

    $produtos = Model\Produto::getAll();

    $page->setTitle(Config::GET("NOME_PROJETO"));
?>

<?php include('components/header.php') ?>

<div class="content">

    <div class="aside">
        <?php include("components/asideMenu.php") ?>
    </div>
    <div class="content">
        <h1 class="title"><?= $page->name ?></h1>
        <div id="produtos-wrapper">
        <?php foreach($produtos as $produto): ?>
            <?php include('components/produto.php'); ?>
        <?php endforeach; ?>
        </div>
    </div>

    
</div>

<?php include('components/footer.php') ?>
