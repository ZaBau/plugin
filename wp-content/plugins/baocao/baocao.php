<?php
/*
Plugin Name: Multiple Registration Forms
Description: Plugin cho phép admin chọn form và người dùng đăng ký.
Version: 1.2
Author: BG
*/

function mf_enqueue_styles() {
    wp_enqueue_style('mf-form-styles', plugin_dir_url(__FILE__) . 'form.css');
}
add_action('wp_enqueue_scripts', 'mf_enqueue_styles');
add_action('admin_enqueue_scripts', 'mf_enqueue_styles');


function mf_create_table() {
    global $wpdb; 
    $table_name = $wpdb->prefix .'dangky';

    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE IF NOT EXISTS $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT, 
        first_name varchar(255) NOT NULL, 
        last_name varchar(255),
        email varchar(255) NOT NULL, 
        password varchar(255) NOT NULL, 
        display_name varchar(255), 
        phone varchar(20),
        gender varchar(10), 
        dob date,
        address text,
        form_type varchar(20),
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (id),
        UNIQUE (email)
    ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql); 

    if($wpdb->last_error) {
        error_log("Table creation error: " . $wpdb->last_error);
    } else {
        error_log("Table $table_name created or already exists.");
    }
}

register_activation_hook(__FILE__, 'mf_create_table');

function mf_add_admin_menu() {
    add_menu_page(
        'Multi Form Registration',
        'Form Đăng Ký',
        'manage_options',
        'multi_form_registration',
        'mf_render_admin_page',
        'dashicons-list-view',
        20
    );
}
add_action('admin_menu', 'mf_add_admin_menu');


function mf_render_admin_page() {
    if (!current_user_can('manage_options')) {
        return;
    }

    if (isset($_POST['select_form'])) {
        $selected_form = sanitize_text_field($_POST['form_type']);
        update_option('mf_selected_form', $selected_form);
        echo '<div class="updated"><p>Form "' . esc_html($selected_form) . '" đã được chọn thành công!</p></div>';
    }

    $current_form = get_option('mf_selected_form', 'form1');
    ?>
    <div class="wrap">
        <h1>Chọn Form Đăng Ký</h1>
        <form method="post">
            <label for="form_type">Chọn Form để người dùng đăng ký:</label>
            <select name="form_type" id="form_type" onchange="this.form.submit()">
                <option value="form1" <?php selected($current_form, 'form1'); ?>>Form Đăng Ký 1</option>
                <option value="form2" <?php selected($current_form, 'form2'); ?>>Form Đăng Ký 2</option>
                <option value="form3" <?php selected($current_form, 'form3'); ?>>Form Đăng Ký 3</option>
            </select>
            <input type="submit" name="select_form" value="OK" class="button button-primary">
        </form>

        <h2>Xem trước form</h2>
        <div>
            <?php
            if (isset($_POST['form_type'])) {
                $selected_form_preview = sanitize_text_field($_POST['form_type']);
                echo chon_form($selected_form_preview);
            } else {
                echo chon_form($current_form);
            }
            ?>
        </div>
    </div>
    <?php
}

function chon_form($form_type) {
    switch ($form_type) {
        case 'form1':
            return render_form1();
        case 'form2':
            return render_form2();
        case 'form3':
            return render_form3();
        default:
            return '<p>Không tìm thấy form tương ứng.</p>';
    }
}

function render_form1() {
    ob_start(); ?>
    <form method="post" action="" style="max-width: 400px; margin: auto;">
        <label for="first_name">First Name</label>
        <input type="text" id="first_name" name="first_name" required>

        <label for="last_name">Last Name</label>
        <input type="text" id="last_name" name="last_name">

        <label for="email">User Email *</label>
        <input type="email" id="email" name="email" required>

        <label for="password">User Password *</label>
        <input type="password" id="password" name="password" required>

        <label for="display_name">Display Name</label>
        <input type="text" id="display_name" name="display_name">

        <label for="phone">Phone</label>
        <input type="tel" id="phone" name="phone">

     
        
        <input type="submit" name="submit_form1" value="Submit" class="button button-primary" style="margin-top: 20px;">
    </form>

    
    <?php
    xuly('form1');
    return ob_get_clean();
}


