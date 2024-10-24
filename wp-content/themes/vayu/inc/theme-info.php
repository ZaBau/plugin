<style>
    .vayu-themeinfo-page--wrapper {
        background: #fff;
        padding: 50px;
        margin: 20px 20px;
    }
    a.vayu-button.button-primary {
        background: #1d2327;
        border: none;
    }
    .vayu-features {
        display: flex;
        flex-wrap: wrap;
        margin: 30px -15px 0;
    }
    .vayu-features > div {
        flex: 0 0 30%;
        padding: 15px;
        background: #f7f7f7;
        margin: 0 10px 20px;
        border-radius: 10px;
    }
    .vayu-features-box i {
        background: #fff;
        height: 60px;
        width: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        font-size: 33px;
        border: 1px solid #ebe2e2;
        box-shadow: 0 0 10px #c8c2c2;
    }
    .vayu-themeinfo-page--wrapper p {
        font-size: 16px;
    }
</style>

<div class="vayu-themeinfo-page--wrapper">
    <div id="vayu-admin-about-page">
        <div class="vayu-admin-card-header">
            <div class="vayu-header-left">
                <h2>
                    <?php echo esc_html( $theme->Name ); ?>
                </h2>
                <p>
                    <?php esc_html_e( 'Elevate your e-commerce presence with Vayu, a state-of-the-art WordPress theme designed for full-site editing. Enjoy a seamless website customization experience, with every element easily adjustable to suit your needs. From dynamic product displays to personalized store showcases, Vayu enables you to create a modern, urban-inspired online shop that reflects your unique style. With its intuitive controls and visually stunning layouts, this theme transforms your WordPress journey into a creative exploration of urban aesthetics and functional design. Welcome to Vayu – where your online store becomes a canvas for your digital expression.', 'vayu' ); ?>
                </p>
            </div>
        </div>   
        <div class="vayu-features">
            <div class="vayu-features-box">
                <i class="dashicons dashicons-layout"></i>
                <h3> <?php esc_html_e( 'Multiple Patterns', 'vayu' ); ?></h3>
                <p><?php esc_html_e( 'Select from a variety of pre-designed Patterns to craft the perfect structure for your content. Whether you need a FAQ section, about section or a gallery section. Vayu has everything that you need under one roof.', 'vayu' ); ?></p>
            </div>
            <div class="vayu-features-box">
                <i class="dashicons dashicons-wordpress"></i>               
                <h3> <?php esc_html_e( 'WooCommerce Compatibility', 'vayu' ); ?></h3>
                <p><?php esc_html_e( 'Designed with seamless integration in mind, Vayu theme ensures that every feature and function of WooCommerce works flawlessly. Say goodbye to compatibility issues and hello to a smooth, efficient shopping experience.', 'vayu' ); ?></p>
            </div>
            <div class="vayu-features-box">
                <i class="dashicons dashicons-media-document"></i>
                <h3> <?php esc_html_e( 'Inbuilt Templates', 'vayu' ); ?></h3>
                <p><?php esc_html_e( 'We have some pre-designed page layouts Like about-us page and contact page etc. By using inbuilt templates, users can avoid the cost of hiring a professional designer for basic projects, making it a cost-effective solution for small businesses, startups, and individuals.', 'vayu' ); ?></p>
            </div>
        </div>
    </div>
</div>