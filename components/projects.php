<?php

    $projects = [
        [
            "titulo" => "Novo Mercado Municipal de Cuiabá",
            "finalizado" => true,
            "year" => 2024,
            "descricao" => "Landing Page criada para o Novo Mercado Municipal de Cuiabá: design responsivo, conteúdo 
            estratégico e foco em conversão. Um projeto que conecta tradição, inovação e oportunidades comerciais.",
            "link" => "https://csmobicuiaba.com.br/mercadomunicipal/",
            "stacks" => [
                ["tech" => "PHP", "color" => "bg-fuchsia-400"],
                ["tech" =>  "HTML", "color" => "bg-orange-500"],
                ["tech" =>  "CSS", "color" => "bg-cyan-300"],
                ["tech" =>  "JS", "color" => "bg-yellow-300"],
                ["tech" =>  "Wordpress", "color" => "bg-sky-600"],
            ],
            "img" => "./assets/portfolio-mercado.jpg",
        ],
        [
            "titulo" => "Impacto Telecom",
            "finalizado" => true,
            "year" => 2024,
            "descricao" => "Site oficial desenvolvido para Impacto Telecom: criado com HTML, CSS e JavaScript, oferece 
            uma experiência fluida e moderna, destacando velocidade, tecnologia avançada e qualidade da fibra óptica.",
            "link" => "https://impactotelecom.com/",
            "stacks" => [
                ["tech" =>  "HTML", "color" => "bg-orange-500"],
                ["tech" =>  "CSS", "color" => "bg-cyan-300"],
                ["tech" =>  "JS", "color" => "bg-yellow-300"],
            ],
            "img" => "./assets/portfolio-impacto.jpg",
        ],
        [
            "titulo" => "Website Agencia Sato7",
            "finalizado" => true,
            "year" => 2023,
            "descricao" => "Site oficial da Sato7: uma solução robusta desenvolvida em React com backend em Laravel, 
            entregando alta performance, interatividade e destaque para estratégias 360° focadas em resultados digitais.",
            "link" => "https://sato7.com.br",
            "stacks" => [
                ["tech" =>  "React", "color" => "bg-cyan-300"],
                ["tech" =>  "Tailwind", "color" => "bg-indigo-300"],
                ["tech" => "Laravel", "color" => "bg-fuchsia-400"],
            ],
            "img" => "./assets/portfolio-sato7.jpg",
        ],
        [
            "titulo" => "Transparência da secretaria da Educação SP",
            "finalizado" => true,
            "year" => 2022,
            "descricao" => "Portal Transparência Educação SP: acesso a dados de matrículas, orçamento e obras. 
            Desenvolvido com tecnologias modernas, promove transparência e controle social com navegação intuitiva e responsiva.",
            "link" => "https://transparencia.educacao.sp.gov.br/",
            "stacks" => [
                ["tech" =>  "HTML", "color" => "bg-orange-500"],
                ["tech" =>  "CSS", "color" => "bg-cyan-300"],
                ["tech" =>  "JS", "color" => "bg-yellow-300"],
            ],
            "img" => "./assets/portfolio-transparencia.jpg",
        ],
    ];
?>



<section class="space-y-3 py-6 " id="projetos">
    <h2 class="font-bold text-2xl">Meus Projetos</h2>

    <?php foreach ($projects as $project): ?>
    <div class="bg-slate-800 rounded-lg p-3 flex items-center space-x-3">
        <div class="w-1/5 flex items-center justify-middle"><img src="<?=$project['img']; ?>"
        class="h-42 rounded-lg" alt="Print de imagem do projeto"></div>
        <div class="w-4/5 space-y-3">
            <div class="flex gap-3 items-center justify-between">
                <h3 class="font-semibold text-xl">
                    <?php if($project["finalizado"]): ?>✅<?php endif; ?>
                    <?=$project['titulo']?>
                    <?php if(! $project["finalizado"]): ?>
                        <span class="text-xs text-gray-400 opacity-50 italic">( Projeto em andamento )</span>
                    <?php elseif($project["finalizado"]): ?>
                        <span class="text-xs text-gray-400 opacity-50 italic">( Finalizado em <?=$project['year']?> )</span>
                    <?php endif; ?>
                </h3>
                <div>
                    <?php foreach ($project['stacks'] as $stack): ?>
                        <span class="<?=$stack['color']?> text-sky-900 rounded-md px-2 py-1 font-semibold text-xs uppercase"><?=$stack['tech']?></span>
                    <?php endforeach; ?>
                </div>
            </div>
            <p class="leading-6">
                <?=$project['descricao']?>
            </p>
            <p class="text-sky-900 bg-sky-600 max-w-40 rounded-md px-2 py-1 font-semibold text-xs text-center uppercase">
                <a href="<?=$project['link']?>" target="_blank">Conheça o projeto</a></p>
        </div>
    </div>
    <?php endforeach; ?>
</section>