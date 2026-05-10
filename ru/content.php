<?php 
// SEO-параметры для index.php
$pageTitle = 'Golden Hands — Рекламные конструкции любой сложности в Вильнюсе и Литве';
$pageDescription = 'Профессиональное производство рекламных конструкций в Вильнюсе: вывески, световые короба, 3D-буквы, выставочные стенды, POSM. Полный цикл от идеи до монтажа. 12+ лет опыта • Собственное производство';
$pageKeywords = 'рекламные конструкции Вильнюс, вывески Вильнюс, световые короба, 3D буквы, выставочные стенды, POSM Вильнюс, наружная реклама Литва, изготовление вывесок, Golden Hands';
$canonical = 'https://golden-hands.lt/';

?>

<!-- Критические мобильные стили -->
<style>
.hero-section {
    position: relative;
    height: 100vh;
    min-height: 640px;
    display: flex;
    align-items: center;
    text-align: center;
    color: white;
    overflow: hidden;
}
@media (max-width: 768px) {
    .hero-section { min-height: 82vh !important; }
    .hero-section h1 { font-size: clamp(2.3rem, 8vw, 3.6rem) !important; line-height: 1.05 !important; }
    .hero-section p { font-size: clamp(1.05rem, 4.5vw, 1.3rem) !important; }
    section { padding: 80px 5% !important; }
}
@media (max-width: 480px) {
    .hero-section { min-height: 78vh !important; }
}
.fade-in { animation: fadeIn 0.9s ease forwards; }
@keyframes fadeIn { from { opacity:0; transform:translateY(25px); } to { opacity:1; transform:translateY(0); } }

/* Стили для иконок материалов */
.material-item {
    background:#1e2937;
    padding:28px 20px;
    border-radius:20px;
    text-align:center;
    transition:all 0.3s;
    min-width:160px;
}
.material-item:hover {
    transform:translateY(-8px);
    box-shadow:0 15px 30px rgba(245,158,11,0.2);
}
.material-item i {
    font-size:3.2rem;
    color:#f59e0b;
    margin-bottom:15px;
}
</style>
<main>
<!-- HERO - Максимально сильный -->
    <section style="padding:160px 5% 120px; text-align:center; background:linear-gradient(rgba(10,15,28,0.82), rgba(10,15,28,0.92)), url('assets/img/hero.jpg') center/cover no-repeat; position:relative;">
        <div style="max-width:1280px; margin:auto; padding:0 5%;">
            </br><h1 style="font-size:clamp(2.8rem, 7vw, 5rem); color:white; margin-bottom:24px; line-height:1.05; font-weight:700;">
                Производим рекламные конструкции<br>и брендовые объекты любой сложности в Вильнюсе
            </h1>
            <p style="font-size:clamp(1.2rem, 4.2vw, 1.55rem); max-width:860px; margin:auto; color:#e2e8f0; line-height:1.6;">
                Вывески, световые короба, 3D-буквы, выставочные стенды, POSM и индивидуальные проекты.<br>
                Полный цикл производства и монтажа по всей Литве и Европе.
            </p>
            <div style="margin-top:45px; display:flex; gap:20px; justify-content:center; flex-wrap:wrap;">
                <a href="contact.php" style="background:#f59e0b; color:#111827; padding:20px 52px; border-radius:50px; text-decoration:none; font-weight:700; font-size:1.25rem;">Получить расчёт</a>
                <a href="#services" style="border:2.5px solid white; color:white; padding:18px 46px; border-radius:50px; text-decoration:none; font-weight:600; font-size:1.2rem;">Наши услуги</a>
			<!-- Кнопка "Перезвоните мне" - открывает popup -->
    <a href="perezvonit.php" onclick="showCallbackPopup(); return false;" 
       style="background:#1e2937; color:#f59e0b; border:2px solid #f59e0b; padding:19px 42px; border-radius:50px; 
              text-decoration:none; font-weight:700; font-size:1.22rem; display:flex; align-items:center; gap:10px; 
              transition:all 0.3s; box-shadow:0 8px 25px rgba(245,158,11,0.3);">
        <i class="fas fa-phone-volume"></i>
        Перезвоните мне
    </a>
            </div>
        </div>
    </section>

    <!-- SEO ВСТУПЛЕНИЕ -->
    <div style="max-width:1280px; margin:auto; padding:90px 5% 60px; text-align:center; color:#cbd5e1; font-size:1.22rem; line-height:1.75;">
        <p><strong>Golden Hands</strong> — ведущая компания по производству рекламных конструкций в Вильнюсе и Литве. Более 12 лет мы помогаем бизнесу привлекать клиентов с помощью яркой и эффективной наружной рекламы.</p>
        <p style="margin-top:25px;">Мы предлагаем полный цикл услуг: от разработки дизайна и 3D-моделирования до производства, доставки и профессионального монтажа. Наши конструкции работают в торговых центрах, на АЗС, в магазинах и на крупных мероприятиях по всей Литве и Европе.</p>
    </div>
