<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Architect Design Package: between 2001 to 2500 Sq.Ft. Projects.</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="../responsive-header.css">
    <link rel="stylesheet" href="../new_footer.css">
        <!-- Confetti Library -->
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>
    <!-- Lordicon Library -->
    <script src="https://cdn.lordicon.com/lordicon.js"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Helvetica Neue', sans-serif;
            background-color: #ffffff;
            color: #1a1a1a;
            line-height: 1.6;
            padding-top: 80px;
            /* Space for fixed header */
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 20px;
        }

        .product-header {
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 1px solid #e5e5e5;
        }

        .product-header h1 {
            font-size: 13px;
            font-weight: 400;
            color: #666;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            cursor: pointer;
        }

        .product-header h1:hover {
            color: #1a1a1a;
        }

        .main-content {
            display: grid;
            grid-template-columns: 450px 1fr 400px;
            gap: 40px;
        }

        .left-section {
            padding: 0;
        }

        .middle-section {
            padding: 0;
            max-height: 100vh;
            overflow-y: auto;
            padding-right: 15px;
        }

        .middle-section::-webkit-scrollbar {
            width: 0;
            background: transparent;
        }

        .middle-section {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        .right-section {
            padding: 0;
            max-height: 100vh;
            overflow-y: auto;
            padding-right: 15px;
        }

        .right-section::-webkit-scrollbar {
            width: 0;
            background: transparent;
        }

        .right-section {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        .product-image-container {
            width: 100%;
            background: transparent;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 500px;
            padding: 0;
        }

        .product-image-container img {
            max-width: 100%;
            max-height: 800px;
            width: auto;
            height: auto;
            object-fit: contain;
        }

        .middle-section h1 {
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 20px;
            color: #e74c3c;
            line-height: 1.2;
        }

        .product-description {
            background: transparent;
            padding: 0;
            margin-bottom: 30px;
            border: none;
        }

        .product-description h3 {
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 10px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            color: #1a1a1a;
        }

        .product-description p {
            font-size: 15px;
            color: #666;
            line-height: 1.7;
        }

        .collapsible {
            cursor: pointer;
            padding: 12px 0;
            background: transparent;
            border: none;
            width: 100%;
            text-align: left;
            font-weight: 400;
            font-size: 14px;
            border-bottom: 1px solid #e5e5e5;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: opacity 0.2s ease;
            color: #1a1a1a;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .collapsible:hover {
            opacity: 0.7;
        }

        .collapsible span:last-child {
            font-size: 10px;
            margin-left: 8px;
        }

        .collapsible-content {
            display: none;
            padding: 0;
            background: transparent;
            border-left: none;
            margin-bottom: 0;
            line-height: 1.8;
            color: #666;
            font-size: 14px;
            white-space: pre-line;
        }

        .collapsible-content.show {
            display: block;
        }

        .collapsible-content h4,
        .collapsible-content strong {
            font-size: 15px;
            font-weight: 600;
            color: #1a1a1a;
            margin: 0 0 10px 0;
            display: block;
        }

        .collapsible-content ul {
            margin-left: 20px;
            margin-top: 8px;
            margin-bottom: 15px;
            list-style-type: disc;
        }

        .collapsible-content li {
            margin-bottom: 8px;
            line-height: 1.6;
            color: #666;
        }

        .collapsible-content p {
            margin-bottom: 12px;
        }

        .price {
            font-size: 32px;
            font-weight: 600;
            margin-bottom: 5px;
            color: #1a1a1a;
        }

        .discount-text {
            font-size: 11px;
            font-weight: 600;
            color: #007bff;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            /* text-decoration: underline; Removed underline */
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .discount-text:hover {
            color: #0056b3;
        }

        .discount-text.applied {
            color: #27ae60;
            text-decoration: none;
            font-weight: 700;
            cursor: default;
        }

        .discount-hint {
            font-size: 10px;
            color: #666;
            margin-top: -15px;
            margin-bottom: 20px;
            cursor: pointer;
            transition: color 0.2s;
        }

        .discount-hint:hover {
            color: #333;
            /* text-decoration: underline; Removed underline */
        }

        .section-title {
            font-size: 14px;
            font-weight: 600;
            margin: 25px 0 15px 0;
            color: #1a1a1a;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .option-group {
            margin-bottom: 25px;
        }

        .option-label {
            display: flex;
            align-items: flex-start;
            padding: 10px 0;
            cursor: pointer;
            transition: opacity 0.2s ease;
            border-bottom: 1px solid #f0f0f0;
        }

        .option-label:hover {
            opacity: 0.7;
        }

        .option-label input[type="radio"],
        .option-label input[type="checkbox"] {
            margin-right: 10px;
            margin-top: 2px;
            cursor: pointer;
            width: 16px;
            height: 16px;
            flex-shrink: 0;
        }

        .option-text {
            flex-grow: 1;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 8px;
        }

        .option-name {
            font-weight: 400;
            color: #1a1a1a;
            font-size: 15px;
        }

        .option-price {
            color: #999;
            font-weight: 400;
            font-size: 12px;
            white-space: nowrap;
        }

        .checkbox-group {
            display: flex;
            flex-direction: column;
            gap: 0;
        }

        .checkbox-item {
            display: flex;
            align-items: flex-start;
            padding: 10px 0;
            border-bottom: 1px solid #f0f0f0;
        }

        .checkbox-item input[type="checkbox"] {
            margin-right: 10px;
            margin-top: 2px;
            width: 16px;
            height: 16px;
            cursor: pointer;
            flex-shrink: 0;
        }

        .checkbox-item label {
            cursor: pointer;
            flex-grow: 1;
            font-size: 15px;
            font-weight: 400;
            color: #1a1a1a;
        }

        .button-container {
            display: flex;
            gap: 10px;
            margin-top: 20px;
        }

        .add-to-cart-btn {
            flex: 1;
            padding: 13px;
            background: #1a1a1a;
            color: white;
            border: none;
            font-size: 12px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s ease;
            letter-spacing: 0.5px;
            text-transform: uppercase;
        }

        .add-to-cart-btn:hover {
            opacity: 0.8;
        }

        .buy-now-btn {
            flex: 1;
            padding: 13px;
            background: #e74c3c;
            color: white;
            border: none;
            font-size: 12px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s ease;
            letter-spacing: 0.5px;
            text-transform: uppercase;
        }

        .buy-now-btn:hover {
            background: #c0392b;
        }

        .in-stock {
            background: transparent;
            color: #1a1a1a;
            padding: 10px 0;
            border-bottom: 1px solid #f0f0f0;
            text-align: left;
            font-weight: 400;
            margin: 20px 0;
            font-size: 13px;
        }

        @media (max-width: 1024px) {
            .main-content {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .middle-section {
                max-height: none;
                overflow-y: visible;
                padding-right: 0;
            }

            .right-section {
                max-height: none;
                overflow-y: visible;
                padding-right: 0;
            }

            .middle-section h1 {
                font-size: 26px;
                margin-bottom: 10px;
            }

            .product-image-container {
                min-height: auto;
                margin-bottom: 15px;
            }
        }

        @media (max-width: 768px) {
            .container {
                padding: 15px;
            }

            .main-content {
                grid-template-columns: 1fr;
                gap: 15px;
            }

            .product-header h1 {
                font-size: 12px;
            }

            .middle-section h1 {
                font-size: 22px;
            }

            .price {
                font-size: 24px;
            }

            .product-header {
                margin-bottom: 20px;
                padding-bottom: 15px;
            }
        }

        /* Cart Notification */
        .cart-notification {
            position: fixed;
            top: 100px;
            right: -400px;
            background: white;
            padding: 20px 24px;
            border-radius: 12px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.15);
            z-index: 10000;
            min-width: 320px;
            max-width: 380px;
            transition: right 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            border-left: 4px solid #4caf50;
        }

        .cart-notification.show {
            right: 20px;
        }

        .cart-notification-header {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 12px;
        }

        .cart-notification-icon {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, #4caf50 0%, #45a049 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 18px;
            animation: scaleIn 0.3s ease;
        }

        @keyframes scaleIn {
            0% {
                transform: scale(0);
            }

            50% {
                transform: scale(1.2);
            }

            100% {
                transform: scale(1);
            }
        }

        .cart-notification-title {
            font-size: 16px;
            font-weight: 600;
            color: #1a1a1a;
        }

        .cart-notification-close {
            margin-left: auto;
            background: none;
            border: none;
            font-size: 20px;
            color: #999;
            cursor: pointer;
            padding: 0;
            width: 24px;
            height: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: color 0.2s ease;
        }

        .cart-notification-close:hover {
            color: #1a1a1a;
        }

        .cart-notification-body {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
        }

        .cart-icon-floating {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 60px;
            height: 60px;
            background: #1a1a1a;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 24px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
            cursor: pointer;
            z-index: 9999;
            transition: transform 0.2s ease;
        }

        .cart-icon-floating:hover {
            transform: scale(1.1);
        }

        .cart-count-badge {
            position: absolute;
            top: -5px;
            right: -5px;
            background: #e74c3c;
            color: white;
            font-size: 12px;
            width: 24px;
            height: 24px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            border: 2px solid white;
        }

        .cart-notification-image {
            width: 60px;
            height: 60px;
            border-radius: 8px;
            overflow: hidden;
            flex-shrink: 0;
        }

        .cart-notification-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .cart-notification-details {
            flex: 1;
        }

        .cart-notification-product {
            font-size: 14px;
            font-weight: 500;
            color: #1a1a1a;
            margin-bottom: 4px;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .cart-notification-price {
            font-size: 16px;
            font-weight: 700;
            color: #4caf50;
        }

        .cart-notification-actions {
            display: flex;
            gap: 10px;
        }

        .cart-notification-btn {
            flex: 1;
            padding: 10px;
            border: none;
            border-radius: 8px;
            font-size: 13px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s ease;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .cart-notification-btn-primary {
            background: #1a1a1a;
            color: white;
        }

        .cart-notification-btn-primary:hover {
            background: #333;
        }

        .cart-notification-btn-secondary {
            background: #f5f5f5;
            color: #1a1a1a;
        }

        .cart-notification-btn-secondary:hover {
            background: #e0e0e0;
        }

        /* Responsive Visibility Utilities */
        .mobile-only {
            display: none;
        }

        .trust-badges {
            margin-top: 20px;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
            padding: 20px;
            background: #f9f9f9;
            border-radius: 12px;
            border: 1px solid #eee;
        }

        .trust-badge {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .trust-badge i {
            font-size: 20px;
            color: #2c3e50;
            width: 24px;
            text-align: center;
        }

        .trust-badge-text {
            display: flex;
            flex-direction: column;
        }

        .trust-badge-title {
            font-size: 13px;
            font-weight: 700;
            color: #2c3e50;
            line-height: 1.2;
        }

        .trust-badge-desc {
            font-size: 11px;
            color: #666;
            line-height: 1.2;
        }

        .trust-badge img,
        .trust-badge lord-icon {
            width: 32px;
            height: 32px;
        }

        @media (max-width: 1024px) {
            .desktop-only {
                display: none;
            }

            .mobile-only {
                display: block;
                margin-top: 30px;
                border-top: 1px solid #e5e5e5;
                padding-top: 10px;
            }
        }
    </style>
</head>

<body>
    <!-- Header Container (loaded dynamically) -->
    <div id="header-container"></div>

    <!-- Cart Notification -->
    <div class="cart-notification" id="cartNotification">
        <div class="cart-notification-header">
            <div class="cart-notification-icon">
                <i class="fas fa-check"></i>
            </div>
            <div class="cart-notification-title">Added to Cart</div>
            <button class="cart-notification-close" onclick="closeCartNotification()">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <div class="cart-notification-body">
            <div class="cart-notification-image">
                <img id="cartNotifImage" src="" alt="Product">
            </div>
            <div class="cart-notification-details">
                <div class="cart-notification-product" id="cartNotifProduct"></div>
                <div class="cart-notification-price" id="cartNotifPrice"></div>
            </div>
        </div>
        <div class="cart-notification-actions">
            <button class="cart-notification-btn cart-notification-btn-secondary" onclick="closeCartNotification()">
                Continue Shopping
            </button>
            <button class="cart-notification-btn cart-notification-btn-primary" onclick="viewCart()">
                View Cart
            </button>
        </div>
    </div>

    <div class="container">
        <div class="product-header">
            <h1>← Back to catalog</h1>
        </div>

        <div class="main-content">
            <!-- Left Section -->
            <div class="left-section">
                <!-- Product Image -->
                <div class="product-image-container">
                    <img src="https://raw.githubusercontent.com/aaadityapal/webp/refs/heads/main/2001-2500SQFT.webp"
                        alt="Architect Design Package: between 2001 to 2500 Sq.Ft. Projects.">
                </div>

                <!-- Trust Badges (Desktop Only) -->
                <div class="trust-badges desktop-only">
                    <div class="trust-badge">
                        <lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" delay="2000"
                            colors="primary:#1a1a1a,secondary:#4caf50" style="width:32px;height:32px">
                        </lord-icon>
                        <div class="trust-badge-text">
                            <span class="trust-badge-title">Architect Certified</span>
                            <span class="trust-badge-desc">Professional Designs</span>
                        </div>
                    </div>
                    <div class="trust-badge">
                        <lord-icon src="https://cdn.lordicon.com/qhgmphtg.json" trigger="loop" delay="3000"
                            colors="primary:#1a1a1a,secondary:#e74c3c" style="width:32px;height:32px">
                        </lord-icon>
                        <div class="trust-badge-text">
                            <span class="trust-badge-title">100% Vastu</span>
                            <span class="trust-badge-desc">Compliant Basic Layouts</span>
                        </div>
                    </div>
                    <div class="trust-badge">
                        <lord-icon src="https://cdn.lordicon.com/zpxybbhl.json" trigger="loop" delay="4000"
                            colors="primary:#1a1a1a,secondary:#007bff" style="width:32px;height:32px">
                        </lord-icon>
                        <div class="trust-badge-text">
                            <span class="trust-badge-title">24/7 Support</span>
                            <span class="trust-badge-desc">Expert Assistance</span>
                        </div>
                    </div>
                    <div class="trust-badge">
                        <lord-icon src="https://cdn.lordicon.com/nocovwne.json" trigger="loop" delay="5000"
                            colors="primary:#1a1a1a,secondary:#f39c12" style="width:32px;height:32px">
                        </lord-icon>
                        <div class="trust-badge-text">
                            <span class="trust-badge-title">GST Invoice</span>
                            <span class="trust-badge-desc">Available for Input</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Middle Section -->
            <div class="middle-section">
                <h1>Architect Design Package: between 2001 to 2500 Sq.Ft. Projects.</h1>

                <div class="product-description">
                    <h3>Product Details</h3>
                    <p>Get House plan as per your site Measurements for Area between 2001 Sq.Ft. to 2500 Sq.Ft. Projects.</p>
                </div>

                <!-- Info Sections (Desktop Only) -->
                <div class="desktop-only">
                    <button class="collapsible active" onclick="toggleCollapsible(this)">
                        <span>Read More</span>
                        <span>▼</span>
                    </button>
                    <div class="collapsible-content show">
                        <p><strong>Design Package Details:</strong></p><ul><li>Design Options: 02 Nos. Concept Drawings</li><li>Site Visits: 03 Nos.</li><li>Concept PPT For Reference of Interior &amp; Exterior of the Building.</li><li>As per Accurate Measurements.</li><li>Design By Architects Only.</li><li>Following shall be provided in Package:</li><li class="ql-indent-1">Architectural Drawings</li><li class="ql-indent-1">Structural Drawings</li><li class="ql-indent-1">Electrical Drawings</li><li class="ql-indent-1">Plumbing Drawings</li><li class="ql-indent-1">Water Supply Drawings</li><li class="ql-indent-1">Staircase Details</li><li class="ql-indent-1">Door Window Details</li><li class="ql-indent-1">Finishing Schedule</li><li>Drawings shall be delivered in 07 Working Days of concept Finalization after payment.</li><li>Contractor/Vendor Specific Suggestion</li><li>Material &amp; Budget Specific Suggestion</li><li>GST Billing: M/S Arya Enterprises</li><li>Part Payment Available</li><li>Non-Refundable Payments</li><li>Above package is applicable only for typical floor additional floor shall be charged as provided seperately.</li><li>Audio/Video Assistance throughout the Project, as complimentary services by M/S ArchitectsHive.</li><li>Site Visits are not applicable outside Delhi-Noida-Gurugram Metro influenced area in Delhi NCR.</li><li>No Refund for non-applicable site visits shall be made as, Site Visits are complimentary from M/S ArchitectsHive.</li></ul><p><br></p>                    </div>

                    <button class="collapsible" onclick="toggleCollapsible(this)">
                        <span>Payment Stages</span>
                        <span>▼</span>
                    </button>
                    <div class="collapsible-content">
                        <p><strong style="background-color: initial;">Enjoy a 10% discount on full payment using promo code! :&nbsp;</strong><strong style="background-color: initial; color: rgb(192, 80, 77);">INSTANT10</strong></p><p><strong style="background-color: initial;">Stage 1:&nbsp;</strong><strong style="background-color: initial; color: rgb(192, 80, 77);">COUPON CODE: STAGE1</strong></p><p><strong style="background-color: initial;">Services By M/S ArchitectsHive</strong></p><ul><li>1st Site Visit: (Measurement &amp; Requirements).</li><li>Consultancy Agreement.</li><li>Two Options of Layout (Concept Designs) as per client requirements.</li><li>Concept PPT for Interior &amp; Exterior options as per Client requirements.</li></ul><p><strong style="background-color: initial;">Stage 2:&nbsp;</strong><strong style="background-color: initial; color: rgb(192, 80, 77);">COUPON CODE: STAGE2</strong></p><p><strong style="background-color: initial;">Services By M/S ArchitectsHive</strong></p><ul><li>Architectural Working Drawings.</li><li>Structural Working Drawings.</li><li>Electrical Drawings.</li><li>Water Supply &amp; Plumbing working Drawings.</li><li>3D View for Designed Elevation (if applicable).</li></ul><p><strong style="background-color: initial;">Stage 3:&nbsp;</strong><strong style="background-color: initial; color: rgb(192, 80, 77);">COUPON CODE: STAGE3</strong></p><p><strong style="background-color: initial;">Services By M/S ArchitectsHive</strong></p><ul><li>Staircase details.</li><li>Door Window Schedule Details.</li><li>Elevation Details.</li><li>Other Details (If Any).</li><li>Remaining Site Visits: 4 Nos.</li><li>Finishing Schedule.</li></ul><p><strong style="background-color: initial;">Stage 4:</strong></p><p><strong style="background-color: initial;">Services By M/S ArchitectsHive</strong></p><ul><li>Consolidated PDF of all Drawings.</li><li>Audio / Video Assistance throught-out the project.</li><li>GST Bill.</li><li>Material Suggestions to Execute Design throughuot the project.</li><li>Budget specific suggestions to Execute the work at Site.</li><li>Contractor / Vendor specific suggestions (Their Agreement &amp; Scope of Work).</li></ul><p><br></p>                    </div>

                    <button class="collapsible" onclick="toggleCollapsible(this)">
                        <span>Refund Policy</span>
                        <span>▼</span>
                    </button>
                    <div class="collapsible-content">
                        <p>At ArchitectsHive, we take immense pride in offering high-quality products and services, and your satisfaction is our utmost priority. Due to services business industry we can only entertain any return only in case:</p><ul><li>If the drawings delayed more than 15 working days from the transaction date from the end.</li><li>If any plan/services opted wrongly, exchange of services with a minimum fee of INR 500 can be entertained.</li><li>No other case apart from mentioned above shall be entertained for refund or return.</li></ul><p><br></p>                    </div>

                    <button class="collapsible" onclick="toggleCollapsible(this)">
                        <span>Shipping policy</span>
                        <span>▼</span>
                    </button>
                    <div class="collapsible-content">
                        <ul><li>At ArchitectsHive, these services are started to help builders and clients those are not ready to hire Architects directly.</li><li>We are providing these services at unbeatable prices (Cost to Cost), as an initiative to lead our country for the best practices.</li><li>In that case only PDF files shall be shared by ArchitectsHive over Email, Whatsapp or by any other Online option if asked by client.</li><li>Clients are required to take their own prints if required for working on their sites.</li></ul><p><br></p>                    </div>
                </div>
            </div>

            <!-- Right Section -->
            <div class="right-section">
                <div class="price" id="dynamicPrice">₹18,999.00</div>

                                    <div class="discount-text" id="discountText"  onclick="toggleDiscount()" title="Click to apply discount"
                            data-original-text="Get Discount upto 400 rupee" >
                        Get Discount upto 400 rupee                    </div>
                                            <div id="discountHint" class="discount-hint" onclick="toggleDiscount()">
                            (Click on Get Discount to Get discount)
                        </div>
                                    
                                    <!-- Extra Floor Options -->
                    <div class="option-group">
                        <h3 class="section-title">Extra Floor to be Added:</h3>
                                                    <label class="option-label">
                                <input type="radio" name="floor" value="None"
                                    checked>
                                <span class="option-text">
                                    <span class="option-name">None</span>
                                                                    </span>
                            </label>
                                                    <label class="option-label">
                                <input type="radio" name="floor" value="1"
                                    >
                                <span class="option-text">
                                    <span class="option-name">1</span>
                                                                            <span class="option-price">(+₹15,200.00)</span>
                                                                    </span>
                            </label>
                                                    <label class="option-label">
                                <input type="radio" name="floor" value="2"
                                    >
                                <span class="option-text">
                                    <span class="option-name">2</span>
                                                                            <span class="option-price">(+₹30,400.00)</span>
                                                                    </span>
                            </label>
                                                    <label class="option-label">
                                <input type="radio" name="floor" value="3"
                                    >
                                <span class="option-text">
                                    <span class="option-name">3</span>
                                                                            <span class="option-price">(+₹45,600.00)</span>
                                                                    </span>
                            </label>
                                                    <label class="option-label">
                                <input type="radio" name="floor" value="4"
                                    >
                                <span class="option-text">
                                    <span class="option-name">4</span>
                                                                            <span class="option-price">(+₹60,800.00)</span>
                                                                    </span>
                            </label>
                                            </div>
                
                <!-- Customization Options -->
                <div class="option-group">
                    <h3 class="section-title">Choose Customization:</h3>
                    <div class="checkbox-group">
                        <div class="checkbox-item">
                            <input type="checkbox" id="customOption1" name="customization"
                                value="without-plumbing-electrical">
                            <label for="customOption1">Without Plumbing and Electrical</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" id="customOption2" name="customization"
                                value="without-door-window-schedule">
                            <label for="customOption2">Without Door/Window Schedule and Structure</label>
                        </div>
                    </div>
                </div>

                                    <!-- Elevation Design Options -->
                    <div class="option-group">
                        <h3 class="section-title">Add Elevation Design:</h3>
                                                    <label class="option-label">
                                <input type="checkbox" name="elevation"
                                    value="Front">
                                <span class="option-text">
                                    <span
                                        class="option-name">Front</span>
                                                                            <span class="option-price">(+₹7,750.00)</span>
                                                                    </span>
                            </label>
                                                    <label class="option-label">
                                <input type="checkbox" name="elevation"
                                    value="Rear">
                                <span class="option-text">
                                    <span
                                        class="option-name">Rear</span>
                                                                            <span class="option-price">(+₹7,750.00)</span>
                                                                    </span>
                            </label>
                                                    <label class="option-label">
                                <input type="checkbox" name="elevation"
                                    value="Side 1">
                                <span class="option-text">
                                    <span
                                        class="option-name">Side 1</span>
                                                                            <span class="option-price">(+₹7,750.00)</span>
                                                                    </span>
                            </label>
                                                    <label class="option-label">
                                <input type="checkbox" name="elevation"
                                    value="Side 2">
                                <span class="option-text">
                                    <span
                                        class="option-name">Side 2</span>
                                                                            <span class="option-price">(+₹7,750.00)</span>
                                                                    </span>
                            </label>
                                            </div>
                
                                    <!-- Vastu Incorporation Options -->
                    <div class="option-group">
                        <h3 class="section-title">Vastu Incorporation:</h3>
                                                    <label class="option-label">
                                <input type="radio" name="vastu" value="Not Required"
                                    checked>
                                <span class="option-text">
                                    <span class="option-name">Not Required</span>
                                                                    </span>
                            </label>
                                                    <label class="option-label">
                                <input type="radio" name="vastu" value="Vastu"
                                    >
                                <span class="option-text">
                                    <span class="option-name">Vastu</span>
                                                                            <span class="option-price">(+₹5,000.00)</span>
                                                                    </span>
                            </label>
                                                    <label class="option-label">
                                <input type="radio" name="vastu" value="Scientific Vastu"
                                    >
                                <span class="option-text">
                                    <span class="option-name">Scientific Vastu</span>
                                                                            <span class="option-price">(+₹51,000.00)</span>
                                                                    </span>
                            </label>
                                            </div>
                
                                    <!-- Extra Site Visits -->
                    <div class="option-group">
                        <h3 class="section-title">Extra Site Visits:</h3>
                                                    <label class="option-label">
                                <input type="radio" name="visits" value="None"
                                    checked>
                                <span class="option-text">
                                    <span class="option-name">None Site
                                        Visits</span>
                                                                    </span>
                            </label>
                                                    <label class="option-label">
                                <input type="radio" name="visits" value="5 Site Visits"
                                    >
                                <span class="option-text">
                                    <span class="option-name">5 Site Visits Site
                                        Visits</span>
                                                                            <span class="option-price">(+₹8,250.00)</span>
                                                                    </span>
                            </label>
                                                    <label class="option-label">
                                <input type="radio" name="visits" value="10 Site Visits"
                                    >
                                <span class="option-text">
                                    <span class="option-name">10 Site Visits Site
                                        Visits</span>
                                                                            <span class="option-price">(+₹16,000.00)</span>
                                                                    </span>
                            </label>
                                                    <label class="option-label">
                                <input type="radio" name="visits" value="15 Site Visits"
                                    >
                                <span class="option-text">
                                    <span class="option-name">15 Site Visits Site
                                        Visits</span>
                                                                            <span class="option-price">(+₹23,250.00)</span>
                                                                    </span>
                            </label>
                                                    <label class="option-label">
                                <input type="radio" name="visits" value="20 Site Visits"
                                    >
                                <span class="option-text">
                                    <span class="option-name">20 Site Visits Site
                                        Visits</span>
                                                                            <span class="option-price">(+₹30,000.00)</span>
                                                                    </span>
                            </label>
                                            </div>
                
                <div class="share-pricing-container" style="margin-bottom: 20px;">
                    <button onclick="sharePricing()"
                        style="background: none; border: 1px solid #1a1a1a; padding: 8px 16px; border-radius: 6px; cursor: pointer; font-size: 13px; font-weight: 600; display: flex; align-items: center; gap: 8px;">
                        <i class="fas fa-share-alt"></i> Share Pricing
                    </button>
                    <span id="shareMessage"
                        style="font-size: 12px; color: #27ae60; display: none; margin-left: 10px;">Link Copied!</span>
                </div>

                <div class="in-stock">✓ In Stock</div>

                <div class="button-container" style="margin-bottom: 30px;">
                    <button class="add-to-cart-btn" onclick="addToCart()">Add to Bag</button>
                    <button class="buy-now-btn" onclick="buyNow()">Buy Now</button>
                </div>

                <!-- Info Sections (Mobile Only - Moved below options) -->
                <div class="mobile-only">
                    <button class="collapsible active" onclick="toggleCollapsible(this)">
                        <span>Read More</span>
                        <span>▼</span>
                    </button>
                    <div class="collapsible-content show">
                        <p><strong>Design Package Details:</strong></p><ul><li>Design Options: 02 Nos. Concept Drawings</li><li>Site Visits: 03 Nos.</li><li>Concept PPT For Reference of Interior &amp; Exterior of the Building.</li><li>As per Accurate Measurements.</li><li>Design By Architects Only.</li><li>Following shall be provided in Package:</li><li class="ql-indent-1">Architectural Drawings</li><li class="ql-indent-1">Structural Drawings</li><li class="ql-indent-1">Electrical Drawings</li><li class="ql-indent-1">Plumbing Drawings</li><li class="ql-indent-1">Water Supply Drawings</li><li class="ql-indent-1">Staircase Details</li><li class="ql-indent-1">Door Window Details</li><li class="ql-indent-1">Finishing Schedule</li><li>Drawings shall be delivered in 07 Working Days of concept Finalization after payment.</li><li>Contractor/Vendor Specific Suggestion</li><li>Material &amp; Budget Specific Suggestion</li><li>GST Billing: M/S Arya Enterprises</li><li>Part Payment Available</li><li>Non-Refundable Payments</li><li>Above package is applicable only for typical floor additional floor shall be charged as provided seperately.</li><li>Audio/Video Assistance throughout the Project, as complimentary services by M/S ArchitectsHive.</li><li>Site Visits are not applicable outside Delhi-Noida-Gurugram Metro influenced area in Delhi NCR.</li><li>No Refund for non-applicable site visits shall be made as, Site Visits are complimentary from M/S ArchitectsHive.</li></ul><p><br></p>                    </div>

                    <button class="collapsible" onclick="toggleCollapsible(this)">
                        <span>Payment Stages</span>
                        <span>▼</span>
                    </button>
                    <div class="collapsible-content">
                        <p><strong style="background-color: initial;">Enjoy a 10% discount on full payment using promo code! :&nbsp;</strong><strong style="background-color: initial; color: rgb(192, 80, 77);">INSTANT10</strong></p><p><strong style="background-color: initial;">Stage 1:&nbsp;</strong><strong style="background-color: initial; color: rgb(192, 80, 77);">COUPON CODE: STAGE1</strong></p><p><strong style="background-color: initial;">Services By M/S ArchitectsHive</strong></p><ul><li>1st Site Visit: (Measurement &amp; Requirements).</li><li>Consultancy Agreement.</li><li>Two Options of Layout (Concept Designs) as per client requirements.</li><li>Concept PPT for Interior &amp; Exterior options as per Client requirements.</li></ul><p><strong style="background-color: initial;">Stage 2:&nbsp;</strong><strong style="background-color: initial; color: rgb(192, 80, 77);">COUPON CODE: STAGE2</strong></p><p><strong style="background-color: initial;">Services By M/S ArchitectsHive</strong></p><ul><li>Architectural Working Drawings.</li><li>Structural Working Drawings.</li><li>Electrical Drawings.</li><li>Water Supply &amp; Plumbing working Drawings.</li><li>3D View for Designed Elevation (if applicable).</li></ul><p><strong style="background-color: initial;">Stage 3:&nbsp;</strong><strong style="background-color: initial; color: rgb(192, 80, 77);">COUPON CODE: STAGE3</strong></p><p><strong style="background-color: initial;">Services By M/S ArchitectsHive</strong></p><ul><li>Staircase details.</li><li>Door Window Schedule Details.</li><li>Elevation Details.</li><li>Other Details (If Any).</li><li>Remaining Site Visits: 4 Nos.</li><li>Finishing Schedule.</li></ul><p><strong style="background-color: initial;">Stage 4:</strong></p><p><strong style="background-color: initial;">Services By M/S ArchitectsHive</strong></p><ul><li>Consolidated PDF of all Drawings.</li><li>Audio / Video Assistance throught-out the project.</li><li>GST Bill.</li><li>Material Suggestions to Execute Design throughuot the project.</li><li>Budget specific suggestions to Execute the work at Site.</li><li>Contractor / Vendor specific suggestions (Their Agreement &amp; Scope of Work).</li></ul><p><br></p>                    </div>

                    <button class="collapsible" onclick="toggleCollapsible(this)">
                        <span>Refund Policy</span>
                        <span>▼</span>
                    </button>
                    <div class="collapsible-content">
                        <p>At ArchitectsHive, we take immense pride in offering high-quality products and services, and your satisfaction is our utmost priority. Due to services business industry we can only entertain any return only in case:</p><ul><li>If the drawings delayed more than 15 working days from the transaction date from the end.</li><li>If any plan/services opted wrongly, exchange of services with a minimum fee of INR 500 can be entertained.</li><li>No other case apart from mentioned above shall be entertained for refund or return.</li></ul><p><br></p>                    </div>

                    <button class="collapsible" onclick="toggleCollapsible(this)">
                        <span>Shipping policy</span>
                        <span>▼</span>
                    </button>
                    <div class="collapsible-content">
                        <ul><li>At ArchitectsHive, these services are started to help builders and clients those are not ready to hire Architects directly.</li><li>We are providing these services at unbeatable prices (Cost to Cost), as an initiative to lead our country for the best practices.</li><li>In that case only PDF files shall be shared by ArchitectsHive over Email, Whatsapp or by any other Online option if asked by client.</li><li>Clients are required to take their own prints if required for working on their sites.</li></ul><p><br></p>                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="cart-icon-floating" onclick="viewCart()">
        <i class="fas fa-shopping-bag"></i>
        <div class="cart-count-badge" id="cartCount">0</div>
    </div>

    <script>
        // Price configuration
        const priceConfig = {
            base: 18999.00,
            discountAmount: 250.00,
            customizationOption1Discount: 15.00,
            customizationOption2Discount: 15.00,
            floor: {
                                        'None': 0.00,
                                        '1': 15200.00,
                                        '2': 30400.00,
                                        '3': 45600.00,
                                        '4': 60800.00,
                            },
            elevation: {
                                        'Front': 7750.00,
                                        'Rear': 7750.00,
                                        'Side 1': 7750.00,
                                        'Side 2': 7750.00,
                            },
            vastu: {
                                        'Not Required': 0.00,
                                        'Vastu': 5000.00,
                                        'Scientific Vastu': 51000.00,
                            },
            visits: {
                                        'None': 0.00,
                                        '5 Site Visits': 8250.00,
                                        '10 Site Visits': 16000.00,
                                        '15 Site Visits': 23250.00,
                                        '20 Site Visits': 30000.00,
                            }
        };

        let isDiscountApplied = false;

        // Function to toggle discount
        function toggleDiscount() {
            if (priceConfig.discountAmount <= 0) return;

            const discountText = document.getElementById('discountText');
            const discountHint = document.getElementById('discountHint');

            if (!isDiscountApplied) {
                // Apply Discount
                isDiscountApplied = true;

                // Fire Confetti
                confetti({
                    particleCount: 150,
                    spread: 70,
                    origin: { y: 0.6 }
                });

                discountText.classList.add('applied');
                discountText.innerHTML = `🎉 You get extra ₹${priceConfig.discountAmount} discount!`;
                if (discountHint) discountHint.style.display = 'none';
            } else {
                // Remove Discount
                isDiscountApplied = false;

                discountText.classList.remove('applied');
                discountText.innerHTML = discountText.getAttribute('data-original-text');
                if (discountHint) discountHint.style.display = 'block';
            }

            updatePrice();
        }


        // Function to calculate total price
        function calculatePrice() {
            let baseAndFloorPrice = priceConfig.base;
            let additionalPrice = 0;

            // Add floor price
            const floorInput = document.querySelector('input[name="floor"]:checked');
            let floorPrice = 0;
            if (floorInput) {
                floorPrice = priceConfig.floor[floorInput.value] || 0;
                baseAndFloorPrice += floorPrice;
            }

            // Add elevation prices (NOT included in customization discount calculation)
            const elevations = document.querySelectorAll('input[name="elevation"]:checked');
            elevations.forEach(elev => {
                additionalPrice += priceConfig.elevation[elev.value] || 0;
            });

            // Add vastu price (NOT included in customization discount calculation)
            const vastuInput = document.querySelector('input[name="vastu"]:checked');
            if (vastuInput) {
                additionalPrice += priceConfig.vastu[vastuInput.value] || 0;
            }

            // Add visits price (NOT included in customization discount calculation)
            const visitsInput = document.querySelector('input[name="visits"]:checked');
            if (visitsInput) {
                additionalPrice += priceConfig.visits[visitsInput.value] || 0;
            }

            // Apply individual customization discounts ONLY to base + floor price
            let customizationDiscount = 0;
            const customizationCheckboxes = document.querySelectorAll('input[name="customization"]');
            customizationCheckboxes.forEach(checkbox => {
                if (checkbox.checked) {
                    // Check which option is selected based on the value or index
                    const customizationIndex = Array.from(customizationCheckboxes).indexOf(checkbox);
                    if (customizationIndex === 0) {
                        // Option 1 selected
                        customizationDiscount += baseAndFloorPrice * (priceConfig.customizationOption1Discount / 100);
                    } else if (customizationIndex === 1) {
                        // Option 2 selected
                        customizationDiscount += baseAndFloorPrice * (priceConfig.customizationOption2Discount / 100);
                    }
                }
            });

            let baseAndFloorWithDiscount = baseAndFloorPrice - customizationDiscount;

            // Calculate total
            let total = baseAndFloorWithDiscount + additionalPrice;

            // Apply discount
            if (isDiscountApplied) {
                total -= priceConfig.discountAmount;
            }

            return total;
        }

        // Function to update total price display
        function updatePrice() {
            const total = calculatePrice();
            document.getElementById('dynamicPrice').textContent = '₹' + total.toLocaleString('en-IN', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
        }

        // Add event listeners to all price-affecting inputs
        document.querySelectorAll('input[name="floor"], input[name="elevation"], input[name="vastu"], input[name="visits"], input[name="customization"]').forEach(input => {
            input.addEventListener('change', updatePrice);
        });

        // Global variable to track if we are editing an existing item
        let editingCartItemId = null;

        // Parse URL params to set initial state
        window.addEventListener('DOMContentLoaded', () => {
            const urlParams = new URLSearchParams(window.location.search);

            // Check if we are editing a cart item
            if (urlParams.has('cart_item_id')) {
                editingCartItemId = urlParams.get('cart_item_id');
                // Change button text to "Update Cart"
                // Use correct class selector found in HTML
                const addToBagBtn = document.querySelector('.add-to-cart-btn');
                if (addToBagBtn) {
                    addToBagBtn.innerHTML = '<i class="fas fa-shopping-bag"></i> Update Cart';
                }
            }

            // Set Floor
            if (urlParams.has('floor')) {
                const floorVal = urlParams.get('floor');
                const radio = document.querySelector(`input[name="floor"][value="${floorVal}"]`);
                if (radio) {
                    radio.checked = true;
                    radio.dispatchEvent(new Event('change', { bubbles: true }));
                }
            }

            // Set Elevations (Comma separated)
            if (urlParams.has('elevation')) {
                const elevVals = urlParams.get('elevation').split(',').map(val => val.trim());
                // Uncheck all first
                document.querySelectorAll('input[name="elevation"]').forEach(el => el.checked = false);
                elevVals.forEach(val => {
                    const checkbox = document.querySelector(`input[name="elevation"][value="${val}"]`);
                    if (checkbox) {
                        checkbox.checked = true;
                        checkbox.dispatchEvent(new Event('change', { bubbles: true }));
                    }
                });
            }

            // Set Vastu
            if (urlParams.has('vastu')) {
                const vastuVal = urlParams.get('vastu');
                const radio = document.querySelector(`input[name="vastu"][value="${vastuVal}"]`);
                if (radio) {
                    radio.checked = true;
                    radio.dispatchEvent(new Event('change', { bubbles: true }));
                }
            }

            // Set Visits
            if (urlParams.has('visits')) {
                const visitsVal = urlParams.get('visits');
                const radio = document.querySelector(`input[name="visits"][value="${visitsVal}"]`);
                if (radio) {
                    radio.checked = true;
                    radio.dispatchEvent(new Event('change', { bubbles: true }));
                }
            }

            // Set Discount
            if (urlParams.has('discount') && urlParams.get('discount') === '1') {
                // Try to apply discount if not already applied
                if (!isDiscountApplied) toggleDiscount();
            }

            // Set Customizations (Comma separated)
            if (urlParams.has('customization')) {
                const customVals = urlParams.get('customization').split(',').map(val => val.trim()); // Trim whitespace
                customVals.forEach(val => {
                    const checkbox = document.querySelector(`input[name="customization"][value="${val}"]`);
                    if (checkbox) {
                        checkbox.checked = true;
                        checkbox.dispatchEvent(new Event('change', { bubbles: true }));
                    }
                });
            }

            updatePrice();
        });

        function sharePricing() {
            const params = new URLSearchParams();

            // Get Floor
            const floor = document.querySelector('input[name="floor"]:checked');
            if (floor) params.set('floor', floor.value);

            // Get Elevations
            const elevations = Array.from(document.querySelectorAll('input[name="elevation"]:checked')).map(el => el.value);
            if (elevations.length > 0) params.set('elevation', elevations.join(','));

            // Get Vastu
            const vastu = document.querySelector('input[name="vastu"]:checked');
            if (vastu) params.set('vastu', vastu.value);

            // Get Visits
            const visits = document.querySelector('input[name="visits"]:checked');
            if (visits) params.set('visits', visits.value);

            // Get Customizations
            const customizations = Array.from(document.querySelectorAll('input[name="customization"]:checked')).map(c => c.value);
            if (customizations.length > 0) params.set('customization', customizations.join(','));

            // Get Discount State
            if (isDiscountApplied) params.set('discount', '1');

            const shareUrl = `${window.location.origin}${window.location.pathname}?${params.toString()}`;

            navigator.clipboard.writeText(shareUrl).then(() => {
                const msg = document.getElementById('shareMessage');
                msg.style.display = 'inline';
                setTimeout(() => {
                    msg.style.display = 'none';
                }, 2000);
            });
        }

        // Function to toggle collapsible sections
        function toggleCollapsible(button) {
            button.classList.toggle('active');
            const content = button.nextElementSibling;
            content.classList.toggle('show');
        }

        // Sync cart to database (if user is logged in)
        function syncCartToDatabase(cart) {
            if (!cart) return Promise.resolve(); // Return resolved promise if no cart

            const basePath = window.location.pathname.includes('/plans/') ? '../' : '';
            return fetch(basePath + 'auth/save_cart.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(cart) // Send the full cart object
            })
                .then(res => res.json())
                .then(data => {
                    if (data.success) {
                        console.log('Cart synced to database');
                    } else if (data.message !== 'User not logged in') {
                        console.warn('Cart sync warning:', data.message);
                    }
                    return data; // Return data to continue the Promise chain
                })
                .catch(err => {
                    console.error('Failed to sync cart:', err);
                    return { success: false }; // Return something to continue the chain
                });
        }

        // Function to add to cart
        function addToCart() {
            // Collect all selected options with labels
            const selectedFloor = document.querySelector('input[name="floor"]:checked');
            const selectedVastu = document.querySelector('input[name="vastu"]:checked');
            const selectedVisits = document.querySelector('input[name="visits"]:checked');
            const selectedElevations = Array.from(document.querySelectorAll('input[name="elevation"]:checked'));
            const selectedCustomizations = Array.from(document.querySelectorAll('input[name="customization"]:checked'));

            const options = {
                floor: selectedFloor ? { value: selectedFloor.value, price: priceConfig.floor[selectedFloor.value] || 0 } : null,
                elevations: selectedElevations.map(e => ({ value: e.value, price: priceConfig.elevation[e.value] || 0 })),
                vastu: selectedVastu ? { value: selectedVastu.value, price: priceConfig.vastu[selectedVastu.value] || 0 } : null,
                visits: selectedVisits ? { value: selectedVisits.value, price: priceConfig.visits[selectedVisits.value] || 0 } : null,
                customizations: selectedCustomizations.map(c => ({ value: c.value })),
                discountApplied: isDiscountApplied,
                discountAmount: isDiscountApplied ? priceConfig.discountAmount : 0,
                basePrice: priceConfig.base,
                totalPrice: calculatePrice()
            };

            let currentCart = JSON.parse(localStorage.getItem('cart')) || { items: [] };

            // Check if we are starting fresh or not. If structure is different, reset.
            if (!currentCart.items) currentCart = { items: [] };

            const newItem = {
                // If editing, keep the same ID, otherwise generate new
                id: editingCartItemId ? editingCartItemId : 'plan_10_' + Date.now(),
                productId: 'plan_10',
                name: 'Architect Design Package: between 2001 to 2500 Sq.Ft. Projects.',
                image: 'https://raw.githubusercontent.com/aaadityapal/webp/refs/heads/main/2001-2500SQFT.webp',
                price: options.totalPrice,
                details: {
                    basePrice: options.basePrice,
                    floor: options.floor,
                    elevations: options.elevations,
                    vastu: options.vastu,
                    visits: options.visits,
                    customizations: options.customizations,
                    discount: {
                        applied: options.discountApplied,
                        amount: options.discountAmount
                    }
                }
            };

            if (editingCartItemId) {
                // Update existing item
                const index = currentCart.items.findIndex(item => item.id === editingCartItemId);
                if (index !== -1) {
                    currentCart.items[index] = newItem; // REPLACE the item completely
                } else {
                    currentCart.items.push(newItem);
                }
                // Save and Redirect
                localStorage.setItem('cart', JSON.stringify(currentCart));
                document.dispatchEvent(new Event('cartUpdated'));
                // Sync to database BEFORE redirecting
                syncCartToDatabase(currentCart).then(() => {
                    window.location.href = '../cart.html';
                }).catch(() => {
                    // Even if sync fails, redirect to cart
                    window.location.href = '../cart.html';
                });
                return; // Redirect handles the rest
            } else {
                // Add new item
                currentCart.items.push(newItem);
            }

            // Recalculate totals
            const newSubtotal = currentCart.items.reduce((sum, item) => sum + item.price, 0);
            // const gst = newSubtotal * 0.18; // GST Removed

            currentCart.subtotal = newSubtotal;
            currentCart.tax = 0;
            currentCart.total = newSubtotal;

            // Save to localStorage
            localStorage.setItem('cart', JSON.stringify(currentCart));

            // Dispatch cartUpdated event so other components can react
            document.dispatchEvent(new Event('cartUpdated'));

            // Sync cart to database (if user is logged in)
            syncCartToDatabase(currentCart);

            // Update UI
            updateCartCount();

            // Show cart notification
            showCartNotification(
                'Architect Design Package: between 2001 to 2500 Sq.Ft. Projects.',
                'https://raw.githubusercontent.com/aaadityapal/webp/refs/heads/main/2001-2500SQFT.webp',
                options.totalPrice
            );
        }

        function updateCartCount() {
            const currentCart = JSON.parse(localStorage.getItem('cart'));
            const count = currentCart && currentCart.items ? currentCart.items.length : 0;
            const badge = document.getElementById('cartCount');
            if (badge) {
                badge.textContent = count;
                badge.style.display = count > 0 ? 'flex' : 'none';
            }
        }

        // Initial count update
        updateCartCount();

        // Listen for cart updates from other tabs/windows or localStorage changes
        document.addEventListener('cartUpdated', () => {
            console.log('Cart updated event received, refreshing cart count');
            updateCartCount();
        });

        // Also listen to storage changes (for other tabs/windows)
        window.addEventListener('storage', (e) => {
            if (e.key === 'cart') {
                console.log('Cart storage changed, refreshing cart count');
                updateCartCount();
            }
        });

        // Function to show cart notification
        function showCartNotification(productName, productImage, price) {
            const notification = document.getElementById('cartNotification');
            document.getElementById('cartNotifProduct').textContent = productName;
            document.getElementById('cartNotifImage').src = productImage;
            document.getElementById('cartNotifPrice').textContent = '₹' + price.toLocaleString('en-IN', { minimumFractionDigits: 2, maximumFractionDigits: 2 });

            // Show notification
            setTimeout(() => {
                notification.classList.add('show');
            }, 100);

            // Auto-hide after 5 seconds
            setTimeout(() => {
                closeCartNotification();
            }, 5000);
        }

        // Function to close cart notification
        function closeCartNotification() {
            const notification = document.getElementById('cartNotification');
            notification.classList.remove('show');
        }

        // Function to view cart
        function viewCart() {
            window.location.href = '../cart.html';
        }

        // Function to buy now (direct checkout)
        function buyNow() {
            const options = {
                floor: document.querySelector('input[name="floor"]:checked')?.value,
                elevations: Array.from(document.querySelectorAll('input[name="elevation"]:checked')).map(e => e.value),
                vastu: document.querySelector('input[name="vastu"]:checked')?.value,
                visits: document.querySelector('input[name="visits"]:checked')?.value,
                customizations: Array.from(document.querySelectorAll('input[name="customization"]:checked')).map(c => c.value),
                totalPrice: calculatePrice()
            };

            // Create cart data
            const cartData = {
                items: [{
                    id: 'plan_10',
                    name: 'Architect Design Package: between 2001 to 2500 Sq.Ft. Projects.',
                    image: 'https://raw.githubusercontent.com/aaadityapal/webp/refs/heads/main/2001-2500SQFT.webp',
                    price: options.totalPrice,
                    options: {
                        floor: options.floor,
                        elevations: options.elevations,
                        vastu: options.vastu,
                        visits: options.visits,
                        customizations: options.customizations
                    }
                }],
                subtotal: options.totalPrice,
                discount: 0,
                tax: 0, // GST Removed
                total: options.totalPrice,
                email: '',
                coupon: ''
            };

            // Save to localStorage
            localStorage.setItem('cart', JSON.stringify(cartData));

            // Redirect to cart page
            window.location.href = '../cart.html';
        }
    </script>

    <!-- Footer Container (loaded dynamically) -->
    <div id="footer-container"></div>

    <!-- Scripts -->
    <script src="../load-header.js"></script>
    <script src="../load-footer.js"></script>
</body>

</html>