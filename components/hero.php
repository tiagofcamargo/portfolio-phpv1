<?php
    $itens = [
        ['href' => 'https://www.instagram.com/tiagofcamargo/', 'icons' => '<i class="fa-brands fa-instagram fa-xl text-white-100 transition ease-in-out delay-3 hover:text-cyan-600"></i>'],
        ['href' => 'https://wa.link/ob6l76', 'icons' => '<i class="fa-brands fa-whatsapp fa-xl text-white-100 transition ease-in-out hover:text-cyan-600"></i>'],
        ['href' => 'mailto:contato@tiagocamargo.com', 'icons' => '<i class="fa-regular fa-envelope fa-xl text-white-100 transition ease-in-out hover:text-cyan-600"></i>'],
    ];
?>

<section class="flex gap-x-3 my-6">
    <!-- Titulo e descrição -->
    <div class="w-2/3">
        <h1 class="text-3xl font-bold">Oi, Meu nome é Tiago!</h1>
        <p class="text-xl leading-6 mt-6">
            Falando um pouco sobre mim, sou um desenvolvedor web que adora criar coisas novas e aprender novas tecnologias.
            Especializado em PHP, Wordpress e estudante de Laravel, mas também tenho conhecimento em Security e Devops.
        </p>
        <ul class="flex gap-x-5 mt-6">
            <?php foreach ($itens as $item): ?>
                <li>
                    <a href="<?=$item['href']?>" target="_blank">
                        <?=$item['icons']?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <!-- Imagem -->
    <div class="w-1/3 flex items-center justify-center">
        <div>
            <img src="https://avatars.githubusercontent.com/u/52923091?v=4" alt="Dev" class="h-60 -mt-6 hover:animate-pulse rounded-full">
        </div>
    </div>
</section>