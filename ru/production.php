<?php
$pageTitle = 'Производство рекламных конструкций в Вильнюсе | Golden Hands';
$pageDescription = 'Современное собственное производство рекламных конструкций в Вильнюсе. CNC лазерная резка, широкоформатная УФ-печать, 3D-моделирование, обработка металла, LED-подсветка и профессиональный монтаж. Полный цикл от идеи до установки.';
$pageKeywords = 'производство рекламных конструкций Вильнюс, CNC лазерная резка, УФ печать, 3D моделирование, изготовление вывесок, световые короба производство, LED подсветка, монтаж рекламы, собственное производство';
$canonical = 'https://golden-hands.lt/production.php';
include 'header.php';
include 'consultant-widget.php';
?>

<div style="padding-top:90px; background:#05070f;">

    <!-- Hero -->
    <section style="padding:140px 5% 100px; text-align:center; background:linear-gradient(rgba(10,15,28,0.9), rgba(10,15,28,0.95)), url('images/production-bg.webp') center/cover no-repeat;">
        <h1 style="font-size:clamp(2.8rem, 7vw, 4.5rem); color:white; margin-bottom:20px;">Наше производство</h1>
        <p style="font-size:1.4rem; max-width:800px; margin:auto; color:#cbd5e1;">Современное оборудование + 12-летний опыт = рекламные конструкции высшего качества</p>
    </section>

    <div style="max-width:1400px; margin:auto; padding:100px 5%;">

        <!-- Вступительный SEO-текст -->
        <div style="max-width:900px; margin:auto; text-align:center; margin-bottom:80px; font-size:1.2rem; line-height:1.8; color:#cbd5e1;">
            <p>Компания Golden Hands обладает собственным производственным комплексом в Вильнюсе. Мы выполняем полный цикл изготовления рекламных конструкций: от разработки чертежей и 3D-моделирования до финального монтажа.</p>
            <p style="margin-top:25px;">Благодаря современному оборудованию и опытной команде мы реализуем проекты любой сложности в сжатые сроки, гарантируя высокое качество и точное соответствие техническому заданию.</p>
        </div>

        <h2 style="color:#f59e0b; text-align:center; margin-bottom:60px; font-size:2.6rem;">Наши производственные возможности</h2>

        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(340px,1fr)); gap:30px;">
            
            <div style="background:#1e2937; padding:35px; border-radius:16px; transition:0.3s;">
                <i class="fas fa-cut" style="font-size:2.8rem; color:#f59e0b; margin-bottom:15px;"></i>
                <h3 style="color:#f59e0b;">CNC лазерная резка и фрезеровка</h3>
                <p>Точная резка металла, композита, акрила и дерева. Максимальная толщина металла — 20 мм.</p>
            </div>

            <div style="background:#1e2937; padding:35px; border-radius:16px; transition:0.3s;">
                <i class="fas fa-print" style="font-size:2.8rem; color:#f59e0b; margin-bottom:15px;"></i>
                <h3 style="color:#f59e0b;">Широкоформатная УФ-печать</h3>
                <p>Яркая и долговечная печать на любых материалах. Разрешение до 1440 dpi.</p>
            </div>

            <div style="background:#1e2937; padding:35px; border-radius:16px; transition:0.3s;">
                <i class="fas fa-cube" style="font-size:2.8rem; color:#f59e0b; margin-bottom:15px;"></i>
                <h3 style="color:#f59e0b;">3D-моделирование и прототипирование</h3>
                <p>Разработка 3D-моделей, визуализация и изготовление прототипов перед запуском в производство.</p>
            </div>

            <div style="background:#1e2937; padding:35px; border-radius:16px; transition:0.3s;">
                <i class="fas fa-industry" style="font-size:2.8rem; color:#f59e0b; margin-bottom:15px;"></i>
                <h3 style="color:#f59e0b;">Обработка металла и алюминия</h3>
                <p>Гибка, сварка, порошковая покраска, анодирование и сборка металлических конструкций.</p>
            </div>

            <div style="background:#1e2937; padding:35px; border-radius:16px; transition:0.3s;">
                <i class="fas fa-lightbulb" style="font-size:2.8rem; color:#f59e0b; margin-bottom:15px;"></i>
                <h3 style="color:#f59e0b;">Системы LED-подсветки</h3>
                <p>Установка энергоэффективной LED-подсветки, световые короба и объёмные буквы с внутренней подсветкой.</p>
            </div>

            <div style="background:#1e2937; padding:35px; border-radius:16px; transition:0.3s;">
                <i class="fas fa-truck-loading" style="font-size:2.8rem; color:#f59e0b; margin-bottom:15px;"></i>
                <h3 style="color:#f59e0b;">Профессиональная бригада монтажников</h3>
                <p>Монтаж на высоте, установка на фасадах, кровлях и внутри помещений. Гарантия на монтаж — 3 года.</p>
            </div>
        </div>

        <!-- Блок с картинками производства -->
        <h2 style="color:#f59e0b; text-align:center; margin:100px 0 60px; font-size:2.6rem;">Как выглядит наше производство</h2>
        
        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(300px,1fr)); gap:25px;">
            <?php
            $productionImages = glob('images/{IMG_*.jpg,IMG_*.jpeg,*.jpg,*.jpeg,*.png,*.webp}', GLOB_BRACE);
            $limitedImages = array_slice($productionImages, 0, 6); // берём максимум 6 фото

            foreach ($limitedImages as $img) {
                $filename = basename($img);
                echo '
                <div style="border-radius:16px; overflow:hidden; box-shadow:0 10px 30px rgba(0,0,0,0.4);">
                    <img src="' . htmlspecialchars($img) . '" 
                         alt="Производство рекламных конструкций Golden Hands — ' . htmlspecialchars($filename) . '" 
                         loading="lazy"
                         style="width:100%; height:260px; object-fit:cover;">
                </div>';
            }
            ?>
        </div>

        <!-- Дополнительный SEO-текст -->
        <div style="margin-top:100px; background:#1e2937; padding:50px; border-radius:20px; line-height:1.8; font-size:1.15rem;">
            <h3 style="color:#f59e0b; text-align:center; margin-bottom:30px;">Почему клиенты выбирают наше производство</h3>
            <ul style="list-style:none; display:grid; grid-template-columns:repeat(auto-fit, minmax(280px,1fr)); gap:20px;">
                <li style="padding:15px 0;">✅ Полный цикл производства под одной крышей</li>
                <li style="padding:15px 0;">✅ Соблюдение сроков — 99% проектов сдаются вовремя</li>
                <li style="padding:15px 0;">✅ Только сертифицированные материалы</li>
                <li style="padding:15px 0;">✅ Гарантия на продукцию до 5 лет</li>
                <li style="padding:15px 0;">✅ Индивидуальный подход к каждому заказу</li>
                <li style="padding:15px 0;">✅ Контроль качества на каждом этапе</li>
            </ul>
        </div>

    </div>
</div>

<?php include 'footer.php'; ?>