<!-- ==================== УСЛУГИ ==================== -->
<section id="services" style="padding:120px 5%; background:#0a0f1c;">
    <div style="max-width:1400px; margin:auto;">
        <h2 style="text-align:center; font-size:clamp(2.6rem, 5.5vw, 3.2rem); margin-bottom:24px; color:white;">Наши услуги</h2>
        <p style="text-align:center; font-size:1.35rem; max-width:780px; margin:auto; margin-bottom:80px; color:#cbd5e1;">
            Полный цикл производства рекламных конструкций — от идеи до монтажа
        </p>
      
        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(320px,1fr)); gap:32px;">
           
            <!-- 1. Наружные конструкции -->
            <div style="background:#1e2937; padding:40px 32px; border-radius:24px; transition:all 0.4s cubic-bezier(0.4,0,0.2,1);">
                <i class="fas fa-store fa-3x" style="color:#f59e0b; margin-bottom:24px;"></i>
                <h3 style="color:#f59e0b; font-size:1.65rem; margin-bottom:14px;">Наружные конструкции</h3>
                <p style="color:#cbd5e1; line-height:1.65;">Вывески, световые короба, объёмные буквы, фасадные конструкции для магазинов и торговых центров</p>
            </div>

            <!-- 2. Выставочные стенды -->
            <div style="background:#1e2937; padding:40px 32px; border-radius:24px; transition:all 0.4s cubic-bezier(0.4,0,0.2,1);">
                <i class="fas fa-chalkboard-teacher fa-3x" style="color:#f59e0b; margin-bottom:24px;"></i>
                <h3 style="color:#f59e0b; font-size:1.65rem; margin-bottom:14px;">Выставочные стенды</h3>
                <p style="color:#cbd5e1; line-height:1.65;">Индивидуальные и модульные стенды для выставок и B2B-мероприятий</p>
            </div>

            <!-- 3. POSM / Retail -->
            <div style="background:#1e2937; padding:40px 32px; border-radius:24px; transition:all 0.4s cubic-bezier(0.4,0,0.2,1);">
                <i class="fas fa-tags fa-3x" style="color:#f59e0b; margin-bottom:24px;"></i>
                <h3 style="color:#f59e0b; font-size:1.65rem; margin-bottom:14px;">POSM / Retail</h3>
                <p style="color:#cbd5e1; line-height:1.65;">Торговое оборудование, стойки, диспенсеры, промо-конструкции</p>
            </div>

            <!-- 4. Event-декорации -->
            <div style="background:#1e2937; padding:40px 32px; border-radius:24px; transition:all 0.4s cubic-bezier(0.4,0,0.2,1);">
                <i class="fas fa-lightbulb fa-3x" style="color:#f59e0b; margin-bottom:24px;"></i>
                <h3 style="color:#f59e0b; font-size:1.65rem; margin-bottom:14px;">Event-декорации</h3>
                <p style="color:#cbd5e1; line-height:1.65;">Фотозоны, праздничные инсталляции, корпоративные декорации</p>
            </div>

            <!-- 5. Для Театров и Сценографии -->
            <div style="background:#1e2937; padding:40px 32px; border-radius:24px; transition:all 0.4s cubic-bezier(0.4,0,0.2,1);">
                <i class="fas fa-theater-masks fa-3x" style="color:#f59e0b; margin-bottom:24px;"></i>
                <h3 style="color:#f59e0b; font-size:1.65rem; margin-bottom:14px;">Для театров и сценографии</h3>
                <p style="color:#cbd5e1; line-height:1.65;">Театральные декорации, порталы, подиумы, сценические конструкции, световые фермы и сложные постановочные решения</p>
            </div>

            <!-- 6. Для Телевидения и Студий -->
            <div style="background:#1e2937; padding:40px 32px; border-radius:24px; transition:all 0.4s cubic-bezier(0.4,0,0.2,1);">
                <i class="fas fa-tv fa-3x" style="color:#f59e0b; margin-bottom:24px;"></i>
                <h3 style="color:#f59e0b; font-size:1.65rem; margin-bottom:14px;">Для телевидения и студий</h3>
                <p style="color:#cbd5e1; line-height:1.65;">Студийные декорации, LED-экраны, хромакеи, телевизионные панели, мобильные студии и световое оборудование</p>
            </div>

            <!-- 7. Индивидуальные проекты -->
            <div style="background:#1e2937; padding:40px 32px; border-radius:24px; transition:all 0.4s cubic-bezier(0.4,0,0.2,1);">
                <i class="fas fa-pencil-ruler fa-3x" style="color:#f59e0b; margin-bottom:24px;"></i>
                <h3 style="color:#f59e0b; font-size:1.65rem; margin-bottom:14px;">Индивидуальные проекты</h3>
                <p style="color:#cbd5e1; line-height:1.65;">Разработка и производство уникальных рекламных конструкций по вашему ТЗ</p>
            </div>

        </div>
    </div>