function render_form2() {
    ob_start(); ?>
 <form method="post" action="">
    <div class="form-row">
        <div class="form-col">
            <label for="first_name">First Name</label>
            <input type="text" id="first_name" name="first_name" required>
        </div>
        <div class="form-col">
            <label for="last_name">Last Name</label>
            <input type="text" id="last_name" name="last_name">
        </div>
    </div>

    <div class="form-row">
        <div class="form-col">
            <label for="email">User Email *</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-col">
            <label for="password">User Password *</label>
            <input type="password" id="password" name="password" required>
        </div>
    </div>

    <div class="form-row">
        <div class="form-col">
            <label for="gender">Gender</label>
            <input type="radio" id="male" name="gender" value="Male" required> Male
            <input type="radio" id="female" name="gender" value="Female"> Female
        </div>
        <div class="form-col">
            <label for="dob">Date of Birth</label>
            <input type="date" id="dob" name="dob">
        </div>
    </div>

    <div class="form-row">
        <div class="form-col">
            <label for="address">Address</label>
            <input type="text" id="address" name="address">
        </div>
    </div>

    <input type="submit" name="submit_form2" value="Submit">
</form>


    <?php
    xuly('form2');
    return ob_get_clean();
}

function render_form3() {
    ob_start(); ?>
    <form method="post" action="">
        <label for="first_name">First Name</label>
        <input type="text" id="first_name" name="first_name" required>

        <label for="last_name">Last Name</label>
        <input type="text" id="last_name" name="last_name">

        <label for="email">User Email *</label>
        <input type="email" id="email" name="email" required>

        <label for="password">User Password *</label>
        <input type="password" id="password" name="password" required>

        <label for="phone">Phone</label>
        <input type="tel" id="phone" name="phone">

        <label for="dob">Date of Birth</label>
        <input type="date" id="dob" name="dob">

        <input type="submit" name="submit_form3" value="Submit">
    </form>
    <?php
    xuly('form3');
    return ob_get_clean();
}

function xuly($form_type) {
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit_' . $form_type])) {
        global $wpdb;
        $table_name = $wpdb->prefix . 'dangky';

        $first_name = sanitize_text_field($_POST['first_name']);
        $last_name = sanitize_text_field($_POST['last_name']);
        $email = sanitize_email($_POST['email']);
        $password = wp_hash_password(sanitize_text_field($_POST['password']));
        $display_name = isset($_POST['display_name']) ? sanitize_text_field($_POST['display_name']) : '';
        $phone = isset($_POST['phone']) ? sanitize_text_field($_POST['phone']) : '';
        $gender = isset($_POST['gender']) ? sanitize_text_field($_POST['gender']) : '';
        $dob = isset($_POST['dob']) ? sanitize_text_field($_POST['dob']) : '';
        $address = isset($_POST['address']) ? sanitize_textarea_field($_POST['address']) : '';

        $wpdb->insert(
            $table_name,
            array(
                'first_name' => $first_name,
                'last_name' => $last_name,
                'email' => $email,
                'password' => $password,
                'display_name' => $display_name,
                'phone' => $phone,
                'gender' => $gender,
                'dob' => $dob,
                'address' => $address,
                'form_type' => $form_type
            )
        );

        $user_id = wp_create_user($email, $_POST['password'], $email);
        if (!is_wp_error($user_id)) {
            wp_update_user(array(
                'ID' => $user_id,
                'display_name' => $first_name . ' ' . $last_name,
                'role' => 'subscriber'
            ));
            echo '<div class="updated"><p>Đăng ký thành công cho ' . esc_html($first_name) . ' ' . esc_html($last_name) . '!</p></div>';
        } else {
            echo '<div class="error"><p>Lỗi: ' . esc_html($user_id->get_error_message()) . '</p></div>';
        }
    }
}

function shortcode() {
    $current_form = get_option('mf_selected_form', 'form1');
    return chon_form($current_form);
}
add_shortcode('regis', 'shortcode');
