<!-- Khung bong bóng chat AI ở góc phải màn hình -->
<div id="hikaru-ai-widget" style="position: fixed; bottom: 20px; right: 20px; z-index: 9999; font-family: Arial, sans-serif;">
    <!-- Nút mở chat -->
    <button id="ai-toggle-btn" style="background-color: #2d6a4f; color: white; border: none; border-radius: 50px; padding: 12px 20px; cursor: pointer; box-shadow: 0 4px 10px rgba(0,0,0,0.2); font-weight: bold; display: flex; align-items: center; gap: 8px;">
        💬 Trợ lý AI Hikaru
    </button>

    <!-- Hộp chat chính (ẩn mặc định) -->
    <div id="ai-chat-box" style="display: none; width: 320px; height: 450px; background: white; border-radius: 12px; box-shadow: 0 5px 20px rgba(0,0,0,0.3); flex-direction: column; overflow: hidden; margin-bottom: 10px; border: 1px solid #ddd;">
        <!-- Header hộp chat -->
        <div style="background-color: #2d6a4f; color: white; padding: 12px; font-weight: bold; display: flex; justify-content: space-between; align-items: center;">
            <span>🤖 AI Tư Vấn Truyện Tranh</span>
            <button id="ai-close-btn" style="background: none; border: none; color: white; font-size: 16px; cursor: pointer;">&times;</button>
        </div>
        
        <!-- Khung hiển thị tin nhắn -->
        <div id="ai-chat-messages" style="flex: 1; padding: 10px; overflow-y: auto; background: #f9f9f9; font-size: 14px; display: flex; flex-direction: column; gap: 8px;">
            <div style="background: #e2ede6; padding: 8px 12px; border-radius: 8px; max-width: 80%; align-self: flex-start;">
                Konnichiwa! Mình là trợ lý AI của Hikaru Shop. Bạn đang tìm thể loại truyện gì (Ngôn tình, Hành động, Đam mỹ...) hay cần mình tóm tắt cốt truyện nào không?
            </div>
        </div>

        <!-- Khung nhập nội dung -->
        <div style="padding: 10px; border-top: 1px solid #eee; display: flex; gap: 5px; background: #fff;">
            <input type="text" id="ai-user-input" placeholder="Nhập câu hỏi cho AI..." style="flex: 1; padding: 8px; border: 1px solid #ccc; border-radius: 6px; outline: none; font-size: 13px;">
            <button id="ai-send-btn" style="background-color: #2d6a4f; color: white; border: none; padding: 8px 12px; border-radius: 6px; cursor: pointer;">Gửi</button>
        </div>
    </div>
</div>

<script>
const toggleBtn = document.getElementById('ai-toggle-btn');
const closeBtn = document.getElementById('ai-close-btn');
const chatBox = document.getElementById('ai-chat-box');
const sendBtn = document.getElementById('ai-send-btn');
const userInput = document.getElementById('ai-user-input');
const chatMessages = document.getElementById('ai-chat-messages');

toggleBtn.onclick = () => {
    chatBox.style.display = chatBox.style.display === 'none' ? 'flex' : 'none';
    toggleBtn.style.display = chatBox.style.display === 'flex' ? 'none' : 'flex';
};

closeBtn.onclick = () => {
    chatBox.style.display = 'none';
    toggleBtn.style.display = 'flex';
};

function appendMessage(sender, text) {
    const msgDiv = document.createElement('div');
    msgDiv.style.padding = '8px 12px';
    msgDiv.style.borderRadius = '8px';
    msgDiv.style.maxWidth = '80%';
    msgDiv.style.fontSize = '13px';
    
    if(sender === 'user') {
        msgDiv.style.background = '#2d6a4f';
        msgDiv.style.color = 'white';
        msgDiv.style.alignSelf = 'flex-end';
    } else {
        msgDiv.style.background = '#e2ede6';
        msgDiv.style.color = '#333';
        msgDiv.style.alignSelf = 'flex-start';
    }
    msgDiv.innerText = text;
    chatMessages.appendChild(msgDiv);
    chatMessages.scrollTop = chatMessages.scrollHeight;
}

async function handleSendMessage() {
    const text = userInput.value.trim();
    if(!text) return;
    
    appendMessage('user', text);
    userInput.value = '';
    
    // Hiển thị trạng thái đang suy nghĩ
    const loadingId = 'loading_' + Date.now();
    const loadingDiv = document.createElement('div');
    loadingDiv.id = loadingId;
    loadingDiv.style.background = '#e2ede6';
    loadingDiv.style.padding = '8px 12px';
    loadingDiv.style.borderRadius = '8px';
    loadingDiv.style.alignSelf = 'flex-start';
    loadingDiv.style.fontSize = '13px';
    loadingDiv.innerText = 'AI đang suy nghĩ...';
    chatMessages.appendChild(loadingDiv);
    chatMessages.scrollTop = chatMessages.scrollHeight;

    try {
        // Gửi request ngầm về file xử lý PHP ở backend
        const response = await fetch('ai_backend.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: 'message=' + encodeURIComponent(text)
        });
        const data = await response.json();
        
        document.getElementById(loadingId).remove();
        appendMessage('ai', data.reply || 'Xin lỗi, hệ thống AI đang bận.');
    } catch (err) {
        document.getElementById(loadingId).remove();
        appendMessage('ai', 'Đã có lỗi kết nối tới máy chủ AI.');
    }
}

sendBtn.onclick = handleSendMessage;
userInput.onkeypress = (e) => { if(e.key === 'Enter') handleSendMessage(); };
</script>