# PTTKPM25-26_ClassN05_Nhom18
# HỆ THỐNG QUẢN LÝ CỬA HÀNG THIẾT BỊ ĐIỆN TỬ TRỰC TUYẾN
Dự án mô phỏng một nền tảng thương mại điện tử chuyên về **thiết bị điện tử**, cho phép người dùng:
- Duyệt sản phẩm, lọc theo danh mục/giá/thương hiệu  
- Quản lý giỏ hàng và đặt hàng  
- Thanh toán trực tuyến an toàn qua cổng tích hợp (OTP/3DS)  
- Theo dõi trạng thái đơn hàng  
- Đánh giá và gửi yêu cầu hỗ trợ khách hàng  

Ở phía **quản trị**, hệ thống cung cấp:
- Quản lý sản phẩm, tồn kho, người dùng và đơn hàng  
- Theo dõi giao dịch, hoàn tiền, khuyến mãi, và thống kê báo cáo  

---

## 🎯 Mục tiêu dự án
1. Xây dựng hệ thống thương mại điện tử đầy đủ các chức năng cơ bản: quản lý sản phẩm, giỏ hàng, thanh toán, chăm sóc khách hàng.  
2. Đảm bảo tiêu chí **phi chức năng**: hiệu năng cao, khả năng mở rộng, bảo mật, và trải nghiệm người dùng tốt.  
3. Triển khai kiến trúc ba tầng **(Three-Tier Architecture)** gồm:
   - **Presentation Layer:** Giao diện người dùng (UI, Controller)
   - **Business Layer:** Logic nghiệp vụ (Service)
   - **Data Layer:** Xử lý dữ liệu (Repository, Database)

---

## 👨‍💻 Thành viên nhóm

| STT | Họ và tên | Mã SV |
|-----|------------|--------|
| 1 | Đặng Việt Anh | 23010689 |
| 2 | Đỗ Bảo Long | 23010561 |
| 3 | Nguyễn Đức Quang  | 21012890 |

---

## ⚙️ Công nghệ sử dụng
| Thành phần | Công nghệ/Framework |
|-------------|----------------------|
| **Front-End** | HTML5, CSS3, JavaScript, Bootstrap |
| **Back-End** | PHP (Laravel Framework) |
| **Cơ sở dữ liệu** | PhpMyAdmin |
| **Quản lý phiên bản** | Git & GitHub |
| **Quy trình phát triển** | Agile – Scrum (chia Sprint, có Product Backlog và Review định kỳ) |

---

## 🧠 Kiến trúc hệ thống

### 1. Mô hình 3 lớp (Three-Tier Architecture)
- **Presentation Layer:**  
  Giao diện người dùng (CustomerUI, AdminUI) và Controller xử lý yêu cầu (ProductController, OrderController…).
- **Business Layer:**  
  Chứa logic nghiệp vụ chính.
- **Data Access Layer:**  
  Giao tiếp trực tiếp với cơ sở dữ liệu thông qua các Repository.

### 2. Luồng xử lý chính
1. Người dùng truy cập website → tìm sản phẩm → thêm vào giỏ  
2. Tiến hành đặt hàng → chọn phương thức thanh toán và địa chỉ giao hàng
3. Quản trị viên xác nhận, đóng gói, giao hàng → cập nhật hệ thống  
4. Người dùng nhận hàng, đánh giá, yêu cầu hỗ trợ nếu cần  

---

## 🧩 Các module chính

### 👤 Khách hàng
- Đăng ký / đăng nhập / xác thực OTP  
- Tìm kiếm, xem chi tiết, lọc sản phẩm  
- Quản lý giỏ hàng, đặt hàng, thanh toán  
- Theo dõi trạng thái đơn hàng, xem lịch sử  
- Viết đánh giá, chat hỗ trợ, nhận thông báo

### 🧑‍💼 Quản trị viên
- Quản lý tài khoản người dùng  
- Quản lý sản phẩm, danh mục, tồn kho  
- Quản lý đơn hàng và xử lý đổi trả hàng  
- Quản lý chương trình khuyến mãi, voucher  
- Theo dõi thống kê, xuất báo cáo doanh thu

---

## 🧾 Đánh giá tổng kết
Dự án **“Hệ thống Quản lý Cửa Hàng Thiết Bị Điện Tử Trực Tuyến”** được phát triển theo **Agile – Scrum**, giúp nhóm cải tiến liên tục và kiểm soát tiến độ hiệu quả.  
Hệ thống xây dựng trên **Laravel + PhpMyAdmin + Tailwind CSS**, đáp ứng đầy đủ các luồng chính: đăng ký, tìm kiếm, giỏ hàng, đặt hàng, thanh toán, theo dõi đơn, đánh giá và hỗ trợ khách hàng.  
Dữ liệu tuân thủ ràng buộc quan hệ, giao diện thân thiện, phân quyền RBAC rõ ràng, bảo mật với bcrypt và HTTPS.  
Các sơ đồ **Use Case, Class, Sequence, Activity, State** thể hiện đúng nghiệp vụ và kiến trúc 3 tầng.  
Hạn chế: chưa tích hợp cổng thanh toán thực (VNPAY/Momo), module gợi ý và chat real-time mới ở mức thử nghiệm, và chưa kiểm thử tải quy mô lớn.

---

## 🚀 Hướng phát triển
Nhóm dự kiến mở rộng hệ thống theo 5 hướng chính:
1. **Tích hợp thực tế:** kết nối API thanh toán (VNPAY, Momo, ZaloPay), GHN, GHTK, Viettel Post; chuẩn hóa quy trình đổi/trả/bảo hành.  
2. **Trải nghiệm người dùng:** thiết kế mobile-first, thêm dark mode, thông báo đẩy, cá nhân hóa gợi ý, chat real-time bằng WebSocket/Pusher.  
3. **Phân tích & báo cáo:** phát triển dashboard doanh thu, tồn kho, áp dụng machine learning cho gợi ý và dự đoán nhu cầu.  
4. **Nâng cấp nền tảng:** dùng JWT/OAuth2/SSO, triển khai Docker + CI/CD, tăng cường logging, monitoring, backup định kỳ.  
5. **Mở rộng sản phẩm:** hỗ trợ đa chi nhánh, phát triển app mobile (Flutter/React Native), tích hợp chatbot và hệ gợi ý thông minh.

> Mục tiêu: xây dựng hệ thống thương mại điện tử **an toàn – hiệu quả – dễ mở rộng**, sẵn sàng vận hành thực tế.
