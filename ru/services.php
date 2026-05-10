<?php 
include 'header.php';
include 'consultant-widget.php'; 
?>

<div style="padding-top:80px; background:#05070f;">
    <!-- Hero Section - Улучшенный, более продающий и SEO-оптимизированный -->
    <section style="padding:160px 5% 120px; text-align:center; background:linear-gradient(rgba(5,7,15,0.92), rgba(5,7,15,0.96)), url('assets/img/services-bg.jpg') center/cover no-repeat; position:relative; overflow:hidden;">
        <div style="position:absolute; top:0; left:0; right:0; bottom:0; background:radial-gradient(circle at 50% 30%, rgba(245,158,11,0.15), transparent 70%); pointer-events:none;"></div>
        
        <h1 style="font-size:clamp(2.8rem, 7.5vw, 5.2rem); color:#ffffff; margin-bottom:24px; line-height:1.05; font-weight:800; text-shadow:0 4px 20px rgba(0,0,0,0.6);">
            Рекламные конструкции в Литве
        </h1>
        <p style="font-size:clamp(1.2rem, 4.2vw, 1.55rem); max-width:920px; margin:auto; color:#e2e8f0; line-height:1.6; margin-bottom:48px;">
            Профессиональное производство и монтаж рекламных конструкций в Вильнюсе.<br>
            Полный цикл: от идеи до установки. Работаем по всей Европе.
        </p>
        
        <div style="margin-top:20px;">
            <a href="contact.php" 
               style="background:#f59e0b; color:#111827; padding:20px 56px; border-radius:50px; text-decoration:none; font-weight:800; font-size:1.25rem; display:inline-block; box-shadow:0 10px 30px rgba(245,158,11,0.4); transition:all 0.3s ease;"
               onmouseover="this.style.transform='translateY(-4px)'; this.style.boxShadow='0 20px 40px rgba(245,158,11,0.5)'"
               onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 30px rgba(245,158,11,0.4)'">
                Получить коммерческое предложение
            </a>
        </div>
        
        <div style="margin-top:80px; display:flex; flex-wrap:wrap; justify-content:center; gap:40px; font-size:1.1rem; color:#94a3b8;">
            <div><i class="fas fa-check-circle" style="color:#f59e0b;"></i> Полный цикл производства</div>
            <div><i class="fas fa-check-circle" style="color:#f59e0b;"></i> Гарантия 3 года</div>
            <div><i class="fas fa-check-circle" style="color:#f59e0b;"></i> Монтаж по всей Европе</div>
        </div>
    </section>

    <div style="max-width:1480px; margin:auto; padding:100px 5%;">
        
        <!-- Наружные конструкции -->
        <div style="margin-bottom:140px;">
            <h2 style="color:#f59e0b; font-size:clamp(2.4rem, 5.5vw, 3.2rem); margin-bottom:16px; text-align:center;">Наружные конструкции</h2>
            <p style="font-size:1.3rem; margin-bottom:60px; max-width:960px; margin-left:auto; margin-right:auto; text-align:center; color:#cbd5e1;">
                Вывески, световые короба, объёмные буквы, фасадные конструкции и навигация для магазинов, ТЦ и офисов
            </p>
            
            <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(320px,1fr)); gap:28px;">
                <div onclick="window.location.href='#'" style="background:#1e2937; padding:36px 30px; border-radius:24px; transition:all 0.4s cubic-bezier(0.4,0,0.2,1); cursor:pointer; border:1px solid transparent;" 
                     onmouseover="this.style.borderColor='#f59e0b'; this.style.transform='translateY(-12px)'" onmouseout="this.style.borderColor='transparent'; this.style.transform='translateY(0)'">
                    <i class="fas fa-store fa-4x" style="color:#f59e0b; margin-bottom:24px; display:block;"></i>
                    <h3 style="font-size:1.5rem; margin-bottom:12px; color:#f1f5f9;">Световые короба и вывески</h3>
                    <p style="color:#94a3b8; line-height:1.5;">Классические и премиум решения с LED-подсветкой</p>
                </div>
                
                <div onclick="window.location.href='#'" style="background:#1e2937; padding:36px 30px; border-radius:24px; transition:all 0.4s cubic-bezier(0.4,0,0.2,1); cursor:pointer; border:1px solid transparent;" 
                     onmouseover="this.style.borderColor='#f59e0b'; this.style.transform='translateY(-12px)'" onmouseout="this.style.borderColor='transparent'; this.style.transform='translateY(0)'">
                    <i class="fas fa-lightbulb fa-4x" style="color:#f59e0b; margin-bottom:24px; display:block;"></i>
                    <h3 style="font-size:1.5rem; margin-bottom:12px; color:#f1f5f9;">Объёмные буквы с подсветкой</h3>
                    <p style="color:#94a3b8; line-height:1.5;">Фронтальная, контурная и тыльная подсветка</p>
                </div>
                
                <div onclick="window.location.href='#'" style="background:#1e2937; padding:36px 30px; border-radius:24px; transition:all 0.4s cubic-bezier(0.4,0,0.2,1); cursor:pointer; border:1px solid transparent;" 
                     onmouseover="this.style.borderColor='#f59e0b'; this.style.transform='translateY(-12px)'" onmouseout="this.style.borderColor='transparent'; this.style.transform='translateY(0)'">
                    <i class="fas fa-building fa-4x" style="color:#f59e0b; margin-bottom:24px; display:block;"></i>
                    <h3 style="font-size:1.5rem; margin-bottom:12px; color:#f1f5f9;">Фасадные конструкции</h3>
                    <p style="color:#94a3b8; line-height:1.5;">Комплексное оформление фасадов зданий</p>
                </div>
                
                <div onclick="window.location.href='#'" style="background:#1e2937; padding:36px 30px; border-radius:24px; transition:all 0.4s cubic-bezier(0.4,0,0.2,1); cursor:pointer; border:1px solid transparent;" 
                     onmouseover="this.style.borderColor='#f59e0b'; this.style.transform='translateY(-12px)'" onmouseout="this.style.borderColor='transparent'; this.style.transform='translateY(0)'">
                    <i class="fas fa-sign fa-4x" style="color:#f59e0b; margin-bottom:24px; display:block;"></i>
                    <h3 style="font-size:1.5rem; margin-bottom:12px; color:#f1f5f9;">Навигационные системы</h3>
                    <p style="color:#94a3b8; line-height:1.5;">Внутренняя и внешняя навигация</p>
                </div>
                
                <div onclick="window.location.href='#'" style="background:#1e2937; padding:36px 30px; border-radius:24px; transition:all 0.4s cubic-bezier(0.4,0,0.2,1); cursor:pointer; border:1px solid transparent;" 
                     onmouseover="this.style.borderColor='#f59e0b'; this.style.transform='translateY(-12px)'" onmouseout="this.style.borderColor='transparent'; this.style.transform='translateY(0)'">
                    <i class="fas fa-archway fa-4x" style="color:#f59e0b; margin-bottom:24px; display:block;"></i>
                    <h3 style="font-size:1.5rem; margin-bottom:12px; color:#f1f5f9;">Крышные установки</h3>
                    <p style="color:#94a3b8; line-height:1.5;">Крупноформатные конструкции на крышах</p>
                </div>
                
                <div onclick="window.location.href='#'" style="background:#1e2937; padding:36px 30px; border-radius:24px; transition:all 0.4s cubic-bezier(0.4,0,0.2,1); cursor:pointer; border:1px solid transparent;" 
                     onmouseover="this.style.borderColor='#f59e0b'; this.style.transform='translateY(-12px)'" onmouseout="this.style.borderColor='transparent'; this.style.transform='translateY(0)'">
                    <i class="fas fa-monument fa-4x" style="color:#f59e0b; margin-bottom:24px; display:block;"></i>
                    <h3 style="font-size:1.5rem; margin-bottom:12px; color:#f1f5f9;">Стелы и пилоны</h3>
                    <p style="color:#94a3b8; line-height:1.5;">Въездные группы и отдельностоящие конструкции</p>
                </div>
            </div>
        </div>

        <!-- Выставочные стенды -->
        <div style="margin-bottom:140px;">
            <h2 style="color:#f59e0b; font-size:clamp(2.4rem, 5.5vw, 3.2rem); margin-bottom:16px; text-align:center;">Выставочные стенды</h2>
            <p style="font-size:1.3rem; margin-bottom:60px; max-width:960px; margin-left:auto; margin-right:auto; text-align:center; color:#cbd5e1;">
                Индивидуальные и модульные стенды с полным циклом: дизайн → производство → логистика → монтаж
            </p>
            
            <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(320px,1fr)); gap:28px;">
                <div onclick="window.location.href='#'" style="background:#1e2937; padding:36px 30px; border-radius:24px; transition:all 0.4s cubic-bezier(0.4,0,0.2,1); cursor:pointer; border:1px solid transparent;" 
                     onmouseover="this.style.borderColor='#f59e0b'; this.style.transform='translateY(-12px)'" onmouseout="this.style.borderColor='transparent'; this.style.transform='translateY(0)'">
                    <i class="fas fa-cubes fa-4x" style="color:#f59e0b; margin-bottom:24px; display:block;"></i>
                    <h3 style="font-size:1.5rem; margin-bottom:12px; color:#f1f5f9;">Модульные выставочные системы</h3>
                    <p style="color:#94a3b8; line-height:1.5;">Быстрая сборка и многократное использование</p>
                </div>
                
                <div onclick="window.location.href='#'" style="background:#1e2937; padding:36px 30px; border-radius:24px; transition:all 0.4s cubic-bezier(0.4,0,0.2,1); cursor:pointer; border:1px solid transparent;" 
                     onmouseover="this.style.borderColor='#f59e0b'; this.style.transform='translateY(-12px)'" onmouseout="this.style.borderColor='transparent'; this.style.transform='translateY(0)'">
                    <i class="fas fa-store-alt fa-4x" style="color:#f59e0b; margin-bottom:24px; display:block;"></i>
                    <h3 style="font-size:1.5rem; margin-bottom:12px; color:#f1f5f9;">Индивидуальные стенды</h3>
                    <p style="color:#94a3b8; line-height:1.5;">Эксклюзивный дизайн под ваш бренд</p>
                </div>
                
                <div onclick="window.location.href='#'" style="background:#1e2937; padding:36px 30px; border-radius:24px; transition:all 0.4s cubic-bezier(0.4,0,0.2,1); cursor:pointer; border:1px solid transparent;" 
                     onmouseover="this.style.borderColor='#f59e0b'; this.style.transform='translateY(-12px)'" onmouseout="this.style.borderColor='transparent'; this.style.transform='translateY(0)'">
                    <i class="fas fa-chalkboard-teacher fa-4x" style="color:#f59e0b; margin-bottom:24px; display:block;"></i>
                    <h3 style="font-size:1.5rem; margin-bottom:12px; color:#f1f5f9;">Презентационные зоны</h3>
                    <p style="color:#94a3b8; line-height:1.5;">Зоны переговоров и демонстрации продукции</p>
                </div>
                
                <div onclick="window.location.href='#'" style="background:#1e2937; padding:36px 30px; border-radius:24px; transition:all 0.4s cubic-bezier(0.4,0,0.2,1); cursor:pointer; border:1px solid transparent;" 
                     onmouseover="this.style.borderColor='#f59e0b'; this.style.transform='translateY(-12px)'" onmouseout="this.style.borderColor='transparent'; this.style.transform='translateY(0)'">
                    <i class="fas fa-hand-pointer fa-4x" style="color:#f59e0b; margin-bottom:24px; display:block;"></i>
                    <h3 style="font-size:1.5rem; margin-bottom:12px; color:#f1f5f9;">Интерактивные элементы</h3>
                    <p style="color:#94a3b8; line-height:1.5;">Сенсорные экраны, AR/VR решения</p>
                </div>
                
                <div onclick="window.location.href='#'" style="background:#1e2937; padding:36px 30px; border-radius:24px; transition:all 0.4s cubic-bezier(0.4,0,0.2,1); cursor:pointer; border:1px solid transparent;" 
                     onmouseover="this.style.borderColor='#f59e0b'; this.style.transform='translateY(-12px)'" onmouseout="this.style.borderColor='transparent'; this.style.transform='translateY(0)'">
                    <i class="fas fa-tv fa-4x" style="color:#f59e0b; margin-bottom:24px; display:block;"></i>
                    <h3 style="font-size:1.5rem; margin-bottom:12px; color:#f1f5f9;">Мультимедийное оборудование</h3>
                    <p style="color:#94a3b8; line-height:1.5;">Видеостены, интерактивные дисплеи</p>
                </div>
                
                <div onclick="window.location.href='#'" style="background:#1e2937; padding:36px 30px; border-radius:24px; transition:all 0.4s cubic-bezier(0.4,0,0.2,1); cursor:pointer; border:1px solid transparent;" 
                     onmouseover="this.style.borderColor='#f59e0b'; this.style.transform='translateY(-12px)'" onmouseout="this.style.borderColor='transparent'; this.style.transform='translateY(0)'">
                    <i class="fas fa-truck fa-4x" style="color:#f59e0b; margin-bottom:24px; display:block;"></i>
                    <h3 style="font-size:1.5rem; margin-bottom:12px; color:#f1f5f9;">Логистика и монтаж</h3>
                    <p style="color:#94a3b8; line-height:1.5;">Доставка и профессиональная установка</p>
                </div>
            </div>
        </div>

        <!-- POSM / Retail -->
        <div style="margin-bottom:140px;">
            <h2 style="color:#f59e0b; font-size:clamp(2.4rem, 5.5vw, 3.2rem); margin-bottom:16px; text-align:center;">POSM / Retail</h2>
            <p style="font-size:1.3rem; margin-bottom:60px; max-width:960px; margin-left:auto; margin-right:auto; text-align:center; color:#cbd5e1;">
                Торговое оборудование, диспенсеры, промо-стойки и элементы мерчандайзинга
            </p>
            
            <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(320px,1fr)); gap:28px;">
                <div onclick="window.location.href='#'" style="background:#1e2937; padding:36px 30px; border-radius:24px; transition:all 0.4s cubic-bezier(0.4,0,0.2,1); cursor:pointer; border:1px solid transparent;" 
                     onmouseover="this.style.borderColor='#f59e0b'; this.style.transform='translateY(-12px)'" onmouseout="this.style.borderColor='transparent'; this.style.transform='translateY(0)'">
                    <i class="fas fa-tags fa-4x" style="color:#f59e0b; margin-bottom:24px; display:block;"></i>
                    <h3 style="font-size:1.5rem; margin-bottom:12px; color:#f1f5f9;">Торговые стойки и диспенсеры</h3>
                    <p style="color:#94a3b8; line-height:1.5;">Для товаров и промо-материалов</p>
                </div>
                
                <div onclick="window.location.href='#'" style="background:#1e2937; padding:36px 30px; border-radius:24px; transition:all 0.4s cubic-bezier(0.4,0,0.2,1); cursor:pointer; border:1px solid transparent;" 
                     onmouseover="this.style.borderColor='#f59e0b'; this.style.transform='translateY(-12px)'" onmouseout="this.style.borderColor='transparent'; this.style.transform='translateY(0)'">
                    <i class="fas fa-bullhorn fa-4x" style="color:#f59e0b; margin-bottom:24px; display:block;"></i>
                    <h3 style="font-size:1.5rem; margin-bottom:12px; color:#f1f5f9;">Промо-конструкции</h3>
                    <p style="color:#94a3b8; line-height:1.5;">Wobblers, stoppers, floor graphics</p>
                </div>
                
                <div onclick="window.location.href='#'" style="background:#1e2937; padding:36px 30px; border-radius:24px; transition:all 0.4s cubic-bezier(0.4,0,0.2,1); cursor:pointer; border:1px solid transparent;" 
                     onmouseover="this.style.borderColor='#f59e0b'; this.style.transform='translateY(-12px)'" onmouseout="this.style.borderColor='transparent'; this.style.transform='translateY(0)'">
                    <i class="fas fa-box fa-4x" style="color:#f59e0b; margin-bottom:24px; display:block;"></i>
                    <h3 style="font-size:1.5rem; margin-bottom:12px; color:#f1f5f9;">Брендированное оборудование</h3>
                    <p style="color:#94a3b8; line-height:1.5;">Холодильники, стеллажи, тележки</p>
                </div>
                
                <div onclick="window.location.href='#'" style="background:#1e2937; padding:36px 30px; border-radius:24px; transition:all 0.4s cubic-bezier(0.4,0,0.2,1); cursor:pointer; border:1px solid transparent;" 
                     onmouseover="this.style.borderColor='#f59e0b'; this.style.transform='translateY(-12px)'" onmouseout="this.style.borderColor='transparent'; this.style.transform='translateY(0)'">
                    <i class="fas fa-layer-group fa-4x" style="color:#f59e0b; margin-bottom:24px; display:block;"></i>
                    <h3 style="font-size:1.5rem; margin-bottom:12px; color:#f1f5f9;">Напольные и настольные дисплеи</h3>
                    <p style="color:#94a3b8; line-height:1.5;">Ценникодержатели, информационные стенды</p>
                </div>
            </div>
        </div>

        <!-- Event-декорации -->
        <div style="margin-bottom:140px;">
            <h2 style="color:#f59e0b; font-size:clamp(2.4rem, 5.5vw, 3.2rem); margin-bottom:16px; text-align:center;">Event-декорации</h2>
            <p style="font-size:1.3rem; margin-bottom:60px; max-width:960px; margin-left:auto; margin-right:auto; text-align:center; color:#cbd5e1;">
                Фотозоны, праздничное оформление, корпоративные и тематические инсталляции
            </p>
            
            <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(320px,1fr)); gap:28px;">
                <div onclick="window.location.href='#'" style="background:#1e2937; padding:36px 30px; border-radius:24px; transition:all 0.4s cubic-bezier(0.4,0,0.2,1); cursor:pointer; border:1px solid transparent;" 
                     onmouseover="this.style.borderColor='#f59e0b'; this.style.transform='translateY(-12px)'" onmouseout="this.style.borderColor='transparent'; this.style.transform='translateY(0)'">
                    <i class="fas fa-camera fa-4x" style="color:#f59e0b; margin-bottom:24px; display:block;"></i>
                    <h3 style="font-size:1.5rem; margin-bottom:12px; color:#f1f5f9;">Фотозоны и инсталляции</h3>
                    <p style="color:#94a3b8; line-height:1.5;">Брендированные зоны для фото и видео</p>
                </div>
                
                <div onclick="window.location.href='#'" style="background:#1e2937; padding:36px 30px; border-radius:24px; transition:all 0.4s cubic-bezier(0.4,0,0.2,1); cursor:pointer; border:1px solid transparent;" 
                     onmouseover="this.style.borderColor='#f59e0b'; this.style.transform='translateY(-12px)'" onmouseout="this.style.borderColor='transparent'; this.style.transform='translateY(0)'">
                    <i class="fas fa-birthday-cake fa-4x" style="color:#f59e0b; margin-bottom:24px; display:block;"></i>
                    <h3 style="font-size:1.5rem; margin-bottom:12px; color:#f1f5f9;">Праздничное оформление</h3>
                    <p style="color:#94a3b8; line-height:1.5;">Новый год, корпоративы, открытия</p>
                </div>
                
                <div onclick="window.location.href='#'" style="background:#1e2937; padding:36px 30px; border-radius:24px; transition:all 0.4s cubic-bezier(0.4,0,0.2,1); cursor:pointer; border:1px solid transparent;" 
                     onmouseover="this.style.borderColor='#f59e0b'; this.style.transform='translateY(-12px)'" onmouseout="this.style.borderColor='transparent'; this.style.transform='translateY(0)'">
                    <i class="fas fa-theater-masks fa-4x" style="color:#f59e0b; margin-bottom:24px; display:block;"></i>
                    <h3 style="font-size:1.5rem; margin-bottom:12px; color:#f1f5f9;">Корпоративные декорации</h3>
                    <p style="color:#94a3b8; line-height:1.5;">Сценические конструкции и тематические элементы</p>
                </div>
            </div>
        </div>

        <!-- Индивидуальные проекты -->
        <div>
            <h2 style="color:#f59e0b; font-size:clamp(2.4rem, 5.5vw, 3.2rem); margin-bottom:16px; text-align:center;">Индивидуальные проекты</h2>
            <p style="font-size:1.3rem; margin-bottom:60px; max-width:960px; margin-left:auto; margin-right:auto; text-align:center; color:#cbd5e1;">
                Нестандартные рекламные конструкции по вашему ТЗ. От концепта до реализации
            </p>
            
            <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(340px,1fr)); gap:28px;">
                <div style="background:#1e2937; padding:36px 30px; border-radius:24px; transition:all 0.4s cubic-bezier(0.4,0,0.2,1); border:1px solid transparent;" 
                     onmouseover="this.style.borderColor='#f59e0b'; this.style.transform='translateY(-12px)'" onmouseout="this.style.borderColor='transparent'; this.style.transform='translateY(0)'">
                    <i class="fas fa-lightbulb fa-4x" style="color:#f59e0b; margin-bottom:24px; display:block;"></i>
                    <h3 style="font-size:1.5rem; margin-bottom:12px; color:#f1f5f9;">Концепт-разработка</h3>
                    <p style="color:#94a3b8; line-height:1.5;">Креативные идеи под ваш бизнес</p>
                </div>
                
                <div style="background:#1e2937; padding:36px 30px; border-radius:24px; transition:all 0.4s cubic-bezier(0.4,0,0.2,1); border:1px solid transparent;" 
                     onmouseover="this.style.borderColor='#f59e0b'; this.style.transform='translateY(-12px)'" onmouseout="this.style.borderColor='transparent'; this.style.transform='translateY(0)'">
                    <i class="fas fa-cube fa-4x" style="color:#f59e0b; margin-bottom:24px; display:block;"></i>
                    <h3 style="font-size:1.5rem; margin-bottom:12px; color:#f1f5f9;">3D-моделирование и визуализация</h3>
                    <p style="color:#94a3b8; line-height:1.5;">Реалистичная визуализация проекта</p>
                </div>
                
                <div style="background:#1e2937; padding:36px 30px; border-radius:24px; transition:all 0.4s cubic-bezier(0.4,0,0.2,1); border:1px solid transparent;" 
                     onmouseover="this.style.borderColor='#f59e0b'; this.style.transform='translateY(-12px)'" onmouseout="this.style.borderColor='transparent'; this.style.transform='translateY(0)'">
                    <i class="fas fa-calculator fa-4x" style="color:#f59e0b; margin-bottom:24px; display:block;"></i>
                    <h3 style="font-size:1.5rem; margin-bottom:12px; color:#f1f5f9;">Инженерные расчёты</h3>
                    <p style="color:#94a3b8; line-height:1.5;">Прочность, ветровые нагрузки, безопасность</p>
                </div>
            </div>
        </div>

        <!-- ==================== БЛОК "РАБОТАЕМ ПО ВСЕЙ ЕВРОПЕ" ==================== -->
        <div style="background:linear-gradient(135deg, #0f172a, #1e2937); padding:140px 5% 120px; margin-top:120px; border-radius:32px;">
            <div style="max-width:1240px; margin:auto; text-align:center;">
                <h2 style="color:#f59e0b; font-size:clamp(2.2rem, 5.5vw, 3rem); margin-bottom:24px;">
                    Работаем по всей Европе
                </h2>
                <p style="font-size:1.3rem; color:#cbd5e1; max-width:780px; margin:auto; line-height:1.75;">
                    Проекты успешно реализованы в Литве, Латвии, Эстонии, Польше, Германии, Швеции, Норвегии, Финляндии и других странах ЕС.
                </p>
                
                <!-- Флаги -->
                <div style="display:flex; flex-wrap:wrap; justify-content:center; gap:32px; margin-top:70px;">
                    <div style="text-align:center;">
                        <div style="font-size:52px; margin-bottom:10px;">🇱🇹</div>
                        <p style="color:#94a3b8;">Литва</p>
                    </div>
                    <div style="text-align:center;">
                        <div style="font-size:52px; margin-bottom:10px;">🇱🇻</div>
                        <p style="color:#94a3b8;">Латвия</p>
                    </div>
                    <div style="text-align:center;">
                        <div style="font-size:52px; margin-bottom:10px;">🇪🇪</div>
                        <p style="color:#94a3b8;">Эстония</p>
                    </div>
                    <div style="text-align:center;">
                        <div style="font-size:52px; margin-bottom:10px;">🇵🇱</div>
                        <p style="color:#94a3b8;">Польша</p>
                    </div>
                    <div style="text-align:center;">
                        <div style="font-size:52px; margin-bottom:10px;">🇩🇪</div>
                        <p style="color:#94a3b8;">Германия</p>
                    </div>
                    <div style="text-align:center;">
                        <div style="font-size:52px; margin-bottom:10px;">🇸🇪</div>
                        <p style="color:#94a3b8;">Швеция</p>
                    </div>
                    <div style="text-align:center;">
                        <div style="font-size:52px; margin-bottom:10px;">🇳🇴</div>
                        <p style="color:#94a3b8;">Норвегия</p>
                    </div>
                    <div style="text-align:center;">
                        <div style="font-size:52px; margin-bottom:10px;">🇫🇮</div>
                        <p style="color:#94a3b8;">Финляндия</p>
                    </div>
                </div>
                
                <div style="margin-top:80px;">
                    <a href="contact.php" 
                       style="background:#f59e0b; color:#111827; padding:22px 64px; border-radius:50px; text-decoration:none; font-weight:800; font-size:1.3rem; display:inline-block; box-shadow:0 15px 35px rgba(245,158,11,0.35); transition:all 0.3s ease;"
                       onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
                        Обсудить проект в любой стране ЕС
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>