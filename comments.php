<?php
    //Add to functions.php

    function add_comment_fields_titles($fields) {
        $fields['label_submit'] = 'ارسال دیدگاه';
        $fields['title_reply'] = 'ارسال دیدگاه جدید';
        $fields['cancel_reply_link'] = '&times; بستن';
        return $fields;
    }
    add_filter('comment_form_defaults','add_comment_fields_titles');

    function add_comment_fields($fields) {
        $fields['url'] = ''; // disable website field
        return $fields;
    }
    add_filter('comment_form_default_fields','add_comment_fields');
?>