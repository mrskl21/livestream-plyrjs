
<!doctype html>
<html lang="en">
    <head>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.plyr.io/1.8.2/plyr.css">
        <style>
            .footer {
              position: fixed;
              left: 0;
              bottom: 0;
              width: 100%;
              padding: 10px;
              text-align: center;
        }
        </style>
        <title>siTasya - Sistem Pemantauan Masyarakat</title>
        
    </head>
  
	<body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand ml-4" href="#"><b>siTasya - Sistem Pemantauan Masyarakat</b></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>

        <div class="container">
            <div class="row mb-5">
                <div class="col-12">
                    <h5 class="title mt-5">Water Front City 2</h5>
                    <p class="subtitle mb-2 text-muted">Example Player for CCTV</p>
                    <video preload="none" id="player2" autoplay controls crossorigin>
                    
                </div>
            </div>
        </div>

        <footer class="footer bg-light">
            <div class="container">
              <span class="text-muted"><?=date("Y");?> @ Developed by <a href="https://lasahido.id">Lasahido.id</a></span>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdn.plyr.io/1.8.2/plyr.js"></script>
        <script src="https://cdn.jsdelivr.net/hls.js/latest/hls.js"></script>
		<script>
            
			(function () {
				var video2 = document.querySelector('#player2');
			
				if (Hls.isSupported()) {
				var hls = new Hls();
				hls.loadSource('ISI_LINK_STREAMING_DISINI');
				hls.attachMedia(video2);
				hls.on(Hls.Events.MANIFEST_PARSED,function() {
					video.play();
				});
				}
				
				plyr.setup(video2);
			})();
		</script>
		
		
	</body>
</html>
