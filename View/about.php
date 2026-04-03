<?php include_once 'View/header.php'; ?>

<style>
    /* Tổng thể */
    .about-container { font-family: 'Arial', sans-serif; line-height: 1.6; color: #333; }
    .container-wide { max-width: 1200px; margin: 0 auto; padding: 0 15px; }
    
    /* Banner đầu trang */
    .about-banner { 
        background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('public/img/about-banner.jpg'); 
        background-size: cover; background-position: center;
        height: 400px; display: flex; align-items: center; justify-content: center; color: #fff; text-align: center;
    }
    .about-banner h1 { font-size: 45px; letter-spacing: 2px; text-transform: uppercase; margin: 0; }

    /* Phần nội dung chính */
    .about-content { padding: 60px 0; }
    .section-title { text-align: center; margin-bottom: 50px; }
    .section-title h2 { font-size: 32px; color: #c69c6d; position: relative; padding-bottom: 15px; text-transform: uppercase; }
    .section-title h2::after { content: ''; width: 60px; height: 3px; background: #c69c6d; position: absolute; bottom: 0; left: 50%; transform: translateX(-50%); }

    /* Triết lý kinh doanh (Giống Hải Triều) */
    .philosophy { display: flex; gap: 50px; align-items: center; margin-bottom: 80px; }
    .philosophy-text { flex: 1; }
    .philosophy-image { flex: 1; text-align: center; }
    .philosophy-image img { width: 100%; border-radius: 10px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); }
    .philosophy h3 { color: #c69c6d; font-size: 24px; margin-bottom: 20px; }

    /* Giá trị cốt lõi - Dạng Icon */
    .core-values { background: #f9f9f9; padding: 80px 0; }
    .values-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px; }
    .value-item { background: #fff; padding: 40px 30px; text-align: center; border-radius: 5px; transition: 0.3s; border: 1px solid #eee; }
    .value-item:hover { transform: translateY(-10px); box-shadow: 0 15px 30px rgba(0,0,0,0.05); }
    .value-item i { font-size: 40px; color: #c69c6d; margin-bottom: 20px; }
    .value-item h4 { font-size: 20px; margin-bottom: 15px; }

    /* Con số biết nói */
    .stats { padding: 80px 0; background: #c69c6d; color: #fff; text-align: center; }
    .stats-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; }
    .stat-number { font-size: 40px; font-weight: bold; display: block; }
    .stat-label { font-size: 16px; text-transform: uppercase; opacity: 0.9; }

    /* Responsive */
    @media (max-width: 768px) {
        .philosophy { flex-direction: column; }
        .values-grid, .stats-grid { grid-template-columns: 1fr; }
    }
</style>

<div class="about-container">
    <div class="about-banner">
        <div class="container-wide">
            <h1>Luxora - Quyền Năng Của Thời Gian</h1>
            <p>Hành trình khẳng định đẳng cấp trang sức và đồng hồ cao cấp tại Việt Nam</p>
        </div>
    </div>

    <section class="about-content">
        <div class="container-wide">
            <div class="philosophy">
                <div class="philosophy-text">
                    <h3>Quyền Được An Tâm</h3>
                    <p>Được thành lập từ năm 1991, <strong>Luxora</strong> không chỉ đơn thuần bán những chiếc đồng hồ hay những bộ trang sức xa xỉ. Chúng tôi bán <strong>niềm tin</strong> và <strong>sự an tâm tuyệt đối</strong>.</p>
                    <p>Giống như triết lý của những người tiên phong, Luxora tập trung vào trải nghiệm khách hàng. Mỗi sản phẩm rời khỏi cửa hàng đều đi kèm với lời cam kết về chất lượng cao nhất và chế độ hậu mãi chuẩn quốc tế.</p>
                </div>
                <div class="philosophy-image">
                    <img src="public/img/store-front.jpg" alt="Showroom Luxora">
                </div>
            </div>

            <div class="philosophy" style="flex-direction: row-reverse;">
                <div class="philosophy-text">
                    <h3>Sứ Mệnh Của Chúng Tôi</h3>
                    <p>Luxora mang sứ mệnh đem những tinh hoa của ngành chế tác đồng hồ thế giới và nghệ thuật trang sức tinh xảo đến gần hơn với người Việt. Chúng tôi tin rằng, mỗi món trang sức bạn đeo không chỉ là phụ kiện, mà là biểu tượng của thành công và cá tính riêng.</p>
                </div>
                <div class="philosophy-image">
                    <img src="public/img/craftsmanship.jpg" alt="Chế tác chuyên nghiệp">
                </div>
            </div>
        </div>
    </section>

    <section class="core-values">
        <div class="container-wide">
            <div class="section-title">
                <h2>Giá Trị Cốt Lõi</h2>
            </div>
            <div class="values-grid">
                <div class="value-item">
                    <i class="fa-solid fa-gem"></i>
                    <h4>Sản Phẩm Chính Hãng</h4>
                    <p>Cam kết 100% sản phẩm nhập khẩu chính ngạch, đầy đủ giấy tờ chứng nhận từ các thương hiệu lớn.</p>
                </div>
                <div class="value-item">
                    <i class="fa-solid fa-shield-halved"></i>
                    <h4>Bảo Hành Vượt Trội</h4>
                    <p>Chế độ bảo hành lên đến 5 năm, thay pin miễn phí trọn đời cho mọi dòng đồng hồ quartz.</p>
                </div>
                <div class="value-item">
                    <i class="fa-solid fa-medal"></i>
                    <h4>Dịch Vụ Chuẩn 5 Sao</h4>
                    <p>Đội ngũ chuyên viên tư vấn tận tâm, am hiểu sâu sắc về sản phẩm và phong cách thời trang.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="stats">
        <div class="container-wide">
            <div class="stats-grid">
                <div>
                    <span class="stat-number">30+</span>
                    <span class="stat-label">Năm Kinh Nghiệm</span>
                </div>
                <div>
                    <span class="stat-number">15+</span>
                    <span class="stat-label">Showroom Toàn Quốc</span>
                </div>
                <div>
                    <span class="stat-number">500k+</span>
                    <span class="stat-label">Khách Hàng Tin Dùng</span>
                </div>
                <div>
                    <span class="stat-number">20+</span>
                    <span class="stat-label">Thương Hiệu Đối Tác</span>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include_once 'View/footer.php'; ?>