</section>
<!-- ==================== МАТЕРИАЛЫ ==================== -->
<section style="padding:120px 5%; background:#05070f;">
    <div style="max-width:1400px; margin:auto; text-align:center;">
        
        <h2 style="font-size:clamp(2.4rem, 5.5vw, 2.9rem); margin-bottom:20px; color:white;">Материалы, с которыми мы работаем</h2>
        <p style="font-size:1.3rem; max-width:780px; margin:auto; margin-bottom:70px; color:#cbd5e1;">
            Используем только проверенные и долговечные материалы, чтобы ваши рекламные конструкции служили годами и выглядели идеально в любых условиях
        </p>
        
        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(260px,1fr)); gap:28px;">
            
            <div style="background:#1e2937; padding:38px 25px; border-radius:20px; transition:all 0.4s;">
                <i class="fas fa-hammer fa-3x" style="color:#f59e0b; margin-bottom:20px;"></i>
                <h3 style="color:#f59e0b; margin-bottom:12px;">Металл и сталь</h3>
                <p style="color:#cbd5e1; font-size:1.05rem;">Надёжные и прочные конструкции для больших фасадных вывесок и стел. Высокая устойчивость к погодным условиям.</p>
            </div>
            
            <div style="background:#1e2937; padding:38px 25px; border-radius:20px; transition:all 0.4s;">
                <i class="fas fa-cube fa-3x" style="color:#f59e0b; margin-bottom:20px;"></i>
                <h3 style="color:#f59e0b; margin-bottom:12px;">Пластик и акрил</h3>
                <p style="color:#cbd5e1; font-size:1.05rem;">Идеально для световых коробов и интерьерных элементов. Отличная светопроводимость и современный внешний вид.</p>
            </div>
            
            <div style="background:#1e2937; padding:38px 25px; border-radius:20px; transition:all 0.4s;">
                <i class="fas fa-tree fa-3x" style="color:#f59e0b; margin-bottom:20px;"></i>
                <h3 style="color:#f59e0b; margin-bottom:12px;">Дерево и МДФ</h3>
                <p style="color:#cbd5e1; font-size:1.05rem;">Премиальные и экологичные материалы для стильных вывесок и декоративных элементов.</p>
            </div>
            
            <div style="background:#1e2937; padding:38px 25px; border-radius:20px; transition:all 0.4s;">
                <i class="fas fa-gem fa-3x" style="color:#f59e0b; margin-bottom:20px;"></i>
                <h3 style="color:#f59e0b; margin-bottom:12px;">Акрил и оргстекло</h3>
                <p style="color:#cbd5e1; font-size:1.05rem;">Высококачественный материал для подсветки и создания объёмных световых элементов.</p>
            </div>
            
            <div style="background:#1e2937; padding:38px 25px; border-radius:20px; transition:all 0.4s;">
                <i class="fas fa-layer-group fa-3x" style="color:#f59e0b; margin-bottom:20px;"></i>
                <h3 style="color:#f59e0b; margin-bottom:12px;">Композитный алюминий</h3>
                <p style="color:#cbd5e1; font-size:1.05rem;">Лёгкий, прочный и долговечный материал для больших фасадных конструкций.</p>
            </div>
            
            <div style="background:#1e2937; padding:38px 25px; border-radius:20px; transition:all 0.4s;">
                <i class="fas fa-industry fa-3x" style="color:#f59e0b; margin-bottom:20px;"></i>
                <h3 style="color:#f59e0b; margin-bottom:12px;">Алюминиевые профили</h3>
                <p style="color:#cbd5e1; font-size:1.05rem;">Используем для каркасов, рам и конструкций повышенной прочности.</p>
            </div>
        </div>
        
        <p style="margin-top:70px; font-size:1.15rem; color:#94a3b8; max-width:820px; margin-left:auto; margin-right:auto;">
            Мы тщательно подбираем материалы под каждый проект, учитывая условия эксплуатации, бюджет и желаемый визуальный эффект. 
            Все материалы сертифицированы и имеют гарантию.
        </p>
    </div>
