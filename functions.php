<?php
    function theme_files(){
        // Activate Stylesheets
        wp_enqueue_style("custom-css", get_stylesheet_uri());
        wp_enqueue_style("bootstrap-css", get_theme_file_uri("/assets/bootstrap-4.6.0-dist/css/bootstrap.min.css"));
        wp_enqueue_style("flickity-css", get_theme_file_uri("/assets/flickity.css"));

        // Activate js Scripts
        wp_enqueue_script("bootstrap-js", get_theme_file_uri("/assets/bootstrap-4.6.0-dist/js/bootstrap.bundle.min.js"), NULL, 1.0, true);
        wp_enqueue_script("custom-js", get_theme_file_uri("/assets/script.js"), array('jquery'), 1.0, true);
    
    }
    add_action("wp_enqueue_scripts", "theme_files");

    /* Hook to remove admin bar */
    add_action('after_setup_theme', 'remove_admin_bar');
 
    /* Function to remove admin bar for users */
    function remove_admin_bar() {
        show_admin_bar(false);
        // if (!current_user_can('administrator') && !is_admin()) {
        // show_admin_bar(false);
        // }
    }

    function theme_features(){
        add_theme_support('title-tag');
    }
    
    /* 
        METABOX.IO SPECIFIC FUNCTIONS
    */

    // Function get the url of metabox single image field
    function get_mb_image_url($key, $id=null){
        $image = rwmb_meta($key, array(), $id);
        return $image['full_url'];
    }

    // Function get the alt of metabox single image field
    function get_mb_image_alt($key, $id=null){
        $image = rwmb_meta($key, array(), $id);
        return $image['alt'];
    }

    function in_words($num){
        $output = "";

        switch($num) {
            case "0": $output = "Zero";
            break;
            case "1": $output = "One";
            break;
            case "2": $output = "Two";
            break;
            case "3": $output = "Three";
            break;
            case "4": $output = "Four";
            break;
            case "5": $output = "Five";
            break;
            case "6": $output = "Six";
            break;
            case "7": $output = "Seven";
            break;
            case "8": $output = "Eight";
            break;
            case "9": $output = "Nine";
            break;
            case "10": $output = "Ten";
            break;
            case "11": $output = "Eleven";
            break;
            case "12": $output = "Twelve";
            break;
            case "13": $output = "Thirteen";
            break;
            case "14": $output = "Fourteen";
            break;
            case "15": $output = "Fifteen";
            break;
            case "16": $output = "Sixteen";
            break;
            case "17": $output = "Seventeen";
            break;
            case "18": $output = "Eighteen";
            break;
            case "19": $output = "Nineteen";
            break;
            case "20": $output = "Twenty";
            break;
            case "21": $output = "Twentyone";
            break;
            case "22": $output = "Twentytwo";
            break;
            case "23": $output = "Twentythree";
            break;
            case "24": $output = "Twentyfour";
            break;
            case "25": $output = "Twentyfive";
            break;
            case "26": $output = "Twentysix";
            break;
            case "27": $output = "Twentyseven";
            break;
            case "28": $output = "Twentyeight";
            break;
            case "29": $output = "Twentynine";
            break;
            case "30": $output = "Thirty";
            break;
            default: $output="";
        }

        return $output;
    }