<?php
// consultant-widget.php — AI Консультант Golden Hands (только по клику)
?>
<!-- Плавающая кнопка чата -->
<button onclick="toggleChat()" id="chat-open-btn"
    style="position:fixed; bottom:25px; right:25px; width:72px; height:72px; background:linear-gradient(135deg, #f59e0b, #eab308);
           color:#111827; border:none; border-radius:50%; font-size:34px; cursor:pointer; 
           box-shadow:0 12px 40px rgba(245,158,11,0.6); z-index:9998; transition:all 0.4s ease;">
    💬
</button>

<!-- Окно чата -->
<div id="chat-window" style="display:none; position:fixed; bottom:20px; right:20px; width:420px; max-width:94vw; height:680px;
                           background:rgba(15,23,42,0.97); backdrop-filter:blur(24px); border-radius:28px; 
                           box-shadow:0 30px 80px rgba(0,0,0,0.75); border:1px solid rgba(245,158,11,0.5); 
                           overflow:hidden; z-index:9999; flex-direction:column;">

    <!-- Header -->
    <div style="background:linear-gradient(90deg,#f59e0b,#eab308); padding:22px 25px; color:#111827; 
                display:flex; align-items:center; justify-content:space-between;">
        <div style="display:flex; align-items:center; gap:16px;">
            <div style="width:52px;height:52px;background:#111827;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:28px;">👩‍💼</div>
            <div>
                <div style="font-size:1.35rem; font-weight:700;">Татьяна</div>
                <div style="font-size:0.95rem; opacity:0.9;">Golden Hands • Онлайн</div>
            </div>
        </div>
        <button onclick="toggleChat()" style="background:none;border:none;font-size:32px;color:#111827;cursor:pointer;">✕</button>
    </div>

    <!-- Сообщения -->
    <div id="chat-messages" style="flex:1; padding:24px 22px; overflow-y:auto; background:#0f172a; display:flex; flex-direction:column; gap:16px;"></div>

    <!-- Поле ввода -->
    <div style="padding:18px 22px; background:#1e2937; border-top:1px solid #334155;">
        <div style="display:flex; gap:12px;">
            <input type="text" id="chat-input" placeholder="Напишите сообщение..." 
                   style="flex:1; padding:16px 24px; background:#0f172a; border:1px solid rgba(245,158,11,0.3); 
                          border-radius:9999px; outline:none; font-size:1.05rem; color:white;">
            <button onclick="sendMessage()" 
                    style="background:#f59e0b; color:#111827; border:none; width:58px; height:58px; border-radius:50%; font-size:24px; cursor:pointer;">
                →
            </button>
        </div>
    </div>
</div>

<script>
// === Настройки ===
const API_URL = 'https://golden-hands.lt/ru/ai/bot.php';
let session = localStorage.getItem('golden_hands_session') || 
              's_' + Date.now() + '_' + Math.random().toString(36).substring(2,16);
localStorage.setItem('golden_hands_session', session);

const chatWindow = document.getElementById('chat-window');
const messages = document.getElementById('chat-messages');
const input = document.getElementById('chat-input');

function toggleChat() {
    chatWindow.style.display = (chatWindow.style.display === 'flex') ? 'none' : 'flex';
}

function addMessage(text, sender) {
    const div = document.createElement('div');
    div.style.cssText = sender === 'user' 
        ? 'align-self:flex-end; max-width:80%;' 
        : 'align-self:flex-start; max-width:80%;';

    div.innerHTML = sender === 'user' 
        ? `<div style="background:#f59e0b; color:#111827; padding:14px 20px; border-radius:20px 20px 4px 20px;">${text}</div>`
        : `<div style="background:#1e2937; padding:14px 20px; border-radius:20px 20px 20px 4px;">${text}</div>`;

    messages.appendChild(div);
    messages.scrollTop = messages.scrollHeight;
}

async function sendMessage() {
    const text = input.value.trim();
    if (!text) return;

    addMessage(text, 'user');
    input.value = '';

    const typing = document.createElement('div');
    typing.textContent = 'Печатает...';
    typing.style.cssText = 'color:#94a3b8; font-style:italic; align-self:flex-start;';
    messages.appendChild(typing);
    messages.scrollTop = messages.scrollHeight;

    try {
        const res = await fetch(API_URL, {
            method: 'POST',
            headers: {'Content-Type': 'application/json'},
            body: JSON.stringify({ session: session, message: text })
        });

        const data = await res.json();
        typing.remove();
        addMessage(data.reply || "Спасибо! Позвоните нам: +370 641 09990", 'bot');
    } catch (e) {
        typing.remove();
        addMessage("Извините, небольшая задержка. Позвоните: +370 641 09990", 'bot');
    }
}

// Enter
input.addEventListener('keypress', e => {
    if (e.key === 'Enter') sendMessage();
});
</script>