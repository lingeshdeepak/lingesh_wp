jQuery(document).ready(function($) {
    var page = 2; // Initial page number for loading more testimonials

    // AJAX request when clicking the "Load More" button
    jQuery('#load-more-testimonials').on('click', function() {
        var data = {
            'action': 'load_more_testimonials',
            'page': page,
            'security': ajax_testimonials_params.security,
        };

        $.post(ajax_testimonials_params.ajax_url, data, function(response) {
            if (response.success) {
                jQuery('#testimonials-container').append(response.data); // Append new testimonials HTML
                page++; // Increment page number for the next load
            } else {
                jQuery('#load-more-testimonials').remove(); // Remove button if no more testimonials
            }
        });
    });
});
