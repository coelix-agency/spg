/**
 * Build
 * @type {{init: Build.init}}
 */
const Build = function () {

    /**
     * Video
     */
    const Video = function () {

        /**
         * Navbar Menu
         */
        $(document).on('click', '.videoPsevdoLink', function(e) {
            e.preventDefault();

            const   $this   = $(this),
                    video   = $this.data('video'),
                    iframe = document.createElement('iframe');

            var url = video.replace("watch?v=", "embed/"),
                url = url.replace("vimeo.com/", "player.vimeo.com/video/");

            iframe.src      = url + '?enablejsapi=1&origin=' + window.location.origin + '&autoplay=1&mute=1';
            iframe.width    = '100%';
            iframe.height   = '400';
            iframe.allowFullscreen   = true;

            iframe.allow   = 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture';

            $this.html(iframe);

            $this.removeClass('videoPsevdoLink');



        });


    }

    /**
     * Init
     */
	return {
		init: function () {
            Video();
		}
	};

}();


/**
 * ready
 */
jQuery(document).ready(function() {
    Build.init();
});