</section>

<!-- WORKFLOW с иконками -->
<section style="padding:120px 5%; background:#0a0f1c;">
    <div style="max-width:1400px; margin:auto;">
        <h2 style="text-align:center; font-size:2.85rem; margin-bottom:80px;">Процесс работы</h2>
        <p style="text-align:center; font-size:1.3rem; max-width:700px; margin:auto; margin-bottom:70px; color:#cbd5e1;">Прозрачный и понятный процесс от идеи до реализации</p>
        
        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(280px,1fr)); gap:32px;">
            <div class="workflow-card" style="background:#1e2937; padding:38px; border-radius:20px; transition:all 0.4s; display:flex; gap:20px; align-items:flex-start;">
                <i class="fas fa-comments" style="font-size:3rem; color:#f59e0b; flex-shrink:0; margin-top:8px;"></i>
                <div>
                    <strong style="font-size:3.2rem; color:#f59e0b; display:block; margin-bottom:8px;">01</strong>
                    <h3>Бриф</h3>
                    <p>Обсуждаем задачи, цели и требования к проекту. Определяем бюджет и сроки реализации.</p>
                </div>
            </div>
            <div class="workflow-card" style="background:#1e2937; padding:38px; border-radius:20px; transition:all 0.4s; display:flex; gap:20px; align-items:flex-start;">
                <i class="fas fa-drafting-compass" style="font-size:3rem; color:#f59e0b; flex-shrink:0; margin-top:8px;"></i>
                <div>
                    <strong style="font-size:3.2rem; color:#f59e0b; display:block; margin-bottom:8px;">02</strong>
                    <h3>Проектирование</h3>
                    <p>Разрабатываем техническую документацию, чертежи и конструктивные решения.</p>
                </div>
            </div>
            <div class="workflow-card" style="background:#1e2937; padding:38px; border-radius:20px; transition:all 0.4s; display:flex; gap:20px; align-items:flex-start;">
                <i class="fas fa-eye" style="font-size:3rem; color:#f59e0b; flex-shrink:0; margin-top:8px;"></i>
                <div>
                    <strong style="font-size:3.2rem; color:#f59e0b; display:block; margin-bottom:8px;">03</strong>
                    <h3>Визуализация</h3>
                    <p>Создаем 3D-модели и фотореалистичные визуализации для согласования.</p>
                </div>
            </div>
            <div class="workflow-card" style="background:#1e2937; padding:38px; border-radius:20px; transition:all 0.4s; display:flex; gap:20px; align-items:flex-start;">
                <i class="fas fa-industry" style="font-size:3rem; color:#f59e0b; flex-shrink:0; margin-top:8px;"></i>
                <div>
                    <strong style="font-size:3.2rem; color:#f59e0b; display:block; margin-bottom:8px;">04</strong>
                    <h3>Производство</h3>
                    <p>Изготавливаем конструкции на собственном производстве с контролем качества.</p>
                </div>
            </div>
            <div class="workflow-card" style="background:#1e2937; padding:38px; border-radius:20px; transition:all 0.4s; display:flex; gap:20px; align-items:flex-start;">
                <i class="fas fa-truck-loading" style="font-size:3rem; color:#f59e0b; flex-shrink:0; margin-top:8px;"></i>
                <div>
                    <strong style="font-size:3.2rem; color:#f59e0b; display:block; margin-bottom:8px;">05</strong>
                    <h3>Монтаж</h3>
                    <p>Осуществляем профессиональную установку и сдачу объекта заказчику.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== НАШИ КЛИЕНТЫ ==================== -->
