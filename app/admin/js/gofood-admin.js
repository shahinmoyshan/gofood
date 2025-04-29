(function ($) {
    'use strict';

    /**
     * All of the code for your admin-facing JavaScript source
     * should reside in this file.
     *
     * Note: It has been assumed you will write jQuery code here, so the
     * $ function reference has been prepared for usage within the scope
     * of this function.
     *
     * This enables you to define handlers, for when the DOM is ready:
     *
     * $(function() {
     *
     * });
     *
     * When the window is loaded:
     *
     * $( window ).load(function() {
     *
     * });
     *
     * ...and/or other possibilities.
     *
     * Ideally, it is not considered best practise to attach more than a
     * single DOM-ready or window-load handler for a particular page.
     * Although scripts in the WordPress core, Plugins and Themes may be
     * practising this, we should strive to set a better example in our own work.
     */

    $(document).ready(() => {
        $('#product_category_image_upload_button').on('click', function (e) {
            e.preventDefault();

            // Create the media frame.
            var mediaUploader = wp.media({
                title: 'Select or Upload Image',
                button: { text: 'Use this image' },
                multiple: false
            });

            // When an image is selected, run a callback.
            mediaUploader.on('select', function () {
                var attachment = mediaUploader.state().get('selection').first().toJSON();
                $('#product_category_image_id').val(attachment.id);

                // Display image preview
                $('#product_category_image_preview').html(`<img src="${attachment.url}" style="max-width:100px;margin-top:10px;" />`);
            });

            // Open the modal
            mediaUploader.open();
        });
    });

})(jQuery);
