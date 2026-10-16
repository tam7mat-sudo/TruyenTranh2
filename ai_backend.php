<?php
header('Content-Type: application/json');

$message = isset($_POST['message']) ? trim($_POST['message']) : '';

if ($message === '') {
    echo json_encode(['reply' => 'Bạn chưa nhập nội dung câu hỏi!']);
    exit;
}

$message_lower = mb_strtolower($message, 'UTF-8');
$reply = "Cảm ơn bạn đã quan tâm đến Hikaru Shop![cite: 1] Hiện tại các đầu truyện hot đang có sẵn trên hệ thống, bạn có thể tìm kiếm ở thanh tìm kiếm phía trên nhé.";

// Xây dựng các từ khóa phản hồi thông minh theo danh mục web của bạn
if (strpos($message_lower, 'ngôn tình') !== false) {
    $reply = "Dạ mục Ngôn Tình[cite: 1] bên Hikaru Shop đang có rất nhiều tựa truyện hot như: Giữa Mùa Gặp Lại, Thành Quỹ Chân Tình... Giá cực ưu đãi luôn ạ!";
} elseif (strpos($message_lower, 'giá') || strpos($message_lower, 'ưu đãi')) {
    $reply = "Các tựa truyện tại Hikaru Shop đều đang có chương trình giảm giá và đi kèm quà tặng độc quyền (postcard/bookmark) theo từng tập truyện đó bạn!";
} elseif (strpos($message_lower, 'ship') || strpos($message_lower, 'giao hàng')) {
    $reply = "Hikaru Shop hỗ trợ giao hàng toàn quốc nhanh chóng, đóng gói chống sốc cực kỹ lưỡng cho truyện tranh nhé ạ!";
}

echo json_encode(['reply' => $reply]);
?>