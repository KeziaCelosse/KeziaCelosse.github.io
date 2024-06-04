  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-3">

	<div align="right"/>
	<button class="button" onclick="window.location.href = 'https://metalabs.id/campus/avatar/avatar.php'">Avatar</button>
	<button class="button" onclick="displayIframe()">Create Avatar</button>
	</div>
	<hr/>
	<img align="right" id="avatar_banner" src="../image/home.jpg" width="100%"/>
	<iframe id="frame" width="100%" height="700px" frameborder="0" scrolling="no" allow="camera *; microphone *; clipboard-write" hidden></iframe>
    <p id="avatarUrl"></p>
    <script>
        const subdomain = 'metalabs'; // Replace with your custom subdomain
        const frame = document.getElementById('frame');

        frame.src = `https://${subdomain}.readyplayer.me/avatar?frameApi`;

        window.addEventListener('message', subscribe);
        document.addEventListener('message', subscribe);

        function subscribe(event) {
            const json = parse(event);

            if (json?.source !== 'readyplayerme') {
                return;
            }

            // Susbribe to all events sent from Ready Player Me once frame is ready
            if (json.eventName === 'v1.frame.ready') {
                frame.contentWindow.postMessage(
                    JSON.stringify({
                        target: 'readyplayerme',
                        type: 'subscribe',
                        eventName: 'v1.**'
                    }),
                    '*'
                );
            }

            // Get avatar GLB URL
            if (json.eventName === 'v1.avatar.exported') {
                console.log(`Avatar URL: ${json.data.url}`);
                document.getElementById('avatarUrl').innerHTML = `${json.data.url}`;
                document.getElementById('frame').hidden = true;
                let data = `${json.data.url}`;
                document.cookie = "data=" + data;
                window.location.href = "https://metalabs.id/campus/avatar/avatar.php";
            }

            // Get user id
            if (json.eventName === 'v1.user.set') {
                console.log(`User with id ${json.data.id} set: ${JSON.stringify(json)}`);
            }
        }

        function parse(event) {
            try {
                return JSON.parse(event.data);
            } catch (error) {
                return null;
            }
        }

        function displayIframe() {
			var img = document.getElementById("avatar_banner");
			img.style.display = "none";
            document.getElementById('frame').hidden = false;
        }
		
    </script>
				
			</div>
		</div>
	  
	  
		</div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