<section style="padding:110px 5%; background:#05070f;">
    <div style="max-width:1400px; margin:auto; text-align:center;">
        <h2 style="font-size:2.85rem; margin-bottom:20px; color:white;">Наши клиенты</h2>
        <p style="font-size:1.3rem; margin-bottom:70px; color:#cbd5e1;">
            Работаем с различными сегментами бизнеса по всей Литве и Европе
        </p>
       
        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(140px,1fr)); gap:40px; align-items:center; justify-items:center; opacity:0.95;">
            
            <div style="font-size:2.8rem; color:#f59e0b;">
                <i class="fas fa-store"></i><br>
                <span style="font-size:1.1rem; color:#cbd5e1; display:block; margin-top:8px;">Retail</span>
            </div>
            
            <div style="font-size:2.8rem; color:#f59e0b;">
                <i class="fas fa-prescription-bottle"></i><br>
                <span style="font-size:1.1rem; color:#cbd5e1; display:block; margin-top:8px;">Аптеки</span>
            </div>
            
            <div style="font-size:2.8rem; color:#f59e0b;">
                <i class="fas fa-gas-pump"></i><br>
                <span style="font-size:1.1rem; color:#cbd5e1; display:block; margin-top:8px;">АЗС</span>
            </div>
            
            <div style="font-size:2.8rem; color:#f59e0b;">
                <i class="fas fa-shopping-bag"></i><br>
                <span style="font-size:1.1rem; color:#cbd5e1; display:block; margin-top:8px;">Торговые центры</span>
            </div>
            
            <div style="font-size:2.8rem; color:#f59e0b;">
                <i class="fas fa-briefcase"></i><br>
                <span style="font-size:1.1rem; color:#cbd5e1; display:block; margin-top:8px;">Бренды</span>
            </div>
            
            <div style="font-size:2.8rem; color:#f59e0b;">
                <i class="fas fa-calendar-days"></i><br>
                <span style="font-size:1.1rem; color:#cbd5e1; display:block; margin-top:8px;">Мероприятия</span>
            </div>

            <!-- Новые направления -->
            <div style="font-size:2.8rem; color:#f59e0b;">
                <i class="fas fa-theater-masks"></i><br>
                <span style="font-size:1.1rem; color:#cbd5e1; display:block; margin-top:8px;">Театры</span>
            </div>
            
            <div style="font-size:2.8rem; color:#f59e0b;">
                <i class="fas fa-tv"></i><br>
                <span style="font-size:1.1rem; color:#cbd5e1; display:block; margin-top:8px;">Телевидение</span>
            </div>

        </div>
    </div>
</section>

<!-- WHY US -->
<section style="padding:120px 5%; background:#0a0f1c;">
    <div style="max-width:1400px; margin:auto;">
        <h2 style="text-align:center; font-size:2.85rem; margin-bottom:20px;">Почему выбирают нас</h2>
        <p style="text-align:center; margin-bottom:70px; font-size:1.3rem;">Преимущества работы с Golden Hands</p>
        
        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(300px,1fr)); gap:30px;">
            <div class="why-card" style="background:#1e2937; padding:32px; border-radius:20px; transition:all 0.3s;">
                <strong>Опыт 12+ лет</strong>
                <p>Реализовали более 500 проектов для крупных брендов и торговых сетей</p>
            </div>
            <div class="why-card" style="background:#1e2937; padding:32px; border-radius:20px; transition:all 0.3s;">
                <strong>Соблюдение сроков</strong>
                <p>Четкое планирование и контроль на всех этапах производства</p>
            </div>
            <div class="why-card" style="background:#1e2937; padding:32px; border-radius:20px; transition:all 0.3s;">
                <strong>Гарантия качества</strong>
                <p>Используем проверенные материалы и технологии производства</p>
            </div>
            <div class="why-card" style="background:#1e2937; padding:32px; border-radius:20px; transition:all 0.3s;">
                <strong>Полный цикл</strong>
                <p>От идеи до монтажа — все этапы под одним управлением</p>
            </div>
            <div class="why-card" style="background:#1e2937; padding:32px; border-radius:20px; transition:all 0.3s;">
                <strong>Индивидуальный подход</strong>
                <p>Разрабатываем решения под конкретные задачи вашего бизнеса</p>
            </div>
            <div class="why-card" style="background:#1e2937; padding:32px; border-radius:20px; transition:all 0.3s;">
                <strong>Собственное производство</strong>
                <p>Контроль качества и оптимальные сроки изготовления</p>
            </div>
        </div>
    </div>
</section>
</main>
